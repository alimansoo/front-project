<?php
function get_title() {
    return "صفحه اصلی";
}
function get_content()
{
    global $ERORRS;
?>
    <section class="page_content">
        <div id="form_title">ورود کاربر</div>
        <hr>
        <?php
                if (count($ERORRS) > 0) {
                    ?>
                    <div class="erroremessage">
                        <ul>
                            <?php
                                foreach ($ERORRS as  $value) {
                                    ?>
                                        <li><?php echo $value; ?></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <?php
                }
            ?>
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
            <a href="<?php echo Rout::full_url('register'); ?>" class="btn btn-primary">ثبت نام</a>
        </form>
        
    </section>   
<?php 
}
 