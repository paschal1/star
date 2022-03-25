<?php
@session_start();
include("../config/config.php");

//include("functions/functions.php");

 if(isset($_SESSION['admin'])){
     $admin_user = $_SESSION['admin'];
     $admin_id = $_SESSION['admin_id'];
 }else{
    echo "<script>window.open('login.php','_self')</script>";
 }
 $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';

?>
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top starts -->

<div class="navbar-header"><!-- Navbar-header Starts -->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php?dashboard">Admin Panel</a>

</div><!-- Navbar-header Ends -->

<ul class="nav navbar-right top-nav">

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 
<?php echo admin_name(); ?> <b class="caret"></b></a>
 
<ul class="dropdown-menu"><!-- dropdown-menu Starts -->

<li>
<a href="index.php?user_profile=<?php echo $admin_id; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
</li>

<li>
<a href="index.php?view_posts"> <i class="fa fa-fw fa-envelope"></i> Posts <span class="badge"><?php echo total_posts(); ?></span></a>
</li>

<li>
<a href="index.php?view_comments">
<i class="fa fa-fw fa-comment"></i> Comments <span class="badge"><?php echo total_comments();  ?></span>
</a>
</li>

<li>
<a href="index.php?view_cats">
<i class="fa fa-fw fa-gear"></i> Categories <span class="badge">
<?php echo total_category(); ?>
</span>
</a>
</li>

<li class="divider"></li>

<li>
<a href="logout.php">
<i class="fa fa-fw fa-power-off"></i> Logo Out
</a>
</li>

</ul><!-- dropdown-menu Ends -->

</li>

</ul>

<div class="collapse navbar-collapse navbar-ex1-collapse"><!--- collapse navbar-collapse navbar-ex1-collapse Starts -->
<ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav Starts -->

<li>
<a href="index.php?dashboard">
<i class="fa fa-fw fa-dashboard"></i> Dashboard
</a>
</li>

<li>

<a href="#" data-toggle="collapse" data-target="#posts">
<i class="fa fa-fw fa-table"></i> Posts <i class="fa fa-fw fa-caret-down"></i>
</a>

<ul id="posts" class="collapse">

<li>
<a href="index.php?insert_post">Insert Post</a>
</li>

<li>
<a href="index.php?view_posts">View Posts</a>
</li>

</ul>

</li>

<li>
<a href="index.php?view_comments">
<i class="fa fa-fw fa-edit"></i> View Comments
</a>
</li>

<li>
<a href="#" data-toggle="collapse" data-target="#cat">
<i class="fa fa-fw fa-arrows-v"></i> Categories <i class="fa fa-fw fa-caret-down"></i>
</a>

<ul id="cat" class="collapse">

<li>
<a href="index.php?insert_cat">Insert Category</a>
</li>

<li>
<a href="index.php?view_cats">View Categories</a>
</li>

</ul>

</li>

<li>
<a href="#" data-toggle="collapse" data-target="#users">
<i class="fa fa-fw fa-gear"></i> Users <i class="fa fa-fw fa-caret-down"></i>
</a>

<ul id="users" class="collapse">

<li>
<a href="index.php?insert_user">Insert User</a>
</li>

<li>
<a href="index.php?view_users">View Users</a>
</li>

<li>
<a href="index.php?user_profile=<?php echo $uniqid . $admin_id . '$!$1#8m.103ab91a300#!85huin%!3gh7dkWCMdNCuzoJNHUjlByvvemBcG'; ?>">Edit Profile</a>
</li>

</ul>

</li>

<li>
<a href="logout.php">
<i class="fa fa-fw fa-power-off"></i> Log Out
</a>
</li>

</ul><!-- nav navbar-nav side-nav Ends -->
</div><!--- collapse navbar-collapse navbar-ex1-collapse Ends -->

</nav><!-- navbar navbar-inverse navbar-fixed-top Ends -->

<?php //} ?>