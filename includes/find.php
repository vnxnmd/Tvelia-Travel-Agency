
<section class="find">
    <div class="container">
        <div class="find__left">
            <h2 class="find__left--title">Find The Perfect Place</h2>
            <p>A list of the top 75 Best Tourist Places to See in world for a perfect holiday or a trip.</p>
            <button class="btn btn--secondary">View More</button>
        </div>

        <div class="find__slider">
            <?php
            foreach ($sliderItems as $item) { ?>

                <div class="find__slider--item">
                    <img src="<?=$item['link']?>" alt="">
                    <span><?=$item['title']?></span>
                    <div class="item__rating">

                        <?php
                        for($i=1; $i<=5; $i++) { ?>
                            <input type="radio" name="rating" id="star<?=$i?>"><label for="star<?=$i?>"></label>
                        <?php } ?>

                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="assets/js/slider.js"></script>