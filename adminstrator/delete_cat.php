<?php
@session_start();
include("../config/config.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{


?>

<?php

if(isset($_GET['delete_cat'])){

$delete_id = $_GET['delete_cat'];

$delete_cat = "delete from category where id='$delete_id'";

$run_delete = mysqli_query($connection,$delete_cat);

if($run_delete){
echo "<script>alert('One Category Has Been Deleted')</script>";
echo "<script>window.open('index.php?view_cats','_self')</script>";
}

}

?>

<?php } ?>