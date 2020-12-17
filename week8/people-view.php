<?php
//people view page

include('config.php');
//Do you remember the isset $_GET

if(isset($_GET['id'])){
    $id =(int)$_GET['id'];
}else {
    header('Location:games.php');
} //Close if else statement for isset

$sql ='SELECT * FROM Games WHERE id = '.$id.'';

// We are going to conect to database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
// we extrat the data here

$result = mysqli_query($iConn, $sql) or die (myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){ // show the records
    while($row = mysqli_fetch_assoc($result)){
        $Name = stripslashes($row['Name']);
        $Version = stripslashes($row['Version']);
        $Price = stripslashes($row['Price']);
        
       

        $Feedback = '';
    }
}else{
    $Feedback = 'No games';
}// Closing if else statement that displays people and its values

include('includes/header.php'); 
?>

<main>
<h2>Welcome to <?php echo $FirstName; ?>'s Page</h2>
<?php
if($Feedback == ''){
    echo '<ul>';
    echo '<li><b>Name:</b>'.$Name.'</li>';
    echo '<li><b>Version:</b>'.$Version.'</li>';
    echo '<li><b>Price:</b>$'.$Price.'</li>';
    echo '</ul>';

    echo 'br';
    echo '<p><a href="games.php">Go back to the Games Page!</a></p>';
} else{
    echo $Feedback;
    
} // Closes if else statement

?>

</main>
<aside>
<?php
    if($Feedback == ''){
        echo '<img src="uploads/people'.$id.'.jpg" alt="'.$FirstName.'">';
    }else{
        echo $Feedback;
    }
    // release the web server

@mysqli_free_result($result);

// close the connection
@mysqli_close($iConn);
?>
</aside>
<?php include('includes/footer.php'); 