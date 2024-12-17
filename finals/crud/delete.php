<?php

if (isset($_GET["id"])){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "joyplay";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    $sql = "DELETE FROM users WHERE id = $id";
    $connection-> query($sql);
}

header("Location: ../crud/crud.php");

?>