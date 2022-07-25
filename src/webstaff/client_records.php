<?php
include '../includes/connectdb.php';
	if($_SESSION['staff_sid']==session_id())
	{
    $sql = "SELECT user_firstname, user_lastname, contact_num, email, address, date_added FROM users WHERE user_level='2'";
    $result = $connectdb->query($sql);

    if ($result->num_rows > 0) {
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Client Records</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'sidebar.html' ?>

      <table class="border-2 border-blue-800 m-auto md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
        <caption class="font-extrabold text-2xl">Clients</caption>
        <thead>
          <tr class="border-2 border-blue-800">
            <th class="w-1/5 border-2 border-blue-800">Name</th>
            <th class="w-1/5 border-2 border-blue-800">Contact Number</th>
            <th class="w-1/5 border-2 border-blue-800">Email</th>
            <th class="w-1/5 border-2 border-blue-800">Address</th>
            <th class="w-1/5 border-2 border-blue-800">Date Added</th>
          </tr>
        </thead>

        <tbody>
          <?php   
            while($row = $result->fetch_assoc()) {
              echo'<tr>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["user_firstname"].'&nbsp;'.$row["user_lastname"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["contact_num"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["email"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["address"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["date_added"].'</td>';
  }           echo '</tr>';      
					?>

        </tbody>
      </table>
  </body>
</html>
<?php
} else {
  echo "No records found.";
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
