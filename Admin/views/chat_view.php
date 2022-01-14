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
                    <li class="nav_item"><i class='fas fa-tachometer-alt'></i><a href="<?php echo base_url;?>adminpanel/">داشبورد</a></li>
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
                            <form action="<?php echo base_url;?>adminChatController_controller.php?reciver_id=<?php echo $value1['id']; ?>" method="post" class="Chatform">
                                <input type="text" name="message" placeholder="ارسال پیام..." id="Chatmessage">
                                <input type="submit" value="ارسال">
                            </form>
                        </div>
                    <?php endforeach; ?>
                </section>
            </section>
        </section>
    </main>
    <script src="<?php echo base_url;?>assets/js/chatAdmin.js"></script>
    <?php include_once('__script__.php'); ?>
</body>
</html>