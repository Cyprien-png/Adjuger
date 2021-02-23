<?php

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
//        case 'register':
//            register($_POST);
//            break;
//        case 'login':
//            login($_POST);
//            break;
        default:
            home();
    }
} else {
    home();
}

