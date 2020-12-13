<?php
// In order to view this page, a user must have registered and logged in,
// otherwise, he/she must be directed to do so!!!
session_start();
if (!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}

include('includes/header.php');
include('config.php');

?>
<div class="contact-in">
    <form class="contact-form" action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="Name" value="<?php
                                                    if (isset($_POST['Name'])) echo $_POST['Name']; ?>">
            <span><?php echo $NameErr; ?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php
                                                    if (isset($_POST['email'])) echo $_POST['email']; ?>">
            <span><?php echo $emailErr; ?></span>

            <label>Telefono</label>
            <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
                                                                            if (isset($_POST['tel'])) echo $_POST['tel']; ?>">
            <span><?php echo $telErr; ?></span>



            <label>Console</label>
            <ul>

                <li><input type="radio" name="console" value="nintendo switch" <?php if (isset($_POST['console']) && $_POST['console'] == 'nintendo switch') echo 'checked="checked"'; ?>> Nintendo Switch</li>
                <li><input type="radio" name="console" value="Nintendo U" <?php if (isset($_POST['console']) && $_POST['console'] == 'Nintendo U') echo 'checked="checked"'; ?>> Nintendo U</li>

            </ul>
            <span><?php echo $consoleErr; ?></span>

            <label>Favorite Video Games</label>
            <ul>

                <li><input type="checkbox" name="games[]" value="Zelda: Breath of the Wild" <?php if (isset($_POST['games']) && $_POST['games'] == 'Zelda: Breath of the Wild') echo 'checked="checked"'; ?>> Zelda: Breath of the Wild</li>
                <li><input type="checkbox" name="games[]" value="Super Smash Bros" <?php if (isset($_POST['games']) && $_POST['games'] == 'Super Smash Bros') echo 'checked="checked"'; ?>> Super Smash Bros</li>
                <li><input type="checkbox" name="games[]" value="Splatoon" <?php if (isset($_POST['games']) && $_POST['games'] == 'Splatoon') echo 'checked="checked"'; ?>> Splatoon</li>
                <li><input type="checkbox" name="games[]" value="Super Mario Odyssey" <?php if (isset($_POST['games']) && $_POST['games'] == 'Super Mario Odyssey') echo 'checked="checked"'; ?>> Super Mario Odyssey</li>
                <li><input type="checkbox" name="games[]" value="Pokemon" <?php if (isset($_POST['games']) && $_POST['games'] == 'Pokemon') echo 'checked="checked"'; ?>> Pokemon</li>

            </ul>
            <span><?php echo $gamesErr; ?></span>


            <label>Comments</label>
            <textarea class="contact-form-txtarea" name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);
                                        ?></textarea>
            <span><?php echo $commentsErr; ?></span>


            <input type="radio" name="privacy" value="<?php
                                                        if (isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']); ?>">
            I agree to your Privacy Policy
            <span><?php echo $privacyErr; ?></span>

            <!--Radio buttons and checkboxes are very similar -->
            <input type="submit" value="Send it!">
            <p><a href="">Reset me!</a></p>
        </fieldset>

    </form>
</div>
<?php include('includes/footer.php'); ?>