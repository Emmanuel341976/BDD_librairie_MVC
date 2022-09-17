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


    public function get_add_user($saisie_user)
    {
        // Stocker l'utilisateur dans la base de donnée crypter le mot de passe

        $SIDPW = password_hash($saisie_user[3], PASSWORD_BCRYPT, ['cost' => 8]);

        $requete = $this->bd->prepare("INSERT INTO Users (User_mail, User_first_name, User_last_name, Sid_password) VALUES (:User_mail, :User_first_name, :User_last_name, :Sid_password)");

        $requete->bindValue(':User_mail', $saisie_user[0]);
        $requete->bindValue(':User_first_name', $saisie_user[1]);
        $requete->bindValue(':User_last_name', $saisie_user[2]);
        $requete->bindValue(':Sid_password', $SIDPW);
        $r = $requete->execute();
        return $r;
    }

    public function get_connexion($signin)
    {
    
        $requete = $this->bd->prepare("SELECT * FROM Users WHERE User_mail = :User_mail");

        $requete->bindValue(':User_mail', $signin[0]);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

}
