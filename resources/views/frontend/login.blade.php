 @include('frontend.header')
   <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/shapes/page-header-bg-shape.png);">
            </div>
            <div class="page-header__shape-4">
                <img src="assets/images/shapes/page-header-shape-4.png" alt="">
            </div>
            <div class="page-header__shape-5">
                <img src="assets/images/shapes/page-header-shape-5.png" alt="">
            </div>
            <div class="page-header__social">
                <a href="#">Facebook</a>
                <span>//</span>
                <a href="#">Instagram</a>
                <span>//</span>
                <a href="#">LinkedIn</a>
                <span>//</span>
                <a href="#">Twitter</a>
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <div class="page-header__img">
                        <img src="assets/images/resources/page-header-img-1.png" alt="">
                        <div class="page-header__shape-1">
                            <img src="assets/images/shapes/page-header-shape-1.png" alt="">
                        </div>
                        <div class="page-header__shape-2">
                            <img src="assets/images/shapes/page-header-shape-2.png" alt="">
                        </div>
                        <div class="page-header__shape-3">
                            <img src="assets/images/shapes/page-header-shape-3.png" alt="">
                        </div>
                    </div>
                    <h2>Login</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>Login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Start Login One-->
        <section class="login-one">
            <div class="container">
                <div class="login-one__form">
                    <div class="inner-title text-center">
                        <h2>Login Here</h2>
                    </div>
                    <form id="login-one__form" name="Login-one_form" action="#" method="post">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail" placeholder="Email..."
                                            required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_password" id="formPassword"
                                            placeholder="Password..." required="" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">Login
                                        Here</button>
                                </div>
                            </div>
                            <div class="remember-forget">
                                <div class="checked-box1">
                                    <input type="checkbox" name="saveMyInfo" id="saveinfo" checked="">
                                    <label for="saveinfo">
                                        <span></span>
                                        Remember me
                                    </label>
                                </div>
                                <div class="forget">
                                    <a href="#">Forget password?</a>
                                </div>
                            </div>

                            <div class="create-account text-center">
                                <p>Not registered yet? <a href="sign-up.html">Create an Account</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--End Login One-->

         @include('frontend.footer')