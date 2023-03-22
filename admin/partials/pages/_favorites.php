<?php
$ads = getAllAdsByUser(getUserID());
?>              
              
              
<section class="section">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">With captions</h5>        
          <!-- Slides with captions -->
          <div id="carouselCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

              <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              
              
              
              <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <?php
              $images = getAllFavByUser(getUserID());
              $favImages = $images->fetch_assoc();
              var_dump ($images);
              foreach($favImages as $index => $image) {
                $class = ($index == 0) ? "active" : "";
                echo $index . " " . $class . " " . $image;
            }
              
              
              die();
              //$images = array("image1.jpg", "image2.jpg", "image3.jpg", "image4.jpg");
              foreach($images as $index => $image) {
                  $class = ($index == 0) ? "active" : "";
                  echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $index . '" class="' . $class . '"></li>';
              }
            ?> 
            
            
            <div class="carousel-item active">
                <img src="assets/img/slides-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              
              
              
              
              <div class="carousel-item ">
                <img src="assets/img/slides-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/img/slides-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>

          </div><!-- End Slides with captions -->
        </div>
      </div>
    </div>
  </div>
</section>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        $images = array("image1.jpg", "image2.jpg", "image3.jpg", "image4.jpg");
        foreach($images as $index => $image) {
            $class = ($index == 0) ? "active" : "";
            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $index . '" class="' . $class . '"></li>';
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        foreach($images as $index => $image) {
            $class = ($index == 0) ? "carousel-item active" : "carousel-item";
            echo '<div class="' . $class . '">';
            echo '<img class="d-block w-100" src="' . $image . '" alt="Slide ' . ($index+1) . '">';
            echo '</div>';
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
