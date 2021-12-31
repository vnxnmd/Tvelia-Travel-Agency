<section class="statistics">
    <div class="container">
        <div class="statistics__content">
            <?php
            foreach ($statisticsItems as $item) { ?>

                <div class="statistics__item <?=$item['item']?>">
                    <img src="<?=$item['link']?>" alt="">

                    <div class="statistics__item--figure">
                        <span><?=$item['figure']?></span>
                        <p><?=$item['title']?></p>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>