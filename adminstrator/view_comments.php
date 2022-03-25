<?php
@session_start();
 include("includes/connection.php");

if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{

?>
<!DOCTYPE HTML>
<html>
<head>
<title>View Comments</title>
</head>
<body>

<div class="row"><!-- Row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / View Comments
</li>
</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->
</div><!-- Row Ends -->

<div class="row"><!-- 2 Row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> View Comments
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Comment Id</th>
<th>Comment Name</th>
<th>Comment Email</th>
<th>Comment Date</th>
<th>Comment Content</th>
<th>Comment Approve</th>
<th>Comment Delete</th>


</tr>

</thead>

<tbody>
<?php

$i=0;

$get_comments = "select * from comments order by id desc limit 10";


$run_comments = mysqli_query($connection,$get_comments);

while($row_comments = mysqli_fetch_array($run_comments)){

$post_id = $row_comments['post_id'];
$comment_id = $row_comments['post_id'];
$comment_name = $row_comments['name'];
$comment_date = $row_comments['date_added'];
$comment_email = $row_comments['email'];
$comment_url = $row_comments['website'];
$comment_text = $row_comments['body'];
$status = $row_comments['status'];
$i++;

$get_posts = "select * from comments where post_id= '$post_id'";
$run_posts = mysqli_query($connection,$get_posts);
$row_posts = mysqli_fetch_array($run_posts);
// $post_title = $row_posts['post_title'];

?>

<tr align="center">
<td><?php echo $i; ?></td>
<td><?php echo $comment_name; ?></td>
<td><?php echo $comment_email; ?></td>
<td><?php echo $comment_date; ?></td>
<td width="300"><?php echo $comment_text; ?></td>

<?php //echo $post_title; ?></td>

<td>
<?php

if($status==='approved'){
echo "<a href='index.php?unapprove=$comment_id' class='btn btn-danger btn-sm'>Unapproved</a>";
}else{
echo "<a href='index.php?approve=$comment_id' class='btn btn-success btn-sm'>Approved</a>";
}

?>
</td>

<td>
<a href="index.php?delete_comment=<?php echo $comment_id; ?>">
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
</div><!-- 2 Row Ends -->

</body>
</html>

<?php } ?>