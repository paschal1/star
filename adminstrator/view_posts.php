<?php
// @session_start();
// include("includes/connection.php");

 if(!isset($_SESSION['admin'])){
 echo "<script>window.open('login.php','_self')</script>";
 }else{
?>

<!DCTYPE HTML>
<html>
<head>
<title>View Posts</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<div class="row"><!--- Row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">
<i class="fa fa-dashboard"></i> Dashboard / View Posts
</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->
</div><!--- Row Ends -->

<div class="row"><!-- 2 Row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title"><i class="fa fa-money fa-fw"></i> View Posts</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<div class="table-responsive"><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead align="center"><!-- thead Starts -->

<tr>
<th>Post ID:</th>
<th>Post Title:</th>
<th>Post Author:</th>
<th>Post Image:</th>
<th>Post Comments:</th>
<th>Post Date:</th>
<th>Post Delete:</th>
<th>Post Edit:</th>

</tr>

</thead><!-- thead Ends -->

<tbody>
<?php
$i=0;
$get_posts = "select * from news order by id DESC limit 10";
$run_posts = mysqli_query($connection, $get_posts);

while($row_posts=mysqli_fetch_array($run_posts)){

$post_id = $row_posts['id'];

// $hashed = password_hash($post_id, PASSWORD_DEFAULT);

// if(password_verify($post_id, $hashed)){

//   $rehashed_id =  $row_posts['id'];;

// }
$uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
$post_title = $row_posts['title'];
$post_author = $row_posts['added_by'];
$post_date = $row_posts['date_added'];
$post_image = $row_posts['post_image'];
$i++;
?>
<tr align="center">
<td><?php echo $i; ?></td>
<td><?php  echo $post_title ; ?></td>
<td><?php echo $post_author; ?></td>
<td><?php echo "<img src='$post_image' alt='Insert Image' class='img- img-responsive img-fluid mt-3' id='img' height='80' width='80' >"; ?></td>
<td>
<?php 

$get_comments = "select * from comments where post_id='$post_id'";
$run_comments = mysqli_query($connection, $get_comments);
$count = mysqli_num_rows($run_comments);
echo $count;
?>
</td>
<td><?php echo $post_date; ?></td>

<td>
<a href="index.php?delete_post=<?php echo $uniqid . $post_id . 'CMdNC1#10%!98uzoJNHUjhgertghi%#fio!$10po!54s#a921cvf0l18$gg'; ?>" class = 'btn btn-danger btn-sm' > <i class="fa fa-trash-o"> </i> Delete</a>
</td>

<td> 
<a href="index.php?edit_post=<?php echo $uniqid.$post_id .'CMdNC1#10%!98u12zoJNHU98jl&&10jhgertghi!20#%32a@2103q' ; ?>" class = 'btn btn-success btn-sm'>
<i class="fa fa-pencil"></i> Edit
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