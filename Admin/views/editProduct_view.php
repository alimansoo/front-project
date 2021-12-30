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
          <section class="form">
              <div class="form_title">فرم ویرایش اطلاعات محصول</div>
              <hr class="form_line">
              <form action="editProduct_controller.php?id=<?php echo $id; ?>" method="post"  enctype="multipart/form-data">
                  <div class="input_sections">
                      <label for="product_name">نام محصول:</label>
                      <br>
                      <input type="text" name="product_name" id="product_name" class="input-text" value="<?php echo $result['name']; ?>">
                  </div>
                <div class="input_sections">
                    <label for="product_catg">دسته ی محصول :</label>
                    <br>
                    <select name="product_catg" id="product_catg" class="input-select">
                      <option value="bnr" <?php if ($result['catg']=="bnr") {echo "selected";}?>>بنر</option>
                      <option value="gls" <?php if ($result['catg']=="gls") {echo "selected";}?>>لیوان</option>
                      <option value="tks" <?php if ($result['catg']=="tks") {echo "selected";}?>>تخته شاسی</option>
                      <option value="stk" <?php if ($result['catg']=="stk") {echo "selected";}?>>استیکر</option>
                      <option value="hat" <?php if ($result['catg']=="hat") {echo "selected";}?>>کلاه</option>
                    </select>
                </div>
                <div class="input_sections">
                    <label for="price_component">مولفه قیمتی :</label>
                    <br>
                    <label for="pices">دانه ای</label>
                    <input type="radio" name="price_component" value="pices" id="pices" class="input-radio" <?php if ($result['price_component']=="pices") {echo "checked";}?>>
                    <label for="metric">متری</label>
                    <input type="radio" name="price_component" value="metric" id="metric" class="input-radio" <?php if ($result['price_component']=="metric") {echo "checked";}?>>
                    <br>
                    <label for="product_price">قیمت بر اساس مولفه قیمتی :</label>
                      <br>
                      <input type="number" name="product_price" id="product_price" class="input-text" value="<?php echo $result['price']; ?>">
                </div>
                <div class="input_sections">
                    <label for="product_image">تصویر محصول (امکان انتخاب چند عکس):</label>
                    <br>
                    <input type="file" name="product_image" id="product_image" class="input-file" value="">
                    <img draggable="false" id="image_preview" src="<?php echo $assetsroot; ?>/images/products/<?php echo $result['image_src']; ?>" alt="">
                </div>
                <div class="input_sections">
                <label for="product_service">خدمات اضافه بر محصول :</label>
                <br>
                <?php
                      foreach ($services as $service) {
                  ?>
                <ul class="service_list">
                    <div class="service_item">
                        <label for="name_servic">اسم خدمات :</label><br>
                        <input type="text" name="name_servic[]" class="input-text" id="name_servic" value="<?php echo $service['name']; ?>">
                    </div>
                    <div class="service_item">
                        <label for="price_servic">قیمت واحد خدمات :</label><br>
                        <input type="number" name="price_servic[]" class="input-text" id="price_servic" value="<?php echo $service['price']; ?>">
                    </div>
                    <div class="service_item">
                        <label for="icon_servic">ایکون خدمات(اختیاری) :</label><br>
                        <input type="file" name="icon_servic[]" class="input-text" id="icon_servic">
                    </div>
                </ul>
                <?php 
                      }
                ?>
            </div>
            <div class="input_sectionss">
              <button type="submit" name="submit" class="filled-tonal-button">ثبت محصول</button>
            </div>
              </form>
          </section>
        </section>
    </main>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once('__init__.php'); ?>
    <title>چاپ ماهرنگ</title>
  </head>
  <body lang="fa">
    <div class="C-container">

    </div>
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
