<?php
session_start();
$dbservername = 'sql6.freesqldatabase.com';
$dbusername = 'sql6505353';
$dbpassword = 'tefCRS5nNl';
$database = 'sql6505353';
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword,$database);
// Check connection
if (!$conn) {
    echo 'Connected unsuccessfully';
    die('Connection failed: ' . mysqli_connect_error());
}
?>