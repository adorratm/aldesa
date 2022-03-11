<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="<?= $lang ?>">

<head>
    <!-- Title -->
    <title><?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?></title>
    <!-- Title -->

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes, shrink-to-fit=no,minimal-ui">
    <meta name="description" content="<?= clean(@$meta_desc) ?>">
    <?php /*
    <meta name="keywords" content="<?= clean(@$meta_keyw) ?>">
	*/ ?>
    <meta name="subject" content="<?= clean(@$meta_desc) ?>">
    <meta name="copyright" content="<?= $settings->company_name ?>">
    <meta name="language" content="<?= strto("lower|upper", $lang) ?>">
    <meta name="robots" content="all" />
    <meta name="revised" content="<?= turkishDate("d F Y, l H:i:s", date("Y-m-d H:i:s")) ?>" />
    <meta name="abstract" content="<?= clean(@$meta_desc) ?>">
    <meta name="topic" content="<?= clean(@$meta_desc) ?>">
    <meta name="summary" content="<?= clean(@$meta_desc) ?>">
    <meta name="Classification" content="Business">
    <meta name="author" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="designer" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="copyright" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com 2022 &copy; Tüm Hakları Saklıdır.">
    <meta name="reply-to" content="<?= $settings->email ?>">
    <meta name="owner" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com">
    <meta name="url" content="<?= clean(base_url()) ?>">
    <meta name="identifier-URL" content="<?= clean(base_url()) ?>">
    <meta name="directory" content="submission">
    <meta name="category" content="Article">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="1 days">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="yes" name="apple-touch-fullscreen" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta property="og:image:secure" content="<?= clean(@$og_image) ?>">
    <meta property="og:locale" content="<?= strto("lower", $lang) . '_' . strto("lower|upper", $lang) ?>">
    <meta property="og:url" content="<?= (!empty($og_url) ? clean($og_url) : clean(base_url())) ?>" />
    <meta property="og:type" content="<?= (!empty($og_type) ? clean($og_type) : "website") ?>" />
    <meta property="og:title" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>" />
    <meta property="og:description" content="<?= (!empty($og_description) ? clean($og_description) : clean(@$meta_desc)) ?>" />
    <meta property="og:image" content="<?= clean(@$og_image) ?>" />
    <meta property="og:image:secure_url" content="<?= clean(@$og_image) ?>" />
    <meta name="twitter:title" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>">
    <meta name="twitter:description" content="<?= (!empty($og_description) ? clean($og_description) : clean(@$meta_desc)) ?>">
    <meta name="twitter:image" content="<?= clean(@$og_image) ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:site_name" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>">
    <meta name="twitter:image:alt" content="<?= (!empty($meta_title) ? stripslashes($meta_title) : (!empty($og_title) ? stripslashes($og_title) : stripslashes($settings->company_name))) ?>">
    <meta name="googlebot" content="archive,follow,imageindex,index,odp,snippet,translate">
    <meta http-equiv="Cache-Control" content="public,max-age=1800,max-stale,stale-while-revalidate=86400,stale-if-error=259200" rem="max-age=30minutes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MSThemeCompatible" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="translucent black" />
    <meta name="msapplication-navbutton-color" content="translucent black" />
    <meta name="mssmarttagspreventparsing" content="true" />
    <meta name="theme-color" content="#b1cff4" />
    <meta http-equiv="Page-Enter" content="RevealTrans(Duration=1.0,Transition=1)" />
    <meta http-equiv="Page-Exit" content="RevealTrans(Duration=1.0,Transition=1)" />
    <meta name="publisher" content="Mutfak Yapım Dijital Reklam Ajansı, info@mutfakyapim.com" />
    <link rel="canonical" href="<?= (!empty($og_url) ? clean($og_url) : clean(base_url())) ?>" />
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <link rel="preconnect" href="<?= base_url() ?>">
    <link rel="dns-prefetch" href="<?= base_url() ?>">
    <!-- Favicon -->
    <?php $imageSize = getimagesize(get_picture("settings_v", $settings->favicon)) ?? [32, 32]; ?>
    <link rel="shortcut icon" sizes="<?= ($imageSize[0]) ?>x<?= ($imageSize[1]) ?>" href="<?= get_picture("settings_v", $settings->favicon); ?>" type="<?= image_type_to_mime_type(exif_imagetype(get_picture("settings_v", $settings->favicon))) ?>">
    <link rel="icon" sizes="<?= ($imageSize[0]) ?>x<?= ($imageSize[1]) ?>" href="<?= get_picture("settings_v", $settings->favicon); ?>" type="<?= image_type_to_mime_type(exif_imagetype(get_picture("settings_v", $settings->favicon))) ?>">
    <link rel="apple-touch-icon" sizes="<?= ($imageSize[0]) ?>x<?= ($imageSize[1]) ?>" href="<?= get_picture("settings_v", $settings->favicon); ?>" type="<?= image_type_to_mime_type(exif_imagetype(get_picture("settings_v", $settings->favicon))) ?>">
    <!-- META TAGS -->

    <!-- === STYLES === -->
    <!-- iziToast -->
    <link rel="preload" type="text/css" href="<?= asset_url("public/css/iziToast.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/iziToast.min.css") ?>" />
    </noscript>
    <!-- #iziToast -->

    <!-- iziModal -->
    <link rel="preload" type="text/css" href="<?= asset_url("public/css/iziModal.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/iziModal.min.css") ?>" />
    </noscript>
    <!-- #iziModal -->

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/bootstrap.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/bootstrap.min.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/animate.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/animate.min.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/owl.carousel.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/owl.carousel.min.css") ?>">
    </noscript>
    <link rel="preload" type="text/css" href="<?= asset_url("public/css/owl.theme.default.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/owl.theme.default.min.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/nice-select.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/nice-select.min.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/meanmenu.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/meanmenu.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    </noscript>

    <link rel="preload" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/v4-shims.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/v4-shims.min.css">
    </noscript>

    <?php if ($this->uri->segment(3) === lang("routes_product")) : ?>
        <link rel="preload" type="text/css" href="<?= asset_url("public/css/fancybox.min.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/fancybox.min.css") ?>">
        </noscript>
    <?php endif ?>


    <style>
        /*
        @File: Ezir HTML Template

        * This file contains the styling for the actual template, this
        is the file you need to edit to change the look of the
        template.

        This files table contents are outlined below>>>>>

        *******************************************
        *******************************************
        ** - Default Btn Style 
        ** - Section Title Style
        ** - Top Header Style
        ** - Navbar Area Style
        ** - Main Banner Area CSS  Style
        ** - Inner Banner Style
        ** - Choose Area Style
        ** - About Area Style
        ** - Service Area Style
        ** - Pricing Area Style
        ** - Cart Wraps Area Style
        ** - Checkout Area Style
        ** - Faq Area Style
        ** - Achievements Area Style
        ** - Counter Area Style
        ** - Project Area Style
        ** - Testimonials Area Style
        ** - Team Area Style
        ** - Blog Area Style
        ** - Contact Area Style
        ** - User All Form Style
        ** - Map Area Style
        ** - Appointment Area Style
        ** - Pagination Area Style
        ** - 404 Error Area Style
        ** - Coming Soon Area Style
        ** - Footer Area Style
        ** - Back To Top Button Style
        ** - Preloader CSS Style
        *******************************************
        /*

        /*================================================
        Default CSS
        =================================================*/

        body {
            font-size: 16px;
            line-height: 1.8;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #10142D;
            font-weight: 400;
        }

        p {
            color: #10142D;
        }

        a {
            display: inline-block;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            text-decoration: none;
        }

        a:hover,
        a:focus {
            text-decoration: none;
        }

        button {
            margin: 0;
            padding: 0;
            outline: 0;
        }

        button:focus {
            outline: 0;
            border: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 600;
            line-height: 1.4;
            color: #10142D;
        }

        h3 {
            font-size: 24px;
        }

        .d-table {
            width: 100%;
            height: 100%;
        }

        .d-table-cell {
            display: table-cell;
            vertical-align: middle;
        }

        img {
            max-width: 100%;
        }

        .ptb-100 {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .pt-100 {
            padding-top: 100px;
        }

        .pt-80 {
            padding-top: 80px;
        }

        .ptb-70 {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .pb-100 {
            padding-bottom: 100px;
        }

        .pb-70 {
            padding-bottom: 70px;
        }

        .pl-30 {
            padding-left: 30px;
        }

        .pl-35 {
            padding-left: 35px;
        }

        .pt-45 {
            padding-top: 45px;
        }

        .pt-20 {
            padding-top: 20px;
        }

        /*================================
        Default btn Style 
        ===================================*/
        .default-btn {
            padding: 14px 27px;
            background-color: #2f3192;
            color: #ffffff;
            border-radius: 5px;
            position: relative;
            z-index: 1;
        }

        .default-btn::before {
            content: '';
            position: absolute;
            z-index: -1;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 0;
            background-color: #10142D;
            opacity: 0;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            border-radius: 5px;
        }

        .default-btn:hover {
            background-color: #10142D;
            color: #ffffff;
        }

        .default-btn:hover::before {
            height: 100%;
            opacity: 1;
            border-radius: 5px;
        }

        /*================================
        Section Title Style 
        ===================================*/
        .section-title span {
            text-transform: capitalize;
            padding-bottom: 5px;
            font-weight: 400;
            color: #2f3192;
            line-height: 0;
        }

        .section-title h2 {
            font-size: 35px;
            font-weight: 600;
            margin-top: 5px;
            line-height: 1.4;
            color: #10142D;
        }

        .section-title p {
            padding-top: 10px;
            margin-bottom: 0;
        }

        .section-title .span-bg {
            line-height: 1.4;
            font-weight: 500;
            background-color: #2f3192;
            padding: 5px 18px;
            color: #ffffff;
            display: inline-block;
            margin-bottom: 5px;
        }

        /*================================
        Section Title Style End
        ===================================*/
        /*================================
        Top Header
        ===================================*/
        .top-header {
            background-color: #02213D;
        }

        .header-left {
            text-align: left;
            margin-top: 5px;
        }

        .header-left .header-left-card ul {
            padding-left: 0;
            margin-bottom: 0;
            list-style-type: none;
        }

        .header-left .header-left-card ul li {
            display: inline-block;
            text-align: left;
            position: relative;
            padding-left: 7px;
            color: #ffffff;
            margin-right: 35px;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .header-left .header-left-card ul li::before {
            content: '';
            position: absolute;
            width: 1px;
            height: 24px;
            background-color: #645673;
            left: -20px;
            top: 17px;
        }

        .header-left .header-left-card ul li:first-child::before {
            display: none;
        }

        .header-left .header-left-card ul li:last-child {
            margin-right: 0;
        }

        .header-left .header-left-card ul li .head-icon {
            color: #ffffff;
            font-size: 20px;
            text-align: center;
            position: absolute;
            left: 0;
            top: 50%;
            -webkit-transition: .5s;
            transition: .5s;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .header-left .header-left-card ul li a {
            display: inline-block;
            color: #ffffff;
            font-size: 14px;
            font-weight: 400;
            margin-left: 25px;
        }

        .header-left .header-left-card ul li:hover .head-icon {
            color: #5f62ff;
        }

        .header-left .header-left-card ul li:hover a {
            color: #5f62ff;
        }

        .header-right {
            float: right;
        }

        .top-social-link {
            padding-top: 15px;
            padding-bottom: 10px;
            float: right;
        }

        .top-social-link ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .top-social-link ul li {
            display: inline-block;
            margin-right: 5px;
        }

        .top-social-link ul li a {
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            background-color: #fff;
            color: #ffffff;
            border-radius: 50px;
        }

        .top-social-link ul li a:hover {
            background-color: #ffffff;
            color: #2f3192;
        }

        /*================================
        Top Header End
        ===================================*/
        /*=================================
        Navbar Area
        ====================================*/
        .navbar-area {
            background-color: transparent;
            -webkit-transition: 0.3s;
            transition: 0.3s;
            position: relative;
            padding-top: 0;
            padding-bottom: 0;
            padding-right: 0;
            padding-left: 0;
        }

        .navbar-light {
            padding: 0;
            padding-left: 0;
            padding-right: 0;
            background-color: transparent;
        }

        .navbar-light .navbar-brand img {
            float: left;
            padding: 10px 0;
        }

        .navbar-light .navbar-brand .logo-two {
            display: none;
        }

        .navbar-light .navbar-brand-sticky {
            display: none;
        }

        /* Main nav */
        .main-nav {
            position: inherit;
            background-color: #FFF6F1;
            top: 0;
            left: 0;
            z-index: inherit;
            padding: 0;
            width: 100%;
            height: auto;
        }

        .main-nav nav .navbar-nav .nav-item:hover a,
        .main-nav nav .navbar-nav .nav-item .active {
            color: #2f3192 !important;
        }

        .main-nav nav .navbar-nav .nav-item a {
            text-transform: capitalize;
            color: #10142D;
            font-weight: 500;
            margin-left: 12px;
            margin-right: 12px;
        }

        .main-nav nav .navbar-nav .nav-item a i {
            line-height: 0;
            position: relative;
            top: 3px;
            font-size: 18px;
        }

        .main-nav nav .navbar-nav .nav-item a:hover,
        .main-nav nav .navbar-nav .nav-item a :focus {
            color: #2f3192 !important;
        }

        .main-nav nav .navbar-nav .nav-item a.active {
            color: #2f3192 !important;
        }

        .main-nav nav .navbar-nav .nav-item a .active::before {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .main-nav nav .navbar-nav .nav-item:hover .dropdown-menu {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu {
            border: none;
            padding: 0;
            border-radius: 0;
            background-color: #ffffff !important;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li {
            border-bottom: 1px solid #ffffff;
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li:last-child {
            border-bottom: none;
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a {
            text-transform: capitalize;
            color: #10142D !important;
            position: relative;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            font-weight: 500;
            padding: 10px;
            border-bottom: 1px dashed #ebebeb;
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a.active {
            border-radius: 0;
            color: #2f3192 !important;
            background-color: #f3f3f3;
            border-left: 3px solid #2f3192;
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a:hover,
        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a :focus,
        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a .active {
            color: #2f3192 !important;
            border-radius: 0;
            background-color: #f3f3f3;
            border-left: 3px solid #2f3192;
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li.active {
            color: #2f3192 !important;
            background-color: #f3f3f3;
            border-left: 3px solid #2f3192;
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li .dropdown-menu {
            left: 100%;
            margin-top: 18px !important;
            position: absolute;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
        }

        .main-nav nav .navbar-nav .nav-item .dropdown-menu li:hover .dropdown-menu {
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
        }

        .main-nav .others-options .option-item {
            margin-right: 20px;
        }

        .main-nav .others-options .option-item:last-child {
            margin-right: 0;
        }

        .main-nav .others-options .option-item .search-btn {
            font-size: 24px;
            margin-top: 10px;
            color: #2f3192;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            cursor: pointer;
        }

        .main-nav .others-options .option-item .search-btn:hover {
            color: #10142D;
            -webkit-transform: translateY(-5%);
            transform: translateY(-5%);
        }

        .main-nav .others-options .option-item .close-btn {
            font-size: 24px;
            color: #2f3192;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            display: none;
            cursor: pointer;
        }

        .main-nav .others-options .option-item .close-btn:hover {
            color: #10142D;
            -webkit-transform: translateY(-5%);
            transform: translateY(-5%);
        }

        .main-nav .others-options .option-item .close-btn.active {
            display: block;
        }

        .main-nav .others-options .option-item .add-cart-btn .cart-btn-icon {
            font-size: 24px;
            color: #2f3192;
            position: relative;
        }

        .main-nav .others-options .option-item .add-cart-btn .cart-btn-icon:hover {
            color: #10142D;
        }

        .main-nav .others-options .option-item .add-cart-btn .cart-btn-icon span {
            position: absolute;
            top: 5px;
            right: -10px;
            width: 15px;
            height: 15px;
            line-height: 15px;
            background-color: #10142D;
            border-radius: 50%;
            text-align: center;
            color: #ffffff;
            font-size: 11px;
        }

        .nav-bar {
            background-color: #ffffff;
        }

        .nav-btn {
            float: right;
        }

        .nav-btn .default-btn {
            padding: 12px 20px;
        }

        .search-overlay {
            display: none;
        }

        .search-overlay.search-popup {
            position: absolute;
            top: 100%;
            width: 300px;
            background: #ffffff;
            z-index: 2;
            right: 0;
            padding: 20px;
            -webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
            margin-top: 0;
        }

        .search-overlay.search-popup .search-form {
            position: relative;
        }

        .search-overlay.search-popup .search-form .search-input {
            display: block;
            width: 100%;
            height: 50px;
            line-height: initial;
            border: 1px solid #eeeeee;
            color: #10142D;
            outline: 0;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            padding-top: 4px;
            padding-left: 10px;
        }

        .search-overlay.search-popup .search-form .search-input:focus {
            border-color: #2f3192;
        }

        .search-overlay.search-popup .search-form .search-button {
            position: absolute;
            right: 0;
            top: 0;
            height: 50px;
            background: transparent;
            border: none;
            width: 50px;
            outline: 0;
            color: #10142D;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            padding: 0;
        }

        .search-overlay.search-popup .search-form .search-button:focus {
            color: #2f3192;
        }

        .search-overlay.search-popup .search-form .search-button i {
            font-size: 18px;
            font-weight: bold;
        }

        .side-nav-responsive {
            display: none;
        }

        .side-nav-responsive .dot-menu {
            padding: 0 10px;
            height: 30px;
            cursor: pointer;
            z-index: 999;
            position: absolute;
            right: 60px;
            top: 25px;
        }

        .side-nav-responsive .dot-menu .circle-inner {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 30px;
        }

        .side-nav-responsive .dot-menu .circle-inner .circle {
            height: 5px;
            width: 5px;
            border-radius: 100%;
            margin: 0 2px;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            background-color: #10142D;
        }

        .side-nav-responsive .dot-menu:hover .circle-inner .circle {
            background-color: #2f3192;
        }

        .side-nav-responsive .container {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .side-nav-responsive .container .container {
            position: absolute;
            top: 55px;
            right: 0;
            max-width: 185px;
            margin-left: auto;
            opacity: 0;
            visibility: hidden;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            -webkit-transform: scaleX(0);
            transform: scaleX(0);
            z-index: 2;
            padding-left: 15px;
            padding-right: 15px;
        }

        .side-nav-responsive .container .container.active {
            opacity: 1;
            visibility: visible;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
        }

        .side-nav-responsive .side-nav-inner {
            padding: 10px;
            -webkit-box-shadow: 0 15px 40px rgba(0, 0, 0, 0.09);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.09);
            background-color: #ffffff;
        }

        .side-nav-responsive .side-nav-inner .side-nav {
            padding: 10px 0;
        }

        .side-nav-responsive .side-nav-inner .side-nav .side-item {
            padding-left: 10px;
            position: relative;
            display: inline-block;
        }

        .side-nav-responsive .side-nav-inner .side-nav .side-item:last-child {
            padding-left: 0;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item {
            display: inline-block;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .search-btn {
            font-size: 30px;
            margin-top: 10px;
            color: #ffffff;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            cursor: pointer;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .search-btn:hover {
            color: #2f3192;
            -webkit-transform: translateY(-5%);
            transform: translateY(-5%);
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .close-btn {
            font-size: 30px;
            color: #ffffff;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            display: none;
            cursor: pointer;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .close-btn:hover {
            color: #2f3192;
            -webkit-transform: translateY(-5%);
            transform: translateY(-5%);
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .close-btn.active {
            display: block;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .add-cart-btn {
            display: inline-block;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .add-cart-btn .cart-btn-icon {
            font-size: 30px;
            color: #ffffff;
            position: relative;
            display: inline-block;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .add-cart-btn .cart-btn-icon:hover {
            color: #10142D;
        }

        .side-nav-responsive .side-nav-inner .side-nav .option-item .add-cart-btn .cart-btn-icon span {
            position: absolute;
            top: 5px;
            right: -10px;
            width: 15px;
            height: 15px;
            line-height: 15px;
            background-color: #10142D;
            border-radius: 50%;
            text-align: center;
            color: #ffffff;
            font-size: 11px;
        }

        .sticky-nav {
            top: 0;
            position: fixed;
            -webkit-animation: 900ms ease-in-out 5s normal none 1 running fadeInDown;
            animation: 900ms ease-in-out 5s normal none 1 running fadeInDown;
            -webkit-transition: 0.9s;
            transition: 0.9s;
            width: 100% !important;
            z-index: 2;
        }

        .sticky-nav .main-nav {
            top: 0;
            background-color: #FFF6F1;
            position: fixed;
            z-index: 2;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        .sticky-nav .nav-bar {
            background-color: #ffffff;
        }

        /*=================================
        Navbar Area End
        ====================================*/
        /*=================================
        Main Banner Area 
        ====================================*/
        .slider-area {
            position: relative;
        }

        .slider-area .owl-nav {
            margin-top: 0;
        }

        .slider-area .owl-nav .owl-prev {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            left: 45px;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #707070 !important;
        }

        .slider-area .owl-nav .owl-prev:hover {
            background-color: #2f3192 !important;
        }

        .slider-area .owl-nav .owl-next {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            right: 45px;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            height: 40px;
            line-height: 40px;
            background-color: #707070 !important;
        }

        .slider-area .owl-nav .owl-next:hover {
            background-color: #2f3192 !important;
        }

        .slider-item {
            background-position: center center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .slider-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background-color: #02213d66;
        }

        .slider-content {
            padding-top: 200px;
            padding-bottom: 200px;
            position: relative;
            z-index: 1;
        }

        .slider-content span {
            color: #2f3192;
        }

        .slider-content h1 {
            margin-top: 10px;
            font-size: 65px;
            color: #ffffff;
            font-weight: 700;
            margin-bottom: 25px;
            line-height: 1.3;
            max-width: 570px;
        }

        .slider-content p {
            color: #ffffff;
            margin-bottom: 40px;
            font-size: 18px;
            font-weight: 400;
            max-width: 530px;
        }

        .slider-content .slider-btn .get-btn {
            padding: 12px 30px;
            border-radius: 3px;
            background-color: #2f3192;
            color: #ffffff;
            -webkit-transition: 0.7s;
            transition: 0.7s;
        }

        .slider-content .slider-btn .get-btn:hover {
            background-color: #10142D;
            color: #ffffff;
        }

        .banner-area {
            background-color: #F7F8FB;
        }

        .banner-content {
            position: relative;
            z-index: 1;
            max-width: 540px;
            margin-left: auto;
        }

        .banner-content span {
            margin: 0;
            font-weight: 500;
            background-color: #2f3192;
            padding: 5px 18px;
            color: #ffffff;
            display: inline-block;
        }

        .banner-content h1 {
            margin-top: 10px;
            font-size: 60px;
            color: #10142D;
            font-weight: 700;
            margin-bottom: 25px;
            line-height: 1.3;
        }

        .banner-content p {
            color: #10142D;
            margin-bottom: 40px;
            font-size: 18px;
            font-weight: 400;
            max-width: 530px;
        }

        .banner-content .banner-btn .get-btn {
            padding: 12px 30px;
            background-color: #10142D;
            color: #ffffff;
            -webkit-transition: 0.7s;
            transition: 0.7s;
        }

        .banner-content .banner-btn .get-btn:hover {
            background-color: #2f3192;
            color: #ffffff;
        }

        .banner-img {
            margin-top: 50px;
            margin-bottom: 50px;
        }

        .banner-img img {
            border-radius: 100px 0 0 100px;
        }

        /*=================================
        Main Banner Area End
        ====================================*/
        /*================================
        Inner Banner
        ==================================*/
        .inner-banner {
            position: relative;
            background-position: center center;
            background-size: cover;
            top:80px;
            margin-bottom: 80px;
        }

        .inner-banner img {
            min-height: 200px;
        }

        .inner-banner::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            background-color: #000000;
            opacity: 0.5;
        }

        .inner-banner .inner-title {
            padding-top: 150px;
            padding-bottom: 150px;
        }

        .inner-banner .inner-title h3 {
            font-size: 35px;
            color: #ffffff;
            font-weight: 500;
            position: relative;
        }

        .inner-banner .inner-title ul {
            list-style: none;
            padding: 0;
            margin: 0;
            position: relative;
        }

        .inner-banner .inner-title ul li {
            font-size: 18px;
            color: #ffffff;
            display: inline-block;
        }

        .inner-banner .inner-title ul li i {
            color: #ffffff;
            margin: 0 10px;
        }

        .inner-banner .inner-title ul li a {
            color: #ffffff;
        }

        .inner-banner .inner-title ul li a:hover {
            color: #2f3192;
        }

        .inner-banner .container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /*================================
        Inner Banner End
        ==================================*/
        .brand-area {
            background-color: #10142D;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .brand-item img {
            width: 115px !important;
            text-align: center;
            margin: 0 auto;
        }

        /*=================================
        Choose Area 
        ====================================*/
        .choose-area .section-title h2 {
            max-width: 475px;
            margin-left: auto;
            margin-right: auto;
        }

        .choose-card {
            position: relative;
            margin-bottom: 30px;
            background-color: #F7F8FB;
            padding: 30px;
            border-radius: 5px;
        }

        .choose-card .choose-icon {
            position: absolute;
            top: 30px;
            left: 30px;
            width: 45px;
            height: 45px;
            font-size: 24px;
            line-height: 45px;
            color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .choose-card .content {
            margin-left: 65px;
        }

        .choose-card .content h3 {
            font-size: 24px;
            color: #10142D;
            margin-bottom: 10px;
        }

        .choose-card .content p {
            margin-bottom: 15px;
            max-width: 235px;
        }

        .choose-card .content .read-more-btn {
            text-align: center;
            display: inline-block;
            color: #10142D;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            border-radius: 5px;
            padding: 7px 25px 7px 45px;
            position: relative;
            font-size: 16px;
            font-weight: 600;
        }

        .choose-card .content .read-more-btn .left-icon {
            display: inline-block;
            width: 35px;
            height: 35px;
            position: absolute;
            left: 0;
            top: 3px;
            line-height: 35px;
            background-color: #2f3192;
            color: #ffffff;
            border-radius: 5px;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            font-size: 20px;
        }

        .choose-card .content .read-more-btn .right-icon {
            position: absolute;
            right: 20px;
            top: 10px;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            opacity: 0;
            visibility: hidden;
            font-size: 20px;
            font-weight: normal;
        }

        .choose-card .content .read-more-btn:hover {
            background-color: #2f3192;
            color: #ffffff;
            padding-left: 20px;
            padding-right: 40px;
        }

        .choose-card .content .read-more-btn:hover .left-icon {
            opacity: 0;
            visibility: hidden;
        }

        .choose-card .content .read-more-btn:hover .right-icon {
            color: #ffffff;
            opacity: 1;
            visibility: visible;
        }

        .one-bg {
            background-color: #DE43A5;
        }

        .two-bg {
            background-color: #474DD5;
        }

        .three-bg {
            background-color: #FBCD03;
        }

        .choose-item {
            position: relative;
            margin-bottom: 30px;
            text-align: center;
            padding: 30px;
            background-color: #F7F8FB;
            border-radius: 5px;
        }

        .choose-item .choose-item-icon {
            width: 45px;
            height: 45px;
            font-size: 24px;
            line-height: 45px;
            color: #ffffff;
            border-radius: 5px;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 10px;
        }

        .choose-item h3 {
            font-size: 24px;
            color: #10142D;
            margin-bottom: 10px;
        }

        .choose-item p {
            margin-bottom: 15px;
            max-width: 235px;
            margin-left: auto;
            margin-right: auto;
        }

        .choose-item .read-more {
            font-weight: 600;
            color: #10142D;
            font-size: 16px;
        }

        .choose-item .read-more i {
            position: relative;
            top: 5px;
            font-size: 20px;
        }

        .choose-item .read-more:hover {
            color: #2f3192;
            letter-spacing: 0.25px;
        }

        /*=================================
        Choose Area End
        ====================================*/
        /*=================================
        About Area 
        ====================================*/
        .about-img {
            margin: 40px 40px 70px;
            position: relative;
        }

        .about-img img {
            border-radius: 15px;
        }

        .about-img .about-img-shape .shape-1 {
            position: absolute;
            top: -40px;
            right: -40px;
            z-index: -1;
        }

        .about-img .about-img-shape .shape-2 {
            position: absolute;
            top: -40px;
            left: -40px;
            z-index: -1;
        }

        .about-img .about-img-shape .shape-3 {
            position: absolute;
            bottom: -40px;
            left: -40px;
            z-index: -1;
        }

        .about-content {
            margin-bottom: 0;
            margin-left: 40px;
        }

        .about-content .section-title {
            margin-bottom: 30px;
        }

        .about-content ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .about-content ul li {
            display: block;
            margin-bottom: 10px;
        }

        .about-content ul li i {
            color: #2f3192;
            font-size: 20px;
            position: relative;
            top: 3px;
            margin-right: 10px;
        }

        .about-img-2 {
            margin-bottom: 60px;
            margin-left: 30px;
            position: relative;
            z-index: 1;
        }

        .about-img-2::before {
            content: '';
            position: absolute;
            top: 30px;
            width: 100%;
            height: 100%;
            left: -30px;
            background-color: #2f3192;
            z-index: -1;
        }

        /*=================================
        About Area End
        ====================================*/
        /*=================================
        Service Area 
        ====================================*/
        .service-area .owl-nav {
            margin-top: 0;
        }

        .service-area .owl-nav .owl-prev {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            left: -5%;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            border-radius: 50px;
            height: 40px;
            line-height: 40px;
            background-color: #707070 !important;
        }

        .service-area .owl-nav .owl-prev:hover {
            background-color: #2f3192 !important;
        }

        .service-area .owl-nav .owl-next {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            right: -5%;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50px;
            background-color: #707070 !important;
        }

        .service-area .owl-nav .owl-next:hover {
            background-color: #2f3192 !important;
        }

        .service-area .section-title h2 {
            max-width: 450px;
            margin-left: auto;
            margin-right: auto;
        }

        .service-area .section-title p {
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .service-item {
            background-color: #F7F8FB;
            padding: 30px 20px;
            text-align: center;
            margin-bottom: 30px;
        }

        .service-item:hover .read-more-btn {
            background-color: #2f3192;
            color: #ffffff;
            padding-left: 20px;
            padding-right: 40px;
        }

        .service-item:hover .read-more-btn .left-icon {
            opacity: 0;
            visibility: hidden;
        }

        .service-item:hover .read-more-btn .right-icon {
            color: #ffffff;
            opacity: 1;
            visibility: visible;
        }

        .service-item .service-icon {
            width: 60px;
            height: 60px;
            line-height: 60px;
            font-size: 30px;
            border-radius: 50px;
            text-align: center;
            margin-bottom: 15px;
            color: #ffffff;
            background-color: #2f3192;
        }

        .service-item h3 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .service-item h3 a {
            display: block;
            color: #342E36;
        }

        .service-item p {
            margin-bottom: 15px;
            max-width: 245px;
            margin-left: auto;
            margin-right: auto;
        }

        .service-item .read-more-btn {
            text-align: center;
            display: inline-block;
            color: #10142D;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            border-radius: 5px;
            padding: 7px 25px 7px 45px;
            position: relative;
            font-size: 16px;
            font-weight: 600;
        }

        .service-item .read-more-btn .left-icon {
            display: inline-block;
            width: 35px;
            height: 35px;
            position: absolute;
            left: 0;
            top: 3px;
            line-height: 35px;
            background-color: #2f3192;
            color: #ffffff;
            border-radius: 5px;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            font-size: 20px;
        }

        .service-item .read-more-btn .right-icon {
            position: absolute;
            right: 20px;
            top: 10px;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            opacity: 0;
            visibility: hidden;
            font-size: 20px;
            font-weight: normal;
        }

        .service-item .read-more-btn:hover {
            background-color: #2f3192;
            color: #ffffff;
            padding-left: 20px;
            padding-right: 40px;
        }

        .service-item .read-more-btn:hover .left-icon {
            opacity: 0;
            visibility: hidden;
        }

        .service-item .read-more-btn:hover .right-icon {
            color: #ffffff;
            opacity: 1;
            visibility: visible;
        }

        .service-card {
            margin-bottom: 30px;
        }

        .service-card:hover .content {
            width: 100%;
        }

        .service-card a {
            display: block;
        }

        .service-card .content {
            position: relative;
            margin-top: -100px;
            padding: 30px;
            background-color: #10142D;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            width: 90%;
        }

        .service-card .content i {
            display: inline-block;
            color: #2f3192;
            font-size: 55px;
            margin-bottom: 15px;
            -webkit-transition: 0.5s all ease;
            transition: 0.5s all ease;
            line-height: 1;
        }

        .service-card .content .service-icon-bg {
            position: absolute;
            right: 0;
            top: 0;
            font-size: 110px;
            opacity: 0.2;
            -webkit-transition: 0.5s all ease;
            transition: 0.5s all ease;
        }

        .service-card .content h3 {
            font-size: 22px;
            color: #ffffff;
            margin-bottom: 10px;
        }

        .service-card .content h3 a {
            color: #ffffff;
        }

        .service-card .content p {
            margin-bottom: 0;
            color: #ffffff;
        }

        .service-article {
            margin-bottom: 30px;
        }

        .service-article .service-article-img {
            margin-bottom: 30px;
        }

        .service-article .service-article-content h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .service-article .service-article-content p {
            margin-bottom: 20px;
        }

        .service-article .service-article-list {
            margin-bottom: 30px;
        }

        .service-article .service-article-list h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .service-article .service-article-list p {
            margin-bottom: 20px;
        }

        .service-article .service-article-list ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .service-article .service-article-list ul li {
            display: block;
            margin-bottom: 10px;
        }

        .service-article .service-article-list ul li i {
            color: #2f3192;
            font-size: 20px;
            position: relative;
            top: 3px;
            margin-right: 10px;
        }

        .service-article .service-article-choose h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .service-article .service-article-choose p {
            margin-bottom: 20px;
        }

        .service-article .service-article-choose ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .service-article .service-article-choose ul li {
            display: block;
            margin-bottom: 10px;
        }

        .service-article .service-article-choose ul li i {
            color: #2f3192;
            font-size: 20px;
            position: relative;
            top: 3px;
            margin-right: 10px;
        }

        .service-details-widget {
            margin-bottom: 35px;
            background-color: #F7F8FB;
        }

        .service-details-widget .title {
            font-size: 20px;
            color: #10142D;
            padding: 15px 0;
            font-weight: 600;
            position: relative;
            display: inline-block;
            margin-left: 30px;
            border-bottom: 3px solid #2f3192;
        }

        .service-details-widget .service-details-categories {
            padding: 10px 15px 20px;
        }

        .service-details-widget .service-details-categories ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .service-details-widget .service-details-categories ul li {
            position: relative;
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 500;
            border-bottom: 1px solid #ededed;
        }

        .service-details-widget .service-details-categories ul li a {
            display: inline-block;
            color: #10142D;
            font-weight: normal;
            padding: 7px 20px;
            font-weight: 500;
        }

        .service-details-widget .service-details-categories ul li a:hover {
            color: #2f3192;
        }

        .service-details-widget .service-widget-card {
            position: relative;
            margin-bottom: 30px;
            margin-left: 20px;
        }

        .service-details-widget .service-widget-card i {
            color: #2f3192;
            font-size: 35px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .service-details-widget .service-widget-card .content {
            margin-left: 50px;
        }

        .service-details-widget .service-widget-card .content h3 {
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .service-details-widget .service-widget-card .content p {
            margin-bottom: 0;
            color: #342E36;
            font-size: 15px;
        }

        .service-details-widget .service-widget-card .content p a {
            display: block;
            color: #342E36;
        }

        .service-details-widget .service-widget-card .content p a:hover {
            color: #2f3192;
        }

        .service-details-widget .service-widget-card .content span {
            margin-bottom: 0;
            color: #342E36;
        }

        .service-details-widget .service-widget-card .content span a {
            display: block;
            color: #342E36;
        }

        .service-details-widget .service-widget-card .content span a:hover {
            color: #2f3192;
        }

        /*=================================
        Service Area End
        ====================================*/
        /*=================================
        Pricing Area 
        ====================================*/
        .pricing-area {
            position: relative;
        }

        .pricing-area .section-title {
            margin-bottom: 75px;
        }

        .pricing-area .section-title h2 {
            max-width: 460px;
            margin-left: auto;
            margin-right: auto;
        }

        .pricing-area .section-title p {
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
        }

        .pricing-bg {
            background-color: #F7F8FB;
        }

        .color-2 {
            color: #2f3192;
        }

        .color-3 {
            color: #342E36;
        }

        .color-bg1 {
            background-color: #eaf3ff;
        }

        .color-bg2 {
            background-color: #fef4f0;
        }

        .color-bg3 {
            background-color: #f1f1f1;
        }

        .pricing-card {
            border: 1px dashed #94b7e2;
            padding: 5px;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            margin-bottom: 30px;
        }

        .pricing-card:hover {
            border-color: #2f3192;
        }

        .pricing-card .pricing-card-into {
            text-align: center;
            padding: 0 30px 30px;
        }

        .pricing-card .pricing-card-into .pricing-icon {
            position: relative;
            margin-top: -40px;
            background-color: #ffffff;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.03);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.03);
            width: 95px;
            height: 95px;
            font-size: 35px;
            border-radius: 50px;
            display: inline-block;
            text-align: center;
            line-height: 95px;
        }

        .pricing-card .pricing-card-into h3 {
            font-size: 20px;
            margin-bottom: 15px;
            margin-top: 15px;
            font-weight: 500;
            background-color: #ffffff;
            padding: 10px;
        }

        .pricing-card .price-rate {
            padding-bottom: 10px;
            border-bottom: 1px solid #b7d0ee;
            margin-bottom: 20px;
        }

        .pricing-card .price-rate h2 {
            font-size: 45px;
            line-height: 1;
            margin-bottom: 0;
        }

        .pricing-card .price-rate span {
            font-size: 16px;
        }

        .pricing-card ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .pricing-card ul li {
            display: block;
            color: #10142D;
            margin-top: 3px;
        }

        .pricing-card ul li i {
            color: #2f3192;
            font-size: 24px;
            position: relative;
            top: 3px;
        }

        .pricing-card ul li del {
            color: #10142D !important;
        }

        .pricing-card .purchase-btn {
            margin-top: 20px;
            padding: 10px 17px;
            color: #342E36;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
            text-transform: capitalize;
            border-radius: 15px;
            border: none;
            outline: none;
            -webkit-transition: 0.9s;
            transition: 0.9s;
            font-weight: 600;
            font-size: 14px;
            border: 1px solid #342E36;
        }

        .pricing-card .purchase-btn:hover {
            background-color: #2f3192;
            border-color: #2f3192;
            color: #ffffff;
        }

        /*=================================
        Pricing Area End
        ====================================*/
        /*=================================
        Product Area 
        ====================================*/
        .single-product {
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            border: 1px dashed #eeeeee;
            margin-bottom: 30px;
            position: relative;
        }

        .single-product a {
            display: block;
            text-align: center;
        }

        .single-product a img {
            border-bottom: 1px solid #2f319254;
            text-align: center;
            margin: 0 auto;
        }

        .single-product .product-content {
            padding: 30px 20px;
        }

        .single-product .product-content ul {
            list-style: none;
            padding: 0;
            line-height: 1;
            margin-bottom: 15px;
        }

        .single-product .product-content ul li {
            display: inline-block;
            color: #2f3192;
            padding: 0 5px;
        }

        .single-product .product-content ul li del {
            color: #10142D;
        }

        .single-product .product-content .rating {
            list-style: none;
            margin: 0 0 15px 0;
            padding: 0;
            float: right;
        }

        .single-product .product-content .rating li {
            color: #2f3192;
            font-size: 14px;
            display: inline-block;
        }

        .single-product .product-content h3 {
            text-transform: capitalize;
            margin-bottom: 0;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            font-size: 20px;
        }

        .single-product .product-content h3 a {
            color: #10142D;
            text-align: unset;
        }

        .single-product .product-content h3 a:hover {
            color: #2f3192;
        }

        .single-product .product-content .default-btn.product-btn {
            position: absolute;
            left: 0;
            right: 0;
            margin: 0 auto;
            max-width: 155px;
            border-radius: 0;
            bottom: 200px;
            padding: 10px 20px;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .single-product .product-content .default-btn.product-btn i {
            font-size: 20px;
            position: relative;
            top: 3px;
            margin-right: 5px;
        }

        .single-product:hover {
            background-color: #ffffff;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .single-product:hover .default-btn.product-btn {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .product-detls-image {
            margin-bottom: 30px;
            border: 1px dashed #eeeeee;
        }

        .product-detls-image:hover {
            border-color: #2f3192;
        }

        .product-desc {
            margin-bottom: 30px;
        }

        .product-desc h3 {
            margin-bottom: 12px;
            font-size: 24px;
            font-weight: 600;
        }

        .product-desc .price {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 600;
        }

        .product-desc .price .old-price {
            text-decoration: line-through;
            color: #10142D;
            margin-left: 10px;
        }

        .product-desc .product-review {
            margin-bottom: 15px;
        }

        .product-desc .product-review .rating {
            display: inline-block;
            padding-right: 5px;
            font-size: 14px;
        }

        .product-desc .product-review .rating i {
            color: #2f3192;
        }

        .product-desc .product-review .rating-count {
            margin-left: 5px;
            display: inline-block;
            color: #10142D;
            border-bottom: 1px solid #10142D;
            line-height: initial;
        }

        .product-desc .product-review .rating-count:hover {
            color: #2f3192;
            border-color: #2f3192;
        }

        .product-desc p {
            margin-bottom: 0;
        }

        .product-desc .input-count-area h3 {
            font-size: 16px;
            display: inline-block;
            font-weight: 500;
            margin-right: 15px;
        }

        .product-desc .input-count-area .input-counter {
            margin-top: 10px;
            max-width: 130px;
            min-width: 130px;
            margin-right: 10px;
            text-align: center;
            display: inline-block;
            position: relative;
            margin-bottom: 15px;
        }

        .product-desc .input-count-area .input-counter span {
            position: absolute;
            top: 2px;
            background-color: transparent;
            cursor: pointer;
            color: #10142D;
            width: 50px;
            height: 100%;
            line-height: 45px;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .product-desc .input-count-area .input-counter span:hover {
            color: #2f3192;
        }

        .product-desc .input-count-area .input-counter .minus-btn {
            left: 0;
        }

        .product-desc .input-count-area .input-counter .plus-btn {
            right: 0;
        }

        .product-desc .input-count-area .input-counter input {
            height: 45px;
            color: #10142D;
            outline: 0;
            display: block;
            border: none;
            background-color: #f8f8f8;
            text-align: center;
            width: 100%;
            font-size: 18px;
            font-weight: 500;
        }

        .product-desc .product-add-btn {
            margin-top: 20px;
        }

        .product-desc .product-add-btn .default-btn {
            border: none;
            margin-right: 20px;
            border-radius: 0;
        }

        .product-desc .product-share {
            margin-top: 30px;
        }

        .product-desc .product-share ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .product-desc .product-share ul li {
            display: inline-block;
            margin: 0 3px;
        }

        .product-desc .product-share ul li span {
            color: #10142D;
            margin-right: 5px;
            font-size: 16px;
        }

        .product-desc .product-share ul li a {
            width: 35px;
            height: 35px;
            background-color: #2f3192;
            font-size: 16px;
            color: #ffffff;
            line-height: 35px;
            border-radius: 50px;
            text-align: center;
        }

        .product-desc .product-share ul li a:hover {
            background-color: #10142D;
        }

        .product .input-count-area .input-counter input::-webkit-input-placeholder {
            color: #10142D;
        }

        .product .input-count-area .input-counter input:-ms-input-placeholder {
            color: #10142D;
        }

        .product .input-count-area .input-counter input::-ms-input-placeholder {
            color: #10142D;
        }

        .product .input-count-area .input-counter input::placeholder {
            color: #10142D;
        }

        .product-tab {
            background-color: #F7F8FB;
        }

        .products-details-tab .tabs {
            margin: 0;
            padding: 0;
            list-style: none;
            border-bottom: 1px solid #cccccc;
            text-align: center;
        }

        .products-details-tab .tabs li {
            display: inline-block;
            line-height: initial;
            margin-right: 25px;
        }

        .products-details-tab .tabs li a {
            display: inline-block;
            position: relative;
            font-size: 17px;
            font-weight: 600;
            color: #10142D;
            padding-bottom: 15px;
            border-bottom: 1px solid #b1acac;
        }

        .products-details-tab .tabs li a span {
            color: #2f3192;
        }

        .products-details-tab .tabs li a:focus {
            color: #2f3192;
            border-bottom: 1px solid #2f3192;
        }

        .products-details-tab .tabs li.active a {
            color: #2f3192;
            border-bottom: 1px solid #2f3192;
        }

        .products-details-tab .tabs li.active a span {
            color: #10142D;
        }

        .products-details-tab .tabs li.current a {
            color: #2f3192;
            border-bottom: 1px solid #2f3192;
        }

        .products-details-tab .tabs li.current a span {
            color: #10142D;
        }

        .products-tabs-decs {
            max-width: 840px;
            text-align: left;
            margin-left: auto;
            margin-right: auto;
        }

        .products-tabs-decs p {
            color: #10142D;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .products-tabs-reviews ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .products-tabs-reviews ul li {
            position: relative;
            padding-bottom: 40px;
            padding-left: 200px;
            margin-bottom: 30px;
            border-bottom: 1px solid #eeeeee;
        }

        .products-tabs-reviews ul li:last-child {
            margin-bottom: 0;
        }

        .products-tabs-reviews ul li img {
            position: absolute;
            top: 0;
            left: 90px;
        }

        .products-tabs-reviews ul li h3 {
            margin-bottom: 5px;
            font-size: 20px;
            font-weight: 600;
            color: #10142D;
        }

        .products-tabs-reviews ul li .content .rating {
            display: inline-block;
            color: #ee8100;
            margin-right: 20px;
            position: relative;
        }

        .products-tabs-reviews ul li .content .rating::before {
            content: '';
            position: absolute;
            top: 3px;
            right: -13px;
            width: 1px;
            height: 20px;
            background-color: #cccccc;
        }

        .products-tabs-reviews ul li .content span {
            margin-bottom: 10px;
            display: inline-block;
        }

        .products-tabs-reviews ul li p {
            margin-bottom: 0;
            max-width: 650px;
        }

        .reviews-form {
            margin-top: 35px;
        }

        .reviews-form .contact-form {
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .reviews-form .contact-form h3 {
            text-align: center;
            font-size: 24px;
            color: #10142D;
            margin-bottom: 10px;
        }

        .reviews-form .contact-form .form-group .form-control {
            background-color: #ffffff;
            border-radius: 0;
        }

        .reviews-form p {
            text-align: center;
            color: #10142D;
            margin-bottom: 10px;
        }

        .reviews-form .rating {
            text-align: center;
            color: #2f3192;
            position: relative;
            margin-bottom: 30px;
        }

        /*=================================
        Product Area End
        ====================================*/
        /*=================================
        Cart Wraps Area
        ===================================*/
        .cart-wraps-area .cart-table table {
            margin-bottom: 0;
        }

        .cart-wraps-area .cart-table table thead tr th {
            border-bottom-width: 0px;
            vertical-align: middle;
            padding: 15px 0;
            text-transform: uppercase;
            border: none;
            font-weight: 700;
            font-size: 18px;
        }

        .cart-wraps-area .cart-table table tbody tr td {
            vertical-align: middle;
            color: #10142D;
            padding-left: 0;
            padding-right: 0;
            font-size: 15px;
            border-color: #eeeeee;
            border-left: none;
            border-right: none;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-thumbnail a {
            display: block;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-thumbnail a img {
            width: 60px;
            height: 60px;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-name a {
            color: #10142D;
            font-weight: 600;
            display: inline-block;
            font-size: 16px;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-name a:hover {
            color: #2f3192 !important;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-subtotal .remove {
            color: #10142D;
            float: right;
            position: relative;
            top: 1px;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-subtotal .remove i {
            font-size: 24px;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-subtotal .remove:hover {
            color: #2f3192;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-subtotal span {
            font-weight: 600;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter {
            max-width: 130px;
            min-width: 130px;
            text-align: center;
            display: inline-block;
            position: relative;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter span {
            position: absolute;
            top: 0;
            background-color: transparent;
            cursor: pointer;
            color: #10142D;
            width: 40px;
            height: 100%;
            line-height: 48px;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter span:hover {
            color: #2f3192 !important;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter .minus-btn {
            left: 0;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter .minus-btn:hover {
            color: #2f3192 !important;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter .plus-btn {
            right: 0;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter .plus-btn:hover {
            color: #2f3192 !important;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter input {
            height: 45px;
            color: #10142D;
            outline: 0;
            display: block;
            border: none;
            background-color: #f8f8f8;
            text-align: center;
            width: 100%;
            font-size: 17px;
            font-weight: 600;
        }

        .cart-wraps-area .cart-table .table> :not(:first-child) {
            border-top: 0;
        }

        .cart-wraps-area .cart-buttons {
            margin-top: 30px;
        }

        .cart-wraps-area .cart-totals {
            background: #ffffff;
            padding: 40px;
            -webkit-box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
            box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
            border-radius: 0;
            margin: auto;
            margin-top: 50px;
        }

        .cart-wraps-area .cart-totals h3 {
            font-size: 24px;
            margin-bottom: 25px;
        }

        .cart-wraps-area .cart-totals ul {
            padding: 0;
            margin: 0 0 25px;
            list-style-type: none;
        }

        .cart-wraps-area .cart-totals ul li {
            border: 1px solid #b8b08c;
            padding: 10px 15px;
            color: #10142D;
            overflow: hidden;
            font-weight: 500;
        }

        .cart-wraps-area .cart-totals ul li:first-child {
            border-bottom: none;
        }

        .cart-wraps-area .cart-totals ul li:nth-child(3) {
            border-top: none;
        }

        .cart-wraps-area .cart-totals ul li:last-child {
            border-top: none;
        }

        .cart-wraps-area .cart-totals ul li span {
            float: right;
            color: #10142D;
            font-weight: normal;
        }

        .cart-wraps-area .cart-calc {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 40px;
            -webkit-box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
            box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.08);
        }

        .cart-wraps-area .cart-calc .cart-wraps-form h3 {
            font-size: 24px;
            color: #10142D;
            padding-bottom: 20px;
        }

        .cart-wraps-area .cart-calc .cart-wraps-form .form-group {
            margin-bottom: 20px;
        }

        .cart-wraps-area .cart-calc .cart-wraps-form .form-group select {
            height: 50px;
            padding: 7px 18px;
            color: #6c777d;
            border: 1px solid #cfcfcf;
        }

        .cart-wraps-area .cart-calc .cart-wraps-form .form-group select:focus,
        .cart-wraps-area .cart-calc .cart-wraps-form .form-group select :hover {
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #2f3192;
            background-color: #10142D !important;
        }

        .cart-wraps-area .cart-calc .cart-wraps-form .form-group select option {
            padding: 10px;
        }

        .cart-wraps-area .cart-calc .cart-wraps-form .form-group select option:hover {
            background-color: #10142D !important;
        }

        .cart-wraps-area .cart-calc .cart-wraps-form .form-group .form-control {
            font-size: 16px;
            border: 1px solid #b8b08c;
            color: #6c777d;
            padding: 12px 18px;
            font-weight: 400;
        }

        .cart-wraps-area .cart-calc .cart-wraps-form .form-group .form-control:focus,
        .cart-wraps-area .cart-calc .cart-wraps-form .form-group .form-control :hover {
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #cfcfcf;
        }

        .cart-wraps-area .cart-calc .nice-select {
            height: 50px;
            width: 100%;
            margin-bottom: 19px;
            border: 1px solid #b8b08c;
        }

        .cart-wraps-area .cart-calc .nice-select .list {
            width: 100%;
        }

        .cart-wraps-area .cart-calc .nice-select .option {
            color: #10142D !important;
        }

        .cart-wraps-area .cart-calc .nice-select .option :hover {
            color: #ffffff !important;
            background-color: #2f3192 !important;
        }

        .cart-wraps-area .cart-calc .nice-select .current {
            position: relative;
            top: 4px;
            font-weight: 500;
            color: #6c777d;
        }

        .cart-wraps-area .nice-select .option.focus,
        .cart-wraps-area .nice-select .option.selected.focus,
        .cart-wraps-area .nice-select .option:hover {
            background-color: #10142D !important;
            color: #ffffff !important;
            font-weight: 600;
        }

        .cart-wraps-area .cart-calc select .option.focus,
        .cart-wraps-area .cart-calc .nice-select .option.selected.focus {
            background-color: #10142D !important;
            color: #ffffff !important;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter input::-webkit-input-placeholder {
            color: #2f3192;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter input:-ms-input-placeholder {
            color: #2f3192;
        }

        .cart-wraps-area.cart-table table tbody tr td.product-quantity .input-counter input::-ms-input-placeholder {
            color: #2f3192;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter input::-webkit-input-placeholder {
            color: #2f3192;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter input:-ms-input-placeholder {
            color: #2f3192;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter input::-ms-input-placeholder {
            color: #2f3192;
        }

        .cart-wraps-area .cart-table table tbody tr td.product-quantity .input-counter input::placeholder {
            color: #2f3192;
        }

        .cart-wraps-area .cart-calc .cart-wraps-area form .form-control input::-webkit-input-placeholder {
            color: #6c777d;
        }

        .cart-area .cart-calc .cart-wraps-area form .form-control input:-ms-input-placeholder {
            color: #6c777d;
        }

        .cart-area .cart-area .cart-calc .cart-wraps-area .form-control input::-ms-input-placeholder {
            color: #6c777d;
        }

        .cart-area .cart-area .cart-calc .cart-wraps-area .form-control input::-webkit-input-placeholder {
            color: #495057;
        }

        .cart-area .cart-area .cart-calc .cart-wraps-area .form-control input:-ms-input-placeholder {
            color: #495057;
        }

        .cart-area .cart-area .cart-calc .cart-wraps-area .form-control input::placeholder {
            color: #495057;
        }

        /*=================================
        Cart Wraps Area End
        ===================================*/
        /*=================================
        Checkout Area 
        ===================================*/
        .checkout-area .checkout-user {
            -webkit-box-shadow: 0 5px 35px 0 rgba(0, 0, 0, 0.08);
            box-shadow: 0 5px 35px 0 rgba(0, 0, 0, 0.08);
            background: #ffffff;
            padding: 20px 15px;
            margin-bottom: 65px;
            border-top: 3px solid #2f3192;
            color: #2f3192;
        }

        .checkout-area .checkout-user span {
            color: #10142D;
            font-size: 20px;
        }

        .checkout-area .checkout-user span a {
            color: #2f3192;
        }

        .checkout-area .checkout-user span a:hover {
            color: #10142D;
        }

        .billing-details {
            margin-bottom: 30px;
            background-color: #ffffff;
            padding: 50px 30px 25px 30px;
            -webkit-box-shadow: 0 5px 28px rgba(0, 0, 0, 0.07);
            box-shadow: 0 5px 28px rgba(0, 0, 0, 0.07);
        }

        .billing-details h3 {
            font-size: 24px;
            color: #10142D;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .billing-details .form-group {
            margin-bottom: 25px;
        }

        .billing-details .form-group label {
            color: #10142D;
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .billing-details .form-group label span {
            color: #2f3192;
        }

        .billing-details .form-group .form-control {
            height: 50px;
            color: #2d3652;
            border: 1px solid #e8e8e8;
            background-color: #fcfcff;
            border-radius: 0;
            padding: 10px 20px;
            width: 100%;
        }

        .billing-details .form-group .form-control:focus,
        .billing-details .form-group .form-control :hover {
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #10142D;
        }

        .billing-details .form-group .form-message {
            font-size: 16px;
            border: 1px solid #e8e8e8;
            background-color: #fcfcff;
            padding: 18px 18px;
            font-weight: 400;
            width: 100%;
        }

        .billing-details .form-group .form-message:focus,
        .billing-details .form-group .form-message :hover {
            outline: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 1px solid #10142D;
        }

        .billing-details .form-group .nice-select {
            float: unset;
            line-height: 45px;
            color: #10142D;
            padding-top: 0;
            padding-bottom: 0;
            font-weight: 500;
        }

        .billing-details .form-group .nice-select .list {
            background-color: #ffffff;
            -webkit-box-shadow: 0px 0px 29px 0px rgba(102, 102, 102, 0.1);
            box-shadow: 0px 0px 29px 0px rgba(102, 102, 102, 0.1);
            border-radius: 0;
            margin-top: 0;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .billing-details .form-group .nice-select .list .option {
            -webkit-transition: 0.5s;
            transition: 0.5s;
            padding-left: 20px;
            padding-right: 20px;
        }

        .billing-details .form-group .nice-select .list .option:hover {
            background-color: #2f3192 !important;
            color: #ffffff;
        }

        .billing-details .form-group .nice-select .list .option:focus {
            border: none;
            outline: none;
        }

        .billing-details .form-group .nice-select .list .option .selected {
            background-color: transparent;
        }

        .billing-details .form-group .nice-select:after {
            right: 20px;
        }

        .billing-details .form-check {
            margin-bottom: 15px;
        }

        .billing-details .form-check .form-check-input {
            width: 15px;
            height: 15px;
        }

        .billing-details .form-check .form-check-label {
            color: #10142D;
            margin-left: 5px;
            font-weight: 500;
        }

        .checkout-area .billing-details .form-group .nice-select .option:hover,
        .checkout-area .billing-details .form-group .nice-select .option.focus,
        .checkout-area .billing-details .form-group .nice-select .option.selected.focus {
            background-color: #2f3192 !important;
            color: #ffffff !important;
            border: none;
            outline: none;
        }

        .order-details .order-table {
            background-color: #ffffff;
            padding: 50px 30px;
            -webkit-box-shadow: 0 5px 28px rgba(0, 0, 0, 0.07);
            box-shadow: 0 5px 28px rgba(0, 0, 0, 0.07);
        }

        .order-details .order-table h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .order-details .order-table table {
            margin-bottom: 0;
        }

        .order-details .order-table table thead tr th {
            border-bottom-width: 0;
            vertical-align: middle;
            border-color: #eaedff;
            padding-left: 20px;
            padding-top: 15px;
            padding-right: 20px;
            padding-bottom: 15px;
            font-weight: 600;
            color: #10142D;
            font-size: 18px;
        }

        .order-details .order-table table tbody tr td {
            vertical-align: middle;
            color: #10142D;
            border-color: #eaedff;
            font-size: 14px;
            padding-left: 20px;
            padding-right: 20px;
            font-weight: 600;
        }

        .order-details .order-table table tbody tr td.product-name a {
            color: #6e768f;
            display: inline-block;
            font-weight: 600;
        }

        .order-details .order-table table tbody tr td.product-name a:hover {
            color: #2f3192;
        }

        .order-details .order-table table tbody tr td.order-subtotal span {
            color: #10142D;
            font-weight: 600;
        }

        .order-details .order-table table tbody tr td.order-shipping span {
            color: #10142D;
            font-weight: 700;
        }

        .order-details .order-table table tbody tr td.total-price span {
            color: #10142D;
            font-weight: 700;
        }

        .order-details .order-table table tbody tr td.shipping-price {
            font-weight: 700;
        }

        .order-details .order-table table tbody tr td.order-subtotal-price {
            font-weight: 700;
        }

        .order-details .order-table table tbody tr td.product-subtotal {
            font-weight: 700;
        }

        .order-details .payment-box {
            background-color: #ffffff;
            -webkit-box-shadow: 0 5px 28px rgba(0, 0, 0, 0.07);
            box-shadow: 0 5px 28px rgba(0, 0, 0, 0.07);
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 50px 30px;
        }

        .order-details .payment-box .payment-method p [type="radio"]:checked {
            display: none;
        }

        .order-details .payment-box .payment-method p [type="radio"]:checked+label {
            padding-left: 27px;
            cursor: pointer;
            display: block;
            font-weight: 600;
            color: #2f3192;
            position: relative;
            margin-bottom: 8px;
        }

        .order-details .payment-box .payment-method p [type="radio"]:checked+label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 3px;
            width: 18px;
            height: 18px;
            border: 1px solid #dddddd;
            border-radius: 50%;
            background: #ffffff;
        }

        .order-details .payment-box .payment-method p [type="radio"]:checked+label::after {
            content: '';
            width: 12px;
            height: 12px;
            background: #2f3192;
            position: absolute;
            top: 6px;
            left: 3px;
            border-radius: 50%;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            opacity: 1;
            visibility: visible;
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        .order-details .payment-box .payment-method p [type="radio"]:not(:checked) {
            display: none;
        }

        .order-details .payment-box .payment-method p [type="radio"]:not(:checked)+label {
            padding-left: 27px;
            cursor: pointer;
            display: block;
            font-weight: 600;
            color: #172541;
            position: relative;
            margin-bottom: 8px;
        }

        .order-details .payment-box .payment-method p [type="radio"]:not(:checked)+label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 3px;
            width: 18px;
            height: 18px;
            border: 1px solid #dddddd;
            border-radius: 50%;
            background: #ffffff;
        }

        .order-details .payment-box .payment-method p [type="radio"]:not(:checked)+label::after {
            content: '';
            width: 12px;
            height: 12px;
            background: #2f3192;
            position: absolute;
            top: 6px;
            left: 3px;
            border-radius: 50%;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            opacity: 0;
            visibility: hidden;
            -webkit-transform: scale(0);
            transform: scale(0);
        }

        .order-details .payment-box .order-btn {
            margin-top: 20px;
            display: block;
            text-align: center;
            width: 100%;
            padding: 12px 27px;
            color: #ffffff;
            text-align: center;
            position: relative;
            overflow: hidden;
            z-index: 1;
            background-color: #2f3192;
        }

        .order-details .payment-box .order-btn::before {
            content: "";
            position: absolute;
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: #08104d;
            z-index: -1;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
        }

        .order-details .payment-box .order-btn:hover {
            color: #ffffff;
            border: none;
        }

        .order-details .payment-box .order-btn:hover::before {
            left: auto;
            right: 0;
            width: 100%;
        }

        .billing-details .form-group .nice-select .option:hover,
        .billing-details .form-group .nice-select .option.focus,
        .billing-details .form-group .nice-select .option.selected.focus {
            background-color: #2f3192 !important;
            color: #ffffff !important;
        }

        /*=================================
        Checkout Area End
        ===================================*/
        /*==================================
        Faq Area 
        =================================*/
        .faq-accordion {
            max-width: 100%;
            margin-right: auto;
            margin-left: auto;
            margin-bottom: 30px;
        }

        .faq-accordion .accordion {
            list-style-type: none;
            padding-left: 0;
            margin-bottom: 0;
        }

        .faq-accordion .accordion .accordion-item {
            display: block;
            background-color: #ffffff;
            margin-bottom: 15px;
            -webkit-box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            box-shadow: 0 0 20px 3px rgba(0, 0, 0, 0.05);
            border: none;
        }

        .faq-accordion .accordion .accordion-item:last-child {
            margin-bottom: 0;
        }

        .faq-accordion .accordion .accordion-title {
            padding: 20px 60px 17px 20px;
            color: #232350;
            text-decoration: none;
            position: relative;
            display: block;
            font-size: 18px;
            font-weight: 600;
        }

        .faq-accordion .accordion .accordion-title i {
            position: absolute;
            right: 15px;
            top: 15px;
            font-size: 25px;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            font-size: 24px;
            width: 40px;
            height: 40px;
            color: #2f3192;
            border-radius: 50px;
            border: 1px solid #2f3192;
            text-align: center;
            line-height: 40px;
            background-color: transparent;
        }

        .faq-accordion .accordion .accordion-title.active i {
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg);
            top: 15px;
        }

        .faq-accordion .accordion .accordion-content {
            display: none;
            position: relative;
            margin-top: -5px;
            padding-bottom: 10px;
            padding-right: 30px;
            padding-left: 30px;
        }

        .faq-accordion .accordion .accordion-content p {
            line-height: 1.8;
        }

        .faq-accordion .accordion .accordion-content.show {
            display: block;
        }

        /*==================================
        Faq Area End
        =================================*/
        /*=================================
        Achievements Area 
        ====================================*/
        .achievements-area .section-title h2 {
            max-width: 415px;
            margin-left: auto;
            margin-right: auto;
        }

        .achievements-area .section-title p {
            max-width: 570px;
            margin-left: auto;
            margin-right: auto;
        }

        .achievements-card {
            padding: 45px 45px;
            border-radius: 50%;
            text-align: center;
            margin-bottom: 30px;
        }

        .achievements-card i {
            font-size: 60px;
            margin-bottom: 10px;
            line-height: 1.2;
        }

        .achievements-card h3 {
            color: #10142D;
            margin-top: 15px;
            font-size: 30px;
            line-height: 1;
        }

        .achievements-card span {
            font-size: 18px;
            color: #342E36;
        }

        .achievements-bg-1 {
            background-color: #DCF9EE;
        }

        .achievements-bg-1 i {
            color: #46B58B;
        }

        .achievements-bg-2 {
            background-color: #FEF5E2;
        }

        .achievements-bg-2 i {
            color: #A88845;
        }

        .achievements-bg-3 {
            background-color: #FFE7EA;
        }

        .achievements-bg-3 i {
            color: #D66E7B;
        }

        .achievements-bg-4 {
            background-color: #E0DFEE;
        }

        .achievements-bg-4 i {
            color: #5751B4;
        }

        /*=================================
        Achievements Area End
        ====================================*/
        /*=================================
        Counter Area 
        ====================================*/
        .single-counter {
            margin-bottom: 30px;
            text-align: center;
        }

        .single-counter i {
            font-size: 50px;
            margin-bottom: 10px;
            line-height: 1.2;
            background-color: #F7F8FB;
            width: 90px;
            height: 90px;
            line-height: 90px;
            display: inline-block;
            border-radius: 5px;
        }

        .single-counter h3 {
            color: #10142D;
            margin-top: 15px;
            font-size: 30px;
            line-height: 1;
        }

        .single-counter span {
            font-size: 18px;
            color: #342E36;
        }

        .icon-color-1 {
            color: #46B58B;
        }

        .icon-color-2 {
            color: #A88845;
        }

        .icon-color-3 {
            color: #D66E7B;
        }

        .icon-color-4 {
            color: #5751B4;
        }

        /*=================================
        Counter Area End
        ====================================*/
        /*=================================
        Project Area 
        ====================================*/
        .project-title {
            margin-bottom: 30px;
        }

        .project-text {
            margin-top: 50px;
            margin-bottom: 30px;
        }

        .project-text p {
            margin-bottom: 0;
        }

        .project-tab {
            margin-top: 10px;
        }

        .project-tab .tabs {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .project-tab .tabs li {
            display: inline-block;
            line-height: initial;
            margin-right: 25px;
        }

        .project-tab .tabs li a {
            display: inline-block;
            position: relative;
            font-size: 17px;
            font-weight: 600;
            color: #10142D;
        }

        .project-tab .tabs li a:focus {
            color: #2f3192;
        }

        .project-tab .tabs li.active a {
            color: #2f3192;
        }

        .project-tab .tabs li.current a {
            color: #2f3192;
        }

        .tab .tabs_item {
            display: none;
        }

        .tab .tabs_item:first-child {
            display: block;
        }

        .project-card {
            margin-bottom: 30px;
            border-radius: 5px;
            position: relative;
            text-align: center;
            overflow: hidden;
        }

        .project-card:hover .project-content {
            padding: 20px;
            height: auto;
            width: 100%;
            background-color: #17161691;
            bottom: 0;
        }

        .project-card:hover .project-content .content {
            opacity: 1;
        }

        .project-card:hover .project-card-bottom {
            width: 80%;
            opacity: 1;
        }

        .project-card a {
            display: block;
        }

        .project-card a img {
            border-radius: 5px;
        }

        .project-card .project-content {
            position: absolute;
            bottom: -150px;
            left: 0;
            right: 0;
            background-color: #17161691;
            padding: 10px 20px;
            height: auto;
            border-radius: 5px;
            -webkit-transition: 0.9s;
            transition: 0.9s;
            overflow: hidden;
        }

        .project-card .project-content h3 {
            font-weight: 400;
            margin-bottom: 0;
        }

        .project-card .project-content h3 a {
            color: #ffffff;
        }

        .project-card .project-content .content {
            margin-top: 10px;
            margin-bottom: 10px;
            opacity: 0;
        }

        .project-card .project-content .content p {
            color: #ffffff;
            margin-bottom: 15px;
        }

        .project-card .project-content .content .project-more {
            text-align: center;
            line-height: 30px;
            margin: 0 auto;
            font-size: 16px;
            color: #ffffff;
            border-radius: 20px;
        }

        .project-card .project-content .content .project-more:hover {
            color: #2f3192;
            text-decoration: underline;
        }

        .project-card .project-card-bottom {
            position: absolute;
            bottom: 0;
            width: 0;
            background-color: #2f3192;
            opacity: 0;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            left: 0;
            right: 0;
            margin: 0 auto;
            height: 3px;
            border-radius: 5px;
        }

        .project-area-two {
            background-color: #F7F8FB;
        }

        .project-area-two .section-title {
            padding-left: 20px;
            padding-right: 20px;
        }

        .project-area-two .section-title h2 {
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .project-area-two .section-title p {
            max-width: 570px;
            margin-left: auto;
            margin-right: auto;
        }

        .single-project {
            position: relative;
            overflow: hidden;
        }

        .single-project:hover a {
            bottom: 0;
        }

        .single-project a {
            position: absolute;
            bottom: -70px;
            left: 0;
            width: 100%;
            background-color: #ffffff;
            line-height: 1;
            color: #10142D;
            padding: 20px 30px;
            -webkit-transition: all ease 0.5s;
            transition: all ease 0.5s;
            font-weight: 600;
            font-size: 22px;
            border-bottom: 1px solid #eeeeee;
        }

        .single-project a i {
            float: right;
        }

        .project-details-slider .owl-nav {
            margin-top: 0;
        }

        .project-details-slider .owl-nav .owl-prev {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            left: -5px;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            border-radius: 0;
            height: 40px;
            line-height: 40px;
            background-color: #2f3192 !important;
        }

        .project-details-slider .owl-nav .owl-prev:hover {
            background-color: #10142D !important;
        }

        .project-details-slider .owl-nav .owl-next {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            right: -5px;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 0;
            background-color: #2f3192 !important;
        }

        .project-details-slider .owl-nav .owl-next:hover {
            background-color: #10142D !important;
        }

        .project-details-item {
            margin-bottom: 30px;
        }

        .project-article h2 {
            font-size: 26px;
            margin-bottom: 20px;
        }

        .project-article p {
            margin-bottom: 20px;
        }

        .project-article .blockquote {
            position: relative;
            margin-bottom: 40px;
            margin-top: 40px;
            background-color: #F7F8FB;
            padding: 30px;
        }

        .project-article .blockquote::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            text-align: center;
            font-size: 50px;
            font-weight: 400;
            background-color: #2f3192;
        }

        .project-article .blockquote p {
            font-size: 20px;
            color: #10142D;
            font-weight: 500;
            margin-top: 10px;
            margin-bottom: 0;
            margin-left: 20px;
        }

        .project-article-list {
            margin-bottom: 30px;
        }

        .project-article-list h2 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .project-article-list p {
            margin-bottom: 20px;
        }

        .project-article-list ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .project-article-list ul li {
            display: block;
            margin-bottom: 10px;
        }

        .project-article-list ul li i {
            color: #2f3192;
            font-size: 20px;
            position: relative;
            top: 3px;
            margin-right: 10px;
        }

        .project-side-bar {
            margin-bottom: 30px;
        }

        .project-categories {
            padding: 10px 15px 20px;
            background-color: #F7F8FB;
            margin-bottom: 35px;
        }

        .project-categories h3 {
            font-size: 20px;
            color: #10142D;
            margin-bottom: 10px;
            margin-top: 20px;
            margin-left: 10px;
            padding-bottom: 15px;
            font-weight: 600;
            position: relative;
        }

        .project-categories h3::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 35%;
            height: 3px;
            background-color: #2f3192;
        }

        .project-categories ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .project-categories ul li {
            position: relative;
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 500;
            border-bottom: 1px solid #ededed;
        }

        .project-categories ul li a {
            display: inline-block;
            color: #10142D;
            font-weight: normal;
            padding: 7px 20px;
            font-weight: 500;
        }

        .project-categories ul li a:hover {
            color: #2f3192;
        }

        .project-categories ul li span {
            padding: 7px 15px;
            float: right;
            color: #646060;
            font-weight: 500;
        }

        .side-bar-from {
            background-color: #F7F8FB;
            padding: 30px 20px;
            margin-bottom: 35px;
        }

        .side-bar-from h3 {
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 15px;
        }

        .side-bar-from h3::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 35%;
            height: 3px;
            background-color: #2f3192;
        }

        .side-bar-from .appointment-form {
            margin-bottom: 0;
            margin-right: 0;
        }

        .side-bar-from .appointment-form .form-group .form-control {
            background-color: #ffffff;
            border-radius: 0;
        }

        .side-bar-from .appointment-form .default-btn {
            padding: 10px 20px;
            border-radius: 0;
            font-size: 14px;
            font-weight: 500;
        }

        /*=================================
        Project Area End
        ====================================*/
        /*=================================
        Testimonials Area 
        ====================================*/
        .testimonials-area {
            position: relative;
        }

        .testimonials-area .section-title h2 {
            max-width: 415px;
            margin-left: auto;
            margin-right: auto;
        }

        .testimonials-area .owl-dots {
            margin-top: 0px !important;
            margin-bottom: 30px;
            left: 35px !important;
            position: absolute;
            bottom: 65px;
        }

        .testimonials-area .owl-dots .owl-dot span {
            background-color: transparent !important;
            width: 15px !important;
            height: 15px !important;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            border: 1px solid #2f3192;
            position: relative;
        }

        .testimonials-area .owl-dots .owl-dot span::before {
            content: '';
            width: 8px;
            height: 8px;
            position: absolute;
            background-color: #2f3192;
            top: 2.9px;
            left: 1px;
            right: 1px;
            text-align: center;
            margin: 0 auto;
            border-radius: 50px;
            opacity: 0;
        }

        .testimonials-area .owl-dots .owl-dot.active span::before {
            opacity: 1;
        }

        .testimonials-area .owl-dots .owl-dot:hover span::before {
            opacity: 1;
        }

        .testimonials-img {
            margin-right: 20px;
            margin-bottom: 30px;
            position: relative;
            margin-top: 35px;
        }

        .testimonials-img img {
            border-radius: 15px;
        }

        .testimonials-img .quote-text {
            position: absolute;
            top: -25px;
            left: -25px;
            background-color: #2f3192;
            width: 70px;
            height: 70px;
            font-size: 35px;
            color: #ffffff;
            line-height: 70px;
            text-align: center;
            border-radius: 50px;
        }

        .testimonials-content {
            margin-left: 40px;
        }

        .testimonials-content h3 {
            margin-bottom: 5px;
        }

        .testimonials-content span {
            font-size: 16px;
            color: #838383;
        }

        .testimonials-content p {
            margin-top: 10px;
            font-size: 18px;
            font-weight: 500;
            color: #838383;
            margin-bottom: 40px;
        }

        .testimonials-bg {
            background-color: #F7F8FB;
        }

        /*=================================
        Testimonials Area End
        ====================================*/
        /*=================================
        Team Area
        ====================================*/
        .team-area {
            position: relative;
        }

        .team-area .section-title h2 {
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .team-area .section-title p {
            max-width: 560px;
            margin-left: auto;
            margin-right: auto;
        }

        .team-area .owl-nav {
            margin-top: 0;
        }

        .team-area .owl-nav .owl-prev {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            left: -5%;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            border-radius: 50px;
            height: 40px;
            line-height: 40px;
            background-color: #707070 !important;
        }

        .team-area .owl-nav .owl-prev:hover {
            background-color: #2f3192 !important;
        }

        .team-area .owl-nav .owl-next {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-16px);
            transform: translateY(-16px);
            right: -5%;
            color: #ffffff !important;
            font-size: 20px !important;
            width: 40px;
            height: 40px;
            line-height: 40px;
            border-radius: 50px;
            background-color: #707070 !important;
        }

        .team-area .owl-nav .owl-next:hover {
            background-color: #2f3192 !important;
        }

        .team-item {
            margin-bottom: 30px;
            background-color: #ffffff;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .team-item:hover .team-img img {
            -webkit-filter: brightness(0.5);
            filter: brightness(0.5);
        }

        .team-item:hover .team-img .social-icon .social-link li a {
            -webkit-transform: scaleY(1);
            transform: scaleY(1);
        }

        .team-item .team-img {
            position: relative;
        }

        .team-item .team-img img {
            border-radius: 5px;
        }

        .team-item .team-img .social-icon {
            position: absolute;
            right: 0;
            left: 0;
            text-align: center;
            margin: 0 auto;
            bottom: 40px;
        }

        .team-item .team-img .social-icon .social-link {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .team-item .team-img .social-icon .social-link li {
            display: inline-block;
            margin-right: 5px;
        }

        .team-item .team-img .social-icon .social-link li a {
            border-radius: 3px;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 35px;
            height: 35px;
            margin: 0 auto;
            line-height: 37px;
            text-align: center;
            -webkit-transform: scaleY(0);
            transform: scaleY(0);
            color: #10142D;
            background-color: #ffffff;
            -webkit-transition: 0.7s;
            transition: 0.7s;
        }

        .team-item .team-img .social-icon .social-link li a:hover {
            background-color: #2f3192;
            color: #ffffff;
            border-radius: 50px;
        }

        .team-item .content {
            padding: 30px 20px;
            position: relative;
        }

        .team-item .content::before {
            content: '';
            position: absolute;
            top: 35px;
            left: 0px;
            width: 3px;
            height: 45px;
            background-color: #2f3192;
        }

        .team-item .content h3 {
            font-size: 20px;
            margin-bottom: 5px;
        }

        .team-item .content span {
            color: #6e607c;
        }

        /*=================================
        Team Area End
        ====================================*/
        /*=================================
        Blog Area
        ====================================*/
        .blog-area .section-title h2 {
            max-width: 450px;
            margin-left: auto;
            margin-right: auto;
        }

        .blog-area .section-title p {
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .blog-card {
            background-color: #F2F2F5;
            margin-bottom: 30px;
        }

        .blog-card:hover .content h3 a {
            color: #2f3192;
        }

        .blog-card:hover .content .read-more-btn {
            color: #10142D;
            letter-spacing: 0.25px;
        }

        .blog-card a {
            display: block;
        }

        .blog-card a img {
            max-width: 100%;
        }

        .blog-card .blog-img {
            position: relative;
        }

        .blog-card .blog-img .date {
            position: absolute;
            bottom: -1px;
            left: 0;
            background-color: #2f3192;
            padding: 7px 30px 7px 20px;
            font-weight: 600;
            font-size: 15px;
            color: #ffffff;
            -webkit-clip-path: polygon(0 0, 88% 0%, 100% 100%, 0% 100%);
            clip-path: polygon(0 0, 88% 0%, 100% 100%, 0% 100%);
        }

        .blog-card .content {
            padding: 20px;
        }

        .blog-card .content span {
            font-weight: 500;
            color: #342E36;
            position: relative;
            margin-left: 30px;
        }

        .blog-card .content span::before {
            content: '';
            position: absolute;
            bottom: 3px;
            left: -30px;
            width: 30px;
            height: 1px;
            background-color: #2f3192;
        }

        .blog-card .content h3 {
            margin-top: 5px;
            margin-bottom: 10px;
            font-size: 22px;
        }

        .blog-card .content h3 a {
            display: block;
            color: #342E36;
        }

        .blog-card .content p {
            margin-bottom: 15px;
        }

        .blog-card .content .read-more-btn {
            color: #342E36;
            font-weight: 600;
            display: block;
        }

        .blog-card-bg {
            background-color: #ffffff;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            -webkit-transition: 0.7s;
            transition: 0.7s;
        }

        .blog-card-bg:hover {
            -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
        }

        .blog-article {
            margin-bottom: 30px;
        }

        .blog-article .blog-article-img {
            margin-bottom: 30px;
        }

        .blog-article .blog-status {
            padding-bottom: 20px;
            border-bottom: 2px solid #F7F8FB;
            margin-bottom: 30px;
        }

        .blog-article .blog-status ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .blog-article .blog-status ul li {
            display: inline-block;
            color: #10142D;
            margin-right: 30px;
            position: relative;
        }

        .blog-article .blog-status ul li::before {
            content: '';
            position: absolute;
            top: 3px;
            width: 1px;
            height: 20px;
            background-color: #e0dde3;
            right: -20px;
        }

        .blog-article .blog-status ul li:last-child {
            margin-right: 0;
        }

        .blog-article .blog-status ul li:last-child::before {
            display: none;
        }

        .blog-article .blog-status ul li a {
            color: #2f3192;
            display: inline-block;
        }

        .blog-article .blog-status ul li a:hover {
            color: #10142D;
        }

        .blog-article .blog-status .blog-comment {
            float: right;
        }

        .blog-article .blog-status .blog-comment h3 {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 0;
        }

        .blog-article .blog-status .blog-comment h3 i {
            color: #2f3192;
            margin-right: 5px;
            position: relative;
            top: 2px;
        }

        .blog-article .article-content h2 {
            font-size: 26px;
            margin-bottom: 20px;
        }

        .blog-article .article-content p {
            margin-bottom: 20px;
        }

        .blog-article .article-content .blockquote {
            position: relative;
            margin-bottom: 40px;
            margin-top: 40px;
            background-color: #F7F8FB;
            padding: 30px;
        }

        .blog-article .article-content .blockquote::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 3px;
            height: 100%;
            text-align: center;
            font-size: 50px;
            font-weight: 400;
            background-color: #2f3192;
        }

        .blog-article .article-content .blockquote p {
            font-size: 20px;
            color: #10142D;
            font-weight: 500;
            margin-top: 10px;
            margin-bottom: 0;
            margin-left: 20px;
        }

        .blog-article .another-content p {
            margin-bottom: 20px;
        }

        .blog-article .another-content .content-img {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .blog-article .blog-article-share {
            margin-top: 30px;
            border-bottom: 1px solid #e0dde3;
            padding-bottom: 30px;
        }

        .blog-article .blog-article-share .social-icon {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .blog-article .blog-article-share .social-icon li {
            display: inline-block;
            margin-right: 5px;
            color: #10142D;
        }

        .blog-article .blog-article-share .social-icon li:first-child {
            margin-right: 15px;
            font-weight: 600;
        }

        .blog-article .blog-article-share .social-icon li a {
            width: 30px;
            height: 30px;
            line-height: 32px;
            text-align: center;
            background-color: #2f3192;
            color: #ffffff;
            border-radius: 3px;
        }

        .blog-article .blog-article-share .social-icon li a:hover {
            background-color: #10142D;
            color: #ffffff;
        }

        .blog-article .blog-profile {
            margin-top: 30px;
            padding-top: 20px;
        }

        .blog-article .blog-profile ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .blog-article .blog-profile ul li {
            position: relative;
            padding: 0 30px 15px;
            padding-left: 170px;
        }

        .blog-article .blog-profile ul li img {
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 30px;
        }

        .blog-article .blog-profile ul li h3 {
            margin-bottom: 0;
            font-size: 20px;
            font-weight: 500;
        }

        .blog-article .blog-profile ul li p {
            margin-bottom: 0;
        }

        .blog-article .comments-wrap {
            padding-top: 20px;
        }

        .blog-article .comments-wrap .title {
            font-size: 24px;
            margin-bottom: 30px;
            color: #10142D;
            font-weight: 500;
        }

        .blog-article .comments-wrap ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .blog-article .comments-wrap ul li {
            position: relative;
            padding: 30px;
            padding-left: 140px;
            margin-bottom: 30px;
            background-color: #F7F8FB;
        }

        .blog-article .comments-wrap ul li:last-child {
            margin-bottom: 0;
        }

        .blog-article .comments-wrap ul li img {
            border-radius: 50%;
            position: absolute;
            top: 30px;
            left: 30px;
        }

        .blog-article .comments-wrap ul li h3 {
            margin-bottom: 0;
            font-size: 20px;
            font-weight: 500;
        }

        .blog-article .comments-wrap ul li span {
            margin-bottom: 10px;
            display: block;
            font-size: 14px;
            color: #8b8b8b;
        }

        .blog-article .comments-wrap ul li p {
            margin-bottom: 0;
        }

        .blog-article .comments-wrap ul li a {
            position: absolute;
            top: 27px;
            right: 30px;
            color: #2f3192;
            font-weight: 600;
        }

        .blog-article .comments-wrap ul li a:hover {
            color: #10142D;
        }

        .blog-article .comments-form {
            margin-top: 40px;
        }

        .blog-article .comments-form .contact-form .form-group .form-control {
            border-color: #988ea1;
            background-color: transparent;
            border-radius: 0;
        }

        .blog-article .comments-form .contact-form .default-btn {
            border-radius: 0;
        }

        .side-bar-wrap {
            margin-bottom: 30px;
        }

        .side-bar-widget {
            margin-bottom: 30px;
        }

        .search-widget {
            margin-bottom: 30px;
            background-color: #F7F8FB;
            padding: 20px;
        }

        .search-widget .search-form {
            position: relative;
        }

        .search-widget .search-form .form-control {
            height: 50px;
            border: 1px solid #988ea1;
            background-color: #ffffff;
            padding: 10px 20px;
            width: 100%;
            border-radius: 0;
        }

        .search-widget .search-form .form-control:focus {
            -webkit-box-shadow: none;
            box-shadow: none;
            outline: 0;
        }

        .search-widget .search-form button {
            position: absolute;
            top: 0;
            right: 0;
            height: 50px;
            width: 50px;
            background-color: #2f3192;
            -webkit-transition: all 0.5s;
            transition: all 0.5s;
            border: none;
            outline: none;
        }

        .search-widget .search-form button i {
            color: #ffffff;
        }

        .search-widget .search-form button:hover {
            background-color: #10142D;
        }

        .side-bar-widget {
            margin-bottom: 30px;
            background-color: #F7F8FB;
        }

        .side-bar-widget .title {
            font-size: 20px;
            color: #10142D;
            padding: 15px 0;
            font-weight: 600;
            position: relative;
            display: inline-block;
            margin-left: 30px;
            border-bottom: 3px solid #2f3192;
        }

        .side-bar-widget .side-bar-categories {
            padding: 10px 15px 20px;
        }

        .side-bar-widget .side-bar-categories ul {
            padding: 0;
            margin: 0;
            list-style-type: none;
        }

        .side-bar-widget .side-bar-categories ul li {
            position: relative;
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 500;
            border-bottom: 1px solid #ededed;
        }

        .side-bar-widget .side-bar-categories ul li a {
            display: inline-block;
            color: #10142D;
            font-weight: normal;
            padding: 7px 20px;
            font-weight: 500;
        }

        .side-bar-widget .side-bar-categories ul li a:hover {
            color: #2f3192;
        }

        .side-bar-widget .side-bar-categories ul li span {
            padding: 7px 15px;
            float: right;
            color: #2f3192;
            font-weight: 500;
        }

        .side-bar-widget .widget-popular-post {
            position: relative;
            overflow: hidden;
            padding: 20px 30px 30px;
        }

        .side-bar-widget .widget-popular-post .item {
            overflow: hidden;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        .side-bar-widget .widget-popular-post .item:last-child {
            margin-bottom: 0;
            border-bottom: none;
            padding-bottom: 0;
        }

        .side-bar-widget .widget-popular-post .item .thumb {
            float: left;
            overflow: hidden;
            position: relative;
            margin-right: 15px;
        }

        .side-bar-widget .widget-popular-post .item .thumb .full-image {
            width: 80px;
            height: 80px;
            display: inline-block;
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center center !important;
            position: relative;
            background-color: #10142D;
        }

        .side-bar-widget .widget-popular-post .item .info {
            overflow: hidden;
        }

        .side-bar-widget .widget-popular-post .item .info .title-text {
            margin-bottom: 5px;
            line-height: 1.5;
            font-size: 18px;
            font-weight: 500;
        }

        .side-bar-widget .widget-popular-post .item .info .title-text a {
            display: inline-block;
            color: #10142D;
        }

        .side-bar-widget .widget-popular-post .item .info .title-text a:hover {
            color: #2f3192;
        }

        .side-bar-widget .widget-popular-post .item .info p {
            font-size: 14px;
            margin-bottom: 0;
            max-width: 180px;
        }

        .side-bar-widget .side-bar-widget-tag {
            list-style: none;
            margin: 0;
            padding: 10px 20px 20px;
        }

        .side-bar-widget .side-bar-widget-tag li {
            display: inline-block;
            padding: 7px 15px;
            margin: 5px;
            -webkit-transition: 0.7s;
            transition: 0.7s;
            color: #10142D;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid #cbcbcb;
        }

        .side-bar-widget .side-bar-widget-tag li:hover {
            background-color: #2f3192;
            border-color: #2f3192;
        }

        .side-bar-widget .side-bar-widget-tag li a {
            color: #10142D;
        }

        .side-bar-widget .side-bar-widget-tag li:hover a {
            color: #ffffff;
        }

        .subscribe-area {
            background-color: #F7F8FB;
            padding: 30px;
        }

        .subscribe-area span {
            color: #2f3192;
            font-size: 13px;
        }

        .subscribe-area h2 {
            font-size: 20px;
            margin-top: 5px;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
        }

        .subscribe-area h2::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 35%;
            height: 3px;
            background-color: #2f3192;
        }

        .subscribe-area .subscribe-form {
            position: relative;
            border-radius: 50px;
        }

        .subscribe-area .subscribe-form .form-control {
            background: #ffffff;
            color: #10142D;
            height: 50px;
            line-height: 50px;
            margin: 0;
            border-radius: 0;
            border: 1px solid #cdcdcd;
            padding: 0 25px;
            width: 90%;
        }

        .subscribe-area .subscribe-form .form-control:focus {
            outline: none;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .subscribe-area .subscribe-form .default-btn {
            margin-top: 15px;
            outline: none;
            border: 0;
            border-radius: 0;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
        }

        /*=================================
        Blog Area End
        ====================================*/
        /*=================================
        Contact Area 
        ====================================*/
        .contact-form {
            max-width: 800px;
            position: relative;
            z-index: 1;
            margin-bottom: 30px;
        }

        .contact-form .section-title {
            margin-bottom: 30px;
        }

        .contact-form .section-title p {
            max-width: 500px;
        }

        .contact-form .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .contact-form .form-group .form-control {
            height: 50px;
            color: #948b9f;
            border: 1px solid #ebebeb;
            background-color: #f8f9fb;
            font-size: 14px;
            padding: 10px 20px;
            width: 100%;
        }

        .contact-form .form-group .form-control:focus {
            outline: none;
            border-color: #2f3192;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .contact-form .form-group textarea.form-control {
            height: auto;
        }

        .contact-form .with-errors {
            float: left;
            font-size: 14px;
            margin-top: 10px;
            margin-bottom: 0;
            color: #f00;
            font-weight: 400;
            display: block;
        }

        .contact-form .text-danger {
            font-size: 18px;
            margin-top: 15px;
        }

        .contact-form .default-btn {
            border: 0;
            outline: none;
            padding: 14px 60px;
        }

        .contact-form .form-group .form-control::-webkit-input-placeholder {
            color: #948b9f;
        }

        .contact-form .form-group .form-control:-ms-input-placeholder {
            color: #948b9f;
        }

        .contact-form .form-group .form-control::-ms-input-placeholder {
            color: #948b9f;
        }

        .contact-form .form-group .form-control::placeholder {
            color: #948b9f;
        }

        .contact-sidebar {
            padding: 50px 25px 20px;
            background-color: #F7F8FB;
        }

        .contact-sidebar h2 {
            font-size: 25px;
            margin-bottom: 10px;
        }

        .contact-sidebar p {
            margin-bottom: 30px;
        }

        .contact-card {
            position: relative;
            margin-bottom: 30px;
        }

        .contact-card i {
            color: #2f3192;
            font-size: 25px;
        }

        .contact-card .content h3 {
            font-size: 22px;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .contact-card .content p {
            margin-bottom: 0;
            color: #342E36;
        }

        .contact-card .content p a {
            display: block;
            color: #342E36;
        }

        .contact-card .content p a:hover {
            color: #2f3192;
        }

        .contact-card .content span {
            margin-bottom: 0;
            color: #342E36;
        }

        .contact-card .content span a {
            display: block;
            color: #342E36;
        }

        .contact-card .content span a:hover {
            color: #2f3192;
        }

        /*=================================
        Contact Area End
        ====================================*/
        /*=================================
        User All Form
        ====================================*/
        .user-all-form {
            margin-bottom: 30px;
        }

        .user-all-form .contact-form {
            background-color: #ffffff;
            -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 50px 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .user-all-form .contact-form .agree-label label {
            font-weight: 500;
            color: #10142D;
            margin-left: 10px;
        }

        .user-all-form .contact-form .forget {
            margin-bottom: 15px;
            float: right;
            color: #10142D;
            font-weight: 500;
        }

        .user-all-form .contact-form .forget:hover {
            color: #2f3192;
        }

        .user-all-form .contact-form .account-desc {
            margin-top: 15px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 0;
        }

        .user-all-form .contact-form .account-desc a {
            color: #10142D;
        }

        .user-all-form .contact-form .account-desc a:hover {
            color: #2f3192;
        }

        /*=================================
        User All Form End
        ====================================*/
        /*=================================
        Map Area 
        ====================================*/
        .map-area iframe {
            display: block;
            width: 100%;
            height: 400px;
        }

        /*=================================
        Map Area End
        ====================================*/
        .single-content {
            margin-bottom: 30px;
        }

        .single-content h3 {
            font-size: 24px;
            color: #10142D;
            margin-bottom: 10px;
        }

        .single-content p {
            margin-bottom: 0;
        }

        /*=================================
        Appointment Area 
        ====================================*/
        .appointment-bg {
            background-color: #F7F8FB;
        }

        .appointment-form {
            margin-bottom: 30px;
            margin-right: 45px;
        }

        .appointment-form .section-title {
            margin-bottom: 30px;
        }

        .appointment-form .section-title p {
            max-width: 615px;
            margin: 0;
        }

        .appointment-form .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .appointment-form .form-group .form-control {
            height: 50px;
            color: #948b9f;
            border: 1px solid #ebebeb;
            background-color: #f8f9fb;
            font-size: 14px;
            padding: 10px 20px;
            width: 100%;
        }

        .appointment-form .form-group .form-control:focus {
            outline: none;
            border-color: #2f3192;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .appointment-form .form-group textarea.form-control {
            height: auto;
        }

        .appointment-form .nice-select {
            height: 50px;
            width: 100%;
            line-height: 32px;
            font-size: 15px;
            margin-bottom: 30px;
            padding-left: 20px;
            color: #10142D;
            background-color: #2f3192;
        }

        .appointment-form .nice-select .list {
            background-color: #ffffff;
            -webkit-box-shadow: 0px 0px 29px 0px rgba(102, 102, 102, 0.1);
            box-shadow: 0px 0px 29px 0px rgba(102, 102, 102, 0.1);
            border-radius: 0;
            margin-top: 0;
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .appointment-form .nice-select .list .option {
            -webkit-transition: .6s;
            transition: .6s;
            color: #10142D;
            padding-left: 20px;
            padding-right: 20px;
        }

        .appointment-form .nice-select .list .option:hover {
            background-color: #2f3192 !important;
            color: #ffffff;
        }

        .appointment-form .nice-select .list .option .selected {
            background-color: transparent;
            font-weight: 600;
            color: #10142D;
        }

        .appointment-form .nice-select::after {
            height: 8px;
            width: 8px;
            border-color: #a7a7a7;
            right: 23px;
        }

        .appointment-form .default-btn {
            border: 0;
            outline: none;
            padding: 14px 60px;
        }

        .appointment-form-bg .form-group .form-control {
            background-color: #ffffff;
        }

        .appointment-img {
            position: relative;
            z-index: 1;
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        .appointment-img img {
            border-radius: 0 50px 0 50px;
        }

        .appointment-img::before {
            content: '';
            position: absolute;
            z-index: -1;
            top: -20px;
            left: -20px;
            width: 200px;
            height: 200px;
            background-color: #2f3192;
        }

        .appointment-img::after {
            content: '';
            position: absolute;
            z-index: -1;
            bottom: -20px;
            right: -20px;
            width: 200px;
            height: 200px;
            background-color: #2f3192;
        }

        /*=================================
        Appointment Area End
        ====================================*/
        /*==============================
        Pagination Area 
        =================================*/
        .pagination-area {
            margin-top: 10px;
            margin-bottom: 30px;
            text-align: center;
        }

        .pagination-area .page-numbers {
            width: 40px;
            height: 40px;
            line-height: 40px;
            color: #ffffff;
            background-color: #10142D;
            text-align: center;
            display: inline-block;
            position: relative;
            margin-left: 3px;
            margin-right: 3px;
            font-size: 18px;
            border-radius: 5px;
        }

        .pagination-area .page-numbers:hover {
            background-color: #2f3192;
        }

        .pagination-area .page-numbers i {
            position: relative;
            font-size: 25px;
            top: 5px;
        }

        .pagination-area .page-numbers.current {
            background-color: #2f3192;
        }

        /*==============================
        Pagination Area End
        =================================*/
        /*=================================
        404 Error Area
        ===================================*/
        .error-area .error-content {
            text-align: center;
            position: relative;
            padding-top: 140px;
            padding-bottom: 140px;
        }

        .error-area .error-content h1 {
            font-size: 300px;
            line-height: 0.7;
            font-weight: 700;
            color: #10142D;
        }

        .error-area .error-content h1 span {
            color: #2f3192;
        }

        .error-area .error-content h3 {
            margin: 50px 0 0;
            position: relative;
            color: #10142D;
            font-size: 35px;
        }

        .error-area .error-content p {
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 18px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
            color: #10142D;
        }

        /*=================================
        404 Error Area End
        ===================================*/
        /*================================== 
        Coming Soon Area 
        ====================================*/
        .coming-soon-area {
            position: relative;
            height: 100vh;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .coming-soon-area .coming-soon-content {
            text-align: center;
            max-width: 750px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
            z-index: 2;
            padding: 50px 30px;
            background-color: #F7F8FB;
            border: 3px solid #2f3192a3;
        }

        .coming-soon-area .coming-soon-content h1 {
            margin-bottom: 0;
            color: #10142D;
            font-size: 60px;
        }

        .coming-soon-area .coming-soon-content p {
            font-size: 16px;
            max-width: 600px;
            margin-top: 15px;
            margin-bottom: 0;
            margin-left: auto;
            margin-right: auto;
            color: #767079;
        }

        .coming-soon-area .coming-soon-content #timer {
            margin-top: 20px;
        }

        .coming-soon-area .coming-soon-content #timer div {
            display: inline-block;
            color: #10142D;
            position: relative;
            margin-left: 35px;
            margin-right: 35px;
            font-size: 45px;
            font-weight: 700;
        }

        .coming-soon-area .coming-soon-content #timer div span {
            display: block;
            text-transform: capitalize;
            margin-top: -15px;
            font-size: 16px;
            font-weight: normal;
            color: #10142D;
        }

        .coming-soon-area .coming-soon-content #timer div:last-child {
            margin-right: 0;
        }

        .coming-soon-area .coming-soon-content #timer div:last-child::before {
            display: none;
        }

        .coming-soon-area .coming-soon-content #timer div:first-child {
            margin-left: 0;
        }

        .coming-soon-area .coming-soon-content #timer div::before {
            content: "";
            position: absolute;
            right: -50px;
            top: -10px;
            font-size: 70px;
            color: #ffffff;
        }

        .coming-soon-area .coming-soon-content .newsletter-form {
            position: relative;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
        }

        .coming-soon-area .coming-soon-content .newsletter-form .input-newsletter {
            display: block;
            width: 100%;
            height: 60px;
            border: none;
            background-color: #ffffff;
            padding-left: 15px;
            color: #ffffff;
            outline: 0;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            border-radius: 0;
            border: 1px solid #cccccc;
            color: #5d5d5d;
        }

        .coming-soon-area .coming-soon-content .newsletter-form .input-newsletter:focus {
            border-color: #2f3192;
        }

        .coming-soon-area .coming-soon-content .newsletter-form .default-btn {
            border: 0;
            outline: 0;
            border-radius: 0 !important;
        }

        .coming-soon-area .coming-soon-content .newsletter-form button {
            position: absolute;
            right: 0;
            top: 0;
            height: 60px;
            padding: 0 30px;
            text-transform: uppercase;
            outline: 0;
            color: #ffffff;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            font-weight: 500;
            font-size: 15px;
            cursor: pointer;
        }

        .coming-soon-area .coming-soon-content .newsletter-form button::after {
            border-radius: 0;
        }

        .coming-soon-area .coming-soon-content .newsletter-form button::before {
            border-radius: 0;
        }

        .coming-soon-area .coming-soon-content .newsletter-form button:hover {
            color: #ffffff;
            background-color: #190f3c;
        }

        .coming-soon-area .coming-soon-content ul {
            list-style: none;
            margin-top: 30px;
            padding: 0;
        }

        .coming-soon-area .coming-soon-content ul li {
            display: inline-block;
            width: 45px;
            height: 45px;
            line-height: 50px;
            font-size: 18px;
            background-color: #2f3192;
            color: #ffffff;
            border-radius: 50px;
            margin-right: 10px;
        }

        .coming-soon-area .coming-soon-content ul li a {
            color: #ffffff;
        }

        .coming-soon-area .coming-soon-content ul li:hover {
            background-color: #10142D;
        }

        .coming-soon-area #validator-newsletter {
            text-align: left;
            color: #dc3545 !important;
        }

        /*================================== 
        Coming Soon Area End
        ====================================*/
        /*=================================
        Footer Area 
        ====================================*/
        .footer-area {
            background-color: #F2F2F5;
        }

        .footer-widget {
            margin-bottom: 30px;
        }

        .footer-widget .footer-logo {
            margin-bottom: 20px;
        }

        .footer-widget .footer-logo .footer-logo-two {
            display: none;
        }

        .footer-widget h3 {
            margin-top: 8px;
            font-size: 24px;
            color: #10142D;
            margin-bottom: 35px;
        }

        .footer-widget p {
            margin-bottom: 20px;
        }

        .footer-widget .footer-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-widget .footer-list li {
            display: block;
            color: #10142D;
            margin-bottom: 7px;
        }

        .footer-widget .footer-list li a {
            color: #10142D;
        }

        .footer-widget .footer-list li a:hover {
            color: #2f3192;
            letter-spacing: 0.15px;
        }

        .footer-widget .footer-list-two {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-widget .footer-list-two li {
            display: block;
            color: #10142D;
            margin-bottom: 7px;
            position: relative;
            padding-left: 30px;
        }

        .footer-widget .footer-list-two li i {
            margin-right: 5px;
            position: absolute;
            left: 0;
            top: 3px;
            font-size: 20px;
        }

        .footer-widget .footer-list-two li a {
            color: #10142D;
        }

        .footer-widget .footer-list-two li:hover {
            color: #2f3192;
        }

        .footer-widget .footer-list-two li:hover i {
            color: #10142D;
        }

        .footer-widget .footer-list-two li:hover a {
            color: #2f3192;
        }

        .footer-widget .newsletter-form {
            position: relative;
            border-radius: 50px;
        }

        .footer-widget .newsletter-form .form-control {
            background: #10142D;
            color: #ffffff;
            height: 50px;
            line-height: 50px;
            margin: 0;
            border-radius: 5px;
            border: none;
            padding: 0 25px;
            width: 90%;
        }

        .footer-widget .newsletter-form .form-control:focus {
            outline: none;
            border: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        .footer-widget .newsletter-form .default-btn {
            margin-top: 15px;
            outline: none;
            border: 0;
            padding: 12px 50px;
        }

        .footer-widget .newsletter-form .validation-danger {
            font-size: 16px;
            margin-top: 15px;
            color: red;
        }

        .footer-widget .newsletter-form .form-control::-webkit-input-placeholder {
            color: #948b9f;
        }

        .footer-widget .newsletter-form .form-control:-ms-input-placeholder {
            color: #948b9f;
        }

        .footer-widget .newsletter-form .form-control::-ms-input-placeholder {
            color: #948b9f;
        }

        .footer-widget .newsletter-form .form-control::placeholder {
            color: #948b9f;
        }

        .copy-right-area {
            padding: 15px;
            background-color: #10142D;
        }

        .copy-right-area .copy-right-text p {
            color: #ffffff;
            margin-bottom: 0;
        }

        .copy-right-area .copy-right-text p a {
            color: #5f62ff;
        }

        .copy-right-area .copy-right-text p a:hover {
            color: #ffffff;
            border-color: #ffffff;
        }

        /*=================================
        Footer Area End
        ====================================*/
        /*==================================
        Back To Top Button 
        =====================================*/
        #toTop {
            position: fixed;
            bottom: 20px;
            right: 20px;
            cursor: pointer;
            display: none;
            z-index: 99;
        }

        .top-btn {
            background-color: #2f3192;
            color: #ffffff;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            -webkit-box-shadow: 0 0 15px #2f3192;
            box-shadow: 0 0 15px #2f3192;
            font-size: 20px;
            display: inline-block;
            text-align: center;
            line-height: 45px;
            -webkit-transition: .9s;
            transition: .9s;
        }

        .top-btn:hover {
            background-color: #10142D;
            -webkit-box-shadow: 0 0 15px #08104d;
            box-shadow: 0 0 15px #08104d;
            color: #fff;
        }

        /*==============================
        Back To Top Button 
        =================================*/
        /*=================================
        Buy Now Btn
        ====================================*/
        .buy-now-btn {
            right: 20px;
            z-index: 99;
            top: 50%;
            position: fixed;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
            border-radius: 30px;
            display: inline-block;
            color: #ffffff;
            background-color: #82b440;
            padding: 10px 20px 10px 42px;
            -webkit-box-shadow: 0 1px 20px 1px #82b440;
            box-shadow: 0 1px 20px 1px #82b440;
            font-size: 13px;
            font-weight: 600;
        }

        .buy-now-btn img {
            top: 50%;
            left: 20px;
            width: 15px;
            position: absolute;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        .buy-now-btn:hover {
            color: #ffffff;
            background-color: #94be5d;
        }

        /*==================================
        Preloader CSS 
        =====================================*/
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999999;
            background-color: #10142D;
        }

        .spinner {
            width: 40px;
            height: 40px;
            border-radius: 5px;
            background-color: #ffffff;
            margin: 100px auto;
            -webkit-animation: rotate-in 1.2s infinite ease-in-out;
            animation: rotate-in 1.2s infinite ease-in-out;
        }

        @-webkit-keyframes rotate-in {
            0% {
                -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            }

            50% {
                -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            }

            100% {
                -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            }
        }

        @keyframes rotate-in {
            0% {
                -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                transform: perspective(120px) rotateX(0deg) rotateY(0deg);
            }

            50% {
                -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
            }

            100% {
                -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            }
        }

        /*==================================
        Preloader CSS End
        =====================================*/

        .fa-500px.color {
            color: #222
        }

        .fa-accusoft.color {
            color: #f47d48
        }

        .fa-acquisitions-incorporated.color {
            color: #bd992f
        }

        .fa-adn.color {
            color: #000
        }

        .fa-adobe.color {
            color: #e71b23
        }

        .fa-adversal.color {
            color: #ca0232
        }

        .fa-affiliatetheme.color {
            color: #bc1516
        }

        .fa-airbnb.color {
            color: #ff5a5f
        }

        .fa-algolia.color {
            color: #0f98f7
        }

        .fa-alipay.color {
            color: #00aeef
        }

        .fa-amazon.color {
            color: #f90
        }

        .fa-amazon-pay.color {
            color: #f90
        }

        .fa-amilia.color {
            color: #2f92de
        }

        .fa-android.color {
            color: #a4c639
        }

        .fa-angellist.color {
            color: #7fbb00
        }

        .fa-angrycreative.color {
            color: #f84e4e
        }

        .fa-angular.color {
            color: #dd0330
        }

        .fa-app-store.color {
            color: #1da0f8
        }

        .fa-app-store-ios.color {
            color: #1da0f8
        }

        .fa-apper.color {
            color: #120b14
        }

        .fa-apple.color {
            color: #000
        }

        .fa-apple-pay.color {
            color: #000
        }

        .fa-artstation.color {
            color: #12a8e8
        }

        .fa-asymmetrik.color {
            color: #be1e2d
        }

        .fa-atlassian.color {
            color: #0050c6
        }

        .fa-audible.color {
            color: #f1941e
        }

        .fa-autoprefixer.color {
            color: #d73534
        }

        .fa-avianex.color {
            color: #62606d
        }

        .fa-aviato.color {
            color: #2665b0
        }

        .fa-aws.color {
            color: #f90
        }

        .fa-bandcamp.color {
            color: #1da0c3
        }

        .fa-battle-net.color {
            color: #008dd3
        }

        .fa-behance.color {
            color: #1769ff
        }

        .fa-behance-square.color {
            color: #1769ff
        }

        .fa-bimobject.color {
            color: #0797d0
        }

        .fa-bitbucket.color {
            color: #205081
        }

        .fa-bitcoin.color {
            color: #f90
        }

        .fa-bity.color {
            color: #3190cf
        }

        .fa-black-tie.color {
            color: #000
        }

        .fa-blackberry.color {
            color: #000
        }

        .fa-blogger.color {
            color: #f06a35
        }

        .fa-blogger-b.color {
            color: #f06a35
        }

        .fa-bluetooth.color {
            color: #2b3490
        }

        .fa-bluetooth-b.color {
            color: #2b3490
        }

        .fa-bootstrap.color {
            color: #563d7c
        }

        .fa-btc.color {
            color: #f90
        }

        .fa-buffer.color {
            color: #000
        }

        .fa-buromobelexperte.color {
            color: #ed8003
        }

        .fa-buy-n-large.color {
            color: red
        }

        .fa-buysellads.color {
            color: #9f0012
        }

        .fa-canadian-maple-leaf.color {
            color: #dd0206
        }

        .fa-cc-amazon-pay.color {
            color: #f19321
        }

        .fa-cc-amex.color {
            color: #006cc9
        }

        .fa-cc-apple-pay.color {
            color: #000
        }

        .fa-cc-diners-club.color {
            color: #0069aa
        }

        .fa-cc-discover.color {
            color: #f78222
        }

        .fa-cc-jcb.color {
            color: #114997
        }

        .fa-cc-mastercard.color {
            color: #f90
        }

        .fa-cc-paypal.color {
            color: #002e82
        }

        .fa-cc-stripe.color {
            color: #6772e5
        }

        .fa-cc-visa.color {
            color: #0c54a8
        }

        .fa-centercode.color {
            color: #5fc4cd
        }

        .fa-centos.color {
            color: #932678
        }

        .fa-chrome.color {
            color: #4685f2
        }

        .fa-chromecast.color {
            color: #48b2e6
        }

        .fa-cloudscale.color {
            color: #04517d
        }

        .fa-cloudsmith.color {
            color: #539bbe
        }

        .fa-cloudversify.color {
            color: #24b8e3
        }

        .fa-codepen.color {
            color: #000
        }

        .fa-codiepie.color {
            color: #000
        }

        .fa-confluence.color {
            color: #0052cc
        }

        .fa-connectdevelop.color {
            color: #391448
        }

        .fa-contao.color {
            color: #f47c00
        }

        .fa-cotton-bureau.color {
            color: #ed5f53
        }

        .fa-cpanel.color {
            color: #ff6c2c
        }

        .fa-creative-commons.color {
            color: #000
        }

        .fa-creative-commons-by.color {
            color: #000
        }

        .fa-creative-commons-nc.color {
            color: #000
        }

        .fa-creative-commons-nc-eu.color {
            color: #000
        }

        .fa-creative-commons-nc-jp.color {
            color: #000
        }

        .fa-creative-commons-nd.color {
            color: #000
        }

        .fa-creative-commons-pd.color {
            color: #000
        }

        .fa-creative-commons-pd-alt.color {
            color: #000
        }

        .fa-creative-commons-remix.color {
            color: #000
        }

        .fa-creative-commons-sa.color {
            color: #000
        }

        .fa-creative-commons-sampling.color {
            color: #000
        }

        .fa-creative-commons-sampling-plus.color {
            color: #000
        }

        .fa-creative-commons-share.color {
            color: #000
        }

        .fa-creative-commons-zero.color {
            color: #000
        }

        .fa-critical-role.color {
            color: #000
        }

        .fa-css3.color {
            color: #016fba
        }

        .fa-css3-alt.color {
            color: #016fba
        }

        .fa-cuttlefish.color {
            color: #3972b9
        }

        .fa-d-and-d.color {
            color: #e62026
        }

        .fa-d-and-d-beyond.color {
            color: #e62026
        }

        .fa-dashcube.color {
            color: #4282c1
        }

        .fa-delicious.color {
            color: #4088da
        }

        .fa-deploydog.color {
            color: #000
        }

        .fa-deskpro.color {
            color: #4191cc
        }

        .fa-dev.color {
            color: #000
        }

        .fa-deviantart.color {
            color: #05c645
        }

        .fa-dhl.color {
            color: #cf0028
        }

        .fa-diaspora.color {
            color: #000
        }

        .fa-digg.color {
            color: #1b5791
        }

        .fa-digital-ocean.color {
            color: #007df8
        }

        .fa-discord.color {
            color: #6f85d4
        }

        .fa-discourse.color {
            color: #f2e88f
        }

        .fa-dochub.color {
            color: #31a0f3
        }

        .fa-docker.color {
            color: #2496ed
        }

        .fa-draft2digital.color {
            color: #ef4823
        }

        .fa-dribbble.color {
            color: #ea4c89
        }

        .fa-dribbble-square.color {
            color: #ea4c89
        }

        .fa-dropbox.color {
            color: #007ee5
        }

        .fa-drupal.color {
            color: #0077c0
        }

        .fa-dyalog.color {
            color: #fc9732
        }

        .fa-earlybirds.color {
            color: #c4d02c
        }

        .fa-ebay.color {
            color: #0064d2
        }

        .fa-edge.color {
            color: #3277bc
        }

        .fa-elementor.color {
            color: #f7285c
        }

        .fa-ello.color {
            color: #000
        }

        .fa-ember.color {
            color: #da4c37
        }

        .fa-empire.color {
            color: #000
        }

        .fa-envira.color {
            color: #7dbd4e
        }

        .fa-erlang.color {
            color: #a40532
        }

        .fa-ethereum.color {
            color: #393939
        }

        .fa-etsy.color {
            color: #f56400
        }

        .fa-evernote.color {
            color: #0a1
        }

        .fa-expeditedssl.color {
            color: #000
        }

        .fa-facebook.color {
            color: #3a5895
        }

        .fa-facebook-f.color {
            color: #3a5895
        }

        .fa-facebook-messenger.color {
            color: #3a5895
        }

        .fa-facebook-square.color {
            color: #3a5895
        }

        .fa-fantasy-flight-games.color {
            color: #03325a
        }

        .fa-fedex.color {
            color: #452e8d
        }

        .fa-fedora.color {
            color: #283f6f
        }

        .fa-figma.color {
            color: #f56257
        }

        .fa-firefox.color {
            color: #ff9500
        }

        .fa-first-order.color {
            color: #7c112d
        }

        .fa-first-order-alt.color {
            color: #7c112d
        }

        .fa-firstdraft.color {
            color: #000
        }

        .fa-flickr.color {
            color: #ff0084
        }

        .fa-flipboard.color {
            color: #f82d33
        }

        .fa-fly.color {
            color: #000
        }

        .fa-font-awesome.color {
            color: #228ae6
        }

        .fa-font-awesome-alt.color {
            color: #228ae6
        }

        .fa-font-awesome-flag.color {
            color: #228ae6
        }

        .fa-fonticons.color {
            color: #445962
        }

        .fa-fonticons-fi.color {
            color: #445962
        }

        .fa-fort-awesome.color {
            color: #2c2e37
        }

        .fa-fort-awesome-alt.color {
            color: #2c2e37
        }

        .fa-forumbee.color {
            color: #82a72e
        }

        .fa-foursquare.color {
            color: #f34575
        }

        .fa-free-code-camp.color {
            color: #006101
        }

        .fa-freebsd.color {
            color: #f80000
        }

        .fa-fulcrum.color {
            color: #7a9dc0
        }

        .fa-galactic-republic.color {
            color: #a02
        }

        .fa-galactic-senate.color {
            color: #000
        }

        .fa-get-pocket.color {
            color: #e24150
        }

        .fa-gg.color {
            color: #000
        }

        .fa-gg-circle.color {
            color: #000
        }

        .fa-git.color {
            color: #f05033
        }

        .fa-git-alt.color {
            color: #f05033
        }

        .fa-git-square.color {
            color: #f05033
        }

        .fa-github.color {
            color: #313030
        }

        .fa-github-alt.color {
            color: #313030
        }

        .fa-github-square.color {
            color: #313030
        }

        .fa-gitkraken.color {
            color: #127f76
        }

        .fa-gitlab.color {
            color: #f59f25
        }

        .fa-gitter.color {
            color: #e71453
        }

        .fa-glide.color {
            color: #0095f8
        }

        .fa-glide-g.color {
            color: #0095f8
        }

        .fa-gofore.color {
            color: #f8814f
        }

        .fa-goodreads.color {
            color: #73441d
        }

        .fa-goodreads-g.color {
            color: #73441d
        }

        .fa-google.color {
            color: #4082ee
        }

        .fa-google-drive.color {
            color: #4082ee
        }

        .fa-google-play.color {
            color: #4082ee
        }

        .fa-google-plus.color {
            color: #cc4339
        }

        .fa-google-plus-g.color {
            color: #cc4339
        }

        .fa-google-plus-square.color {
            color: #cc4339
        }

        .fa-google-wallet.color {
            color: #089a5b
        }

        .fa-gratipay.color {
            color: #633200
        }

        .fa-grav.color {
            color: #1a0528
        }

        .fa-gripfire.color {
            color: #e72125
        }

        .fa-grunt.color {
            color: #e18323
        }

        .fa-gulp.color {
            color: #e54849
        }

        .fa-hacker-news.color {
            color: #ff7416
        }

        .fa-hacker-news-square.color {
            color: #ff7416
        }

        .fa-hackerrank.color {
            color: #2ebe60
        }

        .fa-hips.color {
            color: #7db83f
        }

        .fa-hire-a-helper.color {
            color: #663136
        }

        .fa-hooli.color {
            color: #388afa
        }

        .fa-hornbill.color {
            color: #000
        }

        .fa-hotjar.color {
            color: #f63859
        }

        .fa-houzz.color {
            color: #4bb714
        }

        .fa-html5.color {
            color: #e34f26
        }

        .fa-hubspot.color {
            color: #ec7559
        }

        .fa-imdb.color {
            color: #eec017
        }

        .fa-instagram.color {
            color: #c83085
        }

        .fa-intercom.color {
            color: #1e89e7
        }

        .fa-internet-explorer.color {
            color: #35a0dc
        }

        .fa-invision.color {
            color: #ff3265
        }

        .fa-ioxhost.color {
            color: #faa829
        }

        .fa-itch-io.color {
            color: #fa5c5c
        }

        .fa-itunes.color {
            color: #e449ba
        }

        .fa-itunes-note.color {
            color: #e449ba
        }

        .fa-java.color {
            color: #f70100
        }

        .fa-jedi-order.color {
            color: #840000
        }

        .fa-jenkins.color {
            color: #000
        }

        .fa-jira.color {
            color: #0052cc
        }

        .fa-joget.color {
            color: #5c6f37
        }

        .fa-joomla.color {
            color: #17558b
        }

        .fa-js.color {
            color: #f7b31b
        }

        .fa-js-square.color {
            color: #f7b31b
        }

        .fa-jsfiddle.color {
            color: #3e99d0
        }

        .fa-kaggle.color {
            color: #35b5e2
        }

        .fa-keybase.color {
            color: #f86c20
        }

        .fa-keycdn.color {
            color: #047aed
        }

        .fa-kickstarter.color {
            color: #05c875
        }

        .fa-kickstarter-k.color {
            color: #05c875
        }

        .fa-korvue.color {
            color: #325689
        }

        .fa-laravel.color {
            color: #f82c1f
        }

        .fa-lastfm.color {
            color: #dd1b22
        }

        .fa-lastfm-square.color {
            color: #dd1b22
        }

        .fa-leanpub.color {
            color: #252324
        }

        .fa-less.color {
            color: #2a4c80
        }

        .fa-line.color {
            color: #4cc700
        }

        .fa-linkedin.color {
            color: #0170ad
        }

        .fa-linkedin-in.color {
            color: #0170ad
        }

        .fa-linode.color {
            color: #1ead58
        }

        .fa-linux.color {
            color: #000
        }

        .fa-lyft.color {
            color: #e40b88
        }

        .fa-magento.color {
            color: #eb6021
        }

        .fa-mailchimp.color {
            color: #000
        }

        .fa-mandalorian.color {
            color: #000
        }

        .fa-markdown.color {
            color: #000
        }

        .fa-mastodon.color {
            color: #2a8cd3
        }

        .fa-maxcdn.color {
            color: #ff6603
        }

        .fa-mdb.color {
            color: #3584d5
        }

        .fa-medapps.color {
            color: #072d80
        }

        .fa-medium.color {
            color: #000
        }

        .fa-medium-m.color {
            color: #000
        }

        .fa-medrt.color {
            color: #000
        }

        .fa-meetup.color {
            color: #e71b3e
        }

        .fa-megaport.color {
            color: #e20000
        }

        .fa-mendeley.color {
            color: #a91d27
        }

        .fa-microsoft.color {
            color: #00a8ea
        }

        .fa-mix.color {
            color: #f87d25
        }

        .fa-mixcloud.color {
            color: #000
        }

        .fa-mizuni.color {
            color: #2c2c34
        }

        .fa-modx.color {
            color: #81c04e
        }

        .fa-monero.color {
            color: #f86300
        }

        .fa-napster.color {
            color: #3255b2
        }

        .fa-neos.color {
            color: #00a8e7
        }

        .fa-nimblr.color {
            color: #f07936
        }

        .fa-node.color {
            color: #7fc728
        }

        .fa-node-js.color {
            color: #7fc728
        }

        .fa-npm.color {
            color: #c53635
        }

        .fa-ns8.color {
            color: #72b90e
        }

        .fa-nutritionix.color {
            color: #66ae43
        }

        .fa-odnoklassniki.color {
            color: #ee7e1f
        }

        .fa-odnoklassniki-square.color {
            color: #ee7e1f
        }

        .fa-old-republic.color {
            color: #000
        }

        .fa-opencart.color {
            color: #30ace9
        }

        .fa-openid.color {
            color: #f18f1d
        }

        .fa-opera.color {
            color: #f81a2c
        }

        .fa-optin-monster.color {
            color: #8acd1d
        }

        .fa-orcid.color {
            color: #a1c837
        }

        .fa-osi.color {
            color: #3ba137
        }

        .fa-page4.color {
            color: #475f89
        }

        .fa-pagelines.color {
            color: #000
        }

        .fa-palfed.color {
            color: #f6c407
        }

        .fa-patreon.color {
            color: #f96854
        }

        .fa-paypal.color {
            color: #002e82
        }

        .fa-penny-arcade.color {
            color: #054e8b
        }

        .fa-periscope.color {
            color: #40a4c4
        }

        .fa-phabricator.color {
            color: #000
        }

        .fa-phoenix-framework.color {
            color: #e94400
        }

        .fa-phoenix-squadron.color {
            color: #f89b35
        }

        .fa-php.color {
            color: #7478ae
        }

        .fa-pied-piper.color {
            color: #016d66
        }

        .fa-pied-piper-alt.color {
            color: #016d66
        }

        .fa-pied-piper-hat.color {
            color: #016d66
        }

        .fa-pied-piper-pp.color {
            color: #016d66
        }

        .fa-pinterest.color {
            color: #cb2027
        }

        .fa-pinterest-p.color {
            color: #cb2027
        }

        .fa-pinterest-square.color {
            color: #cb2027
        }

        .fa-playstation.color {
            color: #0467ad
        }

        .fa-product-hunt.color {
            color: #dc5425
        }

        .fa-pushed.color {
            color: #f9e302
        }

        .fa-python.color {
            color: #3572a3
        }

        .fa-qq.color {
            color: #000
        }

        .fa-quinscape.color {
            color: #021fad
        }

        .fa-quora.color {
            color: #a7352d
        }

        .fa-r-project.color {
            color: #1d62b2
        }

        .fa-raspberry-pi.color {
            color: #d0254d
        }

        .fa-ravelry.color {
            color: #eb1364
        }

        .fa-react.color {
            color: #00d8ff
        }

        .fa-reacteurope.color {
            color: #4d5fab
        }

        .fa-readme.color {
            color: #2484c6
        }

        .fa-rebel.color {
            color: #cc0003
        }

        .fa-red-river.color {
            color: #c7103f
        }

        .fa-reddit.color {
            color: #f83d17
        }

        .fa-reddit-alien.color {
            color: #f83d17
        }

        .fa-reddit-square.color {
            color: #f83d17
        }

        .fa-redhat.color {
            color: #e72333
        }

        .fa-renren.color {
            color: #025aa7
        }

        .fa-replyd.color {
            color: #000
        }

        .fa-researchgate.color {
            color: #00c6b6
        }

        .fa-resolving.color {
            color: #d1281c
        }

        .fa-rev.color {
            color: #e71b45
        }

        .fa-rocketchat.color {
            color: #d62122
        }

        .fa-rockrms.color {
            color: #e77323
        }

        .fa-safari.color {
            color: #1a8dee
        }

        .fa-salesforce.color {
            color: #00a1e0
        }

        .fa-sass.color {
            color: #cd6799
        }

        .fa-schlix.color {
            color: #000
        }

        .fa-scribd.color {
            color: #00808c
        }

        .fa-searchengin.color {
            color: #3187be
        }

        .fa-sellcast.color {
            color: #f15b2f
        }

        .fa-sellsy.color {
            color: #142632
        }

        .fa-servicestack.color {
            color: #000
        }

        .fa-shirtsinbulk.color {
            color: #da3925
        }

        .fa-shopware.color {
            color: #179af8
        }

        .fa-simplybuilt.color {
            color: #000
        }

        .fa-sistrix.color {
            color: #0074c2
        }

        .fa-sith.color {
            color: #9e1919
        }

        .fa-sketch.color {
            color: #fdad00
        }

        .fa-skyatlas.color {
            color: #4abec3
        }

        .fa-skype.color {
            color: #009dd9
        }

        .fa-slack.color {
            color: #481449
        }

        .fa-slack-hash.color {
            color: #481449
        }

        .fa-slideshare.color {
            color: #f48701
        }

        .fa-snapchat.color {
            color: #f8f501
        }

        .fa-snapchat-ghost.color {
            color: #f8f501
        }

        .fa-snapchat-square.color {
            color: #f8f501
        }

        .fa-soundcloud.color {
            color: #f85300
        }

        .fa-sourcetree.color {
            color: #0050c6
        }

        .fa-speakap.color {
            color: #f34d30
        }

        .fa-speaker-deck.color {
            color: #329563
        }

        .fa-spotify.color {
            color: #1dd15d
        }

        .fa-squarespace.color {
            color: #000
        }

        .fa-stack-exchange.color {
            color: #2c4b97
        }

        .fa-stack-overflow.color {
            color: #ec7d27
        }

        .fa-stackpath.color {
            color: #000
        }

        .fa-staylinked.color {
            color: #60ad44
        }

        .fa-steam.color {
            color: #314969
        }

        .fa-steam-square.color {
            color: #314969
        }

        .fa-steam-symbol.color {
            color: #314969
        }

        .fa-sticker-mule.color {
            color: #4a2317
        }

        .fa-strava.color {
            color: #f73400
        }

        .fa-stripe.color {
            color: #6772e5
        }

        .fa-stripe-s.color {
            color: #6772e5
        }

        .fa-studiovinari.color {
            color: #f4da8d
        }

        .fa-stumbleupon.color {
            color: #e54622
        }

        .fa-stumbleupon-circle.color {
            color: #e54622
        }

        .fa-superpowers.color {
            color: #f7d702
        }

        .fa-supple.color {
            color: #00bbec
        }

        .fa-suse.color {
            color: #32ce46
        }

        .fa-swift.color {
            color: #e94f36
        }

        .fa-symfony.color {
            color: #000
        }

        .fa-teamspeak.color {
            color: #277dbe
        }

        .fa-telegram.color {
            color: #2ca0db
        }

        .fa-telegram-plane.color {
            color: #2ca0db
        }

        .fa-tencent-weibo.color {
            color: #369bd4
        }

        .fa-the-red-yeti.color {
            color: #e31708
        }

        .fa-themeco.color {
            color: #1f4f99
        }

        .fa-themeisle.color {
            color: #1696bf
        }

        .fa-think-peaks.color {
            color: #239489
        }

        .fa-trade-federation.color {
            color: #000
        }

        .fa-trello.color {
            color: #0076ba
        }

        .fa-tripadvisor.color {
            color: #88be5b
        }

        .fa-tumblr.color {
            color: #314e6a
        }

        .fa-tumblr-square.color {
            color: #314e6a
        }

        .fa-twitch.color {
            color: #6240a1
        }

        .fa-twitter.color {
            color: #1c9deb
        }

        .fa-twitter-square.color {
            color: #1c9deb
        }

        .fa-typo3.color {
            color: #f88300
        }

        .fa-uber.color {
            color: #000
        }

        .fa-ubuntu.color {
            color: #d74613
        }

        .fa-uikit.color {
            color: #2b8eb9
        }

        .fa-umbraco.color {
            color: #3442ac
        }

        .fa-uniregistry.color {
            color: #00814e
        }

        .fa-untappd.color {
            color: #f8bb00
        }

        .fa-ups.color {
            color: #f8b000
        }

        .fa-usb.color {
            color: #000
        }

        .fa-usps.color {
            color: #00457d
        }

        .fa-ussunnah.color {
            color: #2b7f49
        }

        .fa-vaadin.color {
            color: #00afe9
        }

        .fa-viacoin.color {
            color: #1d84df
        }

        .fa-viadeo.color {
            color: #e76f50
        }

        .fa-viadeo-square.color {
            color: #e76f50
        }

        .fa-viber.color {
            color: #795098
        }

        .fa-vimeo.color {
            color: #3facd5
        }

        .fa-vimeo-square.color {
            color: #3facd5
        }

        .fa-vimeo-v.color {
            color: #3facd5
        }

        .fa-vine.color {
            color: #00ba8b
        }

        .fa-vk.color {
            color: #4f7db3
        }

        .fa-vnv.color {
            color: #219cd4
        }

        .fa-vuejs.color {
            color: #3fb37f
        }

        .fa-waze.color {
            color: #40cff8
        }

        .fa-weebly.color {
            color: #1f8ae7
        }

        .fa-weibo.color {
            color: #d12628
        }

        .fa-weixin.color {
            color: #2cbc00
        }

        .fa-whatsapp.color {
            color: #24cd63
        }

        .fa-whatsapp-square.color {
            color: #24cd63
        }

        .fa-whmcs.color {
            color: #003554
        }

        .fa-wikipedia-w.color {
            color: #000
        }

        .fa-windows.color {
            color: #00bcf2
        }

        .fa-wix.color {
            color: #000
        }

        .fa-wizards-of-the-coast.color {
            color: #7586bf
        }

        .fa-wolf-pack-battalion.color {
            color: #000
        }

        .fa-wordpress.color {
            color: #207297
        }

        .fa-wordpress-simple.color {
            color: #207297
        }

        .fa-wpbeginner.color {
            color: #f86300
        }

        .fa-wpexplorer.color {
            color: #0363d0
        }

        .fa-wpforms.color {
            color: #d27435
        }

        .fa-wpressr.color {
            color: #000
        }

        .fa-xbox.color {
            color: #10790f
        }

        .fa-xing.color {
            color: #00585c
        }

        .fa-xing-square.color {
            color: #00585c
        }

        .fa-y-combinator.color {
            color: #f4621d
        }

        .fa-yahoo.color {
            color: #5d00cd
        }

        .fa-yammer.color {
            color: #008cb8
        }

        .fa-yandex.color {
            color: #df251f
        }

        .fa-yandex-international.color {
            color: #f80000
        }

        .fa-yarn.color {
            color: #2b8ab6
        }

        .fa-yelp.color {
            color: #d3222d
        }

        .fa-yoast.color {
            color: #9d2667
        }

        .fa-youtube.color {
            color: #f7021a
        }

        .fa-youtube-square.color {
            color: #f7021a
        }

        .fa-zhihu.color {
            color: #0f84e5
        }

        .fixed-phone {
            position: fixed;
            bottom: 135px;
            right: 16px;
            border: 2px solid #fff;
            cursor: pointer;
            border-radius: 50%;
            z-index: 9;
            -webkit-box-shadow: -4px 1px 7px 0 rgb(84 84 84 / 35%);
            box-shadow: -1px 1px 5px 0 rgb(84 84 84 / 35%)
        }

        .fixed-whatsapp {
            position: fixed;
            bottom: 80px;
            right: 16px;
            border: 2px solid #fff;
            cursor: pointer;
            border-radius: 50%;
            z-index: 9;
            -webkit-box-shadow: -4px 1px 7px 0 rgba(84, 84, 84, .35);
            box-shadow: -1px 1px 5px 0 rgba(84, 84, 84, .35)
        }

        .fixed-maps i,
        .fixed-phone i,
        .fixed-phone2 i,
        .fixed-whatsapp i,
        .fixed-whatsapp2 i {
            height: 42px;
            width: 42px;
            line-height: 42px;
            font-size: 20px;
            margin: 2px;
            color: #fff;
            text-align: center;
            border-radius: 50%
        }

        .fixed-maps:hover i,
        .fixed-phone2:hover i,
        .fixed-phone:hover i,
        .fixed-whatsapp2:hover i,
        .fixed-whatsapp:hover i {
            animation: shake 1s cubic-bezier(.36, .07, .19, .97) both;
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            perspective: 1000px;
            color: #fff
        }

        .fixed-maps {
            position: fixed;
            bottom: 190px;
            right: 16px;
            border: 2px solid #fff;
            cursor: pointer;
            border-radius: 50%;
            z-index: 9;
            -webkit-box-shadow: -4px 1px 7px 0 rgb(84 84 84 / 35%);
            box-shadow: -1px 1px 5px 0 rgb(84 84 84 / 35%)
        }

        .border-radius {
            border-radius: 30px !important;
        }
    </style>

    <!-- Photoswipe Gallery -->
    <link rel="preload" type="text/css" href="<?= asset_url("public/photoswipe/photoswipe.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/photoswipe/photoswipe.css") ?>">
    </noscript>
    <link rel="preload" type="text/css" href="<?= asset_url("public/photoswipe/default-skin/default-skin.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/photoswipe/default-skin/default-skin.css") ?>">
    </noscript>
    <!-- Photoswipe Gallery -->

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/responsive.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/responsive.css") ?>">
    </noscript>

    <link rel="preload" type="text/css" href="<?= asset_url("public/css/theme-dark.css") ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" type="text/css" href="<?= asset_url("public/css/theme-dark.css") ?>">
    </noscript>



    <!-- SCRIPTS -->
    <?= $settings->analytics ?>
    <?= $settings->metrica ?>
    <?= $settings->live_support ?>
    <script>
        let base_url = "<?= asset_url() ?>";
    </script>

</head>

<body>
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner"></div>
            </div>
        </div>
    </div>