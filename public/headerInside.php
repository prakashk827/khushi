<?php include_once("public/companyInfo.php")?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/auston/multi-page/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 May 2018 06:26:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php companyName();?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link href="img/favicon.png" rel="shortcut icon" type="image/png" />
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- nivo slider CSS
    ============================================ -->
    <link rel="stylesheet" href="lib/custom-slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/custom-slider/css/preview.css" type="text/css" media="screen" />
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- font-awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <style type="text/css">
        
        .phonelink{
   

    position: fixed; /* Lock location always on the scree */
    bottom: 73px; /* Set to the bottom */
    right: 0; /* Set to the right */
    margin-bottom:35px; /* Add space around background */
    margin-right:10px;
    z-index:10;
}
.whatsaApplink{
    position: fixed; /* Lock location always on the scree */
    bottom:58px; /* Set to the bottom */
    right: 0; /* Set to the right */
    margin-right:10px;
    margin-bottom:102px; /* Add space around background */
    z-index:10;
}
.phoneicon{
    width: 45px; /* Set width of icon */
    height: 45px; /* Set height of icon */
}
@media screen and (max-width: 480px){
    
    .mbscreenphone{
        display: block; /* On small screens make phone icon appear */
    }
}
@media screen and (min-width: 481px){
    .mbscreenphone{
        display: none; /* On large screens make phone icon disappear */
    }
   
}
    </style>
</head>

