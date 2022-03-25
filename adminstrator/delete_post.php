<?php
@session_start();
include("../config/config.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{


?>

<?php

$uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';

$delete_id = $_GET['delete_post'];

if(isset($_GET['delete_post'])){
 $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $delete_id);
  foreach($real_id as $post_id){
  $post_id;
 }

$delete_post = "delete from news where id='$post_id'";

$run_delete = mysqli_query($connection,$delete_post);

if($run_delete){
    echo "<script>alert('One Post Has Been Deleted')</script>";
}else{
    echo "<script>alert('Not deleted yet')</script>";
}

echo "<script>window.open('index.php?view_posts','_self')</script>";

}

?>

<?php } ?>