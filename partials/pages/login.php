
<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');

  if (!empty($_POST)) {
    //echo $_POST['name'] . " - " . $_POST['email'] . " - " . $_POST['password'] . "<br>";
    $sql = "SELECT * FROM `users` WHERE `email`='" . $_POST['email'] . "' AND `password`='" . $_POST['password'] . "'";
    //SELECT * FROM `users` WHERE `email` LIKE 'admin' AND `password` LIKE 'admin'
    $result = mysqli_query($conn, $sql);
    $user = $result->fetch_assoc();
      
    if ($user) {
      
      if(isset($_POST['remember'])) {
        setcookie('user_id', $user['id'], time()+60*60*12, '/' );
        
        echo "<h2>" . $_COOKIE["user_id"] . "</h2>";

      } else {
        $_SESSION["user_id"] = $user['id'];
      }

      header('Location: /'); // echo "<script> document.location.href='/'; </script>";
      
      } else {
        $_SESSION["user_id"] = null;
        setcookie('user_id', '', 0, '/' );
        
      }
    // echo "<h2>user" . $_COOKIE['user_id'] . "</h2>";
  } 
  // mysqli_close($conn);

?>
<form method="POST" class="forms-sample">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4">
        
        <div class="logo">
          <img src="/assets/images/user.png">
        </div>

        <div class="form-group">
          <input type="email" name="email" class="form-control" placeholder="Enter Email" required=""
            aria-required="true">
        </div>

        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter Password"
            required="" aria-required="true">
        </div>

        <div class="checkbox form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" value="1">
            <label class="form-check-label" for="">
              Remember me
            </label>
          </div>
        </div>

        <div class="form-group">
          <div class="_btn_04">
            <!-- <a href="#">Login</a> -->
            <button type="submit">Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>