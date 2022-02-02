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
    $target_dir = SLIDE_IMAGE_PATH;
    $filename;
    while (true) {
        $filename = Randome::GenerateNumber(6).'.jpg';
        $target_file = $target_dir.$filename;
        if (!file_exists($target_file)) {
            break;
        }
    }
    $imageProperty = getimagesize($_FILES["image"]["tmp_name"]);

    if ($imageProperty[0] !== 2000 and $imageProperty[0] !== 667) {
        $_SESSION['status'] = 300;
        $_SESSION['message'] = 'عکس باید در اندازه 2000*667 پیکسل باشد.';
        $url = Rout::full_url('adminpanel.slide');
    }else{
        $Slide = new Slide();
        $Slide->image_src = $filename;
        if ($Slide->Add()) {
            $url = Rout::full_url('adminpanel.slide');
        }

        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $_SESSION['status'] = 200;
        $_SESSION['message'] = 'اسلاید اضافه شد.';
    }
    Rout::redirect_to($url);
}
