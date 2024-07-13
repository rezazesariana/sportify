<!-- BreadCrumb Starts -->  
<section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
    <div class="breadcrumb-outer pt-10">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                <h2 class="mb-2">Venue</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://localhost:8080/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Venue</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->  

<!--  Dishes starts -->
<section class="blog trending destination-b">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 mb-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="list-results d-flex align-items-center justify-content-between">
                            <div class="list-results-sort">
                                <p class="m-0">Showing <?= $startNumber ?> - <?= $endNumber ?> of <?= $total ?> results</p>
                            </div>
                            <div class="sortby d-flex align-items-center">
                                <label for="sort_by">Sort By:</label>
                                <form id="sortForm" method="get" action="" class="d-flex align-items-center justify-content-center ml-2" >
                                    <input type="hidden" name="kategori_id" value="<?= $kategori_id ?>">
                                    <select name="sort_by" id="sort_by">
                                        <option value="field_id" <?= $sortBy == 'field_id' ? 'selected' : '' ?>>Default</option>
                                        <option value="average_rating" <?= $sortBy == 'average_rating' ? 'selected' : '' ?>>Average rating</option>
                                        <option value="price_low" <?= $sortBy == 'price_low' ? 'selected' : '' ?>>Price: low to high</option>
                                        <option value="price_high" <?= $sortBy == 'price_high' ? 'selected' : '' ?>>Price: high to low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($fields as $item): ?>
                        <div class="col-md-6 col-sm-6 col-xs-12 mb-4">
                            <div class="trend-item">
                                <div class="trend-image">
                                    <img src="<?= $item['main_photo']['link'] ?>" alt="image" height="300px">
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content text-center">
                                        <div class="rating-main d-flex align-items-center justify-content-center spb-1 mb-1">
                                            <div class="rating">
                                                <?php
                                                    $fullStars = floor($item['average_rating']);
                                                    $halfStar = ($item['average_rating'] - $fullStars) >= 0.5 ? 1 : 0;
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
                                            <span class="ml-2"><?= $item['total_reviews'] ?> <?= $item['total_reviews'] > 1 ? 'Reviews' : 'Review' ?></span>
                                        </div>
                                        <h4 class="bordernone p-0 mb-1"><a href="/shop/<?= $item['field_id'] ?>"><?= $item['nama'] ?></a></h4>
                                        <p class="price pink mb-1 font-weight-bold"><?= format_rupiah($item['harga']) ?></p>
                                        <div class="cart-btn">
                                            <a href="/shop/<?= $item['field_id'] ?>" class="nir-btn-black">View Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <!-- Pagination Links -->
                    <?= $pager->makeLinks($currentPage, $perPage, $total, 'custom_pagination'); ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-4">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item mb-4">
                            <div class="sidebar-title">
                                <h4 class="mb-2">Categories</h4>
                            </div>
                            <ul class="sidebar-category">
                                <li class="<?= $kategori_id == null ? 'active' : '' ?>"><a href="">Semua</a></li>
                                <?php foreach($categories as $kat): ?>
                                    <li class="<?= $kategori_id == $kat['kategori_id'] ? 'active' : '' ?>"><a href="/shop?kategori_id=<?= $kat['kategori_id'] ?>"><?= $kat['nama'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dishes ends -->

<script>
    // JavaScript untuk mengirim permintaan sort saat select option berubah
    document.getElementById('sort_by').addEventListener('change', function() {
        document.getElementById('sortForm').submit();
    });
</script>