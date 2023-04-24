 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Connexion à la base de données
include_once "config.php";

// Récupération des produits dans le panier
$ids = array_keys($_SESSION['panier']);
$products = mysqli_query($conn, "SELECT * FROM productes WHERE id IN (".implode(',', $ids).")");

// Insertion des informations dans la table "commandes"
foreach($products as $product) {
  $id_produit = $product['id'];
  $nom_produit = $product['Name'];
  $prix_produit = $product['price'];
  $quantite_produit = $_SESSION['panier'][$product['id']];

  $insert_commande = "INSERT INTO commandes (id_produit, nom_produit, prix_produit, quantite_produit) VALUES ('$id_produit', '$nom_produit', '$prix_produit', '$quantite_produit')";
  mysqli_query($conn, $insert_commande);

  // Récupération de l'id de la commande insérée
  $id_commande = mysqli_insert_id($conn);
}

// Réinitialisation du panier
$_SESSION['panier'] = array();

// Redirection vers la page de facture correspondante
header("Location: facture.php?id_commande=$id_commande");

?>
</body>
</html>
 