<?php
$user = getCurrentUser();
?>

<div class="menuBurgerUser"> 
  <img src="../assets/img/header/user.svg">
</div>

<div class="container-user-burger">
<<<<<<< HEAD
  <div class="conteiner-right-menu">
    <div class="user-avatar" style="background-image: url('/uploads/avatars/avatarK.svg')"></div>
    <nav class="justify-content-end-2">
    <?php
=======
<div class="user-avatar" style="background-image: url('/uploads/avatars/<?php echo $user['avatar'] ?>')"></div>
<nav class="nav justify-content-end">

<?php
// проверяем сесия или куки
if (isAuth ()){
?>
  <span class="nav-item">
    <h4> Привіт, <br> <?php echo $user['username'] ?></h4><p> <br>ти можешь подати об'яву чи залишити заявку </p> 
  </span>
  <a class="go-to-admin" href="admin/index.php">Кабінет</a>
 
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
        echo '<a class="nav-link active" href="partials/pages/logout.php">Logout</a>';
        
      } else {
        // выводим ссылочки на Login & Register
        echo '<a class="nav-link active" href="partials/pages/login.php">Login </a>';
        echo '<a class="nav-link" href="partials/pages/register.php"> Register</a>';
    }
  ?>
  
</nav>
>>>>>>> 9ee0d0d560c799c601f9396ed21e927d67d8a2ed

    // проверяем сесия или куки
    if (isAuth ()){
        $user = getCurrentUser();
    ?>
      <span class="nav-item">
        <h4> Привіт, <?php echo $user['username'] ?></h4><p> <br>ти можешь подати об'яву чи залишити заявку </p> 
      </span>
      <a class="go-to-admin" href="admin/index.php">Кабінет</a>
      <a class="go-to-admin go-to-admin-gray" href="admin/index.php">На головну</a>
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
            echo '<a class="nav-link active" href="partials/pages/logout.php">Logout</a>';
            
          } else {
            // выводим ссылочки на Login & Register
            echo '<a class="nav-link active" href="partials/pages/login.php">Login </a>';
            echo '<a class="nav-link" href="partials/pages/register.php"> Register</a>';
        }
      ?>
      
    </nav>
  </div>
</div>