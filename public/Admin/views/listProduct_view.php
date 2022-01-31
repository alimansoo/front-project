<?php 
$price_component = array('metric' => 'متری','pices' => 'دونه ای');
$catg = array('bnr' => 'بنر','lva' => 'لیوان','gls'=>'لیوان');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="admintPanel">
    <?php include_once('Header.php'); ?>    
    <main id="container" class="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-3">
            <?php include_once('Sidebar.php'); ?>
            <section class="grid-lg-1to4">
                <section class="page_content">
                    <h3 class="page_content_title">لیست محصولات</h3>
                    <a  href="<?php echo BASE_URL;?>adminpanel/listproduct/addproduct/" class="btn btn-primary">اضافه کردن محصول+</a>
                    <br>
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
                        foreach ($users as $user) :
                        ?>
                            <tr>
                            <td><?php echo $user['id']; ?></td>
                            <td><img src='<?php echo BASE_URL ?>assets/images/products/<?php echo $user['image_src']; ?>' alt='<?php echo $user['name']; ?>' width='50px'/></td>
                            <td><?php echo $user['name']; ?></td>
                            <td><?php echo $user['catg']; ?></td>
                            <td><?php echo $user['price_component']; ?></td>
                            <td><?php echo $user['price']; ?>ریال</td>
                            <td><a href='{$controllerroot}removeProduct_controller.php?id={$user['id']}' class='ajaxWorkerLink'><i class='fas fa-trash'></i></a></td>
                            <td><a href='{$baseroot}editProduct_view.php?id={$user['id']}'><i class='fas fa-edit'></i></a></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </table>
                </section>
            </section>
        </section>
    </main>

    <?php include_once('__script__.php'); ?>
</body>
</html>