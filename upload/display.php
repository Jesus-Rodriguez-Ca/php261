<?php include('config.php'); ?>
<hmtl>
<head>
<title>Display</title>
</head>
<body>
    <div>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Version</th>
                        <th>Price</th>
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
                             <tr>
                             <td><?php echo $row['id'];   ?></td>
                                  <td>
 
 <?php echo '<img src="data:image/png;base64,'.base64_encode( $row['Image'] ).'"/>';?>
                                </td> 
                                 <td><?php echo $row['Name'];   ?></td>
                                 <td><?php echo $row['Version'];    ?></td>
                                 <td><?php echo $row['Price']; ?></td>
                                </tr>
                            <?php
                        }
                        ?>
                   
                       

            </table>

        </form>
    </div>

</body>

</hmtl>