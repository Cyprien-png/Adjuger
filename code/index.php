<?php

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'user':
            showUser();
            break;
        case 'register':
            register($_POST);
            break;
        case 'login':
            login($_POST);
            break;
        case 'logout':
            logout();
            break;
        case 'addOffer':
            addOffer($_POST, $_FILES);
            break;
        case 'deleteOffer':
            deleteOffer($_GET['id']);
            break;
        case 'modifyOffer':
            modifyOffer($_POST, $_GET['id']);
            break;
        case 'showProduct':
            showProduct($_GET['id']);
            break;
        case 'contactAnnouncer':
            contactAnnouncer($_POST, $_GET['offerId']);
            break;
        case 'viewMore':
            viewMore($_GET['max']);
            break;
        default:
            home();
    }
} else {
    home();
}

