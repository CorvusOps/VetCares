<?php
include '../includes/connectdb.php';
	if($_SESSION['staff_sid']==session_id())
	{
    $sql = "SELECT petcategoryID, name, date_created FROM pet_category";
    $result = $connectdb->query($sql);

    if ($result->num_rows > 0) {
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
  
    <div class="grid place-items-center pt-5">
       <h1 class="font-extrabold text-3xl text-center text-black">Pet Category</h1>
    </div>

    <div class="grid md:place-items-start place-items-center md:ml-60 py-3">
      <button class=" block text-black hover:text-white bg-white hover:bg-gray-700 font-medium rounded-lg text-base p-2 text-center " type="button" data-modal-toggle="new-category">
              Create New Category
      </button>

    </div>


      <table class="border-2 border-blue-800 m-auto md:ml-56 md:mr-4 w-9/12 text-left border-collapse lg:ml-60">
        
        <thead>
          <tr class="border-2 border-blue-800">
            <th class="w-1/5 border-2 border-blue-800">Category ID</th>
            <th class="w-1/5 border-2 border-blue-800">Pet Type</th>
            <th class="w-1/5 border-2 border-blue-800">Date Created</th>
          </tr>
        </thead>

        <tbody>
          <?php   
            while($row = $result->fetch_assoc()) {
              echo'<tr>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["petcategoryID"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["name"].'</td>';
              echo'<td class="border-2 border-blue-800 top-0">'.$row["date_created"].'</td>';
  }           echo '</tr>';      
					?>

        </tbody>
      </table>

      <script src="src/javascript/script.js"></script>

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
