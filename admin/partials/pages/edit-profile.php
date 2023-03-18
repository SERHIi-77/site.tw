<?php
$user = getCurrentUser();
$userID = getUserID();

if (isset($_POST['profile-submit'])) {
	// var_dump($_POST);
  // die();
    $uUsername = mysqli_real_escape_string($conn, $_POST["username"]);
    $uEmail = mysqli_real_escape_string($conn, $_POST["email"]);
    $uPhone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $uRegion = mysqli_real_escape_string($conn, $_POST["region"]);
    $uArea = mysqli_real_escape_string($conn, $_POST["area"]);
    $uLocality = mysqli_real_escape_string($conn, $_POST["locality"]);
    $uAbout = mysqli_real_escape_string($conn, $_POST["about"]);
	
	$sql = "UPDATE users SET username = '" . $uUsername . "', email = '" . $uEmail . "', phone = '" . $uPhone . "', region = '" . $uRegion . "', area = '" . $uArea . "', locality = '" . $uLocality . "', about = '" . $uAbout . "' WHERE id = $userID";
  //UPDATE `users` SET `phone` = '1', `region` = '1', `area` = '1', `locality` = '1', `avatar` = '2', `tg` = '1', `fb` = '1', `inst` = '1', `about` = '1' WHERE `users`.`id` = 4;

	if (mysqli_query($conn, $sql)) {
    //header("Location: " . $_SERVER['DOCUMENT_ROOT'].'/admin/index.php');
    //header('Location: ' . $_SERVER['PHP_SELF']);
	} else {
		echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	}
}

?>

<section class="section profile">
      <div class="row">
        <div class="col-xl-4">

        <?php require($_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/card-personal.php'); ?>

        </div>

        <div class="col-xl-8">

          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-edit">Редагування профілю</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Зміна паролю</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">

                  <!-- Profile Edit Form -->
                  
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/edit-profile-photo.php'); ?>
                    
                  <form action="<?php $_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/edit-profile.php' ?>" method="POST">

                    <div class="row mb-3">
                      <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Ім'я</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="username" type="text" class="form-control" id="fullName" value="<?php echo $user['username'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="about" class="col-md-4 col-lg-3 col-form-label">Про себе</label>
                      <div class="col-md-8 col-lg-9">
                        <textarea name="about" class="form-control" id="about" style="height: 100px"><?php echo $user['about'] ?></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="region" class="col-md-4 col-lg-3 col-form-label">Область</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="region" type="text" class="form-control" id="region" value="<?php echo $user['region'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="area" class="col-md-4 col-lg-3 col-form-label">Район</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="area" type="text" class="form-control" id="area" value="<?php echo $user['area'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="locality" class="col-md-4 col-lg-3 col-form-label">Населений пункт</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="locality" type="text" class="form-control" id="locality" value="<?php echo $user['locality'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="phone" class="col-md-4 col-lg-3 col-form-label">Телефон</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $user['phone'] ?>">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="email" class="col-md-4 col-lg-3 col-form-label">E-mail</label>
                      <div class="col-md-8 col-lg-9">
                        <input name="email" type="email" class="form-control" id="email" value="<?php echo $user['email'] ?>">
                      </div>
                    </div>

                    <div class="text-center">
                      <button name="profile-submit" type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                  </form><!-- End Profile Edit Form -->

                </div>

                <div class="tab-pane fade pt-3" id="profile-change-password">
                  <!-- Change Password Form -->
                  <?php include($_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/edit-profile-pass.php'); ?>
                  <!-- End Change Password Form -->

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>