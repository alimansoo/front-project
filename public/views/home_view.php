<?php
function get_title() {
    return "صفحه اصلی";
}
function get_content()
{
    global $AllProduct;
    $dbslide = new DBSlideEngin();
    $slides= $dbslide->GetAll();
?>
    <?php
        if (count($slides) > 0) {
        ?>
            <div class="swiper">
                <div class="swiper-wrapper" style="width:100%;height:400px;">
                <?php
                    foreach ($slides as $value) :
                    ?>
                        <div class="swiper-slide" style="background-image: url('<?php echo SLIDE_IMAGE_PATH.$value['image_src'] ?>');background-size: cover;"></div>
                    <?php
                    endforeach;
                ?>
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-scrollbar"></div>
                </div>
            </div>
        <?php
        }
    ?>
    

    <div class="grid-display col-sm-1 col-md-2 col-lg-4">
        <?php
            foreach($AllProduct as $product)
            {
                $model = new Product($product);
                Template::Include('ProductCard',['Product'=>$model]);
            }
        ?>
    </div>

    <?php Template::Include("ChatSection.php");?>
<?php 
}
 