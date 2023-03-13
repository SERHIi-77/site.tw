<nav class="nav justify-content-end">
<?php
if (isAuth()){
    $user = getCurrentUser();
?>
  <span class="nav-item">
    <h4> Hello, <?php echo $user['username'] ?></h4>  
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
      // если сесия "существует" и Не равна null  
      if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != null) {
        echo '<a class="nav-link active" href="partials/pages/logout.php">Logout</a>'; // выводим ссылочку на  Logout
      } else if (isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null) {
        echo '<a class="nav-link active" href="partials/pages/logout.php">Logout</a>';
      } else {
        // выводим ссылочки на Login & Register
        echo '<a class="nav-link active" href="partials/pages/login.php">Login </a>';
        echo '<a class="nav-link"href="partials/pages/register.php"> Register</a>';
    }
  ?>
  
</nav>