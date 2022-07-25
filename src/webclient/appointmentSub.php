<?php
include '../includes/connectdb.php';

$date = $_POST['date'];
$time = $_POST['time'];
$contact = $_POST['contact'];
$pet = $_POST['pet'];
$service = $_POST['service'];
$email = $_SESSION['email'];
$status = "pending";
$success = "";
  $forid = "SELECT * FROM appointments ORDER BY petID DESC LIMIT 1";
  $result = $connectdb->query($forid);
  if($row=$result->fetch_assoc())
  {
    $_SESSION['petTemp'] = $row['petID'] + 1;
  }

  $forids = "SELECT * FROM appointments ORDER BY servicesID DESC LIMIT 1";
  $result1 = $connectdb->query($forids);
  if($rows=$result1->fetch_assoc())
  {
    $_SESSION['servicesTemp'] =  $row['servicesID'] + 1;
  }


if(isset($_SESSION['servicesTemp'])&& isset($_SESSION['petTemp'])){
  $petid = $_SESSION['petTemp'];
  $serviceid = $_SESSION['servicesTemp'];
  $idq = $_SESSION['user_id'];
  $sql = "INSERT INTO `appointments`( `contact`, `email`, `dates`, `status`, `time`, `petID`, `servicesID`, `userID`)
  VALUES ('$contact','$email','$date','$status','$time','$petid','$serviceid','$idq');";
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
}





 ?>
