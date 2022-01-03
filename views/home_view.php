<!DOCTYPE html>
<html lang="fa">
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
<body id="body-container" class="grid-100 grid-row-container">
    <?php include_once('header.php'); ?>
    <?php include_once('TopNavigation.php'); ?>

    <!-- <aside id="sidebar">
        فیلتر محصولات
    </aside> -->
    
    <main id="container">
        <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper" style="width:100%;height:400px;">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide1.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide2.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('../assets/images/slides/Slide3.jpg');background-size: cover;"></div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
        </div>

        <div class="grid-display col-sm-1 col-md-2 col-lg-4">
            <?php
                foreach($products as $product)
                {
                    if(isset($_SESSION['id'])){
                        $islike= isLike($mysql,$product['id']);
                        $isbookmark = isBookmark($mysql,$product['id']);
                        $iscontaincard = isContainCard($mysql,$product['id']);
                    }

                    $iconclassheart = 'far';
                    if(isset($islike) and $islike){
                        $iconclassheart = 'fas';
                    }

                    $iconclassbookmark = 'far';
                    if(isset($isbookmark) and $isbookmark){
                        $iconclassbookmark = 'fas';
                    }

                    $cardtext = "افزودن به سبد";
                    $cardclass = "add";
                    if(isset($iscontaincard) and $iscontaincard){
                        $cardtext = "حذف از سبد";
                        $cardclass = "remove";
                    }

                    include '../assets/templates/ProductCard.php';
                }
            ?>
        </div>
    </main>
    
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>