<div class='orderRow'>
    <div></div>
    <div class='orderRow_header'>
        <p>تاریخ تحویل سفارش :<span class='date'><?php echo $data['recive_date']; ?></span></p>
        <p>قیمت سفارش :<span><?php echo number_format($data['priceAll']); ?></span> ریال </p>
    </div>
    <div class='orderRow_content'>
        <?php 
        foreach ($data['AllProduct_image'] as $product) : 
            $productimage = $product['image_src'];
        ?>
            <img class='productImg' src='<?php echo getImageSource($productimage); ?>'>
        <?php
        endforeach;
        ?>
    </div>
    <div class='orderRow_footer'>
        <a href="<?php echo getOrderDeatailUrl($data['id']); ?>"> مشاهده سفارش <i class="fas fa-angle-left"></i></a>
    </div>
</div>