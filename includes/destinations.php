<div class="destinations">
    <div class="container">
        <h2 class="destinations__title">Destinations near you</h2>

        <div class="destinations__content">
        <?php
        foreach ($destinationsItems as $item) { ?>
                <div class="destinations__content--item">
                    <img src="<?=$item['link']?>" alt="">
                    <div class="item__right">
                        <span><?=$item['title']?></span>
                        <div class="item__rating">
                            <?php
                            for ($i=1; $i <=5; $i++) { ?>
                                <input type="radio" name="rating" id="star<?=$i?>"><label for="star<?=$i?>"></label>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        <?php } ?>
        </div>
    </div>
</div>