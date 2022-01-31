<section class='filled card'>
    <img src='<?php echo $Product->image_src; ?>' class='card-img-top' alt=''>
    <div class='card-body'>
        <?php
        //Like of Product
        if ($Product->isLike !== null) {
            if ($Product->isLike === true) {
                ?>
                    <a href='<?php echo getProduc_like_Url($Product->id); ?>'><i class='fas fa-heart'></i></a>
                <?php
            } else {
                ?>
                    <a href='<?php echo getProduc_like_Url($Product->id); ?>'><i class='far fa-heart'></i></a>
                <?php
            }
        } 
        //bookmark of Product
        if ($Product->isBookmark !== null) {
            if ($Product->isBookmark === true) {
                ?>
                    <a href='<?php echo getProduc_bookmark_Url($Product->id); ?>'><i class='fas fa-bookmark'></i></a>
                <?php
            } else {
                ?>
                    <a href='<?php echo getProduc_bookmark_Url($Product->id); ?>'><i class='far fa-bookmark'></i></a>
                <?php
            }
        } 
        ?>
        <h5 class='card-title'>
            <a href='<?php echo getProductUrl($Product->id); ?>'><?php echo $Product->name; ?></a>
        </h5>
        <div class='secondary-title'>
            <?php echo number_format($Product->price, 0); ?> ریال
        </div>
        <p class='card-text'></p>
        <?php
        //cart of Product
        if ($Product->isToCart !== null) {
            if ($Product->isToCart === true) {
            ?>
                <a href='<?php echo getProduc_AddCart_tUrl($Product->id); ?>' class='btn btn-primary remove card_btn'>حذف از سبد</a>
            <?php
            } else {
            ?>
                <a href='<?php echo getProduc_AddCart_tUrl($Product->id); ?>' class='btn btn-primary add card_btn'>افزودن به سبد</a>
            <?php
            }
        } 
        ?>
        
    </div>
</section>