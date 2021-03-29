<?php
$title = "Modifier une offre";
ob_start();
?>

    <head>
        <link rel="stylesheet" href="view/css/style_add-offer.css">

        <script src="view/js/limitChar.js"></script>
        <script > //src="view/js/SearchCategory.js"
            $( document ).ready(function() {
                var category = <?php echo $oldData['category']?>;
                console.write(category);
                var options = $('cmbCategory').options;
                console.write(options);
                options.forEach(option => {
                    if(option.value == category.value) {
                        options.selectedIndex = category.value;
                    }

                })
            });
        </script>
    </head>
    <div class="title bodyContent " id="content-wrap">
        <br>
        <h2>Modifier une offre</h2>
        <div class="list-group bordered center col-10 col-sm-8 col-md-8 col-lg-6">
            <form id="frmAddOffer" method="post" action="index.php?action=modifyOffer" enctype="multipart/form-data">
                <table>
                    <div class="container">
                        <br>
                        <tr>
                            <td><label for="txtOfferTitle">Titre : </label></td>
                        </tr>
                        <tr>
                            <td> <input type="text" id="OfferTitle" name="offerTitle" value="<?= $oldData['title'] ?>" required><br></td>
                        </tr>
                        <tr>
                            <td><label for="txtPrice">Prix : </label></td>
                        </tr>
                        <tr>
                            <td><input type="number" id="txtPrice" name="offerPrice" value="<?= $oldData['price'] ?>" required><br></td>
                        </tr>
                        <tr>
                            <td><label for="txtDescription">Description : </label></td>
                        </tr>
                        <tr>
                            <td><textarea id="txtDescription" name="offerDescription" ><?= $oldData['description'] ?></textarea>
                                <div id="the-count_description" style="">
                                    <span id="current_description">0</span>
                                    <span id="maximum_description"> / 500</span></td></td></td>
                        </tr>
                        <tr>
                            <td><br><label for="fileImage">Image(s) : </label></td>
                        </tr>
                        <tr>
                            <td><input type="file" id="fileImage" name="offerImage[]" placeholder="Image (JPG, PNG)" multiple="multiple" required></td>
                        </tr>

                        <tr>
                            <td><br><label for="cmbType">Type : </label><br></td>
                        </tr>
                        <tr>
                            <td><select name="offerType" id="cmbType">
                                    <?php if($oldData['type'] == "product") :?>
                                    <option value="product" selected>Produit</option>
                                    <option value="service">Service</option>
                                    <?php else :?>
                                    <option value="product">Produit</option>
                                    <option value="service" selected>Service</option>
                                    <?php endif;?>
                                </select></td>
                        </tr>

                        <tr>
                            <td><br><label for="cmbCategory">Catégorie : </label><br></td>
                        </tr>
                        <tr>
                            <td><select name="offerCategory" id="cmbCategory">
                            <option value="Electronique" selected>Éléctronique</option>
                            <option value="Mobiler">Mobiler</option>
                            <option value="Vehicule">Véhicule</option>
                            <option value="Jardin">Jardin</option>
                            <option value="Habits">Habits</option>
                            <option value="Jeux">Jeux</option>
                            <option value="Livres">Livres</option>
                            <option value="Maison">Maison</option>
                            <option value="Photo">Photo</option>
                            <option value="Autre">Autre</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td id="right"><br><br><input class="nav-item nav-link active" type="submit" value="Poster l'annonce" id="btnSubmitSign"></td>
                        </tr>
                    </div>
                </table>

                <?php if(isset($OfferErr)) :?>
                    <p>Problème d'ajout</p>
                <?php endif;?>

            </form>
        </div>
    </div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
