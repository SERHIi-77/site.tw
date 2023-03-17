    <!-- <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      </nav>
    </div>-->
    <!-- End Page Title  -->

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
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Загальна інформація</button>
                </li>

              </ul>
              <div class="tab-content pt-2">

                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                  <h5 class="card-title">Про себе</h5>
                  <p class="small fst-italic"><?php echo $user['about'] ?></p>

                  <h5 class="card-title">Деталі профілю</h5>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Ім'я</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['username'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Область</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['region'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Район</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['area'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Населений пункт</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['locality'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Телефон</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['phone'] ?></div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">E-mail</div>
                    <div class="col-lg-9 col-md-8"><?php echo $user['email'] ?></div>
                  </div>

                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>
