<?php
$title = "Créer un compte";
ob_start();
?>

<head>
    <link href="view/content/css/style_register.css" rel="stylesheet">
    <script type="text/javascript" src="view/content/js/signUp.js"></script>
</head>

<div class="container">

    <h3 class="hidden" id="txtRegisterSuccess">Inscription validée !</h3>
    <p>*Obligatoire</p>

    <form id="frmSign">

        <label for="txtEmail">E-Mail* : </label>
        <input type="email" id="txtEmail" name="registerEmail" required>

        <label for="txtUsername">Nom d'utilisateur* : </label>
        <input type="text" id="txtUsername" name="registerUsername" required>

        <label for="txtPassword">Mot de passe* : </label>
        <input type="text" id="txtPassword" name="registerPassword" required>

        <label for="txtLastname">Nom* : </label>
        <input type="text" id="txtLastname" name="registerLastname" required>

        <label for="txtFirstname">Prénom* : </label>
        <input type="text" id="txtFirstname" name="registerFirstname" required>

        <label for="dteBirth">Date de naissance : </label>
        <input type="date" id="dteBirth" name="registerDate">

        <label for="txtPhoneNumber">N° de téléphone : </label>
        <input type="text" id="txtPhoneNumber" name="registerPhoneNumber" required>

        <input type="submit" value="S'inscrire" id="btnSubmitSign">

    </form>

</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";



