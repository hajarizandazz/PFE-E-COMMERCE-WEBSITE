<?php
require 'config.php';
if(isset($_POST["ok"])){
    $name = $_POST["name"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $pass = password_hash($_POST["pass"],PASSWORD_DEFAULT);
    $duplicate = mysqli_query($conn, "SELECT  * From registration where name='$name' OR email='$email'");
    if(mysqli_num_rows($duplicate)>0){
        "<script> alert('name or email has already taken');</script>";
    }
    else{
        if($pass!=null){
            $query = "insert into registration values('','$name','$address','$email','$age','$pass')";
            mysqli_query($conn, $query);
            echo
                "<script>alert('successful ');</script>";
                header('location:navbar.html');
        }
        else{
            echo
                "<script>alert(faild');</script>";
                header('location:logine.php');
        }
    }

}
?>

