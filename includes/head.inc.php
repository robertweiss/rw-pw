<!DOCTYPE html>
<html class="no-js" lang="de_DE">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$page->get('headline|title')?> | <?=$siteTitle?></title>
    <meta name="description" content="<?=$siteTitle?>" />
    <link rel="stylesheet" href="<?=$config->urls->templates?>assets/css/style.css" />

    <script src="<?=$config->urls->templates?>assets/js/vendor/modernizr.custom.13467.min.js"></script>

    <?php // include_once('./includes/favicons.inc.php') ?>
    <?php include_once('./includes/svgcall.inc.php') ?>
</head>
<body class="<?=$page->template?>">

