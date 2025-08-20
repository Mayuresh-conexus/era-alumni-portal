@include('frontend.header')



    <!-- Blog One Start -->
    <section class="blog-one" style="margin-top: 120px;">
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <div class="section-title__tagline-box">
                        <div class="section-title__tagline-shape"></div>
                        <span class="section-title__tagline">Our Blogs</span>
                    </div>
                    <h2 class="section-title__title title-animation">Insights & Ideas Dive into Our <br>Latest
                        <span>Blog Post <img src="assets/images/shapes/section-title-shape-1.png" alt=""></span></h2>
                </div>
                <div class="blog-one__carousel owl-theme owl-carousel">
                    <!-- Blog One Single Start -->
                @foreach ($posts as $post)
                    <div class="item">
                        <div class="blog-one__single">
                            <div class="blog-one__img">
                            <img width="100%" style="margin-bottom: 12px;border-radius:4px;" src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" />
                            </div>
                        
                            <div class="blog-one__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li>
                                        <a href="#"><span class="icon-calendar"></span>{{ $post->created_at }}</a>
                                    </li>
                                    <li>
                                        <a href="#"><span class="icon-comment"></span>250 Comments</a>
                                    </li>
                                </ul>
                                <h3 class="blog-one__title"><a href="#">{{ $post->title }}</a></h3>
                                <p class="blog-one__text">{{ $post->content }}</p>
                                <div class="blog-one__btn-and-user-box">
                                    <div class="blog-one__btn-box">
                                        <a href="#" class="thm-btn"><span
                                                class="icon-angles-right"></span>Read More</a>
                                    </div>
                                    <div class="blog-one__user-box">
                                        <div class="blog-one__user-img">
                                            <img src="assets/images/fev.png" alt="">
                                        </div>
                                        <div class="blog-one__user-content">
                                            <h5 class="blog-one__user-name">WayForWeb</h5>
                                            <!-- <p class="blog-one__user-sub-title">Tech Specialist</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                      
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
        <!-- Blog One End -->


    
    
    @include('frontend.footer')
