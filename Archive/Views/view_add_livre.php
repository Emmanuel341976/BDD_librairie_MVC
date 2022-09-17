<?php
if ($livre) {
    echo "<h2> Le livre a bien été ajouté </h2>";
} else {
    echo "<h2> Le livre n'a pas été ajouté </h2>";
}

echo "Pour rvenir sur la consultation des livres cliquez : <a href='?controller=livre&action=all_livre'> ici </a>";
