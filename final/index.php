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
    <blockquote cite="https://www.theverge.com/2014/7/21/5919973/inside-the-life-of-a-pro-gamer">
        "The life of a pro gamer requires uncommon discipline and perseverance,
         because the obstacles to success are as numerous outside the game as
          they are fearsome inside it. Parents won’t respect what you do,
           fans won’t understand when you fail, and most of the money goes to
            only the very best. As tough as that is, passion, team camaraderie, 
            and a growing acceptance of
         e-sports as a legitimate career path are making competitive gaming bigger than ever."
         - Vlad Savov - </blockquote>

        <h2>List of top 3 Nintendo games</h2>
        <div class="portfolio">
  

  <div class="portfolio__item" id="portfolio">
    <img src="images/photo1.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">Super Smach Ultimate</h3>
      <a href="https://www.jesusrcode.com/it261/final/game-view.php?id=1" class="button">More about the game!</a>
    </div>
  </div>
  <div class="portfolio__item">
    <img src="images/photo2.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">Zelda Breath of the Wild</h3>
      <a href="https://www.jesusrcode.com/it261/final/game-view.php?id=2" class="button">More about the game!</a>
    </div>
    
  </div>
  <div class="portfolio__item">
    <img src="images/photo3.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">Luigi Mansion Ghost</h3>
      <a href="https://www.jesusrcode.com/it261/final/game-view.php?id=3" class="button" role="button">More about the game!</a>
    </div>
  </div>
</div>       
          
    <?php endif ?>

    <?php include('includes/footer.php'); ?>