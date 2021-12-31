<section class="best">
    <div class="container">
        <h2 class="best__title">Best Places on Earth</h2>

        <div class="best__content">
            <div class="frame1">
                <div class="best__content--item item1">
                    <img class="item1__img1" src="assets/images/best1.png" alt="">
                    <div class="item1__content">
                        <span>Oceania / Africa / US</span>
                        <p>The collection of the Department of Africa.</p>
                        <div class="item__rating">
                            <?php
                            for ($i=1; $i<=5; $i++) { ?>
                                <input type="radio" name="rating" id="star<?=$i?>"><label for="star<?=$i?>"></label>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="frame2">
                <div class="best__content--item item2">
                    <img class="item2__img2" src="assets/images/best2.png" alt="">
                </div>
                <div class="best__content--item item3">
                    <img class="item3__img3" src="assets/images/best3.png" alt="">
                </div>
            </div>

            <div class="frame3">
                <div class="best__content--item item4">
                    <img class="item4__img4" src="assets/images/best4.png" alt="">
                </div>
                <div class="best__content--item item5">
                    <img class="item5__img5" src="assets/images/best5.png" alt="">
                </div>
            </div>
            
            <div class="frame4">
                <div class="best__content--item item6">
                    <img class="item6__img6" src="assets/images/best6.png" alt="">
                </div>
                <div class="best__content--item item7">
                    <img class="item7__img7" src="assets/images/best7.png" alt="">
                    <button class="btn btn--secondary">View More</button>
                </div>
            </div>
        </div>
    </div>
</section>