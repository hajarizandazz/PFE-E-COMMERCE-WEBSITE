<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM `productes` WHERE `id`='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header("location:admin 3.php");

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>

