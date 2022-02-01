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
    global $OrderArray;
    global $OrderItemArray;
    global $OrderItemProduct;
?>
    <section class="grid-lg-2to5">
        <section class="page_content">
            <h3 class="page_content_title">سفارشات من </h3>
            <?php
            foreach ($OrderArray as $key => $myOrder) {
                Template::Include('Orders',['Order'=>$myOrder,'ProductArray'=>$OrderItemProduct[$key]]);
            }
            ?>
        </section>    
    </section>
<?php 
}
 
