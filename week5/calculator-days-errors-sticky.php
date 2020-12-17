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
                $milesErr = '<p>Please fill out the distance</p>';
            }else {
                $miles = $_POST['miles'];
            }
    
    if(empty($_POST['price'])){
                $priceErr = '<p>Please fill out the price</p>';
            }else {
                $price = $_POST['price'];
            }
    
    if(empty($_POST['efficiency'])){
                $efficiencyErr = '<p>Please select your Fuel Efficiency</p>';
            }else {
                $efficiency = $_POST['efficiency'];
            }
    if(empty($_POST['name'])){
                $nameErr = '<p>Please enter your name</p>';
            }else {
                $name = $_POST['name'];
            }
    if(empty($_POST['hours'])){
                $hoursErr = '<p>Please enter hours</p>';
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
    ul{
       list-style-type: none;
    }
</style>
</head>
    
    
    <body>
        
   
        <h1>Our Trip Calculator</h1>
    <form action="" method="post">
        <fieldset>
<label >Your name</label>
<input type="text" name="name" value="<?php 
if(isset($_POST['name'])) echo $_POST['name'];?>">  
            
<label for="quantity">How many miles will you be driving?</label>
<input type="number" name="miles" value="<?php 
if(isset($_POST['miles'])) echo $_POST['miles'];?>">

<label for="quantity">How many hours per day would you like to be driving?</label>
<input type="number" name="hours" value="<?php 
if(isset($_POST['hours'])) echo $_POST['hours'];?>">
            

            <label>Price per gallon</label>
            <ul>

                <li><input type="radio" name="price" value="3.00"
                      <?php    if (isset($_POST['price'])&& $_POST['price'] == '3.00') echo 'checked="checked"';?>     
                           >$3.00</li>
                <li><input type="radio" name="price" value="3.50"
                           <?php    if (isset($_POST['price'])&& $_POST['price'] == '3.50') echo 'checked="checked"';?>
                           >$3.50</li>
                <li><input type="radio" name="price" value="3.50"
                           <?php    if (isset($_POST['price'])&& $_POST['price'] == '4.00') echo 'checked="checked"';?>
                           >$4.00</li>
                
                </ul>
            
            <label>Fuel Efficiency</label>
<select name="efficiency">
<option value="NULL"
<?php    if (isset($_POST['efficiency'])&& $_POST == 'NULL'){
echo 'selected="unselected"';
} ?> >Select one</option>

<option value="10"
<?php    if (isset($_POST['efficiency'])&& $_POST['efficiency'] == '10'){
echo 'selected="selected"';

} ?> >Terrible</option>

<option value="20"
<?php    if (isset($_POST['efficiency'])&& $_POST['efficiency'] == '20'){
echo 'selected="selected"';

} ?> >Decent</option>

<option value="30"
<?php    if (isset($_POST['efficiency'])&& $_POST['efficiency'] == '30'){
echo 'selected="selected"';

} ?> >Good</option>

            </select>
            <br>

            <input type="submit" value="Calculate">
            <input type="reset">
            

        </fieldset>
        </form>
        
        <div><?php echo $priceErr; ?></div>
        <div><?php echo $nameErr; ?></div>
        <div><?php echo $efficiencyErr; ?></div>
        <div><?php echo $hoursErr; ?></div>
        <div><?php echo $milesErr; ?></div>
        
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