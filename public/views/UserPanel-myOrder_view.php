<?php
function user_panel()
{
    return true;
}
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $data;
?>
    <section class="grid-lg-2to5">
        <section class="page_content">
            <h3 class="page_content_title">سفارشات من </h3>
            <?php 
            foreach ($data as $myOrder) {
                $model1=new Order($myOrder);
                Template::Include('Orders',$model1);
            }
            ?>
        </section>    
    </section>
<?php 
}
 
