<?php

namespace classes;


class Autenticacion
{

    public function logIn(string $email, string $password) {

        try {
            $user = (new \classes\Usuario())->getUsuarioDelMail($email);
            if (!$user) return false;
            $loggedIn = ($user->getPassword() == $password);
            $_SESSION["loggedIn"] = $loggedIn;
            return $loggedIn;
        } catch (Exception $e) {
            echo e->getMessage();
        }
        return false;
    }

    public function checkLogin() {

        return true;//isset($_SESSION["loggedIn"]);
    }

}