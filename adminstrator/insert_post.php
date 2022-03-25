<?php
//@session_start();
// include("../config/config.php");

 if(!isset($_SESSION['admin'])){
 echo "<script>window.open('login.php','_self')</script>";
}else{
//return false;
?>

<?php
// session_start();
$msg = [];
$success = [];
if(isset($_POST['add_news']) && $_FILES['post_image'] !="" && $_FILES['post_image'] !=" "){
  $title = $_POST['title'];
  $category = $_POST['category'];
  $content = $_POST['content'];
   $type =  $_POST['type_news'];
  $tags = $_POST['tags'];
  if(empty($title) || empty($content) || empty($tags)){
    array_push($msg, "Please fill in blank fields");
  }elseif(strlen($content) <= 100){
    array_push($msg, "Content should be more than 100 characters");
  }elseif(strlen($title) < 10){
    array_push($msg, "Title must be more than 10 characters");
  }
  $filename = $_FILES['post_image']['name'];
  $filetmpname = $_FILES['post_image']['tmp_name'];
  $imagesize = $_FILES['post_image']['size'];
  $fileExt = explode('.',$filename);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = ['jpg','jpeg','png'];
  $not_allowed = ['mkv','mp4','mp3','pdf','gif','exe'];
  $type = $_FILES['post_image']['type'];
  if(!in_array($fileActualExt, $allowed)){
    array_push($msg, "Invalid file type");
  }
  if($imagesize > 20000000){
    array_push($msg, "File is too large");
  }else{
    $filenewname = uniqid(' ', true) . " ."  .$fileActualExt;
    $dir = "news_images/";
    $target_file = $dir . basename($filenewname);
    move_uploaded_file($filetmpname, $target_file);
  }
  if(empty($msg)){
    add_post($_POST['title'], $_POST['content'], $_POST['category'], $_POST['type_news'], $_POST['tags'], $target_file);
    echo "<script>alert('Post have been successfully added')</script>";
  }
}
?>

<!DOCTYPE html>
<html>

<head>

<title>Insert Post</title>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>

</head>

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

<body>
<div class="row"><!-- row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->
<ol class="breadcrumb"><!-- breadcrumb Starts -->
<li class="active"> <i class="fa fa-dashboard"></i> Dashboard / Insert Post  </li>

</ol><!-- breadcrumb Ends -->
</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->

<div class="row"><!-- row Starts -->
<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->
<div class="panel-heading"><!-- panel-heading Starts -->
<h3 class="panel-title"> <i class="fa fa-money fa-fw"></i> Insert Post </h3>
</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<?php foreach($msg as $error){
                                if(isset($error) && (count($msg)>0)){
                                 echo "<div class='alert alert-danger' role='alert'>
                                <strong>$error</strong>
                                </div>"; 
                                }
                            }?>
                                                <?php foreach($success as $error){
                                if(isset($error) && (count($success)>0)){
                                 echo "<div class='alert alert-success' role='alert'>
                                <strong>$error</strong>
                                </div>"; 
                                }
                            }
                                ?>
                                
                              
<form class="form-horizontal" action =" " method="post" enctype="multipart/form-data"> <!--- form-horizontal Starts --->

<div class="form-group"><!--- form-group Starts -->
<label class="col-md-3 control-label"> Post Title </label>
<div class="col-md-6">
<input type="text" placeholder="News Title" maxlength="100" data-max-chars="100" class="form-control count-chars" name="title" value="<?php if(isset($_POST['add_news'])){ echo "$title";} ?>">
<div class="input-msg text-red mb-3" style="color:red;padding-top:10px;"></div>
</div>


</div><!--- form-group Ends -->



<!-- ====================================================================== -->


<div class="form-group"><!-- form-group Starts --->
<label class="col-md-3 control-label">Post category</label>
<div class="col-md-6">
<select name="category" class="form-control">
<?php
  $query = mysqli_query($connection, "SELECT DISTINCT * FROM category ORDER BY cat_title ASC");
  while ($row = mysqli_fetch_array($query)){
  $cat_title = $row['cat_title'];
  echo "<option value = '{$cat_title}'>$cat_title</option>";
  }
  ?>
</select>

</div>

</div><!-- Form-group Ends -->


<!--  ================== Type of News ============== -->
<div class="form-group"><!-- form-group Starts --->
<label class="col-md-3 control-label">Type of News</label>
<div class="col-md-6">
<select name="type_news" class="form-control">
<option value = 'Breaking News'>Breaking News</option>
<option value = 'Casual News'>Casual News</option>
</select>
</div>
</div>
<!-- ====================End type of News -->

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label">Post Content</label>
<div class="col-md-6">
<textarea name="content" class="form-control summernote" rows="6" cols="19" ><?php if(isset($_POST['add_news'])){
                                                echo "$content";}
                                                ?></textarea>
</div>

</div><!-- form-group Ends -->

<!-- form-group Ends -->

<div class="form-group"><!--- form-group Starts -->
<label class="col-md-3 control-label"> Tags</label>
<div class="col-md-6">
<input  type="text" name="tags" class="form-control" placeholder="Seperate by a comma" value="<?php if(isset($_POST['add_news'])){
                                                echo "$tags";}
                                                ?>">
</div>
</div>

<center>
<div class="form-group">
                    <!-- <label for="">Image</label> -->
                    <!-- <input type="file" name="post_image" onchange="readURL(this)"> -->
                    <div class="fileUpload btn btn-info control-label" id="fileupload" name="upload" disable>
                    <span> <i class="fa fa-camera"></i> Upload Image</span>
                    <input type="file" id ="upload" name = "post_image" class="upload btn btn-info btn-sm " onchange="readURL(this)" accept="image/*"/>
                    </div>
                    <br> <br>
                    <img src="#" alt="Insert Image" class="img-rounded img-responsive img-fluid mt-5" onerror="this.style.display='none'" onload="this.style.display='block'" id="img" height="350" width="400" >
                </div>
                
</center>

<div class="form-group"><!-- form-group Starts -->
<label class="col-md-3 control-label"></label>
<div class="col-md-6">
<input type="submit" name="add_news" class="btn btn-success form-control" value="Add news">
</div>
</div><!-- form-group Ends -->
</form><!--- form-horizontal Ends --->


</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->
</div><!-- row Ends -->

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

</script>
<script src="summernote/summernote.min.js"></script>
<script>
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