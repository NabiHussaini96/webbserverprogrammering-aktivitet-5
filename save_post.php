<?php

session_start();

if (!isset($_SESSION["loggedin"]))
{
    header("Location: login.php");
    exit();
}

require "db.php";

$rubrik = trim($_POST["rubrik"]);
$innehall = trim($_POST["innehall"]);
$skribent = trim($_POST["skribent"]);

if (
    empty($rubrik) ||
    empty($innehall) ||
    empty($skribent)
)
{
    die("Alla fält måste fyllas i.");
}

$stmt = $conn->prepare(
    "INSERT INTO posts (rubrik, innehall, skribent)
     VALUES (?, ?, ?)"
);

$stmt->bind_param(
    "sss",
    $rubrik,
    $innehall,
    $skribent
);

$stmt->execute();

$stmt->close();

header("Location: index.php");
exit();

?>