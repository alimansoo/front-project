<?php
function get_content_userPanel()
{
    global $AllProduct;
?>
        <section class="grid-display col-sm-1 col-md-1 col-lg-4">
            <?php Template::Include('UserPanelSidebar'); ?>
            <?php
                if (function_exists("get_content")) {
                    get_content();
                }
            ?>
        </section>
<?php
}
Template::IncludePage("MainPage");