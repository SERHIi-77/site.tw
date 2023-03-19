<?php

$ads = getAllAdsByUser(getUserID());
?>

<?php while($row = $ads->fetch_assoc()): ?>
<!-- Card with an image on left -->
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <div>
            <p>Оголошення створене <em><?php echo($row['created']);?></em></p>
        </div>
        <div>
            <button class="btn btn-danger rounded-pill"><i class="bi bi-trash3"></i> Видалити  </button>
        </div>
   </div>
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/uploads/<?php echo($row['photo']);?>" class="img-fluid rounded-start" alt="..." style="height: 300px;">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>

                    <p class="card-text"><?php echo $row['ad']; ?></p>

                    <p class="card-text"><small><?php echo $row['note']; ?></small></p>

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
                            <td><?php echo($row['type']);?></td>
                            <td><?php echo($row['breed']);?></td>
                            <td><?php echo($row['sex']);?></td>
                            <td><?php echo($row['age']);?></td>
                            </tr>
                        </tbody>
                    </table>
                
                    <p>Вартість : <strong><?php echo($row['price']);?></strong> грошових одиниць</p>
                
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer d-flex justify-content-between">
        <div>
            <p>Оголошення відзначено <strong><?php echo($row['created']);?></strong> разів</p>
        </div>
        <div>
            <button class="btn btn-success rounded-pill"><i class="bi bi-pencil-square"></i> Редагування</button>
        </div> 
    </div>
</div>



<!-- End Card with an image on left -->
<?php endwhile; ?>