<?php include 'assets/components/header.php';
$SpecCart = $mysqli->query("SELECT * FROM `spec`");
$Portfolio = $mysqli->query("SELECT * FROM `portfolio`");
$Testimonials = $mysqli->query("SELECT * FROM `testimonials`");
$Pricing = $mysqli->query("SELECT * FROM `pricing`");

// Преобразуем результат запроса в массив
$portfolioArray = [];
while ($row = $Portfolio->fetch_assoc()) {
    $portfolioArray[] = $row;
}

// Разделяем массив на две части
$leftPortfolio = array_slice($portfolioArray, 0, 2); // Первые 2 записи
$rightPortfolio = array_slice($portfolioArray, 2);   // Остальные записи (если есть)
?>
<div class="start">
    <div class="header__img1">
        <img src="assets/img/left_image.png" alt="">
    </div>
    <div class="header__img2">
        <img src="assets/img/right_image.png" alt="">
    </div>
    <div class="develop">
        <div class="develop-container">
            <div class="develop__title">
                <h2>
                    We Develop
                    <span style="color:#49AD09;">Shopify</span> sites
                </h2>
            </div>
            <div class="develop__description">
                <p>
                    Slingback fabric heels. Thin wraparound ankle strap.
                    Squared heel and toe. Pointed toes. Padded
                    insole with geometrical design.
                </p>
            </div>
            <div class="develop__btns">
                <div class="develop__btns_left">
                    <a href="#">
                        Contact Us
                    </a>
                </div>
                <div class="develop__btns_right">
                    <a href="#">
                        Watch Video
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<main class="main">
    <div class="brends">
        <div class="brends__row">
            <div class="brend"><a href="#"><img src="assets/img/brend1.png" alt="chase"></a></div>
            <div class="brend"><a href="#"><img src="assets/img/brend2.png" alt="asana"></a></div>
            <div class="brend"><a href="#"><img src="assets/img/brend3.png" alt="google"></a></div>
            <div class="brend"><a href="#"><img src="assets/img/brend4.png" alt="buzzfeed"></a></div>
            <div class="brend"><a href="#"><img src="assets/img/brend5.png" alt="walmart"></a></div>
        </div>
    </div>

    <div class="specialization" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="container-specialization">
            <div class="specialization__up-title" id="up-title">
                <p>
                    What we Do?
                </p>
            </div>
            <div class="specialization__title">
                <h2>
                    Our Specialization
                </h2>
            </div>
            <div class="specialization__cart-wrapper">
                <?php foreach ($SpecCart as $key => $value) { ?>
                <div class="cart-wrapper__cart">
                    <div class="cart__title">
                        <div class="cart__title_logo">
                            <img src="assets/img/uploads/<?= $value['logo'] ?>" alt="web">
                        </div>
                        <div class="cart__title_name">
                            <p>
                                <?= $value['title'] ?>
                            </p>
                        </div>
                    </div>
                    <div class="cart__description">
                        <p>
                            <?= $value['description'] ?>
                        </p>
                    </div>
                    <div class="cart__link">
                        <a href="#">Read more</a>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="specialization__btn-learnmore">
                <a href="#">Learn more</a>
            </div>
        </div>
    </div>

    <div class="portfolio" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="container-portfolio">
            <div class="portfolio__up-title" id="up-title">
                <p>
                    Our Work
                </p>
            </div>
            <div class="portfolio_title">
                <h2>
                    Our Portfolio
                </h2>
            </div>
            <div class="portfolio__wrapper">
                <div class="portfolio__wrapper_left">
                    <?php foreach ($leftPortfolio as $key => $value) { ?>
                    <div class="portfolio__cart">
                        <div class="portfolio__cart_img">
                            <img src="assets/img/uploads/<?= htmlspecialchars($value['image']) ?>" alt="portfolio1">
                        </div>
                        <div class="portfolio__cart_text">
                            <div class="portfolio__cart-text-left">
                                <p>
                                    <?= htmlspecialchars($value['name']) ?>
                                </p>
                            </div>
                            <div class="portfolio__cart-text-right">
                                <a href="#">
                                    <?= htmlspecialchars($value['link']) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="portfolio__wrapper_right">
                    <?php foreach ($rightPortfolio as $key => $value) { ?>
                    <div class="portfolio__cart">
                        <div class="portfolio__cart_img">
                            <img src="assets/img/uploads/<?= htmlspecialchars($value['image']) ?>" alt="portfolio1">
                        </div>
                        <div class="portfolio__cart_text">
                            <div class="portfolio__cart-text-left">
                                <p>
                                    <?= htmlspecialchars($value['name']) ?>
                                </p>
                            </div>
                            <div class="portfolio__cart-text-right">
                                <a href="#">
                                    <?= htmlspecialchars($value['link']) ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <? } ?>
                </div>
            </div>
            <div class="portfolio__btn-allprojects">
                <a href="#">All Projects</a>
            </div>
        </div>
    </div>

    <div class="testimonials" id="testimonials" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="container-1170px">
            <div class="testimonails__absolute-block_grey"></div>
            <div class="testimonials__up-title" id="up-title">
                <p>
                    Testimonials
                </p>
            </div>
            <div class="testimonials__title">
                <h2>
                    What Customers Say
                </h2>
            </div>
            <div class="testimonials__carts">
                <?php foreach ($Testimonials as $key => $value) { ?>
                <div class="testimonials__cart">
                    <div class="testimonials__cart_title">
                        <p>
                        <?= htmlspecialchars($value['title']) ?>
                        </p>
                    </div>
                    <div class="testimonials__cart_description">
                        <p>
                        <p><?= htmlspecialchars($value['description']) ?></p>
                        </p>
                    </div>
                    <div class="testimonials__cart_rating">
                        <?php
                             // Отображение звезд в зависимости от рейтинга
                             for ($i = 1; $i <= 5; $i++) {
                                 if ($i <= $value['rating']) {
                                     echo '<div class="star"><img src="assets/img/star.svg" alt="star"></div>';
                                 } else {
                                     echo '<div class="star"><img src="assets/img/star-empty.svg" alt="star"></div>'; // Путь к пустой звезде, если требуется
                                 }
                             }
                        ?>
                    </div>
                    <div class="testimonials__cart_link">
                        <a href="#"><?= htmlspecialchars($value['link']) ?></a>
                    </div>
                </div>
                <? } ?>
                </div>
            </div>
            <div class="testimonials__switch">
                <div class="switch__left">
                    <img src="assets/img/left.svg" alt="">
                </div>
                <div class="switch__right">
                    <img src="assets/img/right.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="pricing" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="container-1170px">
            <div class="pricing__up-title" id="up-title">
                <p>
                    Pricing
                </p>
            </div>
            <div class="pricing__title">
                <h2>Pricing Policy</h2>
            </div>
            <div class="pricing__cart-wrapper">
            <?php foreach ($Pricing as $key => $value) { ?>
                <div class="pricing__cart">
                    <div class="pricing__cart_title">
                        <p><?= htmlspecialchars($value['title']) ?></p>
                    </div>
                    <div class="pricing__cart_price">
                        <h2>
                        <?= htmlspecialchars($value['price']) ?>
                        </h2>
                    </div>
                    <div class="pricing__cart_check-area">
                        <div class="check-area__check-text">
                            <div class="check-area__check">
                                <img src="assets/img/check.svg" alt="checkpoint">
                            </div>
                            <div class="check-area__text">
                                <p><?= htmlspecialchars($value['one-item']) ?></p>
                            </div>
                        </div>
                        <div class="check-area__check-text">
                            <div class="check-area__check">
                                <img src="assets/img/check.svg" alt="checkpoint">
                            </div>
                            <div class="check-area__text">
                                <p><?= htmlspecialchars($value['two-item']) ?></p>
                            </div>
                        </div>
                        <div class="check-area__check-text">
                            <div class="check-area__check">
                                <img src="assets/img/check.svg" alt="checkpoint">
                            </div>
                            <div class="check-area__text">
                                <p><?= htmlspecialchars($value['three-item']) ?></p>
                            </div>
                        </div>
                        <div class="check-area__check-text">
                            <div class="check-area__check">
                                <img src="assets/img/check.svg" alt="checkpoint">
                            </div>
                            <div class="check-area__text">
                                <p><?= htmlspecialchars($value['four-item']) ?></p>
                            </div>
                        </div>
                        <div class="check-area__check-text">
                            <div class="check-area__check">
                                <img src="assets/img/check.svg" alt="checkpoint">
                            </div>
                            <div class="check-area__text">
                                <p><?= htmlspecialchars($value['five-item']) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="pricing__btn">
                        <a href="#">Request Demo</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

<div class="footer__title" data-aos="fade-up">
    <h2>
        Need a little more home to grow?
    </h2>
</div>
<div class="footer__btn_contact-us" data-aos="fade-up">
    <a href="#">
        Contact Us
    </a>
</div>
<?php include 'assets/components/footer.php' ?>