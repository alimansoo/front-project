<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-100">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="page_content">
            <div id="form_title">ورود کاربر</div>
            <hr>
            <form action="#" method="post" id="login_form">
                <div class="input_material_block">
                    <input type="email" name="email" id="email" class="login_input">
                    <label for="email">ايميل :</label>
                </div>
                <div class="input_material_block">
                    <input type="password" name="password" id="password" class="login_input">
                    <label for="password">رمز عبور :</label>
                </div>
                <button type="submit" name="submit" class="filled-tonal-button">ورود</button>
            </form>
        </section>   
    </main>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>