<?php
function get_title() {
    return "فیلتر محصولات";
}
function get_content()
{
    global $allproduct;
?>
    <section class="grid-display col-sm-1 col-md-1 col-lg-4">
        <?php Template::Include('FilterProductSidebar'); ?>
        <section class="page_content grid-lg-2to5">
            <section class="grid-display col-sm-1 col-md-2 col-lg-3">
                <?php
                foreach ($allproduct as $value) {
                    $product = new Product($value);
                    Template::Include('SimpleProductCart',['Product'=>$product]);
                }
                ?>
            </section>
        </section>
    </section>
<?php 
}
 