<?php
include '../includes/connectdb.php';
if($_SESSION['staff_sid']==session_id())
{
    $user = $_SESSION['user_id'];
    $sql = "SELECT p.pet_recordID, p.petName, p.petAge, p.petCategoryID, c.petCategoryID, c.name 
            FROM pet AS p LEFT JOIN pet_category AS c ON p.petCategoryID=c.petCategoryID";
    $result = $connectdb->query($sql);
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Pet List</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'sidebar.html' ?>

    <div class="grid place-items-center pt-5">
       <h1 class="font-extrabold text-3xl text-center text-blue-900">PETS</h1>
    </div>

      <table class="m-auto md:mt-10 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60 shadow-lg">
        <thead class=" bg-gray-100 border-b-2 border-gray-200 text-center p-2">
          <tr class="">
            <th class="w-1/5 p-2">Pet ID</th>
            <th class="w-1/5 p-2">Pet Name</th>
            <th class="w-1/5 p-2">Pet Age</th>
            <th class="w-1/5 p-2">Pet Type</th>
            <th class="w-1/5 p-2">Action</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <?php  
            if ($result->num_rows > 0) {
  
              while($row = $result->fetch_assoc()) {
                echo'<tr>';
                  echo'<td class="bg-white top-0 p-1">'.$row["pet_recordID"].'</td>';
                  echo'<td class="bg-white top-0 p-1">'.$row["petName"].'</td>';
                  echo'<td class="bg-white top-0 p-1">'.$row["petAge"].'</td>';
                  echo'<td class="bg-white top-0 p-1">'.$row["name"].'</td>'; 
                  echo   '<td class="bg-white top-0 p-2">';
                  echo '<a href="../crud/petlist_edit.php?id='.$row["pet_recordID"].'">
                    <ion-icon name="create-outline"></ion-icon> </a>';
                  echo '<a href="../crud/petlist_delete.php?pet_recordID='.$row['pet_recordID'].'">
                    <ion-icon name="trash-outline"></ion-icon></a>';
                  echo'</td>';
                          
              }           
                echo '</tr>';      
            ?>
          </tbody>
        </table>

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      
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
