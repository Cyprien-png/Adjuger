<?php
$title = "Créer un compte";
ob_start();
?>

<head>
    <link href="view/css/style_register.css" rel="stylesheet">
</head>



<div class="container" id="content-wrap">

    <br>
    <h2>Register</h2>
    

    <div class="list-group bordered center col-10 col-sm-8 col-md-8 col-lg-6">
    <p id="required">*Obligatoire</p>
        <form id="frmSign" method="post" action="index.php?action=register">
            <table>
                <br>
                <tr>
                    <td><label for="txtEmail">E-Mail* : </label></td>
                </tr>
                <tr>
                    <td><input type="email" id="txtEmail" name="userInputEmail" required></td>
                </tr>
                <tr>
                    <td><label for="txtUsername">Nom d'utilisateur* : </label></td>
                </tr>
                <tr>
                    <td><input type="text" id="txtUsername" name="userInputUsername" required></td>
                </tr>
                <tr>
                    <td> <label for="txtPassword">Mot de passe* : </label></td>
                </tr>
                <tr>
                    <td><input type="password" id="txtPassword" name="userInputPassword" required></td>
                </tr>
                <tr>
                    <td> <label for="txtPasswordRepeat">Répeter Mot de passe* : </label></td>
                </tr>
                <tr>
                    <td><input type="password" id="txtPasswordRepeat" name="userInputPasswordRepeat" required></td>
                </tr>
            </table>


        <input type="submit" value="S'inscrire" id="btnSubmitSign">

        </form>

        <?php if (isset($registerErr)) : ?>
            <h3><?= $registerErr ?></h3>
        <?php endif; ?>

        <br><br>
        <p>Déja un compte ? <a href="index.php?action=register">Se connecter</a></p>

</div>
    </div>

    <?php
    $content = ob_get_clean();
    require "view/gabarit.php";
