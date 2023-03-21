<?php
$ads = getAllAdsByUser(getUserID());

echo $ads;

?>


<section class="section">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Вам надійшли наступні заявки</h5>

                <?php 
                    while($ad = $ads->fetch_assoc()): 
                    $order_query = 'SELECT COUNT(*) as count FROM fav WHERE pet = '.$ad['id'];
                    $favcount = mysqli_fetch_assoc(mysqli_query($conn, $fav_query))['count'];
                    $orders = getAllOrdersByPets($ad['id']);
                ?>



                <!-- Default Accordion -->
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                
                            Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.
                            
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>

    </div>
</section>
