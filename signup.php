<?php
include("header.php");
include("php/phpquery.php");
?>

    <div class="container-xxl position-relative bg-white d-flex p-0">
    <?php
    include("loader.php");
    ?>

        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <form method="post" onsubmit="return validateForm()" class="form-group">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.php" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="username" placeholder="Enter Your Name" name="uname">
                            <label for="uname" id="Lausername">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="useremail" placeholder="Enter Your Email" name="uemail">
                            <label for="uemail" id="Laemail">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="userpassword" placeholder="Enter Your Password" name="upassword">
                            <label for="upassword" id="Lapass">Password</label>
                        </div>
                        <div class="mb-4">
                            <div class="d-flex align-items-start justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input cursor-pointer" id="checksignup" name="check">
                                <label class="form-check-label cursor-pointer" for="checksignup" id="LaCheck">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary py-3 w-100 mb-4" name="usubmit" value="Sign Up">
                        <p class="text-center mb-0">Already have an Account? <a href="signin.php">Sign In</a></p>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>

<?php
include("footerlinks.php");
?>
