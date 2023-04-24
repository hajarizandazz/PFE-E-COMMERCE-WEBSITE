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
    <title>Sign in</title>
    <style>


        html {
            background: antiquewhite no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover
        }


        *,
        :after,
        :before {
            box-sizing: border-box
        }

        .clearfix:after,
        .clearfix:before {
            content: '';
            display: table
        }

        .clearfix:after {
            clear: both;
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }

        .login-wrap {

            width: 100%;
            margin-top: 100px;
            margin-left: 500px;
            max-width: 525px;
            min-height: 650px;
            position: absolute;
            background:  #EC7063 no-repeat center;

        }

        .login-html {

            width: 100%;
            height: 100%;
            position: absolute;
            padding: 90px 70px 50px 70px;

        }

        .login-html .sign-in-htm,
        .login-html .sign-up-htm {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            transform: rotateY(180deg);
            backface-visibility: hidden;
            transition: all .4s linear;
        }

        .login-html .sign-in,
        .login-html .sign-up,
        .login-form .group .check {
            display: none;
        }

        .login-html .tab,
        .login-form .group .label,
        .login-form .group .button {
            text-transform: uppercase;
        }

        .login-html .tab {
            font-size: 22px;
            margin-right: 15px;
            padding-bottom: 5px;
            margin: 0 15px 10px 0;
            display: inline-block;
            border-bottom: 2px solid transparent;
        }

        .login-html .sign-in:checked+.tab,
        .login-html .sign-up:checked+.tab {
            color: #fff;
            border-color: #1161ee;
        }

        .login-form {
            min-height: 345px;
            position: relative;
            perspective: 1000px;
            transform-style: preserve-3d;
        }

        .login-form .group {
            margin-bottom: 15px;
        }

        .login-form .group .label,
        .login-form .group .input,
        .login-form .group .button {
            width: 100%;
            color: #fff;
            display: block;
        }

        .login-form .group .input,
        .login-form .group .button {
            border: none;
            padding: 15px 20px;
            border-radius: 25px;
            background: rgba(255, 255, 255, .1);
        }

        .login-form .group input[data-type="password"] {

            -webkit-text-security: circle;
        }

        .login-form .group .label {
            color: #2C3E50;
            font-size: 12px;
        }

        .login-form .group .button {
            background: #1161ee;
        }

        .login-form .group label .icon {
            width: 15px;
            height: 15px;
            border-radius: 2px;
            position: relative;
            display: inline-block;
            background: rgba(255, 255, 255, .1);
        }

        .login-form .group label .icon:before,
        .login-form .group label .icon:after {
            content: '';
            width: 10px;
            height: 2px;
            background: #fff;
            position: absolute;
            transition: all .2s ease-in-out 0s;
        }

        .login-form .group label .icon:before {
            left: 3px;
            width: 5px;
            bottom: 6px;
            transform: scale(0) rotate(0);
        }

        .login-form .group label .icon:after {
            top: 6px;
            right: 0;
            transform: scale(0) rotate(0);
        }

        .login-form .group .check:checked+label {
            color: #fff;
        }

        .login-form .group .check:checked+label .icon {
            background: #1161ee;
        }

        .login-form .group .check:checked+label .icon:before {
            transform: scale(1) rotate(45deg);
        }

        .login-form .group .check:checked+label .icon:after {
            transform: scale(1) rotate(-45deg);
        }

        .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
            transform: rotate(0);
        }

        .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
            transform: rotate(0);
        }

        .hr {
            height: 2px;
            margin: 60px 0 50px 0;
            background: rgba(255, 255, 255, .2);
        }

        .foot-lnk {
            color: #fff;
            text-align: center;
            font-family: Century Gothic;
        }
        *{
    margin: 0;
    padding: 0;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
  
  }
  body{
    background antiquewhite;
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
    <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/d22cd7cbf1.js" crossorigin="anonymous"></script>
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

   

    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign
                In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="login.php" method="post">
                        <div class="group">

                            <label for="user" class="label">Email</label>
                            <input id="user" type="email" class="input" name="email">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="pass">
                        </div>
                        <div class="group">
                            <input id="check" type="checkbox" class="check" checked>
                            <label for="check"><span class="icon"></span> Keep me Signed in</label>
                        </div>
                        <div class="group">
                            <button type="submit" class="button" name="login">sign-in</button>
                        </div>
                        <div class="hr"></div>
                        <div class="foot-lnk">
                            <a href="forget.php">Forgot Password?</a>
                        </div>
                </div>

                </form>
                <form action="registration.php" method="post">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" type="text" class="input" name="name">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">address</label>
                            <input id="pass" type="text" class="input" name="address">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Age</label>
                            <input id="pass" type="text" class="input" name="age">
                        </div>

                        <div class="group">
                            <label for="pass" class="label">Email Address</label>
                            <input id="pass" type="email" class="input" name="email">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" type="password" class="input" data-type="password" name="pass">
                        </div>
                        <div class="group">
                            <button type="submit" class="button" name="ok"> Sign Up </button>

                        </div>
                </form>

                <div class="hr"></div>
                <div class="foot-lnk">
                    <label for="tab-1">Already Member?</a>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>