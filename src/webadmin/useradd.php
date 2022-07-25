<?php
include '../includes/connectdb.php';
$userq = $_POST['user'];
$passq = $_POST['pass'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$level = $_POST['level'];

$sql = "INSERT INTO users (user_firstname,user_lastname,username, password,user_level)
VALUES ('$fname','$lname','$userq', '$passq', $level);";
$result = $connectdb->query($sql);

if($result){
  header('Location: adminpanel.php');
}else{
  echo "failed";
  die();
}
 ?>
