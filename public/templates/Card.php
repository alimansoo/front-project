<tr>
    <td><img src='<?php echo BASE_URL.'assets/images/products/'.$data['image_src']; ?>' alt='<?php echo $data['name']; ?>' width='50px'/></td>
    <td><?php echo $data['name']; ?></td>
    <td class='priceProduct'><span><?php echo $data['price']; ?></span>ریال</td>
    <td class='quantityProduct'>
        <div class='productCounter'>
            <a href='<?php echo getProduc_ChangeQty_Url($data['id'],'add');?>' class='addQty'>+</a>
                <span class='productQty'><?php echo $data['qty']; ?></span>
            <a href='<?php echo getProduc_ChangeQty_Url($data['id'],'minus');?>' class='minusQty'>-</a></div>
    </td>
    <td>
        <a class='removeProduct' href='<?php echo getProduc_AddCart_tUrl($data['id']);?>'><i class='fas fa-trash'></i></a>
    </td>
</tr>