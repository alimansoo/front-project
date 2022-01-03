<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="admintPanel">
    <?php include_once('Header.php'); ?>    
    <main id="container" class="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-3">
            <?php include_once('Sidebar.php'); ?>
            <section class="grid-lg-1to4">
                <section class="page_content">
                    <h3 class="page_content_title">اطلاعات شخصی</h3>
                </section>
            </section>
        </section>
    </main>

    <script src="<?php echo $assetsroot ?>js/templates/sidebar.js"></script>
    <script src="<?php echo $baseroot;?>assets/js/drophover.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>

