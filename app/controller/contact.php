<?php

$router->get('about', function() {

$title = slogan;
$meta_title = slogan;
$meta_desc = "";
$meta_img = "";
$meta_url = meta_url;
$meta_author = meta_author;
$meta = "1";
$body = views."/about.php";
include layout;

});

$router->get('req', function() {
    echo "hello";
});





