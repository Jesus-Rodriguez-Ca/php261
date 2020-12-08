<?php  //Server Page
session_start();
include('config.php');

//initialize the variable


$FirstName = '';
$LastName = '';
$UserName = '';
$Email = '';
$errors = array();
$success = 'You are now logged in!';


// connect to the database

// Mysql or mysqli??????????????
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


// register the user

if (isset($_POST['Upload'])) {
    //lets receive all the information
    $Name = mysqli_real_escape_string($db, $_POST['Name']);
    $Version = mysqli_real_escape_string($db, $_POST['Version']);
    $Price = mysqli_real_escape_string($db, $_POST['Price']);
    $Image = addslashes(file_get_contents($_FILES['Image']['tmp_name']));

        $query = "INSERT INTO Games (Name, Version, Image, Price) VALUES ('$Name', '$Version', '$Image', '$Price') ";
        $run = mysqli_query($db, $query);

    
    } // end count


