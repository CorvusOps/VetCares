<?php
include '../includes/connectdb.php';

$userID = $_POST['userID'];
$userq = $_POST['user'];
$passq = $_POST['pass'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$level = $_POST['level'];
$contactnum = $_POST['contactNum'];
$email = $_POST['email'];
$address = $_POST['address'];


$updatequery = " UPDATE users SET 
    user_firstname='$fname',
    user_lastname='$lname',
    username='$userq', 
    password='$passq',
    user_level=$level,
    contact_num='$contactnum',
    email='$email',
    address='$address'
    WHERE userID =$userID; ";


if(mysqli_query($connectdb, $updatequery)){
    echo "<script> 
    alert('Services updated successfully!'); 
    window.location = '../webadmin/userlist.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Service update failed.');  
    window.location = '../webadmin/adminpanel.php';
    </script>";  
  
}

?>
