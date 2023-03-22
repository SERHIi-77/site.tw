<?php
$user = getCurrentUser();
?>

<div class="menuBurgerUser"> 
  <img src="../assets/img/header/user.svg">
</div>

<div class="container-user-burger">
  <div class="conteiner-right-menu">
    <div class="user-avatar" style="background-image: url('/uploads/avatars/<?php echo $user['avatar'] ?>')"></div>
    <nav class="justify-content-end-2">
    <?php

    // проверяем сесия или куки
    if (isAuth ()){
        $user = getCurrentUser();
    ?>
      <span class="nav-item">
        <h4> Привіт, <?php echo $user['username'] ?></h4><p> <br>ти можешь подати об'яву чи залишити заявку </p> 
      </span>
      <a class="go-to-admin go-to-admin-gray" href="admin/index.php">Кабінет</a>
      <a class="go-to-admin go-to-admin-gray" href="/index.php">На головну</a>
    <?php        
    } else {
    ?>
      <span>
        <h4>Hello!</h4>
      </span>
    <?php
        }
    ?>
      
      <?php 
          // если пользователь зарегистрировался (сессия или куки)  
          if (isAuth ()) {
            // выводим ссылочку на  Logout
            echo '<a class="go-to-admin go-to-admin-gray" href="partials/pages/logout.php">Logout</a>';
            
          } else {
            // выводим ссылочки на Login & Register
            ?>
            <div class="list-group list-group-flush">
              <a class="list-group-item btn btn-info rounded-pill" href="partials/pages/login.php">Login</a>
              <a class="list-group-item btn btn-info rounded-pill" href="partials/pages/register.php">Register</a>
            </div>
        <?php
        }
      ?>
    </nav>
  </div>
</div>