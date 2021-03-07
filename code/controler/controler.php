<?php

function home() {
    require "view/home.php";
}

function register($userData) {
    require_once "model/userManager.php";
    if(isset($userData['userInputEmail'])) {
        registerInDatabase($userData);
        require "view/home.php";
    }
    else {
        require "view/register.php";
    }
}

function login($userData) {
    require_once "model/userManager.php";
    if(isset($userData['userInputAuth'])) {
        checkLogin($userData);
        require "view/login.php";
    }
    else {
        require "view/login.php";
    }

}



