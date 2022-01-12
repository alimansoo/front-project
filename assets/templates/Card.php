
<tr>
    <td><img src='<?php echo base_url.'assets/images/products/'.$product['image_src']; ?>' alt='<?php echo $product['name']; ?>' width='50px'/></td>
    <td><?php echo $product['name']; ?></td>
    <td class='priceProduct'><span><?php echo $product['price']; ?></span>ریال</td>
    <td class='quantityProduct'>
        <div class='productCounter'>
            <a href='<?php echo base_url.'card/changeqty/add/'.$product['id'];?>' class='addQty'>+</a>
                <span class='productQty'><?php echo $product['qty']; ?></span>
            <a href='<?php echo base_url.'card/changeqty/minus/'.$product['id'];?>' class='minusQty'>-</a></div>
    </td>
    <td>
        <a class='removeProduct' href='<?php echo base_url.'card/delete/'.$product['id'];?>'><i class='fas fa-trash'></i></a>
    </td>
</tr>