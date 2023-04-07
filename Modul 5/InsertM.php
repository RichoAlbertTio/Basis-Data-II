<?php
    include("ConnectDB.php"); 
    if(isset($_POST['submit'])){
        $id_merk = $_POST["id_merk"];
        $nama_merk = $_POST["nama_merk"];
        $model_sepatu = $_POST["model_sepatu"];
 
        $query = "CALL InsertData_merk ('$id_merk', '$nama_merk', '$model_sepatu')";
        if(mysqli_query($conn, $query)){
            header("Location: IndeksM.php"); 
        }else{
            echo "Tambah data gagal"; 
        }
    }
 
    mysqli_close($conn);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Tabel Merk</title>
    <style>
    body {
      background-color: greenyellow;
    }
  </style>
</head>
<body align="center">
<h3>Tambah Data Tabel Merk</h3>
    <center>
    <form action="InsertM.php" method="post">
        <table>
        <tr><td>ID Merk</td><td><input type="text" name="id_merk"></td></tr>
        <tr><td>Nama Merk</td><td><input type="text" name="nama_merk"></td></tr>
        <tr><td>Model Sepatu</td><td><input type="text" name="model_sepatu"></td></tr>
        </table>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>
    </center>
</body>
</html>