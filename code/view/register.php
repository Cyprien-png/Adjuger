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

        <label for="txtLastname">Nom* : </label>
        <input type="text" id="txtLastname" name="userInputLastname" required>

        <label for="txtFirstname">Prénom* : </label>
        <input type="text" id="txtFirstname" name="userInputFirstname" required>

        <label for="dteBirth">Date de naissance : </label>
        <input type="date" id="dteBirth" name="userInputDate">

        <label for="txtPhoneNumber">N° de téléphone* : </label>
        <input type="text" id="txtPhoneNumber" name="userInputPhoneNumber" required>

        <input type="submit" value="S'inscrire" id="btnSubmitSign">

    </form>

</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";



