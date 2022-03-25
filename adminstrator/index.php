<?php
session_start();
include("../config/config.php");

include_once('functions/functions.php');

  if(!isset($_SESSION['admin'])){

    echo "<script>window.open('auth.php','_self')</script>";

  }

  else{





//  if(!isset($_SESSION['admin_email'])){

//  echo "<script>window.open('login.php','_self')</script>";

// }
// else{

// echo $admin_session = $_SESSION['admin'];

// $get_admin = "select * from admins where `email` = '$admin_session'";

// $run_admin = mysqli_query($connection, $get_admin);

// $row_admin = mysqli_fetch_array($run_admin);

// $admin_id = $row_admin['id'];

// $admin_name = $row_admin['name'];

// $admin_email = $row_admin['email'];

// $admin_image = $row_admin['profile_pic'];

// $admin_role = $row_admin['role'];



?>

<?php

// $get_post = "select * from news";

// $run_post = mysqli_query($connection, $get_post);

// $count_posts = mysqli_num_rows($run_post);

?>

<?php

// $get_comments = "select * from comments";
// $run_comments = mysqli_query($con,$get_comments);

// $count_comments = mysqli_num_rows($run_comments);

?>

<?php

// $get_categories = "select * from categories";
// $run_categories = mysqli_query($con,$get_categories);
// $count_categories = mysqli_num_rows($run_categories);

?>

<?php

//  
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="css/bootstrap.min.css" rel="stylesheet" >

<link href="css/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
</head>
<body>

<div id="wrapper"><!-- Wrapper Starts -->
<?php include("includes/sidebar.php"); ?>
<div id="page-wrapper"><!-- Page-wrapper Starts -->

<div class="container-fluid"><!-- container-fluid Starts -->

<?php

  if(isset($_GET['dashboard'])){
  include("dashboard.php");
  }

 if(isset($_GET['insert_post'])){
 include("insert_post.php");
 }

 if(isset($_GET['view_posts'])){
 include("view_posts.php");
 }

 if(isset($_GET['delete_post'])){
 include("delete_post.php");
 }

if(isset($_GET['edit_post'])){
 include("edit_post.php");
 }

 if(isset($_GET['view_comments'])){
 include("view_comments.php");
 }

 if(isset($_GET['unapprove'])){
 include("comment_status.php");
 }

 if(isset($_GET['approve'])){
 include("comment_status.php");
 }

 if(isset($_GET['delete_comment'])){
 include("delete_comment.php");
 }

 if(isset($_GET['insert_cat'])){
 include("insert_cat.php");
 }

 if(isset($_GET['view_cats'])){
 include("view_cats.php");
 }

 if(isset($_GET['edit_cat'])){
 include("edit_cat.php");
 }

 if(isset($_GET['delete_cat'])){
 include("delete_cat.php");
 }

 if(isset($_GET['insert_user'])){
 include("insert_user.php");
 }

 if(isset($_GET['view_users'])){
 include("view_users.php");
 }

if(isset($_GET['user_delete'])){
 include("user_delete.php");
 }

 if(isset($_GET['user_profile'])){
 include("user_profile.php");
 }

?>

</div><!-- container-fluid Ends -->

</div><!-- Page-wrapper Ends -->

</div><!-- Wrapper Ends -->

<script>
if(window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php } ?>