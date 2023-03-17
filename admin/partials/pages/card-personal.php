<div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="/uploads/avatars/<?php echo $user['avatar'] ?>" alt="Profile" class="rounded-circle">
              <h2><?php echo $user['username'] ?></h2>
              <h3><?php echo $user['role'] ?></h3>
              <div class="social-links mt-2">
                <a href="<?php echo $user['tg'] ?>" class="telegram"><i class="bi bi-telegram"></i></a>
                <a href="<?php echo $user['fb'] ?>" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="<?php echo $user['inst'] ?>" class="instagram"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div>