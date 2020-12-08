<?php
include('server.php');
include('includes/header.php'); 





?>
<h1>Register today</h1>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
<fieldset>


<label>Name</label>
<input type="text" name="Name">

<label>Version</label>
<input type="text" name="Version" >

<label>Price</label>
<input type="number" name="Price" >

<label>Image</label>
<input type="file" name="Image"  id="Image">
<button type="submit" class="btn" name="Upload">Register</button>

<?php 
include('includes/errors.php');  
?>
</fieldset>
</form>
