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

      <table class="border-2 border-blue-800 m-auto md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
        <caption class="font-extrabold text-2xl">Services</caption>
        <tr class="border-2 border-blue-800">
          <th class="w-1/5 border-2 border-blue-800">Service</th>
          <th class="w-1/5 border-2 border-blue-800">Description</th>
        </tr>
        <tr>
          <td class="border-2 border-blue-800 top-0">Examinations and Diagnosis</td>
          <td class="border-2 border-blue-800">Our clinic offers physical examinations and diagnosis for your pets to ensure that their health are in good shape, or identify underlying conditions making your pets sick</td>
        </tr>

        <tr>
          <td class="border-2 border-blue-800 top-0">Endoscopy</td>
          <td class="border-2 border-blue-800">Our veterinaries can perform endoscopy which envolves a fiber optic endoscope which can help identify foreign objects that is present within the pet's body and gives information whether the pet's organs are in normal state</td>
        </tr>

        <tr>
          <td class="border-2 border-blue-800 top-0">Laboratory</td>
          <td class="border-2 border-blue-800">Our clinic is equipped with needed equipments for diagnosis that needs laboratory testings such as parasite testing and urine analysis.We also do blood testings such as complete blood count that analyzes the number of blood cells, Blood chemistry which analyzes the chemicals present in the pet's blood</td>
        </tr>

        <tr>
          <td class="border-2 border-blue-800 top-0">Pharmacy</td>
          <td class="border-2 border-blue-800">Our clinic can provide medicines to your pets, you can bring prescription to us and we will take care of the rest. Our clinic can accomodate most of the medicines needed for typical diseases on pets such as antibiotics, antiparasitics, antifungals, and pain relievers.</td>
        </tr>

        <tr>
          <td class="border-2 border-blue-800 top-0">Health Certificates</td>
          <td class="border-2 border-blue-800">Our pharmacy is also capable of giving health certificates for your pets for various use.</td>
        </tr>
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
