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
        <h1 class="font-extrabold text-3xl text-center text-black">Pet Category</h1>
    </div>


      <div class="grid md:place-items-start place-items-center md:ml-60 py-3">
        <button class=" block text-black hover:text-white bg-white hover:bg-gray-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-base p-2 text-center " type="button" data-modal-toggle="new-category">
                Add New Service
        </button>
      </div>
  <?php include 'modal_addservice.php' ?>


      <table class="border-2 border-blue-800 m-auto md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
        <thead>
          <tr class="border-2 border-blue-800">
            <th class=" w-3/12 border-2 border-blue-800">Service</th>
            <th class=" w-4/12 border-2 border-blue-800">Description</th>
            <th class=" w-2/12 border-2 border-blue-800">Price</th>
            <th class=" w-2/12 border-2 border-blue-800">Action</th>
          </tr>
        <thead>
        <!---
        <tr>
          <td class="border-2 border-blue-800 top-0">Examinations and Diagnosis</td>
          <td class="border-2 border-blue-800">Our clinic offers physical examinations and diagnosis for your pets to ensure that their health are in good shape, or identify underlying conditions making your pets sick</td>
        </tr>
        --->
        <tbody>
          <?php
          $servicequery = mysqli_query($connectdb, "SELECT * FROM services");
          while($row = mysqli_fetch_array($servicequery)){
            
            echo '<tr>';
              echo   '<td class="border-2 border-blue-800 top-0">'.$row["serviceName"].'</td>';
              echo   '<td class="border-2 border-blue-800">'.$row["serviceDesc"].'</td>';
              echo   '<td class="border-2 border-blue-800">'.$row["servicePrice"].'</td>';
              echo   '<td class="border-2 border-blue-800">';
                echo '<a href="../crud/service_edit.php?id='.$row["servicesID"].'">Edit </a>';
                echo '<a href="../crud/service_delete.php?servicesID='.$row['servicesID'].'">Delete </a>';
              echo '</td>';      
            echo '</tr>';

          }
          ?>
          </tbody>

      </table>

     <!--JAVASCRIPT FILES-->
     <script src="src/javascript/script.js"></script>
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
