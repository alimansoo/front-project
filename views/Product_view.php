<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ماهرنگ</title>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseroot;?>assets/css/style.css">
    <?php include'__init__.php'; ?>
</head>
<body id="body-container" class="grid-100" lang="fa">
    <?php include_once('header.php'); ?>
    <?php include_once('TopNavigation.php'); ?>
    
    <main id="container" class="grid-display grid-40-60 productView">
        <section class="productView_image">
            <img src="<?php echo $assetsroot."images/products/".$product['image_src']; ?>" width="90%" alt="" class="image">
        </section>
        <section class="productView_detail">
            <h1 class="productView_detail_title">
                <?php echo $product['name']; ?> 
            </h1>
            <div class="productView_detail_score">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <div class="productView_detail_description">
                <ul>
                    <li>دارای ابعاد استاندارد</li>
                    <li>متنوع در ضخامت های گوناگون</li>
                    <li>نهیه شده از مواد مرغوب</li>
                </ul>
            </div>
            <form action="<?php echo $controllerroot ?>addCard_controller.php?id=<?php echo $id ?>&redirect=true" method="post" class="productView_form">
                <!-- <div class="productView_form_service">
                    <h6 class="productView_form_service_title">خدمات اضافه بر محصول</h6>
                    <ul class="productView_form_service_list">
                        <li class="productView_form_service_list_item">
                            <label for="service1">پانچ</label>
                            <input type="checkbox" name="service[]" value="" id="service1">
                        </li>
                        <li class="productView_form_service_list_item">
                            <label for="service2">پانچ</label>
                            <input type="checkbox" name="service[]" value="" id="service2">
                        </li>
                        <li class="productView_form_service_list_item">
                            <label for="service3">پانچ</label>
                            <img class="productView_form_service_list_item_icon" src="<?php echo $assetsroot."images/service/attr.mat.svg" ?>" alt="">
                            <input type="checkbox" name="service[]" value="" id="service3">
                        </li>
                    </ul>
                </div>
                <div class="productView_form_service">
                    <h6 class="productView_form_service_title">نحوه ثبت سفارش</h6>
                    <ul class="productView_form_service_list">
                        <li class="productView_form_service_list_item">
                            <label for="typedraw1">طراحی توسط طراحان ماهرنگ</label>
                            <img class="productView_form_service_list_item_icon" src="<?php echo $assetsroot."images/service/order-tarahi.svg" ?>" alt="">
                            <input type="radio" name="typedraw" value="1" id="typedraw1">
                        </li>
                        <li class="productView_form_service_list_item">
                            <label for="typedraw2">آپلود و ارسال فایل طراحی</label>
                            <img class="productView_form_service_list_item_icon" src="<?php echo $assetsroot."images/service/order-amade.svg" ?>" alt="">
                            <input type="radio" name="typedraw" value="2" id="typedraw2">
                        </li>
                    </ul>
                </div> -->
                <section class="productView_form_order">
                    <h6 class="productView_form_order_heading">مبلغ نهایی سفارش شما :</h6>
                    <div class="productView_form_order_price"><?php echo $product['price']?><span class="price_component">ریال</span></div>
                    <hr>
                    <ul>
                        <li>مبلغ نهایی بدون محاسبه مالیات است.</li>
                        <li>قیمت ارسال سفارش در مراحل بعد محاسبه می شود.</li>
                    </ul>
                    <?php if (!$isContainCard):?>
                        <input type="submit" name="submit" class="productView_form_order_btn" value="اضافه کردن به سبد خرید">
                    <?php endif; ?>
                </section>
            </form>
        </section>

        <section id="comment">
            <h4>بخش نظرات این محصول</h4>
            <form action="<?php echo $controllerroot ?>addComment_controller.php?pid=<?php echo $id ?>" method="get" id="CommentForm">
                <label for="subjectComment">موضوع</label>
                <input type="text" name="subject" id="subjectComment">
                <label for="messagComment">متن نظر</label>
                <textarea name="message" id="messagComment" cols="30" rows="10"></textarea>
                <input type="submit" value="ثبت نظر">
            </form>
        </section>
        
    </main>
    
    
    <?php include_once('footer.php'); ?>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="<?php echo $assetsroot ?>js/templates/productView.js"></script>
    <script src="<?php echo $assetsroot;?>js/main.js"></script>
    <script src="<?php echo $assetsroot;?>js/Comment.js"></script>
</body>
</html>