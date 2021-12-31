<section class="partners">
        <div class="container">
            <h2 class="partners__title">Our Partners</h2>

            <div class="partners__content">
                <?php
                foreach ($partnersItems as $item) { ?>
                    <div class="partners__content--item">
                        <img src="<?=$item['link']?>" alt="">
                        <p><?=$item['title']?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
</section>