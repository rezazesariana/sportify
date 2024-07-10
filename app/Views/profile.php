<!-- BreadCrumb Starts -->  
<section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg8.jpg);">
    <div class="breadcrumb-outer pt-10">
        <div class="container">
            <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                <h2 class="mb-0">Profile</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
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
                        <a href="/profile" class="active">Profile</a>
                        <a href="/booking-history">Booking History</a>
                        <a href="/logout">Logout</a>
                    </div>
                </div>
            </div>
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">    
                    <div class="dashboard-content">
                        <div class="dashboard-form mb-4">
                            <div class="row">

                                <!-- Profile -->
                                <div class="col-lg-12 col-md-12 col-xs-12 padding-right-30">
                                    <div class="dashboard-list">
                                        <h4 class="gray">Profile Details</h4>
                                        <div class="dashboard-list-static">
                        
                                            <!-- Details -->
                                            <div class="my-profile">
                                                <div class="form-group">
                                                    <label>Your Name *</label>
                                                    <input value=<?= $user['nama'] ?> name="nama" type="text">
                                                </div>                    
                                                <div class="form-group">
                                                    <label>Phone Number *</label>
                                                    <input value=<?= $user['no_telp'] ?> name="no_telp" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label>Email Address *</label>
                                                    <input value=<?= $user['email'] ?> name="email" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <label>Address *</label>
                                                    <textarea name="alamat" cols="30" rows="10"><?= $user['alamat'] ?></textarea>
                                                </div>
                                            </div>
                        
                                            <div class="form-btn">
                                                <button type="submit" class="nir-btn">SAVE CHANGE</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-form mb-4">
                            <div class="dashboard-password">
                                <h4>Change Password</h4>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="password" placeholder="*********">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" name="new_password">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <label>Re-enter Password</label>
                                                <input type="password">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-btn mar-top-15">
                                                <button type="submit" class="nir-btn">SAVE CHANGE</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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