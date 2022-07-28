<?php
session_start();
if(isset($_SESSION['admin_sid']) || isset($_SESSION['staff_sid']) || isset($_SESSION['client_sid']))
{
    #if the session is stablished
    #any attemp of going here will be redirected in index.php
	#header("location:../index.php");
    if(isset($_SESSION['admin_sid'])){
        header("location:webadmin/adminpanel.php");
    }elseif(isset($_SESSION['staff_sid'])){
        header("location:webstaff/dashboard.php");
    }elseif(isset($_SESSION['client_sid'])){
        header("location:webclient/clientpanel.php");
    }else{
        header("location:../index.php");
    }
}
else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="icon" href="images/templogo.png">
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body class="bg-blue-200">
            <div class="drop-shadow-lg grid place-items-center h-screen  bg-blue-200">
                <form class="client_login rounded-lg px-4 bg-slate-100 m-5 p-5 w-auto md:w-1/3" action="includes/validation.php" method="post">
                    
                    <div class="grid place-items-center">
                        <span class="text-3xl text-gray-700 font-bold">
                            <img class="h-10 inline" src="images/templogo.png">
                            VetCares: Record System
                        </span>
                    </div>
                    
                    <h2 class="mt-5 font-bold text-center text-4xl text-gray-700">
                        Sign In
                    </h2>

                    <div class="px-8">
                    <label for="username">Username</label>
                        <input class="p-2 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600"
                                type="text" name="username" placeholder="Enter your Username" required>
                        <label for="pass">Password</label>

                        <input class="p-2 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600"
                                type="password" name="password" placeholder="Enter your Password" required>
                    </div>

                    <div class="my-3 grid place-items-center"> <!--Div for Buttons-->
                        <input type="submit" 
                                value="Log In" 
                                name="login-submit"
                                class="border-gray-600 px-6 p-2 rounded bg-blue-600 text-white shadow-md hover:bg-blue-800 hover:shadow-lg">
                    </div>
                    <div class="text-center  hover:text-blue-700">
                        <a href="../index.php" class="text-sm"><br/>Back to website</a>
                    </div>
                </form>
            </div>
</body>
</html>
<?php
}
?>
