<?php

function home() {
    require_once "model/offerManager.php";
    $count = 0;
    $items = showOffers();
    require "view/home.php";
}

// <editor-fold desc="Users" >
function showUser() {
    require_once "model/userManager.php";
    if(isset($_SESSION['userLog'])) {

        $data = getUserFromId($_SESSION['userID']);
        $username = $data['username'];
        $email = $data['email'];

        require "view/user_page.php";
    }
    else {
        home();
    }
}

function register($userData) {
    require_once "model/userManager.php";

    if(isset($_SESSION['userLog'])) {
        home();
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
                home();

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
        home();
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
                home();
                //require "view/home.php";

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
// </editor-fold>

// <editor-fold desc="Offers" >
function addOffer($offerData) {
    require_once "model/offerManager.php";
    if(!isset($_SESSION['userLog'])) {
        home();
    }
    else {
        if(isset($offerData['offerTitle']) ) {
            addOfferDB($offerData, $_FILES['offerImage']);
            home();
        }
        else {
            require "view/offer_add.php";
        }
    }

}


// </editor-fold >

// <editor-fold desc="Session" >
function createSession($userLog) {
    $_SESSION['userLog'] = $userLog;
}
// </editor-fold >





