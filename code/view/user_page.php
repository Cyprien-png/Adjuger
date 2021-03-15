<?php
$title = "Mon compte";
ob_start();
?>

    <head>
        <link href="view/css/style_lo.css" rel="stylesheet">
    </head>


    <img src="view/content/images/user_icon.png" style="height: 70px">

    <h5>Nom d'utilisateur : <?php echo $username; ?></h5>

    <p>E-Mail : <?php echo $email; ?></p>

    <a href="/index.php?action=logout" class="nav-item nav-link ">Déconnexion</a>



<?php
$content = ob_get_clean();
require "view/gabarit.php";