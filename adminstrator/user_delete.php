<?php
@session_start();
include("../config/config.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{



?>

<?php

if(isset($_GET['user_delete'])){

$delete_id = $_GET['user_delete'];

$delete_user = "delete from admins where id='$delete_id'";

$run_delete = mysqli_query($connection,$delete_user);

if($run_delete){
echo "<script>alert('User Has been Deleted')</script>";
echo "<script>window.open('index.php?view_users','_self')</script>";
}

}




?>




<?php } ?>