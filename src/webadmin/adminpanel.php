<?php
include '../includes/connectdb.php';
	if($_SESSION['admin_sid']==session_id())
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

  <?php include 'adminsidebar.html' ?>
      <h1 class="m-auto text-4xl font-extrabold justify-center mt-5 text-center">Account Registration</h1>
      <div class="">
        <div class=" ml-20 mt-20 md:mt-20 md:ml-60 md:mr-4 w-full h-60">
          <form class="" action="index.html" method="post">


						<br><label for="fname" class="font-bold">First Name:</label>
						<input type="text" name="fname" placeholder="First Name" class="ml-0.5 bg-blue-200 md:bg-blue-300 border-b-2 border-black"><br>

						<br><label for="lname" class="font-bold">Last Name:</label>
						<input type="text" name="lname" placeholder="Last Name" class="ml-0.5 bg-blue-200 md:bg-blue-300 border-b-2 border-black"><br>

            <br><label for="user" class="font-bold w-2">Username:</label>
            <input type="text" name="user" placeholder="Username" class="bg-blue-200 md:bg-blue-300 border-b-2 border-black pl-1" ><br>

            <br><label for="pass" class="font-bold">Password:</label>
            <input type="password" name="pass" placeholder="Password" class="ml-0.5 bg-blue-200 md:bg-blue-300 border-b-2 border-black pl-2"><br>
						<br><label for="level" class="font-bold">User Level</label>
						<select class="ml-0.5 bg-blue-200 md:bg-blue-300 border-b-2 border-black" name="level">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
						</select>

            <br><button type="submit" name="button1" formaction="useradd.php" class="mt-5 border-black border-2 p-2 rounded-md">Add User</button>
            <button type="submit" name="button2" formaction="userdelete.php" class="mt-5 border-black border-2 p-2 rounded-md">Delete User</button>
          </form>
        </div>
      </div>
  </body>
</html>
<?php
	}else
	{
		if($_SESSION['staff_sid']==session_id()){
			header("location:404.php");
		}
		else{
			if($_SESSION['customer_sid']==session_id()){
				header("location:404.php");
			}else{
				header("location:login.php");
			}
		}
	}
?>
