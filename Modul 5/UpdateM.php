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
    $merk = $_GET['merk'];
    $data = "SELECT * FROM merk WHERE id_merk='$merk'";
    $hdata = mysqli_query ($conn,$data); 
    while ($row= mysqli_fetch_array($hdata)){
?>
    <form method="post" action="EditM.php">
        <table> 
        <tr><td><input type="hidden" name="id_merk" value="<?php echo $row['id_merk']; ?>"></td></tr>                         
        <tr><td>Nama Merk</td><td><input type="text" name="nama_merk" value="<?php echo $row['nama_merk']; ?>"></td></tr>
        <tr><td>Model Sepatu</td><td><input type="text" name="model_sepatu" value="<?php echo $row['model_sepatu']; ?>"></td></tr>
        <input type="submit" name="submit" value="Edit Data">
        </table>
    </form>

<?php 
    }
?>
    <br>
    <a href="IndeksM.php"><button>KEMBALI</button></a>
    <br>
</body>
</html>