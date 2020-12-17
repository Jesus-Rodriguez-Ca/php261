<?php 
//function greeting(){
//    echo 'hello';
//}
//greeting();
//
//function greeting(){
//    return 'hello!';
//}
//$variable = greeting());
//echo variable;


// Lets create a function to find the area of a rectangle

function getArea($width, $height){
    $calculation = $width * $height;
    return $calculation;
}
$calculation = getArea(10, 20);
echo $calculation.', ';


$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function myNav($nav){
    $myReturn = implode(', ', $nav);
    return $myReturn;
}

echo myNav($nav);

echo '<br>';

function popupad1(){
    
    echo '
    <h2>This is my pop up ad number 1!!!</h2>
    <h2>This is my pop up ad number 1!!!</h2>
    <h2>This is my pop up ad number 1!!!</h2>
    <h2>This is my pop up ad number 1!!!</h2>
    
    ';
}


popupad1();
  
echo '<br>';  

function popupad2(){
    
    $return = '
    <h2>This is my pop up ad number 2!!!</h2>
    <img src="" alt="i voted">
    
    ';
    return $return;
}

echo popupad2();
