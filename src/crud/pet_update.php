<?php
include '../includes/connectdb.php';

$petID = $_POST['pet_recordID'];
$name = $_POST['petName'];
$age = $_POST['petAge'];
$category = $_POST['petCategoryID'];

$updatequery = " UPDATE pet SET 
    petName='$name',
    petAge='$age',
    petCategoryID='$category'
    WHERE pet_recordID =$petID; ";


if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Pet updated successfully!'); 
    window.location = '../webclient/petrec.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Service update failed.');  
    window.location = '../webclient/petrec.php';
    </script>";  
  
}

?>
