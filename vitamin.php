<?php
require 'config.php';
$panierCount = isset($_SESSION['panier']) ? array_sum($_SESSION['panier']) : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Page Product</title>
  <link rel="stylesheet" href="style.css">
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
</style>
  <script>
    
        function ouvrirPage() {
            var a = document.getElementById("search").value;

            if (a === "vitamin c facial") {
                window.open("pr2.php");
            }

            if (a === "calcuim") {
                window.open("pr3.php");
            }
            if (a === "acide") {
                window.open("pr.php");
            }
            if (a === "vitamin c") {
                window.open("pr4.php");
            }

            if (a === "vitamin D3") {
                window.open("pr5.php");
            }
            if (a === "la biotine") {
                window.open("pr6.php");
            }
            if (a === "zinc") {
                window.open("pr7.php");
            }

            if (a === "la spiruline") {
                window.open("pr8.php");
            }
            if (a === "le charbon actif") {
                window.open("pr9.php");
            }


        }
   
    </script>
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
        <div class="content">
           <h1>health </h1>
        </div>
        <div class="scrdwn">
        <a href="#sec2">
         <div class="scroll-down"></div>
         </a>
        </div>
      </div>
        
      
    </section>


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
   
   $req = $conn->query('SELECT * FROM productes where categorie="vitamin"');
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
      <a href='pr3.php ' class='buy'>show more</a>
      
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
      <a href='pr2.php ' class='buy'>show more</a>
      
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
      <a href='pr.php ' class='buy'>show more</a>
      
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
      <a href='pr4.php ' class='buy'>show more</a>
      
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
      <a href='pr5.php ' class='buy'>show more</a>
      
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
      <a href='pr6.php ' class='buy'>show more</a>
      
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
      <a href='pr7.php ' class='buy'>show more</a>
      
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
      <a href='pr8.php ' class='buy'>show more</a>
      
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
      <a href='pr9.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>    
          
  <!--siper slider end-->
  </section>
 
  <div class="scroll-up">
    <a href="#"><i class="fa-sharp fa-solid fa-up-long"></i></a>
    
  </div>
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
          <img src="https://m1.nutriandco.com/themes/nutriandco/assets/img/webp/1869-large_default.webp" alt="">
        </div>
        <div class="card-brand">
          <h4>Nutrimea</h4>
        </div>
        <div class="card-content">
          <h3>Perfect Skin - Spécial <span>Bronzage</span></h3>
          <h2 class="price">18,<small>90</small>€</h2>
       
        </div>
      </div>
    </li>
      <!---------------------SLIDE2--------------------->
      <li class="item-a"> 
        <div class="card">
        <div class="imgBox">
          <img src="https://www.nutrimea.com/webp/14-home_default/tribulus-terrestris-900mg.webp" alt="">
        </div>
        <div class="card-brand">
          <h4>Nutrimea</h4>
        </div>
        <div class="card-content">
          <h3>Perfect Skin - Spécial <span>Bronzage</span></h3>
          <h2 class="price">18,<small>90</small>€</h2>
      
        </div>
      </div>
    </li>
     <!---------------------SLIDE3--------------------->
     <li class="item-a"> 
      <div class="card">
      <div class="imgBox">
        <img src="https://cdn.shopify.com/s/files/1/0540/7119/7867/products/MainImage_Formule-Probio_500x.jpg?v=1677496952" alt="">
      </div>
      <div class="card-brand">
        <h4>Nutrimea</h4>
      </div>
      <div class="card-content">
        <h3>Perfect Skin - Spécial <span>Bronzage</span></h3>
        <h2 class="price">18,<small>90</small>€</h2>
    
      </div>
    </div>
  </li>
   <!---------------------SLIDE4--------------------->
   <li class="item-a"> 
    <div class="card">
    <div class="imgBox">
      <img src="https://cdn.shopify.com/s/files/1/0540/7119/7867/products/MainImage_VitamineB12_500x.jpg?v=1677497499" alt="">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3>Perfect Skin - Spécial <span>Bronzage</span></h3>
      <h2 class="price">18,<small>90</small>€</h2>
      
    </div>
  </div>
