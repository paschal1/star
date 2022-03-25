<?php
include ('config/config.php');
include_once('adminstrator/functions/functions.php');
include('posts/posts.php');
include('category/category.php'); 

//session_start();

// Update the details below with your MySQL details
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'eseltwgh_dstarite';
$DATABASE_PASS = 'paschal@081';
$DATABASE_NAME = 'eseltwgh_dstarite';
try {
    $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
} catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error
    exit('Failed to connect to database!');
}

// Below function will convert datetime to time elapsed string
function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);
    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;
    $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }
    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}

// This function will populate the comments and comments replies using a loop
function show_comments($comments, $parent_id = -1) {
    $html = '';
    if ($parent_id != -1) {
        // If the comments are replies sort them by the "submit_date" column
        array_multisort(array_column($comments, 'date_added'), SORT_ASC, $comments);
    }
    // Iterate the comments using the foreach loop
    foreach ($comments as $comment) {
        if ($comment['parent_id'] == $parent_id) {
            // Add the comment to the $html variable
            $html .= '
            <div class="comment">

            <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img"><b><a href="#">You</a></b>
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                
            <div class="comments">
                <div>
                    <h3 class="name">' . htmlspecialchars($comment['name'], ENT_QUOTES) . '</h3>
                    <span class="date">' . time_elapsed_string($comment['date_added']) . '</span>
                </div>
                <p class="content">' . nl2br(htmlspecialchars($comment['body'], ENT_QUOTES)) . '</p>
                <a class="" class="nav-link scrollto" href="#formdata" data-comment-id="' . $comment['comment_id'] . '">Reply</a>
                ' . show_write_comment_form($comment['comment_id']) . '
                <div class="replies">
                ' . show_comments($comments, $comment['comment_id']) . '
                </div>
            </div>
             </div>
                          </div>
                        </li></div>
            ';
        }
    }
    return $html;
}

// This function is the template for the write comment form
function show_write_comment_form($parent_id = -1) {
    $html = '
    <div class="write_comment" data-comment-id="' . $parent_id . '">
      <!-- if user is not signed in-->
                    ';
                    if(isset($_SESSION['users'])):
                      
                   $html='
                    <form action="" method="Post" id="formdata">
                      <div class="row">
                      <input name="parent_id" type="hidden" value="' . $parent_id . '">
                        <div class="col-lg-4 col-md-4">
                          <p>Name *</p>
                          <input type="text" name="name" />
                        </div>
                        <div class="col-lg-4 col-md-4">
                          <p>Email *</p>
                          <input type="email" name="email"/>
                        </div>
                        <div class="col-lg-4 col-md-4">
                          <p>Website</p>
                          <input type="text" name="website"/>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                          <p>Message</p>
                          <textarea id="message-box" cols="30" rows="10" name="body"></textarea>
                          <input type="submit" value="Post Comment" name="submit" />
                        </div>
                      </div>
                    </form>
                    
                  ';
                  else:
                  $html = '
                 
    '
    ;endif;
    return $html;
}

