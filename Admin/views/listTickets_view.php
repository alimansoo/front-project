<?php 
$baseroot = '../../';
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
    <?php include"__init__.php"; ?>
</head>
<body id="body-container" class="admintPanel grid-20-80">
    <!-- include Sidebar -->
    <?php include "Sidebar.php"; ?>
    <main id="main-container">
        <!-- include Header -->
        <?php include "Header.php"; ?>
        <section id="container">
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
                        <td><a href='{$controllerroot}removeTicket_controller.php?id={$user['ID']}'>حذف</a></td>
                        <td><a href='{$controllerroot}editTicket_controller.php.php?id={$user['ID']}'>ویرایش</a></td>
                        </tr>";
                    ?>
                    
                    <?php
                    }
                    ?>
                </table>
        </section>
    </main>
    <!-- <nav id="side-navigation"></nav> -->
    <!-- <footer id="footer"></footer> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>