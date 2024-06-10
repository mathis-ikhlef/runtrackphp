<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largeur = ($_POST['largeur']);
        $hauteur = ($_POST['hauteur']);

        if ($largeur > 0 && $hauteur > 0 && $largeur % 2 == 0) {
            echo "<pre>";
            // Toit de la maison
            for ($i = 0; $i < $largeur / 2; $i++) {
                echo str_repeat(' ', ($largeur / 2) - $i - 1);
                echo '/';
                echo str_repeat('_', $i * 2);
                echo "\\\n";
            }
            // Murs de la maison
            for ($i = 0; $i < $hauteur - 1; $i++) {
                echo '|';
                echo str_repeat(' ', $largeur - 2);
                echo "|\n";
            }
            // Base de la maison
            echo '|';
            echo str_repeat('_', $largeur - 2);
            echo '|';
            echo "\n";
            echo "</pre>";
        }
    }
    ?>