<?php
include '../includes/connectdb.php';

 $stat = "complete";
	if($_SESSION['staff_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
	<link rel="icon" href="../images/templogo.png">
    <title>Staff Dashboard</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'sidebar.html' ?>


        <div class="ml-10 mt-20 sm:ml-50 md:ml-60 float-left w-1/3 ">
          <div class="shadow-2xl h-20  sm:text-2xl text-2xl md:text-5xl w-full  bg-gradient-to-r from-blue-400 to-blue-500 border-b-0 border-blue-300 relative h-32 md:h-48  mt-12   md:pl-0  items-center md:justify-center text-white rounded">
            <p class="text-sm md:text-4xl absolute mt-0 top-0 p-2 w-10/12 md:text-3xl pl-3">Current Appointments</p>
            <br>
						<?php
						$result = mysqli_query($connectdb,"SELECT COUNT(*) FROM appointments WHERE NOT status ='$stat';");
						$row = mysqli_fetch_array($result);

						$total = $row[0];
						?>
            <p class="text-sm md:text-3xl top-8 p-4 md:top-20 absolute  "><?php echo  $total;  ?></p>
          </div>
       </div>

       <div class="md:mr-2 mt-20 lg:mr-20 mr-10 float-right w-1/3 mr-10">
				 <?php
				 $results = mysqli_query($connectdb,"SELECT COUNT(*) FROM appointments WHERE status ='$stat';");
				 $row1 = mysqli_fetch_array($results);

				 $totals = $row1[0];
				 ?>
         <div class="shadow-2xl h-20  sm:text-2xl text-2xl md:text-5xl w-full  bg-gradient-to-r from-blue-400 to-blue-500 border-b-0 border-blue-300 relative h-32 md:h-48  mt-12   md:pl-0  items-center md:justify-center text-white rounded">
           <p class="text-sm md:text-4xl absolute mt-0 top-0 p-2 w-10/12 md:text-3xl pl-3">Services Done</p>
           <br>
           <p class="text-sm md:text-3xl top-8 p-4 md:top-20 absolute "><?php echo $totals; ?></p>
         </div>
      </div>
 <div class="h-80">

 </div>
      <table class=" m-auto md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
     <?php
		 	$date = date("Y-m-d");
   	  $dateQuery = mysqli_query($connectdb,"SELECT a.appointmentID,a.dates, a.time, a.servicesID, a.petID, p.pet_recordID,
		 p.petName, s.servicesID, s.serviceName, a.status, a.userID FROM appointments AS a LEFT JOIN pet AS p ON a.petID=p.pet_recordID
		 LEFT JOIN services AS s ON a.servicesID=s.servicesID WHERE dates ='$date';");
		  ?>

        <caption class="font-extrabold text-2xl">Today's Appointments</caption>
        <tr class="bg-gray-100 border-b-2 border-gray-200 text-center p-2">
          <th class="w-1/5">Appointment ID</th>
          <th class="w-1/5">Date</th>
          <th class="w-1/5">Time</th>
          <th class="w-1/5">Service Name</th>
          <th class="w-1/5">Pet Name</th>

        </tr>
				<?php
				while($row = $dateQuery->fetch_assoc()) {
					echo'<tr class="text-center">';
						echo'<td class="bg-white top-0 p-1">'.$row["appointmentID"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["dates"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["time"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["serviceName"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["petName"].'</td>';

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
