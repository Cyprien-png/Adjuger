<?php


/**
 * @description Calls all the needed functions to insert the user data into the json offers file.
 * @param $offerData array The POST data from the register form.
 * @param $offerImages array The POST data from the register form.
 * @param $offerImages string ID of the offer if we want a specific one.
 * @return int Returns the numbers from verifyRegister().
 * */
function addOfferDB($offerData, $offerImages, $offerId = null)
{
    $imageLink = insertImages($offerImages);

    $dataArray = prepareOfferArray($offerData, $imageLink, $offerId);
    $success = insertOffer($dataArray, "data/offers.json");

    // Always returns the numbers so the controler can manage errors
    return $success;
}

function insertImages($images)
{
    $imagesLink = array();

    foreach ($images["offerImage"]["error"] as $key => $error) {
        $imageName = uniqid();
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $images["offerImage"]["tmp_name"][$key];
            $nameExt = explode('.', $images["offerImage"]['name'][$key]);
            switch (end($nameExt)) {
                case "jpg":
                case "Jpg":
                case "JPG":
                    $dest = "data/images/offers/" . $imageName . ".jpg";
                    break;
                case "png":
                case "Png":
                case "PNG":
                    $dest = "data/images/offers/" . $imageName . ".png";
                    break;
                default:
                    $err = true;
                    $dest = "view/content/images/noPhoto.png";
            }
            $imagesLink[] = $dest;
            if (!isset($err)) {
                move_uploaded_file($tmp_name, $dest);
            }
            unset($imageName);
        } else {
            $imagesLink[] = "view/content/images/noPhoto.png";
        }
    }

    return $imagesLink;
}


function showOffers()
{
    $ENCODED = file_get_contents("data/offers.json");
    $json = json_decode($ENCODED, false);

    $offersItmes = array();
    foreach ($json->offers as $item) {
        array_push($offersItmes, $item);
    }
    return $offersItmes;
}

function showSearch($key, $type)
{
    $ENCODED = file_get_contents("data/offers.json");
    $json = json_decode($ENCODED, false);

    $offersItmes = array();
    foreach ($json->offers as $item) {
        switch ($type) {
            case 1:
                if ($item->email == $key) {
                    array_push($offersItmes, $item);
                }
                break;
            case 2:
                if ($item->category == $key) {
                    array_push($offersItmes, $item);
                }
                break;
        }
    }
    return $offersItmes;
}

function modifyOfferDB($newData, $images, $offerId)
{
    deleteOfferDB($offerId, true);
    addOfferDB($newData, $images, $offerId);
}

function prepareOfferArray($offerData, $offerImages, $offerId = null)
{
    if (isset($offerId)) {
        $id = $offerId;
    } else {
        $id = uniqid();
    }

    $date = date('d.m.Y');

    $dataArray = array(
        "id" => $id,
        "title" => $offerData['offerTitle'],
        "email" => $_SESSION['email'],
        "username" => $_SESSION['username'],
        "price" => $offerData['offerPrice'],
        "date" => $date,
        "description" => $offerData['offerDescription'],
        "images" => $offerImages,
        "type" => $offerData['offerType'],
        "category" => $offerData['offerCategory']
    );

    return $dataArray;
}

/**
 * @description Function used to append the data into the json file.
 * @param $data array The json data we want to append to the file.
 * @param $file string The path of the file that will be appended.
 * @return bool True if the file writing succeeds or false if it fails.
 */
function insertOffer($data, $file)
{
    $currentDataFile = file_get_contents($file);
    $currentData = json_decode($currentDataFile, true);

    array_push($currentData['offers'], $data);

    $finalData = json_encode($currentData, JSON_PRETTY_PRINT);
    $success = file_put_contents($file, $finalData);

    // file_put_contents() doesn't return true on success, only false on fail
    // this returns true if it doesn't fail
    if ($success != false) {
        return true;
    } else {
        return false;
    }
}

function getOfferById($id)
{
    $db = file_get_contents("data/offers.json");
    $json = json_decode($db, false);

    foreach ($json->offers as $item) {
        if ($item->id == $id) {
            $data = (array)$item;
            break;
        }
    }
    return $data;
}

function deleteOfferDB($offerId, $noImageDel = false)
{
    $db = file_get_contents("data/offers.json");
    $json = json_decode($db, true);

    $success = false;

    foreach ($json['offers'] as $key => $item) {
        if ($item['id'] == $offerId) {
            $success = true;
            foreach ($item['images'] as $images) {
                if ($images != "view/content/images/noPhoto.png") {
                    if (!$noImageDel) {
                        unlink($images);
                    }
                }
            }
            unset($json['offers'][$key]);
            break;
        }
    }
    $newJson = json_encode($json, JSON_PRETTY_PRINT);

    $file = fopen("data/offers.json", "w");
    fwrite($file, $newJson);
    fclose($file);

    return $success;
}
