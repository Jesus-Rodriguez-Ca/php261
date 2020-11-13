<?php

// if statement!!!


$salary = 150000;

//if($salary == 200000){
 //  echo 'Yippy and Skippy!!!!!!!!'; 
    
//}else {
//    echo 'Not too hapopy!';
//}

if($salary >= 200000){
    echo 'Yippy and Skippy, and life is good!!!!';
}elseif( $salary >= 100000){
    echo 'Not bad, still happy!!';
}else{
    echo 'I may need to work harder!!';
}


echo '<br>';


// date function that we are going to echo

echo date('Y');
echo '<br>';

echo date('H:i a');
echo '<br>';

echo '<h2>Reset the timezone</h2>';
date_default_timezone_set('America/Los_Angeles');

echo   "The real time is " .date('H:i a');

// if it is th morning, say good morning
// if it is afternoon, say afternoon
// if it is the evening, say good evening

echo '<br>';

echo date('H:i:sa');

$correct_time = date('H:i:sa');

if(correct_time < 10){
    echo ' Good Morning!!';
}elseif(correct_time < 18){
    echo ' Good Afternoon';
}else{
    echo ' Good Evening!';
}

/*
If the name input field is empty, do something!!
else, hen we are hapy!
if  thheinput  field is empty thhen so something will be a message to the user to 
fill out the input field
In the world of phpwe have variables, we also have arrays, ans we alsoo have global varaibles!!

$_POST['name'], $_POST['email], $POST['wines'...etc.

if(empty($_POST['name'])){
    $name_err = 'Please fill out your name';
}else {
    $name = $_POST['name'];
}

*/
