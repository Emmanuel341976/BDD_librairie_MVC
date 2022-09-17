<?php

if ($user) {
    echo "<h2> Merci de vous être inscrit </h2>";
} else {
    echo "<h2> L'inscription a échoué </h2>";
}

echo "Pour revenir à la page de connexion, cliquez : <a href='?controller=signin&action=all_signin'> ici </a>";
