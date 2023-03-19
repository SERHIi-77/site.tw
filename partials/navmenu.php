<div class="container">
    
    
        <div class=burgermenu-nav-main>
            <span><img src="../assets/img/header/paw.svg"></span>
            <p> MENU</p>
        </div>
        <div class="navbar-change">
            <ul class="navbar-change-k">
                <li class="nav-item" ><a class="nav-link<?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> active<?php endif ?>" aria-current="page" href="/?p=home">Головна</a></li>
                <li class="nav-item" ><a class="nav-link<?php if(isset($_GET['p']) && $_GET['p'] == 'catalog'): ?> active<?php endif ?>" href="/?p=catalog">Каталог</a></li>
                <li class="nav-item" ><a class="nav-link<?php if(isset($_GET['p']) && $_GET['p'] == 'about'): ?> active<?php endif ?>" href="/?p=about">Новини</a></li>
                <li class="nav-item" ><a class="nav-link<?php if(isset($_GET['p']) && $_GET['p'] == 'contact'): ?> active<?php endif ?>" href="/?p=contact">Допомога</a></li>
                
                
                <?php // добавляем менюшку если залогирован пользователь
                    if(isAuth ()):
                      ?>  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Додати об'яву</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/partials/ads/add_ad.php">Нова об'ява</a></li>
                                <li><a class="dropdown-item" href="/partials/pages/rules.php">Конфедеційність</a></li>
                                <!-- <li><hr class="dropdown-divider"></li> -->
                                <li><a class="dropdown-item" href="/admin/index.php">Кабинет</a></li>
                            </ul>
                        </li>
                <?php endif ?>
            </ul>
        </div>
        <h1 ><img src="/assets/img/header/paw1.svg" alt="paw1"><a href="index.php">Пухнасті лапки</a><img src="/assets/img/header/paw2.svg" alt="paw1"></h1>
        <form id="search-input" class="search-input">
            <input  type="text" name="query" placeholder="Пощук сайту...">
            <button  type="submit">Знайти</button>
        </form>
</div>
