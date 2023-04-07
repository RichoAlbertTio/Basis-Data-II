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
    <h3 align="center" style="color:#4d0000">Tabel Merk</h3>
    <table border="2px"  cellpadding="5" align="center" bgcolor="white">
    <tr bgcolor="green">
        <th>ID Merk</th>
        <th>Nama Merk</th>
        <th>Model Sepatu</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

<?php 
    $data = "SELECT * FROM merk";
    $hdata = mysqli_query ($conn,$data);
    while($row = mysqli_fetch_assoc($hdata)){ 
?>

    <tr>
        <td><center><?php echo $row['id_merk'] ?></center></td>
        <td><?php echo $row['nama_merk'] ?></td>
        <td><?php echo $row['model_sepatu'] ?></td>
        <td><center>
            <a href="UpdateM.php?merk=<?php echo $row['id_merk']; ?>"><button>Edit</button></a></center>
        </td>
        <td><center>
            <a href="DeleteM.php?merk=<?php echo $row['id_merk']; ?>"><button>Hapus</button></a></center>
        </td>        
    </tr>

<?php
    }
    
    mysqli_close($conn);
?>

    </table>
    <center>
    <br>
    <a href="InsertM.php"><button>Tambah Data Merk</button></a>
    <br>
    <br>
    <a href="Indeks.php"><button>Halaman Utama</button></a>
    <a href="IndeksS.php"><button>Data Tabel Sepatu</button></a>
    <a href="IndeksDB.php"><button>Data Tabel Detail Bayar</button></a>
    <a href="IndeksHB.php"><button>Data Tabel Header Bayar</button></a>
    </center>
</body>
</html>