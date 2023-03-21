            <div id="modal"> 
                <div id="ModalContent">
                    <h3>дякую, чекайте на дзвінок продавця</h3>
                    <button>OK</button>
                </div>
            </div>


<div class="main-container">
    <div class="led-tronylsya">
        <div class="aside-menu"> 
          <div class="reviews-client">
            <img src="../assets/img/home/3.jpg" alt="">
            <span class="name-review">Nastasya F.</span>
            <p class="text-review">Моя шана, ви робите велику справу для усіх нас. Велике дякую вам від маленької Сонечки</p>
          </div>
          <div class="reviews-client">
            <img src="../assets/img/home/2.jpg" alt="">
            <span class="name-review">Bogdan R.</span>
            <p class="text-review">Моя шана, ви робите велику справу для усіх нас. Велике дякую вам від маленької Сонечки</p>
          </div>
          <div class="reviews-client">
            <img src="../assets/img/home/1.jpg" alt="">
            <span class="name-review">Robert M.</span>
            <p class="text-review">Моя шана, ви робите велику справу для усіх нас. Велике дякую вам від маленької Сонечки</p>
          </div>  
        </div>
        <div class="top-menu-slide-and">
            <div class="slider-general">

                <?php
                    require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/slider.php');
                ?>
            </div>
            <div class="procent-happy">
                <span><p>95% <br> happy dog</p></span>
                <span><p>80% <br> happy rad</p></span>
                <span><p>90% <br> happy cat</p></span>
            </div>
        </div>
    </div>
</div>


<div class="main-home">
    <section class="free-friend">
        <div class="content-free-friend">

            <h3>Друзі не продаються</h3>
            <div class="for-ff-card">
                
            <?php
                require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/freefrendcards.php');
            ?>

            </div>
        </div>
    
    </section>
    <section class="dog-friend">
        <div class="content-dog-friend">
            <h3>Друзі песики</h3>
            <div class="for-dog-card">
                    <?php
                        require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/dogfriendcards.php');
                    ?>
            </div>
        </div>
    </section>
    <section class="cat-friend">
        <div class="content-cat-friend">
            <h3>Друзі котейкі</h3>
            <div class="for-cat-card">
                <?php
                            require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/catfriendcard.php');
                        ?>
                </div>
        </div>
    </section>

    <section class="news-friend">
        <div class="content-news-friend">
            <h3>Щукаємо друзів</h3>
            <div class="for-news-card">
                    <?php
                        require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/newsfriendcard.php');
                    ?>
            </div>   
        </div>
    </section>
    <section class="news-blog-content">
        <div class="content-news-blog-content">
            <h3>Новини пушистого світу</h3>
            <div class="for-news-blog-card">
                    <?php
                        require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/newsstory.php');
                    ?>
            </div>
        </div>
    </section>
</div>
