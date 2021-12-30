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

    <?php include_once('UserPanelSidebar.php'); ?>
    <main id="main-container">
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
        <section class="page_content">
            <h3 class="page_content_title">سفارشات اخیر</h3>
            <table class="table">
                <tr>
                    <th>شناسه</th>
                    <th>شناسه سفارش دهنده</th>
                    <th>تاریح ثبت</th>
                    <th>تاریخ تحویل</th>
                </tr>
                <tr>
                    <td>12</td>
                    <td>13</td>
                    <td>30/12/2021</td>
                    <td>12/01/2022</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>13</td>
                    <td>30/12/2021</td>
                    <td>12/01/2022</td>
                </tr>
            </table>
        </section>
        
    </main>
    <?php include_once('footer.php'); ?>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>

