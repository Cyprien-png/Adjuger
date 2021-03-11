<?php
$title = "Créer un compte";
ob_start();
?>

<head>
    <link href="view/css/style_register.css" rel="stylesheet">
    <script type="text/javascript" src="view/js/signUp.js"></script>
</head>

<div class="container">

    <h3 class="hidden" id="txtRegisterSuccess">Inscription validée !</h3>
    <p>*Obligatoire</p>

    <form id="frmSign" method="post" action="index.php?action=register">

        <label for="txtEmail">E-Mail* : </label>
        <input type="email" id="txtEmail" name="userInputEmail" required>

        <label for="txtUsername">Nom d'utilisateur* : </label>
        <input type="text" id="txtUsername" name="userInputUsername" required>

        <label for="txtPassword">Mot de passe* : </label>
        <input type="text" id="txtPassword" name="userInputPassword" required>

        <label for="txtPasswordRepeat">Mot de passe* : </label>
        <input type="text" id="txtPasswordRepeat" name="userInputPasswordRepeat" required>


        <input type="submit" value="S'inscrire" id="btnSubmitSign">

    </form>

</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";



