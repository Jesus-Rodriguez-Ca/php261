<?php 

// We will be working with arrays, eventually creating a navigation.


?>


<!--
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="daily.php">Daily</a></li>
    <li><a href="customers.php">Customer</a></li>
    <li><a href="gallery.php">Gallery</a></li>
</ul>

-->

<?php

//      #key         #value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['gallery.php'] = 'Gallery';

$nav = array(
'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'gallery.php' => 'Gallery',
    'customers.php' => 'Customers'  
);
?>
<ul>
    <?php

foreach($nav as $key => $value){
    echo'<li><a href="'.$key.'">'.$value.'</a></li>';
    echo 'This is my '.$value.' page and the name of the php page is '.$key.'<br>';       
    
}
    ?>
</ul>