<?php 
    include("ConnectDB.php");

    $id_detail = $_POST["id_detail"];
    $id_sepatu = $_POST["id_sepatu"];       
    $jumlah_beli = $_POST["jumlah_beli"];
    
    mysqli_query($conn, "CALL UpdateData_detail ('$id_detail', '$id_sepatu', '$jumlah_beli')");
    header("location:IndeksDB.php");
?>