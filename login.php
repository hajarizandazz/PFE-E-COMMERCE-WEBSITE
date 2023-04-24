<?php

require 'config.php'; 


if(isset($_POST["login"])){
    
    $email = $_POST["email"];
    $password = $_POST["pass"];
    
    
    $result = mysqli_query($conn, "SELECT * FROM registration WHERE email='$email'");
    
   
    if(mysqli_num_rows($result) > 0){
       
        $row = mysqli_fetch_assoc($result);
        
       
        if($password == $row["password"]){
            session_start();
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            
           
            header("location: index.html");
            exit;
        }
        else{
            
           echo '<script>alert("Invalid password")</script>' ;
           header("location:logine.php");
        }
    }
    
}


?>
