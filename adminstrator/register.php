<?php
session_start();
include("includes/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Register</title>

<link rel="stylesheet" href="css/login.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<link rel="stylesheet" href="css/bootstrap.min.css" >

</head>
<body>


<div class="container col-lg-12 col-md-6 col-6"><!-- Container Starts -->
<form class="form-login" action="" method="post"><!--- form-login Starts -->

<h2 class="form-login-heading">Admin Registration</h2>
<?php
include ("form-handler/register.php");
foreach($error as $errors){
    if(isset($errors) && (count($error)>0)){
     echo "<div class='alert alert-danger' role='alert'>
    <strong>$errors</strong>
    </div>"; 
    }
}
?>
<label class="sr-only">Email address</label>

<input type="text" class="form-control" name="name" placeholder="Name" required >

<label class="sr-only">Password</label> <br>

<input type="email" class="form-control" name="email" placeholder="Email" required>

<label class="sr-only">Password</label> <br>

<input type="password" class="form-control" name="password" id = "password" onpaste = "return false" placeholder="password" required> 

<input type="checkbox" class = "" onclick="myFunction()" style="margin-top:10px; margin-bottom:13px;left:0; margin-left:7px;"> &nbsp;Show Password
<br>

<label class="sr-only">Password</label> 

<input type="password" class="form-control" oncut = "return flase" oncopy = "return false" onpaste = "return false" name="c-password" placeholder="Confirm-password" required> <br>

<button class="btn  btn-primary btn-lg btn-block mb-5" type="submit" name="register">Register</button> <br>



</form><!--- form-login Ends -->
</div><!-- Container Ends -->




</body>
</html>
<?php
// if(isset($_POST['admin_login'])){

// $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);

// $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);

// $encrypt = md5($admin_pass);

// $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

// $run_admin = mysqli_query($con,$get_admin);

// $count = mysqli_num_rows($run_admin);

// if($count==1){
// $_SESSION['admin_email']=$admin_email;
// echo "<script>alert('You are Logged in into Admin Panel')</script>";
// echo "<script>window.open('index.php?dashboard','_self')</script>";

// }else{
// echo "<script>alert('Email or Password is Wrong ')</script>";
// }

// } 

?>

