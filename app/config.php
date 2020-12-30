<?php
session_start();

$current_uri = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

define('appname', 'Booknow');
define('slogan', 'Travel like never before');
define('meta_author', 'Booknow');
define('meta_url', $current_uri);
define('default_language', 'en');
define('auto_language', 1);
define('default_currency', 'USD');
define('auto_currency', 1);
define('user_signup', 1);
define('user_login', 1);
define('agents', 1);
define('suppliers', 1);


/* google maps key */ define('gmkey', 'AIzaSyDk_iQ6QWOTHW-TWoXSFLwbcnhaxlcnXXk');
// /* ipstack key     */ define('ipstackkey', 'be5046ce162b3810759487d294fe37f5');
/* ipstack key     */ define('ipstackkey', 'cd57c04526ff538be9dba55dcd59bbee');


// Function to get the client IP address
$ip = call_user_func(function(){
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR')) $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED')) $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR')) $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED')) $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR')) $ipaddress = getenv('REMOTE_ADDR');
    else $ipaddress = 'lahore';
    return $ipaddress;
});

// sa 37.43.255.255
// us 104.131.66.8
if ($ip == '::1'){
$ip ="110.36.223.2";
}
if (isset($_SESSION['user_data']) && $ip == $_SESSION['user_data']->ip) {
define('user_city', $_SESSION['user_data']->city);
define('user_country', $_SESSION['user_data']->country_name);
define('user_ip', $_SESSION['user_data']->ip);
define('user_country_code', $_SESSION['user_data']->country_code);
define('user_calling_code', $_SESSION['user_data']->location->calling_code);
define('user_latitude', $_SESSION['user_data']->latitude);
define('user_longitude', $_SESSION['user_data']->longitude);

}else{
// geo api
$geo_url = "http://api.ipstack.com/";
$geo = $geo_url.$ip."?access_key=".ipstackkey;
$details = json_decode(file_get_contents($geo));
$_SESSION['user_data'] = $details;
define('user_city', $details->city);
define('user_country', $details->country_name);
define('user_ip', $details->ip);
define('user_country_code', $details->country_code);
define('user_calling_code', $details->location->calling_code);
define('user_latitude', $details->latitude);
define('user_longitude', $details->longitude);
}

?>