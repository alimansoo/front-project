<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>

    <?php include_once('UserPanelSidebar.php'); ?>
    <main id="main-container">
        <section class="page_content">
            <h3 class="page_content_title">محصولات ذخیره شده</h3>
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
              <td><a href='{$baseroot}controllers/bookmarkProduct_controller.php?id={$product['id']}'>حذف</a></td>
            </tr>";
        ?>
        
        <?php
        }
         ?>
      </table>
    </main>
    <?php include_once('footer.php'); ?>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>



<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo $baseroot;?>assets/css/style.css">
  <link rel="shortcut icon" href="<?php echo $baseroot;?>assets/images/favicon.ico" type="image/x-icon">
  <title>چاپ ماهرنگ</title>
</head>
<body lang="fa">
  <div class="C-container">
  
  </div>
</body>
