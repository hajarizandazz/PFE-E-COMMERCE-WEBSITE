<?php
include_once "config.php";

if(isset($_GET['del'])){
 $id_del = $_GET['del'] ;
 
 unset($_SESSION['panier'][$id_del]);
}

if(isset($_POST['qty'])){
   $_SESSION['panier'][$_POST['product_id']] = $_POST['qty'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

 <!-- Bootstrap CDN -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <title>Panier</title>
 <style>
     table {
border-collapse: collapse;
width: 100%;
}

th, td {
text-align: left;
padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
 </style>
 <script src="javascript.js"></script>
</head>
<body >

 <section>
     <table >
         <tr>
             <th></th>
             <th>Nom</th>
             <th>Prix</th>
             <th>Quantité</th>
             <th>Action</th>
         </tr>
         <?php 
           $total = 0 ;

           if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
             $ids = array_keys($_SESSION['panier']);
         
             $products = mysqli_query($conn, "SELECT * FROM productes WHERE id IN (".implode(',', $ids).")");
         
             foreach($products as $product):
                 $total = $total + $product['price'] * $_SESSION['panier'][$product['id']] ;
         ?>
             <tr>
                 <td><img src="<?=$product['img']?>" width="100px"></td>
                 <td><?=$product['Name']?></td>
                 <td><?=$product['price']?>€</td>
                 <td>
                   <form method="POST">
                     <div id="qty-button">
                       <input type="hidden" name="product_id" value="<?=$product['id']?>">
                       <button class="minus">-</button>
                       <input type="text" class="qty" name="qty" value="<?=$_SESSION['panier'][$product['id']] ?>">
                       <button class="plus">+</button>
                       <input type="submit" value="Mettre à jour">
                     </div>
                   </form>
                 </td>
                 <td><a href="panier.php?del=<?=$product['id']?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?')"><img src="delete.png" width="50px"></a></td>
             </tr>
         <?php 
             endforeach ;
         } else {
             echo "<tr><td colspan='5'>Votre panier est vide</td></tr>";
         }
        

         ?>
         <tr class="total">
             <th>Total : </th>
             <td colspan="2"><?=$total?>€</td>
         </tr>
     </table>
 </section>
 <?php

 $req = $conn->query('SELECT * FROM productes');
 $donn = mysqli_fetch_assoc($req) 
?>
 <a href='val.php?id=<?php echo $donn["id"]; ?>' class='buy' onclick="return confirm('vous êtes interdit ajouter ou supprimer votre commande aprés cette confirmation')">confirmer</a>
 
  <a href="#" onclick="history.go(-1);" style="text-decoration:none" class="link">Boutique</a>
</body>
</html>