<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <?php include"__init__.php"; ?>
</head>
<body>
    <?php
        if($status === "product not found"){
            echo "<p class='failedMessage'>محصول وجود ندارد</p>";
        } else if($status === '') {
            echo "<p class='successMessage'>محصول حذف شد.</p>";
        }
    ?>
</body>
</html>