<?php
$title = "Annonce";
ob_start();
$i = 0;
?>



    <!-- Maybe change this into an item carousel ?-->
<!--    <img alt="image de l'annonce" src=//= $offerData['image'] ?>-->

    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <?php foreach($offerData['images'] as $image) : $i++?>
            <?php if($i == 1) :?>
                <div class="carousel-item active">
            <?php else: ?>
                <div class="carousel-item">
            <?php endif; ?>
                <img class="d-block img-fluid" src='<?= $image ?>' alt="Slide <?= $i?>">
            </div>

            <?php endforeach; ?>
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <!--Make those buttons round-->
<!--    <button id="btnSwitchLeft"><</button>-->
<!--    <button id="btnSwitchRight">></button>-->
    <!--/Make those buttons round-->

    <h5><?= $offerData['title'] ?></h5>

    <p>Prix : <?= $offerData['price'] ?> CHF</p>

    <!-- Big description text area-->
    <p><?= $offerData['description'] ?></p>
    <!--/ Big description text area-->

    <p>Annonceur : <?= $offerData['email'] ?></p>
    <p>Catégorie : <?= $offerData['category'] ?></p>
    <p>Ajouté le : <?= $offerData['date'] ?></p>

    <a href="index.php?action=contactAnnouncer&offerId=<?= $offerData['id'] ?>"><button>Contacter</button></a>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