<body class="home-2 home-4">

    <a class="mbscreenphone phonelink" href="tel:<?php mobile();?>">
          
           <img class="phoneicon" src="https://freeiconshop.com/wp-content/uploads/edd/phone-flat.png">
            <a  class="mbscreenphone whatsaApplink" href="https://wa.me/<?php mobile();?>/?text=">
                           <img class="phoneicon" src="whatsapp.png">
          
          
      </a>
    <!--[if lt IE 8]>
          <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    <!-- Add your site or application content here -->
    <!--  Header Area Start Here -->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-left">
                            <!--<p><i class="fa fa-map-marker" aria-hidden="true"></i> 44 New Design Street, rne 005</p>-->
                        </div>
                    </div>
                    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>							
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                        <div class="logo-area">
                             <a href="/"><img src="img/logo.png" id="logoHome" alt="image"></a>							 
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12  acurate">
                        <div class="main-menu-area">
                            <nav>
                                <ul id="nav">
                                   <li><a id="home" href="index.php">Home</a>
                                        <!--<ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index1.html">Home 2</a></li>
                                            <li><a href="index2.html">Home 3</a></li>
                                            <li><a href="index3.html">Home 4</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/default(finance)/index.html">Home One Page 1</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/finance2/index.html">Home One Page 2</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/consulting/index.html">Home One Page 3</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/corporate/index.html">Home One Page 4</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a id="about" href="khushi-infotech.php">About</a>
                                        <!--<ul>
                                            <li><a href="about.html">About 1</a></li>
                                            <li><a href="about2.html">About 2</a></li>
                                            <li><a href="about3.html">About 3</a></li>
                                            <li><a href="about4.html">About 4</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a id="services" href="software-training-services.php">Services</a>
                                        <!--<ul>
                                            <li><a href="services.html">Service 1</a></li>
                                            <li><a href="service2.html">Service 2</a></li>
                                            <li><a href="service3.html">Service 3</a></li>
                                            <li><a href="single-service.html">Single Service</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a id="our_work" href="software-platforms.php">Our Platform</a>
                                        <!--<ul>
                                            <li><a href="team.html">Team 1</a></li>
                                            <li><a href="team2.html">Team 2</a></li>
                                            <li><a href="team3.html">Team 3</a></li>
                                            <li><a href="team4.html">Team 4</a></li>
                                            <li><a href="single-team.html">Single Team</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="idea-software.php">Projects</a>
                                        <!--<ul>
                                            <li><a href="portfolio.html">Portfolio 1</a></li>
                                            <li><a href="portfolio2.html">Portfolio 2</a></li>
                                            <li><a href="portfolio3.html">Portfolio 3</a></li>
                                            <li><a href="portfolio4.html">Portfolio 4</a></li>
                                            <li><a href="single-portfolio.html">Single Portfolio</a></li>
                                        </ul>-->
                                    </li>
                                   <!-- <li class='has-submenu'><a href="#">News</a>
                                        <ul>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="single-news.html">Single News</a></li>
                                        </ul>
                                    </li>
                                    <li class='has-submenu'><a href="#">Pages</a>
                                        <ul class="mega-menu-area">
                                            <li class="single-mega-menu">
                                                <a href="index.html">Home Page 1</a>
                                                <a href="index1.html">Home Page 2</a>
                                                <a href="index2.html">Home Page 3</a>
                                                <a href="about.html">About Page 1</a>
                                                <a href="about2.html">About Page 2</a>
                                                <a href="about3.html">About Page 3</a>
                                                <a href="about4.html">About Page 4</a>
                                                <a href="service.html">Services Page 1</a>
                                            </li>
                                            <li class="single-mega-menu">
                                                <a href="service2.html">Services Page 2</a>
                                                <a href="service3.html">Services Page 3</a>
                                                <a href="single-service.html">Single Service</a>
                                                <a href="team.html">Team Page 1</a>
                                                <a href="team2.html">Team Page 1</a>
                                                <a href="team3.html">Team Page 1</a>
                                                <a href="team4.html">Team Page 1</a>
                                                <a href="single-team.html">Single Team</a>
                                            </li>
                                            <li class="single-mega-menu">
                                                <a href="portfolio.html">Portfolio Page 1</a>
                                                <a href="portfolio2.html">Portfolio Page 2</a>
                                                <a href="portfolio3.html">Portfolio Page 3</a>
                                                <a href="portfolio4.html">Portfolio Page 4</a>
                                                <a href="news.html">News Page</a>
                                                <a href="single-news.html">Single News</a>
                                                <a href="404.html">404 Page</a>
                                                <a href="Contact.html">Contact Us</a>
                                            </li>
                                        </ul>
                                    </li>-->
                                    <li><a id="contact" href="khushi-infotech-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                        <div class="search-box">
                            <input class="search-input" type="text" placeholder="Search Here...">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="mobile-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a id="home" href="/">Home</a>
                                        <!--<ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index1.html">Home 2</a></li>
                                            <li><a href="index2.html">Home 3</a></li>
                                            <li><a href="index3.html">Home 4</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/default(finance)/index.html">Home One Page 1</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/finance2/index.html">Home One Page 2</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/consulting/index.html">Home One Page 3</a></li>
                                            <li><a href="https://www.radiustheme.com/demo/html/auston/one-page/corporate/index.html">Home One Page 4</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a id="about" href="khushi-infotech.php">About</a>
                                       <!-- <ul>
                                            <li><a href="about.html">About 1</a></li>
                                            <li><a href="about2.html">About 2</a></li>
                                            <li><a href="about3.html">About 3</a></li>
                                            <li><a href="about4.html">About 4</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a id="services" href="software-training-services.php">Services</a>
                                       <!-- <ul>
                                            <li><a href="services.html">Service 1</a></li>
                                            <li><a href="service2.html">Service 2</a></li>
                                            <li><a href="service3.html">Service 3</a></li>
                                            <li><a href="single-service.html">Single Service</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="team.html">Our Work</a>
                                        <ul>
                                            <li><a href="team.html">Team 1</a></li>
                                            <li><a href="team2.html">Team 2</a></li>
                                            <li><a href="team3.html">Team 3</a></li>
                                            <li><a href="team4.html">Team 4</a></li>
                                            <li><a href="single-team.html">Single Team</a></li>
                                        </ul>
                                    </li>
                                   < <li><a href="portfolio.html">Portfolio</a>
                                        <ul>
                                            <li><a href="portfolio.html">Portfolio 1</a></li>
                                            <li><a href="portfolio2.html">Portfolio 2</a></li>
                                            <li><a href="portfolio3.html">Portfolio 3</a></li>
                                            <li><a href="portfolio4.html">Portfolio 4</a></li>
                                            <li><a href="single-portfolio.html">Single Portfolio</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a id="our_work" href="software-platforms.php">Our Platform</a></li>
                                       <!-- <ul>
                                            <li><a href="news.html">News</a></li>
                                            <li><a href="single-news.html">Single News</a></li>
                                        </ul>-->
                                    
                                    <li><a href="idea-software.php">Projects</a>
                                       <!-- <ul class="mega-menu-area">
                                            <li class="single-mega-menu">
                                                <a href="index.html">Home Page 1</a>
                                                <a href="index1.html">Home Page 2</a>
                                                <a href="index2.html">Home Page 3</a>
                                                <a href="about.html">About Page 1</a>
                                                <a href="about2.html">About Page 2</a>
                                                <a href="about3.html">About Page 3</a>
                                                <a href="about4.html">About Page 4</a>
                                                <a href="service.html">Services Page 1</a>
                                            </li>
                                            <li class="single-mega-menu">
                                                <a href="service2.html">Services Page 2</a>
                                                <a href="service3.html">Services Page 3</a>
                                                <a href="single-service.html">Single Service</a>
                                                <a href="team.html">Team Page 1</a>
                                                <a href="team2.html">Team Page 1</a>
                                                <a href="team3.html">Team Page 1</a>
                                                <a href="team4.html">Team Page 1</a>
                                                <a href="single-team.html">Single Team</a>
                                            </li>
                                            <li class="single-mega-menu">
                                                <a href="portfolio.html">Portfolio Page 1</a>
                                                <a href="portfolio2.html">Portfolio Page 2</a>
                                                <a href="portfolio3.html">Portfolio Page 3</a>
                                                <a href="portfolio4.html">Portfolio Page 4</a>
                                                <a href="news.html">News Page</a>
                                                <a href="single-news.html">Single News</a>
                                                <a href="404.html">404 Page</a>
                                                <a href="Contact.html">Contact Us</a>
                                            </li>
                                        </ul>-->
                                    </li>
                                    <li><a id="contact" href="khushi-infotech-contact.php">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>