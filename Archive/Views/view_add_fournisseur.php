<?php
if ($fournisseur) {
    echo "<h2> Le fournisseur a bien été ajouté </h2>";
} else {
    echo "<h2> Le fournisseur n'a pas été ajouté </h2>";
}

echo "Pour rvenir sur la consultation des fournisseurs cliquez : <a href='?controller=fournisseur&action=all_fournisseur'> ici </a>";