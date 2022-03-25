<?php

//include('../config/config.php');
// include_once ('form-handler/login.php');

  
   function total_comments(){
      global $connection;
       $mysqli = "SELECT * FROM comments";
       $comments = mysqli_query($connection, $mysqli);
       $total_comments = mysqli_num_rows($comments);
        return $total_comments;
  }
   total_comments();

   function num_posts(){
     global $connection;
     $mysqli = "SELECT * FROM NEWS";
     $total_num_posts = mysqli_query($connection, $mysqli);
     $total_posts = mysqli_num_rows( $total_num_posts);
     return  $total_posts;
   }
   num_posts();

   function total_category(){
      global $connection;
      $mysqli = "SELECT * FROM category";
      $total_cat = mysqli_query($connection, $mysqli);
      $total_category = mysqli_num_rows($total_cat);
      return $total_category;
   }
   total_category();

   function user_role(){
    global $connection;
    $mysqli = "SELECT * FROM users";
    $users = mysqli_query($connection, $mysqli);
    $user_role = mysqli_num_rows($users);
    return $user_role;
   }
   user_role();

   function profile_pic(){
      global $connection;
      if(isset($_SESSION['admin'])){
         $admin_user = $_SESSION['admin'];
         $admin_id = $_SESSION['admin_id'];
         $sql = mysqli_query($connection, "SELECT profile_pic FROM admins WHERE id = '$admin_id'");
         $row = mysqli_fetch_array($sql);
         return $row['profile_pic'];
     }else{
        return false;
     }
   }
   profile_pic();


   function admin_name(){
      global $connection;
      if(isset($_SESSION['admin'])){
         $admin_user = $_SESSION['admin'];
         $admin_id = $_SESSION['admin_id'];
         $sql = mysqli_query($connection, "SELECT name FROM admins WHERE id = '$admin_id'");
         $row = mysqli_fetch_array($sql);
         return $row['name'];
     }else{
        return false;
     }
   }
   admin_name();


   function admin_role(){
      global $connection;
      if(isset($_SESSION['admin'])){
         $admin_user = $_SESSION['admin'];
         $admin_id = $_SESSION['admin_id'];
         $sql = mysqli_query($connection, "SELECT role FROM admins WHERE id = '$admin_id'");
         $row = mysqli_fetch_array($sql);
         return $row['role'];
     }else{
        return false;
     }
   }
   admin_role();


   function admin_email(){
      global $connection;
      if(isset($_SESSION['admin'])){
         $admin_user = $_SESSION['admin'];
         $admin_id = $_SESSION['admin_id'];
         $sql = mysqli_query($connection, "SELECT email FROM admins WHERE id = '$admin_id'");
         $row = mysqli_fetch_array($sql);
         return $row['email'];
     }else{
        return false;
     }
   }
   admin_email();


   function total_posts(){
      global $connection;
      if(isset($_SESSION['admin'])){
         $admin_id = $_SESSION['admin_id'];
         $mysqli = "SELECT num_posts FROM admins WHERE id = '$admin_id'";
       $num_posts = mysqli_query($connection, $mysqli);
       $total_posts = mysqli_num_rows($num_posts);
        return $total_posts;
       } else{

        }
   }
   total_posts();

   function add_post($title, $content, $category, $type, $tags, $image){
      global $connection;
      if(!empty($title) && !empty($content) && !empty($tags)){
         $time = time();
				$date_added = (date("d F, Y  "));
				$title = ucfirst($title);
				$title = mysqli_real_escape_string($connection, $title);
				$content = nl2br($content);
				$content = mysqli_real_escape_string($connection, $content);
				$added_by = admin_name();
				 $sql = mysqli_query($connection, "SELECT id FROM category WHERE cat_title ='$category'");
				 $row = mysqli_fetch_array($sql);
				 $cat_id = $row['id'];
            if(isset($_SESSION['admin'])){
               $admin_id = $_SESSION['admin_id'];
            }
				// $user_id = getID();
				 $date = date("Y-m-d H:i:s");
             $status = "Approved";
				$query = mysqli_query($connection, "INSERT INTO news VALUES('','$title','$content','$added_by','$admin_id','$category','$cat_id','$image','$date_added','$tags','$status','$type','0','0','0',NOW());");
      }
   }
  