<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
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
                    <h3 class="page_content_title">اطلاعات شخصی</h3>
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
                            <td><a href='{$controllerroot}deleteComment_controller.php?id={$comment['id']}' class='ajaxWorkerLink'><i class='fas fa-trash'></i></a></td>
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

    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>

    <?php include_once('__script__.php'); ?>
</body>
</html>
