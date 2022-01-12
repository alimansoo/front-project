<section class='filled card'>
    <img src='<?php echo assetsroot.'images/products/'.$product['image_src']; ?>' class='card-img-top' alt=''>
    <div class='card-body'>
        <a href='<?php echo base_url.'product/like/'.$product['id']; ?>'><i class='<?php echo $iconclassheart; ?> fa-heart'></i></a>
        <a href='<?php echo base_url.'product/like/'.$product['id']; ?>'><i class='<?php echo $iconclassbookmark; ?> fa-bookmark'></i></a>
        <h5 class='card-title'><a href='<?php echo controllerroot.'Product_controller.php?id='.$product['id']; ?>'><?php echo $product['name']; ?></a></h5>
        <div class='secondary-title'><?php echo number_format($product['price'], 0); ?> ریال</div>
        <p class='card-text'></p>
        <a href='<?php echo base_url.'card/add/'.$product['id']; ?>' class='btn btn-primary <?php echo $cardclass; ?> card_btn'><?php echo $cardtext ?></a>
    </div>
</section>