<tr class="cartitem">
    <td class="cartitem_image"><img  src='<?php echo $Product->Image_Source(); ?>' alt='<?php echo $Product->name; ?>' width='50px'/></td>
    <td class="cartitem_content">
        <h6 class="cartitem_content_name"><?php echo $Product->name; ?></h6>
        <div class='cartitem_content_price'>
            <?php echo $Product->Price_Fromated(); ?>
            <span class="price_component">ریال</span>
        </div>
        <div class='cartitem_content_quantity'>
            <div class="quantity">
                <a href='<?php echo getProduc_ChangeQty_Url($Product->id,'add');?>' class='quantity_btn'>+</a>
                    <span class='quantity_value'><?php echo $Cart->qty; ?></span>
                <a href='<?php echo getProduc_ChangeQty_Url($Product->id,'minus');?>' class='quantity_btn'>-</a>
            </div>
        </div>
        <div class='cartitem_content_action'>
            <a class='removeProduct' href='<?php echo getProduc_AddCart_tUrl($Product->id);?>'><i class='fas fa-trash'></i>حذف</a>
        </div>
    </td>
</tr>