<?php
// Vérifie si la méthode utilisée est POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Création de la table
    echo "<table>";
    echo "<tr><th>Nom</th><th>Valeur</th></tr>";

    // Parcours des arguments POST
    foreach ($_POST as $key => $value) {
        // Affichage de chaque argument et sa valeur dans une nouvelle ligne
        echo "<tr><td>". htmlspecialchars($key). "</td><td>". htmlspecialchars($value). "</td></tr>";
    }

    echo "</table>";

} else {
    // Message s'il n'y a pas de requête POST
    echo "Aucune donnée POST reçue.";
}
?>