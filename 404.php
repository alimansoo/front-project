<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "views/__init__.php"; ?>
</head>
<body id="body-container" class="grid-row-container">
    <?php include_once('views/header.php'); ?>    
    <?php include_once('views/TopNavigation.php'); ?>
    <main id="container" class="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-1">
                <section class="page_content text-align-center">
                    <img src="<?php echo base_url ?>assets/images/404.jpg" alt="">
                </section>
        </section>
    </main>
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php include_once('views/footer.php'); ?>
    <?php include_once('views/__script__.php'); ?>
</body>
</html>