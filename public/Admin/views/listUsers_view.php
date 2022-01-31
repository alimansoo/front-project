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
                <h3 class="page_content_title">لیست کاربران</h3>
                <a class="btn btn-primary" href="<?php echo base_url;?>addUser/">اضافه کردن کاربر+</a>
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
                        foreach ($users as $user) :?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['firstname']; ?></td>
                                <td><?php echo $user['lastname']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['city']; ?></td>
                                <td><?php echo $user['phone']; ?></td>
                                <td><?php echo $user['password']; ?></td>
                                <td><a href='{$controllerroot}removeUser_controller.php?id={$user['id']}'><i class='fas fa-trash'></i></a></td>
                                <td><a href='{$controllerroot}editUser_controller.php.php?id={$user['id']}'><i class='fas fa-edit'></i></a></td>
                            </tr>                        
                        <?php
                        endforeach;
                        ?>
                    </table>
                </section>
            </section>
        </section>
    </main>

    <?php include_once('__script__.php'); ?>
</body>
</html>