<nav id="navigation-bar" class="navbar bg-dark pos-stiky">
    <ul class="list">
        <li class="list_item" id="SidebarIcon"><i class='fas fa-bars'></i></li>
        <li class="list_item"><a href="<?php echo $controllerroot ?>home_controller.php" class="link">خانه</a></li>
        <li class="list_item"><a href="<?php echo $controllerroot ?>Products_controller.php" class="link">محصولات</a></li>
        <li class="list_item"><a href="" class="link">تماس با ما</a></li>
    </ul>
    <ul class="list">
        <li class="list_item">
            <input type = "search" list = "searchResult" placeholder="جستجو..">
			<datalist id = "searchResult">
                
			</datalist>
        </li>
    </ul>
</nav>