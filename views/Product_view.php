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
    
    <main id="container">
        <section class="grid-display col-sm-1 .col-md-1 col-lg-3-product-view productView">
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
                
            </section>
            <section class="productView_form_order">
                <h6 class="productView_form_order_heading">مبلغ نهایی سفارش شما :</h6>
                <div class="productView_form_order_price"><?php echo $product['price']?><span class="price_component">ریال</span></div>
                <hr>
                <ul>
                    <li>مبلغ نهایی بدون محاسبه مالیات است.</li>
                    <li>قیمت ارسال سفارش در مراحل بعد محاسبه می شود.</li>
                </ul>
                <?php if (!$isContainCard):?>
                    <a href="<?php echo $controllerroot ?>addCard_controller.php?id=<?php echo $id ?>&redirect=true" class="btn btn-primary full-btn">اضافه کردن به سبد خرید</a>
                <?php endif; ?>
            </section>
        </section>

        <section id="comment" class="page_content">
            <h4 class="page_content_title">بخش نظرات این محصول</h4>
            <?php foreach ($allCommentProduct as $key => $CommentProduct):?>
                <div class="comment_user">
                    <i class="fas fa-user-circle"></i>
                    <h5 class="comment_user_username"><?php echo namebyid($mysql,$CommentProduct['uid']); ?></h5>
                    <h6 class="comment_user_subject"><?php echo $CommentProduct['subject']; ?></h6>
                    <p class="comment_user_message"><?php echo $CommentProduct['message']; ?></p>
                </div>
            <?php endforeach; ?>
            <h4 class="page_content_title">اضافه کردن کامنت جدید</h4>
            <form action="<?php echo $controllerroot ?>addComment_controller.php?pid=<?php echo $id ?>" method="get" id="CommentForm">
                <div class="input_material_block">
                    <input type="text" name="subject" id="subjectComment">
                    <label for="subjectComment">موضوع</label>
                </div>
                <div class="input_material_block">
                    <textarea name="message" id="messagComment" cols="30" rows="10"></textarea>
                    <label for="messagComment">متن نظر</label>
                </div>
                <input type="submit" value="ثبت نظر" class="btn btn-primary">
            </form>
        </section>
        
    </main>

    <p id="Small_modal_Message" class="small_modal_message success"><i class="fas fa-times"></i><span class="message">dafsdf</span></p>

    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>