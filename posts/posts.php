

<?php
 session_start();

 //include ('config/config.php');

 //include_once ('adminstrator/functions/functions.php');

 function get_post(){
     global $connection;
     $query = mysqli_query($connection, "SELECT * FROM news WHERE status = 'Approved'  ORDER BY timestamped >= curdate()  DESC  LIMIT 3");
     $str = "";
     while ($row = mysqli_fetch_array($query)){
         $id = $row['id'];
         $uniqid = uniqid($id);
       $img = $row['post_image'];
       $num_comments = $row['num_comments'];
        $date_added = $row['date_added'];
         $title = $row['title'];
         $content = $row['content'];
         $str  .=   "<div class='col-md-4 col-sm-4 col-xs-12'>
         <div class='single-blog'>
                <div class='single-blog-img'>
             <a href='blog.php'>
               <img src='adminstrator/$img' alt='' class='img'>
             </a>
           </div>
           <div class='blog-meta'>
             <span class='comments-type'>
               <i class='fa fa-comment-o'></i>
               <a href='blog.php'>$num_comments &nbsp comments</a>
             </span>
             <span class='date-type'>
               <i class='fa fa-calendar'></i> $date_added
             </span>
           </div>
           <div class='blog-text'>
             <h4>
               <a href='blog.php'>$title</a>
             </h4>
             <p>
             
             </p>
           </div>
           <span>
             <a href='blog.php' class='ready-btn'>Read more</a>
           </span>
         </div>";
     }
     echo $str;
    
     //echo "Good man";
 }

 function blog_page(){
  global $connection;
  $query = mysqli_query($connection, "SELECT * FROM news WHERE status = 'Approved'  ORDER BY id  DESC  LIMIT 6");
  $str = "";
  while ($row = mysqli_fetch_array($query)){
      $id = $row['id'];
      $uniqid = uniqid($id);
    $img = $row['post_image'];
    $num_comments = $row['num_comments'];
     $date_added = $row['date_added'];
      $title = $row['title'];
      $content = $row['content'];
      $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
      $str  .=   "<div class='col-md-12 col-sm-12 col-xs-12'>
      <div class='single-blog'>
        <div class='single-blog-img'>
          <a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103q'>
            <img src='adminstrator/$img' alt=''>
          </a>
        </div>
        <div class='blog-meta'>
          <span class='comments-type'>
            <i class='bi bi-chat'></i>
            <a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103q''>$num_comments</a>
          </span>
          <span class='date-type'>
            <i class='bi bi-calendar'></i>$date_added
          </span>
        </div>
        <div class='blog-text'>
          <h4>
            <a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103q''>$title</a>
          </h4>
          <p>
            $content
          </p>
        </div>
        <span>
          <a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103q' class='ready-btn'>Read more</a>
        </span>
      </div>
    </div>";
  }
  echo $str;

 }

 function single_post(){

  global $connection;
  $post_id = $_GET['post_id'];

  if(isset($_GET['post_id'])){
     // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
      $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
       foreach($real_id as $id1){
       $id1;
      }
  }

  //$post_id = $_GET['blog'];
  $query = mysqli_query($connection, "SELECT * FROM news WHERE status = 'Approved' AND id='$id1' ORDER BY id  DESC  LIMIT 1");
  $str = "";

  while ($row = mysqli_fetch_array($query)){
      $id = $row['id'];
      $uniqid = uniqid($id);
    $img = $row['post_image'];
    $num_comments = $row['num_comments'];
     $date_added = $row['date_added'];
      $title = $row['title'];
      $author = $row['added_by'];
      $content = $row['content'];
      $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
      $str  .=   "<article class='blog-post-wrapper'>
      <div class='post-thumbnail'>
        <img src='adminstrator/$img' alt='' />
      </div>
      <div class='post-information'>
        <h2>$title</h2>
        <div class='entry-meta'>
          <span class='author-meta'><i class='bi bi-person'></i> <a href='#'>$author</a></span>
          <span><i class='bi bi-clock'></i>$date_added</span>
          <span><i class='bi bi-chat'></i> <a href='#'>$num_comments</a></span>
        </div>
        <div class='entry-content'>
          <p>$content</p>
        </div>
      </div>
    </article>";
  }
  echo $str;
 }

 function recent_posts(){
  global $connection;
  $post_id = $_GET['post_id'];

  if(isset($_GET['post_id'])){
     // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
      $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
       foreach($real_id as $id2){
       $id2;
      }
  }

  //$post_id = $_GET['blog'];
  $query = mysqli_query($connection, "SELECT * FROM news WHERE status = 'Approved' AND id='$id2' ORDER BY id  DESC  LIMIT 4");
  $str = "";

  while ($row = mysqli_fetch_array($query)){
      $id = $row['id'];
      $uniqid = uniqid($id);
    $img = $row['post_image'];
    $num_comments = $row['num_comments'];
     $date_added = $row['date_added'];
      $title = $row['title'];
      $author = $row['added_by'];
      $content = $row['content'];
      if(strlen($content) > 100){
        $content = substr($content, 0, 45) . "...";
      }
      $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
      $str  .=   " <div class='recent-single-post'>
      <div class='post-img'>
        <a href='#'>
          <img src='adminstrator/$img' alt=''>
        </a>
      </div>
      <div class='pst-content'>
        <p><a href='#'> $content</a></p>
      </div>
    </div>";
  }
  echo $str;
 }




