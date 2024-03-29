
<?php 
include ('config/config.php');
include_once('adminstrator/functions/functions.php');
include('posts/posts.php') 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>dStarite Technology Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" width="200">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- map cdn -->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel="stylesheet">
  <!-- // ajax script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-X2S5S2KWV1"></script>
  <script >
  window.dataLayer=window.dataLayer || [];
  function gtag(){
    dataLayer.push(arguments);
  }
  gtag('js',new Date());
  gtag('config','G-X2S5S2KWV1');
  </script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9102079570959654"
     crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
   * Template Name: D-Starite - v4.3.0
  * Template URL: https://dstarite.com/D-Starite-tech-business-template/
  * Author: dstarite.com
  * License: https://dstarite.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>d</span>Starite Technologies</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li class="dropdown"><a href="#services"><span>What we Do</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">GMP (Aluminium)</a></li>
              <li class="dropdown"><a href="#services"><span>Website Management</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="comment.php">SEO</a></li>
                  <li><a href="#services">SEM</a></li>
                  <li><a href="adminstrator/geoplugin.class/index.php">Web Design</a></li>
                  <li><a href="#services">Hosting</a></li>
                  <li><a href="#services">Tech Consultant</a></li>
                </ul>
              </li>
              <li><a href="#services">Mobile App</a></li>
              <li><a href="#services">Web App</a></li>
              <li><a href="#services">Data Analysis</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">The Best Business Information </h2>
                <p class="animate__animated animate__fadeInUp">We're In The Business Of Helping You Bring Your Idea or Business to Life</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">You Before Us</h2>
                <p class="animate__animated animate__fadeInUp">Helping Business Security & Peace of Mind for Your Group and Family</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Why We Are Here</h2>
                <p class="animate__animated animate__fadeInUp">To develop a Mobile or Web App Just For You Which Matches and Serve Your Business Purposes</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About dStarite</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#hero">
                  <img src="assets/img/about/1.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#hero">
                  <h4 class="sec-head">project Maintenance</h4>
                </a>
                <p>
                  dStarite is a Tech company in partnership with an Aluminium GMP Company Hamilton Tobins that is, We build both Offline and Online Store, Business Offices, Residential Buildings and many more.
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> Exterior design Package
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Building House
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Constructing and Reparing of Residentail Windows
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Renovaion of Commercial Office
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Make Quality Products
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#services">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>Expert Coder</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.And deliver in time agreed with no delay 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#hero">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>Creative Designer</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.And deliver in time agreed with no delay 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#hero">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>Wordpress Developer</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.And deliver in time agreed with no delay 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#hero">
                    <i class="bi bi-binoculars"></i>
                  </a>
                  <h4>Social Marketer </h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.And deliver in time agreed with no delay 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#services">
                    <i class="bi bi-brightness-high"></i>
                  </a>
                  <h4>Seo and Web Developer Expart</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.And deliver in time agreed with no delay 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <!-- End Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#contact">
                    <i class="bi bi-calendar4-week"></i>
                  </a>
                  <h4>24/7 Support</h4>
                  <p>
                    Through our contact form, phone numbers or email you can reach us to get the maximuim reply. 
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our special Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="http://twitter.com/paschalnwokeocha">
                  <img src="assets/img/team/1.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="http://facebook.com/pope.paschalnwokeocha">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://twitter.com/paschalnwokeocha">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://instagram.com/paschalnwokeocha">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Nwokeocha Paschal</h4>
                <p>CEO @ dStarite</p>
                <p>Web developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="http://twitter.com/paschalnwokeocha">
                  <img src="assets/img/team/2.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="http://twitter.com/godsentgabriel">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://twitter.com/godsentgabriel">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://twitter.com/godsentgabriel">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Godsent Gabriel</h4>
                <p>Web Designer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="http://twitter.com/paschalnwokeocha">
                  <img src="assets/img/team/3.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="http://facebook.com/hamiltontobins">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://twitter.com/hamiltontobins">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://instagram.com/paschalnwokeocha">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Hamilton Tobins</h4>
                <p>CEO @ Hamilton Tobins Aluminium company</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="http://twitter.com/paschalnwokeocha">
                  <img src="assets/img/team/4.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="http://facebook.com/pope.paschalnwokeocha">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://twitter.com/paschalnwokeocha">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="http://instagram.com/pope.paschalnwokeocha">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Temple Nnedam</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div><!-- End Team Section -->

    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="assets/img/about/2.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>working with us</h2>
            <h5>Web Design, Ready Home, Construction and Co-operate Outstanding Buildings.</h5>
            <a href="#contact" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->

    <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our Portfolio</h2>
            </div>
          </div>
        </div>
        <div class="row wesome-project-1 fix">
          <!-- Start Portfolio -page -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="https://www.linkedin.com/in/starttechnology"><img src="assets/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/1.jpg">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="https://www.linkedin.com/in/starttechnology"><img src="assets/img/portfolio/2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/2.jpg">
                      <h4>Blue Sea</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="https://www.linkedin.com/in/starttechnology"><img src="assets/img/portfolio/3.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/3.jpg">
                      <h4>Beautiful Nature</h4>
                      <span>Web Design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="https://www.linkedin.com/in/starttechnology"><img src="assets/img/portfolio/4.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/4.jpg">
                      <h4>Creative Team</h4>
                      <span>Web design</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="https://www.linkedin.com/in/starttechnology"><img src="assets/img/portfolio/5.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/5.jpg">
                      <h4>Beautiful Flower</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="https://www.linkedin.com/in/starttechnology"><img src="assets/img/portfolio/6.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="assets/img/portfolio/6.jpg">
                      <h4>Night Hill</h4>
                      <span>Photoshop</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

        </div>
      </div>
    </div><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>D-starite Technologies are committed in giving in the best and making sure client desires are met check out our pricing and reach out to us to get it done now</h2>
              <h2>Pricing Table </h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>basic <br /> <span>$260</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free ads</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple Resources</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Free Mentorship</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Cash back</span></li>
              </ol>
              <form>
              <script src="https://js.paystack.co/v1/inline.js"></script>
              <button type="button" onclick="payWithPaystack()"> Pay Now</button> 
              </form>
              <button><a href="forms/sign_up.php"> sign up now</a></button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <span class="saleon">top sale</span>
              <h3>standard <br /> <span>$400 </span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free ads</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple slides</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Free domin</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Free Mentorship</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Cash back</span></li>
              </ol>
              <form>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()"> Pay Now </button> 
