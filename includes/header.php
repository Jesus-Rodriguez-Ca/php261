<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title; ?></title>
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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