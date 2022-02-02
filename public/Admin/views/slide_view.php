<?php
function is_admin_panel(){
    return true;
}
function get_title() {
    return "اسلاید";
}
function get_content()
{
?>
    <?php if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['status']);
        unset($_SESSION['message']);
    } ?>
    <section class="grid-lg-1to4">
        <section class="page_content grid-display col-sm-1 col-md-1 col-lg-1">
            <h3 class="page_content_title">اضافه کردن اسلاید</h3>
            
        <form action="" method="post" enctype="multipart/form-data">
                <div class="input_material_block active">
                    <input type="file" name="image" id="image" class="input-text">
                    <label for="image">تصویر محصول (2000*667px):</label>
                </div>
            <button type="submit" name="submit" class="btn btn-primary">ثبت محصول</button>
        </form>
        </section>
    </section>
<?php 
}