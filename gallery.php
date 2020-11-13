<?php
include('config.php'); 
include('includes/header.php');
?>


    <div id="wrapper">
        <main>
        
        <h1><?php echo $mainHeadline; ?></h1>
    
<!--    <img src="images/photo1.jpg" alt="photo">-->
            <table class="candidates">
                <?php foreach($people as $fullName => $image) : ?>
                <tr>
                    <td><img src="images/<?php echo substr($image, 0,5);   ?>.jpg" alt="<?php echo $fullName?>"></td>
                    <td><?php echo str_replace('_', ' ', $fullName);?></td>
                    <td><?php echo substr($image, 6 );?></td>
                </tr>
                <?php endforeach; ?>
            </table>
       
    </main>
        <aside>
        <h3>This is my headling 3 on the gallery page</h3>
            <?php //echo randImages2($candidates);?>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
        </aside>
        
<?php
    include ('includes/footer.php');
?>
