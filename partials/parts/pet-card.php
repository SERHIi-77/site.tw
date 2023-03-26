 
 <?php
        $favSQL = 'SELECT COUNT(*) as count FROM fav WHERE pet =' . $pet['id'];
        // получаем общее количество лайков для текущего зверя
        $countFav = mysqli_fetch_assoc(mysqli_query($conn, $favSQL))['count'];
        
        if(isAuth ()) {
            //$heartUserSQL = 'SELECT pet FROM fav WHERE user =' . $userID;
            $heartUserSQL = 'SELECT * FROM fav WHERE pet =' . $pet['id'] . ' AND ' . 'user =' . $userID;
            // $heartUserSQL = "SELECT * FROM fav WHERE pet = '{$pet['id']}' AND user = '{$userID}'";
            // получаем информацию есть ли лайк пользователя у текущего зверя
            $heartUser = $conn->query($heartUserSQL);
            
        }
?>
            <!-- стандартная карточка товара/ аналог карточки статьи в блоге в 13 уроке- подтянет данные из бд -->
            <div class="product-card">
                <div class="foto-of-pet"><img src="/uploads/<?php echo($pet['photo']);?>" alt=""></div>
                <span class="title-pet"><i><p> <?php echo ($pet['title']);?></p></i></span>
                <p class="histopy-of-pet"><?php echo ($pet['ad']);?></p>
                <div class="one-str-type-card">
                    <p class="type-pet"><?php echo ($pet['type']);?></p>
                    <p class="sex-type-pet"><?php echo ($pet['sex']);?></p>
                    <p class="age-of-pet"><?php echo ($pet['age']);?></p>
                </div >
                <div class="price-and-buy">
                    <strong><h4 class="price-pet"><?php echo ($pet['price']);?></h4></strong>
                    <button class="i-want-by-buy" id="send1" data-pet="<?php echo $pet['id']; ?>" >купити</button >
                </div>
                <div class="card-product-down">

                    
                    <span class="like-hearts<?php if(isset($heartUser) && mysqli_num_rows($heartUser) > 0) {
                            echo '-liked';
                        }
                    ?>" data-pet-id="<?php echo $pet['id']; ?>"><span class = "btnHeart" ><i class="bi bi-suit-heart-fill"></i></span></span>
                    
                    <span><?php echo $countFav ?></span>

                    <i><p><?php echo ($pet['created']);?></p></i>
                    
                </div>
            </div>
            



