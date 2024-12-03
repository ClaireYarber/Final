<?php
function get_db_connection() {
    $servername = "138.197.17.168";
    $username = "misclair_finaluser";
    $password = "CY41727jms!";
    $dbname = "misclair_final";

    $conn = new mysqli('138.197.17.168', 'misclair_finaluser', 'CY41727jms!', 'misclair_final');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}
?>
