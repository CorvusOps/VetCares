<?php
include '../includes/connectdb.php';

  $sub = $_SESSION['user_id'];
	if($_SESSION['client_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Client Panel</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'clientsidebar.html' ?>

  <h1 class="md:ml-16 m-auto text-4xl text-blue-900 font-bold justify-center mt-10 text-center">DASHBOARD</h1>
        <div class="ml-10 sm:ml-50 md:ml-60 float-left w-1/3 ">
          <div class="shadow-2xl h-20  sm:text-2xl text-2xl md:text-5xl w-full  bg-gradient-to-r from-blue-400 to-blue-500 border-b-0 border-blue-300 relative h-32 md:h-48  mt-12   md:pl-0  items-center md:justify-center text-white rounded">
            <p class="text-sm md:text-4xl absolute mt-0 p-2 w-10/12 md:text-3xl pl-3">Appointments Done</p>
            <br>
						<?php
						 $sub = $_SESSION['user_id'];
						 $results = mysqli_query($connectdb,"SELECT COUNT(*) FROM appointments WHERE userID ='$sub'");
						 $row = mysqli_fetch_array($results);
					 	 $total = $row[0];
						 ?>
            <p class="text-sm md:text-3xl p-4 md0 absolute"><?php echo  $total;  ?></p>
          </div>
       </div>

       <div class="md:mr-2 lg:mr-20 mr-10 float-right w-1/3">
         <div class="shadow-2xl h-20  sm:text-2xl text-2xl md:text-5xl w-full  bg-gradient-to-r from-blue-400 to-blue-500 border-b-0 border-blue-300 relative h-32 md:h-48  mt-12   md:pl-0  items-center md:justify-center text-white rounded">
           <p class="text-sm md:text-4xl absolute mt-0 p-2 w-10/12 md:text-3xl pl-3">Services Availed</p>
           <br>
				<?php
					$resultss = mysqli_query($connectdb,"SELECT COUNT(*) FROM appointments WHERE userID ='$sub' and status='complete';");
					$rows = mysqli_fetch_array($resultss);
					$totals = $rows[0];
				?>
           <p class="text-sm md:text-3xl p-4 md0 absolute"><?php echo  $totals;  ?></p>
         </div>
      </div>
 <div class="h-80">

 </div>
 <table class=" m-auto md:mt-2 md:ml-56 md:mr-4 w-9/12 border-collapse lg:ml-60">
	 <caption class="font-extrabold text-2xl">Upcoming Appointments</caption>
	 <tr class="bg-gray-100 border-b-2 border-gray-200 text-center">
		 <th class="p-2">Appointment ID</th>
		 <th class="p-2">Date</th>
		 <th class="p-2">Time</th>
		 <th class="p-2">Service Name</th>
		 <th class="p-2">Pet Name</th>
		 <th class="p-2">Status</th>
	 </tr>
	 <?php
	 $date = date("Y-m-d");
   $now = new DateTime();
   $dateQuery = mysqli_query($connectdb,"SELECT a.appointmentID,a.dates, a.time, a.servicesID, a.petID, p.pet_recordID,
   					p.petName, s.servicesID, s.serviceName, a.status, a.userID FROM appointments AS a LEFT JOIN pet AS p ON a.petID=p.pet_recordID
   					LEFT JOIN services AS s ON a.servicesID=s.servicesID WHERE userID=$sub;");

	 while($row = mysqli_fetch_array($dateQuery)) {
		 $temp1 = $row['dates'];
		 $test1 = new DateTime("$temp1");
		 if($test1>$now){
		 echo'<tr class="text-center">';
			 echo'<td class="bg-white p-1">'.$row["appointmentID"].'</td>';
			 echo'<td class="bg-white p-1">'.$row["dates"].'</td>';
			 echo'<td class="bg-white p-1">'.$row["time"].'</td>';
			 echo'<td class="bg-white p-1">'.$row["serviceName"].'</td>';
			 echo'<td class="bg-white p-1">'.$row["petName"].'</td>';
			 echo'<td class="bg-white p-1">'.$row["status"].'</td>';
			  echo '</tr>';
		 }
	 }

		?>
 </table>

 <table class="mb-10  m-auto md:mt-5 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
<?php
 	$date1 = date("Y-m-d");
	$now1 = new DateTime();
 	$dateQuery1 = mysqli_query($connectdb,"SELECT a.appointmentID,a.dates, a.time, a.servicesID, a.petID, p.pet_recordID,
	 p.petName, s.servicesID, s.serviceName, a.status, a.userID FROM appointments AS a LEFT JOIN pet AS p ON a.petID=p.pet_recordID
	 LEFT JOIN services AS s ON a.servicesID=s.servicesID WHERE userID=$sub;");
 ?>
	<caption class="font-extrabold text-2xl">Past Appointments</caption>
	<tr class="bg-gray-100 border-b-2 border-gray-200 p-2 text-center">
		<th class="p-2">Appointment ID</th>
		<th class="p-2">Date</th>
		<th class="p-2">Time</th>
		<th class="p-2">Service Name</th>
		<th class="p-2">Pet Name</th>
		<th class="p-2">Status</th>
	</tr>
	<?php
	while($row = $dateQuery1->fetch_assoc()) {
		$temp = $row['dates'];
		$test = new DateTime("$temp");
		if($test<$now1){
		echo'<tr class="text-center">';
			echo'<td class="bg-white p-1">'.$row["appointmentID"].'</td>';
			echo'<td class="bg-white p-1">'.$row["dates"].'</td>';
			echo'<td class="bg-white p-1">'.$row["time"].'</td>';
			echo'<td class="bg-white p-1">'.$row["serviceName"].'</td>';
			echo'<td class="bg-white p-1">'.$row["petName"].'</td>';
			echo'<td class="bg-white p-1">'.$row["status"].'</td>';
			echo '</tr>';
		}else{
		}
	}
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
			if($_SESSION['staff_sid']==session_id()){
				header("location:404.php");
			}else{
				header("location:login.php");
			}
		}
	}
?>