</form>
              <button><a href="forms/sign_up.php"> sign up now</a></button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>premium <br /> <span>$800 </span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free ads</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple slides</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Free Mentorship</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free domin</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Cash back</span></li>
              </ol>
              <form>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <button type="button" onclick="payWithPaystack()"> Pay Now</button> 
</form>
              <button><a href="forms/sign_up.php"> sign up now</a></button>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Pricing Section -->

    <!-- ======= Testimonials Section ======= -->
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper-container">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Chikeze Solomon</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 I am the owner and founder eSellina.com that is built and managed by dStratie Technology this guys are great and expert in there business i will always come again. 
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Franisca Nneka</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  dStarite Technology has helped get many conversions from my beauty home fashion design landing page website thanks to dSarite.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Kelvin</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                 Thanks for making my dream business idea come to stay
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Alexender Godwin</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Indeed great builders both my house and my website was built by the company
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Collins</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  my best partners in house construction i love your good job delivered.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div><!-- End Testimonials Section -->

    <!-- ======= Blog Section ======= -->
    <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Latest News</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div>
              <?php  get_post(); ?>
            </div>
            
           
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

    <!-- ======= Suscribe Section ======= -->
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our dStarite company</h3>
              <a class="sus-btn" href="https://www.linkedin.com/in/starttechnology">Get A quote</a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +234 8130062780 || .+234 8166132488 || +234 8139739897 || +234 9065201564<br>
                    <span>Monday-Saturday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: dstarite@gmail.com<br>
                    <span>Web: www.dstarite.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: Sciential Data Lab @ No 40 Alogwu Road Alakahia<br>
                    <span>Port Harcourt Rivers State, Nigeria</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div style="height: auto; width:fit-content; padding-bottom:12px;"><video src="assets/video/ecommerce.mp4" height="400" width="200" controls>Lets Get What we knows how to do best done for you!</video></br>
            </div> 
            <!-- Start Google Map -->
            <div class="col-md-6" style="background-color:white ;">
              <!-- Start Map -->
              <div id='map' style ='width:400px; height:300px;'></div>
              <script>
                mapboxgl.accessToken = 'sk.eyJ1IjoicGFzY2hhbDEiLCJhIjoiY2wxNjdjcnB6MDZmcjNjbXdwaG1rYTEwaSJ9.qNOn469RQCcuHNK-Fde3Lg';
                var map = new mapboxgl.Map({
                  container:'map',style:'mapbox://styles/mapbox/streets-v11'
                });
    const map = new mapboxgl.Map({
    container: 'map', // container ID
    center: [-122.420679, 37.772537], // starting position [lng, lat]
    zoom: 13, // starting zoom
    style: 'mapbox://styles/mapbox/streets-v11', // style URL or style object
    hash: true, // sync `center`, `zoom`, `pitch`, and `bearing` with URL
    // Use `transformRequest` to modify requests that begin with `http://myHost`.
    transformRequest: (url, resourceType) => {
        if (resourceType === 'Source' && url.startsWith('http://myHost')) {
            return {
                url: url.replace('http', 'https'),
                headers: {'my-custom-header': true},
                credentials: 'include'  // Include cookies for cross-origin requests
            };
        }
    }
});
              </script>
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe> -->
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form" id="formdata">
                <form id="formdata" action="javascript:void(0)" method="post" role="form" class="php-email">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" id="message" placeholder="Message"></textarea>
                  </div>
                  <div class="my-3">
                    <!-- <div class="loading">Loading</div> -->
                    <div class="error-message"><p id="show_message" style="display: none">Your Message sent. Thanks for your Message.We will update you within 24 hours. </p>
