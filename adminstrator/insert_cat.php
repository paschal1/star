<?php
// @session_start();
// include("includes/connection.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{



?>

<!DOCTYPE html>
<html>
<head>
<title>Insert Category</title>
</head>
<body>

<div class="row"><!-- Row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i> Dashboard / Insert Category
</li>
</ol>

</div><!-- col-lg-12 Ends -->
</div><!-- Row Ends -->

<div class="row"><!-- 2 Row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Insert Category
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Category Title</label>

<div class="col-md-6">
<input type="text" name="cat_title" class="form-control">
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">
<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control">
</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->
</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 Row Ends -->
<script>
if(window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>

<?php 

if(isset($_POST['submit'])){

$cat_title = $_POST['cat_title'];

$insert_cat = ("INSERT INTO category VALUES('','$cat_title');");

$run_cat = mysqli_query($connection,$insert_cat);

if($run_cat){
echo "<script>alert('New Category Has Been Inserted')</script>";
// echo "<script>window.open('index.php?view_cats','_self')</script>";

}

}

?>

<?php } ?>