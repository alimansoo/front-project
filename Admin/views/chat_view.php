<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ماهرنگ</title>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseroot;?>assets/css/style.css">
    <?php include'__init__.php'; ?>
</head>
<body id="body-container" class="">

    <section class="chat"> 
        <div class="chat_container show">
            <div class="header">
                پشتیبانی ماهرنگ
            </div>
            <div id="chat_container">
            </div>
            <div class="footer">
                <form action="<?php $controllerroot ?>adminChatController_controller.php?reciver_id=" method="post" id="Chatform">
                    <input type="text" name="message" id="Chatmessage">
                    <input type="submit" value="ارسال">
                </form>
            </div>
        </div>
    </section>
    
    <p id="Small_modal_Message" class="small_modal_message"><i class="fas fa-times"></i><span class="message"></span></p>
    <?php include_once('__script__.php'); ?>
</body>
</html>