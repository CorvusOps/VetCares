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
    <link rel="icon" href="../images/templogo.png">
    <title>Request Appointment</title>
  </head>
  <body>
    <?php include 'clientsidebar.html' ?>
   
    <form class="px-4 rounded mx-auto max-w-3xl w-full my-32 inputs space-y-6" action="appointmentSub.php" method="post">
      <div>
				<h1 class="text-4xl font-bold">Request Appointment</h1>
			</div>          
        <div class="flex space-x-4">
          <div class="w-1/2">
                <label for="time" class="font-bold">Time</label>
                <input type="text" name="time" placeholder="Appointment Time" 
                class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400">
          </div>
				  <div class="w-1/2">
                <label for="date" class="font-bold w-2">Date</label>
                <input type="date" name="date" placeholder="Appointment Date" 
                class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400">
          </div>
        </div>
        <div class="flex space-x-4">
          <div class="w-1/2">
								<label for="contact" class="font-bold">Contact</label>
								<input type="text" name="contact" placeholder="Contact Number" 
                class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400">
					</div>
          <div class="w-1/2">
                <label for="pet" class="font-bold w-1/12">Pet Name</label>
                <select class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400
                name="pet">
                <option value="">--Select Pet--</option>
                  <?php
                      $sql = "SELECT pet_recordID, petName FROM pet WHERE petUserID=$user";
                      $result = $connectdb->query($sql);
                      while($row = $result->fetch_assoc()) {
                        echo"<option value=$row[pet_recordID]>$row[petName]</option>";
                      }
                  ?>
                </select>
              </div>
        </div>
        <div>
          <label for="service" class="font-bold w-1/12">Service(s)</label>
          <select class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400
          name="service">
          <option value="">--Select Service--</option>
          <?php
              $sql = "SELECT servicesID, serviceName FROM services";
              $result = $connectdb->query($sql);
              while($row = $result->fetch_assoc()) {
                echo"<option value=$row[servicesID]>$row[serviceName]</option>";
              }
          ?>
          </select>
        </div>

              
              <button type="submit" name="button1" class="mt-5 border-green-700 border-2 p-2 rounded-md">Set Appointment</button>
              <button type="reset" name="button2" class="mt-5 border-gray-700 border-2 p-2 rounded-md">Clear</button>
            
    </form>
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
