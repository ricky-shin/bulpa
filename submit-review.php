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
$isApproved = '0';

// Attempt insert query execution
$sql = "INSERT INTO reviews (fname, lname, course, department, review, isApproved) VALUES ('$fname', '$lname', '$course', '$department', '$review', '$isApproved')";
if(mysqli_query($conn, $sql)){
  // redirect to submitted page
  echo '<script>window.location.href = "submitted.php";</script>';
} else{
  echo "Uh Oh, Ran into an Error: $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>