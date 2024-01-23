<?php 
    session_start();

    
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

<body class="index">
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

                <!--logout validation-->

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
      
     <!-- <div class="col-sm-9 col-xs-9 header-right">
        <div id="search" class="input-group">
          <input type="text" name="search" value="" placeholder="Enter your keyword ..." class="form-control input-lg" />
          <span class="input-group-btn">
          <button type="submit" name="submit" class="btn btn-default btn-lg"><span>Search</span></button>
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
        
        <li><a  href="cart.php" class="parent"> Sell My Product</a></li>
       
        <li><a href="about-us.php" >About us</a></li>
        <li><a href="contact.php" >Contact Us</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="mainbanner">
  <div id="main-banner" class="owl-carousel home-slider">
    <div class="item"> <a href="#"><img src="image/banners/Main-Banner1.gif" alt="main-banner1" class="img-responsive" /></a></div>
    <div class="item"> <a href="#"><img src="image/banners/Main-Banner2.gif" alt="main-banner2" class="img-responsive" /></a></div>
    <div class="item"> <a href="#"><img src="image/banners/Main-Banner3.gif" alt="main-banner3" class="img-responsive" /></a></div>
  </div>
</div>
<div class="container-fluid"> 
<div class="cms_banner">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="banner sub-hover">
            <a href="#"><img src="image/banners/subbanner1.jpg" alt="Sub Banner1" class="img-responsive"></a>
            <div class="bannertext">
              <h2>Potato</h2>
              <p>From Top Brands</p>
              <button class="btn"><a href="category.php"> Shop Now</a></button>
            </div>            
          </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="banner sub-hover">
            <a href="#"><img src="image/banners/subbanner2.jpg" alt="Sub Banner2" class="img-responsive"></a>
            <div class="bannertext">
              <h2>Tomato</h2>
              <p>Discover Moulinex</p>
              <button class="btn"><a href="category.php"> Shop Now</a></button>
            </div>            
          </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="banner sub-hover">
            <a href="#"><img src="image/banners/subbanner3.jpg" alt="Sub Banner3" class="img-responsive"></a>
            <div class="bannertext">
              <h2>Cabbage</h2>
              <p>Measuring Tools & Scales</p>
              <button class="btn"><a href="category.php"> Shop Now</a></button>
            </div>            
          </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="banner sub-hover">
            <a href="#"><img src="image/banners/subbanner4.jpg" alt="Sub Banner4" class="img-responsive"></a>
            <div class="bannertext">
              <h2>Spinach</h2>
              <p>From Popular Brands</p>
              <button class="btn"><a href="category.php"> Shop Now</a></button>
            </div>            
          </div>
    </div>
  </div>
</div>
</div>
<div id="center">
  <div class="container">
    <div class="row">
      <div class="content col-sm-12">
        <div class="customtab">
          <h3 class="productblock-title">Our Collection   </h3>
          <div id="tabs" class="customtab-wrapper">
            
          </div>
        </div>
        <!-- tab-furniture-->
        <div id="tab-furnitur" class="tab-content">
            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product.php"> <img src="image/product/908.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/908.jpg" alt="iPod Classic" title="Pumpkin" class="img-responsive" /> </a>
                    <ul class="button-group">
                      <li>
                        <button type="button" class="addtocart-btn" title="Add to Cart" ><a href="category.php"> Buy Now </a></button>
                      </li>
                    </ul>
                  </div>
                  <div class="caption product-detail">
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <h4 class="product-name"><a href="#" title="Onion">Onion</a></h4>
                    <p class="price product-price">Rs.122.00<span class="price-tax">Ex Tax: Rs.100.00</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product.php"> <img src="image/product/lemon.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/lemon.jpg" alt="iPod Classic" title="Cauliflower" class="img-responsive" /> </a>
                    <ul class="button-group">
                      
                      <li>
                        <button type="button" class="addtocart-btn" title="Add to Cart"  ><a href="category.php"> Buy Now </a></button>
                      </li>
                    </ul>
                  </div>
                  <div class="caption product-detail">
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <h4 class="product-name"><a href="#" title="Lemon">Lemon</a></h4>
                    <p class="price product-price">Rs.122.00<span class="less">Rs.150.00</span><span class="price-tax">Ex Tax: Rs.100.00</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"><a href="product.php"> <img src="image/product/carrots.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/carrots.jpg" alt="iPod Classic" title="Carrot" class="img-responsive" /> </a>
                    <ul class="button-group">
                      
                      <li>
                        <button type="button" class="addtocart-btn" title="Add to Cart"  ><a href="category.php"> Buy Now </a></button>
                      </li>
                    </ul>
                  </div>
                  <div class="caption product-detail">
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <h4 class="product-name"><a href="#" title="Carrot">Carrot</a></h4>
                    <p class="price product-price">Rs.122.00<span class="price-tax">Ex Tax: Rs.100.00</span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <div class="item">
                <div class="product-thumb">
                  <div class="image product-imageblock"> <a href="product.php"> <img src="image/product/beet.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/beet.jpg" alt="iPod Classic" title="Beet" class="img-responsive" /> </a>
                    <ul class="button-group">
                      
                      <li>
                        <button type="button" class="addtocart-btn" title="Add to Cart"  > <a href="category.php"> Buy Now </a> </button>
                      </li>
                    </ul>
                  </div>
                  <div class="caption product-detail">
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                    <h4 class="product-name"><a href="#" title="Beet">Beet</a></h4>
                    <p class="price product-price">Rs.122.00<span class="price-tax">Ex Tax: Rs.100.00</span></p>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="viewmore">
              <div class="btn"><a href="category.php">View More All Products</a></div>
            </div>
        </div>
        
  </div>
