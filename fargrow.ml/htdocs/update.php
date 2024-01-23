<?php include('server.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fargrow</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src='https://www.google.com/recaptcha/api.js'></script>
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
            
            <div class="wel-come-msg"> Welcome to our online store! </div>
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
  <h1>Update your details</h1>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Account</a></li>
    <li><a href="update.php">Update</a></li>
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
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-sm-9" id="content">
       <?php  
        $up_MobNo=$_SESSION['MobNo'];
        $up_Fname=$_SESSION['Fname'];
        $up_Lname=$_SESSION['Lname'];
        $up_email=$_SESSION['email'];
        $up_Addr1=$_SESSION['Addr1'];
        $up_Addr2=$_SESSION['Addr2'];
        $up_zone_id=$_SESSION['zone_id'];
        $up_postcode=$_SESSION['postcode'];
        $up_country_id=$_SESSION['country_id'];
        $up_zone_id_2=$_SESSION['zone_id_2'];
               
                   
         ?>
      <form class="form-horizontal" enctype="multipart/form-data" method="post" >
        <fieldset id="account">
          <legend>Your Personal Details</legend>
          <div class="form-group required">
          <?php include('errors.php')?>
            <label for="input-firstname" class="col-sm-2 control-label">First Name*</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="<?php echo $up_Fname?>" name="Fname" required>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-lastname" class="col-sm-2 control-label">Last Name*</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="<?php echo $up_Lname?>" name="Lname" required>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-telephone" class="col-sm-2 control-label" >Mobile No.*</label>
            <div class="col-sm-10">
              <label for="input-telephone" class="col-sm-2 control-label"><?php echo $up_MobNo ?></label>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="<?php echo $up_email ?>" name="email" >
            </div>
          </div>
          
          
        </fieldset>
        <fieldset id="address">
          <legend>Your Address</legend>
          
          <div class="form-group required">
            <label for="input-address-1" class="col-sm-2 control-label">Address 1*</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="<?php echo $up_Addr1 ?>" name="Addr1" required>
            </div>
          </div>
          <div class="form-group">
            <label for="input-address-2" class="col-sm-2 control-label">Address 2*</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-address-2" placeholder="Address 2" value="<?php echo $up_Addr2 ?>" name="Addr2" required>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-city" class="col-sm-2 control-label">City*</label>
            <div class="col-sm-10">
             <select class="form-control" id="input-zone" name="zone_id" value="<?php echo $up_zone_id?>" required>
             <option value="0" selected="selected">Select City</option><option value="Ahmednagar">Ahmednagar</option><option value="Akola">Akola</option><option value="Amravati">Amravati</option><option value="Aurangabad">Aurangabad</option><option value="Bhandara">Bhandara</option><option value="Bid">Bid</option><option value="Buldana">Buldana</option><option value="Chandrapur">Chandrapur</option><option value="Dhule">Dhule</option><option value="Gadchiroli">Gadchiroli</option><option value="Gondiya">Gondiya</option><option value="Hingoli">Hingoli</option><option value="Jalgaon">Jalgaon</option><option value="Jalna">Jalna</option><option value="Kolhapur">Kolhapur</option><option value="Latur">Latur</option><option value="Mumbai">Mumbai</option><option value="Nagpur">Nagpur</option><option value="Nanded">Nanded</option><option value="Nandurbar">Nandurbar</option><option value="Nashik">Nashik</option><option value="Osmanabad">Osmanabad</option><option value="Parbhani">Parbhani</option><option value="Pune">Pune</option><option value="Raigarh">Raigarh</option><option value="Ratnagiri">Ratnagiri</option><option value="Sangli">Sangli</option><option value="Satara">Satara</option><option value="Sindhudurg">Sindhudurg</option><option value="Solapur">Solapur</option><option value="Thane">Thane</option><option value="Wardha">Wardha</option><option value="Washim">Washim</option><option value="Yavatmal">Yavatmal</option>
             
             </select>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-postcode" class="col-sm-2 control-label">Post Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="<?php echo $up_postcode?>" name="postcode">
            </div>
          </div>
          <div class="form-group required">
            <label for="input-country" class="col-sm-2 control-label">Country*</label>
            <div class="col-sm-10">
              <select class="form-control" id="input-country" value="<?php echo $up_country_id?>" name="country_id" required>
                <option selected="selected" value="India">India</option>
              </select>
            </div>
          </div>
          <div class="form-group required">
            <label for="input-zone" class="col-sm-2 control-label">Region / State*</label>
            <div class="col-sm-10">
              <select class="form-control" id="input-zone" value="<?php echo $up_zone_id_2?>" name="zone_id_2" required>
               <option value="0">Select State</option>
                            <option value="ANDAMAN & NICOBAR ISLANDS">ANDAMAN &amp; NICOBAR ISLANDS</option><option value="ANDHRA PRADESH">ANDHRA PRADESH</option><option value="ARUNACHAL PRADESH">ARUNACHAL PRADESH</option><option value="ASSAM">ASSAM</option><option value="BIHAR">BIHAR</option><option value="CHANDIGARH">CHANDIGARH</option><option value="CHHATTISGARH">CHHATTISGARH</option><option value="DADRA & NAGAR HAVELI">DADRA &amp; NAGAR HAVELI</option><option value="DAMAN & DIU">DAMAN &amp; DIU</option><option value="GOA">GOA</option><option value="GUJARAT">GUJARAT</option><option value="HARYANA">HARYANA</option><option value="HIMACHAL PRADESH">HIMACHAL PRADESH</option><option value="JAMMU & KASHMIR">JAMMU &amp; KASHMIR</option><option value="JHARKHAND">JHARKHAND</option><option value="KARNATAKA">KARNATAKA</option><option value="KERALA">KERALA</option><option value="LAKSHADWEEP">LAKSHADWEEP</option><option value="MADHYA PRADESH">MADHYA PRADESH</option><option value="MAHARASHTRA">MAHARASHTRA</option><option value="MANIPUR">MANIPUR</option><option value="MEGHALAYA">MEGHALAYA</option><option value="MIZORAM">MIZORAM</option><option value="NAGALAND">NAGALAND</option><option value="NCT OF DELHI">NCT OF DELHI</option><option value="ODISHA">ODISHA</option><option value="PUDUCHERRY">PUDUCHERRY</option><option value="PUNJAB">PUNJAB</option><option value="RAJASTHAN">RAJASTHAN</option><option value="SIKKIM">SIKKIM</option><option value="TAMIL NADU">TAMIL NADU</option><option value="TELANGANA">TELANGANA</option><option value="TRIPURA">TRIPURA</option><option value="UTTAR PRADESH">UTTAR PRADESH</option><option value="UTTARAKHAND">UTTARAKHAND</option><option value="WEST BENGAL">WEST BENGAL</option>
              </select>
            </div>
          </div>
        </fieldset>
        
        <div class="buttons">
            &nbsp;
            <br>
            <input type="submit" class="btn btn-primary" value="Update" name="update">
            <input type="button" onclick="document.location='profile.php'" class="btn btn-primary" value="Back"  name="Back">
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