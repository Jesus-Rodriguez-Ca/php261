<!DOCTYPE html> 
<html lang="en">
    <head>
    <title> My Adder Assignment</title>
    <style>
    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
    
    
</style>
    </head>
<body>  
    <h1>Adder.php</h1>
<form method="post">  
<label>Enter the first number: </label> 
<input type="text" name="num1" /><br><br>  
<label>Enter the second number: </label>  
<input type="text" name="num2" /><br><br>  
<input  type="submit" name="submit" value="Add Em!!">  
    
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $num1 = $_POST['num1'];  
        $num2 = $_POST['num2'];  
        $myTotal =  $num1+$num2;     
echo "<h2>You added $num1 and $num2</h2>";
echo "<p>and the answer is</p>";
echo "<p>$myTotal!</p>";
echo '<p><a href="">Reset the form</a></p>';
}  
    
?>  
    <footer>
           
                <p><small>&copy; Copyright, <?php 
                echo date('Y');
                ?> by Jesus Rodriguez, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    
        </footer>
</body>  
    
</html>  

<!--
// Move php to the bottom of the html doc
// Relocate style to the header of the html do
// Form with error when opening tag
// Variable Num1 changed to num1
// Variable Num2 changed to num2
// Erase negative sign
// Add two opening label tags
// Reorganized form
// Relocate closing PHP 
// Change isset parameter from num1 to submit
// Reorganize quotation marks
// Note: In order to use the reset form botton use single quotation marks. Double quotation marks causes problems
// Add languege English to the html doc
// Add footer with Validators 
-->