<?php

session_start();

if (!isset($_SESSION["loggedin"]))
{
    header("Location: login.php");
    exit();
}

require "db.php";

$result = $conn->query(
    "SELECT * FROM posts
     ORDER BY datum DESC"
);

?>

<!DOCTYPE html>
<html lang="sv">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alla inlägg</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

<h1>Alla inlägg</h1>

<?php

while($row = $result->fetch_assoc())
{
    echo "<div class='post'>";

    echo "<h2>"
    . htmlspecialchars($row["rubrik"])
    . "</h2>";

    echo "<p>"
    . nl2br(htmlspecialchars($row["innehall"]))
    . "</p>";

    echo "<p><strong>Skribent:</strong> "
    . htmlspecialchars($row["skribent"])
    . "</p>";

    echo "<small>"
    . htmlspecialchars($row["datum"])
    . "</small>";

    echo "</div><hr>";
}

?>

<a href="dashboard.php">
Tillbaka
</a>

</div>

</body>
</html>