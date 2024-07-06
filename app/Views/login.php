<!-- BreadCrumb Starts -->  
<section class="breadcrumb-main pb-0" style="background-image: url(images/bg/bg7.jpg);">
    <div class="breadcrumb-outer pt-10">    
    </div>
    <div class="dot-overlay"></div>
</section>
<!-- BreadCrumb Ends --> 

<div class="container"> 
    <div class="login-content p-4 text-center">
        <div class="login-title section-border">
            <h3 class="pink">Login</h3>
        </div>
        <?php if(session()->getFlashdata('msg')):?>
            <div class="alert alert-warning">
                <?= session()->getFlashdata('msg') ?>
            </div>
        <?php endif;?>
        <div class="login-form">
            <form action="/login/authenticate" method="post">
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Enter password">
                </div>
                <div class="form-btn">
                    <button type="submit" class="nir-btn">LOGIN</button>
                </div>
            </form>
            <div class="form-group mb-0 form-checkbox mt-3">
                <input type="checkbox"> Remember Me
            </div>
        </div>
        <div class="sign-up mt-3">
            <p class="m-0">Do not have an account? <a href="/login" class="pink">Sign Up</a></p>
        </div>                
    </div>
</div>