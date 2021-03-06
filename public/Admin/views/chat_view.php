<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب کاربری</title>
    <?php include "__init__.php"; ?>
</head>
<body id="body-container" class="admintPanel">
    <?php include_once('Header.php'); ?>    
    <main id="container" class="container not-padding">
        <section class="grid-display col-sm-1 col-md-1 col-lg-1 height-100">
            <div id="backsidebar" class="backsidebar">
            </div>

            <aside id="sidebar" class="sidebar material_side light-side">
                <nav class="sidebar_nav">
                    <ul class="nav_list">
                    <li class="nav_item"><i class='fas fa-tachometer-alt'></i><a href="<?php echo Rout::full_url('adminpanel.dashboard');?>">داشبورد</a></li>
                        <?php foreach ($AllofChat as $key => $value):
                        ?>
                            <li class="nav_item chat_contant" id="chat_contant<?php echo $value['id'];?>"><i class="fas fa-user-circle"></i><?php echo $value['id'];?></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </aside>
            <section class="grid-lg-1to4 height-100">
                <section class="full-container grid-display col-sm-1 col-md-1 col-lg-1">
                    <?php foreach ($AllofChat as $key1 => $value1):
                    ?>
                        <div class="admin-chat-container chat_messages" id="chat_container<?php echo $value1['id'];?>">
                            <?php foreach ($value1['chatarray'] as $key2 => $value2):
                                if ($value2['state'] === 'my') {
                                    echo "<div class='my'><div class='chat-element mychat'>{$value2['message']}</div></div>";
                                }elseif ($value2['state'] === 'any'){
                                    echo "<div class='any'><div class='chat-element anychat'>{$value2['message']}</div></div>";
                                }
                            endforeach; ?>
                            <a href="<?php echo Rout::full_url('adminpanel.chatmanage');?>" id="ChatAdminLink" class="hidden"></a>
                            <form action="<?php echo Rout::full_url('userpanel.chatmanage');?>?reciver_id=<?php echo $value1['id']; ?>" method="post" class="Chatform">
                                <input type="text" name="message" placeholder="ارسال پیام..." id="Chatmessage">
                                <input type="submit" value="ارسال">
                            </form>
                        </div>
                    <?php endforeach; ?>
                </section>
            </section>
        </section>
    </main>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="<?php echo BASE_URL;?>assets/js/templates/productView.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/templates/input.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/main.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/Comment.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/ajaxWorker.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/drophover.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/SmallMessageBox.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/templates/sidebar.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/chatAdmin.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/search.js"></script>
</body>
</html>