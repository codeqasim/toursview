<?php
//Loaction Api
if(isset($_GET['q']) && !empty($_GET['q'])) {
    $curl = curl_init();
 
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.travelapi.co/modules/hotels/_suggestion/api/v1/search?lang=en&city=" . $_GET['q'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    $city = json_decode($response);
    $final_results = array();
    foreach ($city->cities as $item) {
        array_push($final_results, (object)array("id" => $item->latinFullName, "text" => $item->latinFullName , "icon" => $item->countryCode));
    }
    echo json_encode($final_results);
}


function callapi($url,$parms){

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $parms,
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
}

function call_hotelapi($url,$parms){

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $parms,
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
}

function call_flightapi($url,$parms){

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $parms,
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;
}
