<?php
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $db = "db_sepatu"; 
    
    $conn = new mysqli($servername, $username, $password, $db);
    
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
    else {
        echo "koneksi berhasil";
    }
?>