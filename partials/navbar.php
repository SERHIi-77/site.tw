<nav class="nav justify-content-end">
<?php
if (isAuth()){
    $user = getCurrentUser();
?>
  <span class="nav-item">
    <h4> Hello, <br> <?php echo $user['username'] ?></h4>  
  </span>
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