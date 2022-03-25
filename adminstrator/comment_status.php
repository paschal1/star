<?php
@session_start();
include("../config/config.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{



?>

<?php

if(isset($_GET['unapprove'])){

 $unapprove_id = $_GET['unapprove'];

 $comment_query = mysqli_query($connection, "SELECT id from comments WHERE post_id = '$unapprove_id'");

 $cmt_fetch = mysqli_fetch_array($comment_query);

 $id = $cmt_fetch['id'];

$unapprove_comment = "update comments set status ='unapproved' where id ='$id'";

$run_unapprove = mysqli_query($connection, $unapprove_comment);

if($run_unapprove){
    echo "<script>alert('Comment has been approved Successfully')</script>";
    echo "<script>window.open('index.php?view_comments','_self')</script>";
}else{
    echo "<h1>Did not work</h1>";
}

}

if(isset($_GET['approve'])){

$approve_id = $_GET['approve'];

$comment_query = mysqli_query($connection, "SELECT id from comments WHERE post_id = '$approve_id'");

 $cmt_fetch = mysqli_fetch_array($comment_query);

 $id = $cmt_fetch['id'];

$approve_comment = "update comments set status = 'approved' where id ='$id'";

$run_approve = mysqli_query($connection,$approve_comment);

echo "<script>alert('Comment has been unapproved successfully')</script>";
echo "<script>window.open('index.php?view_comments','_self')</script>";

}

?>





<?php  } ?>