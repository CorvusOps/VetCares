<?php
include '../includes/connectdb.php';
	if($_SESSION['client_sid']==session_id())
	{
    $user = $_SESSION['user_id'];
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Request Appointment</title>
  </head>
  <body>
    <?php include 'clientsidebar.html' ?>
    <h1 class="md:ml-16 m-auto text-4xl text-white font-bold justify-center mt-10 text-center">Set Appointment</h1>
        <div class="">
          <div class=" ml-20 mt-20 md:mt-20 md:ml-60 md:mr-4 w-full h-60">
          <form class="" action="appointmentSub.php" method="post">
              <div class="my-2">
                <label for="date" class="font-bold w-2">Date</label>
                <input type="date" name="date" placeholder="Appointment Date" class="ml-9 bg-blue-200 md:bg-blue-300 border-b-2 border-black  ">
              </div>

              <div class="my-2">
                <label for="time" class="font-bold">Time</label>
                <input type="text" name="time" placeholder="Appointment Time" class="ml-9 bg-blue-200 md:bg-blue-300 border-b-2 border-black">
              </div>

							<div class="my-2">
								<label for="contact" class="font-bold">Contact</label>
								<input type="text" name="contact" placeholder="Contact Number" class="ml-5 bg-blue-200 md:bg-blue-300 border-b-2 border-black">
							</div>

              <div class="my-2">
                <label for="pet" class="font-bold w-1/12">Pet Name</label>
                <select class=" bg-blue-200 md:bg-blue-300 border-b-2 border-black" name="pet">
                  <?php
                      $sql = "SELECT pet_recordID, petName FROM pet WHERE petUserID=$user";
                      $result = $connectdb->query($sql);
                      while($row = $result->fetch_assoc()) {
                        echo"<option value=$row[pet_recordID]>$row[petName]</option>";
                      }
                  ?>
                </select>
              </div>

              <div class="my-2">
                <label for="service" class="font-bold w-1/12">Service(s)</label>
                <select class=" bg-blue-200 md:bg-blue-300 border-b-2 border-black" name="service">
                <?php
                    $sql = "SELECT servicesID, serviceName FROM services";
                    $result = $connectdb->query($sql);
                    while($row = $result->fetch_assoc()) {
                      echo"<option value=$row[servicesID]>$row[serviceName]</option>";
                    }
                ?>
                </select>
              </div>

              <input
                    type="submit"
                    value="Request Appointment"
                    class="my-2 border-gray-600 px-3 p-2 rounded bg-white text-black shadow-md hover:bg-blue-800 hover:text-white hover:shadow-lg">
            </form>
          </div>
        </div>
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
