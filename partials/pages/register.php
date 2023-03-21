<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');

if (!empty($_POST)) {
  //echo $_POST['name'] . " - " . $_POST['email'] . " - " . $_POST['password'] . "<br>";
  $hasPas = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $hasPas . "');";
  //INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `phone`) VALUES (NULL, '', '', '', '', '');
  if (mysqli_query($conn, $sql)) {
    //echo "Stored." . "<br>";
    mysqli_close($conn);
    header("Location: /partials/pages/login.php");
  } else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>

<div class="loginregistr-class-reg">
<form action="<?php $_SERVER['DOCUMENT_ROOT'].'/partials/pages/register.php' ?>" method="POST">
  <div class="card">
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-md-4">

          <div class="logo row justify-content-center">
            <img id="loginUserPic" src="/assets/images/user.png" style="width: 150px; height: auto;">
          </div>

          <div class="form-group">
            <div class="mb-3">
              <label for="regName" class="form-label">Введіть ім'я</label>
              <input type="username" name="name" id="regName" class="form-control _ge_de_ol" type="text" placeholder="Enter Name" required="true">
            </div>
          </div>
         
          <div class="form-group">
            <div class="mb-3">
              <label for="regName" class="form-label">Введіть телефон</label>
              <input type="tel" name="Telephone" placeholder="Telephone" class="form-control _ge_de_ol">
            </div>
          </div>


          <div class="form-group">
            <div class="mb-3">
              <label for="regEmile" class="form-label">Адреса електронної пошти</label>
              <input type="email" name="email" id="regEmile" class="form-control _ge_de_ol" type="text" placeholder="Enter Email" required="true">
            </div>
          </div>

          <div class="form-group">
            <div class="mb-3">
              <label for="regPassword" class="form-label">Пароль</label>
              <input type="password" name="password" id="regPassword" class="form-control _ge_de_ol" type="text" placeholder="Enter Password" required="true">
            </div>
          </div>

          <div class="form-group">
            <div class="_btn_04">
              <div class="text-center">
                <button type="submit" name="submit" class="btn btn-primary">Sign up</button>
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
.loginregistr-class-reg {
        width: 100vw;height: 93vh;position: relative;
        display: flex;background-size: cover;justify-content: center;align-items: center;
        background: url('../../assets/img/contact/contact1.jpg')  center center no-repeat  fixed;background-size: cover;
    }
    form{width: 360px;}.col-md-4 {width: 100%;text-align: center;}
</style>
<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
?>