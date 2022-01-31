<section class='filled card'>
    <img src='<?php echo $data->image_src; ?>' class='card-img-top' alt=''>
    <div class='card-body'>
        <?php
        //Like of Product
        if ($data->isLike !== null) {
            if ($data->isLike === true) {
                ?>
                    <a href='<?php echo getProduc_like_Url($data->id); ?>'><i class='fas fa-heart'></i></a>
                <?php
            } else {
                ?>
                    <a href='<?php echo getProduc_like_Url($data->id); ?>'><i class='far fa-heart'></i></a>
                <?php
            }
        } 
        //bookmark of Product
        if ($data->isBookmark !== null) {
            if ($data->isBookmark === true) {
                ?>
                    <a href='<?php echo getProduc_bookmark_Url($data->id); ?>'><i class='fas fa-bookmark'></i></a>
                <?php
            } else {
                ?>
                    <a href='<?php echo getProduc_bookmark_Url($data->id); ?>'><i class='far fa-bookmark'></i></a>
                <?php
            }
        } 
        ?>
        <h5 class='card-title'>
            <a href='<?php echo getProductUrl($data->id); ?>'><?php echo $data->name; ?></a>
        </h5>
        <div class='secondary-title'>
            <?php echo number_format($data->price, 0); ?> ریال
        </div>
        <p class='card-text'></p>
        <?php
        //cart of Product
        if ($data->isToCart !== null) {
            if ($data->isToCart === true) {
            ?>
                <a href='<?php echo getProduc_AddCart_tUrl($data->id); ?>' class='btn btn-primary remove card_btn'>حذف از سبد</a>
            <?php
            } else {
            ?>
                <a href='<?php echo getProduc_AddCart_tUrl($data->id); ?>' class='btn btn-primary add card_btn'>افزودن به سبد</a>
            <?php
            }
        } 
        ?>
        
    </div>
</section>