<?php
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $Order;
?>
    <section class="page_content center">
        <form method="post">
            <div class="controler_block grid-display col-sm-5 col-md-5 col-lg-5">
                <label for="">شماره کارت</label>
                <input type="text" class="controler" max="4" min="4">
                <input type="text" class="controler" max="4" min="4">
                <input type="text" class="controler" max="4" min="4">
                <input type="text" class="controler" max="4" min="4">
            </div>
            <div class="controler_block grid-display col-sm-5 col-md-5 col-lg-5">
                <label for=""> cvv2</label>
                <input type="text" class="controler grid-column-2-4">
            </div>
            <div class="controler_block grid-display col-sm-5 col-md-5 col-lg-5">
                <label for="">تاریخ انقضا</label>
                <input type="text" class="controler">
                <input type="text" class="controler">
            </div>
            <div class="controler_block grid-display col-sm-5 col-md-5 col-lg-5">
                <label for="">رمز دوم</label>
                <input type="text" class="controler grid-column-2-4">
            </div>
            <div class="controler_block grid-display col-sm-5 col-md-5 col-lg-5">
                <label for="">رمز دوم</label>
                <input type="text" class="controler grid-column-2-4">
                <button class="btn btn-primary">درخواست</button>
            </div>
            <div class="controler_block grid-display col-sm-5 col-md-5 col-lg-5">
                <label for="">مبلغ</label>
                <input type="text" readonly value="<?php echo number_format($Order->priceAll); ?> ریال " class="controler grid-column-2-4">
            </div>
            <input type="submit" name="submit" class="btn full-btn btn-success" value="پرداخت">
        </form>
    </section>  
<?php 
}
 
