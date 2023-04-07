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
    $detail = $_GET['detail'];
    $data = "SELECT * FROM detail_bayar WHERE id_detail='$detail'";
    $hdata = mysqli_query ($conn,$data); 
    while ($row= mysqli_fetch_array($hdata)){
?>
    <form method="post" action="EditDB.php">
        <table> 
        <tr><td><input type="hidden" name="id_detail" value="<?php echo $row['id_detail']; ?>"></td></tr>                         
        <tr><td>ID Sepatu</td><td><input type="text" name="id_sepatu" value="<?php echo $row['id_sepatu']; ?>"></td></tr>
        <tr><td>Jumlah Beli</td><td><input type="text" name="jumlah_beli" value="<?php echo $row['jumlah_beli']; ?>"></td></tr>
        <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>

<?php 
    }
?>
    <br>
    <a href="IndeksDB.php"><button>KEMBALI</button></a>
    <br>
</body>
</html>