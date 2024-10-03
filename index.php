<?php
include_once('includes/top.php');
?>
<!-- <section id="hero">
    <div class="container-fluid hero">
        <div class="container">
            <div class="row">
                <div class="col-9 col-md-8 col-lg-6">
                    <div class="content">
                        <h3><span>100%</span> Organic Vegetables</h3>
                        <h1>The best way to stuff your wallet.</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                            reiciendis beatae consequuntur.
                        </p>
                        <a href="#" class="btn btn-primary mt-2">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="promotions">
    <div class="container">
        <div class="row gy-3">
            <div class="col-12 col-lg-4">
                <ul class="promotion-categories">
                    <li class="promotion">
                        <a href="#" class="selected">Cake & Milk</a>
                        <span>(65 items)</span>
                    </li>
                    <li class="promotion">
                        <a href="#">Fresh Meat</a>
                        <span>(30 items)</span>
                    </li>
                    <li class="promotion">
                        <a href="#">Vegetables</a>
                        <span>(25 items)</span>
                    </li>
                    <li class="promotion">
                        <a href="#">Apple & Mango</a>
                        <span>(45 items)</span>
                    </li>
                    <li class="promotion">
                        <a href="#">Strawberry</a>
                        <span>(68 items)</span>
                    </li>
                    <li class="promotion">
                        <a href="#">View More</a>
                    </li>
                </ul>
            </div>
            <div class="promotion-banner col-6 col-lg-4">
                <div class="banner">
                    <div class="percentage">
                        <span class="number">50</span>
                        <div class="d-inline-block">
                            <span>%<br />OFF</span>
                        </div>
                    </div>
                    <div class="cta">
                        <h3>Cake</h3>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="promotion-banner col-6 col-lg-4">
                <div class="banner">
                    <div class="percentage">
                        <span class="number">40</span>
                        <div class="d-inline-block">
                            <span>%<br />OFF</span>
                        </div>
                    </div>
                    <div class="cta">
                        <h3>Milk</h3>
                        <a href="#" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="popular-products">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h2>Popular Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque quae nisi cum cupiditate, eaque aliquid similique esse? Dignissimos, ea natus.</p>
            </div>
        </div>
        <div class="row">
            <aside class="col-lg-3">
                <ul>
                    <li><a class="selected" href="#">All</a></li>
                    <li><a href="#">Snack</a></li>
                    <li><a href="#">Vegetable</a></li>
                    <li><a href="#">Fruit</a></li>
                    <li><a href="#">Bakery</a></li>
                </ul>
                <div class="banner">
                    <div class="content">
                        <span>Juicy</span>
                        <span>Fruits</span>
                        <span>100% Natural</span>
                        <div class='mt-3'>
                            <a href="#" class="btn btn-primary">Shop Now</a>
                        </div>
                    </div>
                </div>
            </aside>
            <?php $aItems = fetch_rows($connection, 'items'); ?>
            <div class="col-lg-9">
                <div class="row gy-3">
                    <?php
                    foreach ($aItems as $aItem) {
                    ?>
                        <div class="col-lg-4">
                            <a href="#">
                                <div class="item">
                                    <div class="img-wrapper">
                                        <img src="<?= $aSite['url'] . $aItem['img_path'] ?>" alt="">
                                        <a href="#" class="add-to-bag">
                                            <img src="<?= $aSite['url'] ?>upload/img/shopping-bag.svg">
                                        </a>
                                    </div>
                                    <div class="information">
                                        <span class="category"><?= $aItem['category'] ?></span>
                                        <div class="rating">
                                            <div class="stars">
                                                <img src="<?= $aSite['url'] ?>upload/img/star.svg">
                                                <img src="<?= $aSite['url'] ?>upload/img/star.svg">
                                                <img src="<?= $aSite['url'] ?>upload/img/star.svg">
                                                <img src="<?= $aSite['url'] ?>upload/img/star.svg">
                                                <img src="<?= $aSite['url'] ?>upload/img/star.svg">
                                            </div>
                                            <span>(<?= $aItem['ratings'] ?> ratings)</span>
                                        </div>
                                        <span class="name"><?= $aItem['name'] ?></span>
                                        <div class="price">
                                            <?php
                                            if ($aItem['discount']) {
                                            ?>
                                                <span class="discounted-price">$<?= formatFloat($aItem['discounted_price']) ?></span>
                                                <span class="original-price">$<?= formatFloat($aItem['price']) ?></span>
                                            <?php
                                            } else {
                                            ?>
                                                <span class="normal-price">$<?= formatFloat($aItem['price']) ?></span>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>