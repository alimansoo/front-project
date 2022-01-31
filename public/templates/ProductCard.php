<section class='filled card'>
    <img src='<?php echo getImageSource($data['image_src']); ?>' class='card-img-top' alt=''>
    <div class='card-body'>
        <a href='<?php echo getProduc_like_Url($data['id']); ?>'><i class='<?php //echo //$iconclassheart; ?> fa-heart'></i></a>
        <a href='<?php echo getProduc_bookmark_Url($data['id']); ?>'><i class='<?php //echo $iconclassbookmark; ?> fa-bookmark'></i></a>
        <h5 class='card-title'><a href='<?php echo getProductUrl($data['id']); ?>'><?php echo $data['name']; ?></a></h5>
        <div class='secondary-title'><?php echo number_format($data['price'], 0); ?> ریال</div>
        <p class='card-text'></p>
        <a href='<?php echo getProduc_AddCart_tUrl($data['id']); ?>' class='btn btn-primary <?php //echo //$cardclass; ?> card_btn'><?php //echo $cardtext ?></a>
    </div>
</section>