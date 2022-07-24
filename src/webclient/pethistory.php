<?php
include '../includes/connectdb.php';


	if($_SESSION['client_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Pet Records</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'clientsidebar.html' ?>

  <h1 class="md:ml-16 m-auto text-4xl text-white font-bold justify-center mt-10 text-center">Past Records</h1>

      <table class="border-2 border-blue-800 m-auto md:mt-20 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
        <caption class="font-extrabold text-2xl">Past Appointments</caption>
        <tr class="border-2 border-blue-800">
          <th class="w-1/5 border-2 border-blue-800">Pet</th>
          <th class="w-1/5 border-2 border-blue-800">Date</th>
          <th class="w-1/5 border-2 border-blue-800">Time</th>
          <th class="w-1/5 border-2 border-blue-800">Service Needed</th>
          <th class="w-1/5 border-2 border-blue-800">Pet</th>
          <th class="w-1/5 border-2 border-blue-800">Veterinary</th>
        </tr>
        <tr>
          <td class="border-2 border-blue-800">Doggy</td>
          <td class="border-2 border-blue-800">15/07/2022</td>
          <td class="border-2 border-blue-800">7:00 am</td>
          <td class="border-2 border-blue-800">Endoscopy</td>
          <td class="border-2 border-blue-800">Dog</td>
          <td class="border-2 border-blue-800">Dr. Doge</td>
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
			if($_SESSION['staff_sid']==session_id()){
				header("location:404.php");		
			}else{
				header("location:login.php");
			}
		}
	}
?>
