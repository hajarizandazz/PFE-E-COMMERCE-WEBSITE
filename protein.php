<?php
require 'config.php';
$panierCount = isset($_SESSION['panier']) ? array_sum($_SESSION['panier']) : 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Page Product</title>
  <link rel="stylesheet" href="styleprotein.css">
  <script src="script.js"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://kit.fontawesome.com/d22cd7cbf1.js" crossorigin="anonymous"></script>
  <style>
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
.price{
  color:white;
}
    </style>
    <script>
     function ouvrirPage() {
            var a = document.getElementById("search").value;

            if (a === "spirulina") {
                window.open("prpro1.php");
            }

            if (a === "lactosérum") {
                window.open("prpro2.php");
            }
            if (a === "oméga-3") {
                window.open("prpro3.php");
            }
            if (a === "multivitamins") {
                window.open("prpro4.php");
            }

            if (a === "ampk") {
                window.open("prpro5.php");
            }
            if (a === "l-glutamine") {
                window.open("prpro6.php");
            }
            if (a === "l-carnitine") {
                window.open("prpro7.php");
            }

            if (a === "collagéne") {
                window.open("prpro8.php");
            }
            if (a === "sport whey") {
                window.open("prpro9.php");
            }


        }
   
    </script>
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
        <input type="search" id="search" class="search-input" onchange="ouvrirPage()" placeholder="Search here...">
        <a class="search-btn"  onclick="ouvrirPage();"><i class="fa-solid fa-magnifying-glass"></i></a>
        
      </div>
       
         
   
  </div>
   </header>
 <section id="home">
  <div class="inner-width"> 
       <p class="text animation">Convert food into the energy you need to play sports!</p>
  </div>
</section>
<section class="info">
  <h1 id="h1-info" style = "text-align: center">How to be more healthy in your physical health</h1>
<div class="slider">
  <div class = "center">

    
    <!-- Using figure, figcaption and CSS pseudo-element :after -->
    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/4c5bff75064929.Y3JvcCwyMTYzLDE2OTIsMTY1LDEzOQ.jpg" height="278px">
        <figcaption>
          <h1 class="h2-info">Running</h1>
          <p>To build muscle while running, be sure to fuel yourself with carbohydrates and proteins both before and after your workout.</p>
        </figcation>
    </figure>
      
    </div>
    
    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/f5939f114470925.Y3JvcCwxMjMzLDk2NSw4OCw2Nw.jpg"  height="278px">
        <figcaption>
          <h1 class="h2-info">protein</h1>
          <p>Not only does eating protein help prevent muscle breakdown, but it can also help build muscles.</p>
        </figcation>
    </figure>
      
    </div>
    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/4bc234843127.Y3JvcCw3MzUsNTc1LDQwNyw1.jpg" height="278px">
        <figcaption>
          <h1 class="h2-info">Cardio</h1>
          <p> As blood and oxygen are delivered more efficiently to those muscles, they improve their ability to recover and build..</p>
        </figcation>
    </figure>
      
    </div>
    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/faee8545810637.Y3JvcCwxNDAzLDEwOTgsMCw0NDM.jpg" height="278px">
        <figcaption>
          <h1 class="h2-info">Vitamin C</h1>
          <p>Vitamin C is a powerful antioxidant that is important in helping the body reduce the damage done by free radicals.</p>
        </figcation>
    </figure>
      
    </div>
    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/48d4fd165236719.Y3JvcCwxMDMxLDgwNiw0NDQsMTM1.jpg" height="278px">
        <figcaption>
          <h1 class="h2-info">Vegetables</h1>
          <p> 
            They provide carbohydrates, minerals, fiber,and antioxidants which work together to serve as energy, hydration and digestion .</p>
        </figcation>
    </figure>
      
    </div>
    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://t3.ftcdn.net/jpg/04/86/73/28/240_F_486732895_zlXqJvrkg3m46QYokRNM87Lea045p049.jpg" height="278px">
        <figcaption>
          <h1 class="h2-info">Creatine</h1>
          <p>Creatine is thought to improve strength, increase lean muscle mass, and help the muscles recover more quickly during exercise.</p>
        </figcation>
    </figure>
      
    </div>

    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/77992d155268703.Y3JvcCw4MTMsNjM2LDcyLDA.jpeg" height="278px">
        <figcaption>
          <h1 class="h2-info">Nutrition</h1>
          <p>A balanced diet is essential for good health . Complementary medicines can help supplement any nutritional gaps but should not be a substitute for a healthy diet.</p>
        </figcation>
    </figure>
      
    </div>

    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/c22746147053519.Y3JvcCwxNDAwLDEwOTUsMCwzOTU.jpg" height="278px">
        <figcaption>
          <h1 class="h2-info">Omega-3</h1>
          <p>Omega-3s contain anti-inflammatory properties which aid in muscle recovery and injury prevention.</p>
        </figcation>
    </figure>
      
    </div>

    <div class = "row">
      <figure class = "test col-xs-6">
        <img src = "https://t4.ftcdn.net/jpg/05/77/56/69/240_F_577566989_2Vx4K1UAni0iJzBXhYewSQLl0w6J9fSH.jpg" height="278px">
        <figcaption>
          <h1 class="h2-info">workout</h1>
          <p>sports can help you reach your fitness goals and maintain a healthy weight and lowering the chance of osteoporosis or breast cancer later in life.</p>
        </figcation>
    </figure>
      
    </div>
    
   
  </div>
