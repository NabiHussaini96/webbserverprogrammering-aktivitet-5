<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "aktivitet5_db";

$conn = new mysqli(
    $servername,
    $username,
    $password,
    $database
);

if ($conn->connect_error)
{
    die("Databasanslutning misslyckades: " . $conn->connect_error);
}

?>