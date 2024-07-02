<!-- banner starts -->
<section class="banner overflow-hidden">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url(https://drive.google.com/thumbnail?id=1l00bCgVHBKjFSpUnO34VK_1kFX7zml6w&sz=w1000)"></div>
                        <div class="swiper-content container">
                            <h4 class="blue">Amazing Places</h4>
                            <h1 class="white mb-4">Explore Your Life Travel Where You Want</h1>
                            <a href="#" class="per-btn">
                                <span class="white">Discover</span>
                            <i class="fa fa-arrow-right white"></i>
                            </a>
                        </div>
                        <div class="overlay"></div>
                    </div> 
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url(https://drive.google.com/thumbnail?id=1gJqL2cAJpmE3jeXSYztmNBt6HIaHh56q&sz=w1000)"></div>
                        <div class="swiper-content container">
                            <h4 class="blue">Feel Free To Travel</h4>
                            <h1 class="white mb-4">Make you Free to <span>travel</span> with us</h1>
                            <a href="#" class="per-btn">
                                <span class="white">Discover</span>
                                <i class="fa fa-arrow-right white"></i>
                            </a>
                        </div>
                        <div class="overlay"></div>
                    </div> 
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url(https://drive.google.com/thumbnail?id=1wzKmcqg7eVvN6nov-GQHct0RHOfZtdcw)"></div>
                        <div class="swiper-content container">
                            <h4 class="blue">Trip For Your Kids</h4>
                            <h1 class="white mb-4"><span>Sensation Ice Trip</span> Is Coming For Kids</h1>
                            <a href="#" class="per-btn">
                                <span class="white">Discover</span>
                                <i class="fa fa-arrow-right white"></i>
                            </a>
                        </div>
                        <div class="overlay"></div>
                    </div> 
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
<!-- banner ends -->

<!-- why us starts -->
<section class="featured-us pb-0">
    <div class="container">
        <div class="featured-us-box pt-9">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                        <div class="featured-us-icon">
                            <i class="flaticon-price pink"></i>
                        </div>
                        <div class="featured-us-content">
                            <h4 class="mb-1"><a href="#">Competetive Pricing</a></h4>
                            <p class="mb-0">With 500+ suppliers and the purchasing power of 300 million members</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                        <div class="featured-us-icon">
                            <i class="flaticon-quality pink"></i>
                        </div>
                        <div class="featured-us-content">
                            <h4 class="mb-1"><a href="#">Award Winning Service</a></h4>
                            <p class="mb-0">Fabulous Travel worry free knowing that we're here if you need us, 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                        <div class="featured-us-icon">
                            <i class="flaticon-global pink"></i>
                        </div>
                        <div class="featured-us-content">
                            <h4 class="mb-1"><a href="#">Worldwide Coverage</a></h4>
                            <p class="mb-0">1,200,000 hotels in more than 200 countries and regions & flights to over 5,000 citites.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why us ends -->

<!-- Fav destination Starts -->
<section class="trending destination pb-6 pt-9"  style="background-image: url(images/bg/bg4.jpg);">
    <div class="container">
        <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0 white">Find Your <strong>Favourite Destination</strong></h2>
            <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div>  
        <div class="trend-box">
            <div class="price-navtab text-center mb-4">
                <ul class="nav nav-tabs">
                    <?php foreach ($categories as $index => $tab) : ?>
                        <li class="<?= $index === 0 ? 'active' : '' ?>">
                            <a data-toggle="tab" id="tab-<?= $tab['kategori_id'] ?>-tab" href="#tab-<?= $tab['kategori_id'] ?>" role="tab" aria-controls="tab-<?= $tab['kategori_id'] ?>" aria-selected="<?= $index === 0 ? 'true' : 'false' ?>">
                                <?= $tab['nama'] ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="tab-content">
                <?php foreach ($categories as $index => $tab) : ?>
                    <div class="tab-pane fade <?= $index === 0 ? 'show active' : '' ?>" id="tab-<?= $tab['kategori_id'] ?>" role="tabpanel" aria-labelledby="tab-<?= $tab['kategori_id'] ?>-tab">
                        <div class="row">
                            <?php foreach ($tab['fields'] as $field) : ?>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="trend-item">
                                        <div class="trend-image">
                                            <img src="<?= $field['main_photo']['link'] ?>" alt="image" height="300px">
                                        </div>
                                        <div class="trend-content-main">
                                            <div class="trend-content">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <div class="rating">
                                                        <?php
                                                            $fullStars = floor($field['average_rating']);
                                                            $halfStar = ($field['average_rating'] - $fullStars) >= 0.5 ? 1 : 0;
                                                            $emptyStars = 5 - $fullStars - $halfStar;
                                                            for ($i = 0; $i < $fullStars; $i++) {
                                                                echo '<span class="fa fa-star"></span>';
                                                            }
                                                            if ($halfStar) {
                                                                echo '<span class="fa fa-star-half-alt"></span>';
                                                            }
                                                            for ($i = 0; $i < $emptyStars; $i++) {
                                                                echo '<span class="fa star-empty"></span>';
                                                            }
                                                        ?>
                                                    </div>
                                                    <span class="ml-2"><?= $field['total_reviews'] ?> <?= $field['total_reviews'] > 1 ? 'Reviews' : 'Review' ?></span>
                                                </div>
                                                <h4><a href="/item-detail"><?= $field['nama'] ?></a></h4>
                                                <p class="mb-0"><i class="fa fa-map-marker mr-1 ml-3"></i> <?= $field['nama'] ?></p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>    
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- Fav destination Ends -->

<!-- testomonial start -->
<section class="testimonial pb-10 pt-9" style="background-image: url(images/bg/bg2.jpg);">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0 white">What <span>People Say About Us</span></h2>
            <p class="mb-0 white">Travel has helped us to understand the meaning of life and it has helped us become better people. Each time we travel, we see the world with new eyes.</p>
        </div> 
        <div class="row review-slider1">
            <?php foreach ($all_reviews as $review) : ?>
                <div class="col-sm-4">
                    <div class="testimonial-item">
                        <div class="testimonial-content mb-5">
                            <div class="testimonial-icon">
                                <i class="fa fa-quote-left"></i>
                            </div>
                            <p class="description mb-0"><?= $review['komentar'] ?></p>
                        </div>
                        <div class="author-title d-flex align-items-center">
                            <div class="author-in ml-3">
                                <h5 class="m-0 white"><?= $review['user']['nama'] ?></h5>
                                <div class="rating">
                                    <?php
                                        $fullStars = floor($review['rating']);
                                        $halfStar = ($review['rating'] - $fullStars) >= 0.5 ? 1 : 0;
                                        $emptyStars = 5 - $fullStars - $halfStar;
                                        for ($i = 0; $i < $fullStars; $i++) {
                                            echo '<span class="fa fa-star"></span>';
                                        }
                                        if ($halfStar) {
                                            echo '<span class="fa fa-star-half-alt"></span>';
                                        }
                                        for ($i = 0; $i < $emptyStars; $i++) {
                                            echo '<span class="fa star-empty"></span>';
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- testimonial ends --> 