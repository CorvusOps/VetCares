<?php
include '../includes/connectdb.php';
	if($_SESSION['staff_sid']==session_id())
	{
    $sql = "SELECT user_firstname, user_lastname, contact_num, email, address, date_added FROM users WHERE user_level='2'";
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
        <h1 class="font-extrabold text-3xl text-center text-black">CLIENTS</h1>
      </div>

      <div class="grid md:place-items-start place-items-center md:ml-60 py-3">
        <button class=" block text-black hover:text-white bg-white hover:bg-gray-700 font-medium rounded-lg text-base p-2 px-5 text-center " type="button" data-modal-toggle="new-category">
                Add Client
        </button>
      </div>

      <table class="m-auto md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60 shadow-lg">
        <thead class=" bg-gray-100 border-b-2 border-gray-200 text-center p-2">
          <tr class="">
            <th class="w-1/5 p-2">Name</th>
            <th class="w-1/5 p-2">Contact Number</th>
            <th class="w-1/5 p-2">Email</th>
            <th class="w-1/5 p-2">Address</th>
            <th class="w-1/5 p-2">Date Added</th>
          </tr>
        </thead>

        <tbody class="text-center">
          <?php   
            while($row = $result->fetch_assoc()) {
              echo'<tr>';
              echo'<td class=bg-white top-0 p-1">'.$row["user_firstname"].'&nbsp;'.$row["user_lastname"].'</td>';
              echo'<td class=bg-white top-0 p-1">'.$row["contact_num"].'</td>';
              echo'<td class=bg-white top-0 p-1">'.$row["email"].'</td>';
              echo'<td class=bg-white top-0 p-1">'.$row["address"].'</td>';
              echo'<td class=bg-white top-0 p-1">'.$row["date_added"].'</td>';
  }           echo '</tr>';      
					?>

        </tbody>
      </table>
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
