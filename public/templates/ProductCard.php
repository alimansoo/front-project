<section class='filled card'>
    <img src='<?php echo $Product->Image_Source(); ?>' class='card-img-top' alt=''>
    <div class='card-body'>
        <?php
        //Like of Product
        if ($Product->Is_Like() !== null) {
            if ($Product->Is_Like() === true) {
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
        if ($Product->Is_Bookmark() !== null) {
            if ($Product->Is_Bookmark() === true) {
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
            <?php echo $Product->Price_Fromated(); ?> ریال
        </div>
        <p class='card-text'></p>
        <?php
        //cart of Product
        if ($Product->Is_Cart() !== null) {
            if ($Product->Is_Cart() === true) {
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