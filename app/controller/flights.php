<?php

$router->get('flights', function() {

$title = slogan;
$meta_title = slogan;
$meta_desc = "";
$meta_img = "";
$meta_url = meta_url;
$meta_author = meta_author;
$meta = "1";
$body = views."/flights.php";
include layout;

});

$router->get('req', function() {
    echo "hello";
});





