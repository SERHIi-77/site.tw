<div class="container">
    <h1 ><img src="/assets/img/header/paw1.svg" alt="paw1"><a href="index.php">Пухнасті лапки</a><img src="/assets/img/header/paw2.svg" alt="paw1"></h1>
    <nav class="nav nav-fill navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto text-center">
                <li class="nav-item" ><a class="nav-link<?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> active<?php endif ?>" aria-current="page" href="/?p=home">Home</a></li>
                <li class="nav-item" ><a class="nav-link<?php if(isset($_GET['p']) && $_GET['p'] == 'catalog'): ?> active<?php endif ?>" href="/?p=catalog">Catalog</a></li>
                <li class="nav-item" ><a class="nav-link<?php if(isset($_GET['p']) && $_GET['p'] == 'about'): ?> active<?php endif ?>" href="/?p=about">About</a></li>
                <li class="nav-item" ><a class="nav-link<?php if(isset($_GET['p']) && $_GET['p'] == 'contact'): ?> active<?php endif ?>" href="/?p=contact">Contact</a></li>
                
                <?php // добавляем менюшку если залогирован пользователь
                    if(isAuth ()):
                      ?>  
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Your personal menu</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Add an Ad</a></li>
                                <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Personal page</a></li>
                            </ul>
                        </li>
                <?php endif ?>
            </ul>
        </div>
    </nav>
</div>
