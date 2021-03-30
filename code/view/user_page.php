<?php
$title = "Mon compte";
ob_start();
?>

<head>
    <link href="view/css/style_lo.css" rel="stylesheet">
</head>
<br>
<h2>Votre compte</h2><br>
<div class="container " id="content-wrap">
    <div class="bordered center col-10 col-sm-8 col-md-8 col-lg-6">

        <div>
            <img src="view/content/images/user_icon.png" style="height: 70px">
        </div>


        <h5>Nom d'utilisateur : <?php echo $username; ?></h5>

        <p>E-Mail : <?php echo $email; ?></p>

        <a href="/index.php?action=logout" class="nav-item nav-link ">Déconnexion</a>
    </div>
    <br>

    <div class="container center col-8 col-sm-8 col-md-8 col-lg-10">
    <h2>Vos annonces</h2><br>
    <div class="row">

        <?php foreach ($items as $row):?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="index.php?action=showProduct&id=<?= $row->id ?>"><img class="card-img-top" src="<?= $row->images[0] ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="index.php?action=showProduct&id=<?= $row->id ?>" class="homeItems"><?= htmlspecialchars($row->title) ?></a>
                        </h4>
                        <h5><?= $row->price ?> CHF</h5>
                        <p class="card-text"><?= htmlspecialchars($row->description) ?></p>
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>

</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