</div>
</section>

<section class="avant_footer"></section>
<section class="section-products" id="sec2">

  <div class="swiper-container-mySwiper">
    <div class="swiper-wrapper">
      <div class="group--title">
        <h2>Featured Product</h2>
        <div class="group--subtitle">
          Popular Products
        </div>
      </div>
      <?php
        $req = $conn->query('SELECT * FROM productes where categorie="sport-protein"');
   if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="240px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro1.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>
<?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro2.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>  
 <?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro3.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>
<?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro4.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>    
<?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro5.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>    
<?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro6.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>    
<?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro7.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>    
<?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro8.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>         
   <?php
     if($donn = mysqli_fetch_assoc($req)) {
 ?>
      <!--slide 1 -->
      <div class="swiper-slide"> 
  <div class="card">
    <div class="imgBox">
      <img src="<?php echo $donn["img"];?>" alt="" width="250px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prpro9.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>   
 
  
  <!--siper slider end-->
  </section> 
    <section class="pub">
    <div class="divpub">

    <figure class="snip1543">
      <img
        src="https://t3.ftcdn.net/jpg/01/38/73/66/240_F_138736695_euEGK7TjUdAKQd0VLWIxTLn9UhcSM5Bq.jpg"
         height="180px">
      <figcaption>
        <h3>healthy lifestyle</h3>
        <p>help to build strong bones,and strengthen muscles.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543">
      <img
        src="https://t3.ftcdn.net/jpg/02/67/51/98/240_F_267519882_vW63yRgXrF7ifmDLYSGBYdrnEQHt8iJu.jpg" height="185px" />
      <figcaption>
        <h3>sport</h3>
        <p>Any exercise program should include cardiovascular exercise, which strengthens the heart and burns calories.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543">
      <img
        src="https://t4.ftcdn.net/jpg/02/09/47/39/240_F_209473934_FEWW3Dxikm2nsCQVm5OZSAp07uAGhSGm.jpg" height="183px" />
      <figcaption>
        <h3>good Health </h3>
        <p>Limit Unhealthy Foods and Eat Healthy Meals,Take Multivitamin Supplements.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
  </div>
  </section>
 <section class="pubb" ></section>
   <section class="slideproduct">
    <div class="swiper-slide">
      <div>
      <div class="group--title--2">
        <h2 class="groupe-title-h">New collection</h2>
       
      </div>
      <ul id="autoWidth" class="cs-hidden">
  <!---------------------SLIDE1--------------------->
      <li class="item-a"> 
        <div class="card">
        <div class="imgBox">
          <img src="https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/thr/thr00464/v/45.jpg" alt="">
        </div>
        <div class="card-brand">
          <h4>Thorne</h4>
        </div>
        <div class="card-content">
          <h3 class="vitamine_type">Thorne, Amino Complex<h2 class="vitamine_descri">Berry Flavor</h2></h3>
          <div class="prix"><h2 class="price_vit">42,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
          
          
        </div>
      
      </div>
    </li>
      <!---------------------SLIDE2--------------------->
      <li class="item-a"> 
        <div class="card">
        <div class="imgBox">
          <img src="https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/evl/evl02067/v/42.jpg" alt="">
        </div>
        <div class="card-brand">
          <h4>EVLution </h4>
        </div>
        <div class="card-content">
          <h3 class="vitamine_type">EVLution Nutrition<h2 class="vitamine_descri">Multivitamins For Women</h2></h3>
          <div class="prix"><h2 class="price_vit">17,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
         
        </div>
      </div>
    </li>
     <!---------------------SLIDE3--------------------->
     <li class="item-a"> 
      <div class="card">
      <div class="imgBox">
        <img src="https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/mrm/mrm71020/v/44.jpg" alt="">
      </div>
      <div class="card-brand">
        <h4>MRM Nutrition</h4>
      </div>
      <div class="card-content">
        <h3 class="vitamine_type">MRM Nutrition,Chrysine<h2 class="vitamine_descri"> 30 Vegan Capsules</h2></h3>
        <div class="prix"><h2 class="price_vit">16,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
        
      
      </div>
    </div>
  </li>
   <!---------------------SLIDE4--------------------->
   <li class="item-a"> 
    <div class="card">
    <div class="imgBox">
      <img src="https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/sre/sre01015/v/50.jpg" alt="">
    </div>
    <div class="card-brand">
      <h4>Sports Research</h4>
    </div>
    <div class="card-content">
      <h3 class="vitamine_type">Sports Research<h2 class="vitamine_descri"> Coconut Oil Biotin </h2></h3>
      <div class="prix"><h2 class="price_vit">24,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
      
     
    </div>
  </div>
</li>
 <!---------------------SLIDE5--------------------->
 <li class="item-a"> 
  <div class="card">
  <div class="imgBox">
    <img src="https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/sol/sol01254/v/31.jpg" alt="">
  </div>
  <div class="card-brand">
    <h4>Solgar</h4>
  </div>
  <div class="card-content">
    <h3 class="vitamine_type">Solgar <h2 class="vitamine_descri">L-Glutamine  </h2></h3>
    <div class="prix"><h2 class="price_vit">12,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
    
   
  </div>
</div>
</li>
 <!---------------------SLIDE6--------------------->
 <li class="item-a"> 
  <div class="card">
  <div class="imgBox">
    <img src="https://cloudinary.images-iherb.com/image/upload/f_auto,q_auto:eco/images/nob/nob27436/v/8.jpg" alt="">
  </div>
  <div class="card-brand">
    <h4>Nobi Nutrition</h4>
  </div>
  <div class="card-content">
    <h3 class="vitamine_type">Nobi Nutritio<h2 class="vitamine_descri">Green Tea Fat Burner Gummies</h2></h3>
    <div class="prix"><h2 class="price_vit">18,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
    
    
  </div>
</div>
</li>
    </ul>

    </div>
   
  </div>
   </section>
   <div class="scroll-up">
    <a href="#"><i class="fa-sharp fa-solid fa-up-long"></i></a>
    
  </div>
  <section class="pieds_page">
    <footer>
      <div class="roww">
          <div class="col">
              <h1 class="footer_logo"> ParaMarket</h1>
              <p class="footer_about">Paramarket is an online sales site for parapharmaceutical products.
                 It is today the largest online parapharmacy. Health, beauty, well-being, 
                 slimming products... You benefit from low prices, a wide choice of ranges and all your favorite laboratories. All products are parapharmaceuticals, so they are over the counter and do not require prescriptions.
              </p>
          </div>
          <div class="col">
              <h3>Office <div class="bottom_line"><span></span></div></h3>
              <p>Al Mikat Para Medic  </p> 
              <p>hay Nahda 1 grp. Al Aahd</p>
              <p>n° 376 - Rabat - Maroc</p>
              <p class="footer_email">ParaMarket@gamil.com</p>
              <h4>+21245958195</h4>
          </div>
          <div class="col">
              <h3>Links <div class="bottom_line"><span></span></div></h3>
              <ul>
                  <li><a href="file:///C:/Users/Utilisateur/OneDrive/Documents/pfe/pfe_final/page-acceuil/navbar.html">HOME</a></li>
                  <li><a href="">ABOUT</a></li>
                  <li><a href="">SERVICE</a></li>
                  <li><a href="">CONTACT US</a></li>
              </ul>
          </div>
          <div class="col">
              <h3>Newsletter <div class="bottom_line"><span></span></div></h3>
              <form>
                  <ion-icon class="icon" name="mail"></ion-icon>
                  <input type="email" placeholder="Enter your email" required>
                  <button type="submit"><ion-icon class="icon_right" name="arrow-round-forward"></ion-icon></button>
              </form>
              <div class="social_icons">
                <i class="fa-brands fa-facebook" style="color: #74dae2;" ></i>
                <i class="fa-brands fa-whatsapp" style="color: #74dae2;"></i>
                <i class="fa-brands fa-twitter" style="color: #74dae2;"></i>
                <i class="fa-brands fa-instagram" style="color: #74dae2;"></i>
              </div>
          </div>
      </div>
      <hr class="footer_hr">
      <div class="copyright">
        Made with <i class="fa-solid fa-heart" style="color:#ea9723;"></i>
        by <a href="" style="color: #ea9723;">our team</a> for our clients
      </div>
   </footer> 
  </section>
  <script src="jsprotein.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 
 <script>
    $(document).ready(function() {
  $('#autoWidth').lightSlider({
      autoWidth:true,
      loop:true,
      onSliderLoad: function() {
          $('#autoWidth').removeClass('cS-hidden');
      } 
  });  
});


 </script>

</body>
</html>