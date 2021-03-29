<?php
$title = "Annonce";
ob_start();
?>

<head>
    <link href="/view/css/style_products.css" rel="stylesheet">
</head>

<div class="container row" id="content-wrap">
    <br>


    <div class="col-lg-7 col-md-10 col-sm-12 col-12 mb-4">
        
        <div id="carouselExampleIndicators" class="carousel slide my-4 img-fluid mb-4" style="max-width:600px; height: auto" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach ($offerData['images'] as $image) : $j++ ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?= $j ?>" <?php if ($j == 1) : ?> class="active"></li>
                <?php else : ?>
                    ></li>
                <?php endif; ?>
            <?php $j++;
                endforeach; ?>
            </ol>


            <div class="carousel-inner" role="listbox">
                <?php foreach ($offerData['images'] as $image) : $i++ ?>
                    <?php if ($i == 1) : ?>
                        <div class="carousel-item active">
                        <?php else : ?>
                            <div class="carousel-item">
                            <?php endif; ?>
                            <img class="d-block img-fluid" src='<?= $image ?>' alt="Slide <?= $i ?>">
                            </div>
                        <?php endforeach; ?>
                        <br><br><br><br><br><br>
                        <div id="slide-button">
                            <?php if ($i > 1) : ?>
                                <a class="carousel-control-prev col-lg-3 col-md-6" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next col-lg-3 col-md-6" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            <?php endif; ?>
                        </div>

                        </div>


                        

            </div>
        </div>


        <div class="col-lg-5 col-md-6 mb-4" id="description">
            <div class="text-content">
                <br>
                <h1><?= $offerData['title'] ?></h1>
                <p><b>Prix :</b> <?= $offerData['price'] ?> CHF</p>
                <!-- Big description text area-->
                <p><b>Description :</b> <?= $offerData['description'] ?></p>
                <!--/ Big description text area-->
            </div>
        </div>


        <div class="text-content col-lg-4 col-md-6 mb-4">
            <p><b>Annonceur :</b> <?= $offerData['email'] ?></p>
            <p><b>Type :</b> <?= $offerData['type'] ?></p>
            <p><b>Catégorie :</b> <?= $offerData['category'] ?></p>
            <p><b>Ajouté le :</b> <?= $offerData['date'] ?></p>
        </div>

        <div class="col-lg-1 col-md-6 mb-4" id="button">
            <a id="contact-button" href="index.php?action=contactAnnouncer&offerId=<?= $offerData['id'] ?>"><button>Contacter</button></a>
        </div>



        <?php if ($offerData['email'] == @$_SESSION['email']) : ?>
            <div id="actionButtons">
                <a href="index.php?action=deleteOffer&id=<?= $offerData['id'] ?>"><button class="alert-danger">Supprimer</button></a>
                <a href="index.php?action=modifyOffer&id=<?= $offerData['id'] ?>"><button>Modifier</button></a>
            </div>
        <?php endif; ?>

    </div>

    <?php
    $content = ob_get_clean();
    require "view/gabarit.php";
