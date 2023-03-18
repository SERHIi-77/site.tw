<?php

$ads = getAllAdsByUser(getUserID());
?>

<?php while($row = $ads->fetch_assoc()): ?>
<!-- Card with an image on left -->
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="/uploads/<?php echo($row['photo']);?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                <p class="card-text"><?php echo $row['ad']; ?></p>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>
<!-- End Card with an image on left -->





<!-- <div class="container" >
    <ul id="listTwits" class="list-group">
        <?php while($row = $twits->fetch_assoc()): ?>
            <li class="list-group-item">
                <?php echo $row['twit']; 
                if ($row['image'] != ""): ?>
                    <div class="d-flex justify-content-end">
                        <img class="img-fluid img-rounded float-right" width="100" src="/uploads/<?php echo $row['image']; ?>">
                    </div>
                <?php endif; ?>
        
            </li>
        <?php endwhile; ?>
    </ul>
</div> -->