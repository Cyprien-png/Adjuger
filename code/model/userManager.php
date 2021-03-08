<?php
/**
 * @author MUMINOVIC Benjamin
 * @creation-date 03.03.2021
 * @description Contains all the function to access or modify the json database
 * @modification
 *
 * */

/**
 * @description Calls all the needed functions to insert the user data into the json database
 * @return bool True if the insert succeeds or False if it fails
 * */
function registerInDatabase($userData) {
    $dataArray = prepareDataArray($userData);
    $encodedData = json_encode($dataArray, JSON_PRETTY_PRINT);
    $success = insertData($encodedData, "data/users.json");

    return $success;
}

/**
 * @description Function used to append the data into the json file
 * @return bool True if the file writing succeeds or false if it fails
 * */
// NOT TOTALLY WORKING
// DUMBLY APPENDS DATA IN THE JSON FILE
function insertData($data, $file) {
    $fileHandler = fopen($file, "a");
    $text = "$data \n";
    $success = fwrite($fileHandler, $text);
    fclose($fileHandler);

    // fwrite doesn't return true on success, only false on fail
    // this returns true if it doesn't fail
    if($success != false) {
        return true;
    }
    else {
        return false;
    }
}

/**
 * @description Takes the POST array and makes a new array with correct naming. Hashes also the password
 * @return array the new data array
 * */
function prepareDataArray($userData) {
    $userHashedPassword = password_hash($userData['userInputPassword'], PASSWORD_DEFAULT);
    $dataArray = array(
        "e-mail" => $userData['userInputEmail'],
        "username" => $userData['userInputUsername'],
        "password" => $userHashedPassword,
        "firstname" => $userData['userInputUsername'],
        "lastname" => $userData['userInputLastname'],
        "birthdate" => $userData['userInputDate'],
        "phone number" => $userData['userInputPhoneNumber']
    );

    return $dataArray;
}

// NOT READY
function checkLogin($userData) {
    $check = false;

    $userAuth = $userData['userInputAuth'];
    $bd = file_get_contents("data/users.json");

    //$DBPsw = searchInDB($bd, "users", "password");
    $userPsw = password_verify("temp", $userData['userInputPassword']);



    $checkUsername = searchInDB($bd, "users", "username", $userAuth, 1);
    $checkEmail = searchInDB($bd, "users", "e-mail", $userAuth, 1);

//    if($checkUsername && $checkEmail) {
//
//    }

    $json = json_decode($bd);

    return $check;
}

function searchInDB($str, $table, $toMatch, $match, $mode) {
    $result = false;
    $json = json_decode($str);

    foreach ($json->$table as $item) {
        if ($item->$toMatch == $match) {
            switch ($mode) {
                case 0:
                    $result = $item->content;
                    break;
                case 1:
                    $result = true;
                    break;
            }
        }
    }

    return $result;
}

