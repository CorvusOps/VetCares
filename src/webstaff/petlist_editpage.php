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
    
    <?php
      $pet_recordID = $_GET['pet_recordID'];
      #$quey = 'SELECT * FROM services WHERE serviceID ='.$_GET['servicesID']';'

      $petquery = mysqli_query($connectdb, "SELECT * FROM pet WHERE pet_recordID ='$pet_recordID';");
      while($row = mysqli_fetch_array($petquery)){
          $petName = $row['petName'];
          $petAge = $row['petAge'];
          $petCategoryID = $row['petCategoryID'];
          $petUserID = $row['petUserID'];
         
        }
 
    ?>

    <form method="post" class="px-4 rounded mx-auto max-w-3xl w-full my-32 inputs space-y-6">
      <!-- HEADER -->
      <div>
        <h1 class="text-4xl font-bold">UPDATE PET INFO</h1>
        <p class="text-gray-600">
          IDK a note maybe
        </p>
        <input type="hidden" name="pet_recordID" value="<?php echo $pet_recordID; ?>">
      </div>
      <div>
        <div>
          <label for="petName">Pet Name</label>
          <input
            class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
            name="petName"
            value="<?php echo $petName; ?>"
          />
        </div>
      </div>
      <div>
        <label for="petAge">Pet Age</label>
                <input
          class="border border-gray-400 px-4 py-2 rounded w-full focus:outline-none focus:border-teal-400"
          name="petAge"
          value="<?php echo $petAge; ?>"
        />
        <p class="text-sm text-gray-600">
          IDK what to put either XD 
        </p>
      </div>
      <div>
      <select name="petCategoryID" id="category" class="mb-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                          <option value="">Select Pet Type</option>

                          <!--Fetch Category from database and Put to Dropdown-->
                          <?php
                            $sql = "SELECT petcategoryID, name FROM pet_category";
                            $result = $connectdb->query($sql);
                            while($row = $result->fetch_assoc()) {
                              echo"<option value=$row[petcategoryID]>$row[name]</option>";
                            }
                          ?>
                          </select>

                          <label for="owner" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Owner</label>
                          <select name="petUserID" id="owner" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                          <option value="">Select Owner</option>
                        <!--Fetch Category from database and Put to Dropdown-->
                          <?php
                            $sql = "SELECT userID, user_firstname, user_lastname FROM users";
                            $result = $connectdb->query($sql);
                            while($row = $result->fetch_assoc()) {
                              echo"<option value=$row[userID]>$row[user_firstname] $row[user_lastname]</option>";
                            }
                          ?>

                        </select>
      </div>
      <button type="submit" formaction="../crud/petlist_update.php" name="button" class="mt-5 border-green-900 bg-blue-300 font-bold border-2 p-2 rounded-md">Update Pet Information</button>
      <a href="service.php" name="button" class="mt-5 border-red-900 bg-blue-300 font-bold border-2 p-2 rounded-md">Cancel</a>
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