<!-- BreadCrumb Starts -->  
<section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
    <div class="breadcrumb-outer pt-10">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                <h2 class="mb-0">Booking History</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Booking History</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends -->  

<!-- Dashboard -->
<div id="dashboard" class="pt-10 pb-10">
    <div class="container">
        <div class="dashboard-main">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard-sidebar">
                        <div class="profile-sec">
                            <div class="author-news mb-3">
                                <div class="author-news-content text-center p-3">
                                    <div class="author-content pt-2 p-0">
                                        <h3 class="mb-1 white"><a href="#" class="white"><?= $user['nama'] ?></a></h3>
                                        <p class="detail"><i class="fa fa-map-marker"></i> <?= $user['alamat'] ?></p>
                                        <p class="detail"><i class="fa fa-phone"></i> <?= $user['no_telp'] ?></p>
                                    </div>
                                </div>
                                <div class="dot-overlay"></div>
                            </div>
                        </div>
                        <div class="nav-links">
                            <a href="/profile">Profile</a>
                            <a href="/booking-history" class="active">Booking History</a>
                            <a href="/deleteAccount">Delete Account</a>
                            <a href="/logout">Logout</a>
                        </div>
                        <!-- Responsive Navigation Trigger -->
                        <!-- <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  
                        <div class="dashboard-nav">
                            <div class="dashboard-nav-inner">
                                <ul>
                                    <li><a href="/profile"><i class="sl sl-icon-user"></i> Profile</a></li>
                                    <li class="active"><a href="/booking-history"><i class="fa fa-list-ul"></i>Booking History</a></li>
                                    <li><a href="/logout"><i class="sl sl-icon-power"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">    
                    <div class="dashboard-content">
                        <div class="dashboard-list-box">
                            <div class="table-box">
                                <table class="basic-table history-table">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Field</th>
                                            <th>Booking Date</th>
                                            <th>Time</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($bookings as $booking) : ?>
                                            <tr>
                                                <td><?= $booking['booking_id'] ?></td>
                                                <td><?= $booking['field']['nama'] ?></td>
                                                <td><?= date('Y-m-d H:i:s', strtotime($booking['tanggal'])) ?></td>
                                                <td><?= date('Y-m-d H:i', strtotime($booking['waktu_awal'])) . ' - ' . date('H:i', strtotime($booking['waktu_awal'] . ' + ' . $booking['durasi'] . ' hours')) ?></td>
                                                <td><?= format_rupiah($booking['payment']['amount']) ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>    
        </div>    
        <!-- Content / End -->
    </div>
</div>
<!-- Dashboard / End -->

<style>
    .nav-links {
        display: flex;
        flex-direction: column;
    }

    .nav-links a {
        text-decoration: none;
        color: #333;
        padding: 10px 15px;
        margin: 5px 0;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .nav-links a:hover {
        background-color: #ddd;
    }

    .nav-links a.active {
        background-color: #1db954;
        color: white;
    }

</style>