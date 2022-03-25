<?php

$mysqli = new mysqli("localhost", "root", "" , "d_starite") or die(mysqli_error($mysqli));
// error_reporting(0);
$error = [];



if (isset($_POST['register'])){
     $name = ($_POST['name']);
    $email = ($_POST['email']);
    $password = ($_POST['password']);
    $cpassword = ($_POST['c-password']);
    $sql = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '$email'");
    $row = mysqli_fetch_array($sql);
    if(empty($name) && (empty($email) && (empty($password) && (empty($cpassword))))){
        array_push($error, "Please fill in blank fields");
    }elseif (empty($name)){
        array_push($error, "please fill your name");
    }elseif (strlen($password) <= 4 && (strlen($cpassword) <= 4)){
        array_push($error, "password must be up to 6 characters");
    }elseif($password !== $cpassword){
        array_push($error, "Password do not match"); 
     }elseif(mysqli_num_rows($sql) != 0){
        array_push($error, "email already exist");
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "email is invalid");
    }
     if(empty($error)){
   
        $name = ($name);
        $email = ($email);
        $hashedpwd = md5($password);
        $chashedpwd = md5($cpassword);
        $rand = rand(1,3);
        switch($rand){
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
        $role = "Admin";
        $query = mysqli_query($mysqli, "INSERT INTO users VALUES('','$name','$email','$hashedpwd','$chashedpwd','$profile_pic','$role','0');");
        if($query){
       
      unset($_POST['register']);
         header("location: signin.php");
    }
    
    } 
}
