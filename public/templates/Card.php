<tr>
    <td><img src='<?php echo $Product->image_src; ?>' alt='<?php echo $Product->name; ?>' width='50px'/></td>
    <td><?php echo $Product->name; ?></td>
    <td class='priceProduct'><span><?php echo $Product->price; ?></span>ریال</td>
    <td class='quantityProduct'>
        <div class='productCounter'>
            <a href='<?php echo getProduc_ChangeQty_Url($Product->id,'add');?>' class='addQty'>+</a>
                <span class='productQty'><?php echo $Cart->qty; ?></span>
            <a href='<?php echo getProduc_ChangeQty_Url($Product->id,'minus');?>' class='minusQty'>-</a></div>
    </td>
    <td>
        <a class='removeProduct' href='<?php echo getProduc_AddCart_tUrl($Product->id);?>'><i class='fas fa-trash'></i></a>
    </td>
</tr>