<?php
include '../includes/connectdb.php';

$pet_recordID = $_POST['pet_name'];
$serviceID = $_POST['services'];
$prescription = $_POST['prescription'];
$veterinarian = $_POST['veterinarian'];

$query ="INSERT INTO records (petID, serviceID, prescription, VetDoc) 
        VALUES('$pet_recordID', '$serviceID', '$prescription', '$veterinarian');";
$result = $connectdb->query($query);

if($result){
    echo "<script> 
    alert('Record successfully added!'); 
    window.location = '../webstaff/records.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Failed to add.');  
    window.location = '../webstaff/records.php';
    </script>";  
  
}

?>