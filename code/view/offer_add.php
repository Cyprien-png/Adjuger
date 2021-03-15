<?php
$title = "Se connecter";
ob_start();
?>

    <head>
<!--        <link href="view/css/style_lo.css" rel="stylesheet">-->
    </head>

    <form id="frmAddOffer" method="post" action="index.php?action=login">

        <label for="txtOfferTitle">Titre : </label>
        <input type="text" id="OfferTitle" name="offerTitle" required>

        <label for="txtPrice">Mot de passe* : </label>
        <input type="number" id="txtPrice" name="offerPrice" required>

        <label for="txtDescription">Description : </label>
        <textarea id="txtDescription" name="offerDescription"></textarea>

        <input type="submit" value="Se connecter" id="btnSubmitSign">

    </form>



<?php
$content = ob_get_clean();
require "view/gabarit.php";