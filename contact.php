<?php
require 'config.php';
$panierCount = isset($_SESSION['panier']) ? array_sum($_SESSION['panier']) : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   

input[type=text], select, textarea {
    width: 50%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #04AA6D;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container {
    margin-top: 80px;
    border-radius: 5px;
    padding: 20px;
    background-color: antiquewhite;
    height: 1000px;
  }

.container img{
  width:500px;
		 float: right;    
        	 margin: 0;

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
     <script src="script.js"></script>
     <script src="https://kit.fontawesome.com/d22cd7cbf1.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
    <a href="index.php" class="logo">Paramarket</a>
    <div class="group">
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="contact.php" >contact</a></li>
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
    <div class="container" id="se">
        <img src="photo0.jpg">
        <h2>Contact us</h2><br>
        <form action="ind.php" method="post">
        <label for="fname">Full Name</label><br>
        <input type="text" id="fname" name="name" placeholder="Your name.." required><br>
    
        <label for="lname">Email</label><br>
        <input type="text" id="lname" name="email" placeholder="Your email "required><br>
    
        <label for="country">Country</label><br>
        <select id="country" name="country" required>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            <option value="morocco">Morocco</option>
        </select><br>
    
        <label for="subject">Subject</label><br>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"required></textarea><br>
    
        <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>