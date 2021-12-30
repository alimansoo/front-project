<?php
echo "
<section class='filled card'>
    <img src='../assets/images/products/{$product['image_src']}' class='card-img-top' alt=''>
    <div class='card-body'>
        <a href='{$controllerroot}likeProduct_controller.php?id={$product['id']}'><i class='{$iconclassheart} fa-heart'></i></a>
        <a href='{$controllerroot}bookmarkProduct_controller.php?id={$product['id']}'><i class='{$iconclassbookmark} fa-bookmark'></i></a>
        <h5 class='card-title'><a href='{$controllerroot}Product_controller.php?id={$product['id']}'>{$product['name']}</a></h5>
        <div class='secondary-title'>{$product['price']} ریال</div>
        <p class='card-text'></p>
        <a href='{$baseroot}controllers/addCard_controller.php?id={$product['id']}' class='btn btn-primary {$cardclass} card_btn'>{$cardtext}</a>
    </div>
</section>
"
?>
