<?php

$sname = 'remotemysql.com';
$uname = 'XnprHCjihw';
$password = 'wI5aIHBVQ8';

$db_name = 'XnprHCjihw';

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo 'Connection failed!';
    exit();
}