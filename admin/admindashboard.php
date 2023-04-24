<?php 

include "config.php";

$sql = "SELECT * FROM commandes";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>orders</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th> Name</th>

        <th>price</th>

        <th>detail</th>


    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id_produit']; ?></td>

                    <td><?php echo $row['nom_produit']; ?></td>

                    <td><?php echo $row['prix_produit']; ?></td>

                    <td><?php echo $row['quantite_produit']; ?></td>

                    

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 
    <button><a href="adminori.php">back to menu</a></button>


</body>

</html>