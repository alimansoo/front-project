<?php
function is_admin_panel(){
    return true;
}
function get_title() {
    return "سبد خرید";
}
function get_content()
{
    global $users;
?>
    <section class="grid-lg-1to4">
        <section class="page_content">
        <h3 class="page_content_title">لیست کاربران</h3>
        <a class="btn btn-primary" href="<?php echo Rout::full_url('adminpanel.dashboard');?>">اضافه کردن کاربر+</a>
            <table class="table">
                <tr>
                    <th>شناسه</th>
                    <th>نام</th>
                    <th>نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>شهر</th>
                    <th>موبایل</th>
                    <th>رمز</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php 
                foreach ($users as $user) :?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['firstname']; ?></td>
                        <td><?php echo $user['lastname']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['city']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td><a href='{$controllerroot}removeUser_controller.php?id={$user['id']}'><i class='fas fa-trash'></i></a></td>
                        <td><a href='{$controllerroot}editUser_controller.php.php?id={$user['id']}'><i class='fas fa-edit'></i></a></td>
                    </tr>                        
                <?php
                endforeach;
                ?>
            </table>
        </section>
    </section>
<?php 
}