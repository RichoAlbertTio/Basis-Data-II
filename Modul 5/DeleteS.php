<?php
    require_once("ConnectDB.php");  
    $sepatu = $_GET["sepatu"]; 
    $query = "CALL DelateData_sepatu ('$sepatu')"; 
    if(mysqli_query($conn, $query)){ 
        header("Location: IndeksS.php");
    }else{
        echo "Hapus data gagal"; 
    }
?>