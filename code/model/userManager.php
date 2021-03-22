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
 * @description Calls all the needed functions to insert the user data into the json users file.
 * @param $userData array The POST data from the register form.
 * @return int Returns the numbers from verifyRegister().
 * */
function registerInDatabase($userData) {
    $success = verifyRegister($userData);
    // Creates the account if the verification is OK
    if ($success == 1) {
        $dataArray = prepareUserArray($userData);
        $_SESSION['userID'] = $dataArray['id'];
        $encodedData = json_encode($dataArray, JSON_PRETTY_PRINT);
        $success = insertUser($encodedData, "data/users.json");
    }
    // Always returns the numbers so the controler can manage errors
    return $success;

}

/**
 * @description This function is used to verify the register data.
 *              It checks if the e-mail and username are already known to the database
 *              or if the password verification isnt' correct.
 * @param $userData array The POST data from the register form.
 * @return int 0 if something went wrong,
 *             1 if everything works,
 *             2 if the passwords don't match,
 *             3 if the e-mail and username are already known to the database.
 */
function verifyRegister($userData) {
    $result = 0; // something wrong happend

    $db = file_get_contents("data/users.json");
    $json = json_decode($db);

    $searchUsername =  searchUser($json, "username", $userData['userInputUsername']);
    $searchEmail = searchUser($json, "email", $userData['userInputEmail']);

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
 * @description Function used to append the data into the json file.
 * @param $data string The json data we want to append to the file.
 * @param $file string The path of the file that will be appended.
 * @return bool True if the file writing succeeds or false if it fails.
 */
function insertUser($data, $file) {
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
 * @description Takes the POST array and makes a new array with correct naming. Hashes also the password.
 * @param $userData array The POST data from the register form.
 * @return array the new data array.
 * */
function prepareUserArray($userData) {
    $userHashedPassword = password_hash($userData['userInputPassword'], PASSWORD_DEFAULT);
    $id = uniqid();

    $dataArray = array(
        "id" => $id,
        "email" => $userData['userInputEmail'],
        "username" => $userData['userInputUsername'],
        "password" => $userHashedPassword
    );

    return $dataArray;
}

/**
 * @description Checks the data inputted in the login form.
 * @param $userData array The POST data from the login form.
 * @return int 1 if the account exists and the pseudo/e-mail matches with the password. 2 if it doesn't.
 */
function checkLogin($userData) {
    $check = 0; // Something else went wrong

    $userAuth = $userData['userInputAuth'];
    $db = file_get_contents("data/users.json");
    $json = json_decode($db, false);

    foreach ($json->users as $item) {
        if($item->username == $userAuth || $item->email== $userAuth ) {
            if (password_verify($userData['userInputPassword'], $item->password)) {
                $_SESSION['userID'] = $item->id;
                $userExists = true;
            } else {
                $userExists = false;
            }
        } else {
            $userExists = false;
        }
    }

    if ($userExists) {
        $check = 1; //Everything matches
    } else {
        $check = 2; // The data doesn't match
    }

    return $check;
}

/**
 * @description Searches the json object (the file) to find an existing user.
 * @param $json object The JSON object to search trough.
 * @param $field string The field to match (for ex. username).
 * @param $match string The string that we want to match to the field.
 * @return bool True if the user exists. False if he doesn't.
 */
function searchUser($json, $field, $match) {
    $result = false;

    foreach ($json->users as $item) {
        if ($item->$field == $match) {
            $result = true;
        }
    }

    return $result;
}

function getUserFromId($id)
{
    $db = file_get_contents("data/users.json");
    $json = json_decode($db, false);

    foreach ($json->users as $item) {
        if ($item->id == $id) {
            $data =  array("username" => $item->username, "email" => $item->email);
        }
    }
    return $data;
}

function getUser($userAuth) {
    $db = file_get_contents("data/users.json");
    $json = json_decode($db, false);

    foreach ($json->users as $item) {
        if (($item->username == $userAuth) || ($item->email == $userAuth)) {
            $data = array("username" => $item->username, "email" => $item->email);
        }
    }
    return $data;
}

