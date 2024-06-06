<?php
// Vérifie si la requête est une méthode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Compte le nombre d'arguments
    $num_arguments = count($_POST);
    // Affiche le nombre d'arguments
    echo "Nombre d'arguments POST reçus: " . $num_arguments . "<br>";

    foreach ($_POST as $key => $value) {
        echo htmlspecialchars($key) . ": " . htmlspecialchars($value) . "<br>";
    }
} else {
    echo "Aucun argument POST reçu.";
}
?>
