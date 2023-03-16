<?php

$ads = getAllAdsByUser(getUserID());
?>

<div class="container" >
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
</div>