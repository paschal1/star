<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v5 by Colorlib</title>
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
       
    <div class="page-content">
		<div class="form-v5-content"> 
			<form class="form-detail" action="" method="post">
				<h2>Registration</h2>
               <?php
               include ("form-handler/register.php");
               foreach($error as $errors){
                if(isset($errors) && (count($error)>0)){
               echo  "<div class='alert alert-danger' role='alert'>
                <small>* $errors</small>
                </div>"; 
                }
            }
               ?>
				<div class="form-row">
					<input type="text" name="name" id="full-name" class="input-text" placeholder=" Name" required value="<?php if(isset($_POST['register'])){
                                                echo "$name";}
                                                ?>">
					<i class="fas fa-user" style = "margin-top:-15px;"></i>
				</div>
				<div class="form-row">
					<input type="text" name="email" id="your-email" class="input-text" placeholder="Email" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="<?php if(isset($_POST['register'])){
                                                echo "$email";}
                                                ?>"> <br>
					<i class="fas fa-envelope" style = "margin-top:-15px;"></i>
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" oncopy="return false" onpaste="return false" oncut="return false" placeholder="Password" required value="<?php if(isset($_POST['register'])){
                                                echo "$password";}
                                                ?>">
					<i class="fas fa-lock" style = "margin-top:-15px;"></i>
				</div>
				<div class="form-row">
					<input type="password" name="c-password"  class="input-text" oncopy="return false" onpaste="return false" oncut="return false" placeholder="confirm-Password" required>
					<i class="fas fa-lock" style = "margin-top:-15px;"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
    </center>
	<script>
if(window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>