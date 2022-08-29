<?php

class Controller_livre extends Controller
{

    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    public function action_all_livre()
    {
        $m = Model::get_model();
        $data = ["livre" => $m->get_all_livres()];
        $this->render("all_livre", $data);
    }

    public function action_all_titre()
    {
        $m = Model::get_model();
        $data = ["titre" => $m->get_all_titres()];
        $this->render("all_titre", $data);
    }

    public function action_one_titre()
    {
        $variable = $_POST['titre'];
        $m = Model::get_model();
        $data = ["livre" => $m->get_one_titre($variable)];
        $this->render("all_livre", $data);
    }

    public function action_all_auteur()
    {
        $m = Model::get_model();
        $data = ["auteur" => $m->get_all_auteur()];
        $this->render("all_auteur", $data);
    }

    public function action_all_livre_auteur()
    {
        $tabAuteur = explode(" ", $_POST['auteur']);
        $m = Model::get_model();
        $data = ["livre" => $m->get_all_livre_auteur($tabAuteur)];
        $this->render("all_livre", $data);
    }

    public function action_all_editeur()
    {
        $m = Model::get_model();
        $data = ["editeur" => $m->get_all_cediteur()];
        $this->render("all_livre_editeur", $data);
    }

    public function action_all_livre_editeur()
    {
        $editeur = $_POST['editeur'];
        $m = Model::get_model();
        $data = ["livre" => $m->get_all_livre_editeur($editeur)];
        $this->render("all_livre", $data);
    }

    public function action_saisie_livre()
    {
        $this->render("saisie_livre");
    }

    public function action_add_livre()
    {
        $saisie_livre = [
            $_POST['ISBN'],
            $_POST['Titre_livre'],
            $_POST['Theme_livre'],
            $_POST['Nbr_pages_livre'],
            $_POST['Format_livre'],
            $_POST['Nom_auteur'],
            $_POST['Prenom_auteur'],
            $_POST['Editeur'],
            $_POST['Annee_edition'],
            $_POST['Prix_Vente'],
            $_POST['Langue_livre']
        ];
        $m = Model::get_model();
        $data = ["livre" => $m->get_add_livre($saisie_livre)];

        $this->render("add_livre", $data);
    }
}
