<?php
include('config.php'); 
include('includes/header.php');
?>

<h1 class="table1"><?php echo $mainHeadline; ?></h1>
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
                             <td class="big"><?php echo $row['Name'];   ?></td>
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
    include ('includes/footer.php');
?>