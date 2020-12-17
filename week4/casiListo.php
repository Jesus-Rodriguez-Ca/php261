<html> 
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
    
</body>  
</html>  