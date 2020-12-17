<?php

include('config.php') ;
include('includes/header.php');

// WE ARE CONNECTING TO THE DATABASE!!!
?>
<main>
<?php
$sql = 'SELECT * FROM People';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// we extrat the data here

$result = mysqli_query($iConn, $sql) or die (myerror(__FILE__,__LINE__,mysqli_error($iConn)));

// do we have more than zero rows

if(mysqli_num_rows($result) > 0){ // show the records
    while($row = mysqli_fetch_assoc($result)){
        //this array will display the contents of your row
        echo '<ul>';  //use a similar a href's value that we use for our switch assignment
        echo '<li class="bold">For more information <a href="people-view.php?id='.$row['PeopleID'].' ">'.$row['FirstName'].'</a></li>';
        echo '<li>'.$row['FirstName'].' '.$row['LastName'].'</li>';
        echo '<li>Occupation: '.$row['Occupation'].'</li>';
        echo '</ul>';
    }//close while statement
} else  { // what if there are no people
    echo 'Nobody home!';
} // close the else statement

// release the web server

@mysqli_free_result($result);

// close the connection
@mysqli_close($iConn);
?>
</main>
<aside>
    <h3>This is my aside</h3>

</aside>


<?php

include('includes/footer.php');
?>