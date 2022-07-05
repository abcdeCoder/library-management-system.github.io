<?php
function connection()
{
    $host = 'remotemysql.com';
    $username = 'XnprHCjihw';
    $password = 'wI5aIHBVQ8';
    $database = 'XnprHCjihw';

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        return $con;
    }
}

?>