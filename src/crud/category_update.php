<?php
include '../includes/connectdb.php';

$petID = $_POST['petcategoryID'];
$name = $_POST['name'];

$updatequery = " UPDATE pet_category SET 
    name='$name'
    WHERE petcategoryID=$petID";


if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Category updated successfully!'); 
    window.location = '../webstaff/pet.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Category update failed.');  
    window.location = '../webstaff/pet.php';
    </script>";  
  
}

?>
