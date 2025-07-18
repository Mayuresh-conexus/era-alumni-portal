@include('frontend.header')

    <link rel="stylesheet" href="assets/css/module-css/page-header.css" />
    <link rel="stylesheet" href="assets/css/module-css/event.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
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
                    <h2>Events</h2>
                    <div class="thm-breadcrumb__box">
                        <ul class="thm-breadcrumb list-unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><span>//</span></li>
                            <li>Events</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Events Page Start-->
        <section class="events-page">
            <div class="container">
                <div class="row">
                    <!--Event One Single Start -->
                        @foreach ($events as $event)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="event-one__single">
                            <div class="event-one__img">
                                <img src="https://weblayout.unicktheme.com/fistudy/main-html/assets/images/event/event-1-5.jpg" alt="">
                                <!-- <div class="event-one__date">
                                    <p></p>
                                </div> -->
                            </div>
                            <div class="event-one__content">
                                <p class="event-one__time"> <span class="icon-clock"></span>{{ $event->date }}</p>
                                <h4 class="event-one__title"><a href="event-details.html">{{ $event->title }} </a></h4>
                                <div class="event-one__location">
                                    <div class="event-one__location-icon">
                                        <span class="icon-location"></span>
                                    </div>
                                    <p class="event-one__loation-text">{{ $event->location }}</p>
                                    <p>{{ $event->description }}</p>
                                </div>
                                <a href="#" class="d-flex mt-2 gap-2 align-items-center">
                                        <span>Read More</span>
                                        <i class="icon-angles-right"></i>
                                    </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--Event One Single End -->
               
                </div>
            </div>
        </section>
        <!--Events Page End-->


    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->

@include('frontend.footer')