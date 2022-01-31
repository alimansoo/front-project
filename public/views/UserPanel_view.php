<?php 
// ob_start();
?>
<?php
function get_title() {
    return "صفحه حساب کاربری";
}
function get_content()
{
?>
        <section class="grid-display col-sm-1 col-md-1 col-lg-4">
            <?php include_once('UserPanelSidebar.php'); ?>
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
        </section>
<?php 
}
// $filename = getObFileName();
// if (file_exists($filename)) {
//     echo readcatchedFile($filename);
// }else {
    renderPage();
//     catchFile($filename);
// }
?>