<?php
    include("ConnectDB.php"); 
    if(isset($_POST['submit'])){
        $id_detail = $_POST["id_detail"];
        $id_sepatu = $_POST["id_sepatu"];       
        $jumlah_beli = $_POST["jumlah_beli"];
 
        $query = "CALL InsertData_detail ('$id_detail', '$id_sepatu', '$jumlah_beli')";
        if(mysqli_query($conn, $query)){
            header("Location: IndeksDB.php"); 
        }else{
            echo "Tambah data gagal"; 
        }
    }
 
    mysqli_close($conn);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Tabel Detail Bayar</title>
    <style>
    body {
      background-color: greenyellow;
    }
  </style>
</head>
<body align="center">
<h3>Tambah Data Tabel Detail Bayar</h3>
    <center>
    <form action="InsertDB.php" method="post">
        <table>
        <tr><td>ID Detail</td><td><input type="text" name="id_detail"></td></tr>
        <tr><td>ID Sepatu</td><td><input type="text" name="id_sepatu"></td></tr>
        <tr><td>Jumlah Beli</td><td><input type="text" name="jumlah_beli"></td></tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
    </center>
</body>
</html>