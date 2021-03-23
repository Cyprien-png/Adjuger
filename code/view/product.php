<?php
$title = "Annonce";
ob_start();
?>

    <!-- Maybe change this into an item carousel -->
    <img alt="image de l'annonce" src=<?= $offerData['images'][0] ?>>
    <!--Make those buttons round-->
    <button id="btnSwitchLeft"><</button>
    <button id="btnSwitchRight">></button>
    <!--Make those buttons round-->

    <h5><?= $offerData['title'] ?></h5>

    <p>Prix : <?= $offerData['price'] ?> CHF</p>

    <!-- Big description text area-->
    <p><?= $offerData['description'] ?></p>
    <!-- Big description text area-->

    <p>Annonceur : <?= $offerData['email'] ?></p>
    <p>Catégorie : <?= $offerData['category'] ?></p>
    <p>Ajouté le : <?= $offerData['date'] ?></p>

    <a href="index.php?action=contactVendor?offerId=<?= $offerData['id'] ?>"><button>Contacter</button></a>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
