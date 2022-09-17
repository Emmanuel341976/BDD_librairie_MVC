<?php
if ($commande) {
    echo "<h2> La commande a bien été ajoutée </h2>";
} else {
    echo "<h2> La commande n'a pas été ajoutée </h2>";
}

echo "Pour rvenir sur la consultation des commandes cliquez : <a href='?controller=commande&action=all_commande'> ici </a>";
