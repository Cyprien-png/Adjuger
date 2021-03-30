<?php

session_start();
require "controler/controler.php";
$nothing =0;

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home($nothing);
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
            modifyOffer($_POST, $_FILES, $_GET['id']);
            break;
        case 'showProduct':
            showProduct($_GET['id']);
            break;
        case 'contactAnnouncer':
            contactAnnouncer($_POST, $_GET['id']);
            break;
        case 'viewMore':
            viewMore($_GET['max']);
            break;
        case 'searching':
            searching($_GET['search']);
            break;
        default:
            home($nothing);
    }
} else {
    home($nothing);
}
