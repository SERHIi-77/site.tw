<div class="main-container">
    <div class="led-tronylsya">
        <div class="aside-menu-catalog">



        <div class="filters">
  <h3>Фильтры:</h3>
  <form>
    <fieldset>
      <legend>Вид животного:</legend>
      <div class="filter-type-pet">
        <label><input type="checkbox" name="type-pet" value="cat"> Кошки</label>
        <label><input type="checkbox" name="type-pet" value="dog"> Собаки</label>
      </div>
    </fieldset>
    <fieldset>
      <legend>Пол:</legend>
      <div class="filter-sex-type-pet">
        <label><input type="checkbox" name="sex-type-pet" value="male"> Мужские</label>
        <label><input type="checkbox" name="sex-type-pet" value="female"> Женские</label>
      </div>
    </fieldset>
    <fieldset>
      <legend>Возраст:</legend>
      <div class="filter-age-of-pet">
        <label><input type="checkbox" name="age-of-pet" value="3-6 months"> 3-6 месяцев</label>
        <label><input type="checkbox" name="age-of-pet" value="2"> 2 года</label>
        <label><input type="checkbox" name="age-of-pet" value="3"> 3 года</label>
        <label><input type="checkbox" name="age-of-pet" value="4"> 4 года</label>
        <label><input type="checkbox" name="age-of-pet" value="over 5"> старше 5 лет</label>
      </div>
    </fieldset>
    <fieldset>
      <legend>Цена:</legend>
      <div class="filter-price-pet">
        <input type="range" name="price-min" value="0" min="0" max="1000">
        <input type="range" name="price-max" value="1000" min="0" max="1000">
      </div>
    </fieldset>
    <button type="submit">Применить</button>
    
  </form>
</div>








        </div>
        <div class="catalog-post-general">

<?php
$sql = "SELECT * FROM pets ORDER BY created DESC";
$result = $conn->query($sql);

if($result = $conn->query($sql)):
    foreach($result as $row):

?>
            <!-- стандартная карточка товара/ аналог карточки статьи в блоге в 13 уроке- подтянет данные из бд -->
            <div class="product-card">
                <div class="foto-of-pet"><img src="/uploads/<?php echo($row['photo']);?>" alt=""></div>
                <span class="title-pet"><p> <?php echo ($row['title']);?></p></span>
                <p class="histopy-of-pet"><?php echo ($row['ad']);?></p>
                <div class="one-str-type-card">
                    <p class="type-pet"><?php echo ($row['type']);?></p>
                    <p class="sex-type-pet"><?php echo ($row['sex']);?></p>
                    <p class="age-of-pet"><?php echo ($row['age']);?></p>
                </div>
                <h4 class="price-pet"><?php echo ($row['price']);?></h4>
                <div class="breed-note"><p><?php echo ($row['breed']);?></p><p><?php echo ($row['note']);?></p></div>
                <p><?php echo ($row['created']);?></p>
            </div>
<!-- <?php
    endforeach;
endif;
?>             -->

        </div>
    </div>
</div>
