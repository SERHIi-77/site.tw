<?php
$ads = getAllAdsByUser(getUserID());







?>

<?php while($ad = $ads->fetch_assoc()): 
        $fav_query = 'SELECT COUNT(*) as count FROM fav WHERE pet = '.$ad['id'];
        $favcount = mysqli_fetch_assoc(mysqli_query($conn, $fav_query))['count'];
    
?>
<!-- Card with an image on left -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>
            <p>Оголошення створене <em><?php echo($ad['created']);?>
                </em></p>
        </div>
        <div>
            <button class="btn btn-danger rounded-pill"><i class="bi bi-trash3"></i> Видалити </button>
        </div>
    </div>
    <div class="card-body">
        <div class="my-auto">
            <div class="row g-0">
                <div class="col-md-4">
                    <div class="my-auto d-block ratio">
                        <img src="/uploads/<?php echo($ad['photo']);?>" class="img-fluid rounded" alt="..."
                            style="height: 300px; width: auto">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $ad['title']; ?>
                        </h5>

                        <p class="card-text">
                            <?php echo $ad['ad']; ?>
                        </p>

                        <p class="card-text"><small>
                                <?php echo $ad['note']; ?>
                            </small></p>

                        <table class="table table-borderless table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Вид</th>
                                    <th scope="col">Порода</th>
                                    <th scope="col">Стать</th>
                                    <th scope="col">Вік</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo($ad['type']);?>
                                    </td>
                                    <td>
                                        <?php echo($ad['breed']);?>
                                    </td>
                                    <td>
                                        <?php echo($ad['sex']);?>
                                    </td>
                                    <td>
                                        <?php echo($ad['age']);?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <p>Вартість : <strong>
                                <?php echo($ad['price']);?>
                            </strong> грошових одиниць</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <div>
            <p>Оголошення відзначено <strong>
                    <?php echo($favcount);?>
                </strong> разів</p>
        </div>
        <div>
            <button class="btn btn-success rounded-pill"><i class="bi bi-pencil-square"></i> Редагування</button>
        </div>
    </div>
</div>
</div>



<!-- End Card with an image on left -->
<?php endwhile; ?>