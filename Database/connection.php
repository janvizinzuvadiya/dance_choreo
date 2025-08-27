<?php
    $host = "127.0.0.1";
    $dbname = "dance_db";
    $username = "root";
    $password = "";
    $port = 3360; 

    $conn = mysqli_connect($host, $username, $password, $dbname, $port);
        
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // if (!$conn)
    // {   
    //     die("❌ Connection failed: ". mysqli_connect_error());
    // }
    // echo "✅ Connected successfully";
?>
