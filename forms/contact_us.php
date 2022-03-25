<?php

$mysqli = new mysqli("localhost", "eseltwgh_dstarite", "paschal@081" , "eseltwgh_dstarite") or die(mysqli_error($mysqli));
// error_reporting(0);
//$error = [];



if(isset($_POST['submit'])){
     $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = mysqli_query($mysqli, "SELECT * FROM contact_us WHERE contact_email = '$email'");
    $row = mysqli_fetch_array($sql);
    if(empty($name) && (empty($email) && (empty($subject) && (empty($message))))){
        array_push($error, "Please fill in blank fields");
    }elseif (empty($name)){
        array_push($error, "please fill your name");
    }elseif(mysqli_num_rows($sql) != 0){
        array_push($error, "email already exist");
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "email is invalid");
    }
     if(empty($error)){
   echo"arrived";
        $name = ($name);
        $email = ($email);
  
        $query = "INSERT INTO contact_us (name, email, subject, message) 
                VALUES ('$name','$email','$subject','$message')";

        $result = mysqli_query($mysqli,$query);
        
        //$query = mysqli_query($mysqli, "INSERT INTO contact_us VALUES('$name','$email','$subject','$message');");
        if($result){
       echo "success";
     // unset($_POST['sendflag']);
         header("location: index.php");
    }else{
      echo "mba";
    }
    
    } 
}
        ?>

<div class="form contact-form">
                <form action="contact_us.php" method="post" role="form" class="email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="contact_name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="contact_email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><input type="submit" name="sub" value="SendMessage"></div>
                </form>
              </div>