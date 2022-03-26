<?php
include ('config/config.php');
include_once('adminstrator/functions/functions.php');
include('posts/posts.php');
include('category/category.php'); 

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>D-Starite Technologies</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9102079570959654"
     crossorigin="anonymous"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>D</span>Starite Technologies</a></h1>
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
          <li class="dropdown"><a href="#"><span>What we Do</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">GMP (Aluminium)</a></li>
              <li class="dropdown"><a href="#"><span>Website Management</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">SEO</a></li>
                  <li><a href="#">SEM</a></li>
                  <li><a href="#">Web Design</a></li>
                  <li><a href="#">Hosting</a></li>
                  <li><a href="#">Tech Consultant</a></li>
                   <li><a href="adminstrator/index.php">Developer</a></li>
                </ul>
              </li>
              <li><a href="#">Mobile App</a></li>
              <li><a href="#">Web App</a></li>
              <li><a href="#">Data Analysis</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Blog Header ======= -->
    <div class="header-bg page-area">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="slider-content text-center">
              <div class="header-bottom">
                <div class="layer2">
                  <h1 class="title2">D-Starite</h1>
                </div>
                <div class="layer3">
                  <h2 class="title3">Your Spot For All Digital Solutions</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Header -->

    <!-- ======= Blog Page ======= -->
    <div class="blog-page area-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="page-head-blog">
              <div class="single-blog-page">
                <!-- search option start -->
                <form action="#">
                  <div class="search-option">
                    <input type="text" placeholder="Search...">
                    <button class="button" type="submit">
                      <i class="bi bi-search"></i>
                    </button>
                  </div>
                </form>
                <!-- search option end -->
              </div>
              <div class="single-blog-page">
                <?php  
 $query = mysqli_query($connection, "SELECT * FROM news WHERE status = 'Approved' ORDER BY id  DESC  LIMIT 4");
  $str = "";

  while ($row = mysqli_fetch_array($query)){
     $id = $row['id'];
      $uniqid = uniqid($id);
    $img = $row['post_image'];
    $num_comments = $row['num_comments'];
     $date_added = $row['date_added'];
      $title = $row['title'];
      $author = $row['added_by'];
      $content = $row['content'];
      if(strlen($content) > 100){
        $content = substr($content, 0, 45) . "...";
      }
     
      $str  .=   " <div class='recent-single-post'>
      <div class='post-img'>
        <a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103qimg'>
          <img src='adminstrator/$img' alt=''>
        </a>
      </div>
      <div class='pst-content'>
        <p><a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103qimg'> $content</a></p>
      </div>
    </div>";
  }
  
                
                ?>

                 <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    <?php echo $str; ?>
                    <!-- End single post -->
                    <!-- End single post -->
                  </div>
                </div>
              
                <!-- recent end -->
              </div>
              <?php

              ?>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>categories</h4>
                  <ul>
                    <?php
                    get_category();
                    ?>
                  </ul>
                </div>
              </div>
              <div class="single-blog-page">
                <div class="left-blog">
                  <h4>archive</h4>
                  <ul>
                    <li>
                      <a href="#">07 July 2021</a>
                    </li>
                    <li>
                      <a href="#">29 June 2022</a>
                    </li>
                    <li>
                      <a href="#">13 May 2021</a>
                    </li>
                    <li>
                      <a href="#">20 March 2022</a>
                    </li>
                    <li>
                      <a href="#">09 Fabruary 2022</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="single-blog-page">
                <div class="left-tags blog-tags">
                  <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                     <?php echo popular_tags(); ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End left sidebar -->
          <!-- Start single blog -->
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <!-- ====== Start blog ======== -->
              <?php echo get_blogs(); ?>
              <!-- ======== End blog ========= -->
              <!-- End single blog -->
              
             
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Blog Page -->

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
                      <a href="#"><i class="bi bi-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-instagram"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-linkedin"></i></a>
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
                  <a href="#"><img src="assets/img/portfolio/1.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/2.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/3.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/4.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/5.jpg" alt=""></a>
                  <a href="#"><img src="assets/img/portfolio/6.jpg" alt=""></a>
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
<!-- 
  <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6223c684a3f77aec"></script>

</body>

</html>