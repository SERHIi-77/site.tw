<div class="main-container">
    <div class="led-tronylsya">
        <div class="aside-menu-catalog">
         це меню 
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
                <img src="/uploads/<?php echo($row['photo']);?>" alt="">
                <span><?php echo ($row['title']);?></span>
                <p><?php echo ($row['ad']);?></p>
                <div>
                    <p><?php echo ($row['type']);?></p>
                    <p><?php echo ($row['sex']);?></p>
                    <p><?php echo ($row['age']);?></p>
                </div>
                <h4><?php echo ($row['price']);?></h4>
                <p><?php echo ($row['breed']);?></p><p><?php echo ($row['note']);?></p>
                <p><?php echo ($row['created']);?></p>
            </div>
<!-- <?php
    endforeach;
endif;
?>             -->
<div class="product-card"></div>
<div class="product-card"></div>
<div class="product-card"></div>
<div class="product-card"></div>
<div class="product-card"></div>
<div class="product-card"></div>
<div class="product-card"></div>
            <div class="product-card"></div>
            <div class="product-card"></div>            
            <div class="product-card"></div>
            <div class="product-card"></div>           
            <div class="product-card"></div>
            <div class="product-card"></div>
        </div>
    </div>
</div>
