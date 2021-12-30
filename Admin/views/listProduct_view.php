<?php 
$price_component = array('metric' => 'متری','pices' => 'دونه ای');
$catg = array('bnr' => 'بنر','lva' => 'لیوان');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include"__init__.php"; ?>
</head>
<body id="body-container" class="admintPanel grid-20-80">
    <!-- include Sidebar -->
    <?php include "Sidebar.php"; ?>
    <main id="main-container">
        <!-- include Header -->
        <?php include "Header.php"; ?>
        <section id="container">
        <a  href="<?php echo $baseroot;?>addProduct.php">اضافه کردن محصول+</a>
        <table class="table">
                <tr>
                <th>شناسه</th>
                <th>تصویر</th>
                <th>نام محصول</th>
                <th>دسته بندی محصول</th>
                <th>نوع قیمت دهی</th>
                <th>قیمت</th>
                <th></th>
                <th></th>
                </tr>
                <?php 
                foreach ($users as $user) {
                    echo "
                    <tr>
                    <td>{$user['id']}</td>
                    <td><img src='$assetsroot/images/products/{$user['image_src']}' alt='{$user['name']}' width='50px'/></td>
                    <td>{$user['name']}</td>
                    <td>{$catg[$user['catg']]}</td>
                    <td>{$price_component[$user['price_component']]}</td>
                    <td>{$user['price']}ریال</td>
                    <td><a href='{$baseroot}removeProduct_controller.php?id={$user['id']}'>حذف</a></td>
                    <td><a href='{$baseroot}editProduct_view.php?id={$user['id']}'>ویرایش</a></td>
                    </tr>";
                ?>
                
                <?php
                }
                ?>
            </table>
        </section>
    </main>
    <!-- <nav id="side-navigation"></nav> -->
    <!-- <footer id="footer"></footer> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>
