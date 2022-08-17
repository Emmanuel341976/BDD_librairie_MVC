<?php
class Model
{ //Début de la classe

    private $bd;
    private static $instance = null;




    private function __construct()
    {
        $login = "root";
        $mdp = "root";
        $dsn = "mysql:host=localhost; dbname=bd_Librairie";


        $this->bd = new PDO($dsn, $login, $mdp);
        $this->bd->query('SET NAMES utf8');
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function get_model()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

    public function get_all_livres()
    {
        $requete = $this->bd->prepare("SELECT * FROM Livre ORDER BY Titre_livre");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_fournisseurs()
    {
        $requete = $this->bd->prepare("SELECT * FROM Fournisseur  ORDER BY Raison_sociale");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_commande()
    {
        $requete = $this->bd->prepare("SELECT L.Titre_livre, F.Raison_sociale, C.Date_achat, C.Nbr_exemplaire, C.Prix_achat FROM Fournisseur F, Livre L, Commander C WHERE F.Id_fournisseur = C.Id_fournisseur AND L.Id_livre = C.Id_livre ORDER BY Titre_livre");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_titres()
    {
        $requete = $this->bd->prepare("SELECT distinct Titre_livre FROM Livre ORDER BY Titre_livre");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_one_titre($variable)
    {
        $requete = $this->bd->prepare("SELECT * FROM Livre WHERE Titre_livre = :titrelivre");
        $requete->bindValue(':titrelivre', $variable);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_rsociale()
    {
        $requete = $this->bd->prepare("SELECT distinct Raison_sociale FROM Fournisseur ORDER BY Raison_sociale");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_one_rsociale($var)
    {
        $requete = $this->bd->prepare("SELECT * FROM Fournisseur WHERE Raison_sociale = :rsociale");
        $requete->bindValue(':rsociale', $var);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_cediteur()
    {
        $requete = $this->bd->prepare("SELECT distinct Editeur FROM Livre ORDER BY Editeur");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_commande_editeur($editeur)
    {
        $requete = $this->bd->prepare("SELECT L.Titre_livre, L.Editeur, C.Date_achat, C.Prix_achat, C.Nbr_exemplaire FROM Commander C, Livre L WHERE L.Id_Livre=C.Id_Livre AND L.Editeur = :editeur");
        $requete->bindValue(':editeur', $editeur);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_auteur()
    {
        $requete = $this->bd->prepare("SELECT distinct Nom_auteur, Prenom_auteur FROM Livre ORDER BY Nom_auteur");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_livre_auteur($tabAuteur)
    {
        $requete = $this->bd->prepare("SELECT * FROM Livre  WHERE Nom_auteur = :nom AND Prenom_auteur = :prenom ORDER BY Titre_livre");
        $requete->bindValue(':nom', $tabAuteur[0]);
        $requete->bindValue(':prenom', $tabAuteur[1]);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_livre_editeur($editeur)
    {
        $requete = $this->bd->prepare("SELECT * FROM Livre WHERE Editeur = :editeur");
        $requete->bindValue(':editeur', $editeur);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_localite()
    {
        $requete = $this->bd->prepare("SELECT distinct Localite FROM Fournisseur ORDER BY Localite");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_fournisseur_localite($localite)
    {
        $requete = $this->bd->prepare("SELECT * FROM Fournisseur WHERE Localite = :localite");
        $requete->bindValue(':localite', $localite);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_pays()
    {
        $requete = $this->bd->prepare("SELECT distinct Pays FROM Fournisseur ORDER BY Pays");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_fournisseur_pays($pays)
    {
        $requete = $this->bd->prepare("SELECT * FROM Fournisseur WHERE Pays = :pays");
        $requete->bindValue(':pays', $pays);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_commande_fournisseur($rsociale)
    {
        $requete = $this->bd->prepare("SELECT L.Titre_livre, F.Raison_sociale, C.Date_achat, C.Prix_achat, C.Nbr_exemplaire FROM Livre L, Commander C, Fournisseur F WHERE  C.Id_Livre = L.Id_Livre AND C.Id_Fournisseur = F.Id_Fournisseur AND F.Raison_sociale = :rsociale");
        $requete->bindValue(':rsociale', $rsociale);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_date()
    {
        $requete = $this->bd->prepare("SELECT distinct Date_achat FROM Commander ORDER BY Date_achat");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_all_commande_date($cde_date)
    {
        $requete = $this->bd->prepare("SELECT L.Titre_livre, F.Raison_sociale, C.Date_achat, C.Prix_achat, C.Nbr_exemplaire FROM Livre L, Commander C, Fournisseur F WHERE  C.Id_Livre = L.Id_Livre AND C.Id_Fournisseur = F.Id_Fournisseur AND C.Date_achat = :cde_date");
        $requete->bindValue(':cde_date', $cde_date);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_add_livre($saisie_livre)
    {
        $requete = $this->bd->prepare("INSERT INTO Livre (ISBN, Titre_livre, Theme_livre, Nbr_pages_livre, Format_livre, Nom_auteur, Prenom_auteur, Editeur, Annee_edition, Prix_Vente, Langue_livre) VALUES (:ISBN, :Titre_livre, :Theme_livre, :Nbr_pages_livre, :Format_livre, :Nom_auteur, :Prenom_auteur, :Editeur, :Annee_edition, :Prix_Vente, :Langue_livre)");
        // (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        // (:ISBN, :Titre_livre, :Theme_livre, :Nbr_pages_livre, :Format_livre, :Nom_auteur, :Prenom_auteur, :Editeur, :Annee_edition, :Prix_Vente, :Langue_livre)")
        $requete->bindValue(':ISBN', $saisie_livre[0]);
        $requete->bindValue(':Titre_livre', $saisie_livre[1]);
        $requete->bindValue(':Theme_livre', $saisie_livre[2]);
        $requete->bindValue(':Nbr_pages_livre', $saisie_livre[3]);
        $requete->bindValue(':Format_livre', $saisie_livre[4]);
        $requete->bindValue(':Nom_auteur', $saisie_livre[5]);
        $requete->bindValue(':Prenom_auteur', $saisie_livre[6]);
        $requete->bindValue(':Editeur', $saisie_livre[7]);
        $requete->bindValue(':Annee_edition', $saisie_livre[8]);
        $requete->bindValue(':Prix_Vente', $saisie_livre[9]);
        $requete->bindValue(':Langue_livre', $saisie_livre[10]);
        $r = $requete->execute();
        return $r;
    }
}
