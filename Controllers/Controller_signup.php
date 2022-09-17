<?php

class Controller_signup extends Controller
{

    public function action_default()
    {
        $this->action_signin();
    }

    public function action_signin()
    {
        $this->render("signin");
    }

    public function action_register()
    {
        $this->render("signup");
    }

    public function action_add_user()
    {
        $saisie_user = [
            $_POST['User_mail'],
            $_POST['User_first_name'],
            $_POST['User_last_name'],
            $_POST['User_password']

        ];
        $m = Model::get_model();
        $data = ["user" => $m->get_add_user($saisie_user)];

        $this->render("add_user", $data);
    }
}
