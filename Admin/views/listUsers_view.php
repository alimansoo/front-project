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
                      <td><a href='{$controllerroot}removeUser_controller.php?id={$user['id']}'>حذف</a></td>
                      <td><a href='{$controllerroot}editUser_controller.php.php?id={$user['id']}'>ویرایش</a></td>
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