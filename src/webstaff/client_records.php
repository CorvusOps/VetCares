<?php
include '../includes/connectdb.php';
	if($_SESSION['staff_sid']==session_id())
	{
    $sql = "SELECT userID, user_firstname, user_lastname, contact_num, email, address, date_added FROM users WHERE user_level='2'";
    $result = $connectdb->query($sql);

    if ($result->num_rows > 0) {
		?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/styles.css">
    <meta charset="utf-8">
    <title>Client Records</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">

  <?php include 'sidebar.html' ?>

    <div class="grid place-items-center pt-5">
        <h1 class="font-extrabold text-3xl text-center text-blue-900">CLIENTS</h1>
      </div>

      <table class="m-auto md:mt-10 md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60 shadow-lg">
        <thead class=" bg-gray-100 border-b-2 border-gray-200 text-center p-2">
          <tr class="">
            <th class="p-2">ID</th>
            <th class="p-2">Name</th>
            <th class="p-2">Contact Number</th>
            <th class="p-2">Email</th>
            <th class="p-2">Address</th>
            <th class="p-2">Date Added</th>
            <th class="p-2">Action</th>
          </tr>
        </thead>

        <tbody class="text-center">
          <?php   
            while($row = $result->fetch_assoc()) {
              echo'<tr>';
                echo'<td class=bg-white top-0 p-1">'.$row["userID"].'</td>';
                echo'<td class=bg-white top-0 p-1">'.$row["user_firstname"].'&nbsp;'.$row["user_lastname"].'</td>';
                echo'<td class=bg-white top-0 p-1">'.$row["contact_num"].'</td>';
                echo'<td class=bg-white top-0 p-1">'.$row["email"].'</td>';
                echo'<td class=bg-white top-0 p-1">'.$row["address"].'</td>';
                echo'<td class=bg-white top-0 p-1">'.$row["date_added"].'</td>';
                echo   '<td class="bg-white top-0 p-2">';
                echo '<a href="clientlist_editpage.php?userID='.$row["userID"].'">
                      <ion-icon name="create-outline"></ion-icon> </a>';
                echo '<a href="../crud/clientlist_delete.php?userID='.$row['userID'].'">
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
  echo "No records found.";
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
