<?php 
$price_component = array('metric' => 'متری','pices' => 'دونه ای');
$catg = array('bnr' => 'بنر','lva' => 'لیوان');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="admintPanel">
    <?php include_once('Header.php'); ?>    
    <main id="container" class="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-3">
            <?php include_once('Sidebar.php'); ?>
            <section class="grid-lg-1to4">
                <section class="page_content">
                   <a  href="<?php echo $controllerroot;?>addTicket_controller.php">اضافه کردن درخواست+</a>
                    <table class="table">
                            <tr>
                            <th>شناسه</th>
                            <th>عنوان مشکل</th>
                            <th>موضوع مشکل</th>
                            <th>نام درخواست کننده</th>
                            <th>ایمیل درخواست کننده</th>
                            <th>پیام درخواست</th>
                            <th></th>
                            <th></th>
                            </tr>
                            <?php 
                            foreach ($users as $user) {
                                echo "
                                <tr>
                                <td>{$user['ID']}</td>
                                <td>{$user['title']}</td>
                                <td>{$user['subject']}</td>
                                <td>{$user['name']}</td>
                                <td>{$user['email']}</td>
                                <td>{$user['text']}</td>
                                <td><a href='{$controllerroot}removeTicket_controller.php?id={$user['ID']}'><i class='fas fa-trash'></i></a></td>
                                <td><a href='{$controllerroot}editTicket_controller.php.php?id={$user['ID']}'><i class='fas fa-edit'></i></a></td>
                                </tr>";
                            ?>
                            
                            <?php
                            }
                            ?>
                        </table>
                </section>
            </section>
        </section>
    </main>

    <script src="<?php echo $assetsroot ?>js/templates/sidebar.js"></script>
    <script src="<?php echo $baseroot;?>assets/js/drophover.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>