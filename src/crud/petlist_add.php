<?php
include '../includes/connectdb.php';
$petName = $_POST['pet_name'];
$petAge = $_POST['pet_age'];
$category = $_POST['category'];
$owner = $_POST['owner'];

if(!empty($_POST['category'] && $_POST['owner'])){

  $sql = "INSERT INTO pet (petName, petAge, petCategoryID, petUserID)
  VALUES ('$petName','$petAge','$category', '$owner');";
  $result = $connectdb->query($sql);
  
  if($result){
    echo "<script> 
        alert('Successfully Added!'); 
        window.location = '../webstaff/petLists.php'; 
        </script>";  
  }else{
    echo "<script> 
        alert('Failed to Add!'); 
        window.location = '../webstaff/petLists.php'; 
        </script>";  
  }
} else {
  echo "<script> 
        alert('Select a Value.'); 
        window.location = '../webstaff/petLists.php'; 
        </script>";  
}

 ?>
