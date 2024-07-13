<!-- BreadCrumb Starts -->  
<section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
    <div class="breadcrumb-outer pt-10">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                <h2 class="mb-0">Booking</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->  

<!-- blog starts -->
<section class="blog trending destination-b pb-6">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-xs-12 mb-4">
                <div class="payment-book">
                    <div class="booking-box">
                        <div class="customer-information mb-2">
                            <h3 class="border-b pb-2 mb-2">Payment Information <small class="font-sm text-muted">/ <i class="fas fa-lock"></i> secure</small></h3>
                            <div class="alert bg-pink p-4 mb-4" role="alert">
                                <p class="lead white mb-1">Pilih Salah Satu</p>
                            </div>
                            <?php foreach ($payment_methods as $method) : ?>
                                <div class="row mb-2">
                                    <div class="col-md-12">
                                        <h5 class="mb-2"><?= $method['nama_bank'] ?></h5>
                                    </div>
                                    <div class="col-md-12">
                                        <p>a.n. <?= $method['nama_rekening'] ?></p>
                                        <p><?= $method['no_rekening'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="/booking/confirm" method="post">
                                        <input type="hidden" name="field_id" value="<?= $field['field_id'] ?>">
                                        <input type="hidden" name="tanggal" value="<?= $tanggal ?>">
                                        <input type="hidden" name="waktu_awal" value="<?= $waktu_awal ?>">
                                        <input type="hidden" name="durasi" value="<?= $durasi ?>">
                                        <input type="hidden" name="amount" value="<?= $total ?>">
                                        <input type="hidden" name="payment_date" value="<?= date("Y-m-d H:i:s") ?>">

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="payment_method">Payment Method:</label>
                                            </div>
                                            <div class="col-4">
                                                <select name="payment_method" id="payment_method">
                                                    <?php foreach ($payment_methods as $method) : ?>
                                                        <option value=<?= $method['payment_method_id']?>><?= $method['nama_bank'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="checkbox"> By continuing, you agree to the <a href="#">Terms and Conditions.</a><br>
                                        <button type="submit" class="shop-btn mt-2 nir-btn">CONFIRM BOOKING</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12 mb-4">
                <div class="sidebar-sticky sticky1">
                    <div class="trend-item mb-4">
                        <div class="trend-image">
                            <img src="<?= $field['main_photo']['link'] ?>" alt="image">
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
                                <h4><a href="#"><?= $field['nama'] ?></a></h4>
                                <p class="mb-0 pink"><i class="fa fa-map-marker mr-1 ml-3"></i><?= $field['lokasi'] ?></p>
                            </div>
                            <div class="trend-last-main">
                                <p class="mb-0 trend-para"><?= $field['deskripsi_pendek'] ?></p>
                                <div class="trend-last d-flex align-items-center justify-content-between bg-navy">
                                    <div class="trend-price">
                                        <p class="price white mb-0"><span><?= format_rupiah($field['harga']) ?></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-sidebar">
                        <div class="sidebar-item">
                            <h4>Payment</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Time Booking</td>
                                        <td class="pink"><?= $waktu_awal ?></td>
                                    </tr>
                                    <tr>
                                        <td> Price</td>
                                        <td class="pink"><?= format_rupiah($field['harga']) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Duration</td>
                                        <td class="pink"><?= $durasi ?> <?= $durasi > 1 ? 'Hours' : 'Hour' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td class="pink"><?= format_rupiah($subtotal) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tax & fee</td>
                                        <td class="pink"><?= format_rupiah($tax) ?></td>
                                    </tr>
                                </tbody>
                                <tfoot class="bg-pink">
                                    <tr>
                                        <th class="font-weight-bold white">Amount</th>
                                        <th class="font-weight-bold white"><?= format_rupiah($total) ?></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog Ends -->  