<?php
include '../includes/connectdb.php';
$userq = $_POST['user'];
$passq = $_POST['pass'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$level = $_POST['level'];

$sql = "DELETE FROM users WHERE username='$userq';";
$result = mysqli_query($connectdb, "SELECT * FROM users WHERE username='$userq' AND password='$passq' AND user_level='$level';");
$result = $connectdb->query($sql);

if($result){
  $result1 = $connectdb->query($sql);
  header('Location: http://localhost/clone/VetCares/src/webadmin/adminpanel.php');
}else{
  echo "failed";
  die();
}
 ?>
