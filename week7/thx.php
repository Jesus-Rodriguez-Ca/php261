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
        <a href="https://github.com/Jesus-Rodriguez-Ca/php261/tree/main/myEmailable" target="_blank" class="fa fa-github" ></a>
<h1>Thank you!!</h1>
        

        <footer>
           
                <p><small>&copy; Copyright, 2018 -<?php 
                echo date('Y');
                ?> by Jesus Rodriguez, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    
        </footer>
    </body>
</html>