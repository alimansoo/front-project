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
            <div class="form">
                <div class="form_title">فرم اضافه کردن محصول</div>
                <hr class="form_line">
                <form action="" method="post">
                    <div class="input_sections">
                        <label for="product_name">نام محصول:</label>
                        <br>
                        <input type="text" required name="product_name" id="product_name" class="input-text">
                    </div>
                <div class="input_sections">
                    <label for="product_catg">دسته ی محصول :</label>
                    <br>
                    <select name="product_catg" id="product_catg" required class="input-select">
                        <option value="bnr">بنر</option>
                        <option value="gls">لیوان</option>
                        <option value="tks">تخته شاسی</option>
                        <option value="stk">استیکر</option>
                        <option value="hat">کلاه</option>
                    </select>
                </div>
                <div class="input_sections">
                    <label for="price_component">مولفه قیمتی :</label>
                    <br>
                    <label for="pices">دانه ای</label>
                    <input type="radio" required name="price_component" value="pices" id="pices" class="newproduct_input">
                    <label for="metric">متری</label>
                    <input type="radio" required name="price_component" value="metric" id="metric" class="newproduct_input">
                    <br>
                    <label for="product_price">قیمت بر اساس مولفه قیمتی :</label>
                        <br>
                        <input type="number" required name="product_price" id="product_price" class="input-text"> ريال
                </div>
                <div class="input_sections">
                    <label for="product_image">تصویر محصول (امکان انتخاب چند عکس):</label>
                    <br>
                    <input type="file" required name="product_image" id="product_image" class="input-text" multiple>
                </div>
                <div class="input_sections">
                <label for="product_service">خدمات اضافه بر محصول :</label>
                <br>
                <ul class="service_list">
                    <div class="service_item">
                        <label for="name_servic">اسم خدمات :</label><br>
                        <input type="text" name="name_servic[]" id="name_servic" class="input-text">
                    </div>
                    <div class="service_item">
                        <label for="price_servic">قیمت واحد خدمات :</label><br>
                        <input type="number" name="price_servic[]" id="price_servic"  class="input-text">
                    </div>
                    <div class="service_item">
                        <label for="icon_servic">ایکون خدمات(اختیاری) :</label><br>
                        <input type="file" name="icon_servic[]" id="icon_servic"  class="input-text">
                    </div>
                </ul>
                <ul class="service_list">
                    <div class="service_item">
                        <label for="name_servic">اسم خدمات :</label><br>
                        <input type="text" name="name_servic[]" id="name_servic" class="input-text">
                    </div>
                    <div class="service_item">
                        <label for="price_servic">قیمت واحد خدمات :</label><br>
                        <input type="number" name="price_servic[]" id="price_servic" class="input-text">
                    </div>
                    <div class="service_item">
                        <label for="icon_servic">ایکون خدمات(اختیاری) :</label><br>
                        <input type="file" name="icon_servic" id="icon_servic" class="input-text">
                    </div>
                </ul>
            </div>
            <div class="input_sectionss">
                <button type="submit" name="submit" class="filled-tonal-button">ثبت محصول</button>
            </div>
                </form>
            </div>
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
  </body>
</html>
