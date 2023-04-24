<?php
require 'config.php';
$panierCount = isset($_SESSION['panier']) ? array_sum($_SESSION['panier']) : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Page Product</title>
  <link rel="stylesheet" href="stylebeauty.css">
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

            if (a === "caudali premier") {
                window.open("prbe1.php");
            }

            if (a === "caudali vinergetic ") {
                window.open("prbe2.php");
            }
            if (a === "vinopure") {
                window.open("prbe3.php");
            }
            if (a === "vinergetic c+") {
                window.open("prbe4.php");
            }

            if (a === "vinexpert") {
                window.open("prbe5.php");
            }
            if (a === "resveratrol") {
                window.open("prbe6.php");
            }
            if (a === "vinosun") {
                window.open("prbe7.php");
            }

            if (a === "dercos") {
                window.open("prbe8.php");
            }
            if (a === "sun protection") {
                window.open("prbe9.php");
            }


        }
   
    </script>
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
 <section class="home">
    <div class="slideshow_container">
        <div class="slideshow_inner">
          <div class="slideshow_slides">
            <img src='https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/9945cb162523303.Y3JvcCw2NTY0LDUxMzQsNjAxLDk3NA.jpg' />
            <a href="#" target="_blank"></a>
          </div>
      
          <div class="slideshow_slides">
            <img src='https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/547dd0151994597.Y3JvcCwxMjY1LDk5MCw2NSww.jpg'/>
            <a href="#" target="_blank"></a>
          </div>
      
          <div class="slideshow_slides">
            <img src='https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/c33ab285023683.Y3JvcCw4MDgsNjMyLDAsMA.png'/>
            <a href="#" target="_blank"></a>
          </div>
      
          <div class="slideshow_slides">
            <img src='https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/4814d6164984399.Y3JvcCwxMjYzLDk4NywwLDA.jpg' />
            <a href="#" target="_blank"></a>
          </div>
        </div>
      
        <button class="slideshow_button--prev">&#10094;</button>
        <button class="slideshow_button--next">&#10095;</button>
      </div>
 </section>
 <section class="show">
   <div class="container">
   
    
   
         <div class="column1">
             <div class="effect">
                <div class="effect-img">
                    <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/88413b165598175.Y3JvcCwxNDAwLDEwOTUsMCw1NjQ.jpg" alt="">

                </div>
                <div class="effect-text">
                   <div class="inner">
                       <h2>THE SOLUTION FOR TIRED SKIN</h2>
                       <p>Skin spots are not inevitable thanks to these effective targeted treatments on all skin types and all types of spots (sun, acne, melasma, age). A radiant and uniform face guaranteed!</p>
                       <div class="effect-btn">
                          <a href="#sec2" class="btn"><i class="fa fa-eye"></i>Read More</a>
                       </div>
            
                   </div> 
                    

                </div>

             </div>

         </div>
         <!---2eme imageeeeeeeeeeeeeeeeeeeeeeeeeee-------------->
          <hr id="hr1">
          <hr id="hr2">
         <div class="column2">
            <div class="effect">
               <div class="effect-img">
                   <img src="https://mir-s3-cdn-cf.behance.net/projects/max_808_webp/354cd6163682813.Y3JvcCw4MDgsNjMyLDAsMA.jpg" alt="">

               </div>
               <div class="effect-text">
                  <div class="inner">
                      <h2>BEAUTY IN A BOTTLE</h2>
                      <p>A toned body all year round is possible thanks to the Firming Programme. It acts effectively on the whole body to refine the silhouette and visibly firm the skin..</p>
                      <div class="effect-btn">
                         <a href="#sect4" class="btn"><i class="fa fa-eye"></i>Read More</a>
                      </div>
           
                  </div> 
                   

               </div>

            </div>

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
        <!--slide 1 -->
        <?php
        $req = $conn->query('SELECT * FROM productes where categorie="beauty"');
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
      <a href='prbe1.php ' class='buy'>show more</a>
      
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
      <a href='prbe2.php ' class='buy'>show more</a>
      
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
      <a href='prbe3.php ' class='buy'>show more</a>
      
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
      <a href='prbe4.php ' class='buy'>show more</a>
      
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
      <a href='prbe5.php ' class='buy'>show more</a>
      
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
      <img src="<?php echo $donn["img"];?>" alt="" width="200px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prbe6.php ' class='buy'>show more</a>
      
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
      <a href='prbe7.php ' class='buy'>show more</a>
      
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
      <a href='prbe8.php ' class='buy'>show more</a>
      
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
      <img src="<?php echo $donn["img"];?>" alt="" width="200px">
    </div>
    <div class="card-brand">
      <h4>Nutrimea</h4>
    </div>
    <div class="card-content">
      <h3><?php echo $donn["Name"];?></h3>
      <h2 class="price"><?php echo $donn["price"];?><small>,90</small>€</h2>
      <a href='prbe9.php ' class='buy'>show more</a>
      
    </div>
  </div>
</div>
<?php
   }
