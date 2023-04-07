<?php
    require("ConnectDB.php"); 
?>

<!DOCTYPE html>
<html>
<head>
    <title>BasdatModul5</title>
    <style>
    body {
      background-color: greenyellow;
    }
    th{
      color: white;
    }
  </style>
</head>
<body>
    <h2 align="center" style="color:#4d0000">Toko Sepatu</h2>
    <table border="2px"  cellpadding="5" align="center" bgcolor="white">
    <tr bgcolor="green">
        <th>No Nota</th>    
        <th>Nama Merk</th>
        <th>Model Sepatu</th>
        <th>Ukuran</th>
        <th>Warna</th>
        <th>Harga Sepatu</th>
        <th>Stok</th>
        <th>Jumlah Beli</th>
        <th>Tanggal</th>
        <th>Total Pembelian</th>
        <th>Pembayaran</th>
        <th>Kembalian</th>
    </tr>

<?php 
    $data = "SELECT * FROM semua;";          
    $hdata = mysqli_query($conn,$data); 
    while($row = mysqli_fetch_assoc($hdata)){ 
?>

    <tr>
        <td><center><?php echo $row['no_nota'] ?></center></td>
        <td><?php echo $row['nama_merk'] ?></td>
        <td><?php echo $row['model_sepatu'] ?></td>
        <td><center><?php echo $row['ukuran'] ?></center></td>
        <td><center><?php echo $row['warna'] ?></center></td>
        <td><?php echo $row['harga'] ?></td>
        <td><center><?php echo $row['stok'] ?></center></td>
        <td><center><?php echo $row['jumlah_beli'] ?></center></td>
        <td><center><?php echo $row['tanggal'] ?></center></td>
        <td><?php echo $row['total_pembelian'] ?></td>
        <td><?php echo $row['bayar'] ?></td>
        <td><?php echo $row['sisa_bayar'] ?></td>
    </tr>

<?php
    } 
    mysqli_close($conn);
?>

    </table>
    <center>
    <br>
    <a href="IndeksM.php"><button>Data Tabel Merk</button></a>
    <a href="IndeksS.php"><button>Data Tabel Sepatu</button></a>
    <a href="IndeksDB.php"><button>Data Tabel Detail Bayar</button></a>
    <a href="IndeksHB.php"><button>Data Tabel Header Bayar</button></a>
    </center>
</body>
</html>