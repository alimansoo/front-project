<div class='orderRow'>
    <div></div>
    <div class='orderRow_header'>
        <p>تاریخ تحویل سفارش :<span class='date'><?php echo $myOrder['recive_date']; ?></span></p>
        <p>قیمت سفارش :<span><?php echo $myOrder['priceAll']; ?></span> ریال </p>
    </div>
    <div class='orderRow_content'>
        <?php 
        foreach ($myOrder['products_image'] as $productimage) : 
        ?>
            <img class='productImg' src='<?php echo base_url."assets/images/products/".$productimage ?>'>
        <?php
        endforeach;
        ?>
    </div>
    <div class='orderRow_footer'>
        <a href="<?php echo getOrderDeatailUrl($myOrder['id']); ?>"> مشاهده سفارش <i class="fas fa-angle-left"></i></a>
    </div>
</div>