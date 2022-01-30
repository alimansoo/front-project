<nav id="navigation-bar" class="navbar bg-dark pos-stiky">
    <ul class="list">
        <li class="list_item" id="SidebarIcon"><i class='fas fa-bars'></i></li>
        <li class="list_item"><a href="<?php echo get_Full_URL('home');?>" class="link">خانه</a></li>
        <li class="list_item"><a href="<?php echo get_Full_URL('home');?>" class="link">محصولات</a></li>
        <li class="list_item"><a href="" class="link">تماس با ما</a></li>
    </ul>
    <ul class="list">
        <li class="list_item">
            <a href="<?php echo searchProduct();?>" id="Searchlink" class="hidden"></a>
            <input type = "search" list = "searchdata" placeholder="جستجو..">
			<datalist id="searchdata">  
			</datalist>
        </li>
    </ul>
</nav>