<?php  
include '../includes/connectdb.php';

if(isset($_GET["pet_recordID"]) && !empty($_GET["pet_recordID"])){
    $petID = $_GET['pet_recordID'];
    #idk but trigger modal to 

    $deletequery = "DELETE FROM pet WHERE pet_recordID ='$petID';";

    
    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('A Pet Info successfully deleted!'); 
        window.location = '../webstaff/petLists.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../webstaff/petLists.php';
        </script>";  
    }

}

?>