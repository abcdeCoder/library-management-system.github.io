<?php
session_start();
$dbservername = 'remotemysql.com';
$dbusername = 'Qhi5r1FFe0';
$dbpassword = 'UaSlm473Kv';
$database = 'Qhi5r1FFe0';
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $database);
// Check connection
if (!$conn) {
    echo 'Connected unsuccessfully';
    die('Connection failed: ' . mysqli_connect_error());
}
?>