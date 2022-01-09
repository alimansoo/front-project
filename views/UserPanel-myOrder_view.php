<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-25-75">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-4">
            <?php include_once('UserPanelSidebar.php'); ?>
            <section class="grid-lg-2to5">
                <section class="page_content">
                    <h3 class="page_content_title">محصول لایک شده </h3>
                        <table class="table">
                            <tr>
                                <th>شناسه</th>
                                <th>تصویر</th>
                                <th>نام محصول</th>
                                <th>دسته بندی محصول</th>
                                <th>قیمت</th>
                                <th></th>
                            </tr>
                                <?php 
                                foreach ($productsArray as $product) {
                                    echo "
                                    <tr>
                                        <td>{$product['id']}</td>
                                        <td><img src='../assets/images/products/{$product['image_src']}' alt='{$product['name']}' width='50px'/></td>
                                        <td>{$product['name']}</td>
                                        <td>{$product['catg']}</td>
                                        <td>{$product['price']}ریال</td>
                                        <td><a href='{$baseroot}controllers/likeProduct_controller.php?id={$product['id']}' class='ajaxWorkerLink'><i class='fas fa-trash'></i></a></td>
                                    </tr>";
                                    }
                                    ?>
                        </table>
                        </section>    
            </section>
        </section>
    </main>
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>