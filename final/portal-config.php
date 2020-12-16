<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


/*Titles and headlines Switch */
switch(THIS_PAGE){
    case 'index.php':
        $title= 'Home page';
        $mainHeadline = 'EAT | SLEEP | GAME | REPEAT';
        $center = 'Center';
        $body = 'home';
        break;
        
    case 'about.php':
        $title= 'About page ';
        $mainHeadline = 'Database';
        $center = 'center';
        $body = 'about inner';
        break;
        
    case 'daily.php':
        $title= 'Daily page';
        $mainHeadline = 'Games coming 2021';
        $center = 'center';
        $body = 'daily';
        break;
        
    case 'games.php':
        $title= 'Best Nintendo Games';
        $mainHeadline = 'List of the best Nintendo Games';
        $center = 'center';
        $body = 'Games';
        break;
        
    case 'contact.php':
        $title= 'Contact us today!';
        $mainHeadline = 'Let us know your interests!';
//        $center = 'center';
        $body = 'contact';
        break;
        
    case 'thx.php':
        $title= 'Our thank you page!';
        $mainHeadline = 'Thank you for filling out our form!';
        
//        $center = 'center';
        $body = 'contact';
        break;
        
    case 'gallery.php':
        $title= 'Check out our gallery';
        $mainHeadline = 'Best Video Game Consoles';
        $center = 'center';
        $body = 'gallery';
        break;
        
} // Ends switch


switch (THIS_PAGE){
    case 'index.php':
        $title = 'Home page';
        $body_class = 'home';
        break;
        
    case 'daily.php':
        $title = 'Daily page';
        $body_class = 'daily';
        break;
    
    case 'index.php':
        $title = 'Home page';
        $body_class = 'home';
        break;
}

if (isset($_GET['today'])){
    
    $today = $_GET['today'];
}else{
    $today = date('l');
    
}

/* Daily switch*/

switch($today){
    case 'Sunday' : 
        $quote = 'CHORUS';
        $pic = 'sunday.jpg';
        $alt = 'CHORUS';
        $content = 'Play as ex-cultist Nara and her sentient AI companion and starfighter, Forsaken, in Chorus’ concise and compelling single-player experience. Experience fast-paced, frenetic action that evolves the spirit of classic space shooters, and fight to unite resistance forces against the Circle and their ominous leader, the Great Prophet. Outgun, outwit, and outmaneuver hordes of enemy starfighters, titanic battleships and unknown Void entities.';
        break;
    case 'Monday' : 
        $quote = 'HOGWARTS';
        $pic = 'monday.png';
        $alt = 'hogwarts';
        $content = 'Hogwarts Legacy is an immersive, open-world action RPG set in the world first introduced in the Harry Potter books. Now you can take control of the action and be at the center of your own adventure in the wizarding world. Embark on a journey through familiar and new locations as you explore and discover fantastic beasts, customize your character and craft potions, master spell casting, upgrade talents, and become the wizard you want to be.';
        break;
    case 'Tuesday' : 
        $quote = 'VILLAGE ~ RESIDENT EVIL';
        $pic = 'tuesday.png';
        $alt = 'Resident evil';
        $content = 'The next generation of survival horror rises in the form of Resident Evil Village, the eighth major entry in the Resident Evil series. With ultra-realistic graphics powered by the RE Engine, fight for survival as danger lurks around every corner.

        Years after the tragic events of Resident Evil 7 biohazard, Ethan Winters has started over with his wife Mia, finally living in peace and putting the past behind them. However, Chris Redfield, the legendary hero from previous Resident Evil games, suddenly disrupts their life, throwing a devastated Ethan into a new and twisted nightmare in search of answers.';
        break;
    case 'Wednesday' : 
        $quote = 'HORIZON FORBIDDEN WEST';
        $pic = 'wednesday.jpg';
        $alt = 'Forbiden';
        $content ='Explore distant lands, fight bigger and more awe-inspiring machines, and encounter astonishing new tribes as you return to the far-future, post-apocalyptic world of Horizon.

        The land is dying. Vicious storms and an unstoppable blight ravage the scattered remnants of humanity, while fearsome new machines prowl their borders. Life on Earth is hurtling towards another extinction, and no one knows why.
        
        It\'s up to Aloy to uncover the secrets behind these threats and restore order and balance to the world. Along the way, she must reunite with old friends, forge alliances with warring new factions and unravel the legacy of the ancient past – all the while trying to stay one step ahead of a seemingly undefeatable new enemy.';
        break;
    case 'Thursday' : 
        $quote = 'BLOODLINES 2';
        $pic = 'thursday.jpg';
        $alt = 'bloodlines2';
        $content = 'Sired in an act of vampire terrorism, your existence ignites the war for Seattle\'s blood trade. Enter uneasy alliances with the creatures who control the city and uncover the sprawling conspiracy which plunged Seattle into a bloody civil war between powerful vampire factions.';
        break;
    case 'Friday' : 
        $quote = 'GHOSTWIRE ~ TOKYO';
        $pic = 'friday.jpg';
        $alt = 'TOKYO';
        $content = "Tokyo is overrun by deadly supernatural forces after 99% of the city's population vanished. Use a powerful arsenal of spectral abilities to fight the paranormal threat and unravel the mystery behind the mass disappearance.

        Tango Gameworks is using the power and speed of PlayStation®5 console to forge a beautiful, supernatural version of Tokyo like never before with unparalleled haptic feedback for every ability and character action with the DualSense™ wireless controller and advanced 3D spatial audio that immerses the player in an ominous city with dangers to uncover around every corner.";
        break;
    case 'Saturday' : 
        $quote = 'THE LORD OF THE RINGS ~ GOLLUM';
        $pic = 'saturday.jpg';
        $alt = 'LORD OF THE RINGS';
        $content = 'The Lord of the Rings™: Gollum™ is a story-driven action adventure. Take on a perilous journey as Gollum, chasing the only thing that is precious to him. Gollum is skillful and cunning, but also torn by his split personality. One mind, two egos – you decide!';
        break;
}

/*  NavBar*/ 
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['games.php'] = 'Games';
$nav['contact.php'] = 'Contact';
/* $nav['gallery.php'] = 'Gallery'; */

function makeLinks($nav){
    $myReturn ='';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            $myReturn .='<li><a href="'.$key.'" class="active">'.$value.'</a></li>';
            
        } else{
            $myReturn .='<li><a href="'.$key.'">'.$value.'</a></li>';
        } // Ends if else statements
        
        
    
    
    }// Ends foreach loop

    return $myReturn;
} // Ends makeLinks function






####  Contact Form  Email #######



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
    
            /* if (!empty($_POST['privacy'])) {
                $privacy = $_POST['privacy'];
                
            } else {
                $privacyErr = 'Please agree to our rules!';
            } */
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
    
 //tel if 
 if (empty($_POST['tel'])) {  // if empty, type in your number
    $telErr = 'Your phone number please!';
 } elseif (array_key_exists('tel', $_POST)) {
    if (!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $telErr = 'Invalid format!';
    } else {
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
            'From'    => 'manuelrodriguezc29@gmail.com',
            'Reply-to'=> ' '.$email.''
        );

        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
        
        
    }// end isset
    
} // close if $_SERVER REQUEST METHOD




