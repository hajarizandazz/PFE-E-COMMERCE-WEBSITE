prpro7<?php
 require 'config.php'; 
 $panierCount = isset($_SESSION['panier']) ? array_sum($_SESSION['panier']) : 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
    <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/d22cd7cbf1.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
  *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
  
  }
  body{
    background:#dee1e2 ;
    min-height: 100vh;
    overflow-x: hidden;
  }
  header{
    position: absolute;
    top: 0;
    left: 0;
    width:100%;
    height: 80px;
    background: #fff;
    padding: 20px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 15px 15px rgba(0, 0, 0, 0.05);
  
  }
  .logo{
    color: #333;
   font-size: 1.5em;
   font-weight: 700;
   text-transform: uppercase;
   letter-spacing:0.1em;
  }
  .group{
    display: flex;
    align-items: center;
  }
  header ul {
    position: relative;
    display: flex;
    gap: 30px;
  }
  header ul li {
    list-style: none;
  
  }
  header ul li a{
    position: relative;
    text-decoration: none;
    font-size: 1em;
    color: #333;
    text-transform: uppercase;
    letter-spacing: 0.2em;
  }
  header ul li a::before{
    content:'';
    position:  absolute;
    bottom: -2px;
    width: 100%;
    height: 2px;
    background: #333;
    transform: scaleX(0);
    transition: transform 0.5s ease-in-out;
    transform-origin: right;
  }
  header ul li a:hover::before{
    transform: scaleX(1);
    transform-origin: left;
  
  }
  .search-box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform:translate(-50%,-50%);
    background: #2f3640;
    height: 50px;
    border-radius: 40px;
    padding: 10px;
    margin-left: 130px;
  
  
  }
  .search-box:hover > .search-input{
    width: 240px;
    padding: 0 6px;
  
  
  }
  .search-box:hover > .search-btn{
    background: white;
  }
  
  
  .search-btn{
    color:#e84118;
    float: right;
    width: 35px;
    height: 30px;
    border-radius: 50%;
    background:#2f3640 ;
    display: flex;
    justify-content: center;
    align-items: center;
     transition:0.4s;
  }
  .search-input{
    border: none;
    background: none;
    outline: none;
    float: left;
    padding: 0;
    color: white;
    font-size: 16px;
    transition: 0.4s;
    line-height: 40px;
    width: 0px;
  
  }
  .container-fluid{
    margin-top:60px;
  }
  .dropdow {
  position: relative;
  display: inline-block;
  
}
ul li .dropbt{
    text-decoration: none;
    color: black;
    padding: 5px 20px;
    border: 1px solid transparent;
    background-color: transparent;
    font-size:14px;
    
  
}
.dropdow-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 150px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdow-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdow-content a:hover {background-color: #f1f1f1}

.dropdow:hover .dropdow-content {
  display: block;
 
}

.dropdow:hover .dropbt {
  background-color: white;
  color: black;
  transition: 0.6s ease;
}
  .badge {
  display: inline-block;
  width: 15px;
  height: 15px;
  line-height: 15px;
  text-align: center;
  border-radius: 50%;
  background-color: red;
  color: white;
  font-size:12px;
}
    </style>
</head>

<body>
      
<header>
    <a href="index.html" class="logo">Paramarket</a>
    <div class="group">
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="index.html" >contact</a></li>
        <li><a href="logine.php" >Sign in</a></li>
        <li><a href="#"></a></li>
        <li><a href="#"><i class="fa-solid fa-user"></i> 
        <div class="dropdow">
                  <a href="" class="dropbt">   
                    <?php 
                    if(isset($_SESSION['id'])){ $select = $conn->query("SELECT name FROM registration WHERE id = '{$_SESSION['id']}'") or die('query failed');
                        if(mysqli_num_rows($select) > 0){
                          $fetch = mysqli_fetch_assoc($select);
                          echo $fetch['name'];
                      }
                     
                    
                    ?>
                </a>
                <div class="dropdow-content">
                    <a href="profile.php">info</a>
                    <a href="logout.php">logout</a>
                </div>
              </div>
              <?php
                    }
              ?>
      </a></li>
       
        
        <li><a href="panier.php" class="link"><i class="fa-solid fa-cart-shopping"></i><span class="badge"><?= $panierCount ?></span></a></li>
        
      </ul>
      <div class="search-box">
        <input type="search" name="search" class="search-input" placeholder="Search here...">
        <a class="search-btn" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
        
      </div>
       
         
   
  </div>
   </header>

    <div class="container-fluid">
       
        <?php
         $fi=$conn->query("SELECT * FROM productes where id=14");
         while ($do = mysqli_fetch_assoc($fi)) {

        ?>
        <div class="cart">
            <div class="row row1">
                <div class="col-md-4">
                    <img src="<?php echo $do['img']?>" width="100%" id="ProductImg">
                    <div class="small-imgs">
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="product-title"><?php echo $do['Name']?></h1>
                    <div class="reviews">
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-sharp fa-solid fa-star"></i>
                        <i class="fa-regular fa-star-half-stroke"></i>
                        <p>240 reviews</p>
                    </div>
                    
 
                    <div class="price">
                        <span>$<?php echo $do['price']?></span>
                        <span>$19.99</span>
                    </div>
                    <div class="row" class="float">
                        
                    </div>


                    <div id="product" class="product-inf">
                        <div class="product-buttons">
                            <button id="btn1"><span>Product Details</span></button>
                            <button id="btn2"><span class="button2">how to use</span></button>
                        </div>
                        
                        <div class="tabs-content">
                            <p id="paragraphe1" class="paragraphe"><?php echo $do['details']?></p>
                            <p id="paragraphe2" class="paragraphe"><?php echo $do['product_description']?></p>
                        </div>
                    </div>

                    <?php
   
    $req = $conn->query('SELECT * FROM productes where id=13');
    $donn = mysqli_fetch_assoc($req);
  ?>
                    <div class="col-md-6">
                    <div class="col-md-6">
                    <?php if(isset($_SESSION["login"])){ ?>
        <a href='ajouter.php?id=<?php echo $donn["id"]; ?>' class='custom-btn btn-6'>Add To Cart</a>
    <?php } else { ?>
        <button class='custom-btn btn-6' onclick='alert("Vous devez vous connecter pour ajouter ce produit au panier.")'>Add To Cart</button>
    <?php } ?>

                    </div>
                    </div>
                    <?php
    
  ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
         }
         ?>
        <!-- Ajout du script à la fin du document, pour que tous les éléments du DOM soient disponibles -->
        <script src="javascript.js"></script>
</body>

</html>.php