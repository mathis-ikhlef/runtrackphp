<?php
if (!empty($_POST)) {
    echo  "<table> <thead>";
    foreach ($_POST as $param => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($param) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }
    echo "</thead> </table>";

} else {
    echo "<tr><td colspan='2'>Aucun paramètre POST n'a été passé.</td></tr>";
}
?>
