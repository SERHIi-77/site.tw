<?php
$ads = getAllAdsByUser(getUserID());
?>

<section class="section">
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Вам надійшли наступні заявки</h5>
                <div class="accordion accordion-flush" id="accordionFlush">
                    <?php 
                    while($ad = $ads->fetch_assoc()): 
                        $ords = getAllOrdersByPets($ad['id']);
                        while($ord = $ords->fetch_assoc()): 
                            $buyer = getAllbyUser ($ord['user']);
                    ?>
                        <!-- Accordion -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading<?php echo $ad['id']; ?>">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $ad['id']; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $ad['id']; ?>">
                            <p><strong>Заявка #(<?php echo $ord['id']; ?>)</strong> створена <em><small><?php echo $ord['created']; ?></small></em></p>
                            </button>
                        </h2>
                        <div id="flush-collapse<?php echo $ad['id']; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $ad['id']; ?>" data-bs-parent="#accordionFlush">
                            <div class="accordion-body">

                                <div class="card">   
                                    <div class="card-body">
                                        <div class="my-auto">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <div class="my-auto d-block ratio">
                                                        <img src="/uploads/<?php echo($ad['photo']);?>" class="img-fluid rounded" alt="..." style="height: 300px; width: auto">
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $ad['title']; ?></h5>
                                                        
                                                        <p class="card-text"><?php echo $ad['ad']; ?></p>

                                                        <p class="card-text"><small><?php echo $ad['note']; ?></small></p>

                                                        <p>Вартість : <strong><?php echo($ad['price']);?></strong> грошових одиниць</p>
                                                        <div class="container">
                                                            <hr>
                                                        </div>
                                                        <h5><strong><em>Контактні данні Замовника </em></strong></h5>
                                                        <table class="table table-borderless table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">Ім'я</th>
                                                                    <th scope="col">Електрона адреса</th>
                                                                    <th scope="col">Телефон</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><?php echo($buyer['username']);?></td>
                                                                    <td><?php echo($buyer['email']);?></td>
                                                                    <td><?php echo($buyer['phone']);?></td>
                                                                  </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endwhile; ?>                
                </div>
            </div>
        </div>
    </div>
</section>
