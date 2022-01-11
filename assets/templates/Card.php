
<tr>
    <td><img src='<?php echo assetsroot.'/images/products/'.$product['image_src']; ?>' alt='<?php echo $product['name']; ?>' width='50px'/></td>
    <td><?php echo $product['name']; ?></td>
    <td class='priceProduct'><span><?php echo $product['price']; ?></span>ریال</td>
    <td class='quantityProduct'>
        <div class='productCounter'>
            <a href='<?php echo controllerroot.'changeProductQty_controller.php?subject=add&pid='.$product['id'];?>' class='addQty'>+</a>
                <span class='productQty'><?php echo $product['qty']; ?></span>
            <a href='<?php echo controllerroot.'changeProductQty_controller.php?subject=minus&pid='.$product['id'];?>' class='minusQty'>-</a></div>
    </td>
    <td>
        <a class='removeProduct' href='<?php echo controllerroot.'addCard_controller.php?id='.$product['id'];?>'><i class='fas fa-trash'></i></a>
    </td>
</tr>