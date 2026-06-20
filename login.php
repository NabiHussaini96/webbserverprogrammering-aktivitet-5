<?php

session_start();

if (isset($_SESSION["loggedin"]))
{
    header("Location: dashboard.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "1234")
    {
        $_SESSION["loggedin"] = true;

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        $error = "Fel användarnamn eller lösenord.";
    }
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggning</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Inloggning</h1>

    <?php if (!empty($error)) : ?>

        <p style="color:red;">
            <?php echo $error; ?>
        </p>

    <?php endif; ?>

    <form method="post">

        <label>Användarnamn</label>

        <input
            type="text"
            name="username"
            required>

        <label>Lösenord</label>

        <input
            type="password"
            name="password"
            required>

        <button type="submit">
            Logga in
        </button>

    </form>

</div>

</body>
</html>