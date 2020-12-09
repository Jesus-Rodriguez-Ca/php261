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

if (isset($_POST['reg_user'])) {
    //lets receive all the information
    $FirstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
    $Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']); 

    // The array push function will be able to add the exact error that we will be referring to



    if (empty($FirstName)) {
        array_push($errors, 'First Name is required');
    }
    if (empty($LastName)) {
        array_push($errors, 'Last Name is required');
    }
    if (empty($UserName)) {
        array_push($errors, 'User Name is required');
    }
    if (empty($Email)) {
        array_push($errors, 'Email is required');
    }
    if (empty($Password_1)) {
        array_push($errors, 'Password is required');
    }
    if ($Password_1 != $Password_2) {
        array_push($errors, 'Passwords do not match!');
    }

    // check if there is a username or email out there that I would like to use

    $User_check_query = " SELECT * FROM Users WHERE UserName = '$UserName' OR Email = '$Email' LIMIT 1";

    $result = mysqli_query($db, $User_check_query);
    $user = mysqli_fetch_assoc($result);


    // Check for duplicated users
    if ($user) {
        if ($user['UserName'] == $UserName) {
            array_push($errors, 'Username already exists');
        }
        if ($user['Email'] == $UserName) {
            array_push($errors, 'Email already exists');
        }
    } // End Duplicate of user


    // there was an isset end curly brace here

    // If everything is okay - if there are NO ERRORS 


    if (count($errors) == 0) {
        $Password = md5($Password_1);

        $query = "INSERT INTO Users (FirstName, LastName, UserName, Email, Password) 
              VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password') ";
        mysqli_query($db, $query);

        $_SESSION['UserName'] = $UserName;
        $_SESSION['success'] = $success;

        header('Location: login.php');
    } // end count


} // end isset


// we will return to the server.php to enter the login information!!!

if (isset($_POST['login_user'])) {       ###### ### CAPITAL 'L' in login _user????????????????????????
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);


    // Check that field are not empty
    if (empty($UserName)) {
        array_push($errors, 'Username is required');
    }
    if (empty($Password)) {
        array_push($errors, 'Password is required');
    }
    if (count($errors) == 0) {
        $Password = md5($Password);

        $query = "SELECT * FROM Users WHERE UserName = '$UserName' AND Password = '$Password' ";
    
        $result = mysqli_query($db, $query);

        if(mysqli_num_rows($result) == 1){
           
            $_SESSION['UserName'] = $UserName;

            $_SESSION['success'] = $success;

        header('Location: index.php');

        }else{
            array_push($errors, 'Wrong username/password combination');
        } // Else statement
    } // End checking password

} // End isset Login User verification
