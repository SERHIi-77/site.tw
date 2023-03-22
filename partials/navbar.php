<?php
$user = getCurrentUser();
?>

<div class="menuBurgerUser"> 
  <img src="../assets/img/header/user.svg">
</div>

<div class="container-user-burger">
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

</div>