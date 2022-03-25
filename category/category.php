<?php
//session_start();

function get_category(){
    global $connection;
   
    if(isset($_SESSION['admin'])){
       $admin_id = $_SESSION['admin_id'];
       $sql = mysqli_query($connection, "SELECT * FROM admins where id = '$admin_id'");
       $role = mysqli_fetch_array($sql);
       $user_role = $role['role'];
       $get_category =  mysqli_query($connection, "SELECT * from category");
       while($row = mysqli_fetch_array($get_category)){
       $id = $row['id'];
       $cat_title = $row['cat_title'];
       echo "<li>
       <a href='#'>$cat_title</a>
        </li>";
    }
   
  }  
}
//get_category();

?>