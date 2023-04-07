<?php
    include("ConnectDB.php"); 
    if(isset($_POST['submit'])){
        $no_nota = $_POST["no_nota"]; 
        $tanggal = $_POST["tanggal"]; 
        $id_detail = $_POST["id_detail"];
        $total_pembelian = $_POST["total_pembelian"];
        $bayar = $_POST["bayar"];
        $sisa_bayar = $_POST["sisa_bayar"];
 
        $query = "CALL InsertData_header ('$no_nota', '$tanggal', '$id_detail', '$total_pembelian', '$bayar', '$sisa_bayar')";
        if(mysqli_query($conn, $query)){
            header("Location: IndeksHB.php"); 
        }else{
            echo "Tambah data gagal"; 
        }
    }
 
    mysqli_close($conn);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Tabel Header Bayar</title>
    <style>
    body {
      background-color: greenyellow;
    }
  </style>
</head>
<body align="center">
<h3>Tambah Data Tabel Header Bayar</h3>
    <center>
    <form action="InsertHB.php" method="post">
        <table>
        <tr><td>No Nota</td><td><input type="text" name="no_nota"></td></tr>
        <tr><td>Tanggal</td><td><input type="date" name="tanggal"></td></tr>
        <tr><td>ID Detail</td><td><input type="text" name="id_detail"></td></tr>
        <tr><td>Total Pembelian</td><td><input type="text" name="total_pembelian"></td></tr>
        <tr><td>Pembayaran</td><td><input type="text" name="bayar"></td></tr>
        <tr><td>Kembalian</td><td><input type="text" name="sisa_bayar"></td></tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
    </center>
</body>
</html>