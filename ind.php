<?php
require_once 'mail.php';
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['subject'] . "\r\n\r\n" . "Email: " . $email;
$mail->setFrom($email,$name);
$mail->addAddress('lebyedo@gmail.com');
$mail->Body = $message;
$mail->send();
header('location:index.html');
}


   

?>