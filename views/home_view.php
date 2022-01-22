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
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper" style="width:100%;height:400px;">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url('assets/images/slides/Slide1.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('assets/images/slides/Slide2.jpg');background-size: cover;"></div>
            <div class="swiper-slide" style="background-image: url('assets/images/slides/Slide3.jpg');background-size: cover;"></div>
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

                    include assetsroot.'templates/ProductCard.php';
                }
            ?>
        </div>
        
        <section class="chat"> 
        <div class="chat_container">
            <div class="header">
                پشتیبانی ماهرنگ
            </div>
            <div id="chat_container">
            </div>
            <div class="footer">
                <form action="<?php echo get_Full_URL('userpanel.chatmanage'); ?>" method="post" id="Chatform">
                    <input type="text" name="message" id="Chatmessage">
                    <input type="submit" value="ارسال">
                </form>
            </div>
        </div>
        <div class="chat_icon">
            <i class="fas fa-comments"></i>
        </div>
    </section>
<?php 
}
renderPage();