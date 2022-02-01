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
                <h3 class="page_content_title">لیست تیکت ها</h3>
                    <table class="table">
                            <tr>
                            <th>شناسه</th>
                            <th>عنوان مشکل</th>
                            <th>موضوع مشکل</th>
                            <th>نام درخواست کننده</th>
                            <th>ایمیل درخواست کننده</th>
                            <th>پیام درخواست</th>
                            <th></th>
                            <th></th>
                            </tr>
                            <?php 
                            foreach ($users as $user) : ?>
                                <tr>
                                    <td><?php echo $user['ID'];?></td>
                                    <td><?php echo $user['title'];?></td>
                                    <td><?php echo $user['subject'];?></td>
                                    <td><?php echo $user['name'];?></td>
                                    <td><?php echo $user['email'];?></td>
                                    <td><?php echo $user['text'];?></td>
                                    <td><a href='{controllerroot}removeTicket_controller.php?id={$user['ID']}'><i class='fas fa-trash'></i></a></td>
                                    <td><a href='{controllerroot}editTicket_controller.php.php?id={$user['ID']}'><i class='fas fa-edit'></i></a></td>
                                </tr>
                            <?php
                            endforeach;
                            ?>
                        </table>
                </section>
            </section>
<?php 
}