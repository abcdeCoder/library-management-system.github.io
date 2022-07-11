<?php
function connection()
{
    $host = 'sql6.freesqldatabase.com';
    $username = 'sql6505355';
    $password = 'ShzpBJ1xf9';
    $database = 'sql6505355';

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        return $con;
    }
}

?>