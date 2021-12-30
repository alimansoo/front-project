<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include"__init__.php"; ?>
</head>
<body id="body-container" class="admintPanel grid-20-80">
    <!-- include Sidebar -->
    <?php include "Sidebar.php"; ?>
    <main id="main-container">
        <!-- include Header -->
        <?php include "Header.php"; ?>
        <section id="container">
              <div id="edit">
            <div id="form_title">فرم ویرایش اطلاعات</div>
            <hr>
            <form action="editUser_controller.php?id=<?php echo $id; ?>" method="post" id="edit_form">
              <div class="input_sections">
                <div class="input_section">
                  <label for="firstname">نام :</label>
                  <br>
                  <input type="text" name="firstname" id="firstname" class="edit_input" value="<?php echo $result['firstname']; ?>">
                </div>
                <div class="input_section">
                  <label for="lastname">نام خوانوادگی :</label>
                  <br>
                  <input type="text" name="lastname" id="lastname" class="edit_input" value="<?php echo $result['lastname']; ?>">
                </div>
              </div>
              <div class="input_sections">
                <div class="input_section">
                  <label for="email">ایمیل :</label>
                  <br>
                  <input type="email" name="email" id="email" class="edit_input" value="<?php echo $result['email']; ?>">
                </div>
                <div class="input_section">
                  <label for="city">شهر محل سکونت :</label>
                  <br>
                  <select name="city" id="city" class="edit_input">
                    <option value="esf" <?php if ($result['city']=="esf") {echo "selected";}?>>اصفهان</option>
                    <option value="thr" <?php if ($result['city']=="thr") {echo "selected";} ?>>تهران</option>
                    <option value="mhd" <?php if ($result['city']=="mhd") {echo "selected";}?>>مشهد</option>
                    <option value="shr" <?php if ($result['city']=="shr") {echo "selected";}?>>شیراز</option>
                    <option value="tbz" <?php if ($result['city']=="tbz") {echo "selected";}?>>تبریز</option>
                  </select>
                </div>
              </div>
              <div class="input_sections">
                <div class="input_section">
                  <label for="phone">موبایل :</label>
                  <br>
                  <input type="number" name="phone" id="phone" class="edit_input"  value="<?php echo $result['phone']; ?>">
                </div>
                <div class="input_section">
                  <label for="password">رمز عبور :</label>
                  <br>
                  <input type="text" name="password" id="password" class="edit_input"  value="<?php echo $result['password']; ?>">
                </div>
              </div>
              <div class="input_sections">
                <button type="submit" name="submit" class="filled-tonal-button">ثبت تغییرات</button>
              </div>
            </form>
          </div>
        </section>
    </main>
    <!-- <nav id="side-navigation"></nav> -->
    <!-- <footer id="footer"></footer> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>