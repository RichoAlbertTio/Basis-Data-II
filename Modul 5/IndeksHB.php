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
    <h3 align="center" style="color:#4d0000">Tabel Header Bayar</h3>
    <table border="2px"  cellpadding="5" align="center" bgcolor="white">
    <tr bgcolor="green">
        <th>No Nota</th>
        <th>Tanggal</th>
        <th>ID Detail</th>
        <th>Total Pembelian</th>
        <th>Pembayaran</th>
        <th>Kembalian</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

<?php 
    $data = "SELECT * FROM header_bayar";
    $hdata = mysqli_query ($conn,$data);
    while($row = mysqli_fetch_assoc($hdata)){ 
?>

    <tr>
        <td><center><?php echo $row['no_nota'] ?></center></td>
        <td><center><?php echo $row['tanggal'] ?></center></td>
        <td><center><?php echo $row['id_detail'] ?></center></td>
        <td><?php echo $row['total_pembelian'] ?></td>
        <td><?php echo $row['bayar'] ?></td>
        <td><?php echo $row['sisa_bayar'] ?></td>
        <td><center>
            <a href="UpdateHB.php?header=<?php echo $row['no_nota']; ?>"><button>Edit</button></a></center>
        </td>
        <td><center>
            <a href="DeleteHB.php?header=<?php echo $row['no_nota']; ?>"><button>Hapus</button></a></center>
        </td>        
    </tr>

<?php
    }
    
    mysqli_close($conn);
?>

    </table>
    <center>
    <br>
    <a href="InsertHB.php"><button>Tambah Data Header Bayar</button></a>
    <br>
    <br>
    <a href="Indeks.php"><button>Halaman Utama</button></a>
    <a href="IndeksM.php"><button>Data Tabel Merk</button></a>
    <a href="IndeksS.php"><button>Data Tabel Sepatu</button></a>
    <a href="IndeksDB.php"><button>Data Tabel Detail Bayar</button></a>
    </center>
</body>
</html>