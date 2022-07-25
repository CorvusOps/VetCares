<?php
include '../includes/connectdb.php';

$servicesID = $_POST['servicesID'];
$serviceName = $_POST['serviceName'];
$serviceDesc = $_POST['serviceDesc'];
$servicePrice = $_POST['servicePrice'];

$updatequery = " UPDATE services SET 
    serviceName='$serviceName',
    serviceDesc='$serviceDesc',
    servicePrice='$servicePrice' 
    WHERE servicesID =$servicesID; ";


if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Services updated successfully!'); 
    window.location = '../webstaff/service.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Service update failed.');  
    window.location = '../webstaff/service.php';
    </script>";  
  
}

?>
