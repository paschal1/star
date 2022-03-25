<?php 
 ob_start();
 //session_start();
 date_default_timezone_set("Africa/Lagos");
 $connection = new mysqli("localhost","eseltwgh_dstarite","paschal@081","eseltwgh_dstarite") or die(mysqli_connect_error($connection));