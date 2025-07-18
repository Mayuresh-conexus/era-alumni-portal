   @include('frontend.header')
  <link rel="stylesheet" href="assets/css/module-css/page-header.css" />

<style>
    .page-header{
        margin-top:150px;
    }
    </style>



        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header__bg" style="background-image: url(https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-bg-shape.png);">
            </div>
            <div class="page-header__shape-4">
                <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-4.png" alt="">
            </div>
            <div class="page-header__shape-5">
                <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-5.png" alt="">
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
                        <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/resources/page-header-img-1.png" alt="">
                        <div class="page-header__shape-1">
                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-1.png" alt="">
                        </div>
                        <div class="page-header__shape-2">
                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-2.png" alt="">
                        </div>
                        <div class="page-header__shape-3">
                            <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/shapes/page-header-shape-3.png" alt="">
                        </div>
                    </div>
                    <h2>Our Blogs</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>Our Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Blog Page Start-->
        <section class="blog-page">
            <div class="container">
                <div class="row">

                    @foreach ($posts as $post)
                    <!--Blog Two Single Start -->
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="blog-two__single">
                            <div class="blog-two__img">
                                <img src="{{ Storage::url($post->featured_image) }}" alt="">
                                <div class="blog-two__date">
                                    <span class="icon-calendar"></span>
                                    <p>{{ $post->created_at }}</p>
                                </div>
                            </div>
                            <div class="blog-two__content">
                               
                                <h4 class="blog-two__title"><a href="/blog-details">{{ $post->title }}</a></h4>
                                <p class="blog-two__text"> {{ $post->content }}</p>

                                <a href="/blog-details" class="d-flex mt-2 gap-2 align-items-center">
                                        <span>Read More</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    <!--Blog Two Single End -->
                    @endforeach
                </div>
                <!-- <div class="row"> -->
                    <!-- <div class="col-xl-12">
                        <div class="blog-two__btn-box">
                            <a href="blog-details.html" class="thm-btn-two">
                                <span>More Blogs</span>
                                <i class="icon-angles-right"></i>
                            </a>
                        </div>
                        <div class="blog-list__pagination">
                            <ul class="pg-pagination list-unstyled">
                                <li class="prev">
                                    <a href="#" aria-label="prev"><i class="fas fa-arrow-left"></i></a>
                                </li>
                                <li class="count active"><a href="#">01</a></li>
                                <li class="count"><a href="#">02</a></li>
                                <li class="count"><a href="#">03</a></li>
                                <li class="next">
                                    <a href="#" aria-label="Next"><i class="fas fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!--Blog Page End-->





 @include('frontend.footer')



