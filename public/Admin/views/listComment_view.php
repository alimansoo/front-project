<?php
function is_admin_panel(){
    return true;
}
function get_title() {
    return "سبد خرید";
}
function get_content()
{
    global $comments;
?>
<section class="grid-lg-1to4">
                <section class="page_content">
                    <h3 class="page_content_title">لیست نظر ها</h3>
                    <table class="table">
                        <tr>
                            <th>شناسه</th>
                            <th>شناسه محصول</th>
                            <th>شناسه کاربر</th>
                            <th>موضوع نظر</th>
                            <th>متن نظر</th>
                            <th></th>
                        </tr> 
                        <?php 
                        foreach ($comments as $comment) : ?>
                            <tr id="#comment<?php echo $comment['id'];?>">
                                <td><?php echo $comment['id'];?></td>
                                <td><?php echo $comment['pid'];?></td>
                                <td><?php echo $comment['uid'];?></td>
                                <td><?php echo $comment['subject'];?></td>
                                <td><?php echo $comment['message'];?></td>
                                <td><a href='{controllerroot}removeTicket_controller.php?id={$user['ID']}'><i class='fas fa-trash'></i></a></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </table>
                </section>
            </section>
<?php 
}