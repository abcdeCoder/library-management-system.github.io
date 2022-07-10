<?php
function connection()
{
    $host = 'sql6.freesqldatabase.com';
    $username = 'sql6505353';
    $password = 'tefCRS5nNl';
    $database = 'sql6505353';

    $con = new mysqli($host, $username, $password, $database);

    if ($con->connect_error) {
        echo $con->connect_error;
    } else {
        return $con;
    }
}

?>