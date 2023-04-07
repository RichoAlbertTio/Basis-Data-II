<?php
    require_once("ConnectDB.php");  
    $merk = $_GET["merk"]; 
    $query = "CALL DelateData_merk ('$merk')"; 
    if(mysqli_query($conn, $query)){ 
        header("Location: IndeksM.php");
    }else{
        echo "Hapus data gagal"; 
    }
?>