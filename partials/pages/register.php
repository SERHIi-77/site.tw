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
    header("Location: /");
  } else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>

  <form method="POST">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">

              <div class="logo">
                <img src="/assets/images/user.png">
              </div>

              <div class="form-group">
                <input type="username" name="name" class="form-control _ge_de_ol" type="text" placeholder="Enter Name"
                  required="" aria-required="true">
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control _ge_de_ol" type="text" placeholder="Enter Email"
                  required="" aria-required="true">
              </div>

              <div class="form-group">
                <input type="password" name="password" class="form-control _ge_de_ol" type="text"
                  placeholder="Enter Password" required="" aria-required="true">
              </div>

              <div class="form-group">
                <div class="_btn_04">
                  <button type="submit" name="submit">Sign up</button>
                </div>
              </div>

        </div>
      </div>
    </div>
  </form>


<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
?>