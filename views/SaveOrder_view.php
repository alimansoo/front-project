<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-100">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="page_content">
            <h3 class="page_content_title">وضعیت خرید شما</h3>
            <?php if ($status === "success"):?>
                <p>سفارش شما ثبت شد و منتظر پرداخت است</p>
                <a href='<?php echo $controllerroot ?>digitalPay_controller.php?orderid=<?php echo $orderid ?>' class="btn btn-success">پرداخت</a>
            <?php endif; ?>
        </section>   
    </main>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>
<?php 
require '__init__.php';