?>     
    
    <!--siper slider end-->
    </section>  
    
   <section class="pub_paque">
    <div class="tdi_H"><h2 > Treat yourself! We all want to feel confident in our own skin and positive about our own bodies.</h2></div>
    <div class="containerr">
    <div class = " containerr containerr1">
        <div class = "row">
            <div class = "tdimension">
                <a href = "#">
                </a>
        </div>
        </div>
    </div>
    <div class = "containerr containerr2">
	
      
        <div class = "row">
            <div class = "tdimension2">
                <a href = "#">
                </a>
        </div>
        </div>
    </div>
</div>
   </section>
   <div class="scroll-up">
    <a href="#"><i class="fa-sharp fa-solid fa-up-long"></i></a>
    
  </div>
  <section class="slideproduct" id="sect4">
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
          <img src="https://fr.filorga.com/wp-content/uploads/sites/3/2022/01/Filorga-3540550010861_1-350x350.jpg" alt="">
        </div>
        <div class="card-brand">
          <h4>FILORGA</h4>
        </div>
        <div class="card-content">
          <h3 class="vitamine_type">TIME-FILLER 5XP CRÈME<h2 class="vitamine_descri">  Crème visage anti-rides</h2></h3>
          <div class="prix"><h2 class="price_vit">69,<small>90</small>$</h2><i class="fa-solid fa-heart"></i></div>
          
        </div>
      </div>
    </li>
      <!---------------------SLIDE2--------------------->
      <li class="item-a"> 
        <div class="card">
        <div class="imgBox">
          <img src="https://fr.filorga.com/wp-content/uploads/sites/3/2022/04/Filorga-3540550000237_1-350x350.jpg" alt="">
        </div>
        <div class="card-brand">
          <h4>Filorga</h4>
        </div>
        <div class="card-content">
          <h3 class="vitamine_type">HYDRA-HYAL CREME
            <h2 class="vitamine_descri">Crème de jour hydratante </h2></h3>
          <div class="prix"><h2 class="price_vit">54,<small>90</small>$</h2><i class="fa-solid fa-heart"></i></div>
          
   
        </div>
      </div>
    </li>
     <!---------------------SLIDE3--------------------->
     <li class="item-a"> 
      <div class="card">
      <div class="imgBox">
        <img src="https://fr.filorga.com/wp-content/uploads/sites/3/2020/05/MOUSSE-DEMAQUILLANTE-Nettoyant-visage-avec-eau-3-1-600x600.jpg" alt="">
      </div>
      <div class="card-brand">
        <h4>Filorga</h4>
      </div>
      <div class="card-content">
        <h3 class="vitamine_type">MOUSSE DÉMAQUILLANTE
          <h2 class="vitamine_descri">Nettoyant Visage à Base d’Eau </h2></h3>
        <div class="prix"><h2 class="price_vit">23,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
        
      </div>
    </div>
  </li>
   <!---------------------SLIDE4--------------------->
   <li class="item-a"> 
    <div class="card">
    <div class="imgBox">
      <img src="https://www.santepara.ma/wp-content/uploads/2021/11/nuxe-nuxuriance-595x600.jpg" alt="">
    </div>
    <div class="card-brand">
      <h4>Nuxe</h4>
    </div>
    <div class="card-content">
      <h3 class="vitamine_type">Nuxe Nuxuriance<h2 class="vitamine_descri"> Ultra Crème fluide 50ml </h2></h3>
      <div class="prix"><h2 class="price_vit">20,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
      
  
    </div>
  </div>
</li>
 <!---------------------SLIDE5--------------------->
 <li class="item-a"> 
  <div class="card">
  <div class="imgBox">
    <img src="https://www.santepara.ma/wp-content/uploads/2021/11/NUXE-BIO-MORINGA_EAU_MICELLAIRE-200ML-1-595x600.jpg" alt="">
  </div>
  <div class="card-brand">
    <h4>Nuxe</h4>
  </div>
  <div class="card-content">
    <h3 class="vitamine_type">NUXE BIO Eau <h2 class="vitamine_descri">Micellaire Démaquillante 200ml</h2></h3>
    <div class="prix"><h2 class="price_vit">10,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
    
  </div>
</div>
</li>
 <!---------------------SLIDE6--------------------->
 <li class="item-a"> 
  <div class="card">
  <div class="imgBox">
    <img src="https://www.santepara.ma/wp-content/uploads/2021/11/vichy-dercos-shampoing-anti-pelliculaire-purifiant-k-250ml-1_optimized.jpg" alt="">
  </div>
  <div class="card-brand">
    <h4>Vichy</h4>
  </div>
 <div class="card-content">
        <h3 class="vitamine_type">Vichy Dercos Shampoing <h2 class="vitamine_descri">Anti-Pelliculaire Purifiant K</h2></h3>
        <div class="prix"><h2 class="price_vit">10,<small>50</small>$</h2><i class="fa-solid fa-heart"></i></div>
        
        
      </div>
</div>
</li>
    </ul>

    </div>
   
  </div>
   </section>

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
      <hr class="footerhr">
      <div class="copyright">
        Made with <i class="fa-solid fa-heart" style="color:#ea9723;"></i>
        by <a href="" style="color: #ea9723;">our team</a> for our clients
      </div>
   </footer> 
  </section>
 <script src="jsbeauty.js"></script>
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