<?php

function Connection() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "joyplay";

    $db_conn = mysqli_connect($host, $user, $password, $database);

    if (!$db_conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $db_conn;
}

?>