</div>

<!--Testimonials -->
<div class="customtab">
          <h3 class="productblock-title">Testimonials  </h3>
        
        </div>
<div class="parallax-container">
   <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
  <div class="container">
    <ul id="testimonial" class="row owl-carousel product-slider">
      <li class="item">
        <div class="panel-default">
          <div class="testimonial-image z-depth-5"><img src="image/t1.png" alt="#"></div>
          <div class="testimonial-name">
            <h2>Aneeket Deo</h2>
          </div>
          <div class="testimonial-designation">
            <p>Web Designer</p>
          </div>
          <div class="testimonial-desc">Is your dream to sell or buy vegetables online, farmer or consumer, own a hotel or are a vegetable retialer, or be totally virtual? Whether you’re a farmer, consumer, retailer, wholesaler, Fargrow will make sure you get started the right way.</div>
        </div>
      </li>
      <li class="item">
        <div class="panel-default">
          <div class="testimonial-image"><img src="image/t2.png" alt="#"></div>
          <div class="testimonial-name">
            <h2>Shubham Barangule</h2>
          </div>
          <div class="testimonial-designation">
            <p>Web Developer</p>
            <p>& Graphic Designer</p>
          </div>
          <div class="testimonial-desc">“I just wanted to share a quick note and let you know that you guys do a really good job. I’m glad I bought vegetables from you. It’s really great how easy your website is user friendly. I never have any problem at all.</div>
        </div>
      </li>
      <li class="item">
        <div class="panel-default">
          <div class="testimonial-image"><img src="image/t3.png" alt="#"></div>
          <div class="testimonial-name">
            <h2>Chloe Bennet</h2>
          </div>
          <div class="testimonial-designation">
            <p>Prime Customer</p>
          </div>
          <div class="testimonial-desc">Now it’s almost like having a vegetable store right beside me. I just choose the product, make the Purchase Order and click Buy now. It’s so simple.</div>
        </div>
      </li>
    </ul>
  </div>
</div>

  </div>
</div>


<footer>
  <div class="cms_searvice">
    <div class="container">
      <div class="row">
        <div class="col-md-3 ">
          <div class="cms-block1 z-depth-5">
            <h4>Fresh Products</h4>
            <p>At Your Doorstep</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block2">
            <h4>Buy From Farmers</h4>
            <p>No Mediators</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block3">
            <h4>24/7 Support</h4>
            <p>Feel Free to Contact us</p>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="cms-block4">
            <h4>Buy & Sell Online </h4>
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
              <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">infoservices@fargrow.com</a><br>
                </span></li>
              <li><i class="fa fa-mobile"></i><span class="phone2">9922425315<br>
                7498251990</span></li>
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
      <div class="copyright"> Copyright - Created by Fargrow &copy; 2020 </a></div>
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
