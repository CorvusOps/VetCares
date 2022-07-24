<?php
include '../includes/connectdb.php';
	if($_SESSION['admin_sid']==session_id())
	{


		$sql = "SELECT username, password, user_level FROM users";
$result = $connectdb->query($sql);

if ($result->num_rows > 0) {
  // output data of each row



		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'adminsidebar.html' ?>
			<?php  ?>
      <table class="border-2 border-blue-800 m-auto md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
        <caption class="font-extrabold text-2xl">Current Users</caption>
        <tr class="border-2 border-blue-800">
          <th class="w-1/5 border-2 border-blue-800">User</th>
          <th class="w-1/5 border-2 border-blue-800">Password</th>
					  <th class="w-1/5 border-2 border-blue-800">Account Level</th>
        </tr>

					<?php   while($row = $result->fetch_assoc()) {
								echo'<tr>';
							echo'<td class="border-2 border-blue-800 top-0">'.$row["username"].'</td>';
						echo'<td class="border-2 border-blue-800 top-0">'.$row["password"].'</td>';
						echo'<td class="border-2 border-blue-800 top-0">'.$row["user_level"].'</td>';
}            echo '</tr>';      
							?>

      </table>
  </body>
</html>
<?php

} else {
  echo "0 results";
}
	}else
	{
		if($_SESSION['staff_sid']==session_id()){
			header("location:404.php");
		}
		else{
			if($_SESSION['customer_sid']==session_id()){
				header("location:404.php");
			}else{
				header("location:login.php");
			}
		}
	}
?>
