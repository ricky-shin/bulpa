<?php
    include 'config.php';

if($conn === false){
  die("Connection failed: " . mysqli_connect_error());
}


$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$course = mysqli_real_escape_string($conn, $_REQUEST['course']);
$department = mysqli_real_escape_string($conn, $_REQUEST['department']);
$review = mysqli_real_escape_string($conn, $_REQUEST['review']);
$submit_ip = mysqli_real_escape_string($conn, $_REQUEST['submit_ip']);
$isApproved = '0';
$response = $_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
  'secret' => $secretKey,
  'response' => $_POST["g-recaptcha-response"]
);
$options = array(
  'http' => array (
    'method' => 'POST',
    'content' => http_build_query($data)
  )
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);
if ($captcha_success->success==false) {
  echo '<script>window.location.href = "failed.php";</script>';
} 
  else if ($captcha_success->success==true) {

// Attempt insert query execution
$sql = "INSERT INTO reviews (fname, lname, course, department, review, isApproved, submit_ip) VALUES ('$fname', '$lname', '$course', '$department', '$review', '$isApproved', '$submit_ip')";
if(mysqli_query($conn, $sql)){
  // redirect to submitted page
  echo '<script>window.location.href = "submitted.php";</script>';
      } else{
  echo "Uh Oh, Ran into an Error: $sql. " . mysqli_error($conn);
      }
}

// Close connection
mysqli_close($conn);
?>