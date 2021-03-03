<?php

function home() {
    require "view/home.php";
}

function register($userData) {
    require_once "model/userManager.php";
    if(isset($userData['userInputEmail'])) {
        registerInDatabase($userData);
        //require "view/register.php";
    }
    else {
        require "view/register.php";
    }
}



