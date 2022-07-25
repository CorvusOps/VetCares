<?php
include '../includes/connectdb.php';


	if($_SESSION['staff_sid']==session_id())
	{
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

  <?php include 'sidebar.html' ?>



			<table class=" m-auto md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
		 <?php
			$date = date("Y-m-d");
			$dateQuery = mysqli_query($connectdb,"SELECT * FROM appointments;");
			?>

				<caption class="font-extrabold text-2xl">Today's Appointments</caption>
				<tr class="bg-gray-100 border-b-2 border-gray-200 text-left p-2">
					<th class="w-1/5  bg-white">Appointment ID</th>
					<th class="w-1/5  bg-white">Date</th>
					<th class="w-1/5  bg-white">Time</th>
					<th class="w-1/5  bg-white">Services ID</th>
					<th class="w-1/5  bg-white">Pet ID</th>
					<th class="w-1/5  bg-white">Status</th>


				</tr>
				<?php
				while($row = $dateQuery->fetch_assoc()) {
					echo'<tr>';
						echo'<td class="bg-white top-0 p-1">'.$row["appointmentID"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["dates"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["time"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["servicesID"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["petID"].'</td>';

						if($row["status"]=="pending"){
							$val = $row["status"];
					echo '<td class="bg-white">';
					echo '<form method="POST" id="here" action="changestat.php">';
					echo '<select class="bg-white" name="stats" onchange="this.form.submit()">';
					echo '<option value='.$row["status"].'>'.$row["status"].'</option>';
					echo '<option value="approved">approved</option></a>';
					echo '<option value="complete">complete</option>';
					echo '<option value="reject">reject</option>';
					echo '</select>';
					echo '<input name="ID" class="hidden" value="'.$row["appointmentID"].'">';
						echo '</form>';
					echo '</td>';
				}else if($row["status"]=="approved"){
					$val = $row["status"];
			echo '<td class="bg-white">';
			echo '<form method="POST" id="here" action="changestat.php">';
			echo '<select class="bg-white" name="stats" onchange="this.form.submit()">';
			echo '<option value='.$row["status"].'>'.$row["status"].'</option>';
			echo '<option value="pending">pending</option></a>';
			echo '<option value="complete">complete</option>';
			echo '<option value="reject">reject</option>';
			echo '</select>';
			echo '<input name="ID" class="hidden" value="'.$row["appointmentID"].'">';
				echo '</form>';
			echo '</td>';
		}else if($row["status"]=="complete"){
			$val = $row["status"];
	echo '<td class="bg-white">';
	echo '<form method="POST" id="here" action="changestat.php">';
	echo '<select class="bg-white" name="stats" onchange="this.form.submit()">';
	echo '<option value='.$row["status"].'>'.$row["status"].'</option>';
	echo '<option value="pending">pending</option></a>';
	echo '<option value="approved">approved</option>';
	echo '<option value="reject">reject</option>';
	echo '</select>';
	echo '<input name="ID" class="hidden" value="'.$row["appointmentID"].'">';
		echo '</form>';
	echo '</td>';
}else if($row["status"]=="reject"){
	$val = $row["status"];
echo '<td class="bg-white">';
echo '<form method="POST" id="here" action="changestat.php">';
echo '<select class="bg-white" name="stats" onchange="this.form.submit()">';
echo '<option value='.$row["status"].'>'.$row["status"].'</option>';
echo '<option value="pending">pending</option></a>';
echo '<option value="approved">approved</option>';
echo '<option value="complete">complete</option>';
echo '</select>';
echo '<input name="ID" class="hidden" value="'.$row["appointmentID"].'">';
echo '</form>';
echo '</td>';
}


				}
					echo '</tr>';
				 ?>
			</table>

  </body>
</html>
<?php
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
<?php

  if(isset($_POST["stats"]) && !empty($_POST["stats"])){
      $ID = $_POST['stats'];
      #idk but trigger modal to

      $query = "INSERT INTO appointments(status)
  VALUES ('$ID')";

      if(mysqli_query($connectdb, $query)){
          echo "<script>
          alert('Status successfully changed!');
          window.location = '../webstaff/appointments.php';
          </script>";

      } else{
          echo "<script>
          alert('Failed to commit changes');
          window.location = '../webstaff/appointments.php';
          </script>";
      }

  }


 ?>
