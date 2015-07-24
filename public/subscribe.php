<?php
	$_POST['email'] = trim($_POST['email']);
	$_POST['email'] = htmlspecialchars($_POST['email'])
	$message = $_POST['email'];
	mail('david8simonelli@gmail.com', 'New Subcribers', $message);
?>
<form method="POST">
    <label>Your Email</label>
    <input type="text" name="email"><br>
    <input type="submit">
</form>