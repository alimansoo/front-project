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
    <main id="main-container">
        <form action="<?php echo $controllerroot ?>SaveOrder_controller.php" method="post">
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
            <label for="orderReciveDate">روز تحویل سفارش</label>
            <Select name="orderReciveDate" id="orderReciveDate">
                <option value="<?php echo $today; ?>">امروز</option>
                <option value="<?php echo $tomorow; ?>"><?php echo $tomorow; ?></option>
                <option value="<?php echo $tomorow1; ?>"><?php echo $tomorow1; ?></option>
                <option value="<?php echo $tomorow2; ?>"><?php echo $tomorow2; ?></option>
            </Select>

            <label for="orderAddres">آدرس تحویل گیرنده</label>
            <textarea name="orderAddres" id="orderAddres" cols="30" rows="10"></textarea>
            
            <label for="orderReciver">تحویل گیرنده سفارش :</label>
            <input type="text" name="orderReciver" id="orderReciver">

            <label for="orderReciverisme">تحویل گیرنده سفارش خودم هستم</label>
            <input type="checkbox" name="orderReciverisme" id="orderReciverisme">
            
            <input type="submit" name="submit" value="ثبت سفارش">
        </form>
    </main>
    <?php include_once('footer.php'); ?>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>