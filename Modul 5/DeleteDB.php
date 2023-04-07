<?php
    require_once("ConnectDB.php");  
    $detail = $_GET["detail"]; 
    $query = "CALL DelateData_detail ('$detail')"; 
    if(mysqli_query($conn, $query)){ 
        header("Location: IndeksDB.php");
    }else{
        echo "Hapus data gagal"; 
    }
?>