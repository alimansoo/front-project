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
                <a class="filled-tonal-button" href="<?php echo $controllerroot;?>addUser_controller.php">اضافه کردن کاربر+</a>
                    <table class="table">
                        <tr>
                            <th>شناسه</th>
                            <th>نام</th>
                            <th>نام خانوادگی</th>
                            <th>ایمیل</th>
                            <th>شهر</th>
                            <th>موبایل</th>
                            <th>رمز</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php 
                        foreach ($users as $user) {
                            echo "
                            <tr>
                            <td>{$user['id']}</td>
                            <td>{$user['firstname']}</td>
                            <td>{$user['lastname']}</td>
                            <td>{$user['email']}</td>
                            <td>{$user['city']}</td>
                            <td>{$user['phone']}</td>
                            <td>{$user['password']}</td>
                            <td><a href='{$controllerroot}removeUser_controller.php?id={$user['id']}'><i class='fas fa-trash'></i></a></td>
                            <td><a href='{$controllerroot}editUser_controller.php.php?id={$user['id']}'><i class='fas fa-edit'></i></a></td>
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

    <?php include_once('__script__.php'); ?>
</body>
</html>