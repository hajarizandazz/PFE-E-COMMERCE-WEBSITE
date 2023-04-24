<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facture</title>
    <style>

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}


h2 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url(dimension.png);
}


table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  margin-bottom: 20px;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
  padding: 20px;
  text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
  color: #5D6975;
  width: 100%;
  height: 30px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid #C1CED9;
  padding: 8px 0;
  text-align: center;
}
    </style>
</head>
<body>
    <?php
// Connexion à la base de données
include_once "config.php";

// Récupération des informations de la commande
$id_commande = isset($_GET['id_commande']) ? $_GET['id_commande'] : null;

$commande = mysqli_query($conn, "SELECT * FROM commandes WHERE id_produit = $id_commande");

// Vérifiez si la commande existe
if (mysqli_num_rows($commande) == 0) {
    echo "La commande deja stocké";
} else {
    // Afficher les informations de la commande
    $total = 0;
    echo "<h2>Facture</h2>";
    echo "<table>";
    $name_query=mysqli_query($conn,"SELECT name from registration where id=  '$_SESSION[id]'");
    $name = mysqli_fetch_assoc($name_query)['name'];
    $ad=mysqli_query($conn,"SELECT address from registration where id=  '$_SESSION[id]'");
    $add= mysqli_fetch_assoc($ad)['address'];
    echo "Facture de $name";
    echo "<br> addresse : $add";
    echo "<tr><th>Produit</th><th>Prix</th><th>Quantité</th><th>Total</th></tr>";
    while ($row = mysqli_fetch_assoc($commande)) {
        $produit = $row['nom_produit'];
        $prix = $row['prix_produit'];
        $quantite = $row['quantite_produit'];
        $total_ligne = $prix * $quantite;
        echo "<tr><td>$produit</td><td>$prix €</td><td>$quantite</td><td>$total_ligne €</td></tr>";
        $total += $total_ligne;
    }
    echo "<tr><td colspan='3'><b>Total:</b></td><td>$total €</td></tr>";
    echo "</table>";
    

}
?>
</body>
</html>
