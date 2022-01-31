<?php
function get_title() {
    return "جزئیات سفارش";
}
function get_content()
{
    global $PriceofAll;
    global $transportPrice;
?>
    <section class="page_content">
        <form action="<?php echo Rout::full_url('order.saveorder'); ?>" method="post">
            <input type="hidden" name="price" value="<?php echo $PriceofAll+$transportPrice; ?>">
            <input type="hidden" name="transport_price" value="<?php echo $transportPrice; ?>">
            <?php 
                $datetime = new DateTime();
                $today = $datetime->format('Y-m-d');
                $datetime->modify('+1 day');
                $tomorow = $datetime->format('Y-m-d');
                $datetime->modify('+1 day');
                $tomorow1 = $datetime->format('Y-m-d');
                $datetime->modify('+1 day');
                $tomorow2 = $datetime->format('Y-m-d');
            ?>
            <div class="input_material_block active">
                <Select name="orderReciveDate" id="orderReciveDate">
                    <option value="<?php echo $today; ?>">امروز</option>
                    <option value="<?php echo $tomorow; ?>"><?php echo $tomorow; ?></option>
                    <option value="<?php echo $tomorow1; ?>"><?php echo $tomorow1; ?></option>
                    <option value="<?php echo $tomorow2; ?>"><?php echo $tomorow2; ?></option>
                </Select>
                <label for="orderReciveDate">روز تحویل سفارش</label>
            </div>
            <div class="input_material_block">
                <textarea require name="orderAddres" id="orderAddres" cols="30" rows="10"></textarea>
                <label for="orderAddres">آدرس تحویل گیرنده</label>
            </div>
            <div class="input_material_block">
                <input type="text" name="orderReciver" id="orderReciver">
                <label for="orderReciver">تحویل گیرنده سفارش :</label>
            </div>

            <div class="">
                <input type="checkbox" name="orderReciverisme" id="orderReciverisme">
                <label for="orderReciverisme">تحویل گیرنده سفارش خودم هستم</label>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" value="ثبت سفارش">
        </form>
    </section> 
<?php 
}
 