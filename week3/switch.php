<?php
    //For  his exercise, we will learn about isset, the $_GET global varoabl and the
    //switch --- WHEW!
        
    // date_default_timezone_set('America/ LOS_ Angeles');
    
//    $var1 = 'test';
//if (isset($var1)){
//    print_r(isset($var1));
//}else{
//    echo 'It has not been set';
//    }

//is today set, if today is set, yippy skippy!
// else the date functionn for the dar will be assigned to today

if (isset($_GET['today'])){
    
    $today = $_GET['today'];
}else{
    $today = date('l');
    
}

switch($today){
    case 'Friday' : 
        $coffee = 'Friday is latte day!!!';
        $pic = 'latte.jpeg';
        $alt = 'latte';
        $content = "Maytin Paige Dec 2013
Cheap Caramel Latte
I twisted the dollar bill around my finger and then into a bow.
I rolled it up.
I twisted it around my finger once again,
wishing the lady in front of me would order already
instead of asking what EVERY drink was.
I just wanted my latte.
I don't want to have to wait until Christmas just to order it.
Oh my god, lady!  Get out of my way!
Finally, she turned to the man at the other end of the counter, who is waiting for his coffee.
What did you get, Jim?";
        break;
    case 'Saturday' : 
        $coffee = 'Saturday is Regular Joe day!!!';
        $pic = 'regular.jpg';
        $alt = 'Regular Joe';
        break;
    case 'Sunday' : 
        $coffee = 'Sunday is cappucino day!!!';
        $pic = 'Frap.jpg';
        $alt = 'Frappacino';
        break;
    case 'Monday' : 
        $coffee = ' Monday is frappucino day!!!';
        $pic = 'frappacino.jpg';
        $alt = 'frappacino';
        break;
    case 'Tuesday' : 
        $coffee = 'Tuesday is Americano day!!!';
        $pic = 'americano.jpg';
        $alt = 'americano';
        break;
    case 'Wednesday' : 
        $coffee = 'Wednesday is pumpkin latte day!!!';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin latte';
        break;
}


?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Switch page</title>
    </head>
    <body>
        <div id="wrapper">
    <h1><?php echo $coffee; ?></h1>
            <p><?php echo $content;  ?></p>
        <p>Click below to ffnd out what  awsome flavors we have for each day of the week!</p>
        
        <ul>
        <li><a href="switch.php?today=sunday">Sunday</a></li>
        <li><a href="switch.php?today=monday">Monday</a></li>
        <li><a href="switch.php?today=tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=thursday">Thursday</a></li>
        <li><a href="switch.php?today=friday">Friday</a></li>
        <li><a href="switch.php?today=saturday">Saturday</a></li>
        </ul>
        <img src="<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
            </div>
    </body>
    <footer>
    
    </footer>
</html>