<?php

namespace classes;

require_once "Usuario.php";
require_once "Connection.php";

class Autenticacion

{
    public function logIn(string $username, string $password) {
        try{
            $miUser = (new Usuario());
            $user = $miUser->getUserByUsername($username);
            $usuer = (new Usuario())->getUserByUsername($username);

            if(!$user) return false;
            $loggedIn = ($user->getPassword() == $password);
            $_SESSION["loggedIn"] = $loggedIn;
            return $loggedIn;


        } catch (Exception $e){
            echo $e->getMessage();
            return "tiro error";
        }
        // return "lee el log in";
    }

    public function checklogin(){
        return true;
    }
}

