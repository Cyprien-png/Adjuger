<?php

function home() {
    require_once "model/offerManager.php";
    $count = 0;
    $max = 6;
    $items = showOffers();
    require "view/home.php";
}

function homeSearch($search) {
    require_once "model/offerManager.php";
    $home =0;
    $count = 0;
    $max = 6000;
    $items = $search;
    require "view/home.php";
}

// <editor-fold desc="Users" >
function showUser() {
    require_once "model/userManager.php";
    if(isset($_SESSION['userLog'])) {
        $type = 1;
        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        require_once "model/offerManager.php";
        $items = showSearch($email, $type);
        require "view/user_page.php";
    }
    else {
        home();
    }
}

function register($userData) {
    require_once "model/userManager.php";

    if(isset($_SESSION['userLog'])) {
        home();
    }
    else {
        if(isset($userData['userInputEmail'])) {
            $registerResult = registerInDatabase($userData);

            switch($registerResult) {
                case 0:
                    $registerErr = "Une erreur est survenue.";
                    break;
                case 1:
                    break;
                case 2:
                    $registerErr = "Les mots de passe ne correspondent pas.";
                    break;
                case 3:
                    $registerErr = "L'e-mail ou le nom d'utilisateur est déja connu.";
                    break;
            }

            if(isset($registerErr)) {
                require "view/register.php";
            }
            else {
                createSession(1, $userData['userInputUsername'] , $userData['userInputEmail']);
                home();

            }
        }
        else {
            require "view/register.php";
        }
    }

}

function login($userData=null) {
    require_once "model/userManager.php";

    // Redirects the user to the home page if he's already logged in
    if(isset($_SESSION['userLog'])) {
        home();
    }
    else {
        if(isset($userData['userInputAuth'])) {
            $check = checkLogin($userData);
            switch($check) {
                case 0:
                    $loginErr = "Problème de connexion !";
                    break;
                case 2:
                    $loginErr = "Informations incorrectes !";
                    break;
                default:
                    break;
            }

            if(isset($loginErr)) {
                require "view/login.php";
            }
            else {
                $auth = getUser($userData['userInputAuth']);
                createSession(1, $auth['username'], $auth['email']);
                home();
                //require "view/home.php";

            }

        }
        else {
            require "view/login.php";
        }
    }

}

function logout() {
    unset($_SESSION['userLog']);
    home();
}
// </editor-fold>

// <editor-fold desc="Offers" >
function addOffer($offerData, $offerImages) {
    require_once "model/offerManager.php";
    if(!isset($_SESSION['userLog'])) {
        login();
    }
    else {
        if(isset($offerData['offerTitle']) && isset($offerImages['offerImage'])) {
            $success = addOfferDB($offerData, $offerImages);
            if($success) {
                home();
            }
            else {
                $OfferErr = true;
                print_r($offerImages);
                require "view/offer_add.php";
            }
        }
        else {
            print_r($offerImages);
            require "view/offer_add.php";
        }
    }

}

function searching($key, $type){
    require_once "model/offerManager.php";
    $items = showSearch($key, $type);
    homeSearch($items);
}

function showProduct($offerId) {
    $i=0;
    $j=0;
    require_once "model/offerManager.php";
    $offerData = getOfferById($offerId);
    require "view/product.php";
}

function viewMore($max){
    require_once "model/offerManager.php";
    $count = 0;
    $max = (int)$max;
    $max = $max + 6;
    $items = showOffers();
    require "view/home.php";
}

function contactAnnouncer($formData, $offerId=null) {
    require_once "model/offerManager.php";
    require_once "model/userManager.php";
    if(isset($_SESSION['userLog'])) {
        if(isset($formData['contactFormTo'])) {
            //TODO found out how to send an e-mail
            $user = getUserById($_SESSION['userID']);
            //$sender = "De : ".$user['username'] . "(".$user['email'].")";
            $locaton = $user['address'] .", " . $user['npa'] ." " . $user['city'];
            $message = $formData['contactFormMessage'] . "\n\n" . $locaton;
            //mail($formData['contactFormTo'], $formData['contactFormObject'], $message);
            $mailInfo = array(
                "mailTo" => $formData['contactFormTo'],
                "subject" => $formData['contactFormObject'],
                "body" => $message
            );

            emailSending($mailInfo);
            home();
        }
        else {
            if(isset($offerId)) {
                $offerData = getOfferById($offerId);
            }
            require "view/offer_contact.php";
        }
    }
    else {
        login();
    }
}

function emailSending($infoMail)
{

    require_once "PHPMailer/PHPMailerAutoload.php";
    require_once "PHPMailer/src/PHPMailer.php";
    require_once "PHPMailer/src/SMTP.php";
    require_once "PHPMailer/src/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail->CharSet = 'UTF-8';
    $mail->Host = "SMTP.office365.com";
    $mail->SMTPAuth = true;
    $mail->Username = "cpnv.webannonce2021@outlook.com";
    $mail->Password = "nffPBj3JsRqw5xi";
    $mail->Port = "587";
    $mail->SMTPSecure = "starttls";

    $mail->addReplyTo($_SESSION['email']);

    $mail->From = "cpnv.webannonce2021@outlook.com";
    $mail->FromName = "Web Annonce";
    $mail->addAddress($infoMail['mailTo']);
    $mail->Subject = ($infoMail['subject']);
    $mail->Body = $infoMail['body'];

    $mail->send();

    // -----------------------------
//    $emailDenvoi = "cpnv.webannonce2021@outlook.com";
//    $password = "nffPBj3JsRqw5xi";
//
//
//    $port = 587;
//    $SMTPSecure = "starttls";
//
//
//    $emailFrom = $_SESSION['userEmailAddress']; //Celui qui envoi le message
//    $subject = $message['titreAnnonce']; //L'objet du mail
//    $body = $message['message']; // le message
//
////Le destinataire
//    $emailTo = $infoMail['mailTo'];
//
//    $mail = new PHPMailer();
//
//    $mail->isSMTP();
//    $mail->CharSet = 'UTF-8';
//    $mail->Host = $host;
//    $mail->SMTPAuth = true;
//    $mail->Username = $emailDenvoi;
//    $mail->Password = $password;
//    $mail->Port = 587;
//    $mail->SMTPSecure = $SMTPSecure;
//
//    $mail->From = $emailDenvoi;
//    $mail->FromName = "Web Annonce";
//    $mail->addReplyTo($emailFrom);
//
//    $mail->addAddress($emailTo);
//    $mail->Subject = $infoMail['subject'];
//    $mail->Body = $body;
//
//    $mail->send();
}


function deleteOffer($offerId) {
    require_once "model/offerManager.php";
    $success = deleteOfferDB($offerId);

    if($success) {
        home();
    } else {
        print("Problème de suppression");
    }
}

function modifyOffer($newData, $images, $offerId=NULL) {
    require_once "model/offerManager.php";

    //$a=$offerId;

    $oldData = getOfferById($offerId);

    if(isset($newData['offerTitle'])) {
        modifyOfferDB($newData, $images, $offerId);
        home();
    }
    else {
        require "view/offer_modify.php";
    }


}

// </editor-fold >

// <editor-fold desc="Session" >
function createSession($userLog, $username, $email) {
    $_SESSION['userLog'] = $userLog;
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;

}
// </editor-fold >





