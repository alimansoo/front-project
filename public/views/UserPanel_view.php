<?php
function user_panel()
{
    return true;
}
function get_title() {
    return "صفحه حساب کاربری";
}
function get_content()
{
?>
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
<?php 
}
App::render();
?>