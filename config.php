<?php 

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// Our gallery php

$people ['Donald_Trump'] = 'trump_President from Nk.';
$people ['Joe_Biden'] = 'biden_VicePresident from PA.';
$people ['Hilary_Clinton'] = 'clint_Secretary from NY.';
$people ['Bernie_Sanders'] = 'sande_Senator from VT';
$people ['Elizabeth_Garren'] = 'warre_Senator from MA';
$people ['Cory_Booker'] = 'booke_Senator froom CA';
$people ['Andrew_yang'] = 'ayang_Entrepreneur from NY.';
$people ['Pete_Buttigieg'] = 'butti_Mayor fromom IN.';
$people ['Amy_Klobuchar'] = 'klobu_Senator from MN.';
$people ['Julian_Castro'] = 'castr_Housing/Urban from TX.';

switch(THIS_PAGE){
    case 'index.php':
        $title= 'Home paage for our new website';
        $mainHeadline = 'Welcome to our homepage';
        $center = 'Center';
        $body = 'home';
        break;
        
    case 'about.php':
        $title= 'About page for our new website';
        $mainHeadline = 'Welcome to our wonderful about page';
        $center = 'center';
        $body = 'about inner';
        break;
        
    case 'daily.php':
        $title= 'Daily page';
        $mainHeadline = 'Welcome to the Daily page';
        $center = 'center';
        $body = 'daily';
        break;
        
    case 'customers.php':
        $title= 'Our very important cstomers';
        $mainHeadline = 'Hello, customers! Good to see you!';
        $center = 'center';
        $body = 'customers';
        break;
        
    case 'contact.php':
        $title= 'Contact us today!';
        $mainHeadline = 'Welcome to our Contact page!';
//        $center = 'center';
        $body = 'contact';
        break;
        
    case 'thx.php':
        $title= 'Our thank yoo page!';
        $mainHeadline = 'Thank you for filling out our form!';
        
//        $center = 'center';
        $body = 'contact';
        break;
        
    case 'gallery.php':
        $title= 'Check out our gallery';
        $mainHeadline = 'Welcome to the Candidates Gallery page';
        $center = 'center';
        $body = 'gallery';
        break;
        
} // Ends switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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






$firstName ='';
$lastName ='';
$email ='';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';
$tel = '';
$games = '';
$console='';

$firstNameErr ='';
$lastNameErr ='';
$emailErr ='';
$genderErr = '';
$winesErr = '';
$privacyErr = '';
$commentsErr = '';
$telErr = '';
$gamesErr = '';
$consoleErr='';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            // We need to declare our errors. Example: if a field is empty send a message saying is empty.
            // If my name is empty, we will hace created a varible called $nameErr and we will say PLease fill out your name and this is assigned to the $nameErr. Now, if it is NOT empty, $name = $_POST['name'];
            
    if(empty($_POST['firstName'])){
                $firstNameErr = 'Please fill out your first name!';
            }else {
                $firstName = $_POST['firstName'];
            }
    if(empty($_POST['lastName'])){
                $lastNameErr = 'Please fill out your last name!';
            }else {
                $lastName = $_POST['lastName'];
            }
    
    if(empty($_POST['email'])){
                $emailErr = 'Please fill out your email!';
            }else {
                $email = $_POST['email'];
            }
    
    if(empty($_POST['gender'])){
                $genderErr = 'Please check one!';
            }else {
                $gender = $_POST['gender'];
            }
//   Login if gender is equal to male, than male is checked 
    if($gender == 'male'){
        $male = 'checked';
    }elseif($gender == 'female'){
        $female = 'checked';
    }
    
    if(empty($_POST['wines'])){
                $winesErr = 'What, no wines?';
            }else {
                $wines = $_POST['wines'];
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
    
    function myWines(){
        $myReturn = '';
        if (!empty($_POST['wines'])){
            $myReturn = implode(', ', $_POST['wines']);
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
    
    
    if(isset($_POST['firstName'],
             $_POST['lastName'],
             $_POST['gender'],
             $_POST['wines'],
             $_POST['comments'],
             $_POST['tel'],
             $_POST['privacy'])){
        
        $to = 'manuelrodriguezc29@gmail.com';
        $subject = 'Test email' .date('m/d/y');
        $body = ''. $firstName.' has filled out your form ' .PHP_EOL.'';
        $body .= 'Email: '.$email. ' '.PHP_EOL.'';
        $body .= 'Your phone number: '.$tel. ' '.PHP_EOL.'';
        $body .= 'Your wines: '.myWines(). ' '.PHP_EOL.'';
        $body .= 'Gender: '.$gender.' '.PHP_EOL.'';
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