<?php
include("header.php");
include("php/phpquery.php")
?>
    <div class="container-xxl position-relative bg-white d-flex p-0">
    <?php
    include("loader.php");
    ?>

        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="post" onsubmit="return validateLoginForm()" class="form-group">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Loginemail" placeholder="Enter Your Email" name="ulemail">
                            <label for="ulemail" id="Loginemail2">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="Loginpass" placeholder="Enter Your Password" name="ulpassword">
                            <label for="ulpassword" id="Loginpass2">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input cursor-pointer" id="Logincheck" name="check">
                                <label class="form-check-label cursor-pointer" for="Logincheck" id="Logincheck2">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <input type="submit" class="btn btn-primary py-3 w-100 mb-4" name="ulsubmit" value="Sign In">
                        <p class="text-center mb-0" id="lSIeleLogin">Don't have an Account? <a href="signup.php">Sign Up</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

<?php
include("footerlinks.php");
?>