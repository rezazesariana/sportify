<!-- BreadCrumb Starts -->  
<section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
    <div class="breadcrumb-outer pt-10">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                <h2 class="mb-0">Confirmation</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Confirmation</li>
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
                        <div class="booking-box-title d-md-flex align-items-center bg-pink p-4 mb-4">
                            <i class="fa fa-check"></i>
                            <div class="title-content ml-3">
                                <h3 class="mb-0 white">Thank You. Your booking order is confirmed now.</h3>
                            </div>
                        </div>
                        <div class="travellers-info mb-4">
                            <h4>Booking Information</h4>
                            <table>
                                <tr>
                                    <td>Booking Number</td>
                                    <td><?= $booking['booking_id'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Booking</td>
                                    <td><?= $booking['tanggal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Field</td>
                                    <td><?= $field['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Waktu</td>
                                    <td><?= $booking['waktu_awal'] ?></td>
                                </tr>
                                <tr>
                                    <td>Durasi</td>
                                    <td><?= $booking['durasi'] ?> <?= $booking['durasi'] > 1 ? 'Hours' : 'Hour' ?></td>
                                </tr>
                                <tr>
                                    <td>User Name</td>
                                    <td><?= $user['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email Address</td>
                                    <td><?= $user['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Payment Method</td>
                                    <td><?= $payment_method['nama_bank'] ?></td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td><?= format_rupiah($payment['amount']) ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="booking-border mb-4 bg-lgrey p-4">
                            <h4 class="border-b pb-2 mb-2">View Booking List</h4>
                            <p>This is the third time I've used Travelo Website and telling you the truth their services are always reliable and it ony takes few minutes to plan and finalize.</p>
                            <a href="/booking-history">Booking List</a>
                        </div>
                        <div class="booking-border d-flex">
                            <a href="#" class="nir-btn mr-4"><i class="fa fa-print"></i> Print</a>
                            <a href="#" class="nir-btn-black"><i class="fa fa-envelope-open-text"></i> Send To</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xs-12 mb-4">
                <div class="sidebar-sticky">
                    <div class="list-sidebar">
                        <div class="sidebar-item">
                            <h4>Need Booking Help?</h4>
                            <div class="sidebar-module-inner">
                                <p class="mb-2">Paid was hill sir high 24/7. For him precaution any advantages dissimilar.</p>
                                <ul class="help-list">
                                    <li class="border-b pb-1 mb-1"><span class="font-weight-bold">Hotline</span>: +62 877-2289-3298</li>
                                    <li class="border-b pb-1 mb-1"><span class="font-weight-bold">Email</span>: booking@sportify.co.id</li>
                                    <li><span class="font-weight-bold">Livechat</span>: Sportify (Skype)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <h4>Why booking with us?</h4>
                            <div class="sidebar-module-inner">
                                <ul class="featured-list-sm">
                                    <li class="border-b pb-2 mb-2">
                                        <h6 class="mb-0">No Booking Charges</h6>
                                        We don't charge you an extra fee for booking a hotel room with us
                                    </li>
                                    <li class="border-b pb-2 mb-2">
                                        <h6 class="mb-0">No Cancellation Sees</h6>
                                        We don't charge you a cancellation or modification fee in case plans change
                                    </li>
                                    <li class="border-b pb-2 mb-2">
                                        <h6 class="mb-0">Instant Confirmation</h6>
                                        Instant booking confirmation whether booking online or via the telephone
                                    </li>
                                    <li>
                                        <h6 class="mb-0">Flexible Booking</h6>
                                        You can book up to a whole year in advance or right up until the moment of your stay
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog Ends -->  