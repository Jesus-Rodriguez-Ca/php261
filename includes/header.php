<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body class="<?php echo $body; ?>">
    <header>
        <div class="inner-header">
            <img id="logo" src="images/php-logo.png" alt="logo">
            <nav>
                <ul>
                    <?php  echo makeLinks($nav); ?> 
                </ul>  
            </nav>
        </div>
    
    </header>