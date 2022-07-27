<?php
include '../includes/connectdb.php';

$date = $_POST['date'];
$time = $_POST['time'];
$contact = $_POST['contact'];
$pet = $_POST['pet'];
$service = $_POST['service'];
$email = $_SESSION['email'];
$user = $_SESSION['user_id'];
$status = "pending";
$success = "";
  
  $sql = "INSERT INTO `appointments`( `contact`, `email`, `dates`, `status`, `time`, `petID`, `servicesID`, `userID`)
  VALUES ('$contact','$email','$date','$status','$time','$pet','$service','$user');";

    if($results = $connectdb->query($sql)){
      echo "<script>
      alert('Appointment Requested Successfully');
      window.location = '../webclient/requestapp.php';
      </script>";
    }else{
      echo "<script>
      alert('$mysqli->error');
      window.location = '../webclient/requestapp.php';
      </script>";
    }






 ?>
