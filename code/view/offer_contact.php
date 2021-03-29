<?php
$title = "Annonce";
ob_start();
?>

<div class="container" id="content-wrap">
    <br><br><br>
    <div class="bordered center col-10 col-sm-8 col-md-8 col-lg-6">
        <div>
            <form action="index.php?action=contactAnnouncer" method="POST">

                <!--  Maybe just put a <p> markdown-->
                <label for="txtTo"><b>À :</b> </label>
                <input id="txtTo" name="contactFormTo" value="<?=htmlspecialchars($offerData['email'])?>" required>

                <p><br><b>Produit :</b><<?=htmlspecialchars($row->title)?></p>

                <table class="center">
                    <tr>
                        <td>
                            <label for="txtObject"><b>Objet</b> </label>
                        </td>
                        <td>
                            <input size="16" id="txtObject" name="contactFormObject" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtMessage"><b>Message</b></label>
                        </td>
                        <td>
                            <textarea style="vertical-align:bottom;" id="txtMessage" name="contactFormMessage" maxLength="500" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <td></td>
                        <td>
                        <br>
                            <input type="submit" id="btnSubmit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "view/gabarit.php";
