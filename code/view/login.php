<?php
$title = "Se connecter";
ob_start();
?>

<head>
    <link href="view/css/style_lo.css" rel="stylesheet">
</head>

<div class="container title bodyContent " id="content-wrap">
    <br><h2>Connexion</h2>
        <div class="list-group bordered center col-10 col-sm-8 col-md-8 col-lg-6">

            <form id="frmLogin" method="post" action="index.php?action=login">
                <table>
                    <br>
                    <tr>
                        <td><label for="txtAuth"> Nom d'utilisateur / E-Mail : </label></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="txtAuth" name="userInputAuth" required><br></td>
                    </tr>
                    <tr>
                        <td><label for="txtPassword">Mot de passe* : </label></td>
                    </tr>
                    <tr>
                        <td><input type="password" id="txtPassword" name="userInputPassword" required><br><br></td>
                    </tr>
                    <tr>
                    <td><br><input type="submit" value="Se connecter" id="btnSubmitSign"></td>
                    </tr>
                </table>

            </form>
        <?php if (isset($loginErr)) : ?>
            <p style="color:red;"><?= $loginErr ?></p>
        <?php endif; ?>
        <br><br>
        <p>Pas de compte ? <a href="index.php?action=register">S'inscrire</a></p>
    </div>
</div>

<?php
$content = ob_get_clean();
require "view/gabarit.php";
