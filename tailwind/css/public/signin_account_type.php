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
            <div class="rounded-lg px-4 bg-slate-100 m-5 p-5 w-auto md:w-1/3">
                
                <div class="flex flex-col items-center">
                    <span class="text-3xl text-gray-700 font-bold">
                        <img class="h-10 inline" src="images/templogo.png">
                        VetCares: Record System
                    </span>
                </div>
                
                <h2 class="mt-5 font-bold text-center text-4xl text-gray-700">
                    Sign In
                </h2>
                <div class="mt-5 flex flex-col items-center">
                    <a href="client_login.php" target="_blank"> 
                        <button id="appointmentBtn" class=" w-60 bg-blue-600 text-2xl text-white px-6 py-1 mx-5 rounded hover:bg-gray-900 duration-500">
                                Client
                        </button> 
                    </a>
                </div>
                <div class="mt-2 flex flex-col items-center">
                    <a href="staff_login.php" target="_blank"> 
                        <button id="appointmentBtn" class="w-60 bg-slate-700 text-2xl text-white px-6 py-1 mx-5 rounded hover:bg-gray-900 duration-500">
                                Staff
                        </button> 
                    </a>
                </div>
                <div class="text-center  hover:text-blue-700">
                    <a href="index.php" class="text-sm"><br/>Back to website</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>