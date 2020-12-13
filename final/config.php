<?php 
// this will be our file that we will link to the credencials.php
ob_start(); // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); // we want to see our errors

include('credentials.php'); 





$Name ='';
$email ='';
$privacy = '';
$comments = '';
$tel = '';
$games = '';
$console='';

$NameErr ='';
$emailErr ='';
$privacyErr = '';
$commentsErr = '';
$telErr = '';
$gamesErr = '';
$consoleErr='';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
    if(empty($_POST['Name'])){
                $NameErr = 'Please enter your name!';
            }else {
                $Name = $_POST['Name'];
            }
    
    if(empty($_POST['email'])){
                $emailErr = 'Please fill out your email!';
            }else {
                $email = $_POST['email'];
            }
    
    if(empty($_POST['console'])){
                $consoleErr = 'You don\'t like Nintendo consoles???';
            }else {
                $console = $_POST['console'];
            }
    if($console == 'Nintendo Switch'){
        $Switch = 'checked';
    }elseif($console == 'Nintendo U'){
        $U = 'checked';
    }
    
    if(empty($_POST['games'])){
                $gamesErr = 'You don\'t like video games? Whattt!!??';
            }else {
                $games = $_POST['games'];
            }
    
    if(empty($_POST['privacy'])){
                $privacyErr = 'Please agree to our rules!';
            }else {
                $privacy = $_POST['privacy'];
            }
    if(empty($_POST['comments'])){
                $commentsErr = 'Please include your comments!';
            }else {
                $comments = $_POST['comments'];
            }
           // if endd user checks the checkboxes, all of them, we want to know
    // implode  thhe array of wines  -  create a function of that!
    
    function myGames(){
        $myReturn = '';
        if (!empty($_POST['games'])){
            $myReturn = implode(', ', $_POST['games']);
        }return $myReturn;      // end if
        
    } // end function
    
    if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Invalid format!';
} else{
$tel = $_POST['tel'];
}
}
    
    
    if(isset($_POST['Name'],
             $_POST['console'],
             $_POST['games'],
             $_POST['comments'],
             $_POST['tel'],
             $_POST['privacy'])){
        
        $to = 'manuelrodriguezc29@gmail.com';
        $subject = 'Test email' .date('m/d/y');
        $body = ''. $Name.' has filled out your form ' .PHP_EOL.'';
        $body .= 'Email: '.$email. ' '.PHP_EOL.'';
        $body .= 'Your phone number: '.$tel. ' '.PHP_EOL.'';
        $body .= 'Your games: '.myGames(). ' '.PHP_EOL.'';
        $body .= 'Console: '.$console.' '.PHP_EOL.'';
        $body .= 'comments: '.$comments.'';
        
        $headers = array(
            'From'    => 'no-reply@gmail.com',
            'Reply-to'=> ' '.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        
        
    }// end isset
    
} // close if $_SERVER REQUEST METHOD
?>























<?php
//PLEASE REMEMBER - THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE
function myerror($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBUG ){
        echo 'Error in file: <b> '.$myFile.'</b> on line: <b> '.$myLine. '</b>' ;
        echo 'Error message: <b>'.$errorMsg.'</b>'; 
        die();
    }else{
        echo ' Houston, we have a problem!';
        die();
    }
}



