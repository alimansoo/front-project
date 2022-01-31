<section class="chat"> 
    <div class="chat_container">
        <div class="header">
            پشتیبانی ماهرنگ
        </div>
        <div id="chat_container">
        </div>
        <div class="footer">
            <form action="<?php echo get_Full_URL('userpanel.chatmanage'); ?>" method="post" id="Chatform">
                <input type="text" name="message" id="Chatmessage">
                <input type="submit" value="ارسال">
            </form>
        </div>
    </div>
    <div class="chat_icon">
        <i class="fas fa-comments"></i>
    </div>
</section>