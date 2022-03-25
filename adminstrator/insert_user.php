<?php
@session_start();
//include("includes/connection.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{
?>


<!DOCTYPE html>
<html>
<head>
<title>Insert User</title>
</head>
<body>

<!-- ================== css style ===================== -->
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
<!-- =================== End css style =========================== -->
<div class="row"><!-- row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / Insert User
</li>
</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->

<div class="row"><!-- 2 row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Insert User
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<?php
$error = []; 
if(isset($_POST['submit'])){
  $admin_name = $_POST['admin_name'];
 $admin_email = $_POST['admin_email'];
 $admin_pass = $_POST['admin_pass'];
$admin_cpass = $_POST['c-password'];
 $admin_role = $_POST['admin_role'];
if(empty($admin_name) || empty($admin_email) || empty($admin_pass) || empty($admin_cpass)){
    echo "<script>alert('Please fill in blank fields')</script>";
}elseif($admin_pass != $admin_cpass){
    echo "<script>alert('passwords do not match')</script>";
}if(empty($error)){
    $hashedpwd = md5($admin_pass);
    $chashedpwd = md5($admin_cpass);
    $rand = rand(1,3);
    switch ($rand){
        case '1';
        $profile_pic = "asset/images/profile_pics/default/head_1.png";
        break;
        case '2';
        $profile_pic = "asset/images/profile_pics/default/head_2.png";
        break;
        case '3';
        $profile_pic = "asset/images/profile_pics/default/head_3.png";
        break;
    }
    $role = "Editor"; 
    $insert_admin = mysqli_query($connection, "INSERT Into admins VALUES('','$admin_name','$admin_email','$hashedpwd','$chashedpwd','$profile_pic','$role','0');");
}if($insert_admin){
    echo "<script>alert('User has been successfully added')</script>";
    header('dashboard.php');
}



$run_admin = mysqli_query($connection, $insert_admin);

if($run_admin){
echo "<script>alert('User has been inserted successfully')</script>";
echo "<script>window.open('index.php?view_users','_self')</script>";
}

}


?>
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">User Name</label>
<div class="col-md-6">
<input type="text" name="admin_name" class="form-control" required>
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"> User Email</label>
<div class="col-md-6">
<input type="text" name="admin_email" class="form-control" required>
</div>
</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Password</label>
<div class="col-md-6">
<input type="password" name="admin_pass" class="form-control" required>
</div>

</div><!-- form-group Ends -->
<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Confirm Password</label>
<div class="col-md-6">
<input type="password" name="c-password" class="form-control" required>
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts --->
<label class="col-md-3 control-label">User Role</label>
<div class="col-md-6">
<select name="admin_role" class="form-control">
<?php 
$role = admin_role();
if($role === 'Admin'){
    echo "<option value = ''>Admin</option>";
    echo "<option value = ''>Editor</option>";
}else{
    echo "<option value = ''disabled>Not an Admin</option>";
}
?>

</select>

</div>
</div>

<!-- <center>
                <div class="form-group">
                    <!-- <label for="">Image</label> -->
                    <!-- <input type="file" name="post_image" onchange="readURL(this)"> -->
                    <!-- <div class="fileUpload btn btn-info control-label" id="fileupload" name="upload" disable>
                    <span> <i class="fa fa-camera"></i> Upload Image</span>
                    <input type="file" id ="upload" name = "post_image" class="upload btn btn-info btn-sm " onchange="readURL(this)" accept="image/*"/>
                    </div>
                    <br> <br>
                    <img src="#" alt="Insert Image" class="img-rounded img-responsive img-fluid mt-5" onerror="this.style.display='none'" onload="this.style.display='block'" id="img" height="350" width="400" >
                </div>                -->
<!-- </center> -->

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"></label>
<div class="col-md-6">
<input type="submit" name="submit" value="Insert User" class="btn btn-primary form-control" >
</div>

</div><!-- form-group Ends -->


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

</script>
</body>
</html>



<?php } ?>