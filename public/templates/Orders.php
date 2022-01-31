<div class='orderRow'>
    <div></div>
    <div class='orderRow_header'>
        <p>تاریخ تحویل سفارش :<span class='date'><?php echo $data->recive_date; ?></span></p>
        <p>قیمت سفارش :<span><?php echo number_format($data->priceAll); ?></span> ریال </p>
    </div>
    <div class='orderRow_content'>
        <?php
        $dborderitem = new DBUserOrderItemEngin();
        $userorderitems = $dborderitem->getAllByOrderId($data->id);
        foreach ($userorderitems as $orderitem) :
            $model2=new OrderItem($orderitem);
            $model3=new Product($model2->pid);
        ?>
            <img class='productImg' src='<?php echo $model3->image_src; ?>'>
        <?php
        endforeach;
        ?>
    </div>
    <div class='orderRow_footer'>
        <a href="<?php echo getOrderDeatailUrl($data->id); ?>"> مشاهده سفارش <i class="fas fa-angle-left"></i></a>
    </div>
</div>