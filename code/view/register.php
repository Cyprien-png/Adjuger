<?php
$title = "Créer un compte";
ob_start();
?>

<head>
    <link href="view/css/style_register.css" rel="stylesheet">
</head>

    

<div class="container">


    <p>*Obligatoire</p>

    <form id="frmSign" method="post" action="index.php?action=register">

        <label for="txtEmail">E-Mail* : </label>
        <input type="email" id="txtEmail" name="userInputEmail" required>

        <label for="txtUsername">Nom d'utilisateur* : </label>
        <input type="text" id="txtUsername" name="userInputUsername" required>

        <label for="txtPassword">Mot de passe* : </label>
        <input type="password" id="txtPassword" name="userInputPassword" required>

        <label for="txtPasswordRepeat">Répeter Mot de passe* : </label>
        <input type="password" id="txtPasswordRepeat" name="userInputPasswordRepeat" required>


        <input type="submit" value="S'inscrire" id="btnSubmitSign">

    </form>

    <?php if(isset($registerErr)): ?>
        <h3><?=$registerErr ?></h3>
    <?php endif; ?>

</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";



