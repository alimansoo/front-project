<?php
function get_title() {
    return "صفحه اصلی";
}
function get_content()
{
?>
    <section class="page_content">
        <div id="form_title">ورود کاربر</div>
        <hr>
        <form action="#" method="post" id="login_form">
            <div class="input_material_block">
                <input type="email" name="email" id="email" class="login_input">
                <label for="email">ايميل :</label>
            </div>
            <div class="input_material_block">
                <input type="password" name="password" id="password" class="login_input">
                <label for="password">رمز عبور :</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">ورود</button>
            <a href="<?php echo get_Full_URL('register'); ?>" class="btn btn-primary">ثبت نام</a>
        </form>
        
    </section>   
<?php 
}
renderPage();