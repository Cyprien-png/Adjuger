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
 * @description Calls all the needed functions to insert the user data into the json users file
 * @return int Returns the numbers from verifyRegister()
 * */
function registerInDatabase($userData) {
    $success = verifyRegister($userData);
    // Creates the account if the verification is OK
    if ($success == 1) {
        $dataArray = prepareDataArray($userData);
        $encodedData = json_encode($dataArray, JSON_PRETTY_PRINT);
        $success = insertData($encodedData, "data/users.json");
    }
    // Always returns the numbers so the controler can manage errors
    return $success;

}

/**
 * @description This function is used to verify the register data.
 *              It checks if the e-mail and username are already known to the database
 *              or if the password verification isnt' correct.
 * @param $userData
 * @return int 0 if something went wrong
 *             1 if all works
 *             2 if the passwords don't match
 *             3 if the e-mail and username are already known to the database
 */
function verifyRegister($userData) {
    $result = 0; // something wrong happend
    $db = file_get_contents("data/users.json");


    $searchUsername =  searchUser($db, "username", $userData['userInputUsername']);
    $searchEmail = searchUser($db, "e-mail", $userData['userInputEmail']);

    if(($searchEmail == false) && ($searchUsername == false)) {
        if($userData['userInputPassword'] == $userData['userInputPasswordRepeat']) {
            $result = 1; //Success
        }
        else {
            $result = 2; // The two passwords don't match
        }
    }
    else {
        $result = 3; // E-mail and username already exists
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
 * @return int 1 if the account exists and the pseudo/e-mail matches with the password. 2 if it doesn't.
 * */
function checkLogin($userData) {
    $check = 0;

    $userAuth = $userData['userInputAuth'];
    $db = file_get_contents("data/users.json");
    $json = json_decode($db, false);

    foreach ($json->users as $item) {
        if (password_verify($userData['userInputPassword'], $item->password)) {
            $userPsw = true;
        }
        else {
            $userPsw = false;
        }
    }

    $checkUsername = searchUser($db, "username", $userAuth);
    $checkEmail = searchUser($db, "e-mail", $userAuth);

    if (($checkUsername || $checkEmail) && $userPsw) {
        $check = 1;
    }
    else {
        $check = 2;
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

