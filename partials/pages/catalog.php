<?php
$userID = getUserID();
?>

            <div id="modal"> 
                <div id="ModalContent">
                    <h3>дякую, чекайте на дзвінок продавця</h3>
                    <button>OK</button>
                </div>
            </div>

<div class="main-container">
    <div class="led-tronylsya-catalog">
        <div class="aside-menu-catalog">

            <div class="filters">
                
                <form>
                    <div class="filter-catalog-stat-vik">
                            <fieldset>
                            <legend>КОГО ШУКАЄШ?</legend>
                            <div class="filter-type-pet">
                                <label class="input-checkbox-cat"><input type="checkbox" name="type-pet" value="cat"><div class="input-custom"></div>Муркотики</label>
                                <label class="input-checkbox"><input type="checkbox" name="type-pet" value="dog"><div class="input-custom"></div> Песики</label>
                                <!-- <label ><input type="checkbox"  name="Terms" checked> -->
                        
                            </div>
                            </fieldset>
                            <fieldset>
                            <legend>СТАТЬ:</legend>
                            <div class="filter-sex-type-pet">
                                <label class="input-checkbox"><input type="checkbox" name="sex-type-pet" value="male"><div class="input-custom"></div> Хлопчики</label>
                                <label class="input-checkbox-cat"><input type="checkbox" name="sex-type-pet" value="female"><div class="input-custom"></div> дівчатка</label>
                            </div>
                            </fieldset>
                    </div>
                    <fieldset class="filter-catalog-vik">
                    <legend>ВІК:</legend>
                    <div class="filter-age-of-pet">
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="less than 3 months"><div class="input-custom"></div>до 3 місяців</label>
                   
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="3-6 months"><div class="input-custom"></div>3-6 місяців</label>
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="6-9 months"><div class="input-custom"></div>6-9 місяців</label>
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="9-12 month"><div class="input-custom"></div>9-12 місяців</label>
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="1-2 years"><div class="input-custom"></div>1-2 рочки</label>
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="3"><div class="input-custom"></div>3 роки</label>
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="4"><div class="input-custom"></div>4 роки</label>
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="5"><div class="input-custom"></div>5 років</label>
                        <label class="input-checkbox-second"><input type="checkbox" name="age-of-pet" value="over 5 yea"><div class="input-custom"></div>старше 5 років</label>
                    </div>
                    </fieldset>
                    <div class="filter-catalog-vartist">
                        <fieldset>
                        <legend>ВАРТІСТЬ:</legend>
                        <div class="filter-price-pet-parents">
                            <span>0</span>
                            <div class="filter-price-pet">
                                
                                <input type="range" name="price-min" value="0" min="0" max="7000">
                                <input type="range" name="price-max" value="7000" min="0" max="7000">
                                
                            </div>
                            <span class="filter-price-pet-7000" >7000</span>
                        </div>
                        </fieldset>
                    
                        <button id="reset-btn">очистити</button>
                    </div>
                </form>
                </div>
            </div>

        <div class="catalog-post-general">
<?php
$sql = "SELECT * FROM pets ORDER BY created DESC";
$result = $conn->query($sql);

if($result = $conn->query($sql)):
    foreach($result as $pet):


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

        require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/pet-card.php');

    endforeach;
endif;
?>            

        </div>
    </div>
</div>

