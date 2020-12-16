<!DOCTYPE html>
<?php include('portal-config.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
     <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    

</head>

    <!-- New part --><body class="<?php echo $body_class; ?>">

<header>
<div class="container">

  <img class="logo" src="images/logo2.png" alt="logo">
  
  <!-- <nav class="site-nav">
      <ul>
        <li><a href="index.php"><i class="fa fa-home site-nav--icon"></i>Home</a></li> 
        <li><a href="about.php"><i class="fa fa-info site-nav--icon"></i>About</a></li>
        <li><a href="daily.php"><i class="fa fa-pencil site-nav--icon"></i>Daily</a></li>
        <li><a href="games.php"><i class="fa fa-usd site-nav--icon"></i>Games</a></li>
        <li><a href="contact.php"><i class="fa fa-envelope site-nav--icon"></i>Contact</a></li>
      </ul> 
  </nav> -->

  <nav class="site-nav">
                <ul>
                    <?php  echo makeLinks($nav); ?> 
                </ul>  
            </nav>
  
  <div class="menu-toggle">
    <div class="hamburger"></div>
  </div>
  
</div>

</header>
    
<div id="wrapper"> 
    <!-- Close the wrapper in the footer -->