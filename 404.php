<?php
function get_title()
{
    return "پیدا نشد";
}
function get_content(){
?>
    <section class="grid-display col-sm-1 col-md-1 col-lg-1">
        <section class="page_content text-align-center">
            <img src="<?php echo base_url ?>assets/images/404.jpg" alt="">
        </section>
    </section>
<?php
}
App::render();