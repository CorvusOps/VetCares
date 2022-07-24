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
      <h1 class="m-auto text-4xl font-extrabold justify-center mt-5 text-center">Records</h1>
      <div class="">
        <div class=" ml-20 mt-20 md:mt-20 md:ml-60 md:mr-4 w-full h-60">
          <form class="" action="index.html" method="post">
            <label for="patient" class="font-bold w-2">Patient ID</label>
            <input type="text" name="patient" placeholder="Patient ex.(Pt1)" class="bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

            <br><label for="date" class="font-bold">Date</label>
            <input type="text" name="date" placeholder="Date" class="ml-10 bg-blue-200 md:bg-blue-300 border-b-2 border-black"><br>

            <label for="time" class="font-bold w-1/12">Time</label>
            <input type="text" name="time" placeholder="Time" class="ml-10 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

            <br><label for="service" class="font-bold w-1/12">Service</label>
            <input type="text" name="service" placeholder="Services Done" class="ml-5 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

            <br><label for="pet" class="font-bold w-1/12">Pet</label>
            <input type="text" name="pet" placeholder="Pet Category" class="ml-12 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

            <br><label for="vet" class="font-bold w-1/12">Vet</label>
            <input type="text" name="vet" placeholder="Veterinary's Name" class="ml-12 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">

            <br><button type="submit" name="button" class="mt-5 border-black border-2 p-2 rounded-md">Add Record</button>
            <button type="submit" name="button" class="mt-5 border-black border-2 p-2 rounded-md">Update Record</button>
            <button type="submit" name="button" class="mt-5 border-black border-2 p-2 rounded-md">Delete Record</button>
          </form>
        </div>
      </div>

      <table class="border-2 border-blue-800 mt-20 md:mt-24 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60 ">
        <tr class="border-2 border-blue-800">
          <th class="w-1/12 border-2 border-blue-800">Patient</th>
          <th class="w-1/12 border-2 border-blue-800">Date</th>
          <th class="w-1/12 border-2 border-blue-800">Time</th>
          <th class="w-1/12 border-2 border-blue-800">Service Done</th>
          <th class="w-1/12 border-2 border-blue-800">Pet</th>
          <th class="w-1/12 border-2 border-blue-800">Veterinary</th>
          <th class="w-1/12 border-2 border-blue-800">Status</th>
        </tr>
        <tr>
          <td class="border-2 border-blue-800">Pt1</td>
          <td class="border-2 border-blue-800">15/07/2022</td>
          <td class="border-2 border-blue-800">7:00 am</td>
          <td class="border-2 border-blue-800">Endoscopy</td>
          <td class="border-2 border-blue-800">Dog</td>
          <td class="border-2 border-blue-800">Dr.Doge</td>
          <td class="border-2 border-blue-800">
              <select class="border-blue-800 bg-blue-200 md:bg-blue-300">
                <option value="pending">Pending</option>
                <option value="accepted">Approved</option>
                <option value="successful">Complete</option>
                  <option value="successful">Reject</option>
               </select>
          </td>
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
