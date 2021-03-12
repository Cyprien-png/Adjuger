<?php

function home() {
    require "view/home.php";
}

function register($userData) {
    require_once "model/userManager.php";
    if(isset($userData['userInputEmail'])) {
        $registerResult = registerInDatabase($userData);

        switch($registerResult) {
            case 0:
                $registerErr = "Une erreur est survenue.";
                break;
            case 3:
                $registerErr = "L'e-mail ou le nom d'utilisateur est déja connu.";
                break;
            case 2:
                $registerErr = "Les mots de passe ne correspondent pas.";
                break;
            default:
                break;
        }

        if(isset($registerErr)) {
            require "view/register.php";
        }
        else {
            require "view/home.php";
        }

    }
    else {
        require "view/register.php";
    }

}

function login($userData) {
    require_once "model/userManager.php";
    if(isset($userData['userInputAuth'])) {
        if(checkLogin($userData)) {
            require "view/home.php";
        }
        else {
            require "view/login.php";
        }

    }
    else {
        require "view/login.php";
    }

}



