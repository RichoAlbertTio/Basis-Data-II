<?php 
    include("ConnectDB.php");

    $id_sepatu = $_POST["id_sepatu"];
    $id_merk = $_POST["id_merk"];
    $ukuran = $_POST["ukuran"];
    $warna = $_POST["warna"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];
    
    mysqli_query($conn, "CALL UpdateData_sepatu ('$id_sepatu', '$id_merk', '$ukuran', '$warna', '$harga', '$stok')");
    header("location:IndeksS.php");
?>