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
            <h3 class="pink mb-1">Register</h3>  
            <p>Access thousands of online classes in design, business, and more!</p>                  
        </div>
        <?php if(isset($validation)):?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif;?>
        <div class="login-form text-center">
            <form action="/register/save" method="post">
                <div class="form-group">
                    <input type="text" name="nama" placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                    <input type="text" name="notelp" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                    <textarea rows="4" cols="50" name="alamat" placeholder="Enter Address"></textarea>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Enter Email Address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Enter Password">
                </div>
                <div class="form-group">
                    <input type="password" name="confirmpassword" placeholder="Confirm Password">
                </div>
                <div class="form-btn">
                    <button type="submit" class="nir-btn">Register</button>
                </div>
            </form>
            <div class="form-group mb-0 form-checkbox mt-3">
                <input type="checkbox"> By clicking this, you are agree to to<a href="#" class=""> our terms of use</a> and <a href="#" class="">privacy policy</a> including the use of cookies
            </div>
        </div>
        <div class="sign-up mt-3">
            <p class="m-0">Already have an account? <a href="/login" class="pink">Login</a></p>
        </div>                
    </div>
</div>