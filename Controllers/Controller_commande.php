<?php

class Controller_commande extends Controller
{

    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render("home");
    }

    public function action_all_commande()
    {
        $m = Model::get_model();
        $data = ["commande" => $m->get_all_commande()];
        $this->render("all_commande", $data);
    }

    public function action_all_cediteur()
    {
        $m = Model::get_model();
        $data = ["editeur" => $m->get_all_cediteur()];
        $this->render("all_editeur", $data);
    }

    public function action_all_commande_editeur()
    {
        $editeur = $_POST['editeur'];
        $m = Model::get_model();
        $data = ["cbyediteur" => $m->get_all_commande_editeur($editeur)];
        $this->render("all_commande_editeur", $data);
    }

    public function action_all_fournisseur()
    {
        $m = Model::get_model();
        $data = ["rsociale" => $m->get_all_rsociale()];
        $this->render("all_cfournisseur", $data);
    }

    public function action_all_commande_fournisseur()
    {
        $rsociale = $_POST['rsociale'];
        $m = Model::get_model();
        $data = ["cbyrsociale" => $m->get_all_commande_fournisseur($rsociale)];
        $this->render("all_commande_fournisseur", $data);
    }


    public function action_all_date()
    {
        $m = Model::get_model();
        $data = ["cde_date" => $m->get_all_date()];
        $this->render("all_date", $data);
    }

    public function action_all_commande_date()
    {
        $cde_date = $_POST['cde_date'];
        $m = Model::get_model();
        $data = ["cde_date" => $m->get_all_commande_date($cde_date)];
        $this->render("all_commande_date", $data);
    }

}
