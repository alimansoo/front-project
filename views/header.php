<header id="header" class="header">
        <div class="site-brand">
            <img src="<?php echo $baseroot;?>assets/images/logo.png" alt="" class="image-brand">
            <a href="<?php echo $controllerroot;?>controllers/home_controller.php" class="link-brand">ماهرنگ</a>
        </div>
        <div class="header-action">
            <?php
                if (Athuntication::isUser()):
            ?>
                <div class="drophover ">
                    <a href="<?php $controllerroot; ?>UserPanel_controller.php"><i class="fas fa-user-circle"></i></a>
                    <ul class="drophover_menu left">
                        <li class="drophover_item"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']; ?></li>
                        <li class="drophover_item"><a href="<?php echo $controllerroot; ?>"><i class="fa fa-box"></i>سفارش های من</a></li>
                        <li class="drophover_item"><a href="<?php echo $controllerroot; ?>exit_controller.php"><i class="fas fa-sign-out-alt"></i>خروج</a></li>
                    </ul>
                </div>
            <?php
                else:
            ?>
                <a href="<?php $controllerroot; ?>login_controller.php"><i class="fas fa-user-circle"></i></a>
            <?php
                endif;
            ?>
            
            <a href="<?php $controllerroot; ?>Card_controller.php"><i class="fa fa-shopping-cart"></i></a>
            
        </div>
</header>