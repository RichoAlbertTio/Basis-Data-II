<?php
    require_once("ConnectDB.php");  
    $header = $_GET["header"]; 
    $query = "CALL DelateData_header ('$header')"; 
    if(mysqli_query($conn, $query)){ 
        header("Location: IndeksHB.php");
    }else{
        echo "Hapus data gagal"; 
    }
?>