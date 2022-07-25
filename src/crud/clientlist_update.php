<?php
include '../includes/connectdb.php';

$userID = $_POST['userID'];
$user_firstname = $_POST['user_firstname'];
$user_lastname = $_POST['user_lastname'];
$contact_num = $_POST['contact_num'];
$email = $_POST['email'];
$address = $_POST['address'];


$updatequery = " UPDATE users SET 
    user_firstname = '$user_firstname',
    user_lastname = '$user_lastname',
    contact_num = '$contact_num',
    email = '$email',
    address='$address'
    WHERE userID =$userID; ";


if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Client Info updated successfully!'); 
    window.location = '../webstaff/client_records.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Client Info update failed.');  
    window.location = '../webstaff/client_records.php';
    </script>";  
  
}

?>
