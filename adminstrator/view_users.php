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
<title>View Users</title>
</head>
<body>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / View Users
</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> View Users
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead>
<tr align="center">
<th>User Name</th>
<th>User Email</th>
<th>User Image</th>
<th>User Role</th>
<th>Num of Posts</th>
<th>Delete User</th>

</tr>
</thead>

<tbody>

<?php

$get_admin = "select * from admins";
$run_admin = mysqli_query($connection,$get_admin);
while($row_admin=mysqli_fetch_array($run_admin)){
$admin_id = $row_admin['id'];
$admin_name = $row_admin['name'];
$admin_email = $row_admin['email'];
$admin_image = $row_admin['profile_pic'];
$admin_role = $row_admin['role'];
$admin_post = $row_admin['num_posts'];
?>

<tr>
<td><?php echo $admin_name; ?></td>
<td><?php echo $admin_email; ?></td>
<td>
<img src="<?php echo $admin_image; ?>" width="60" height="60" >
</td>
<td><?php echo $admin_role; ?></td>
<td><?php echo $admin_post; ?></td>
<td>
<a href="index.php?user_delete=<?php echo $admin_id; ?>">
<i class="fa fa-trash-o"></i> Delete
</a>
</td>


</tr>

<?php } ?>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

</body>
</html>

<?php } ?>