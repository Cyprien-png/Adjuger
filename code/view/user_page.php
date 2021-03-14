<?php
$title = "Mon compte";
ob_start();
?>

    <head>
        <link href="view/css/style_lo.css" rel="stylesheet">
    </head>

    <a href="/index.php?action=logout" class="nav-item nav-link ">Déconnexion</a>



<?php
$content = ob_get_clean();
require "view/gabarit.php";