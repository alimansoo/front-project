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
                <section class="page_content grid-display col-sm-1 col-md-2 col-lg-4">
                    <div class="infosmallbox">
                        <div class="infosmallbox_icon"><i class="fas fa-chart-bar"></i></div>
                        <div class="infosmallbox_content">
                            <h5 class="infosmallbox_content_head">سود ماه اخیر</h5>
                            <h6 class="infosmallbox_content_value">360000 ریال</h6>
                        </div>
                    </div>
                    <div class="infosmallbox">
                        <div class="infosmallbox_icon"><i class="fas fa-box"></i></div>
                        <div class="infosmallbox_content">
                            <h5 class="infosmallbox_content_head">سفارشات ماه اخیر</h5>
                            <h6 class="infosmallbox_content_value">36000</h6>
                        </div>
                    </div>
                    <div class="infosmallbox">
                        <div class="infosmallbox_icon"><i class="fas fa-chart-bar"></i></div>
                        <div class="infosmallbox_content">
                            <h5 class="infosmallbox_content_head">کاربران جدید</h5>
                            <h6 class="infosmallbox_content_value">360</h6>
                        </div>
                    </div>
                    <div class="infosmallbox">
                        <div class="infosmallbox_icon"><i class="fas fa-chart-bar"></i></div>
                        <div class="infosmallbox_content">
                            <h5 class="infosmallbox_content_head">سود ماه اخیر</h5>
                            <h6 class="infosmallbox_content_value">360000 ریال</h6>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </main>

    <?php include_once('__script__.php'); ?>
</body>
</html>

