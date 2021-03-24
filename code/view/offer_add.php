<?php
$title = "Ajouter une offre";
ob_start();
?>

<head>
    <link rel="stylesheet" href="view/css/style_add-offer.css">
</head>
<div class="title bodyContent " id="content-wrap">
    <br>
    <h2>Ajouter une offre</h2>
    <div class="list-group bordered center col-10 col-sm-8 col-md-8 col-lg-6">
        <form id="frmAddOffer" method="post" action="index.php?action=addOffer">
            <table>
                <div class="container">
                <br>
                <tr>
                    <td><label for="txtOfferTitle">Titre : </label></td>
                </tr>
                <tr>
                    <td> <input type="text" id="OfferTitle" name="offerTitle" required><br></td>
                </tr>
                <tr>
                    <td><label for="txtPrice">Price : </label></td>
                </tr>
                <tr>
                    <td><input type="number" id="txtPrice" name="offerPrice" required><br></td>
                </tr>
                <tr>
                    <td><label for="txtDescription">Description : </label></td>
                </tr>
                <tr>
                    <td><textarea id="txtDescription" name="offerDescription"></textarea></td>
                </tr>
                <tr>
                    <td><br><label for="fileImage">Image(s) : </label></td>
                </tr>
                <tr>
                    <td><input type="file" id="fileImage" name="offerImage[]" placeholder="Image (JPG, PNG)" multiple="multiple" required></td>
                </tr>
                <tr>
                    <td><br><label for="cmbCategory">Catégorie</label><br></td>
                </tr>
                <tr>
                    <td><select name="offerCategory" id="cmbCategory">
                            <option value="Electronics" selected>Éléctronique</option>
                            <option value="">Meuble</option>
                            <option value="Discrete Mathematics">Vehicule</option>
                            <option value="Discrete Mathematics">Vehicule</option>
                            <option value="Discrete Mathematics">Vehicule</option>
                            <option value="Discrete Mathematics">Vehicule</option>
                        </select></td>
                </tr>
                <tr>
                    <td id="right"><br><br><input class="nav-item nav-link active" type="submit" value="Poster l'annonce" id="btnSubmitSign"></td>
                </tr>
                </div>
            </table>
        </form>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
