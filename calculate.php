<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator Results</title>
    <link rel="stylesheet" href="global.css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name1"]) && !empty($_POST["name2"])) {
        $name1 = htmlspecialchars($_POST["name1"]);
        $name2 = htmlspecialchars($_POST["name2"]);

        $lovescore = rand(0, 100);

        echo "<div class='result-container'>"; // Main result box
        
        // Table for name1 - heart - name2
        echo "<table class='love-table'>";
        echo "<tr>";
        echo "<td class='name-left'>$name1</td>"; 
        echo "<td class='heart'>❤️</td>"; 
        echo "<td class='name-right'>$name2</td>"; 
        echo "</tr>";
        echo "</table>";

        // Love score + message (below the table)
        echo "<div class='love-message'>"; 
        echo "<h1>$name1 and $name2 are $lovescore% compatible</h1>";

        if ($lovescore < 20) {
            echo "<h2>Message 1a</h2>";
            echo "<p>Message 1b</p>";
            echo "<p>Message 1c</p>";
        } elseif ($lovescore < 50) {
            echo "<h2>Message 2a</h2>";
            echo "<p>Message 2b</p>";
            echo "<p>Message 2c</p>";
        } elseif ($lovescore < 70) {
            echo "<h2>Message 3a</h2>";
            echo "<p>Message 3b</p>";
            echo "<p>Message 3c</p>";
        } else {
            echo "<h2>Message 4a</h2>";
            echo "<p>Message 4b</p>";
        }

        echo "</div>"; // Close love-message div
        echo "</div>"; // Close result-container div
    }
}
?>

</body>
</html>
