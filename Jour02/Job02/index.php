<?php
if (!empty($_GET)) {
    echo  "<table> <thead>";
    foreach ($_GET as $param => $value) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($param) . "</td>";
        echo "<td>" . htmlspecialchars($value) . "</td>";
        echo "</tr>";
    }
    echo "</thead> </table>";

} else {
    echo "<tr><td colspan='2'>Aucun paramètre GET n'a été passé.</td></tr>";
}
?>
