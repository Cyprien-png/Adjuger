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
        "E-Mail" => $userData['userInputEmail'],
        "Username" => $userData['userInputUsername'],
        "Password" => $userHashedPassword,
        "Firstname" => $userData['userInputUsername'],
        "Lastname" => $userData['userInputLastname'],
        "birthdate" => $userData['userInputDate'],
        "Phone number" => $userData['userInputPhoneNumber'],
    );

    return $dataArray;
}

function checkLogin($userData) {

}


