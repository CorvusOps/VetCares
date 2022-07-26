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

    <div class="grid place-items-center pt-5">
        <h1 class="font-extrabold text-3xl text-center  text-blue-900">RECORDS</h1>
    </div>

    <div class="grid md:place-items-start place-items-center md:ml-60 py-3">
      <button class=" block text-black hover:text-white bg-white hover:bg-gray-700 font-medium rounded-lg text-base p-2 text-center " type="button" data-modal-toggle="new-category">
              Add New Record
      </button>
    </div>

    <?php include 'modal_addrecord.php' ?>

      <table class="m-5 md:mt-2 md:ml-56 md:mr-4 md:w-9/12 text-left border-collapse lg:ml-60 shadow-lg ">
				<?php

				 $Query = mysqli_query($connectdb,"SELECT * FROM records;");
				 ?>
         <thead class=" bg-gray-100 border-b-2 border-gray-200 text-center p-2">
          <tr class="">
            <th class="p-2">Record ID</th>
            <th class="p-2">Date Recorded</th>
            <th class="p-2">Pet ID</th>
            <th class="p-2">Services ID</th>
            <th class="p-2">Prescription</th>
            <th class="p-2">Veterinary</th>
            <th class="p-2">Action</th>
          </tr>
        </head>
				<?php
				while($row = $Query->fetch_assoc()) {
					echo'<tr>';
						echo'<td class="bg-white top-0 p-1">'.$row["recordID"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["dateRecorded"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["petID"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["serviceID"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["prescription"].'</td>';
						echo'<td class="bg-white top-0 p-1">'.$row["VetDoc"].'</td>';
            echo'<td class="bg-white top-0 p-2">';
            echo '<a href="../crud/records_delete.php?recordID='.$row['recordID'].'">
                <ion-icon name="trash-outline"></ion-icon></a>';
            echo '</td>';


				}
					echo '</tr>';
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
