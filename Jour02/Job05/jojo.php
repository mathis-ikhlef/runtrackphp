<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Valeur</th></tr>";

    foreach ($_POST as $key => $value) {

        echo "<tr><td>" . htmlspecialchars($key) . "</td><td>" . htmlspecialchars($value) . "</td></tr>";
    }

    echo "</table>";

    if (isset($_POST['username'])) {
        $number = (int)$_POST['username'];
        if ($number % 2 == 0) {
            echo "<p>Nombre pair</p>";
        } else {
            echo "<p>Nombre impair</p>";
        }
    }
} else {
    echo "Aucune donnée POST reçue.";
}
?>
