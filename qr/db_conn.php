<?php

$sname = 'sql6.freesqldatabase.com';
$uname = 'sql6505355';
$password = 'ShzpBJ1xf9';

$db_name = 'sql6505355';

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo 'Connection failed!';
    exit();
}