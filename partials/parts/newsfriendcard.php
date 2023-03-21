<?php
$sql = "SELECT * FROM pets WHERE id IN (26, 27, 28, 29) ORDER BY created DESC";
$result = $conn->query($sql);

if($result = $conn->query($sql)):
    foreach($result as $row):

?>
            
            <div class="product-card">
                <div class="foto-of-pet"><img src="/uploads/<?php echo($row['photo']);?>" alt=""></div>
                <span class="title-pet"><i><p> <?php echo ($row['title']);?></p></i></span>
                <p class="histopy-of-pet"><?php echo ($row['ad']);?></p>
                <div class="one-str-type-card">
                    <p class="type-pet"><?php echo ($row['type']);?></p>
                    <p class="sex-type-pet"><?php echo ($row['sex']);?></p>
                    <p class="age-of-pet"><?php echo ($row['age']);?></p>
                </div >
                <div class="price-and-buy">
                    <strong><h4 class="price-pet"><?php echo ($row['price']);?></h4></strong>
                    <button class="i-want-by-buy" id="send1" data-pet="<?php echo $row['id']; ?>" >купити</button >
                </div>
                <div class="card-product-down">

                    <span class="like-hearts favorite" data-pet="<?php echo $row['id']; ?>">" ></span>
                    

                    <i><p><?php echo ($row['created']);?></p></i>
                    
                </div>
            </div>
<?php
    endforeach;
endif;
?>