// Page ID needs to exist, this is used to determine which comments are for which page
if (isset($_GET['post_id'])) {
  
    // Check if the submitted form variables exist
    if (isset($_POST['name'], $_POST['body'])) {

    $stmt = "SELECT id FROM users";
    $statement = $pdo->prepare($stmt);
        $statement->execute();
        $users = $statement->fetch();

    foreach($users as $user){

      $user_id = $user[0];
      $_SESSION['user_id'] = $user_id;
      }
                   $post_id = $_GET['post_id'];
                    if(isset($_GET['post_id'])){
                       // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
                        $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
                         foreach($real_id as $from_post_id){
                         $from_post_id;
                        }
                    }
        // POST variables exist, insert a new comment into the MySQL comments table (user submitted form)
        $stmt = $pdo->prepare('INSERT INTO comments (user_id, post_id, parent_id, name, body, date_added) VALUES (?,?,?,?,?,NOW())');
        $stmt->execute([$user_id, $from_post_id, $_POST['parent_id'], $_POST['name'], $_POST['body'] ]);
        header("location:single.php?post_id=$uniqid$id$10%!9e13e30346050428880e5b1156758e243%32a@2103q");
    
  }
    // Get all comments by the Page ID ordered by the submit date
    $post_id = $_GET['post_id'];
                    if(isset($_GET['post_id'])){
                       // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
                        $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
                         foreach($real_id as $from_post_id){
                         $from_post_id;
                     
    $stmt = $pdo->prepare('SELECT * FROM comments WHERE post_id = ? ORDER BY date_added DESC');
    $stmt->execute([ $from_post_id ]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Get the total number of comments
    $stmt = $pdo->prepare('SELECT COUNT(*) AS total_comments FROM comments WHERE post_id = ?');
    $stmt->execute([ $from_post_id ]);
    $comments_info = $stmt->fetch(PDO::FETCH_ASSOC);

       }
                    }
} else {
    exit('No page ID specified!');
}
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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness - v4.3.0
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>D-</span>Starite Technologies</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

    <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="blog.php">Home</a></li>
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
                  <li><a href="forms/signin.php">Sign in</a></li>
                  <li><a href="logout.php">Logout</a></li>
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
                    <?php
                    $post_id = $_GET['post_id'];
                    if(isset($_GET['post_id'])){
                       // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
                        $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
                         foreach($real_id as $id){
                         $id;
                        }
                    }
                    $sql = mysqli_query($connection, "SELECT * FROM news WHERE status='Approved' AND id='$id'");
                    $row = mysqli_fetch_array($sql);
                    $title = $row['title'];
                    echo  "<h2 class='title2'>$title</h2>";
                    ?>
                 
                </div>
                <div class="layer3">
                <?php
                    $post_id = $_GET['post_id'];
                    if(isset($_GET['post_id'])){
                       // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
                        $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
                         foreach($real_id as $id){
                         $id;
                        }
                    }
                    $sql = mysqli_query($connection, "SELECT * FROM news WHERE status='Approved' AND id='$id'");
                    $row = mysqli_fetch_array($sql);
                    $content = $row['content'];
                    if(strlen($content) > 50) {
                        $content = substr($content, 0, 100) . "...";
                        }
                    echo  "<h5 class='title3' style='color:white;'>$content</h5>";
                    ?>
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
                <!-- recent start -->
                <div class="left-blog">
                  <h4>recent post</h4>
                  <div class="recent-post">
                    <!-- start single post -->
                    <?php echo recent_posts(); ?>
                    <!-- End single post -->
                    <!-- End single post -->
                  </div>
                </div>
                <!-- recent end -->
              </div>
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
                <div class="left-tags blog-tags">
                  <div class="popular-tag left-side-tags left-blog">
                    <h4>popular tags</h4>
                    <ul>
                   <!-- =========== Tags =============== -->
                        <?php echo popular_tags(); ?>
                     <!-- ========================== -->
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
              <div class="col-md-12 col-sm-12 col-xs-12">
                <!-- single-blog start -->
                <?php
               echo single_post(); 

               //echo $id;
               ?>
            
               <!-- ===================== -->
                <div class="clear"></div>
                <div class="single-post-comments">
                  <div class="comments-area">
                   <div class="comments-heading">
                      <div class="comment-respond">
                    <h3 class="comment-reply-title">Leave a Reply </h3>
                    <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                    
                  </div>
                      <h3>Comments</h3>
                      <div class="comment_header">
    <span class="total"><?=$comments_info['total_comments']?> comments</span>
    <a href="#" class="write_comment_btn" data-comment-id="-1">Write Comment</a>
</div><?php if(isset($_SESSION['users'])):
      $html = '
                 
    ';
  
  ?>
  <?php else:
                  $html = '
                 <div class="well" style="margin-top: 20px;">
                       <h5 class="text-center"><a href="forms/signin.php">Sign in</a> to post a comment</h5>
                    </div>
    ';
    endif;
    
    echo $html;
    ?>
   
                    
    </div>

<?=show_write_comment_form()?>

<?=show_comments($comments)?>
                    </div>
                    
                      <ul>
                    <div class="comments-list">
                          
                      
                      </ul>
                    </div>
                  </div>
                 
                </div>
                <!-- single-blog end -->
              </div>
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

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/jsbootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>


<script>
  //key=location.hash.split('post_id=')[1].split('&')[0];
// var dollar = false; 
// checkHash();

// function checkHash(){ 
//     if(window.location.dollar != dollar) { 
//         hash = window.location.dollar; 
//         //$('a[href^="#"]')
//         processHash(dollar); 
//     } t=setTimeout("checkHash()",400); 
// }

// function processHash(dollar){
//   window.location.dollar
  
  //location.hash.split('post_id=')[1].split('&')[0];
  // function getHashValue(key){
  //       var matches = location.hash.match(new RegExp(key+'=([^&]*)'));
  //          return matches ? matches[1] : null;
  //               }
  var requestedHash = ((window.location.hash.substring(1).split("$",1))+"?").split("?",1);
   //alert( requestedHash); 
// }
                    

                    var hash = getHashValue('hash');
                    
  const comments_page_id = requestedHash; // This number should be unique on every page
fetch("single.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
	document.querySelector(".comments").innerHTML = data;
	document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
		element.onclick = event => {
			event.preventDefault();
			document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
			document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
		};
	});
	document.querySelectorAll(".comments .write_comment form").forEach(element => {
		element.onsubmit = event => {
			event.preventDefault();
			fetch("single.php?page_id=" + comments_page_id, {
				method: 'POST',
				body: new FormData(element)
			}).then(response => response.text()).then(data => {
				element.parentElement.innerHTML = data;
			});
		};
	});
});
</script>
</body>

</html>