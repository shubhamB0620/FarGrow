<?php 
    session_start();
    if(!isset($_SESSION['MobNo'] )){
        require("login.php");
        load();
    }
    $db = mysqli_connect("sql311.epizy.com", "epiz_25837779", "Shubham0706", "epiz_25837779_registration");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fargrow</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="image/favicon.png" rel="icon" type="image/png" >
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen" />
<link href="javascript/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"/>
<link href="css/stylesheet.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="javascript/owl-carousel/owl.carousel.css" type="text/css" rel="stylesheet" media="screen" />
<link href="javascript/owl-carousel/owl.transitions.css" type="text/css" rel="stylesheet" media="screen" />
<script type="text/javascript" src="javascript/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap/js/bootstrap.min.js" ></script>
<script type="text/javascript" src="javascript/template_js/jstree.min.js"></script>
<script type="text/javascript" src="javascript/template_js/template.js"></script>
<script type="text/javascript" src="javascript/common.js" ></script>
<script type="text/javascript" src="javascript/global.js"></script>
<script type="text/javascript" src="javascript/owl-carousel/owl.carousel.min.js" ></script>
</head>

<body class="col-2 left-col">
<div class="preloader loader" style="display: block;"> <img src="image/loader3.gif"  alt="#"/></div>
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="top-left pull-left">
            <div class="language">
              <form action="#" method="post" enctype="multipart/form-data" id="language">
                <div class="btn-group">
                  <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> English <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Marathi</a></li>
                    <li><a href="#"> English</a></li>
                   
                  </ul>
                </div>
              </form>
            </div>
            
            <div class="wel-come-msg"> Welcome <?php echo $_SESSION['Fname']." "; echo $_SESSION['Lname']." "; echo $_SESSION['success']; ?></div>
          </div>
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <?php
                    if(isset($_SESSION['MobNo'])){
                       echo '<li><a href="logout.php">Logout</a></li> 
                       <li><a href="profile.php">My Profile</a></li>';
                    }
                    else{
                        echo '<li><a href="register.php">Register</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="profile.php">My Profile</a></li>';
                    }
                    ?>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-3 col-xs-3 header-left">
        <div id="logo"> <a href="index.php"><img src="image/logo.png" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
      </div>
      <!--<div class="col-sm-9 col-xs-9 header-right">
        <div id="search" class="input-group">
          <input type="text" name="search" value="" placeholder="Enter your keyword ..." class="form-control input-lg" />
          <span class="input-group-btn">
          <button type="button" class="btn btn-default btn-lg"><span>Search</span></button>
          </span> </div>
      </div>-->
    </div>
  </div>
</header>
<nav id="menu" class="navbar">
  <div class="nav-inner">
    <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
      <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
    </div>
    <div class="navbar-collapse">
      <ul class="main-navigation">
        <li><a href="index.php"   class="parent"  >Home</a> </li>
        <li><a href="category.php"   class="parent"  >Product</a> </li>
       
        <li><a href="cart.php" class="parent"> Sell My Product</a>
       
        </li>
       
        <li><a href="about-us.php" >About us</a></li>
        <li><a href="contact.php" >Contact Us</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
  <h1>My Profile</h1>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="register.php">My Profile</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-3 hidden-xs column-left" id="column-left">
      <div class="Categories left-sidebar-widget">
        <div class="columnblock-title">Account</div>
        <div class="category_block">
          <ul class="box-category">
            <li><a href="profile.php">My Account</a></li>
            <li><a href="category.php">See Product</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-9" id="content">
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="update.php">
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required">
            <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10">
              <?php 
              if(isset($_SESSION['MobNo'])){
                   echo $_SESSION['Fname'];
                }
               ?>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10">
               <?php echo $_SESSION['Lname'];?>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
              <?php echo $_SESSION['email'];?>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-telephone" class="col-sm-2 control-label" >Mobile No.</label>
            <div class="col-sm-10">
              <?php echo $_SESSION['MobNo'];?>
            </div>
          </div>
          
        </fieldset>
        <fieldset id="address">
          <legend>Your Address</legend>
          
          <div class="form-group required">
            <label for="input-address-1" class="col-sm-2 control-label">Address 1</label>
            <div class="col-sm-10">
             <?php echo $_SESSION['Addr1'];?>
            </div>
          </div>
          <div class="form-group">
            <label for="input-address-2" class="col-sm-2 control-label">Address 2</label>
            <div class="col-sm-10">
              <?php echo $_SESSION['Addr2'];?>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-city" class="col-sm-2 control-label">City</label>
            <div class="col-sm-10">
             <?php echo $_SESSION['zone_id'];?>
             
             </select>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-postcode" class="col-sm-2 control-label">Post Code</label>
            <div class="col-sm-10">
              <?php echo $_SESSION['postcode'];?>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-country" class="col-sm-2 control-label">Country</label>
            <div class="col-sm-10">
              <?php echo $_SESSION['country_id'];?>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">Region / State</label>
            <div class="col-sm-10">
              <?php echo $_SESSION['zone_id_2'];?>
            </div>
          </div>
        </fieldset>
        
        <div class="buttons">
          <!--<div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
            <input type="checkbox" value="1" name="agree" required>-->
            &nbsp;
            <input type="submit" class="btn btn-primary" value="Update Details">
            <a href="logout.php"><input type="button" class="btn btn-primary" value="logout">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<footer>
  <div class="cms_searvice">
    <div class="container">
      <div class="row">
        <div class="col-md-3 ">
          <div class="cms-block1 z-depth-5">
            <h4>Free Shipping</h4>
            <p>All order over $150</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block2">
            <h4>30 Days Returns</h4>
            <p>Money Back Guarantee</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block3">
            <h4>24/7 Support</h4>
            <p>Feel free to Contact us</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block4">
            <h4>Online Shopping </h4>
            <p>Save Up to 70% on Store</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">INFORMATION</h5>
        <ul class="list-unstyled ul-wrapper">
         
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="about-us.php">About Us</a></li>
          
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">MY ACCOUNT</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="profile.php">My Account</a></li>
          
        </ul>
      </div>
   
     <div class="col-sm-3 footer-block">
        <div class="content_footercms_right">
          <div class="footer-contact">
            <h5 class="contact-title footer-title">Contact Us</h5>
            <ul class="ul-wrapper">
              <li><i class="fa fa-map-marker"></i><span class="location2">Offices Addresss:<br>
                Zeal Polytechnic<br>
                Narhe<br>
                Pune,  INDIA</span></li>
              <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">info@localhost.com</a><br>
                <a href="#">your@domain.com</a></span></li>
              <li><i class="fa fa-mobile"></i><span class="phone2">+91 0987-654-321<br>
                +91 0987-654-321</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div id="bottom-footer">
      <ul class="footer-link">
        <li><a href="index.php">Home</a></li>
        <li><a href="category.php">Product</a></li>
        <li><a href="cart.php">Sell My Product</a></li>
        <li><a href="about-us.php">About Us</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <div class="copyright"> Copyright - Created by Fargro &copy; 2020 </a></div>
      <div class="footer-bottom-cms">
       
      </div>
    </div>
  </div>
  <a id="scrollup">Scroll</a> </footer>

<script src="javascript/jquery.parallax.js"></script> 
<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>
</body>
</html>
