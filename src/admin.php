<?php
include 'connectdb.php';
	if($_SESSION['admin_sid']==session_id())
	{
		?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <p>im admin</p>
    <a href="includes/logout.php">logout</a>
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