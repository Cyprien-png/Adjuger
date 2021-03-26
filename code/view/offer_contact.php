<?php
$title = "Annonce";
ob_start();
?>

<form action="index.php?action=contactAnnouncer" method="POST">

    <!--  Maybe just put a <p> markdown-->
    <label for="txtTo">À : </label>
    <input id="txtTo" name="contactFormTo" value="<?= $offerData['email']?>" required>

    <p>Produit :<?= $offerData['title']?></p>

    <label for="txtObject">Objet : </label>
    <input id="txtObject" name="contactFormObject" required>

    <label for="txtMessage">Message : </label>
    <input id="txtMessage" name="contactFormMessage" required>

    <input type="submit" id="btnSubmit">
</form>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
