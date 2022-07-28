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
    <link rel="icon" href="../images/templogo.png">
    <title>Edit Record Info</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">
    
    <?php
      $recordID = $_GET['recordID'];
      #$quey = 'SELECT * FROM services WHERE serviceID ='.$_GET['servicesID']';'

      $recordquery = mysqli_query($connectdb, " SELECT r.recordID, r.dateRecorded, p.petName, s.serviceName, r.prescription, r.VetDoc
                                         FROM records AS r  
                                         INNER JOIN pet AS p ON r.petID = p.pet_recordID 
                                         INNER JOIN services AS s ON r.serviceID = s.servicesID
                                         WHERE r.recordID ='$recordID';");
      while($row = mysqli_fetch_array($recordquery)){
          $dateRecorded = $row['dateRecorded'];
          $petName = $row['petName'];
          $serviceName = $row['serviceName'];
          $recordPrescription = $row['prescription'];
          $recordVetDoc = $row['VetDoc'];
        }
 
    ?>

    <form method="post" class="px-4 rounded mx-auto max-w-3xl w-full my-32 inputs space-y-6">
      <!-- HEADER -->
      <div>
        <h1 class="text-4xl font-bold">UPDATE RECORD</h1>
        <p class="text-gray-600">
          Update Record Information
        </p>
        <input type="hidden" name="recordID" value="<?php echo $recordID; ?>">
      </div>
      <div>
        <div>
          <label for="DateRecorded">Date Recorded</label>
          <input
            class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
            name="dateRecorded"
            readonly
            value="<?php echo $dateRecorded; ?>"
          />
        </div>
      </div>
      <!-- PET ID -->
      <div>
        <label for="petInfo">Pet Info: <?php echo $petName; ?></label>
        <select name="petID" id="category" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            <option value="" SELECT>--Select Pet--</option>
            <!--Fetch Category from database and Put to Dropdown-->
                <?php
                    $sql = "SELECT pet_recordID, petName FROM pet";
                    $result = $connectdb->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo"<option value=$row[pet_recordID]>$row[petName]</option>";
                    }
                ?>
        </select>
      </div>
      <!-- SERVICE ID -->
      <div>
      <label for="serviceInfo">Service Info: <?php echo $serviceName; ?></label>
        <select name="serviceID" id="category" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
            <option value="<?php echo $serviceName; ?>" select>--Select Service--</option>
            <!--Fetch Category from database and Put to Dropdown-->
                <?php
                    $sql = "SELECT servicesID, serviceName FROM services";
                    $result = $connectdb->query($sql);
                    while($row = $result->fetch_assoc()) {
                        echo"<option value=$row[servicesID]>$row[serviceName]</option>";
                    }
                ?>
        </select>
      </div>
      <!-- prescription -->
      <div>
        <label for="prescription">Prescription</label>
                <input
          class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
          name="prescription"
          value="<?php echo $recordPrescription; ?>"
        />
      </div>
      <!-- VetDoc -->
      <div>
        <label for="VetDoc">Veterinary</label>
                <input
          class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
          name="VetDoc"
          value="<?php echo $recordVetDoc; ?>"
        />
      </div>
      <button type="submit" formaction="../crud/records_update.php" name="button" class="mt-5 border-green-900 bg-blue-300 font-bold border-2 p-2 rounded-md">Update Records</button>
      <a href="records.php" name="button" class="mt-5 border-red-900 bg-blue-300 font-bold border-2 p-2 rounded-md">Cancel</a>
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
			if($_SESSION['client_sid']==session_id()){
				header("location:404.php");
			}else{
				header("location:login.php");
			}
		}
	}
?>