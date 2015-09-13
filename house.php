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
  <title>Rent4All</title>
  <!-- END TITLE -->

  <!-- START META, DESCRIPTION, KEYWORDS, AUTHOR -->
  <meta name="description" content="A Template by Carino Technologies" />
  <meta name="keywords" content="HTML, CSS, JavaScript" />
  <meta name="author" content="carinotechnologies" />
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
                <a class="button border animated fadeInUp delay-1s" href="signin.php">Log In</a>

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


  

  <div id="portfolio" class="student-products">

    <div class="row-gree">

      <div class="w-container wrap">

        <div class="center">

          <h2 class="underline">House Rents</h2>

          <!-- <h5>Search</h5>
          <input type="text" name="search" id="student-search-box" class="student-search" ng-model="query">
          <select class="student-search" id="city">
            <option value="bangalore">Bangalore</option>
            <option value="ahemdabad">Ahemdabad</option>
            <option value="delhi">Delhi</option>
            <option value="mumbai">Mumbai</option>
            <option value="chennai">Chennai</option>
            <option value="kolkata">Kolkata</option>
          </select>
          <div id="rep" ng-repeat="item in info| filter: query"></div>
           -->
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5714.054498951434!2d77.6017029837078!3d12.983736836187528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae166402bd723b%3A0x28498558d47e2300!2sQuikr+India!5e0!3m2!1sen!2sin!4v1442163827949" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>

    </div>

    <div class="row-back">

      <div class="w-container center">

        <div class="row">

          <div class="options">

            <ul>

    <li class="filter border medium show-all active" data-filter="all">Average Rent in the area: 16500</li>

    <li class="filter border medium location" data-filter="by_location">Near By Amenities include: Hospital(3KM), Mall(7KM) and many more</li>

</ul>

          </div>

        </div>

        </div>

         <ul class="lb-album" id="Grid">

    <li class="mix web_design mix_all">

     <a class="image-popup-no-margins"  alt="responsive" title="Responsive Design" href="images/portfolio/thumbnail-01.jpg">

        <img src="images/portfolio/thumbnail-01.jpg">

        <span>

          <h4 class="underline heading-description">Responsive Design</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

      </a>

     

    </li>

    <li class="mix html5_css3 mix_all">

      <a class="image-popup-no-margins" href="images/portfolio/thumbnail-07.jpg">

        <img src="images/portfolio/thumbnail-07.jpg">

        <span>

          <h4 class="underline heading-description">HTML5 & CSS3</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

       </a>

    </li>

    <li class="mix html5_css3 mix_all">

      <a class="image-popup-no-margins" href="images/portfolio/thumbnail-08.jpg">

        <img src="images/portfolio/thumbnail-08.jpg">

        <span>

          <h4 class="underline heading-description">Grid System</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

       </a>

    </li>

    <li class="mix web_design mix_all">

      <a class="image-popup-no-margins" href="images/portfolio/thumbnail-02.jpg">

        <img src="images/portfolio/thumbnail-02.jpg">

        <span>

          <h4 class="underline heading-description">IOS7 Style</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

      </a>

    </li>

     <li class="mix web_design mix_all">

      <a class="image-popup-no-margins" href="images/portfolio/thumbnail-03.jpg">

        <img src="images/portfolio/thumbnail-03.jpg">

        <span>

          <h4 class="underline heading-description">Design Works</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

      </a>

    </li>

    <li class="mix html5_css3 mix_all">

      <a class="image-popup-no-margins" href="images/portfolio/thumbnail-06.jpg">

        <img src="images/portfolio/thumbnail-06.jpg">

        <span>

          <h4 class="underline heading-description">JQuery Slider</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

      </a>

    </li>

    <li class="mix web_design mix_all">

    <a class="image-popup-no-margins" href="images/portfolio/thumbnail-04.jpg">

        <img src="images/portfolio/thumbnail-04.jpg">

        <span>

          <h4 class="underline heading-description">Hunting Themes</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

      </a>

    </li>

    <li class="mix web_design mix_all">

      <a class="image-popup-no-margins" href="images/portfolio/thumbnail-05.jpg">

        <img src="images/portfolio/thumbnail-05.jpg">

        <span>

          <h4 class="underline heading-description">Flat Design</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

      </a>

    </li>

    

    <li class="mix html5_css3 mix_all">

      <a class="image-popup-no-margins" href="images/portfolio/thumbnail-09.jpg">

        <img src="images/portfolio/thumbnail-09.jpg">

        <span>

          <h4 class="underline heading-description">Long Shadow</h4>

          <p class="center description">Clinet / Themeforest</p>

        </span>

      </a>

    </li>

    </ul>

    </div>

  </div>

 <div class="footer row-back">
  <div class="w-container wrap-normal center">© <strong>RentKart </strong> 2015 - <span class="green">A product of Quikr Hackathon 2015</span></div>
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
  <script src="js/house.js"></script>
  <script src="js/angular.min.js"></script>
  <script src="js/angular-animate.min.js"></script>
  <script src="js/angular-route.min.js"></script>
  <!-- END JQUERY PLUGINS LOAD -->

</body>

</html>