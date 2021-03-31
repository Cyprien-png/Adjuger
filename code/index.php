<?php

session_start();
require "controler/controler.php";

//This variabes are usefull for searching some offers.. it would filter offers by type of information (ex : Title, description, category)
$category = 2;
$all = 3;

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
            searching($_GET['search'], $category);
            break;
        case 'barSearch':
            searching($_POST['searchingBar'], $all);
            break;
        default:
            home();
    }
} else {
    home();
}
