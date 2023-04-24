
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Info</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.5;
      color: #333;
      background-color: #f5f5f5;
      padding: 20px;
    }
    h1 {
      font-size: 28px;
      margin-bottom: 20px;
      text-align: center;
      color: #333;
      text-transform: uppercase;
    }
    .user-info {
      max-width: 500px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    .user-info p {
      margin-bottom: 10px;
      font-size: 18px;
      color: #555;
    }
    .user-info label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
      color: #333;
      text-transform: uppercase;
    }
  </style>
</head>
<body>
  <?php 
  require 'config.php';
  if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM registration WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Afficher les informations de l'utilisateur
      echo "<div class='user-info'>";
      echo "<h1>Your Info</h1>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<p><label>Name:</label> " . $row["name"]. "</p>";
        echo "<p><label>Email:</label> " . $row["email"]. "</p>";
        echo "<p><label>Address:</label> " . $row["address"]. "</p>";
        echo "<p><label>Age:</label> " . $row["age"]. "</p>";
        // et ainsi de suite pour les autres informations
      }
      echo "</div>";
    }
  }
  ?>
</body>
</html>
