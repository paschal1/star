<?php
//session_start();
 include("../config/config.php");

  include_once("functions/functions.php");

 if(!isset($_SESSION['admin'])){
 echo "<script>window.open('login.php','_self')</script>";
}else{



?>

<div class="row"><!---1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<h1 class="page-header">
Dashboard
</h1>

<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active">
<i class="fa fa-dashboard"></i> Dashboard
</li>
</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--- 1 row Ends -->

<div class="row"><!-- 2 row Starts-->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
<div class="panel panel-primary"><!-- panel panel-primary Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<div class="row"><!-- panel-heading row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts -->
<i class="fa fa-comments fa-5x"></i>
</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts -->
<div class="huge"><?php echo total_comments(); ?></div>

<div>Comments</div>

</div><!-- col-xs-9 text-right Ends -->

</div><!-- panel-heading row Ends -->

</div><!-- panel-heading Ends -->

<a href="index.php?view_comments">
<div class="panel-footer"><!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer Ends -->
</a>

</div><!-- panel panel-primary Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts -->
<div class="panel panel-green"><!-- panel panel-green Starts -->
<div class="panel-heading"><!-- panel-heading Starts -->
<div class="row"><!-- panel-heading row Starts -->
<div class="col-xs-3"><!--- col-xs-3 Starts -->
<i class="fa fa-tasks fa-5x"></i>
</div><!--- col-xs-3 Ends -->

<div class="col-xs-9 text-right">
<div class="huge"><?php echo num_posts(); ?></div>
<div>Posts</div>
</div>

</div><!-- panel-heading row Ends -->
</div><!-- panel-heading Ends -->

<a href="index.php?view_posts">

<div class="panel-footer"><!-- panel-footer Starts -->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer Ends -->

</a>

</div><!-- panel panel-green Ends -->
</div><!-- col-lg-3 col-md-6 Ends -->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts-->
<div class="panel panel-yellow"><!-- panel panel-yellow Starts-->

<div class="panel-heading"><!-- panel-heading Starts-->

<div class="row"><!-- Row Starts-->

<div class="col-xs-3"><!-- col-xs-3 Starts -->
<i class="fa fa-shopping-cart fa-5x"></i>
</div><!-- col-xs-3 Ends -->

<div class="col-xs-9 text-right"><!--- col-xs-9 text-right Starts-->
<div class="huge"><?php echo total_category(); ?></div>
<div>Categories</div>
</div><!--- col-xs-9 text-right Ends-->


</div><!-- Row Ends-->

</div><!-- panel-heading Ends-->

<a href="index.php?view_cats">

<div class="panel-footer"><!-- panel-footer Starts ---->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer Ends ---->

</a>

</div><!-- panel panel-yellow Ends-->
</div><!-- col-lg-3 col-md-6 Ends-->

<div class="col-lg-3 col-md-6"><!-- col-lg-3 col-md-6 Starts-->
<div class="panel panel-red"><!-- Panel panel-red Starts-->

<div class="panel-heading"><!-- panel-heading Starts-->

<div class="row"><!-- Row Starts -->

<div class="col-xs-3"><!-- col-xs-3 Starts-->
<i class="fa fa-support fa-5x"></i>
</div><!-- col-xs-3 Ends-->

<div class="col-xs-9 text-right"><!-- col-xs-9 text-right Starts-->
<div class="huge"><?php echo user_role(); ?></div>
<div>Users</div>
</div><!-- col-xs-9 text-right Ends-->

</div><!-- Row Ends -->

</div><!-- panel-heading Ends-->

<a href="index.php?view_users">

<div class="panel-footer"><!-- panel-footer Starts-->
<span class="pull-left">View Details</span>
<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
<div class="clearfix"></div>
</div><!-- panel-footer Ends-->

</a>

</div><!-- Panel panel-red Ends-->
</div><!-- col-lg-3 col-md-6 Ends-->

</div><!-- 2 row Ends -->

<div class="row"><!--- 3 row Starts -->
<div class="col-lg-8"><!-- col-lg-8 Starts -->

<div class="panel panel-primary"><!-- panel panel-primary Starts -->
<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title"> <i class="fa fa-money fa-fw"></i> New Comments </h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<div class="table-responsive"><!-- table-responsive Starts -->
<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead>
<tr>
<th>Comment Name</th>
<th>Comment Email</th>
<!-- <th>Comment Url</th> -->
<th>Comment Date</th>
<th>Comment Post</th>
</tr>
</thead>

<tbody>

<?php

$get_comments = "SELECT * from comments where status = 'unapproved' order by 1 DESC LIMIT 4";

$run_comments = mysqli_query($connection, $get_comments);

while ($row_comments= mysqli_fetch_array($run_comments)){

$post_id = $row_comments['post_id'];
$comment_name = $row_comments['name'];
$comment_date = $row_comments['date_added'];
$comment_email = $row_comments['email'];
$comment_url = $row_comments['website'];
$comment_body = $row_comments['body'];

// $get_posts = "select * from news WHERE post_id='$post_id'";
// $run_posts = mysqli_query($connection, $get_posts);
// $row_posts = mysqli_fetch_array($run_posts);
// $post_title = $row_posts['post_title'];

?>

<tr>
<td><?php echo $comment_name; ?></td>
<td><?php echo $comment_email; ?></td>
<td><?php echo $comment_date; ?></td>
<td><?php echo $comment_body; ?></td>
</tr>

<?php } ?>

</tbody>

</table><!-- table table-bordered table-hover table-striped Ends -->
</div><!-- table-responsive Ends -->

<div class="text-right"><!--- text-right Starts -->
<a href="index.php?view_comments">
View All Comments <i class="fa fa-arrow-circle-right"></i>
</a>
</div><!--- text-right Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-primary Ends -->
</div><!-- col-lg-8 Ends -->

<div class="col-md-4"><!-- col-md-4 Starts -->
<div class="panel"><!-- panel Starts -->
<div class="panel-body"><!-- panel-body Starts -->

<div class="thumb-info mb-md">
<img src="<?php echo profile_pic(); ?>" class="rounded img-responsive">

<div class="thumb-info-title"><!-- thumb-info-title Starts -->

<span class="thumb-info-inner small p-0"><?php echo admin_name(); ?></span>
<span class="thumb-info-type"><?php echo admin_role(); ?></span>

</div><!-- thumb-info-title Ends -->

</div>

<div class="mb-md"><!-- mb-md Starts -->

<div class="widget-content-expanded"><!-- widget-content-expanded Starts -->

<i class="fa fa-envelope"></i> <span>Email: </span> <?php echo admin_email(); ?> <br> <br>
<i class="fa fa-user"></i> <span>Country: </span> Nigeria <br> <br>
<i class="fa fa-user"></i> <span>Num of Posts: </span> <?php echo total_posts(); ?> <br>

</div><!-- widget-content-expanded Ends -->

<hr class="dotted short">

</p>

</div><!-- mb-md Ends -->

</div><!-- panel-body Ends -->
</div><!-- panel Ends -->

</div><!-- col-md-4 Ends -->

</div><!--- 3 row Ends -->

<?php } ?>