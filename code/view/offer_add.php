<?php
$title = "Se connecter";
ob_start();
?>

    <head>
        <link rel="stylesheet" href="view/css/style_add-offer.css" >
    </head>

    <form id="frmAddOffer" method="post" action="index.php?action=login">

        <label for="txtOfferTitle">Titre : </label>
        <input type="text" id="OfferTitle" name="offerTitle" required>
        <br><br>
        <label for="txtPrice">Price : </label>
        <input type="number" id="txtPrice" name="offerPrice" required>
        <br><br>
        <label for="txtDescription">Description : </label>
        <textarea id="txtDescription" name="offerDescription"></textarea>
        <br><br>
        <label for="fileImage">Image : </label>
        <input type="file" id="fileImage" name="offerImage" placeholder="Image (PGN, JPG)" multiple="multiple6">
        <br><br>
        <label for="txtTags">Catégories : </label>
        <input type="text" id="txtTags" name="offerTags">
        <br><br>
        <input type="submit" value="Poster l'annonce" id="btnSubmitSign">


    </form>



<?php
$content = ob_get_clean();
require "view/gabarit.php";