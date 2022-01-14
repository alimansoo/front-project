<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-25-75">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>

    
    <main id="container" class="container">
        <section class="grid-display col-sm-1 col-md-1 col-lg-4">
            <?php include_once('UserPanelSidebar.php'); ?>
            <section class="grid-lg-2to5">
                <section class="page_content">
                    <h3 class="page_content_title">اطلاعات شخصی</h3>
                    <table class="table">
                        <tr>
                            <th>نام کاربر :</th>
                            <td><?php echo $_SESSION['firstname']; ?></td>
                            <th>نام خوانوادگی:</th>
                            <td><?php echo $_SESSION['lastname']; ?></td>
                        </tr>
                        <tr>
                            <th>شماره تلفن کاربر:</th>
                            <td><?php echo $_SESSION['phone']; ?></td>
                            <th>ایمیل کاربر:</th>
                            <td><?php echo $_SESSION['email']; ?></td>
                        </tr>
                        <tr>
                            <th>شهر سکونت:</th>
                            <td><?php echo $_SESSION['city']; ?></td>
                        </tr>
                    </table>
                </section>
            </section>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>

