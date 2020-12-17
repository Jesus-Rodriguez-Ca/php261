<?php
//Place your PHP here!!!


?>




<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Classwork Website Home Page</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
</head>
    <body>
        <header>
            <div class="row">
            <img id="logo" src="img/php-logo.png" alt="php logo">
            </div>
        </header>
        <nav>
            
            <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Customers</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
            </ul>
           
        </nav>
        <div class="wrapper">
            <main>
                <h1>Welcome to my Home Page -PHP Page!</h1>
                <div>
                <img id="instalation" src="img/mamp.PNG" alt="Instalation mamp">
                
                </div>
            </main>
            <aside>
                <div>
                <img id="error" src="img/error.PNG" alt="php error">
                </div>
            </aside>
        
        </div>  <!-- end of wrapper-->
    
        <footer>
            <div class="copyright">
                <div class="row">
            <ul>
            <li>Copyright, 2018 - <?php 
                echo date('Y');
                ?></li>
                <li>All Right Reserved</li>
                <li><a href=""> Terms of use</a></li>
                <li><a href=""> Web designed by Jesus Rodriguez</a></li>
                
            </ul>
            
            </div>
            </div> <!--End copyright -->
        </footer>
    </body>
</html>