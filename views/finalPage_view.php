<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-1">
            <section class="page_content">
                <p>سفارش شما به با شناسه <span><?php echo $order_deatail['id']; ?></span> ثبت شد.</p>
                <p>گیرنده سفارش <span><?php echo $order_deatail['reciver_name']; ?></span> است.</p>
                <a href="" class="btn btn-primary">پیگیری سفارش</a>
            </section>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>