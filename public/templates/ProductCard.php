<section class='filled card'>
    <img src='<?php echo ASSETS_PATH.'images/products/'.$productImagesrc; ?>' class='card-img-top' alt=''>
    <div class='card-body'>
        <a href='<?php echo getProduc_like_Url($productId); ?>'><i class='<?php echo $iconclassheart; ?> fa-heart'></i></a>
        <a href='<?php echo getProduc_bookmark_Url($productId); ?>'><i class='<?php echo $iconclassbookmark; ?> fa-bookmark'></i></a>
        <h5 class='card-title'><a href='<?php echo getProductUrl($productId); ?>'><?php echo $productName; ?></a></h5>
        <div class='secondary-title'><?php echo number_format($productPrice, 0); ?> ریال</div>
        <p class='card-text'></p>
        <a href='<?php echo getProduc_AddCart_tUrl($productId); ?>' class='btn btn-primary <?php echo $cardclass; ?> card_btn'><?php echo $cardtext ?></a>
    </div>
</section>