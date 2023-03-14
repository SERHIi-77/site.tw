<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');

if(isset($_POST['submit'])):
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = $conn->query($sql);
  $user = $result->fetch_assoc();
  var_dump($user['password']);
  if (password_verify($password, $user['password'])) {
      //succes password_verify($password, $user['password'])
      echo('You autorisation');
      // initialize cookies for the logged in user
      if(isset($_POST['remember'])) {
        setcookie("user_id", $user['id'], time()+3600*12, "/");
      } else {
        $_SESSION["user_id"] = $user['id'];
      }
      header("Location: /");

  }else{
      //failed
      $_SESSION["user_id"] = null;
      setcookie('user_id', '', 0, '/' );
      echo ('password failed');
      // header("Location: #");
  }

endif;
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
            <button type="submit" name="submit">Login</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>