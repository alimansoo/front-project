<?php
function get_title() {
    return "صفحه اصلی";
}
function get_content()
{
    global $AllProduct;
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
                foreach($AllProduct as $product)
                {
                    $model = new Product($product);
                    Template::Include('ProductCard',$model);
                }
            ?>

    <?php Template::Include("ChatSection.php");?>
<?php 
}
 