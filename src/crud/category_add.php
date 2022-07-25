<?php
include '../includes/connectdb.php';
$success=false;

$pet_type = $_POST['pet_type'];

$query ="INSERT INTO pet_category (name)  VALUES('$pet_type')";

if(mysqli_query($connectdb, $query)){
    echo "<script> 
    alert('Message successfully sent!'); 
    window.location = '../webstaff/pet.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Message failed to send.');  
    window.location = '../webstaff/pet.php';
    </script>";  
  
}

?>