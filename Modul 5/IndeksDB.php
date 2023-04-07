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
    <h3 align="center" style="color:#4d0000">Tabel Detail Bayar</h3>
    <table border="2px"  cellpadding="5" align="center" bgcolor="white">
    <tr bgcolor="green">
        <th>ID Detail</th>
        <th>ID Sepatu</th>
        <th>Jumlah Beli</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

<?php 
    $data = "SELECT * FROM detail_bayar";
    $hdata = mysqli_query ($conn,$data);
    while($row = mysqli_fetch_assoc($hdata)){ 
?>

    <tr>
        <td><center><?php echo $row['id_detail'] ?></center></td>
        <td><center><?php echo $row['id_sepatu'] ?></center></td>
        <td><center><?php echo $row['jumlah_beli'] ?></center></td>
        <td><center>
            <a href="UpdateDB.php?detail=<?php echo $row['id_detail']; ?>"><button>Edit</button></a></center>
        </td>
        <td><center>
            <a href="DeleteDB.php?detail=<?php echo $row['id_detail']; ?>"><button>Hapus</button></a></center>
        </td>        
    </tr>

<?php
    }
    
    mysqli_close($conn);
?>

    </table>
    <center>
    <br>
    <a href="InsertDB.php"><button>Tambah Data Detail Bayar</button></a>
    <br>
    <br>
    <a href="Indeks.php"><button>Halaman Utama</button></a>
    <a href="IndeksM.php"><button>Data Tabel Merk</button></a>
    <a href="IndeksS.php"><button>Data Tabel Sepatu</button></a>
    <a href="IndeksHB.php"><button>Data Tabel Header Bayar</button></a>
    </center>
</body>
</html>