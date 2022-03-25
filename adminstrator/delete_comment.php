<?php
@session_start();
include("../config/config.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{



?>

<?php

if(isset($_GET['delete_comment'])){

$delete_id = $_GET['delete_comment'];
$delete_comment_query = "delete from comments where post_id = '$delete_id'";
$run_delete = mysqli_query($connection,$delete_comment_query);
if($run_delete){
    echo "<script>alert('Comment has been deleted successfully')</script>";
    echo "<script>window.open('index.php?view_comments','_self')</script>";    
}else{
    echo "<script>alert('Not deleted')</script>";
}

}

?>



<?php } ?>