<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="grid-100 grid-row-container">
    <?php include_once('header.php'); ?>    
    <?php include_once('TopNavigation.php'); ?>
    <main id="container">
        <section class="page_content">
            <form action="<?php echo $controllerroot ?>SaveOrder_controller.php" method="post">
                <input type="hidden" name="price" value="<?php echo $allofPrice+$transportPrice; ?>">
                <input type="hidden" name="transport_price" value="<?php echo $transportPrice; ?>">
                <?php 
                    $datetime = new DateTime();
                    $today = $datetime->format('Y-m-d');
                    $datetime->modify('+1 day');
                    $tomorow = $datetime->format('Y-m-d');
                    $datetime->modify('+1 day');
                    $tomorow1 = $datetime->format('Y-m-d');
                    $datetime->modify('+1 day');
                    $tomorow2 = $datetime->format('Y-m-d');
                ?>
                <div class="input_material_block active">
                    <Select name="orderReciveDate" id="orderReciveDate">
                        <option value="<?php echo $today; ?>">امروز</option>
                        <option value="<?php echo $tomorow; ?>"><?php echo $tomorow; ?></option>
                        <option value="<?php echo $tomorow1; ?>"><?php echo $tomorow1; ?></option>
                        <option value="<?php echo $tomorow2; ?>"><?php echo $tomorow2; ?></option>
                    </Select>
                    <label for="orderReciveDate">روز تحویل سفارش</label>
                </div>
                <div class="input_material_block">
                    <textarea require name="orderAddres" id="orderAddres" cols="30" rows="10"></textarea>
                    <label for="orderAddres">آدرس تحویل گیرنده</label>
                </div>
                <div class="input_material_block">
                    <input type="text" name="orderReciver" id="orderReciver">
                    <label for="orderReciver">تحویل گیرنده سفارش :</label>
                </div>

                <div class="">
                    <input type="checkbox" name="orderReciverisme" id="orderReciverisme">
                    <label for="orderReciverisme">تحویل گیرنده سفارش خودم هستم</label>
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="ثبت سفارش">
            </form>
        </section>
    </main>
    <?php include_once('footer.php'); ?>
    <?php include_once('__script__.php'); ?>
</body>
</html>