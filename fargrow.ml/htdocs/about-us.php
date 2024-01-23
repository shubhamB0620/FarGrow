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

<body class="about">
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
        <li><a  href="cart.php" class="parent"> Sell My Product</a></li>
        </li>
        <li><a href="about-us.php" >About us</a></li>
        <li><a href="contact.php" >Contact Us</a> </li>
      </ul>
    </div>
  </div>
</nav>
<div class="breadcrumb parallax-container">
  <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
  <h1>About us</h1>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about-us.php">About Us</a></li>
  </ul>
</div>
<div class="container">
  <div class="row">
    <div class="wwd">
      <div class="col-sm-5"><img class="img-responsive" src="image/about-us.jpg" alt="#"></div>
      <div class="col-sm-7">
        <div class="column-inner ">
          <div class="wrapper">
            <h4 class="aboutus-title">Welcome to our Farmer Ecommerce </h4>
            <div class="desc">
              <p>Presently recommendations for farmers supports mere one to one interaction between farmers and completely different specialists having different recommendations which will provide information about farmer’s victimization past agricultural activities that facilitate mining of information & ideas.
</p>
              <br>
              <p> Current Technology doesn’t provide with sufficient facilities related to sale.And other apps deliver services related to agricultural issues, problems, farmer communities, and merchant connectivity, etc. The Biggest problem a Farmer face is to sale his/her product to the correct merchant with its right value. So here we introduce our most achievable solution.
</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row team">
    <div class="col-md-offset-2 col-md-8">
      <h3 class="team-title">Our Creative Team</h3>
      <p class="text-center team-desc">make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised shing</p>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 team1 ">
      <div class="img-block"> <img alt="" src= class="img-responsive"> </div>
      <div class="text-box">
        <h3 class="name"></h3>
        <div class="deg"></div>
        <p></p>
        <div class="social-holder">
          <ul class="social">
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 team2 ">
      <div class="img-block"> <img alt="#" src="image/team2.jpg" class="img-responsive"> </div>
      <div class="text-box">
        <h3 class="name">Shubham Barangule</h3>
        <div class="deg">CEO Founder </div>
        <p>Diploma Holder</p>
        <div class="social-holder">
          <ul class="social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-3 col-xs-6 team3 ">
      <div class="img-block"> <img alt="#" src="image/team2.jpg" class="img-responsive"> </div>
      <div class="text-box">
        <h3 class="name">Aneeket Deo</h3>
        <div class="deg">CEO Founder </div>
        <p>Diploma Holder</p>
        <div class="social-holder">
          <ul class="social">
            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
  <div class="row about">
    <div class="col-md-offset-2 col-md-8">
      <h3 class="about-title">About Us</h3>
      <p class="text-center about-desc">We envision brighter future for farmers providing this unique idea with our hardest efforts</p>
    </div>
    <div class="skill">
      <div class="col-md-4">
        <ul>
          <li>
            <div id="progress1">
              <h4>78% Production Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress2">
              <h4>95% Publishing Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress3">
              <h4> 95% Marketing Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress4">
              <h4>90% Business Skills</h4>
            </div>
          </li>
          <li>
            <div id="progress5">
              <h4>80% Photography</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-4 mission">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-target="#Vision" data-toggle="tab">Our Vision</a></li>
        <li><a data-target="#Mission" data-toggle="tab">Our Mission</a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="Vision">
          <h4>Presently recommendations for farmers supports mere one to one interaction between farmers and completely different specialists having different recommendations which will provide information about farmer’s victimization past agricultural activities that facilitate mining of information & ideas. </p>
          <p></p>
        </div>
        <div class="tab-pane" id="Mission">
          <h4>Current Technology doesn’t provide with sufficient facilities related to sale.And other apps deliver services related to agricultural issues, problems, farmer communities, and merchant connectivity, etc. The Biggest problem a Farmer face is to sale his/her product to the correct merchant with its right value. So here we introduce our most achievable solution. </p>
          <p> </p>
        </div>
      </div>
    </div>
    <div class="col-md-4 who-we-are">
      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Wo We Are</a> </h4>
          </div>
          <div id="collapseOne" class="acordi-disc panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne"> We are diploma students from Zeal Polytechnic, Narhe proudly presenting you with our final year project <br>
             </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title"> <a class="collapsed accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Wo We Are  Made</a> </h4>
          </div>
          <div id="collapseTwo" class="acordi-disc panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">We are looking into the future where farmers would not have to deal with immense difficulties as such present. <br>
            We want to minimise the mediators between the farmer and the merchants or the retailers or any consumer in the market <br>
             </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Our Business</a> </h4>
          </div>
          <div id="collapseThree" class="acordi-disc panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">Our business here is minimising the whole lotta mediators between the farmer and consumer chain. <br>
           We ought to provide the direct link between farmer to customer<br>
             </div>
        </div>
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
<script src="javascript/DioProgress.js"></script> 
<script src="javascript/jquery.parallax.js"></script> 
<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>


<!-- Footer block End  --> 

<script type="text/javascript">
		$( "#progress1" ).appendSimpleProgressBar();
		$( "#progress1" ).slow( { width:"78" } );
		
		$( "#progress2" ).appendSimpleProgressBar();
		$( "#progress2" ).slow( { width:"92" } );
		
		$( "#progress3" ).appendSimpleProgressBar();
		$( "#progress3" ).slow( { width:"76" } );
		
		$( "#progress4" ).appendSimpleProgressBar();
		$( "#progress4" ).slow( { width:"98" } );
		
		$( "#progress5" ).appendSimpleProgressBar();
		$( "#progress5" ).slow( { width:"62" } );

</script> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 

<script src="js/jQuery.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
