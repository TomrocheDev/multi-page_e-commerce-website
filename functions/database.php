<?php
function db_connect() {
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'e_commerce_db';
    $conn = new mysqli($servername, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("error");
    }   
    return $conn;
}

function fetch_rows($connection, $table_name) {
    $aResponse = mysqli_query($connection, "SELECT * FROM $table_name;");
    $aData = [];
    
    if ($aResponse->num_rows > 0) {
        while ($row = $aResponse->fetch_assoc()) {
            $aData[] = $row;
        }
    }
    return $aData;
}