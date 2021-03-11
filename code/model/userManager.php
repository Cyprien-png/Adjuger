<?php
/**
 * @author MUMINOVIC Benjamin
 * @creation-date 03.03.2021
 * @description Contains all the function to access or modify the json users file
 * @modification 05.03.2021 : Started login functionality
 *               10.03.2021 : Fixed the user appending in the json users file
 *                            Completed the login functionality. Added comments
 *
 * */

/**
 * @description Calls all the needed functions to insert the user data into the json database
 * @return bool True if the insert succeeds or False if it fails
 * */
function registerInDatabase($userData) {
    if (verifyRegister($userData)) {
        $dataArray = prepareDataArray($userData);
        $encodedData = json_encode($dataArray, JSON_PRETTY_PRINT);
        $success = insertData($encodedData, "data/users.json");
    }
    else {
        $success = false;
    }
    return $success;
}

function verifyRegister($userData) {
    $result = false;
    $db = file_get_contents("data/users.json");



    $searchUsername =  searchUser($db, "username", $userData['userInputUsername']);
    $searchEmail = searchUser($db, "e-mail", $userData['userInputEmail']);

    if(($searchEmail == false) && ($searchUsername == false)) {
        if($userData['userInputPassword'] == $userData['userInputPasswordRepeat']) {
            $result = true;
        }
    }

    return $result;
}

/**
 * @description Function used to append the data into the json file
 * @return bool True if the file writing succeeds or false if it fails
 * */
function insertData($data, $file) {
    $currentDataFile = file_get_contents($file);
    $currentData = json_decode($currentDataFile, true);

    $newData = json_decode($data, true);
    array_push($currentData['users'], $newData);

    $finalData = json_encode($currentData, JSON_PRETTY_PRINT);
    $success = file_put_contents($file, $finalData);

    // file_put_contents() doesn't return true on success, only false on fail
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
        "password" => $userHashedPassword
    );

    return $dataArray;
}

/**
 * @description Checks
 * @return bool True if the account exists and the pseudo/e-mail matches with the password. False if it doesn't
 * */
function checkLogin($userData) {
    $check = false;

    $userAuth = $userData['userInputAuth'];
    $db = file_get_contents("data/users.json");

    $json = json_decode($db, true);
    $userPsw = password_verify($userData['userInputPassword'], $json['users']['password']);

    $checkUsername = searchUser($db, "username", $userAuth);
    $checkEmail = searchUser($db, "e-mail", $userAuth);

    if (($checkUsername || $checkEmail) && $userPsw) {
        $check = true;
    }

    return $check;
}

/**
 * @description Searches the json file to find an existing user
 * @return bool True if the user exits. False if it doesn't
 * */
function searchUser($jsonArray, $toMatch, $match) {
    $result = false;
    $json = json_decode($jsonArray);

    foreach ($json->users as $item) {
        if ($item->$toMatch == $match) {
            $result = true;
        }
    }

    return $result;
}

