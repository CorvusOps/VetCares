<?php
include '../includes/connectdb.php';
$success=false;

$name = $_POST['name'];
$email = $_POST['email'];
$contactNum = $_POST['contactNum'];
$message = $_POST['message'];

$query ="INSERT INTO inquiries (inquirerName, inquirerEmail, inquirerNumber, inquirerMessage)  VALUES('$name', '$email', '$contactNum', '$message')";

if(mysqli_query($connectdb, $query)){
    echo "<script> 
    alert('Message successfully sent!'); 
    window.location = '../../contact.php'; 
    </script>";  
    
} else{
    echo "<script>
    alert('Message failed to send.');  
    window.location = '../../contact.php';
    </script>";  
  
}

?>