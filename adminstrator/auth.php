<?php

include('../config/config.php');

$sql = mysqli_query($connection, "select * FROM admins");
  
if(mysqli_num_rows($sql)===0){
    
    echo "<script>window.open('registration.php', '_SELF')</script>";
  
}else{
    echo "<script>window.open('login.php', '_SELF')</script>";  
}