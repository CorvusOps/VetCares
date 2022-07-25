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

    <div class="grid place-items-center md:ml-56 pt-5">
       <h1 class="font-extrabold text-3xl text-center text-blue-900">PERSONAL INFORMATION</h1>
    </div>

    <div class="grid place-items-center">
      <table class="m-auto md:mt-10 md:ml-56 md:mr-4 w-9/12 md:w-1/3 text-left border-collapse lg:ml-60 shadow-lg">

        <tbody class="text-left">
          <?php
          if ($result->num_rows > 0) {

              while($row = $result->fetch_assoc()) {
                echo'<tr>';
                echo '<th class="p-2 bg-white top-0">Name</th>';
                echo'<td class="bg-white top-0 p-1">'.$row["user_firstname"].'&nbsp'.$row["user_lastname"].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo '<th class="p-2 bg-white top-0">Address</th>';
                echo'<td class="bg-white top-0 p-1">'.$row["address"].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo '<th class="p-2 bg-white top-0">Phone Number</th>';
                echo'<td class="bg-white top-0 p-1">'.$row["contact_num"].'</td>';
                echo'</tr>';
                echo'<tr>';
                echo '<th class="p-2 bg-white top-0">Email</th>';
                echo'<td class="bg-white top-0 p-1">'.$row["email"].'</td>';
              }
                echo '</tr>';
            ?>
        </tbody>
      </table>
    </div>

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
