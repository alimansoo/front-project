<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo $baseroot;?>assets/css/contant.css">
    <link rel="shortcut icon" href="<?php echo $baseroot;?>assets/images/favicon.ico" type="image/x-icon">
</head>
<body lang="fa">
    <form action="./contant.php" method="post">
        <h1>فرم تماس با ما</h1>
        <div>
            <label for="title">عنوان درخواست : </label><br>
            <input type="text" id="title" name="title" required/>
        </div>

        <div>
            <label for="subject">موضوع درخواست : </label><br>
            <select id="subject" name="subject">
                <option value="1">مشکلات فنی</option>
                <option value="2">مشکلات سفارشی</option>
                <option value="3"> مشکلات امنیتی</option>
            </select>
        </div>

        <div>
            <label for="name">نام و نام خوانوادگی (اختیاری): </label><br>
            <input type="text" id="name" name="name" required/>
        </div>

        <div>
            <label for="email">ایمیل : </label><br>
            <input type="email" id="email" name="email" placeholder="ali2365@gmail.com" required/>
        </div>

        <div>
            <label for="textrequset">متن درخواست : </label><br>
            <textarea id="textrequset" name="text" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="ارسال"/>
    </form>
</body>
</html>