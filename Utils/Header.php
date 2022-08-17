<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center" id="titre">
                La petite librairie
            </div>
        </div>
        <ul class="nav justify-content-center nav-pills" id="menu">
            <li class="nav-item dropdown">
                <a class="nav-link" href="?controller=home&action=home">Accueil</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Livres
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=livre&action=all_livre">Tous les livres</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_titre">Par titre</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_auteur">Par auteur</a>
                    <a class="dropdown-item" href="?controller=livre&action=all_editeur">Par éditeur</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Fournisseurs
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_fournisseur">Tous les fournisseurs</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_rsociale">Par raison sociale</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_localite">Par localité</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=all_pays">Par pays</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Commandes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=commande&action=all_commande">Toutes les commandes</a>
                    <a class="dropdown-item" href="?controller=commande&action=all_cediteur">Par éditeur</a>
                    <a class="dropdown-item" href="?controller=commande&action=all_fournisseur">Par fournisseur</a>
                    <a class="dropdown-item" href="?controller=commande&action=all_date">Par date</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Saisies
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="?controller=livre&action=saisie_livre">Ajouter un livre</a>
                    <a class="dropdown-item" href="?controller=fournisseur&action=add_fournisseur">Ajouter un fournisseur</a>
                    <a class="dropdown-item" href="?controller=commande&action=add_commande">Ajouter une commande</a>
                </div>
            </li>
        </ul>
    </div>
</header>