<?php
// In order to view this page, a user must have registered and logged in,
// otherwise, he/she must be directed to do so!!!
session_start();
if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('includes/header.php');
include('config.php');
?>
<div class="table1">
            <table class="content-table">
                <thead>
                    <tr>
                        <th class="big">Id</th>
                        <th class="big">Name</th>
                        <th class="big">Image</th>
                        
                        
                        <th class="big">Version</th>
                        <th class="big">Price</th>
                        <th class="big">Action</th>
                    </tr>
                </thead>
                    <?php 
                        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
                         $db = mysqli_select_db($connection, 'jesuscodes');  

                        $query = 'SELECT * FROM Games';
                        $result = mysqli_query( $connection,$query );

                        while ($row = mysqli_fetch_assoc($result))
                        { 
                            ?>
                             <tr class="active-row">
                             <td class="big"><?php echo $row['id'];   ?></td>
                             <td class="big"><?php echo '<a href="game-view.php?id='.$row['id'].'">'.$row['Name'].'</a>';?></td>
                                  <td>
 
 <?php echo '<img src="data:image/png;base64,'.base64_encode( $row['Image'] ).'"/>';?>
                                </td> 
                                 
                                 <td class="big"><?php echo $row['Version'];    ?></td>
                                 <td class="big"><?php echo '$ '.$row['Price']; ?></td>
                                 <td>
 
 <?php echo '<img src="data:image/png;base64,'.base64_encode( $row['Image2'] ).'"/>';?>
                                </td> 
                                </tr>
                            <?php
                        }
                        ?>
                   
                       

            </table>

            </div>
            <?php
mysqli_free_result($result);

// close the connection
mysqli_close($connection);

    ?>


<?php include('includes/footer.php') ;?>
