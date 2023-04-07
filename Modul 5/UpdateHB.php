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
    $header = $_GET['header'];
    $data = "SELECT * FROM header_bayar WHERE no_nota='$header'";
    $hdata = mysqli_query ($conn,$data); 
    while ($row= mysqli_fetch_array($hdata)){
?>
    <form method="post" action="EditHB.php">
        <table> 
        <tr><td><input type="hidden" name="no_nota" value="<?php echo $row['no_nota']; ?>"></td></tr>   
        <tr><td>Tanggal</td><td><input type="date" name="tanggal" value="<?php echo $row['tanggal']; ?>"></td></tr>                      
        <tr><td>ID Detail</td><td><input type="text" name="id_detail" value="<?php echo $row['id_detail']; ?>"></td></tr>
        <tr><td>Total Pembelian</td><td><input type="text" name="total_pembelian" value="<?php echo $row['total_pembelian']; ?>"></td></tr>
        <tr><td>Pembayaran</td><td><input type="text" name="bayar" value="<?php echo $row['bayar']; ?>"></td></tr>
        <tr><td>Kembalian</td><td><input type="text" name="sisa_bayar" value="<?php echo $row['sisa_bayar']; ?>"></td></tr>
        <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>

<?php 
    }
?>
    <br>
    <a href="IndeksHB.php"><button>KEMBALI</button></a>
    <br>
</body>
</html>