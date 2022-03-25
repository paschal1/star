<?php
session_start();
session_destroy();
echo "<script>window.open('forms/signin.php','_self')</script>";

?>