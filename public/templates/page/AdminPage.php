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
    <link rel="shortcut icon" href="http://localhost/front-project/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost/front-project/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/front-project/assets/css/fontawesome-free/css/all.min.css">
</head>
<body id="body-container" class="admintPanel">
    <?php Template::Include('AdminPanelHeader');?>    
    <main id="container" class="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-3">
            <?php Template::Include('AdminPanelSidebar');?>
            <?php
            if (function_exists("get_content")) {
                get_content();
            }
        ?>
        </section>
    </main>

    <?php include_once('public/views/__script__.php'); ?>
</body>
</html>