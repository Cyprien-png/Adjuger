<?php


/**
 * @description Calls all the needed functions to insert the user data into the json offers file.
 * @param $offerData array The POST data from the register form.
 * @param $offerImages array The POST data from the register form.
 * @param $offerId string ID of the offer if we want a specific one.
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

/**
 * @description Saves the image(s) chose in the addOffer form.
 * @param $images array The $_FILES global variable witch contains the images added in the form
 * @return array An array with the link of the new images.
 * */
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

/**
 * @description Read every offers in json file.
 * @return array Returns an array with every offers.
 * */
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

/**
 * @description Read every offers in json file
 * @param $type int it would filter offers by type of information (ex : Title, description, category)
 * @param $key string the thing would be searched in offers
 * @return array Returns the numbers from verifyRegister().
 * */
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
            case 3:
                    if (stripos($item->title, $key)!== FALSE || stripos($item->category, $key)!== FALSE || stripos($item->description, $key)!== FALSE) {
                        array_push($offersItmes, $item);
                    }
                break;
        }
    }
    return $offersItmes;
}

/**
 * @description Deletes the old offer and creates a new one but with the same ID
 * @param $newData array The POST data from the modify form.
 * @param $images array The $_FILES variable witch contains the new images from the modification form.
 * @param $offerId string ID of the offer we want to modify.
 * */
function modifyOfferDB($newData, $images, $offerId)
{
    deleteOfferDB($offerId, true);
    addOfferDB($newData, $images, $offerId);
}

/**
 * @description Prepares the array to be inserted into the file. Creates an ID for it. Puts in the links of the images.
 * @param $offerData array The POST data from a form.
 * @param $offerImages array The $_FILES variable witch contains the new images from the modification form.
 * @param $offerId string A specific ID if we want to use one.
 * @return array The cleaned up array.
 * */
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

/**
 * @description Gets the content of the offer corresponding to the id
 * @param $id string The id of the offer.
 * @return array|bool $exists mixed  if the file writing succeeds or false if it fails.
 */
function getOfferById($id)
{
    $exists = false;
    $db = file_get_contents("data/offers.json");
    $json = json_decode($db, false);

    foreach ($json->offers as $item) {
        if ($item->id == $id) {
            $exists = true;
            $data = (array)$item;
            break;
        }
    }
    if($exists == false) {
        return false;
    }
    else {
        return $data;
    }

}

/**
 * @description Deletes an offer by searching the corresponding id
 * @param $offerId string The id of the offer.
 * @param $noImageDel bool False to erase the image of the offer, true to not erase it.
 * @return bool True if the deleting worked, false if it didn't
 */
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
