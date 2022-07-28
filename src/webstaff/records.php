<?php
include '../includes/connectdb.php';


	if($_SESSION['staff_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../public/styles.css">
    <link rel="icon" href="../images/templogo.png">
    <title>Records</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'sidebar.html' ?>

    <div class="grid place-items-center pt-5">
        <h1 class="font-extrabold text-3xl text-center  text-blue-900">RECORDS</h1>
    </div>

    <div class="grid md:place-items-start place-items-center md:ml-60 py-3">
      <button class=" block text-black hover:text-white bg-white hover:bg-gray-700 font-medium rounded-lg text-base p-2 text-center " type="button" data-modal-toggle="new-category">
              Add New Record
      </button>
    </div>

    <?php include 'modal_addrecord.php' ?>

    <!--Search Bar-->
    <div class="grid place-content-end my-2 md:my-0 md:mr-28">
        <form class="flex items-center" action="" method="GET">
          <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="bg-gray-50 text-gray-900 border-2 border-white text-sm block w-52 p-1" placeholder="Search record" required>
          <button type="submit" class="block text-black hover:text-white bg-slate-400 hover:bg-gray-700 font-medium text-base p-1 w-10 text-center" type="button">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </form>
    </div>

      <table class="m-5 md:mt-2 md:ml-56 md:mr-4 md:w-9/12 text-left border-collapse lg:ml-60 shadow-lg ">
				<?php
        
				 $Query = mysqli_query($connectdb,"SELECT recordID, dateRecorded, r.petID, a.pet_recordID, a.petName, r.serviceID, s.servicesID, s.serviceName, prescription, VetDoc
                                 FROM records AS r LEFT JOIN pet AS a ON r.petID=a.pet_recordID
                                 LEFT JOIN services AS s ON r.serviceID=s.servicesID ORDER BY dateRecorded DESC;");

          if(isset($_GET['search'])){
            $filtervalues = $_GET['search'];
            $Query = mysqli_query($connectdb,"SELECT recordID, dateRecorded, r.petID, a.pet_recordID, a.petName, r.serviceID, s.servicesID, s.serviceName, prescription, VetDoc
                                 FROM records AS r LEFT JOIN pet AS a ON r.petID=a.pet_recordID
                                 LEFT JOIN services AS s ON r.serviceID=s.servicesID WHERE a.petName LIKE '%$filtervalues%' ORDER BY dateRecorded DESC;");
          }
				 ?>
         <thead class=" bg-gray-100 border-b-2 border-gray-200 text-center p-2">
          <tr class="">
            <th class="p-2">Record ID</th>
            <th class="p-2">Date Recorded</th>
            <th class="p-2">Pet ID</th>
            <th class="p-2">Pet Name</th>
            <th class="p-2">Service ID</th>
            <th class="p-2">Service Name</th>
            <th class="p-2">Prescription</th>
            <th class="p-2">Veterinary</th>
            <th class="p-2">Action</th>
          </tr>
        </head>
				<?php
        if($Query->num_rows > 0){
				while($row = $Query->fetch_assoc()) {
					echo'<tr>';
						echo'<td class="bg-white top-0 p-1">'.$row["recordID"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["dateRecorded"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["petID"].'</td>';
            echo'<td class="bg-white top-0 p-1">'.$row["petName"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["serviceID"].'</td>';
            echo'<td class="bg-white top-0 p-1">'.$row["serviceName"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["prescription"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["VetDoc"].'</td>';
            echo'<td class="bg-white top-0 p-2">';
            echo '<a href="records_editpage.php?recordID='.$row['recordID'].'">
                <ion-icon name="create-outline"></ion-icon></a>';
            echo '<a href="../crud/records_delete.php?recordID='.$row['recordID'].'">
                <ion-icon name="trash-outline"></ion-icon></a>';
            echo '</td>';

				}
					echo '</tr>';
        } else{
          echo'<tr>';
          echo'<td colspan="9" class="bg-white top-0 p-1">No Record Found.</td>';
          echo'<tr>';
       }
				 ?>
         
      </table>
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
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