<span id="error" style="display: none"></span></div>
                    <div class="sent-message"></div>
                  </div>
                  <div class="text-center"><input type="submit"  class="btn btn-primary" name="submit" value="SendMessage"></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>d</span>Starite</h2>
                </div>

                <p>Your Spot For All Kind Digital Solutions, Best Estate, Office and Residentail Home Builders Both Offline And Online.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/pope.paschalnwokeocha"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://www.twitter.com/paschalnwokeocha"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/paschalnwokeocha"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/starttechnology"><i class="bi bi-linkedin"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  Talk to the Management or report to us.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +234 8130062780</p>
                  <p><span>Email:</span> dstarite@gmail.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Instagram</h4>
                <div class="flicker-img">
                  <a href="https://www.instagram.com/paschalnwokeocha"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="https://www.instagram.com/paschalnwokeocha"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="https://www.instagram.com/paschalnwokeocha"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="https://www.instagram.com/paschalnwokeocha"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="https://www.instagram.com/paschalnwokeocha"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="https://www.instagram.com/paschalnwokeocha"><img src="assets/img/portfolio/6.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>dStarite</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              
              Designed by <a href="https://dstarite.com/">dStarite</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script type="text/javascript">
// $(document).ready(function() {
//     $("#formdata").submit(function(e){


//     var form_data = $(this).serialize();
//     $.ajax({
//         type:"POST",
//         url:"comment.php",
//         data:form_data,
//         success:function(){
    
           
//             alert('Your message has been sent. Thank you!');
// //              inputs.foreach(input =>{
// //               input.value='';      
// // });
// //  $('#formdata')[0].reset();
//         } 
        
    
//     });
//     e.preventDefault();
//     });
// })

$(document).ready(function($){
// hide messages 
$("#error").hide();
$("#show_message").hide();
// on submit...
$('#formdata').submit(function(e){
e.preventDefault();
$("#error").hide();
//name required
var name = $("input#name").val();
if(name == ""){
$("#error").fadeIn().text("Name required.");
$("input#name").focus();
return false;
}
// email required
var email = $("input#email").val();
if(email == ""){
$("#error").fadeIn().text("Email required");
$("input#email").focus();
return false;
}
// subject required
var mobile = $("input#subject").val();
if(mobile == ""){
$("#error").fadeIn().text("Subject required");
$("input#mobile").focus();
return false;
}
// ajax
$.ajax({
type:"POST",
url: "forms/contact_us.php",
data: $(this).serialize(), // get all form field value in serialize form
success: function(){

//$("#formdata").fadeOut();
$("#show_message").fadeIn();
}
});
});  
return false;
});


  </script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6223c684a3f77aec"></script>
<script>
  function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_278dd459f559b57fcd4e0353434dbafac37431f2',
      email: 'Customers email',
      amount: 10000,
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
          alert('success. transaction ref is ' + response.reference);
      },
      onClose: function(){
          alert('window closed');
      }
    });
    handler.openIframe();
  }
</script>
</body>

</html>