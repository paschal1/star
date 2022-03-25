<?php
@session_start();
include("../config/config.php");


if(!isset($_SESSION['admin'])){
echo "<script>window.open('login.php','_self')</script>";
}else{


?>

<?php

$uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';

$edit_id = $_GET['edit_post'];

if(isset($_GET['edit_post'])){
 $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $edit_id);
  foreach($real_id as $post_id){
 //echo $post_id;
 }

$select_post = "select * from news where id='$post_id'";

$run_post = mysqli_query($connection,$select_post);

$row_post = mysqli_fetch_array($run_post);

$post_id = $row_post['id'];
$post_title = $row_post['title'];
$post_cat = $row_post['post_cat_id'];
$post_author = $row_post['added_by'];
//$post_keywords = $row_post['post_keywords'];
$post_content = $row_post['content'];
$post_image = $row_post['post_image'];
$post_tag = $row_post['tags'];
}
?>
<?php
if(isset($_GET['edit_post']) && $_GET['edit_post'] !==''){
  $id = $_GET['edit_post'];
  $query = mysqli_query($connection, "SELECT * FROM news WHERE id='$id'");
  while($row = mysqli_fetch_assoc($query)){
      $id = $row['id'];
      $title = $row['title'];
      $content = $row['content'];
     $tags = $row['tags'];
      $image = $row['post_image'];
      $added_by = $row['added_by'];
  
  if(isset($_POST['u_edit_post']) && $_GET['edit_post'] !==''){
   
   $u_title = $_POST['u_title'];
   $u_content = $_POST['u_content'];
   $u_tag = $_POST['u_tag'];
    $u_category = $_POST['u_category'];
    $u_type_news = $_POST['u_type_news'];
    $u_category = $_POST['u_category'];
      $u_type_news = $_POST['u_type_news'];
      $sql = mysqli_query($connection, "UPDATE news SET title ='$u_title',content= '$u_content', tags = '$u_tag', post_category='$u_category', type ='$u_type_news'  WHERE id = '$id'");
      if($sql){
        echo "<script>alert('Post have been updated')</script>";
      }else{
        echo "<script>alert('Did't work')</script";
      }
      // header("location: managepost.php");
  }
}
}


?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Post</title>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>
<body>
<style>
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);}
</style>

<div class="row"><!-- Row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i> Dashboard / Edit Post
</li>
</ol>

</div><!-- col-lg-12 Ends -->
</div><!-- Row Ends -->

<div class="row"><!-- 2 row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title">
<i class="fa fa-money fa-fw"></i> Edit Post
</h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->
<form class="form-horizontal" method="post" enctype="multipart/form-data" action = ""><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Post Title</label>
<div class="col-md-6">
<input type="text" name="u_title" class="form-control" required value="<?php echo $post_title; ?>">
</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Post Author</label>
<div class="col-md-6">
<input type="text" name="u_added_by" disabled class="form-control disabled" required value="<?php echo $post_author; ?>">
</div>

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Post Category</label>
<div class="col-md-6">


  <select name='u_category' class='form-control'>
  <?php
  $query = mysqli_query($connection, "SELECT DISTINCT * FROM category ORDER BY cat_title ASC");
  $sql = mysqli_fetch_array($query);
  while ($row = mysqli_fetch_array($query)){
  $cat_title = $row['cat_title'];
  echo "<option  value = '{$cat_title}'>$cat_title</option>";
}
?>
</select>
</div>

</div><!-- form-group Ends -->

<center>
<div class="form-group">
                    <!-- <label for="">Image</label> -->
                    <!-- <input type="file" name="post_image" onchange="readURL(this)"> -->
                    <div class="fileUpload btn btn-info control-label" id="fileupload" name="upload" disable>
                    <span> <i class="fa fa-camera"></i> Upload Image</span>
                    <input type="file" id ="upload" name = "u_post_image" class="upload btn btn-info btn-sm " onchange="readURL(this)" accept="image/*"/>
                    </div>
                    <br> <br>
                    <?php echo "<img src='$post_image' alt='Insert Image' class='img-rounded img-responsive img-fluid mt-5' onerror='this.style.display='none'' onload='this.style.display='block'' id='img' height='350' width='400' >"; ?>
  
  </div>               
</center>

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Post Content</label>
<div class="col-md-6">
<textarea name="u_content" class="form-control" rows="6" cols="19"> <?php echo $post_content; ?> </textarea>

</div>

</div><!-- form-group Ends -->


<div class="form-group"><!--- form-group Starts -->
<label class="col-md-3 control-label"> Tags</label>
<div class="col-md-6">
<input  type="text" name="u_tag" class="form-control" placeholder="Seperate by a comma" value="<?php echo $post_tag ?>">
                                             
                                               
</div>
</div>

<div class="form-group"><!-- form-group Starts --->
<label class="col-md-3 control-label">Type of News</label>
<div class="col-md-6">
<select name="u_type_news" class="form-control">
<option value = 'Breaking News'>Breaking News</option>
<option value = 'Casual News'>Casual News</option>
</select>
</div>
</div>

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"></label>

<div class="col-md-6">

<input type="submit" name="u_edit_post" class="btn btn-primary form-control">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->
</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- 2 row Ends -->

<script>
    function readURL(input){
    if(input.files && input.files[0]) {
       let reader = new FileReader();
       reader.onload = function(e){
       $("#img").attr("src", e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
     }
   }
//     = document.getElementById('');
$(document).ready(function(){
	 $(".selectbtn").click(function (){
	 	$(".file").trigger('click');
          $(".file").css("opacity", "0");
	 });
	 $(".file").change(function (){
	 	$(".file").removeClass();
	 	$(".button").addClass("submitbtn");
	 	 $(".submitbtn").text("Upload Image");
	 	$(".submitbtn").click(function (){
	 	$("#submit").trigger('click');
	 });
	 });
	});

  (function(){
    document.addEventListener("keyup", function(event){
    	if(event.target.matches(".count-chars")){
    		// get input value and length
    		const value = event.target.value;
    		const valueLength = event.target.value.length;
    		// get data value
    		const maxChars = parseInt(event.target.getAttribute("data-max-chars"));
    		const remainingChars = maxChars - valueLength;
    		if(valueLength > maxChars){
    			// limit chars to maxChars
    			event.target.value = value.substr(0, maxChars);
    			return;  //end function execution
    		}
    		event.target.nextElementSibling.innerHTML = remainingChars + " characters remaining";
        event.target.value.style.color = "red";
    	}
    })
})();

jQuery(document).ready(function(){

$('.summernote').summernote({
    height: 240,                 // set editor height
    minHeight: null,             // set minimum height of editor
    maxHeight: null,             // set maximum height of editor
    focus: false                 // set focus to editable area after initializing summernote
});
// Select2
$(".select2").select2();

$(".select2-limiting").select2({
    maximumSelectionLength: 2
});
});
</script>

<script>
if(window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>



<?php } ?>