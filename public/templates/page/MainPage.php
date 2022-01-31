<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if (function_exists('get_title')) {
                echo get_title();
            }else{
                echo APP_NAME;
            }
        ?>
    </title>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="http://localhost/front-project/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/front-project/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/front-project/assets/css/fontawesome-free/css/all.min.css">
</head>
<body id="body-container" class="grid-100 grid-row-container">
    <?php Template::Include('header'); ?>
    <?php Template::Include('TopNavigation'); ?>
    <main id="container" class="container">
        <?php
            if (function_exists("get_content_userPanel")) {
                get_content_userPanel();
            }
            elseif (function_exists("get_content")) {
                get_content();
            }
        ?>
    </main>
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php Template::Include('footer'); ?>
    <?php include_once('public/views/__script__.php'); ?>
</body>
</html>