function get_blogs(){
  global $connection;
  // $post_id = $_GET['post_id'];
  // if(isset($_GET['post_id'])){
  //    // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
  //     $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
  //      foreach($real_id as $id){
  //      $id;
  //     }
  // }
  if(isset($_GET['page'])){

     $page = $_GET['page'];

  }else {
   
     $page = 1;

  }

  $num_per_page = 02;
  $start_from = ($page-1)*02;
  $query = mysqli_query($connection, "SELECT * FROM news WHERE status = 'Approved'  ORDER BY id  DESC LIMIT $start_from,$num_per_page");
  $str = "";

  while ($row = mysqli_fetch_array($query)){
      $id = $row['id'];
      $uniqid = uniqid($id);
    $img = $row['post_image'];
    $num_comments = $row['num_comments'];
     $date_added = $row['date_added'];
      $title = $row['title'];
      $author = $row['added_by'];
      $content = $row['content'];
      if(strlen($content) > 100 ){
        $content = substr($content, 0, 45) . "...";
      }
      $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
      $str  .=   "<div class='col-md-12 col-sm-12 col-xs-12'>
  <div class='single-blog'>
    <div class='single-blog-$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103qimg'>
      <a href='single.php?post_id='>
        <img src='adminstrator/$img' alt=''>
      </a>
    </div>
    <div class='blog-meta'>
      <span class='comments-type'>
        <i class='bi bi-chat'></i>
        <a href='single.php?post_id=#10%!9e13e30346050428880e5b1156758e243%32a@2103q$uniqid$id'>$num_comments</a>
      </span>
      <span class='date-type'>
        <i class='bi bi-calendar'></i>$author
      </span>
    </div>
    <div class='blog-text'>
      <h4>
        <a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103q'>$title</a>
      </h4>
      <p>
      $content
      </p>
    </div>
    <span>
      <a href='single.php?post_id=$uniqid$id#10%!9e13e30346050428880e5b1156758e243%32a@2103q' class='ready-btn'>Read more</a>
    </span>
  </div>
</div>";
  }
  echo $str;

  $query = mysqli_query($connection, "SELECT * FROM news WHERE status = 'Approved'");
  $total_record = mysqli_num_rows($query);
  //echo $total_record;

  $total_page = ceil($total_record/$num_per_page);
  //echo $total_page;
  
  if($page>1){
echo' <div class="blog-pagination">';
              echo'  <ul class="pagination">';
                echo'<li class="page-item"><a href="blog.php?page='.($page-1).'" class="page-link">&lt;</a></li>';
                 
  }
  for ($i =1;$i<$total_page;$i++){
echo  '<li class="page-item active"><a href="blog.php?page='.$i.'" class="page-link">'.$i.'</a></li>';



              
  }
  if($i >$page){
    echo '<li class="page-item"><a href="blog.php?page='.($page+1).'" class="page-link">&gt;</a></li>
                </ul>
              </div>';
  }
}

 function popular_tags(){
  global $connection;
  // $post_id = $_GET['post_id'];
  // if(isset($_GET['post_id'])){
  //    // $uniqid = '$BpoUSLWCMdNCuzoJNHUjlByvvemBcG';
  //     $real_id = explode('$BpoUSLWCMdNCuzoJNHUjlByvvemBcG', $post_id);
  //      foreach($real_id as $id){
  //      $id;
  //     }
  // }
  $query = mysqli_query($connection, "SELECT * FROM news ORDER BY num_views  DESC  LIMIT 4");
  $str = "";
  while ($row = mysqli_fetch_array($query)){
      $id = $row['id'];
      $tags = $row['tags'];
      $str  .=   "<li><a href='#'>$tags</a></li>";
  }
  echo $str;
 }


//  get_comment();

function getComment(){
  global $connection;
  $queryc = mysqli_query($connection, "SELECT * FROM comments WHERE status = 'Approved' limit 10");
  $total_record = mysqli_num_rows($queryc);
  $stp="";
  $stp .=' <div class="comments-heading">
                      <h3>'.$total_record. 'Comments</h3>
                    </div>';
                    echo $stp;
   $str = "";
  while ($row = mysqli_fetch_array($queryc)){
    $comment_name = $row['name'];
    $comment_body = $row['body'];
    $comment_date = $row['date_added'];

    $str .='  <li class="threaded-comments">
                          <div class="comments-details">
                            <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" alt="post-author">
                            </div>
                            <div class="comments-content-wrap">
                              <span>
                                <b><a href="#">You</a></b>
                                '.$comment_name.'
                                <span class="post-time">'.$comment_date.'</span>
                                <a href="#">Reply</a>
                              </span>
                              <p>'.$comment_body.'</p>
                            </div>
                          </div>
                        </li>

                        <li class="threaded-comments">
                        <div class="comment reply clearfix">
                        <div class="comments-list-img">
                              <img src="assets/img/blog/b02.jpg" class="comment-img" alt="post-author">
                            </div>
                            <div class="comment-details">
                            <span class="comment-name">paschal</span>
                             <span class="comment-date">April 24, 2022</span>
                            <p>Hey, why are you the first to comment</p>
                            <a class="reply-btn" href="">Reply</a>
                            </div>
                            </div>
                            </div>
                            </li>
                        ';
  }
  echo $str;
}
 

  
 
 
