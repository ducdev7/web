<?php
    $severname = "localhost";
    $username = "root";
    $password = ""; // khong co pass
    $db = "aphp";
    // tao ket noi
    $conn = new mysqli($severname, $username, $password, $db);
    // kiem tra ket noi
    if ($conn->connect_error) {
        die("Connection faile: " . $conn->connect_error);
    }
    // echo "Connected successfully <br>";
?>