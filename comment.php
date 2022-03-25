<?php
$mysqli = new mysqli("localhost", "root", "" , "d_starite") or die(mysqli_error($mysqli));
// error_reporting(0);
//$error = [];
include('posts/posts.php');

function getIPAddress(){
    //wether ip is from the share internet 
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //Wether ip is from the proxy 
    elseif(!empty($_SERVER['HTTP_XFORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_XFORWARDED_FOR'];
    }
    //wether ip is from the remote address
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

$ip = getIPAddress();
//echo 'user real ip-'.$ip;


if(isset($_POST['submit'])){
    $post_id = $id;
     $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['website'];
    $message = $_POST['body'];
    $sql = mysqli_query($mysqli, "SELECT * FROM comments WHERE email = '$email'");
    $row = mysqli_fetch_array($sql);
    if(empty($name) && (empty($email) && (empty($subject) && (empty($message))))){
       // array_push($error, "Please fill in blank fields");
     }
    elseif (empty($name)){
        array_push($error, "please fill your name");
    }elseif(mysqli_num_rows($sql) != 0){
        array_push($error, "email already exist");
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "email is invalid");
    }
     if(empty($error)){
  // echo"arrived";
        $name = ($name);
        $email = ($email);
        $status = 'Approved';
   
        $query = "INSERT INTO comments (post_id, name, email, website, body, status) 
                VALUES ('$post_id', '$name','$email','$subject','$message', '$status')";

        $result = mysqli_query($mysqli,$query);
        
        //$query = mysqli_query($mysqli, "INSERT INTO contact_us VALUES('$name','$email','$subject','$message');");
        if($result){
       echo "success";
      unset($_POST['submit']);
         header("location: ../index.php");
    }else{
      echo "mba";
    }
    
    } 
}

// echo 'User IP Address-'.$_SERVER['REMOTE_ADDR'];?>