<?php 
function firstsection() {
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php 
        if (function_exists('get_title')) {
            echo get_title();
        }else{
            echo APP_NAME;
        }
    ?></title>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="http://localhost:8012/front-project/assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://localhost:8012/front-project/assets/css/style.css">
</head>
<body id="body-container" class="grid-100 grid-row-container">
    <?php include_once('assets/templates/header.php'); ?>
    <?php include_once('assets/templates/TopNavigation.php'); ?>
    <main id="container" class="container">
<?php
}
function secondsection() {
    ?>
    </main>
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php include_once('assets/templates/footer.php'); ?>
    <?php include_once('views/__script__.php'); ?>
</body>
</html>
<?php
}
function renderPage()
{
    firstsection();
    if (function_exists("get_content")) {
        get_content();
    }
    secondsection();
}
function include_controller($name) {
    include "./controllers/{$name}_controller.php";
}
function redirect_to($path){
    if (is_null($path)) {
        return;
    }
    header("Location:$path");
}
function getFilename($filename){
    return explode('_',$filename)[0];
}
function includethisView()
{
    $filename = getFilename(
        basename(
            debug_backtrace()[0]['file']
        )
    );
    include viewroot.$filename.'_view.php';
}
function includeView($filename)
{
    include viewroot.$filename.'_view.php';
}
function includethisAdminView()
{
    $filename = getFilename(
        basename(
            debug_backtrace()[0]['file']
        )
    );
    include admin_viewroot.$filename.'_view.php';
}
function includeAdminView($filename)
{
    include viewroot.$filename.'_view.php';
}
function getImageSource($imagename){
    return base_url."assets/images/products/".$imagename;
}