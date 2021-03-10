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
    $currentData = file_get_contents($file);
    $DcurrentData = json_decode($currentData, true);

    $Dnewdata = json_decode($data, true);

    array_push($DcurrentData, $Dnewdata);

    $DfinalData = json_encode($DcurrentData, JSON_PRETTY_PRINT);
    $success =  file_put_contents($file, $DfinalData);



//    $fileHandler = fopen($file, "a");
//    $text = "$data \n";
//    $success = fwrite($fileHandler, $text);
//    fclose($fileHandler);

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


function checkLogin($userData) {
    $check = false;

    $userAuth = $userData['userInputAuth'];
    $db = file_get_contents("data/users.json");

    $json = json_decode($db, true);
    $userPsw = password_verify($userData['userInputPassword'], $json['users']['0']['password']);

    $checkUsername = searchUser($db, "username", $userAuth);
    $checkEmail = searchUser($db, "e-mail", $userAuth);

    if (($checkUsername || $checkEmail) && $userPsw) {
        $check = true;
    }

    return $check;
}

function searchUser($str,  $toMatch, $match) {
    $result = false;
    $json = json_decode($str);

    foreach ($json->users as $item) {
        if ($item->$toMatch == $match) {
            $result = true;
        }
    }

    return $result;
}

