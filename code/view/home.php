<?php
$title = "Accueil";
ob_start();
?>

<head>
    <link href="css/style_homepage.css" rel="styles heet">
</head>

<div class="container" id="content-wrap">
    <div class="row" id="page">

        <div class="col-lg-3">

            <div class="list-group">

            <a href="index.php?action=searching&search=cuisine" class="list-group-item">Cuisine</a>
            <a href="index.php?action=searching&search=Electronique" class="list-group-item">Électronique</a>
            <a href="index.php?action=searching&search=Habits" class="list-group-item">Habits</a>
            <a href="index.php?action=searching&search=Jardin" class="list-group-item">Jardin</a>
            <a href="index.php?action=searching&search=Jeux" class="list-group-item">Jeux</a>
            <a href="index.php?action=searching&search=Livres" class="list-group-item">Livres</a>
            <a href="index.php?action=searching&search=Maison" class="list-group-item">Maison</a>
            <a href="index.php?action=searching&search=Photo" class="list-group-item">Photo</a>
            <a href="index.php?action=searching&search=Mobiler" class="list-group-item">Mobiler</a>
            <a href="index.php?action=searching&search=Vehicule" class="list-group-item">Vehicule</a>
            <a href="index.php?action=searching&search=Autre" class="list-group-item">Autre</a>
            </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="view\content\images\Slogan1.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="view\content\images\Slogan2.png" alt="Second slide">
                    </div>-
                    <div class="carousel-item">
                        <img class="img-fluid" src="view\content\images\Slogan3.png" alt="Third slide">
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
 
            <div class="row">

            <?php foreach ($items as $row): $count++; ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="index.php?action=showProduct&id=<?= $row->id ?>"><img class="card-img-top" src="<?=htmlspecialchars($row->images[0]) ?>" alt="" ></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="index.php?action=showProduct&id=<?= $row->id ?>" class="homeItems"><?=htmlspecialchars($row->title)?></a>
                                </h4>
                                <h5><?= htmlspecialchars($row->price)?> CHF</h5>
                                <p class="card-text"><?= htmlspecialchars($row->description) ?></p>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                <?php if($count==$max)break; ?>
            <?php endforeach; ?>
            <a href="index.php?action=viewMore&max=<?=$max?>" class=" container"><button id="btnPlus" class="button-style btn btn-outline-success nav-item nav-link">Afficher plus</button></a>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


<?php
$content = ob_get_clean();
require "view/gabarit.php";
