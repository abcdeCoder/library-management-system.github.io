<?php
session_start();
$dbservername = 'sql6.freesqldatabase.com';
$dbusername = 'sql6505353';
$dbpassword = 'tefCRS5nNl';
// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword);
// Check connection
if (!$conn) {
    echo 'Connected unsuccessfully';
    die('Connection failed: ' . mysqli_connect_error());
}
?>