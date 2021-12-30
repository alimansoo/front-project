<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo $baseroot;?>assets/css/login.css">
  <link rel="shortcut icon" href="<?php echo $baseroot;?>assets/images/favicon.ico" type="image/x-icon">
  <title>چاپ ماهرنگ</title>
</head>
<body>
  <div class="C-container">
    <div id="login">
      <div id="form_title">ورود کاربر</div>
      <hr>
      <form action="#" method="post" id="login_form">
        <div class="input_sections">
          <label for="email">ايميل :</label>
          <br>
          <input type="email" name="email" id="email" class="login_input">
        </div>
        <div class="input_sections">
          <label for="password">رمز عبور :</label>
          <br>
          <input type="password" name="password" id="password" class="login_input">
        </div>
        <div class="input_sections register_input">
          <button type="submit" name="submit" class="filled-tonal-button">ورود</button>
        </div>
      </form>
    </div>
  </div>
</body>
