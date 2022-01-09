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
                        <h3 class="page_content_title">جزئیات سفارش شما</h3>
                        <div>هزینه کل سفارش شما : <span><?php echo $priceAll; ?></span>ریال</div>
                        <div>هزینه حمل و نقل : <span><?php echo $transport_price; ?></span>ریال</div>
                        <div>آدرس سفارش : <span><?php echo $addres; ?></span></div>
                        <div>تاریخ تحویل سفارش : <span><?php echo $recive_date; ?></span></div>
                        <div>وضعيت سفارش : <span><?php echo $is_pay; ?></span></div>
                        <table class="table">
                            <tr>
                                <th>تصویر</th>
                                <th>نام محصول</th>
                                <th>قیمت</th>
                                <th>تعداد</th>
                            </tr>
                            <?php 
                            foreach ($allProduct as $product) :
                            ?>
                                <tr>
                                    <td><img src='<?php echo $assetsroot."images/products/".$product['image_src'] ?>' alt='' width='50px'/></td>
                                    <td><?php echo $product['name'] ?></td>
                                    <td><span><?php echo $product['price'] ?></span>ریال</td>
                                    <td><?php echo $product['qty'] ?></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </table>
                </section>   
            </section>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>

