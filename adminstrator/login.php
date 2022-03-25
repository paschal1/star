<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>D-starite Technologies</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
    
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <!-- <link rel="stylesheet" href="css/style.css"/> -->
    
 <link rel="stylesheet" href="css/bootstrap.min.css" > 
    <link rel="stylesheet" href="css/reg.css">
</head>
<body class="form-v5">
	<center>
<?php
include ("../config/config.php");
$error = [];
  error_reporting(0);
session_start(); 

if(isset($_POST['login'])){
	$email =  $_POST['email'];
	$password =  $_POST['password'];
	$sql = mysqli_query($connection, "SELECT * FROM admins WHERE email = '$email'");
	$row = mysqli_fetch_array($sql);
	$db_id = $row['id'];
	$db_email = $row['email'];
	$db_password = $row['password'];
	$rehashedPwd = md5($password);
 if($db_email === $email && $db_password === $rehashedPwd) {
		$_SESSION['admin'] = $db_email;
		$_SESSION['admin_id'] = $db_id;
	 if(isset($_SESSION['admin'])){
		echo "<script>window.open('index.php?dashboard','_self')</script>";
	 }
	}elseif(empty($email)){
         array_push($error, "Email is required");	
     
	}elseif(empty($password)){
		array_push($error, "Password is required");
	 }
	 else{
  		 $_SESSION['email'] = $email;
           echo "<script>alert('Email or Password is Wrong ')</script>";
 }
	
}
?>

    <div class="page-content">
		<div class="form-v5-content"> 
			<form class="form-detail" action="" method="post">
				<h2>Login</h2>
                <?php foreach($error as $errors){
                                if(isset($errors) && (count($error)>0)){
                                 echo "<div class='alert alert-danger' role='alert'>
                                <small>* &nbsp; $errors</small>
                                </div>"; 
                                }
                            }
                                ?>
				<div class="form-row">
					<input type="email" name="email" id="full-name" class="input-text" placeholder="Email" required value="<?php if(isset($_SESSION['email'])) {
                                                echo $_SESSION['email'];
                                                    } ?>">
					<i class="fas fa-user" style = "margin-top:-15px;"></i>
				</div>
				<div class="form-row">
					<input type="password" name="password" id="your-email" oncopy="return false" onpaste="return false" oncut="return false" class="input-text" placeholder="Password"  value="<?php if(isset($_POST['register'])){
                                                echo "$password";}
                                                ?>"> <br>
					<i class="fas fa-envelope" style = "margin-top:-15px;"></i>
				</div>
                <div class="form-row-last">
					<input type="submit" name="login" class="register" value="Login">
					<a href="register.php">Register</a>
				</div>
			</form>
		</div>
	</div>
    </center>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>