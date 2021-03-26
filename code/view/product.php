<?php
$title = "Annonce";
ob_start();
?>

<head>
    <link href="css/style_products.css" rel="styles heet">
</head>

<div class="container" id="content-wrap">
    <table>
        <td>
            <div id="carouselExampleIndicators" class="carousel slide my-4 img-fluid" style="max-width:600px; height: 500px"  data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach($offerData['images'] as $image) : $j++?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?=$j?>"
                    <?php if($j == 1) :?>
                        class="active"></li>
                    <?php else: ?>
                        ></li>
                    <?php endif; ?>
                <?php $j++; endforeach; ?>
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

                <?php if($i>1) :?>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                <?php endif;?>

            </div>
        </td>

        <td>
            <div id="text-content">
                <h1><?= $offerData['title'] ?></h1>

                <p>Prix : <?= $offerData['price'] ?> CHF</p>

                <!-- Big description text area-->
                <p><?= $offerData['description'] ?></p>
                <!--/ Big description text area-->

                <p>Annonceur : <?= $offerData['email'] ?></p>
                <p>Type : <?= $offerData['type'] ?></p>
                <p>Catégorie : <?= $offerData['category'] ?></p>
                <p>Ajouté le : <?= $offerData['date'] ?></p>

                <a href="index.php?action=contactAnnouncer&offerId=<?= $offerData['id'] ?>"><button>Contacter</button></a>
            </div>
        </td>
    </table>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
