<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>My navigation in php</title>
    
    </head>
    <body>
        <nav>
            <ul>
        <?php
                $nav = array(
                    'index.php' => 'Home',
                    'about.php' => 'about',
                    'daily.php' => 'Daily',
                    'gallery.php' => 'Gallery',
                    'customers.php' => 'Customers'  
                );
                            foreach($nav as $key => $value){
                            echo'<li><a href="'.$key.'">'.$value.'</a></li>';
            }
        ?>
            </ul>
        </nav>
    
    
    </body>


</html>