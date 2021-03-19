<?php


function showOffers(){
    $ENCODED = file_get_contents("..:/data/offers.json");
    $offers = json_decode($ENCODED,true);
    print_r ($offers);
    // $offerList = array(
    //     '2310'      => $offers[2310],
    //     '2311'      => $offers[2311]);
        foreach($offers as $value){
            
        }
   /// echo $offers[2311]["name"];
}

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