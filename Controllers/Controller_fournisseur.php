<?php

class Controller_fournisseur extends Controller
{

    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    public function action_all_fournisseur()
    {
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_all_fournisseurs()];
        $this->render("all_fournisseur", $data);
    }

    public function action_all_rsociale()
    {
        $m = Model::get_model();
        $data = ["rsociale" => $m->get_all_rsociale()];
        $this->render("all_rsociale", $data);
    }

    public function action_one_rsociale()
    {
        $var = $_POST['rsociale'];
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_one_rsociale($var)];
        $this->render("all_fournisseur", $data);
    }

    public function action_all_localite()
    {
        $m = Model::get_model();
        $data = ["localite" => $m->get_all_localite()];
        $this->render("all_localite", $data);
    }

    public function action_all_fournisseur_localite()
    {
        $localite = $_POST['ville'];
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_all_fournisseur_localite($localite)];
        $this->render("all_fournisseur", $data);
    }

    public function action_all_pays()
    {
        $m = Model::get_model();
        $data = ["pays" => $m->get_all_pays()];
        $this->render("all_pays", $data);
    }

    public function action_all_fournisseur_pays()
    {
        $pays = $_POST['pays'];
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_all_fournisseur_pays($pays)];
        $this->render("all_fournisseur", $data);
    }

    public function action_saisie_fournisseur()
    {

        // $m = Model::get_model();
        // $data = ["livre" => $m->get_all_cediteur()];
        $this->render("saisie_fournisseur");
    }

    public function action_add_fournisseur()
    {
        $saisie_fournisseur = [
            $_POST['Code_fournisseur'],
            $_POST['Raison_sociale'],
            $_POST['Rue_fournisseur'],
            $_POST['Code_postal'],
            $_POST['Localite'],
            $_POST['Pays'],
            $_POST['Tel_fournisseur'],
            $_POST['Url_fournisseur'],
            $_POST['Email_fournisseur'],
            $_POST['Fax_fournisseur']
        ];
        $m = Model::get_model();
        $data = ["fournisseur" => $m->get_add_fournisseur($saisie_fournisseur)];

        $this->render("add_fournisseur", $data);
    }
}
