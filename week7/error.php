<?php

$firstName ='';
$lastName ='';
$email ='';
$gender = '';
$wines = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameErr ='';
$lastNameErr ='';
$emailErr ='';
$genderErr = '';
$winesErr = '';
$privacyErr = '';
$commentsErr = '';
$telErr = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            // We need to declare our errors. Example: if a field is empty send a message saying is empty.
            // If my name is empty, we will hace created a varible called $nameErr and we will say PLease fill out your name and this is assigned to the $nameErr. Now, if it is NOT empty, $name = $_POST['name'];
    
    
    
    
            
    if(empty($_POST['firstName'])){
                $firstNameErr = 'Please fill out your first name!';
            }else {
                $firstName = $_POST['firstName'];
            }
    if(empty($_POST['lasstName'])){
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
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Emailable form</title>
<style>
    form{
        width: 350px;
        margin: 0 auto;
    }
    input{
        margin-bottom: 10px;
    }
    input[type=text],
    input[type=email],
    textarea{
        width: 100%;
        height: 30px
    }
    textarea{
        height: 120px;
    }
    fieldset{
        color: darkgray;
        padding: 10px 15px 10px 10px;
    }
    label{
        display:block;
        margin-bottom: 5px;
    }
    .box{
        width: 600px;
        margin: 20px auto;
        background: beige;
        padding: 20px;
        border: 1px solid green;
    }
    select{
        margin-bottom: 10px;
    }
    span{
        display: block;
        color: red;
        font-style: italic;
    }
    
</style>
</head>
    
    
    <body>
        
   
        
    <form action="" method="post">
        <fieldset>
<label>First Name</label>
<input type="text" name="firstName" value="<?php 
if(isset($_POST['firstName'])) echo $_POST['firstName'];?>">
         <span><?php echo $firstNameErr; ?></span> 
            
<label>Last Name</label>
<input type="text" name="lastName" value="<?php 
if(isset($_POST['lastName'])) echo $_POST['lastName'];?>">
         <span><?php echo $lastNameErr; ?></span>
            
<label>Email</label>
<input type="email" name="email" value="<?php 
if(isset($_POST['email'])) echo $_POST['email'];?>">
        <span><?php echo $emailErr; ?></span>   

            <label>Telefono</label>
<input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php 
if(isset($_POST['tel'])) echo $_POST['tel'];?>">
        <span><?php echo $telErr; ?></span>   

            

            <label>Gender</label>
            <ul>

                <li><input type="radio" name="gender" value="female"
                      <?php    if (isset($_POST['gender'])&& $_POST['gender'] == 'female') echo 'checked="checked"';?>     
                           >Female</li>
                <li><input type="radio" name="gender" value="male"
                           <?php    if (isset($_POST['gender'])&& $_POST['gender'] == 'male') echo 'checked="checked"';?>
                           >Male</li>
                
                </ul>
                     <span><?php echo $genderErr; ?></span>
            
            <label>Favorite Wines</label>
            <ul>

                <li><input type="checkbox" name="wines[]" value="Cabernet"
                      <?php    if (isset($_POST['wines'])&& $_POST['wines'] == 'Cabernet') echo 'checked="checked"';?>     
                           >Cabernet</li>
                <li><input type="checkbox" name="wines[]" value="Merlot"
                      <?php    if (isset($_POST['wines'])&& $_POST['wines'] == 'Merlot') echo 'checked="checked"';?>     
                           >Merlot</li>
                <li><input type="checkbox" name="wines[]" value="Syrah"
                      <?php    if (isset($_POST['wines'])&& $_POST['wines'] == 'Syrah') echo 'checked="checked"';?>     
                           >Syrah</li>
                <li><input type="checkbox" name="wines[]" value="Malbec"
                      <?php    if (isset($_POST['wines'])&& $_POST['wines'] == 'Malbec') echo 'checked="checked"';?>     
                           >Malbec</li>
                <li><input type="checkbox" name="wines[]" value="Zinfandel"
                      <?php    if (isset($_POST['wines'])&& $_POST['wines'] == 'Zinfandel') echo 'checked="checked"';?>     
                           >Zinfandel</li>
            
            </ul>
            <span><?php echo $winesErr; ?></span>
            
            
            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);
                ?></textarea>
            <span><?php echo $commentsErr; ?></span>
            
           
            <input type="radio" name="privacy" value="<?php 
                    if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']);?>">
            I agree to your Privacy Policy
            <span><?php echo $privacyErr; ?></span>
            
<!--Radio buttons and checkboxes are very similar -->
            <input type="submit" value="Send it!">
            <p><a href="">Reset me!</a></p>
        </fieldset>
        
        </form>
        
        <footer>
           
                <p><small>&copy; Copyright, <?php 
                echo date('Y');
                ?> by Jesus Rodriguez, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    
        </footer>
    </body>
</html>