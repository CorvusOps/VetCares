<?php  
include '../includes/connectdb.php';

if(isset($_GET["userID"]) && !empty($_GET["userID"])){
    $userID = $_GET['userID'];
    #idk but trigger modal to 

    $deletequery = " DELETE FROM users WHERE userID ='$userID';";

    
    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('Account successfully deleted!'); 
        window.location = '../webstaff/client_records.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../webstaff/client_records.php';
        </script>";  
    }

}

?>