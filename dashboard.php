<?php

session_start();

if (!isset($_SESSION["loggedin"]))
{
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Dashboard</h1>

    <p>Du är inloggad.</p>

    <form action="save_post.php" method="post">

        <label>Rubrik</label>

        <input
            type="text"
            name="rubrik"
            required>

        <label>Innehåll</label>

        <textarea
            name="innehall"
            rows="6"
            required></textarea>

        <label>Skribent</label>

        <input
            type="text"
            name="skribent"
            required>

        <button type="submit">
            Publicera inlägg
        </button>

    </form>

    <br>

    <a href="index.php">
        Visa bloggen
    </a>

    <br><br>

    <a href="logout.php">
        Logga ut
    </a>

</div>

</body>
</html>