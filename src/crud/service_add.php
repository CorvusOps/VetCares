<?php
include '../includes/connectdb.php';

$services = $_POST['services'];
$description = $_POST['description'];
$price = $_POST['price'];

$servicequery = "INSERT INTO services (serviceName,serviceDesc,servicePrice)
VALUES ('$services','$description','$price');";

if(mysqli_query($connectdb, $servicequery)){
  echo "<script> 
  alert('Category successfully added!'); 
  window.location = '../webstaff/service.php'; 
  </script>";  
  
} else{
  echo "<script>
  alert('Failed to add.');  
  window.location = '../webstaff/service.php';
  </script>";  

}
 ?>