</li>
 <!---------------------SLIDE5--------------------->
 <li class="item-a"> 
  <div class="card">
  <div class="imgBox">
    <img src="https://cdn.shopify.com/s/files/1/0540/7119/7867/products/FicheProduit-Lysine_500x.jpg?v=1677834421" alt="">
  </div>
  <div class="card-brand">
    <h4>Nutrimea</h4>
  </div>
  <div class="card-content">
    <h3>Perfect Skin - Spécial <span>Bronzage</span></h3>
    <h2 class="price">18,<small>90</small>€</h2>
   
  </div>
</div>
</li>
 <!---------------------SLIDE6--------------------->
 <li class="item-a"> 
  <div class="card">
  <div class="imgBox">
    <img src="https://www.nutrimea.com/webp/200-home_default/garcinia-cambogia.webp" alt="">
  </div>
  <div class="card-brand">
    <h4>Nutrimea</h4>
  </div>
  <div class="card-content">
    <h3>Perfect Skin - Spécial <span>Bronzage</span></h3>
    <h2 class="price">18,<small>90</small>€</h2>

  </div>
</div>
</li>
    </ul>

    </div>
   
  
   </section>
  
   <section class="conseil">
    <h4>DISCOVER</h4>
   <h2>The benefits of Vitamin C</h2>
   <div class="divimg">
   
    <div class="defense">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQi-YdFLOGlOhoxaY5Ld2E9oKRigksCFqEgVkfJ67vds_cb3yF"  width="100px"  height="100px" >
    <h3>Immune defenses</h3>
    </div>
  
  <div class="collagene">
    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcREV_a3fuV31K8y7ZG2VnGxwig2oNp-IHc7igqu1Y6tAWOnQoAF" width="100" height="100" >
    <h3>Tone & vitality</h3>
  </div>
  <div class="musculaire">
    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS3VU-8zW6atw5qy8ZgciuQpenMbxd-YtgRG06orwf2J8Ci3ZsB" width="100" height="100">
    <h3>Nervous system</h3>
  </div>
  <div class="vitalite">
    <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSOqvHFOxheWYOGm2DKylAYNn4--pHM_pll1YoFEqNumB9oVWy7"  width="100"  height="100" >
    <h3>Production of collagen</h3>
    </div>
  
</div>
   </section> 
  <br>
  
   <section class="pub">
    <div class="divpub">

    <figure class="snip1543">
      <img
        src="data:image/jpeg;base64,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"
         height="180px">
      <figcaption>
        <h3>healthy lifestyle</h3>
        <p>The perfect solution for people wanting to live a healthier lifestyle.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543">
      <img
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS16Ui8Rky4Mcf6IUQLqYPcnnNcYQL_FSM5w0nARl_GBUAJGDQr6lje8J3twTby7GoXc4A&usqp=CAU" />
      <figcaption>
        <h3>Nutritional Products</h3>
        <p>Medicine and Health Care Administration and Control Authority.</p>
      </figcaption>
      <a href="#"></a>
    </figure>
    <figure class="snip1543">
      <img
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTj24DfpM8Ul_pyP9O5zKRH_2z4UEGwYXLcCT5D85wB4STzLXQXFTAZpSy2dlgtwO7mOsc&usqp=CAU" />
      <figcaption>
        <h3>Consumer Health </h3>
        <p>Create Your Own Health Products Made in Europe..</p>
      </figcaption>
      <a href="#"></a>
    </figure>
  </div>
  </section>
 <section class="pubb" ></section>
 <br>
   <section class="pieds_page">
    <footer>
      <div class="row">
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
                  <li><a href="file:///C:/Users/Utilisateur/OneDrive/Documents/pfe/navbar/navbar.html#">HOME</a></li>
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
      <hr>
      <div class="copyright">
        Made with <i class="fa-solid fa-heart" style="color:#ea9723;"></i>
        by <a href="" style="color: #ea9723;">our team</a> for our clients
      </div>
   </footer> 
  </section>
   <!----------------------------------JS----------------------------->
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


