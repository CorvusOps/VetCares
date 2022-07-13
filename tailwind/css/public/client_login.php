<?php
 session_start();
 //if (isset($_SESSION["userID"]) && $_SESSION["accLevel"]=="1") {
//header("Location:client_dashboard.php");
 //}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="h-full bg-blue-200"> <!--Content DIV-->
        <div class="drop-shadow-lg grid place-items-center h-full">
            <form class="client_login rounded-lg px-4 bg-slate-100 m-5 p-5 w-auto md:w-1/3" action="client_login.process" method="post">
                
                <div class="flex flex-col items-center">
                    <span class="text-3xl text-gray-700 font-bold">
                        <img class="h-10 inline" src="images/templogo.png">
                        VetCares: Record System
                    </span>
                </div>
                
                <h2 class="mt-5 font-bold text-center text-4xl text-gray-700">
                    Sign In
                </h2>

                <div class="px-8">
                <label for="userID">User ID</label>
                    <input class="p-2 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600"
                            type="text" name="userID" placeholder="Enter your Username" required>
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
                <?php
                    if(isset($_GET["error"]))
                    {
                        if ($_GET["error"]=="emptyfields") {
                        echo "<p class=login_error>Fill in all the fields</p>";
                        }
                        else if ($_GET["error"]=="wrongpass") {
                        echo "<p class=login_error>Password does not match</p>";
                        }
                        else if ($_GET["error"]=="nouser") {
                        echo "<p class=login_error>No User Found!</p>";
                        }
                    }
                    else if (isset($_GET["login"])) {
                        if ($_GET["login"]=="success") {
                        echo "<p class=login_success>Login Succesful!</p>";
                        }
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>