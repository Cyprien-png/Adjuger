<?php
$title = "Mon compte";
ob_start();
?>

<head>
    <link href="view/css/style_lo.css" rel="stylesheet">
</head>
<br><h2>Votre compte</h2><br>
<div class="container " id="content-wrap">
    <div class="bordered center col-10 col-sm-8 col-md-8 col-lg-6">
    
    <div>
        <img src="view/content/images/user_icon.png" style="height: 70px">
    </div>


    <h5>Nom d'utilisateur : <?php echo $username; ?></h5>

    <p>E-Mail : <?php echo $email; ?></p>

    <a href="/index.php?action=logout" class="nav-item nav-link ">Déconnexion</a>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
