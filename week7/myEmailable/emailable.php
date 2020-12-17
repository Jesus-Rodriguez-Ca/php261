<?php include('config.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Emailable form</title>
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html{
        background-color: beige;
    }
    form{
        width: 350px;
        margin: 0 auto;
        background-color: #2d2d2d;
        text-decoration-color: crimson;
        
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
    .fa {
        font-size: 100px;
      color: black;
        display: flex;
        align-content: center;
        justify-content: center;
        margin-bottom: 20px;
        
    }
    a{
        color:crimson;
    }
    
</style>
</head>
    
    
    <body>
        <a href="https://github.com/Jesus-Rodriguez-Ca/php261" target="_blank" class="fa fa-github" ></a>
<form action="" method="post">
        <fieldset>
<label>Name</label>
<input type="text" name="Name" value="<?php 
if(isset($_POST['Name'])) echo $_POST['Name'];?>">
         <span><?php echo $NameErr; ?></span> 
            
<label>Email</label>
<input type="email" name="email" value="<?php 
if(isset($_POST['email'])) echo $_POST['email'];?>">
        <span><?php echo $emailErr; ?></span>   

            <label>Telefono</label>
<input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php 
if(isset($_POST['tel'])) echo $_POST['tel'];?>">
        <span><?php echo $telErr; ?></span>   

            

            <label>Console</label>
            <ul>

                <li><input type="radio" name="console" value="nintendo switch"
                      <?php    if (isset($_POST['console'])&& $_POST['console'] == 'nintendo switch') echo 'checked="checked"';?>     
                           > Nintendo Switch</li>
                <li><input type="radio" name="console" value="Nintendo U"
                           <?php    if (isset($_POST['console'])&& $_POST['console'] == 'Nintendo U') echo 'checked="checked"';?>
                           > Nintendo U</li>
                
                </ul>
                     <span><?php echo $consoleErr; ?></span>
            
            <label>Favorite Video Games</label>
            <ul>

                <li><input type="checkbox" name="games[]" value="Zelda: Breath of the Wild"
                      <?php    if (isset($_POST['games'])&& $_POST['games'] == 'Zelda: Breath of the Wild') echo 'checked="checked"';?>     
                           > Zelda: Breath of the Wild</li>
                <li><input type="checkbox" name="games[]" value="Super Smash Bros"
                      <?php    if (isset($_POST['games'])&& $_POST['games'] == 'Super Smash Bros') echo 'checked="checked"';?>     
                           > Super Smash Bros</li>
                <li><input type="checkbox" name="games[]" value="Splatoon"
                      <?php    if (isset($_POST['games'])&& $_POST['games'] == 'Splatoon') echo 'checked="checked"';?>     
                           > Splatoon</li>
                <li><input type="checkbox" name="games[]" value="Super Mario Odyssey"
                      <?php    if (isset($_POST['games'])&& $_POST['games'] == 'Super Mario Odyssey') echo 'checked="checked"';?>     
                           > Super Mario Odyssey</li>
                <li><input type="checkbox" name="games[]" value="Pokemon"
                      <?php    if (isset($_POST['games'])&& $_POST['games'] == 'Pokemon') echo 'checked="checked"';?>     
                           > Pokemon</li>
            
            </ul>
            <span><?php echo $gamesErr; ?></span>
            
            
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
           
                <p><small>&copy; Copyright, 2018 -<?php 
                echo date('Y');
                ?> by Jesus Rodriguez, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    
        </footer>
    </body>
</html>