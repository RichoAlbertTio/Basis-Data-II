<?php 
    include("ConnectDB.php");

    $id_merk = $_POST["id_merk"];
    $nama_merk = $_POST["nama_merk"];
    $model_sepatu = $_POST["model_sepatu"];
    
    mysqli_query($conn, "CALL UpdateData_merk ('$id_merk', '$nama_merk', '$model_sepatu')");
    header("location:IndeksM.php");
?>