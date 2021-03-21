<?php
$title = "Ajouter une offre";
ob_start();
?>

    <head>
        <link rel="stylesheet" href="view/css/style_add-offer.css" >
    </head>

    <form id="frmAddOffer" method="post" action="index.php?action=addOffer">

        <label for="txtOfferTitle">Titre : </label>
        <input type="text" id="OfferTitle" name="offerTitle" required>
        <br><br>
        <label for="txtPrice">Price : </label>
        <input type="number" id="txtPrice" name="offerPrice" required>
        <br><br>
        <label for="txtDescription">Description : </label>
        <textarea id="txtDescription" name="offerDescription"></textarea>
        <br><br>

        <label for="fileImage">Image(s) : </label>
        <input type="file" id="fileImage" name="offerImage" placeholder="Image (JPG, PNG)" multiple="multiple" required>

        <br><br>
        <label for="cmbCategory" >Catégorie</label>
        <select name="offerCategory" id="cmbCategory">
            <option value = "Electronics" selected>Éléctronique</option>
            <option value = "">Meuble</option>
            <option value = "Discrete Mathematics">Vehicule</option>
            <option value = "Discrete Mathematics">Vehicule</option>
            <option value = "Discrete Mathematics">Vehicule</option>
            <option value = "Discrete Mathematics">Vehicule</option>
        </select>

        <br><br>
        <input type="submit" value="Poster l'annonce" id="btnSubmitSign">


    </form>



<?php
$content = ob_get_clean();
require "view/gabarit.php";