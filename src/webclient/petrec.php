<?php
include '../includes/connectdb.php';
	if($_SESSION['client_sid']==session_id())
	{
    $user = $_SESSION['user_id'];
    $sql = "SELECT pet_recordID, petName, petAge, petCategoryID FROM pet WHERE petUserID='$user'";
    $result = $connectdb->query($sql);
    
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Pet Information</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'clientsidebar.html' ?>

  <h1 class="md:ml-16 m-auto text-4xl text-white font-bold justify-center mt-10 text-center">Pets' Information</h1>

      <table class="border-2 border-blue-800 m-auto md:mt-10 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">

        <tr class="border-2 border-blue-800">
          <th class="w-1/5 border-2 border-blue-800">Pet ID</th>
          <th class="w-1/5 border-2 border-blue-800">Pet Name</th>
          <th class="w-1/5 border-2 border-blue-800">Pet Age</th>
          <th class="w-1/5 border-2 border-blue-800">Pet Type</th>

        </tr>
        <?php  
          if ($result->num_rows > 0) {
 
            while($row = $result->fetch_assoc()) {
              echo'<tr>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["pet_recordID"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["petName"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["petAge"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["petCategoryID"].'</td>'; 
                              //put relation to display category instead than category id
            }           
              echo '</tr>';      
				  ?>
      </table>

  </body>
</html>
<?php
} else {
  echo "<center>No records found.</center>";
}
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
