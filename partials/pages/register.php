<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');

if (!empty($_POST)) {
  //echo $_POST['name'] . " - " . $_POST['email'] . " - " . $_POST['password'] . "<br>";
  $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['password'] . "');";
  //INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `phone`) VALUES (NULL, '', '', '', '', '');
  if (mysqli_query($conn, $sql)) {
    echo "Stored." . "<br>";
    mysqli_close($conn);
    echo "<script> document.location.href='/'; </script>";
  } else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
  }
}
mysqli_close($conn);
?>

  <form action="#" method="POST">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="_lk_de">
            <div class="form-03-main">
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
                  <!-- <a href="#">Sign up</a> -->
                  <button type="submit">Sign up</button>
                </div>
              </div>

              <!-- <div class="form-group nm_lk">
                <p>Or Login With</p>
              </div>

              <div class="form-group pt-0">
                <div class="_social_04">
                  <ol>
                    <li><i class="fa fa-facebook"></i></li>
                    <li><i class="fa fa-twitter"></i></li>
                    <li><i class="fa fa-google-plus"></i></li>
                    <li><i class="fa fa-instagram"></i></li>
                    <li><i class="fa fa-linkedin"></i></li>
                  </ol>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>


<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/footer.php');
?>