<?php
// In order to view this page, a user must have registered and logged in,
// otherwise, he/she must be directed to do so!!!
session_start();
if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('includes/header.php');
?>

<h1>Welcome to our home page!</h1>


<!-- Left greeting-->
<?php
//Notification message
if(isset($_SESSION['success'])) : ?>
<div class="error success left">
<h3>
    <?php
    echo $_SESSION['success'];
    unset($_SESSION['success']);
?>
</h3>
</div>
<?php endif ?>

<!-- Right Greeting and logout-->

<div class="error success right">
<?php
    if(isset($_SESSION['UserName'])) : ?>
    <h3> Welcome, 
        
    <?php echo $_SESSION['UserName']; ?>

    </h3>
    <br>
    <p><a href="index.php?logout='1'">Log out!</a></p>
    </div>
    <div id="wrapper">
        <h1 class="<?php echo $center; ?>"><?php echo $mainHeadline; ?></h1>
    <div class="home">
    <img  src="images/gamer.jpg" alt="photo">
    </div>
        <blockquote>
        "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
        
        
        </blockquote> 
        <div class="portfolio">
  

  <div class="portfolio__item" id="portfolio">
    <img src="images/photo1.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">Super Smach Ultimate</h3>
      <a href="http://www.jesusrcode.com/final/game-view.php?id=1" class="button">More about the game!</a>
    </div>
  </div>
  <div class="portfolio__item">
    <img src="images/photo2.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">Zelda Breath of the Wild</h3>
      <a href="http://www.jesusrcode.com/final/game-view.php?id=2" class="button">More about the game!</a>
    </div>
    
  </div>
  <div class="portfolio__item">
    <img src="images/photo3.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">Luigi Mansion Ghost</h3>
      <a href="http://www.jesusrcode.com/final/game-view.php?id=3" class="button" role="button">More about the game!</a>
    </div>
  </div>
</div>
                
          
    <?php endif ?>

    <?php include('includes/footer.php'); ?>