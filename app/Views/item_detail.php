<style>
        .rating {
            direction: rtl;
            unicode-bidi: bidi-override;
        }
        .rating input {
            display: none;
        }
        .rating label {
            color: #ddd;
            font-size: 30px;
            padding: 0;
            cursor: pointer;
        }
        .rating input:checked ~ label,
        .rating label:hover,
        .rating label:hover ~ label {
            color: #f5b301;
        }
</style>

<!-- BreadCrumb Starts -->  
<section class="breadcrumb-main pb-0" style="background-image:url(https://drive.google.com/uc?export=view&id=1aBcDeFGhIjKlMNoPqRStUvWXyZ)">
    <div class="breadcrumb-outer pt-10">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                <h2 class="mb-2">Field Detail</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="http://localhost:8080/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Field Detail</li>
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
        <div class="single-full-title border-b mb-2 pb-2">
        <div class="single-title">
            <div class="d-block d-md-flex flex-horizontal-center mb-1">
                <h4 class="font-weight-bold mb-0 mr-2"><?= $field['nama'] ?></h4>
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
            </div>
            <p class="mb-0">
                <i class="fa fa-map-marker-alt mr-2"> <?= $field['lokasi'] ?></i>
            </p>
        </div>
    </div>

    <div class="single-slider">
        <div class="slider-1 slider-store">
            <?php foreach($field['photos'] as $photo): ?>
                <div class="detail-slider-item">
                    <img src="<?= $photo['link'] ?>" height="700px">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="slider-1 slider-thumbs">
            <?php foreach($field['photos'] as $photo): ?>
                <div class="detail-slider-item">
                    <img src="<?= $photo['link'] ?>" height="160px">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
        <div class="row">
            <div class="col-lg-8 col-xs-12 mb-4">
                <div class="single-content">
                    <div class="description" id="description">
                        <div class="description-inner mb-2 mt-1">
                            <h4>Description</h4>
                            <p><?= $field['deskripsi'] ?></p>
                        </div>

                        <div class="description-inner mb-2">
                            <div class="description-content">
                                
                                <div class="car-specifi">
                                    <table>
                                        <h4>We give you the following for FREE: </h4>
                                        <thead>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="title">Amendments</td>
                                                <td>Unlimited Kilometres for ALL car groups</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Theft Protection</td>
                                                <td>Local Taxes</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Direct-dial phone</td>
                                                <td>Road Fee</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Collision Damage Waiver</td>
                                                <td>First Additional Driver</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container mb-3">
                        <h1>Booking Calendar</h1>
                        <div id='calendar'></div>
                    </div>

                    <div class="single-review mb-4" id="single-review">
                        <h4>Average Reviews</h4>
                        <div class="review-box bg-pink text-center pb-4 pt-4">
                            <h2 class="mb-1 white"><span><?= $field['average_rating'] ?></span>/5</h2>
                            <p class="mb-0 white font-italic">From <?= $field['total_reviews'] ?> Reviews</p>
                        </div>
                    </div>

                    <!-- blog comment list -->
                    <div class="single-comments single-box mb-4" id="single-comments">
                        <?php foreach($field['reviews'] as $review): ?>
                            <div class="comment-content">
                                <h5 class="mb-1"><?= $review['user']['nama'] ?></h5>
                                <p class="comment-date"><?= $review['tanggal'] ?></p>
                                <div class="comment-rate">
                                    <div class="rating mar-right-15">
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
                                    <span class="comment-title"><?= $review['komentar'] ?></span>
                                </div>    
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- blog review -->
                    <?php if ($canReview): ?>
                        <div class="single-add-review" id="single-add-review">
                            <h4>Write a Review</h4>
                            <form action="/shop/postReview" method="post">
                                <input type="hidden" name="field_id" value="<?= $field['field_id'] ?>">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="rating">
                                            <input type="radio" name="rating" id="star5" value="5"><label for="star5">★</label>
                                            <input type="radio" name="rating" id="star4" value="4"><label for="star4">★</label>
                                            <input type="radio" name="rating" id="star3" value="3"><label for="star3">★</label>
                                            <input type="radio" name="rating" id="star2" value="2"><label for="star2">★</label>
                                            <input type="radio" name="rating" id="star1" value="1"><label for="star1">★</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="komentar" id="komentar" placeholder="Komentar"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-btn">
                                            <button type="submit" class="nir-btn">Submit Review</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12 mb-4 mt-2">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item">
                            <h3>Price</h3>
                            <div class="services-list">
                                <div class="d-flex align-items-center mb-2 pb-2 border-b">
                                    <i class="fa fa-tag pink mr-2"></i>
                                    <span><?= format_rupiah($field['harga']) ?></span>
                                </div>
                            </div>
                            <form id="formBook" action="/booking" method="post">
                                <input type="hidden" name="field_id" value="<?= $field['field_id'] ?>">
                                <input type="hidden" name="tanggal" value="<?= date("Y-m-d H:i:s") ?>">
                                <input type="hidden" name="waktu_awal">
                                <input type="hidden" name="durasi" id="durasi">
                                <?php if (session()->get('logged_in')): ?>
                                    <button id="btnBook" type="button" class="shop-btn mt-2 nir-btn">BOOK</button>
                                <?php else: ?>
                                    <a href="/login" class="shop-btn mt-2 nir-btn">BOOK</a>
                                <?php endif; ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog Ends -->  

<script>
    $(document).ready(function() {
        field_id = <?= $field['field_id'] ?>;
        $('#calendar').fullCalendar({
            defaultView: 'agendaWeek',
            events: function(start, end, timezone, callback) {
                $.ajax({
                    url: '/shop/fetchBookings',
                    data: {
                        start: start.format(),
                        end: end.format(),
                        field_id: field_id,
                    },
                    success: function(data) {
                        callback(data);
                    }
                });
            },
            // eventColor: '#0791BE',
            eventTextColor: '#FFFFFF',
            displayEventTime: false,
            slotLabelFormat: ['H:mm'], // Format 24 jam
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'agendaWeek,agendaDay'
            },
            minTime: "06:00:00",
            maxTime: "23:00:00",
            eventRender: function(event, element) {
                element.css('background-color', event.color);
                var eventTitle = element.find('.fc-title');
                eventTitle.css('text-align', 'center');
            },
            slotDuration: "01:00:00",
            selectable: true,
            selectHelper: true,
            select: function(start, end) {
                var waktu_awal = moment(start).format('YYYY-MM-DD HH:mm');
                var durasi = moment.duration(moment(end).diff(moment(start))).asHours();

                $('input[name="waktu_awal"]').val(waktu_awal);
                $('input[name="durasi"]').val(durasi);
            },
            selectOverlap: function(event) {
                return event.title === 'Available';
            }
        });
    });

    $('#btnBook').on('click', function() {
        var durasi = $('#durasi').val();
        
        if (durasi < 1) {
            alert('Booking duration must be at least 1 hour.');
        } else {
            $('#formBook').submit();
        }
    });
</script>

<style>
    .fc-content {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }
</style>