<?php
include '../includes/connectdb.php';
$services = $_POST['services'];
$description = $_POST['description'];
$price = $_POST['price'];


$sql = "INSERT INTO services (serviceName,serviceDesc,servicePrice)
VALUES ('$services','$description','$price');";
$result = $connectdb->query($sql);

if($result){
  header('Location: ../webstaff/service.php');
}else{
  echo "failed";
  die();
}
 ?>
