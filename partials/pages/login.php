
<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');



switch(true) {
  case isset($_POST['submitLogin']):
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();
        //var_dump($user['password']);
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
            //echo ('password failed');
            echo('<script> $(#loginUserPic).css({ "animation" : "0.6s ease 0s 1 normal none running swing"}); $(#loginUserPic).removeAttr( "style" ); </script>');
            //header("Location: /");
        }
      break;
  case isset($_POST['submitRegister']):
      header("Location: /partials/pages/register.php");
      //echo('<script> window.location.href = "/admin/index.php?p=edit-profile"; </script>');
      break;
  default:
    // Код для выполнения в случае, если не был получен ни один из указанных запросов
    
    break;
}


?>



<div class="loginregistr-class" >
  <form action="<?php $_SERVER['DOCUMENT_ROOT'].'/partials/pages/login.php' ?>" method="POST">
    <div class="card">
      <div class="card-body">
        <div class="row justify-content-center">
        <div class="col-md-4">
      
          <div class="logo row justify-content-center">
            <img id="loginUserPic" src="/assets/images/user.png" style="width: 150px; height: auto;">
          </div>

          <div class="form-group">
            <div class="mb-3">
              <label for="loginEmile" class="form-label">Адреса електронної пошти</label>
              <input type="email" name="email" id="loginEmile" class="form-control" placeholder="Enter Email">
            </div>
          </div>


          <div class="form-group">
            <div class="mb-3">
                <label for="loginPassword" class="form-label">Пароль</label>
                <input type="password" name="password" id="loginPassword" class="form-control" placeholder="Enter Password">
            </div>
          </div>

          <div class="checkbox form-group">
            <div class="mb-3 form-check">
              <input class="form-check-input" id="loginCheck" type="checkbox" name="remember" value="1">
              <label class="form-check-label" for="loginCheck"> Запам'ятай мене </label>
            </div>
          </div>

          <div class="form-group">
            <div class="_btn_04">
              <div class="text-center">
                <button class="btn btn-primary" type="submit" name="submitLogin">Login</button>
                <button class="btn btn-secondary" type="submit" name="submitRegister">Registration</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </form>
</div>

<style>
    .loginregistr-class {
        width: 100vw;height: 93vh;position: relative;
        display: flex;background-size: cover;justify-content: center;align-items: center;
        background: url('../../assets/img/contact/contact1.jpg')  center center no-repeat  fixed;background-size: cover;
    }
    form{width: 360px;}.col-md-4 {width: 100%;text-align: center;}

</style>
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>