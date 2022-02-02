<?php
function adminPanel(){
    return true;
}
if (!isset($_POST['submit'])) 
{
    View::IncludeForThis();
}
else
{
    $target_dir = PRODUCT_IMAGE_PATH;
    $filename;
    while (true) {
        $filename = Product::GenerateImageName();
        $target_file = $target_dir.$filename;
        if (!file_exists($target_file)) {
            break;
        }
    }

    $Product = new Product();
    $Product->name = Data::get('product_name',$_POST);
    $Product->catg = Data::get('product_catg',$_POST);
    $Product->price_component = Data::get('price_component',$_POST);
    $Product->price = Data::get('product_price',$_POST);
    $Product->image_src = $filename;
    if ($Product->Add()) {
        $url = Rout::full_url('adminpanel.listproduct');
    }

    move_uploaded_file($_FILES["product_image"]["tmp_name"], $target_file);

    Rout::redirect_to($url);
}
