<?php
@session_start();
include("../config/config.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{



?>

<?php 

if(isset($_GET['edit_cat'])){

$edit_id = $_GET['edit_cat'];

$edit_cat = "select * from category where id='$edit_id'";

$run_edit = mysqli_query($connection,$edit_cat);

$row_edit = mysqli_fetch_array($run_edit);

$cat_id = $row_edit['id'];

$cat_title = $row_edit['cat_title'];

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Category</title>
</head>
<body>
<div class="row"><!-- row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb">
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / Edit Category
</li>
</ol>

</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->

<div class="row"><!-- 2 row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- Panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Edit Category
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" action="" method="post"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label">Category Title</label>

<div class="col-md-6">
<input type="text" name="cat_title" class="form-control" value="<?php echo $cat_title; ?>">
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- 2 form-group Starts -->

<label class="col-md-3 control-label"></label>

<div class="col-md-6">
<input type="submit" name="submit" value="Update Category" class="btn btn-primary form-control">
</div>

</div><!-- 2 form-group Ends -->

</form><!-- form-horizontal Ends -->
</div><!-- panel-body Ends -->

</div><!-- Panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

</body>
</html>

<?php 

if(isset($_POST['submit'])){

$cat_title = $_POST['cat_title'];

$update_cat = "update category set cat_title='$cat_title' where id='$cat_id'";

$run_cat = mysqli_query($connection,$update_cat);

if($run_cat){
echo "<script>alert('Category Has Been Updated')</script>";
echo "<script>window.open('index.php?view_cats','_self')</script>";
}

}

?>


<?php } ?>