<?php

$miles ='';
$price ='';
$efficiency = '';

$milesErr ='';
$priceErr ='';
$efficiencyErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
           
    if(empty($_POST['miles'])){
                $milesErr = 'Error';
            }else {
                $miles = $_POST['miles'];
            }
    
    if(empty($_POST['price'])){
                $priceErr = 'Please enter a valid distance, price per gallon and fuel efficiency';
            }else {
                $price = $_POST['price'];
            }
    
    if(empty($_POST['efficiency'])){
                $efficiencyErr = 'Please enter a valid distance, price per gallon and fuel efficiency';
            }else {
                $efficiency = $_POST['efficiency'];
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
    input{
        margin-bottom: 10px;
    }
    input[type=text]{
        width: 100%;
    }
    fieldset{
        color: darkgray;
        padding: 10px 15px 10px 10px;
    }
    ul{
       list-style-type: none;
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
     h1,h2{
       
        text-align: center;
    }
</style>
</head>
    
    
    <body>
        
   <h1>Our Calculator</h1>
        
    <form action="" method="post">
        <fieldset>
<label for="quantity">How many miles will you be driving?</label>
<input type="number" name="miles">      
            
            <label>Price per gallon</label>
            <ul>

                <li><input type="radio" name="price" value="3.00">$3.00</li>
                      
                <li><input type="radio" name="price" value="3.50">$3.50</li>
                           
                <li><input type="radio" name="price" value="4.00">$4.00</li>
                           
                
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
         <span><?php echo '<h2>'.$milesErr.'</h2>' ;?></span> 
        <span><?php echo $efficiencyErr; ?></span> 
        <?php   
            if(isset($_POST['price'],
                    $_POST['efficiency']) &&
                    is_numeric($_POST['price'])&&
                    is_numeric($_POST['efficiency'])){
                $amount = $_POST['price'];
                $currency = $_POST['efficiency'];
                
                
                $gallons = $miles / $efficiency;
                $pay = $gallons * $price;
                
                ?>
                <div class="box">
                <?php
                echo '<h2>Calculator Results</h2>';
                echo '<p>You have driven '.$miles. ' miles</p> ';
                echo '<p>Your vehicle has an efficiency rating of ' .$efficiency.' miles per gallon </p>';
                echo '<p> Your total cost for gas will be $ '.number_format($pay,2). ' dollars </p>';
                
                
                
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