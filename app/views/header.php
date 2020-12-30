<?php
$root=(isset($_SERVER['HTTPS']) ? "https://" : "http://").$_SERVER['HTTP_HOST'];
$root.= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
include "app/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<?php if ($meta == 1) {?>
<meta property="og:title" content="<?=$meta_title;?>"/>
<meta property="og:site_name" content="<?=appname;?>"/>
<meta property="og:description" content="<?=$meta_desc;?>"/>
<meta property="og:image" content="<?=$meta_img;?>"/>
<meta property="og:url" content="<?=$meta_url;?>"/>
<meta property="og:publisher" content="<?=$meta_author;?>"/>
<?php } ?>

<title><?=$title;?> - <?=appname?> </title>
<base href="<?=$title;?>">
<link rel="stylesheet" href="<?=$root.css;?>_style.css" />

<script> var baseurl = "<?=$root;?>"; </script>
<link rel="shortcut icon" href="<?=$root;?>assets/img/logo.png">
<script src="<?=$root.js;?>jquery/jquery.min.js"></script>
<script src="<?=$root.js;?>angular/angular.min.js"></script>
<script src="<?=$root.js;?>angular/me-lazyload.js"></script>
<script src="<?=$root.js;?>angular/angular-slugify.js"></script>
<script src="<?=$root.js;?>axios.min.js"></script>

</head>
<body>


<header class="sticky">
    <nav>
        <div class="container flex flex-content-between row-rtl">
            <div class="c2 c-sm-2 rtl-align-right mx-auto">
                <div class="logo row">
                    <a href="<?=$root;?>">
                    <img alt="logo" src="<?=$root;?>uploads/main/logo.png" />
                    <strong>TOURS</strong>VIEW
                    </a>
                </div>
                <div class="bars show-m">
                    <input type="checkbox" id="menu-left" hidden />
                    <label for="menu-left">
                    <span></span>
                    </label>
                </div>
            </div>
        </div>
    </nav>
</header>