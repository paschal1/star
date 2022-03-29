<?php
//$mysqli = new mysqli("localhost","eseltwgh_dstarite","paschal@081","eseltwgh_dstarite") or die(mysqli_error($mysqli));
// error_reporting(0);
$mysqli = new mysqli("localhost","root","","d_starite") or die(mysqli_error($mysqli));
$error = [];
include('posts/posts.php');

function getIPAddress(){
    //wether ip is from the share internet 
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }
    //Wether ip is from the proxy 
    elseif(!empty($_SERVER['HTTP_XFORWARDED_FOR'])){
        $ip = $_SERVER['HTTP_XFORWARDED_FOR'];
    }
    //wether ip is from the remote address
    else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip = getIPAddress();
if($ip){
  $query = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
  if($query){
    $country= $query['geoplugin_countryName'];
    $country2= $query['geoplugin_regionName'];
    $country3= $query['geoplugin_countryCode'];
    $country4= $query['geoplugin_latitude'];
    $country5= $query['geoplugin_longitude'];
    echo $country;
    echo "/n";
    echo $country2;
    echo $country3;
    echo $country4;
    echo $country5;
  }
}

//include('http://www.geoplugin.net/php.gp?ip=192.168.43.73:33455');
//echo var_export(unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR'])));

echo 'user real ip-'.$ip;
include('http://ipwhois.app/json/'.$ip);
$ch = curl_init('http://ipwhois.app/json/'.$ip);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
curl_close($ch);

//decode json response 
$ipwhois_result = json_decode($json, true);

//country code output 

//echo $ipwhois_result['region'];

if(isset($_POST['submit'])){
    $post_id = $id;
     $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['website'];
    $message = $_POST['body'];
    $sql = mysqli_query($mysqli, "SELECT * FROM comments WHERE email = '$email'");
    $row = mysqli_fetch_array($sql);
    if(empty($name) && (empty($email) && (empty($subject) && (empty($message))))){
       // array_push($error, "Please fill in blank fields");
     }
    elseif (empty($name)){
        array_push($error, "please fill your name");
    }elseif(mysqli_num_rows($sql) != 0){
        array_push($error, "email already exist");
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($error, "email is invalid");
    }
     if(empty($error)){
  // echo"arrived";
        $name = ($name);
        $email = ($email);
        $status = 'Approved';
   
        $query = "INSERT INTO comments (post_id, name, email, website, body, status) 
                VALUES ('$post_id', '$name','$email','$subject','$message', '$status')";

        $result = mysqli_query($mysqli,$query);
        
        //$query = mysqli_query($mysqli, "INSERT INTO contact_us VALUES('$name','$email','$subject','$message');");
        if($result){
       echo "success";
      unset($_POST['submit']);
         header("location: ../index.php");
    }else{
      echo "mba";
    }
    
    } 
}

// echo 'User IP Address-'.$_SERVER['REMOTE_ADDR'];?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>dStarite Technology Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" width="200">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
<!-- map cdn -->
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel="stylesheet">
  <!-- // ajax script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script> 
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9102079570959654"
     crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
   * Template Name: D-Starite - v4.3.0
  * Template URL: https://dstarite.com/D-Starite-tech-business-template/
  * Author: dstarite.com
  * License: https://dstarite.com/license/
  ======================================================== -->
</head>

<body>
</body>
</html>
<script>
var ip = ''; // Current IP

// Sending an API request using jQuery.ajax
$.ajax({
	method: 'GET',
	contentType: 'application/json',
	url: 'https://ipwhois.app/json/' + ip,
	dataType: 'json',
	success: function(json) {
	    // Country code output, field "country_code"
	    alert(json.country_code);
          alert(json.country);
            alert(json.country_capital);
              alert(json.region);
                alert(json.city);
	}
});
</script>

<?php
$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']) );
 
if ( $geoPlugin_array['geoplugin_currencyCode'] == 'USD' ) { //let's use a different base currency
 
	$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR'] . '&base_currency=EUR') );
 
	echo '<h3>A &#8364;800 television from Germany will cost you '.$geoPlugin_array['geoplugin_currencySymbol'] . round( (800 * $geoPlugin_array['geoplugin_currencyConverter']),0) . '</h3>';
 
} else {
 
	echo '<h3>A $800 television from the US will cost you ' . $geoPlugin_array['geoplugin_currencySymbol'] . round( (800 * $geoPlugin_array['geoplugin_currencyConverter']),0) . '</h3>';
 
}
?>