<?php
include '../includes/connectdb.php';

$petID = $_POST['pet_recordID'];
$name = $_POST['petName'];
$age = $_POST['petAge'];
$category = $_POST['petCategoryID'];
$owner = $_POST['petUserID'];

$updatequery = " UPDATE pet SET 
    petName='$name',
    petAge='$age',
    petCategoryID='$category',
    petUserID='$owner' 
    WHERE pet_recordID =$petID; ";


if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Pet updated successfully!'); 
    window.location = '../webstaff/petLists.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Service update failed.');  
    window.location = '../webstaff/petLists.php';
    </script>";  
  
}

?>
