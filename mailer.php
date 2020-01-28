<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$phone =$_POST["phone"];
	$subject = "Response From:" . $_POST["phone"] . ".\r\n";
	$content = $_POST["content"];
	$toEmail = "manvendramonu445@gmail.com"; //put your mail here
	$mailHeaders = "From: " . $_POST["userName"] . "<". $email.">.\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	$message = "<h3 style=color:green;>".$name.",Thank you !</h3>";
	}
}
?>