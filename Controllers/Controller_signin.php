<?php

class Controller_signin extends Controller
{
    public function action_default()
    {
        $this->action_signin();
    }

    public function action_signin()
    {
        $this->render("signin");
    }

    public function action_connect()
    {

        $signin = [
            $_POST['User_signin_mail'],
            $_POST['User_signin_password']
        ];
        
        $m = Model::get_model();
        $data = ["signin" => $m -> get_connexion($signin)];

        // echo  '<pre>' . print_r($data , true). '</pre>';
        // echo  '<pre>' . print_r($signin , true). '</pre>';
        // echo  '<pre>' . print_r($data["signin"]["Sid_password"], true). '</pre>';

        if (password_verify($signin[1], $data["signin"]["Sid_password"]) && $data["signin"]['Is_admin'] = 0 ) {
            header('location: Administrateur/index.php');
        }
        else {
            if (password_verify($signin[1], $data["signin"]["Sid_password"]) && $data["signin"]["Is_admin"] = 1 ) {
                header('location: Utilisateur/index.php');
            }
            else {
                echo  '<pre>' . print_r($data["signin"]["Sid_password"], true). '</pre>';
        }
        }
        

    }

}
