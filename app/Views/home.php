<!-- banner starts -->
<section class="banner overflow-hidden">
    <div class="slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image" style="background-image:url(https://drive.google.com/thumbnail?id=1l00bCgVHBKjFSpUnO34VK_1kFX7zml6w&sz=w1000)"></div>
                        <div class="swiper-content container">
                            <h4 class="blue">Amazing Fields</h4>
                            <h1 class="white mb-4">Where Every Match Begins</h1>
                            <a href="/shop" class="per-btn">
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
                            <h4 class="blue">Feel Free To Score</h4>
                            <h1 class="white mb-4">Where Passion Meets the Field.</h1>
                            <a href="/shop" class="per-btn">
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
                            <h4 class="blue">Place For Your Kids</h4>
                            <h1 class="white mb-4"><span>Step into Your Field of Dreams With Us</h1>
                            <a href="/shop" class="per-btn">
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
                            <h4 class="mb-1"><a href="#">Harga Sewa</a></h4>
                            <p class="mb-0">Harga sewa paling terjangkau di area Bandung</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                        <div class="featured-us-icon">
                            <i class="flaticon-quality pink"></i>
                        </div>
                        <div class="featured-us-content">
                            <h4 class="mb-1"><a href="#">Fasilitas</a></h4>
                            <p class="mb-0">Fasilitas unggul untuk semua jenis lapangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="featured-us-item d-sm-flex align-items-center justify-content-between">
                        <div class="featured-us-icon">
                            <i class="flaticon-global pink"></i>
                        </div>
                        <div class="featured-us-content">
                            <h4 class="mb-1"><a href="#">Area</a></h4>
                            <p class="mb-0">Kawasan olahraga yang  mudah diakses dari pusat kota Bandung</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- why us ends -->

<!-- Fav destination Starts -->
<section class="trending destination pb-6 pt-9 bg-grey">
    <div class="container">
        <div class="section-title section-title-w text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0">Choose Your <strong>Own Field</strong></h2>
            <p class="mb-0">Dapatkan fasilitas lapangan yang kumplit dengan harga menarik berdasarkan cabang olahraga pilihanmu!</p>
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
                                                <h4><a href="/shop/<?= $field['field_id'] ?>"><?= $field['nama'] ?></a></h4>
                                                <p class="mb-0"><i class="fa fa-map-marker mr-1 ml-3"></i> <?= $field['nama'] ?></p>
                                            </div>
                                            <div class="trend-last-main">
                                                <p class="mb-0 trend-para"><?= $field['deskripsi_pendek'] ?></p>
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
</section>
<!-- Fav destination Ends -->

<!-- testomonial start -->
<section class="testimonial pb-10 pt-9" style="background-image: url(https://files.oaiusercontent.com/file-b1f5Nl7zqBWVhgBTBrWKY4oS?se=2024-07-05T14%3A38%3A36Z&sp=r&sv=2023-11-03&sr=b&rscc=max-age%3D604800%2C%20immutable%2C%20private&rscd=attachment%3B%20filename%3Dec768d36-e296-4e95-a372-d4ac8863c525.webp&sig=X87TgwIZRlrW8SP8ELyJmyMc3wyMBsu%2B6hDcAuFPlu4%3D);">
    <div class="container">
        <div class="section-title text-center mb-5 pb-2 w-50 mx-auto">
            <h2 class="m-0 white">What <span>People Say About Us</span></h2>
            <p class="mb-0 white">Pengalaman pengguna yang intuitif dan pilihan lapangan yang beragam memastikan pengguna selalu dapat menemukan tempat yang tepat untuk berolahraga sesuai kebutuhan. Berikut ulasan dari para pengguna Sportify</p>
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