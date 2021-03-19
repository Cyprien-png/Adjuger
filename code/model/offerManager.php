<?php

function prepareDataArray($userData)
{
    $id = uniqid();

    $dataArray = array(
        "id" => $id,
        "title" => $userData['offerTitle'],
        "price" => $userData['offerPrice'],
        "description" => $userData['Description'],
        "tags" => $userData['offerTags']
    );

    return $dataArray;

}