<!DOCTYPE html>
<html>
<head>
    <title>BasdatModul5</title>
    <style>
    body {
      background-color: greenyellow;
    }
  </style>
</head>
<body>
    <br>
    <br>
<?php
    include("ConnectDB.php");   
    $sepatu = $_GET['sepatu'];
    $data = "SELECT * FROM sepatu WHERE id_sepatu='$sepatu'";
    $hdata = mysqli_query ($conn,$data); 
    while ($row= mysqli_fetch_array($hdata)){
?>
    <form method="post" action="EditS.php">
        <table> 
            <tr><td><input type="hidden" name="id_sepatu" value="<?php echo $row['id_sepatu']; ?>"></td></tr>                         
            <tr><td>ID Merk</td><td><input type="text" name="id_merk" value="<?php echo $row['id_merk']; ?>"></td></tr>
        <tr><td>Ukuran</td><td><input type="text" name="ukuran" value="<?php echo $row['ukuran']; ?>"></td></tr>
            <tr><td>Warna</td><td><input type="text" name="warna" value="<?php echo $row['warna']; ?>"></td></tr>
        <tr><td>Harga Sepatu</td><td><input type="text" name="harga" value="<?php echo $row['harga']; ?>"></td></tr>
        <tr><td>Stok</td><td><input type="text" name="stok" value="<?php echo $row['stok']; ?>"></td></tr>
           <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>

<?php 
    }
?>
    <br>
    <a href="IndeksS.php"><button>KEMBALI</button></a>
    <br>
</body>
</html>