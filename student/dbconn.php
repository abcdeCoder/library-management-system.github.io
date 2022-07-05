<?php
session_start();
$dbservername = 'remotemysql.com';
$dbusername = 'Qhi5r1FFe0';
$dbpassword = 'UaSlm473Kv';
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection
if (!$conn) {
    echo 'Connected unsuccessfully';
    die('Connection failed: ' . mysqli_connect_error());
}
?>