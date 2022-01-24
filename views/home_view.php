<?php
function get_title() {
    return "صفحه اصلی";
}
function get_content()
{
    global $products;
    global $mysql;
?>
    <div class="swiper">
        <div class="swiper-wrapper" style="width:100%;height:400px;">
            <div class="swiper-slide" style="background-image: url('assets/images/slides/Slide1.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('assets/images/slides/Slide2.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('assets/images/slides/Slide3.jpg');background-size: cover;"></div>
            ...
        </div>

        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <div class="swiper-scrollbar"></div>
        </div>
    </div>
        <div class="grid-display col-sm-1 col-md-2 col-lg-4">
            <?php
                foreach($products as $product)
                {
                    // if(isset($_SESSION['id'])){
                    //     $islike= isLike($mysql,$product['id']);
                    //     $isbookmark = isBookmark($mysql,$product['id']);
                    //     $iscontaincard = isContainCard($mysql,$product['id']);
                    // }

                    $iconclassheart = 'far';
                    // if(isset($islike) and $islike){
                    //     $iconclassheart = 'fas';
                    // }

                    $iconclassbookmark = 'far';
                    // if(isset($isbookmark) and $isbookmark){
                    //     $iconclassbookmark = 'fas';
                    // }

                    $cardtext = "افزودن به سبد";
                    $cardclass = "add";
                    // if(isset($iscontaincard) and $iscontaincard){
                    //     $cardtext = "حذف از سبد";
                    //     $cardclass = "remove";
                    // }
                    $productId = $product['id'];
                    $productName = $product['name'];
                    $productPrice = $product['price'];
                    $productImagesrc = $product['image_src'];
                    include assetsroot.'templates/ProductCard.php';
                }
            ?>

    <?php include "./assets/templates/ChatSection.php";?>
<?php 
}
renderPage();