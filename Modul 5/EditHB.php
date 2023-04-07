<?php 
    include("ConnectDB.php");

    $no_nota = $_POST["no_nota"]; 
    $tanggal = $_POST["tanggal"]; 
    $id_detail = $_POST["id_detail"];
    $total_pembelian = $_POST["total_pembelian"];
    $bayar = $_POST["bayar"];
    $sisa_bayar = $_POST["sisa_bayar"];
    
    mysqli_query($conn, "CALL UpdateData_header ('$no_nota', '$tanggal', '$id_detail', '$total_pembelian', '$bayar', '$sisa_bayar')");
    header("location:IndeksHB.php");
?>