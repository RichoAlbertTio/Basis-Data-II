<?php
    include("ConnectDB.php"); 
    if(isset($_POST['submit'])){
        $id_sepatu = $_POST["id_sepatu"];
        $id_merk = $_POST["id_merk"];
        $ukuran = $_POST["ukuran"];
        $warna = $_POST["warna"];
        $harga = $_POST["harga"];
        $stok = $_POST["stok"];
 
        $query = "CALL InsertData_Sepatu ('$id_sepatu', '$id_merk', '$ukuran', '$warna', '$harga', '$stok')";
        if(mysqli_query($conn, $query)){
            header("Location: IndeksS.php"); 
        }else{
            echo "Tambah data gagal"; 
        }
    }
 
    mysqli_close($conn);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Tabel Sepatu</title>
    <style>
    body {
      background-color: greenyellow;
    }
  </style>
</head>
<body align="center">
<h3>Tambah Data Tabel Sepatu</h3>
    <center>
    <form action="InsertS.php" method="post">
        <table>
        <tr><td>ID Sepatu</td><td><input type="text" name="id_sepatu"></td></tr>
        <tr><td>ID Merk</td><td><input type="text" name="id_merk"></td></tr>
        <tr><td>Ukuran</td><td><input type="text" name="ukuran"></td></tr>
        <tr><td>Warna</td><td><input type="text" name="warna"></td></tr>
        <tr><td>Harga Sepatu</td><td><input type="text" name="harga"></td></tr>
        <tr><td>Stok Sepatu</td><td><input type="text" name="stok"></td></tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
    </center>
</body>
</html>