<?php 

  $connection = mysqli_connect("mysql.hostinger.in","u323038233_uno","unouno");
  mysqli_select_db($connection,"u323038233_quikr");
  $query = mysqli_query($connection,"SELECT * FROM users");
  //var_dump($query);


?>

<!DOCTYPE html>
<html ng-app>
  
<head><!-- START HEAD -->
  <meta charset="utf-8">
  <!-- START TITLE -->
  <title>Rent4all</title>
  <!-- END TITLE -->

  <!-- START META, DESCRIPTION, KEYWORDS, AUTHOR -->
  <meta name="description" content="Rent4all" />
  <meta name="keywords" content="rent,share,donate" />
  <meta name="author" content="uno" />
  <!-- END META, DESCRIPTION, KEYWORDS, AUTHOR -->

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- START THEME STYLE -->
  <link rel="stylesheet" type="text/css" href="css/normal.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/headhesive.css">
  <link href="css/animate.css" rel="stylesheet">

  <!-- END THEME STYLE -->

  <!-- START FONTAWESOME ICONS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- END FONTAWESOME ICONS CDN -->


  <!-- START FONTELLO ICONS STYLESHEET -->
  <link rel="stylesheet" type="text/css" href="css/fontello.css">
  <link rel="stylesheet" type="text/css" href="css/fontello-ie7.css">
  <!-- END FONTELLO ICONS STYLESHEET -->

  <!-- START MAGNIFIC POPUP STYLESHEET -->
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <!-- END MAGNIFIC POPUP STYLESHEET -->

  <!-- LOAD GOOGLE FONT OPEN SANS -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,600,700" rel="stylesheet" type="text/css">
  <!-- END GOOGLE FONT OPEN SANS -->
  

  <!-- START AJAX WEBFONTS -->
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
  <!-- END AJAX WEBFONTS -->

  <!-- START MOBILE DETECT -->
  <script>if (/mobile/i.test(navigator.userAgent)) document.documentElement.className += ' w-mobile';</script>
  <!-- END MOBILE DETECT -->

  <!-- START FAVICON -->
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  <!-- EDN FAVICON -->
    
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script><![endif]-->

</head><!-- END HEAD -->
<body> <!-- START BODY TAG -->
   

  <!-- START HEADER -->
  <!-- SCROLL DIV #boxscroll by nicescroll -->

<div tabindex="1000" style="overflow-y: auto;" id="boxscroll">


<!-- CHANGEABLE UNIQUE SECTOIN ID -->
<section id="home">

  <!-- START FIXED HEADER DIV -->
  <div class="banner">
    <!-- START CONTAINER -->
    <div class="w-container container">
      <div class="w-row">

        <!-- START COLUMN 3 -->
        <div class="w-col w-col-3 logo">
          <!-- START LOGO -->
          <a href="index.php"><img class="logo" src="images/logo.png" alt="FLAT ASPHALT"></a>
          <!-- END LOGO -->
        </div><!-- END COLUMN 3 -->
      
        <!-- START COLUMN 9 -->
        <div class="w-col w-col-9">

          <!-- START NAVIGATION -->
          <div class="w-nav navbar" data-collapse="medium" data-animation="default" data-duration="400" data-contain="1">
            <div class="w-container nav"><!-- START CONTAINER -->

              <!-- START NAVIGATION LINKS -->
              <nav class="w-nav-menu nav-menu" role="navigation">

                <!-- <a class="w-nav-link menu-li" href="#home">HOME</a>
                <a class="w-nav-link menu-li" href="index.html#features">FEATURES</a>
                <a class="w-nav-link menu-li" href="index.html#service">SERVICES</a>
                <a class="w-nav-link menu-li" href="index.html#portfolio">PORTFOLIO</a>
                <a class="w-nav-link menu-li" href="index.html#team">TEAM</a>
                <a class="w-nav-link menu-li" href="shortcodes.html">SHORTCODES</a>
                <a class="w-nav-link menu-li" href="index.html#contact">CONTACT</a> -->

                <a class="button animated fadeInUp delay-1s" href="register.php" style="margin-right: 20px;">Register</a>
                <a class="button border animated fadeInUp delay-1s" href="login.php">Log In</a>

              </nav>
              <!-- END NAVIGATION LINKS -->
              
              <!-- START MOBILE NAVIGATION BUTTON * DO NOT DELETE THIS DIV* -->
              <div class="w-nav-button">
                <div class="w-icon-nav-menu"></div>
              </div><!-- END MOBILE NAVIGATION BUTTON -->

            </div>
            <!-- END CONTAINER -->
          </div>
          <!-- END NAVIGATION -->
        </div>
        <!-- END COLUMN 9 -->
      </div>
    </div>
    <!-- END CONTAINER -->
  </div>
 <!-- END FIXED HEADER DIV -->
</section>
<!-- END SECTION -->
<!-- END HEADER -->


  

  <div id="portfolio" class="car-products">

    <div class="row-gree">

      <div class="w-container wrap">

        <div class="center">

          <h2 class="underline">Taxi Rental</h2>

          <h5>Search</h5>
          <input type="text" name="search" id="cars-search-box" class="cars-search" ng-model="query">
          <select class="cars-search" id="city">
            <option value="bangalore">Bangalore</option>
            <option value="ahemdabad">Ahemdabad</option>
            <option value="delhi">Delhi</option>
            <option value="mumbai">Mumbai</option>
            <option value="chennai">Chennai</option>
            <option value="kolkata">Kolkata</option>
          </select>
          <div id="rep" ng-repeat="item in info| filter: query"></div>
        </div>

      </div>

    </div>

    <div class="row-back">

      <div class="w-container center">

        <div class="row">

          <div class="options">

            <ul>

    <li class="filter button border medium show-all active" data-filter="all">Show All</li>

    <li class="filter button border medium location" data-filter="by_location">By Locality</li>

</ul>

          </div>

        </div>

        </div>

         <ul class="lb-album" id="Grid">

    </ul>
        <div class="ad">
          
          <img src="images/ad.jpg">
        </div>
    </div>

  </div>

 <div class="footer row-back">
  <div class="w-container wrap-normal center">© <strong>Rent4All </strong> 2015 - <span class="green">A product of Quikr Hackathon 2015</span></div>
 </div>


<!-- START JQUERY PLUGINS LOAD -->
  <script src="js/jquery.js"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/normal.js"></script>
  <script src="js/carousels.js"></script>
  <script src="js/jquery.stellar.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/jquery.mixitup.js"></script>
  <script src="js/testimonials.js"></script>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/rotating-text.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/headhesive.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/cars.js"></script>
  <script src="js/angular.min.js"></script>
  <script src="js/angular-animate.min.js"></script>
  <script src="js/angular-route.min.js"></script>
  <!-- END JQUERY PLUGINS LOAD -->

</body>

</html>