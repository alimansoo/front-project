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
        <table class="table">
                <tr>
                    <th>شناسه</th>
                    <th>شناسه محصول</th>
                    <th>شناسه کاربر</th>
                    <th>موضوع نظر</th>
                    <th>متن نظر</th>
                    <th></th>
                </tr>
                <?php 
                foreach ($comments as $comment) {
                    echo "
                    <tr>
                    <td>{$comment['id']}</td>
                    <td>{$comment['pid']}</td>
                    <td>{$comment['uid']}</td>
                    <td>{$comment['subject']}</td>
                    <td>{$comment['message']}</td>
                    <td><a href='{$controllerroot}deleteComment_controller.php?id={$comment['id']}'><i class='fas fa-trash'></i></a></td>
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
