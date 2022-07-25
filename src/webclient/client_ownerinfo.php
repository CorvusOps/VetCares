<?php
include '../includes/connectdb.php';
	if($_SESSION['client_sid']==session_id())
	{
    $user = $_SESSION['user_id'];
    $sql = "SELECT user_firstname, user_lastname, contact_num, email, address FROM users WHERE userID='$user'";
    $result = $connectdb->query($sql);
    
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Personal Information</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'clientsidebar.html' ?>

  <h1 class="m-auto text-4xl md:ml-16 text-white font-bold justify-center mt-10 text-center">Personal Information</h1>

      <table class="border-2 border-blue-800 m-auto md:mt-10 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">

        <tr class="border-2 border-blue-800">
          <th class="w-1/5 border-2 border-blue-800">Name</th>
          <th class="w-1/5 border-2 border-blue-800">Address</th>
          <th class="w-1/5 border-2 border-blue-800">Phone Number</th>
          <th class="w-1/5 border-2 border-blue-800">Email</th>
        </tr>
        <?php  
        if ($result->num_rows > 0) {
 
            while($row = $result->fetch_assoc()) {
              echo'<tr>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["user_firstname"].'&nbsp'.$row["user_lastname"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["contact_num"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["email"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["address"].'</td>';
            }           
              echo '</tr>';      
					?>
      </table>

  </body>
</html>
<?php
} else {
  echo "<center>No records found.</center>";
}
	}else
	{
		if($_SESSION['admin_sid']==session_id()){
			header("location:404.php");
		}
		else{
			if($_SESSION['client_sid']==session_id()){
				header("location:404.php");
			}else{
				header("location:login.php");
			}
		}
	}
?>

