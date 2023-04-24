<?php
require 'config.php';
  require_once 'mail.php';
if(isset($_POST['envoyer'])){
    $emailm=$_POST['email'];
    $result = mysqli_query($conn, "SELECT password FROM registration WHERE email = '$emailm'");
    $row = mysqli_fetch_assoc($result);
    $password = $row['password'];
  
    $mail->setFrom('llllmmm498@gmail.com', 'Para');
    $mail->addAddress($emailm);

    $mail->Subject = 'your password is ';
    $mail->Body = 'Votre mot de passe est ' . $password;
    $mail->send();
} else {
    echo "<script> alert('your email not saved ')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
</head>
<body>
    <form action="" method="post">
        
        <input type="email" name="email" placeholder="email"><br>
       
             
                <button type="submit" name="envoyer">envoyer</button>

    </form>
</body>
</html