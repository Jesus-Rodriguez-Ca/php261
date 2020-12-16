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
?>

<div id="wrapper">
<h1 class="<?php echo $center; ?>"><?php echo $mainHeadline; ?></h1>
<p>Today is <?php echo date("l"); ?></p>


         <img class="desktop" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" />
    <h1><?php echo $quote; ?></h1>
            <p><?php echo $content;  ?></p>
        <p>Click below to see all the games coming up in 2021!</p>


       
        
        <ul>
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>

            </div>


<?php include('includes/footer.php');
?>