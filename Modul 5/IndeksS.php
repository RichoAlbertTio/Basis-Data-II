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
    <h3 align="center" style="color:#4d0000">Tabel Sepatu</h3>
    <table border="2px"  cellpadding="5" align="center" bgcolor="white">
    <tr bgcolor="green">
        <th>ID Sepatu</th>
        <th>ID Merk</th>
        <th>Ukuran</th>
        <th>Warna</th>
        <th>Harga Sepatu</th>
        <th>Stok</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

<?php 
    $data = "SELECT * FROM sepatu";
    $hdata = mysqli_query ($conn,$data);
    while($row = mysqli_fetch_assoc($hdata)){ 
?>

    <tr>
        <td><center><?php echo $row['id_sepatu'] ?></center></td>
        <td><center><?php echo $row['id_merk'] ?></center></td>
        <td><center><?php echo $row['ukuran'] ?></center></td>
        <td><center><?php echo $row['warna'] ?></center></td>
        <td><center><?php echo $row['harga'] ?></center></td>
        <td><center><?php echo $row['stok'] ?></center></td>
        <td><center>
            <a href="UpdateS.php?sepatu=<?php echo $row['id_sepatu']; ?>"><button>Edit</button></a></center>
        </td>
        <td><center>
            <a href="DeleteS.php?sepatu=<?php echo $row['id_sepatu']; ?>"><button>Hapus</button></a></center>
        </td>        
    </tr>

<?php
    }
    
    mysqli_close($conn);
?>

    </table>
    <center>
    <br>
    <a href="InsertS.php"><button>Tambah Data Sepatu</button></a>
    <br>
    <br>
    <a href="Indeks.php"><button>Halaman Utama</button></a>
    <a href="IndeksM.php"><button>Data Tabel Merk</button></a>
    <a href="IndeksDB.php"><button>Data Tabel Detail Bayar</button></a>
    <a href="IndeksHB.php"><button>Data Tabel Header Bayar</button></a>
    </center>
</body>
</html>