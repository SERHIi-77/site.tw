<div class="container">
    <h1 ><a href="index.php">Logo</a></h1>
    <nav class="nav navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse">
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item" <?php if(!isset($_GET['p']) || $_GET['p'] == 'home'): ?> class="colorlib-active" <?php endif ?>><a class="nav-link active" aria-current="page" href="/?p=home">Home</a></li>
            <li class="nav-item" <?php if(isset($_GET['p']) && $_GET['p'] == 'catalog'): ?> class="colorlib-active" <?php endif ?>><a class="nav-link" href="/?p=catalog">Catalog</a></li>
            <li class="nav-item" <?php if(isset($_GET['p']) && $_GET['p'] == 'about'): ?> class="colorlib-active" <?php endif ?>><a class="nav-link" href="/?p=about">About</a></li>
            <li class="nav-item" <?php if(isset($_GET['p']) && $_GET['p'] == 'contact'): ?> class="colorlib-active" <?php endif ?>><a class="nav-link" href="/?p=contact">Contact</a></li>
        </ul>
        </div>
    </nav>
</div>

