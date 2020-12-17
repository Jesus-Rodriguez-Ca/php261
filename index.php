<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<title>My first PHP website</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<main>
		<header class="Header">
			<h1 class="Strap">Jesus Rodriguez</h1>
		</header>
       
		<section class="IntroWrapper">
			<h2>Software Development Student | Python, Java, JavaScript | Graduation 2021</h2>
			<figure class="Shot">
				<img class="ShotImg" src="images/desktop.jpg" alt="Author's photo" />
				<figcaption class="ImageCaption">Web Developer, Jesus Rodriguez</figcaption>
			</figure>
		</section>
		
	
		<section class="about">
			<h3 class="SubHeader">About me</h3>
			<ol class="Wrapper">
				<li>I'm a Software Development student. Throughout my academic period, I've collaborated in teams using methodologies such as Agile framework to accomplish tasks according to timelines. I have experience writing and editing code in Python, Java, and JavaScript languages. Also, I have knowledge in the use of databases such as SQL and NoSQL. </li>
                
                <li>My first goal is to got get my BAS in Computer Science and then continue with a Master at UW in Marching learning.
                    The world is now moving with AI. I want to be a contributor of the new era, not just a consumer.    
                </li>
                
                <li>I like to do hiking and camping. I also play videogames, but I don't consider myself a gamer.</li>
			</ol>
		</section>
        
        	<aside class="List">
			<h3 class="SubHeader">List of assignments</h3>
			<ul>
				<li><a href="var.php" target="_blank">Variables</a></li>
				<li><a href="currency-logic.php" target="_blank">Currency</a></li>
				<li><a href="heredoc.php" target="_blank">Heredoc</a></li>
                <li><a href="week3/arrays.php" target="_blank">Arrays</a></li>
                <li><a href="week3/if.php" target="_blank">If-else</a></li>
                <li><a href="week3/switch.php" target="_blank">Switch</a></li>
                <li><a href="week3/index.php" target="_blank">Using a Switch - HW3</a></li>
                <li><a href="week4/adder.php" target="_blank">Adder</a> </li>
                <li><a href="week4/form1.php" target="_blank">Form1</a> </li>
                <li><a href="week4/form2.php" target="_blank">Form2</a> </li>
                <li><a href="week5/calculator.php" target="_blank">Calculator</a> </li>
                <li><a href="week5/calculator-days.php" target="_blank">Calculator days</a> </li>
                <li><a href="week5/calculator-days-error.php" target="_blank">Calculator days error</a> </li>
                <li><a href="week5/calculator-days-errors-sticky.php" target="_blank">Sticky calculator</a> </li>
                <li><a href="week5/currency-final.php" target="_blank">Currency Final</a> </li>
                <li><a href="week6/form-emailable.php" target="_blank">Emailable Form</a> </li>
                <li><a href="week6/functions.php" target="_blank">Functions</a> </li>
                <li><a href="week6/random-count.php" target="_blank">Random count</a> </li>
                <li><a href="website/index.php" target="_blank">Website</a> </li>
                <li><a href="week7/substr-str_replace.php" target="_blank">Sub String</a> </li>
				<li><a href="week7/emailable.php" target="_blank">My emailable</a> </li>
				<li><a href="week8/people.php" target="_blank">People</a> </li>
				<li><a href="week8/people-view.php" target="_blank">People-view</a> </li>
				<li><a href="week9/register.php" target="_blank">Server</a> </li>

                
                
			</ul>
		</aside>
        <aside class="List">
			<h3 class="SubHeader">Basic rules</h3>
			<ul>
				<li>Opening php  stuff goes inside opening and closing tags.  If your .php page DOES NOT have any html, no need for the closing  php tag!</li>
				<li>Command will end with a semi-colon; For insstance
                <ul>
                    <li>echo 'Type something here!';</li>
                    <li>$name = 'Olga';</li>
                    <li>include 'includes/header.php' ; (When calling an include, more than likely it will be located inside an HTML page, therefore don't forget your <?php  ?> opening/closing tags)!</li>
                    </ul>
                </li>
				<li>When creating a variable, $name = 'Olga'; the "equals" sign is not EQUAL, but 'Olga' is assigned the $name variable!</li>
				<li>When do we use " " or ' '?</li>
                
                </ul>
            <p>Types in a variable</p>
                <ul>
				<li>String</li>
				<li>Integer</li>
				<li>Float</li>
				<li>Boolean</li>
				<li>Array</li>
				<li>NULL</li>
				
			</ul>
		</aside>
		  <footer>
           
                <p><small>&copy; Copyright, <?php 
                echo date('Y');
                ?> by Jesus Rodriguez, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    
        </footer>
	</main>
	
</body>
</html>
