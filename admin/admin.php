<?php
include "config.php";

if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];
    $price = $_POST['price'];
    $detls = $_POST['detls'];
    $img = mysqli_real_escape_string($conn, $_POST['img']);
    $desc = $_POST['desc'];
    $cat = $_POST['categorie'];

    $sql = "INSERT INTO `productes`(`Name`, `price`, `details`, `img`, `product_description`, `categorie`) VALUES ('$first_name','$price','$detls','$img','$desc','$cat')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>

<html>
<head>
  <style>
    /* Style pour le formulaire */
form {
  margin: 20px;
  padding: 20px;
  border: 2px solid #ccc;
  border-radius: 5px;
  background-color: #f2f2f2;
}

legend {
  font-size: 20px;
  font-weight: bold;
}

input[type=text], textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

/* Style pour la page */
body {
  font-family: Arial, sans-serif;
  background-color: #e5e5e5;
}

h2 {
  text-align: center;
  margin-top: 20px;
}

  </style>
  <title>ajout product</title>
  <meta charset="UTF-8">
  
</head>
<body>

<h2>add product Form</h2>

<form action="" method="POST">

  <fieldset>

    <legend>Product information:</legend>

     name:<br>

    <input type="text" name="firstname">

    <br>

    

    price:<br>

    <input type="text" name="price">


    <br>
    detail:<br>

<textarea name="detls"  ROWS="7" COLS="23">
</textarea>

img url:<br>

<input type="text" name="img">
    

product Description:<br>

<textarea name="desc"  ROWS="7" COLS="23">
</textarea>


    
    <br><br>
categorie:<br>

    <input type="text" name="categorie">

<br>
    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>
<button><a href="adminori.php">back to menu</a></button>

</body>

</html>