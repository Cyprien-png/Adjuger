<?php


/**
 * @description Calls all the needed functions to insert the user data into the json offers file.
 * @param $userData array The POST data from the register form.
 * @return int Returns the numbers from verifyRegister().
 * */
function addOfferDB($offerData, $offerImages)
{
    $imageLink = insertImages($offerImages);
    $dataArray = prepareDataArray($offerData, $imageLink);
    $encodedData = json_encode($dataArray, JSON_PRETTY_PRINT);
    $success = insertData($encodedData, "data/offers.json");

    // Always returns the numbers so the controler can manage errors
    return $success;

}

function insertImages($images) {
    $imageName = uniqid();

    $imagesLink = array();

    // https://www.php.net/manual/en/function.move-uploaded-file.php

    
    foreach ($images["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $images["tmp_name"][$key];
            $nameExt = explode('.', $images['name']);
            switch ($nameExt[1]) {
                case "jpg":
                    $dest = "data/images/offers/$imageName.jpg";
                    break;
                case "png":
                    $dest = "data/images/offers/$imageName.png";
                    break;
            }
            array_push($imagesLink, $dest);
            move_uploaded_file($tmp_name, $dest);
        }
    }
    return $imagesLink;

}

function showOffers()
{
    $ENCODED = file_get_contents("data/offers.json");
    $offers = json_decode($ENCODED, true);
    print_r($offers);
    // $offerList = array(
    //     '2310'      => $offers[2310],
    //     '2311'      => $offers[2311]);
    foreach ($offers as $value) {

    }
    /// echo $offers[2311]["name"];
}

function prepareDataArray($offerData, $offerImages)
{
    $id = uniqid();

    $dataArray = array(
        "id" => $id,
        "title" => $offerData['offerTitle'],
        "price" => $offerData['offerPrice'],
        "description" => $offerData['Description'],
        "images" => $offerImages,
        "category" => $offerData['offerCategory']
    );

    return $dataArray;
}

/**
 * @description Function used to append the data into the json file.
 * @param $data string The json data we want to append to the file.
 * @param $file string The path of the file that will be appended.
 * @return bool True if the file writing succeeds or false if it fails.
 */
function insertData($data, $file)
{
    $currentDataFile = file_get_contents($file);
    $currentData = json_decode($currentDataFile, true);

    $newData = json_decode($data, true);
    array_push($currentData['offers'], $newData);

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