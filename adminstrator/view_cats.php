<?php
@session_start();
//include("includes/connection.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{


?>
<!DOCTYPE html>
<html>
<head>
<title>View Categories</title>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / View Categories
</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->

<div class="row"><!-- 2 Row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default">

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> View Categories
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<div class="table-responsive"><!-- table-responsive Starts -->
<table class="table table-bordered table-hover table-striped">

<thead><!-- thead Starts -->
<tr>
<th>Category ID:</th>
<th>Category Title:</th>
<th>Edit Category:</th>
<th>Delete Category</th>
</tr>
</thead><!-- thead Ends -->

<tbody>
<?php
$i=0;
$get_cats = "select * from category";
$run_cats = mysqli_query($connection,$get_cats);
while($row_cats=mysqli_fetch_array($run_cats)){
$cat_id= $row_cats['id'];
$cat_title = $row_cats['cat_title'];
$i++;



?>

<tr>
<td><?php echo $i; ?></td>
<td><?php echo $cat_title; ?></td>
<td>
<a href="index.php?edit_cat=<?php echo $cat_id; ?>">
<i class="fa fa-pencil"></i> Edit
</a>
</td>

<td>
<a href="index.php?delete_cat=<?php echo $cat_id; ?>">
<i class="fa fa-trash-o"></i> Delete
</a>
</td>

</tr>

<?php } ?>
</tbody>

</table>
</div><!-- table-responsive Ends -->
</div><!-- panel-body Ends -->

</div>

</div><!-- col-lg-12 Ends -->

</div><!-- 2 Row Ends -->

</body>

</html>

<?php } ?>