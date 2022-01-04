<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-row-container">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-3 ">
            <?php if (count($productsArray)<1):?>
                <section class="page_content ">
                    محصولی در سبد خرید وجود ندارد!!
                </section>
            <?php else: ?>
                <section class="page_content grid-lg-1to3">
                    <table class="table">
                        <tr>
                        <th>تصویر</th>
                        <th>نام محصول</th>
                        <th>قیمت</th>
                        <th>تعداد</th>
                        <th></th>
                        </tr>
                        <?php 
                        foreach ($productsArray as $product) {
                            echo "
                            <tr>
                                <td><img src='../assets/images/products/{$product['image_src']}' alt='{$product['name']}' width='50px'/></td>
                                <td>{$product['name']}</td>
                                <td class='priceProduct'><span>{$product['price']}</span>ریال</td>
                                <td class='quantityProduct'>
                                    <div class='productCounter'>
                                        <a href='{$controllerroot}changeProductQty_controller.php?subject=add&pid={$product['id']}' class='addQty'>+</a>
                                            <span class='productQty'>{$product['qty']}</span>
                                        <a href='{$controllerroot}changeProductQty_controller.php?subject=minus&pid={$product['id']}' class='minusQty'>-</a></div>
                                </td>
                                <td>
                                    <a class='removeProduct' href='{$controllerroot}addCard_controller.php?id={$product['id']}'><i class='fas fa-trash'></i></a>
                                </td>
                            </tr>";
                        }  
                        ?>
                    </table>
                </section>
                <section class="page_content Card_deatail">
                    <h3 class="page_content_title">سبد خرید</h3>
                    <div class="Card_deatail_row grid-display grid-50-50 PriceAll">
                        <div class="Card_deatail_row_key">قیمت کل محصولات:</div>
                        <div class="Card_deatail_row_value"><?php echo $allofPrice;?><span class="price_componant">ریال</span></div>
                    </div>
                    <div class="Card_deatail_row grid-display grid-50-50">
                        <div class="Card_deatail_row_key">تخفیف خورده:</div>
                        <div class="Card_deatail_row_value">0<span class="price_componant">ریال</span></div>
                    </div>
                    <div class="Card_deatail_row grid-display grid-50-50">
                        <div class="Card_deatail_row_key">قیمت پرداختی:</div>
                        <div class="Card_deatail_row_value"><?php echo $allofPrice;?><span class="price_componant">ریال</span></div>
                    </div>
                    <a href="<?php echo $controllerroot ?>SalesInvoice_controller.php" class="Card_deatail_btn btn btn-primary">ثبت سفارش</a>
                </section>
            <?php endif; ?>
        </section>
    </main>
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>