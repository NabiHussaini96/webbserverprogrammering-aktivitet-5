<?php

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
    <title>Min Blogg</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Min Blogg</h1>

    <a href="login.php">
        Logga in
    </a>

    <hr>

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

</div>

</body>
</html>