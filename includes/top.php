<section class="top">
    <div class="container">
        <h2 class="top__title">Top rated Experiences on Travel</h2>

        <div class="top__content">
        <?php
        foreach ($topItems as $item) { ?>
            <div class="top__content--item">
                <img src="<?=$item['link']?>" alt="">
                <p><?=$item['figure']?></p>
                <span><?=$item['title']?></span>
                <div class="item__rating">
                    <?php
                    for ($i=1; $i <=5; $i++) { ?>
                        <input type="radio" name="rating" id="star<?=$i?>"><label for="star<?=$i?>"></label>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>