<?php

function home() {
    require "view/home.php";
}

function showUser() {
    require "view/user_page.php";
}

function register($userData) {
    require_once "model/userManager.php";

    if(isset($_SESSION['userLog'])) {
        require "view/home.php";
    }
    else {
        if(isset($userData['userInputEmail'])) {
            $registerResult = registerInDatabase($userData);

            switch($registerResult) {
                case 0:
                    $registerErr = "Une erreur est survenue.";
                    break;
                case 1:
                    break;
                case 2:
                    $registerErr = "Les mots de passe ne correspondent pas.";
                    break;
                case 3:
                    $registerErr = "L'e-mail ou le nom d'utilisateur est déja connu.";
                    break;
            }

            if(isset($registerErr)) {
                require "view/register.php";
            }
            else {
                createSession(1);
                require "view/home.php";

            }

        }
        else {
            require "view/register.php";
        }
    }


}

function login($userData) {
    require_once "model/userManager.php";

    // Redirects the user to the home page if he's already logged in
    if(isset($_SESSION['userLog'])) {
        require "view/home.php";
    }
    else {
        if(isset($userData['userInputAuth'])) {
            $check = checkLogin($userData);
            switch($check) {
                case 0:
                    $loginErr = "Problème de connexion !";
                    break;
                case 2:
                    $loginErr = "Informations incorrectes !";
                    break;
                default:
                    break;
            }

            if(isset($loginErr)) {
                require "view/login.php";
            }
            else {
                createSession(1);
                require "view/home.php";

            }

        }
        else {
            require "view/login.php";
        }
    }

}

function logout() {
    unset($_SESSION['userLog']);
    home();
}

function createSession($userLog) {
    $_SESSION['userLog'] = $userLog;
}



