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
                <section class="page_content grid-display col-sm-1 col-md-1 col-lg-1">
                    <h3 class="page_content_title">اضافه کردن محصول</h3>
                <form action="" method="post" enctype="multipart/form-data">
                        <div class="input_material_block">
                            <input type="text" required name="product_name" id="product_name" class="input-text">
                            <label for="product_name">نام محصول:</label>
                        </div>
                        <div class="input_material_block active">
                            <select name="product_catg" id="product_catg" required class="input-select">
                                <option value="bnr">بنر</option>
                                <option value="gls">لیوان</option>
                                <option value="tks">تخته شاسی</option>
                                <option value="stk">استیکر</option>
                                <option value="hat">کلاه</option>
                            </select>
                            <label for="product_catg">دسته ی محصول :</label>
                        </div>
                        <label for="price_component">مولفه قیمتی :</label>
                        <br>
                            <label for="pices">دانه ای</label>
                            <input type="radio" required name="price_component" value="pices" id="pices" class="newproduct_input">
                            <label for="metric">متری</label>
                            <input type="radio" required name="price_component" value="metric" id="metric" class="newproduct_input">
                            <br>
                        <div class="input_material_block">
                        
                            <input type="number" required name="product_price" id="product_price" class="input-text"> 
                            <label for="product_price">قیمت بر اساس مولفه قیمتی :</label>
                        </div>
                        <div class="input_material_block active">
                            <input type="file" required name="product_image" id="product_image" class="input-text" multiple>
                            <label for="product_image">تصویر محصول (امکان انتخاب چند عکس):</label>
                        </div>
                    <button type="submit" name="submit" class="btn btn-primary">ثبت محصول</button>
                </form>
                </section>
            </section>
        </section>
    </main>

    <?php include_once('__script__.php'); ?>
</body>
</html>