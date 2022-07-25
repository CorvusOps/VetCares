<?php  
include '../includes/connectdb.php';

if(isset($_GET["servicesID"]) && !empty($_GET["servicesID"])){
    $servicesID = $_GET['servicesID'];
    #idk but trigger modal to 

    $deletequery = " DELETE FROM services WHERE servicesID ='$servicesID';";

    
    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('A Service successfully deleted!'); 
        window.location = '../webstaff/service.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../webstaff/service.php';
        </script>";  
    }

}

?>