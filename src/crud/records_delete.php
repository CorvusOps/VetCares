<?php  
include '../includes/connectdb.php';

if(isset($_GET["recordID"]) && !empty($_GET["recordID"])){
    $recordID = $_GET['recordID'];

    $deletequery = "DELETE FROM records WHERE recordID ='$recordID';";

    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('Record successfully deleted!'); 
        window.location = '../webstaff/records.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete record.');  
        window.location = '../webstaff/records.php';
        </script>";  
    }

}

?>