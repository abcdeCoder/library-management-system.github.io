<?php
function connection()
{
    $host = 'remotemysql.com';
    $username = 'Qhi5r1FFe0';
    $password = 'UaSlm473Kv';
    $database = 'Qhi5r1FFe0';

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        return $con;
    }
}

?>