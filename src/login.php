<?php
session_start();
if(isset($_SESSION['admin_sid']) || isset($_SESSION['staff_sid']) || isset($_SESSION['client_sid']))
{
    #if the session is stablished
    #any attemp of going here will be redirected in index.php
	header("location:../index.php");
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <fieldset>
        <form method="post" action="includes/validation.php">
            <input name="username" type="text" >
            <input name="password" type="password">
            <button type="submit">submit</button>
            <!--
            <input type="submit" name="submit" value="Login">
             -->
        </form>
    </fieldset>
    <h1 class="text-3xl text-slate-500 hover:text-blue-900 font-bold underline">
    Hover me hee hee.
    </h1>
</body>
</html>
<?php
}
?>
