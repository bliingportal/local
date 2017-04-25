// JavaScript Document

$name = $_POST['name'];
<?php echo "<p class='text-danger'>$errName</p>";?>
$email = $_POST['email'];
$message = $_POST['message'];
$human = intval($_POST['human']);

$from = 'Demo Contact Form'; 
$to = 'example@domain.com'; 
$subject = 'Message from Contact Demo ';
 
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

if (!$_POST['name']) {
	$errName = 'Please enter your name';
}
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errEmail = 'Please enter a valid email address';
}
if ($human !== 5) {
	$errHuman = 'Your anti-spam is incorrect';
}