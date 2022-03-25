<?php
//@session_start();
include("../config/config.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{



?>

<?php 

if(isset($_SESSION['admin_id'])){

// e$edit_id = $_GET['admin_id'];

$admin_id = $_SESSION['admin_id'];

$get_admin = "select * from admins where id='$admin_id'";

$run_admin = mysqli_query($connection,$get_admin);

$row_admin = mysqli_fetch_array($run_admin);

$admin_id = $row_admin['id'];
 $admin_name = $row_admin['name'];
 $admin_email = $row_admin['email'];
$admin_pass = $row_admin['password'];
$admin_image = $row_admin['profile_pic'];
}else{
   return false;
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>
</head>
<body>
<style>
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);}
</style>

<div class="row"><!-- 1 row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / Edit Profile
</li>
</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->
</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Edit Profile
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">User Name</label>

<div class="col-md-6">
<input type="text" name="admin_name" class="form-control" required value="<?php echo $admin_name; ?>">
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- 2 form-group Starts -->

<label class="col-md-3 control-label">User Email</label>

<div class="col-md-6">
<input type="text" name="admin_email" class="form-control" required value="<?php echo $admin_email; ?>">
</div>

</div><!-- 2 form-group Ends -->

<div class="form-group"><!-- 3 form-group Starts -->

<label class="col-md-3 control-label">Old Password</label>

<div class="col-md-6">
<input type="password" name="old_pass" class="form-control" required value="">
</div>

</div><!-- 3 form-group Ends -->


<div class="form-group"><!-- 3 form-group Starts -->

<label class="col-md-3 control-label">New Password</label>

<div class="col-md-6">
<input type="password" name="new_pass" class="form-control" required value="">
</div>

</div><!-- 3 form-group Ends -->






<div class="form-group"><!-- 8 form-group Starts -->

<label class="col-md-3 control-label">User Image</label>


<div class="form-group">
                    <!-- <label for="">Image</label> -->
                    <!-- <input type="file" name="post_image" onchange="readURL(this)"> -->
                    <div class="fileUpload btn btn-info control-label" id="fileupload" name="upload" disable>
                    <span> <i class="fa fa-camera"></i> Upload Image</span>
                    <input type="file" id ="upload" name = "post_image" class="upload btn btn-info btn-sm " onchange="readURL(this)" accept="image/*"/>
                    </div>
                    <br> <br>
                  <center>  <img src="#" alt="Insert Image" class="img-rounded small img-responsive img-fluid mt-5" onerror="this.style.display='none'" onload="this.style.display='block'" id="img" height="350" width="400" ></center>
                </div>
                


</div><!-- 8 form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">
<input type="submit" name="submit" value="Update User" class="btn btn-primary form-control">
</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->
<script>
    function readURL(input){
    if(input.files && input.files[0]) {
       let reader = new FileReader();
       reader.onload = function(e){
       $("#img").attr("src", e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
     }
   }
//     = document.getElementById('');
$(document).ready(function(){
	 $(".selectbtn").click(function (){
	 	$(".file").trigger('click');
          $(".file").css("opacity", "0");
	 });
	 $(".file").change(function (){
	 	$(".file").removeClass();
	 	$(".button").addClass("submitbtn");
	 	 $(".submitbtn").text("Upload Image");
	 	$(".submitbtn").click(function (){
	 	$("#submit").trigger('click');
	 });
	 });
	});

  (function(){
    document.addEventListener("keyup", function(event){
    	if(event.target.matches(".count-chars")){
    		// get input value and length
    		const value = event.target.value;
    		const valueLength = event.target.value.length;
    		// get data value
    		const maxChars = parseInt(event.target.getAttribute("data-max-chars"));
    		const remainingChars = maxChars - valueLength;
    		if(valueLength > maxChars){
    			// limit chars to maxChars
    			event.target.value = value.substr(0, maxChars);
    			return;  //end function execution
    		}
    		event.target.nextElementSibling.innerHTML = remainingChars + " characters remaining";
        event.target.value.style.color = "red";
    	}
    })
})();

jQuery(document).ready(function(){

$('.summernote').summernote({
    height: 240,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: false                 // set focus to editable area after initializing summernote
});
// Select2
$(".select2").select2();

$(".select2-limiting").select2({
    maximumSelectionLength: 2
});
});
</script>

</body>
</html>

<?php 
$error = []; 
if(isset($_SESSION['admin'])){
    $admin_id = $_SESSION['admin_id'];
    $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
    if(isset($_SESSION['admin'])){
        $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $admin_id);
         foreach($real_id as $user_id){
      //  echo $user_id;
        }
    }
    $query = mysqli_query($connection, "SELECT * FROM  admins WHERE id = $user_id");
    while($row = mysqli_fetch_assoc($query)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $role = $row['role'];
        $num_post =$row['num_posts'];

    }
    if(isset($_POST['submit'])){
        $new_name = $_POST['admin_name'];
        $new_email = $_POST['admin_email'];
        $old_pass = $_POST['old_pass'];
        $new_pass = md5($_POST['new_pass']);
        $sql = mysqli_query($connection, "UPDATE admins SET name ='$new_name', email = '$new_email', password= '$new_pass', cpassword='$new_pass' WHERE id = '$admin_id'");
        $_SESSION['admin'] = $admin_id;
        if($old_pass != $new_pass){
            array_push($error, "Passwords do not match");
            echo "<script>alert('Passwords do not match')</script>";
        }
     }
    if(isset($_FILES['post_image'])){
        $dir = "asset/images/profile_pics/default/";
        $target = $dir .basename($_FILES['post_image']['name']);
        $imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
        $filename = $_FILES['post_image']['name'];
        $fileExt = explode('.',$filename);
        $fileActualExt = strtolower(end($fileExt));
        $empty_image = empty($_FILES['post_image']);
        $allowed = array('jpg','jpeg','png','gif');
        $type = $_FILES['post_image']['type'];
        $size = $_FILES['post_image']['size'];
        if(!in_array($fileActualExt, $allowed)){
            array_push($error, "File is not an image");
            echo "<script>alert('File is not an image')</script>";
         }elseif($empty_image){
            array_push($error, "File is not an image");
            echo "<script>alert('No image selected')</script>";
         }
        elseif($size > 3000000){
           array_push($error, "File is too large"); 
           echo "<script>alert('File is too large')</script>";
      } 
       else{
             move_uploaded_file($_FILES['post_image']['tmp_name'], $target);
          $profile = mysqli_query($connection, "UPDATE admins SET profile_pic = '$target' WHERE id=$admin_id");
           if(empty($error)){
            echo "<script>alert('Profile have been updated successfully')</script>";
           }
           
     }
       
      }
}
?>


<?php } ?>