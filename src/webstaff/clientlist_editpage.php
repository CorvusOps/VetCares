<?php
include '../includes/connectdb.php';

if($_SESSION['staff_sid']==session_id())
{
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../public/styles.css">
    <link rel="icon" href="../images/templogo.png">
    <title>Edit Client Info</title>
  </head>
  <body class="w-full h-full bg-blue-200 md:bg-blue-300">
    
    <?php
      $userID = $_GET['userID'];
      #$quey = 'SELECT * FROM services WHERE serviceID ='.$_GET['servicesID']';'

      $userquery = mysqli_query($connectdb, "SELECT * FROM users WHERE userID ='$userID';");
      while($row = mysqli_fetch_array($userquery)){
          $user_firstname = $row['user_firstname'];
          $user_lastname = $row['user_lastname'];
          $contact_num = $row['contact_num'];
          $email = $row['email'];
          $address = $row['address'];
         
        }
 
    ?>

    <form method="post" class="px-4 rounded mx-auto max-w-3xl w-full my-32 inputs space-y-6">
      <!-- HEADER -->
      <div>
        <h1 class="text-4xl font-bold">UPDATE CLIENT INFO</h1>
        <p class="text-gray-600">
          Update a Client's Information
        </p>
        <input type="hidden" name="userID" value="<?php echo $userID; ?>">
      </div>
      <div>
        <div>
          <label for="clientName">Client Name</label>
          <input
            class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
            name="user_firstname"
            value="<?php echo $user_firstname; ?>"
          />
          <p class="text-gray-600 text-sm">
            Firstname
          </p>
          <input
            class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
            name="user_lastname"
            value="<?php echo $user_lastname; ?>"
          />
          <p class="text-gray-600 text-sm">
            Lastname
          </p>
        </div>
      </div>
      <div>
        <label for="contactNum">Contact Number</label>
                <input
          class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
          name="contact_num"
          value="<?php echo $contact_num; ?>"
        />

      </div>
      <div>
        <label for="email">Email</label>
                <input
          class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
          name="email"
          value="<?php echo $email; ?>"
        />
      <div>
        <label for="address">Address</label>
                <input
          class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
          name="address"
          value="<?php echo $address; ?>"
        />

      </div>

      </div>
      <button type="submit" formaction="../crud/clientlist_update.php" name="button" class="mt-5 border-green-900 bg-blue-300 font-bold border-2 p-2 rounded-md">Update Client Information</button>
      <a href="client_records.php" name="button" class="mt-5 border-red-900 bg-blue-300 font-bold border-2 p-2 rounded-md">Cancel</a>
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