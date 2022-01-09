<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-25-75">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-4">
            <?php include_once('UserPanelSidebar.php'); ?>
            <section class="grid-lg-2to5">
                <section class="page_content">
                    <h3 class="page_content_title">سفارشات من </h3>
                    <?php 
                    foreach ($AllofMyOrder as $myOrder) : 
                    ?>
                        <div class='orderRow'>
                            <div></div>
                            <div class='orderRow_header'>
                                <p>تاریخ تحویل سفارش :<span class='date'><?php echo $myOrder['recive_date']; ?></span></p>
                                <p>قیمت سفارش :<span><?php echo $myOrder['priceAll']; ?></span> ریال </p>
                            </div>
                            <div class='orderRow_content'>
                                <?php 
                                foreach ($myOrder['products_image'] as $productimage) : 
                                ?>
                                    <img class='productImg' src='<?php echo $assetsroot."images/products/".$productimage ?>'>
                                <?php
                                endforeach;
                                ?>
                            </div>
                            <div class='orderRow_footer'>
                                <a href="<?php echo $controllerroot."UserPanel-detailOrder_controller.php?id=".$myOrder['id'] ?>"> مشاهده سفارش <i class="fas fa-angle-left"></i></a>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </section>    
            </section>
        </section>
    </main>
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>