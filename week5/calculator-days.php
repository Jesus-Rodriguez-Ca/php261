<?php

$hours = '';
$name = '';
$miles ='';
$price ='';
$efficiency = '';

$nameErr = '';
$milesErr ='';
$priceErr ='';
$efficiencyErr = '';
$hoursErr = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
           
    if(empty($_POST['miles'])){
                $milesErr = '<h2>Error!</h2> <p>Please fill out the form completely!</p>';
            }else {
                $miles = $_POST['miles'];
            }
    
    if(empty($_POST['price'])){
                $priceErr = '<h2>Error!</h2> <p>Please fill out the form completely!</p>';
            }else {
                $price = $_POST['price'];
            }
    
    if(empty($_POST['efficiency'])){
                $efficiencyErr = '<h2>Error!</h2> <p>Please fill out the form completely!</p>';
            }else {
                $efficiency = $_POST['efficiency'];
            }
    if(empty($_POST['name'])){
                $nameErr = '<h2>Error!</h2> <p>Please fill out the form completely!</p>';
            }else {
                $name = $_POST['name'];
            }
    if(empty($_POST['hours'])){
                $hoursErr = '<h2>Error!</h2> <p>Please fill out the form completely!</p>';
            }else {
                $hours = $_POST['hours'];
            }
    
    
} // close if $_SERVER REQUEST METHOD
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Calculator</title>
<style>
    form{
        width: 350px;
        margin: 0 auto;
        background-color:  #2d2d2d;
        color: #EB6555;
      
        
    }
    ul{
       list-style-type: none;
    }
    input{
        margin-bottom: 10px;
    }
    input[type=text]{
        width: auto;
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
        font-style: italic;
        border: 1px solid black;
        margin:  20px auto;
        width: 600px;
    }
    h1, h2, p{
       
        text-align: center;
    }
    p{
        color: black;
    }
    h2{
        color: red;
    }
</style>
</head>
    
    
    <body>
        
   
        <h1>Our Calculator</h1>
    <form action="" method="post">
        <fieldset>
<label >Your name</label>
<input type="text" name="name">  
            
<label for="quantity">How many miles will you be driving?</label>
<input type="number" name="miles">

<label for="quantity">How many hours per day would you like to be driving?</label>
<input type="number" name="hours">
            

            <label>Price per gallon</label>
            <ul>

                <li><input type="radio" name="price" value="3.00">$3.00</li>
                <li><input type="radio" name="price" value="3.50">$3.50</li>
                <li><input type="radio" name="price" value="3.50">$4.00</li>
                
                </ul>
            
            <label>Fuel Efficiency</label>
<select name="efficiency">
<option value="NULL">Select one</option>

<option value="10">Terrible</option>

<option value="20">Decent</option>

<option value="30">Good</option>

            </select>
            <br>

            <input type="submit" value="Calculate">
            <input type="reset">
            

        </fieldset>
        </form>
                                          <span><?php echo $priceErr; ?></span>   

        <?php   
            if(isset($_POST['price'],
                    $_POST['efficiency']) &&
                    is_numeric($_POST['price'])&&
                    is_numeric($_POST['efficiency'])){
                $amount = $_POST['price'];
                $currency = $_POST['efficiency'];
                
                
                $gallons = $miles / $efficiency;
                $pay = $gallons * $price;
                $days = $hours / 9 ;
                
                ?>
                <div class="box">
                <?php
                echo '<h2>Calculator Results</h2>';
                echo '<p>'.$name.', you will be driving <b>'.$miles. ' miles</b></p> ';
                echo '<p>Your vehicle has an efficiency rating of <b>' .$efficiency.' miles per gallon </b></p>';
                echo '<p> Your total cost for gas will be <b>$ '.number_format($pay,2). ' dollars </b></p>';
                echo '<p> You will be driving a total of <b>'.$hours.' equating to '.floor($days).' days.</b>';

                
                
            } 
       
        ?>
        </div>
        <footer>
           
                <p><small>&copy; Copyright, <?php 
                echo date('Y');
                ?> by Jesus Rodriguez, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    
        </footer>
    </body>
</html>