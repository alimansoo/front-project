<header id="header" class="header">
        <div class="site-brand">
            <img src="<?php echo BASE_URL;?>assets/images/logo.png" alt="" class="image-brand">
            <a href="<?php echo BASE_URL;?>" class="link-brand">ماهرنگ</a>
        </div>
        <div class="header-action">
            <?php
                if (Athuntication::isUser()):
            ?>
                <div class="drophover">
                    <i class="fas fa-user-circle drophover_first_item action first"></i>
                    <ul class="drophover_menu left">
                        <li class="drophover_item"><a href="<?php echo Rout::full_url('userpanel.dashboard'); ?>"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']; ?></a></li>
                        <li class="drophover_item"><a href="<?php echo Rout::full_url('userpanel.myorder'); ?>"><i class="fa fa-box"></i>سفارش های من</a></li>
                        <li class="drophover_item"><a href="<?php echo Rout::full_url('logout'); ?>"><i class="fas fa-sign-out-alt"></i>خروج</a></li>
                    </ul>
                </div>
            <?php
                else:
            ?>
                <a href="<?php echo Rout::full_url('login');?>"><i class="fas fa-user-circle action first"></i></a>
            <?php
                endif;
            ?>
            
            <a href="<?php echo Rout::full_url('cart'); ?>"><i class="fa fa-shopping-cart action"></i></a>
            
        </div>
</header>