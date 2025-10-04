@extends('layouts.guest')

@section('content')
    <!-- Feature One Start -->
    <section class="feature-one">
        <div class="container">
            <div class="feature-one__inner">
                <h2 class="feature-one__title">Welcome to <span>CODE KITCHEN</span><br>
                    A Place where you can <span>Cook code</span><br>Any time, Any where, Any Device </h2>
                <div class="feature-one__btn-box">
                    <a href="contact.html" class="thm-btn feature-one__btn"> <i class="fal fa-plus"></i> Lets explore</a>
                </div>
                <div class="feature-one__main-content-box">
                    <div class="feature-one__color-overly-1 flaot-bob-y"></div>
                    <div class="feature-one__color-overly-2 flaot-bob-x"></div>
                    <div class="feature-one__color-overly-3 img-bounce"></div>
                    <div class="feature-one__main-content-top">
                        <ul class="feature-one__list">
                            <li>
                                <div class="feature-one__single">
                                    <div class="feature-one__icon">
                                        <img src="{{ asset('images/cpplang.png') }}" alt="C++ Language" style="width: 50%;">
                                    </div>
                                    <h5 class="feature-one__title-2"><a href="about.html">C / C++</a></h5>
                                </div>
                            </li>
                            <li>
                                <div class="feature-one__single">
                                    <div class="feature-one__icon">
                                        <img src="images/java alt.png" alt="" style="width: 50%;">
                                    </div>
                                    <h5 class="feature-one__title-2"><a href="about.html">Java</a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="feature-one__main-content-middle">
                        <div class="feature-one__start-1 zoominout">
                            <img src="images/shapes/feature-one-star-1.png" alt="">
                        </div>
                        <div class="feature-one__start-2 float-bob-x">
                            <img src="images/shapes/feature-one-star-2.png" alt="">
                        </div>
                        <div class="feature-one__start-3 float-bob-y">
                            <img src="images/shapes/feature-one-star-3.png" alt="">
                        </div>

                        <div class="feature-one__start-5 zoominout">
                            <img src="images/shapes/feature-one-star-5.png" alt="">
                        </div>
                        <div class="feature-one__start-6 float-bob-x">
                            <img src="images/shapes/feature-one-star-6.png" alt="">
                        </div>
                        <div class="feature-one__start-7 float-bob-y">
                            <img src="images/shapes/feature-one-star-7.png" alt="">
                        </div>

                        <div class="feature-one__ai-pack">
                            <h3></h3>
                        </div>
                        <ul class="feature-one__list">
                            <li>
                                <div class="feature-one__single">
                                    <div class="feature-one__icon">
                                        <img src="images/htmllang.png" alt="" style="width: 50%;">
                                    </div>
                                    <h5 class="feature-one__title-2"><a href="about.html">Html</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="feature-one__cpu-icon-box">
                                    <img src="images/logo.png" alt="">

                                </div>
                            </li>
                            <li>
                                <div class="feature-one__single">
                                    <div class="feature-one__icon">
                                        <img src="images/Pytlang.png" alt="" style="width: 50%;">
                                    </div>
                                    <h5 class="feature-one__title-2"><a href="about.html">Python</a></h5>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="feature-one__main-content-bottom">
                        <div class="feature-one__start-4 zoominout">
                            <img src="images/shapes/feature-one-star-4.png" alt="">
                        </div>
                        <div class="feature-one__start-8 float-bob-x">
                            <img src="images/shapes/feature-one-star-8.png" alt="">
                        </div>
                        <ul class="feature-one__list">
                            <li>
                                <div class="feature-one__single">
                                    <div class="feature-one__icon">
                                        <img src="images/jslang.png" alt="" style="width: 50%;">
                                    </div>
                                    <h5 class="feature-one__title-2"><a href="about.html">Javascript</a>
                                    </h5>
                                </div>
                            </li>
                            <li>
                                <div class="feature-one__single">
                                    <div class="feature-one__icon">
                                        <img src="images/csslogo.png" alt="" style="width: 50%;">
                                    </div>
                                    <h5 class="feature-one__title-2"><a href="about.html">CSS</a>
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Feature One End -->

    <!-- Solutions One Start -->
    <section class="solutions-one">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Your All in one platform</span>
                </div>
                <h2 class="section-title__title">To Read bunch of books to practice all programs <br>
                    You need only one platform.</h2>
            </div>
            <div class="solutions-one__carousel owl-carousel owl-theme thm-owl__carousel" data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 24,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 2
                                    },
                                    "992": {
                                        "items": 3
                                    },
                                    "1350": {
                                        "items": 4
                                    }
                                }
                            }'>
                <div class="item">
                    <div class="solutions-one__single" style="height: 75vh">
                        <div class="solutions-one__icon">
                            <img src="{{ asset('images/cpplang.png') }}" alt="C++ Language" style="width: 30%;">
                        </div>
                        <h4 class="solutions-one__title"><a href="about.html">C++</a></h4>
                        <p class="solutions-one__text">Harnessing the Power of High-Performance Programming.DSA and Concepts
                            of oops.
                        </p>
                        <a href="#" class="solutions-one__btn">Explore More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>

                <div class="item">
                    <div class="solutions-one__single" style="height: 75vh">
                        <div class="solutions-one__icon">
                            <img src="{{ asset('images/Pytlang.png') }}" alt="PyThon" style="width: 100%;">
                        </div>
                        <h4 class="solutions-one__title"><a href="about.html">AI Writing Tools</a></h4>
                        <p class="solutions-one__text">With Python, coding becomes intuitive and elegant, allowing
                            developers to focus on problem-solving instead of complex syntax.
                        </p>
                        <a href="about.html" class="solutions-one__btn">Explore More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>

                <div class="item">
                    <div class="solutions-one__single" style="height: 75vh">
                        <div class="solutions-one__icon">
                            <img src="{{ asset('images/htmllang.png') }}" alt="">
                        </div>
                        <h4 class="solutions-one__title"><a href="about.html">HTML : 5</a></h4>
                        <p class="solutions-one__text">Here Study and Practice the core of webdesign HTML. Its the structure
                            of Webpages, that builds in to big websites and webapps start your journey.
                        </p>
                        <a href="about.html" class="solutions-one__btn">Explore More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="item">
                    <div class="solutions-one__single" style="height: 75vh">
                        <div class="solutions-one__icon">
                            <img src="{{ asset('images/csslogo.png') }}" alt="">
                        </div>
                        <h4 class="solutions-one__title"><a href="about.html">CSS</a></h4>
                        <p class="solutions-one__text">Cascading Style Sheets (CSS) is a style sheet language used for
                            describing the look and formatting of a document written in HTML or XML."
                        </p>
                        <a href="about.html" class="solutions-one__btn">Explore More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="item">
                    <div class="solutions-one__single" style="height: 75vh">
                        <div class="solutions-one__icon">
                            <img src="{{ asset('images/jslang.png') }}" alt="">
                        </div>
                        <h4 class="solutions-one__title"><a href="about.html">Javascript</a></h4>
                        <p class="solutions-one__text">JavaScript is a programming language that conforms to the ECMAScript
                            specification and is high-level, often just-in-time compiled, and multi-paradigm.
                        </p>
                        <a href="about.html" class="solutions-one__btn">Explore More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="item">
                    <div class="solutions-one__single" style="height: 75vh">
                        <div class="solutions-one__icon">
                            <img src="{{ asset('images/java alt.png') }}" alt="">
                        </div>
                        <h4 class="solutions-one__title"><a href="about.html">Java Language</a></h4>
                        <p class="solutions-one__text">Java is a high-level, class-based, object-oriented programming
                            language that is designed to have as few implementation dependencies as possible.
                        </p>
                        <a href="about.html" class="solutions-one__btn">Explore More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
                <div class="item">
                    <div class="solutions-one__single" style="height: 75vh">
                        <div class="solutions-one__icon">
                            <img src="{{ asset('images/clang.png') }}" alt="">
                        </div>
                        <h4 class="solutions-one__title"><a href="about.html">C Language</a></h4>
                        <p class="solutions-one__text">Java is a high-level, class-based, object-oriented programming
                            language that is designed to have as few implementation dependencies as possible.
                        </p>
                        <a href="about.html" class="solutions-one__btn">Explore More <i class="fas fa-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Solutions One End -->

    <!-- Solutions Two Start -->
    <section class="solutions-two">
        <div class="container">
            <div class="section-title text-center">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Start With Our library</span>
                </div>
                <h2 class="section-title__title">Gate access to unlimited books<br> You can read or download <span>Unlimited Books for free.</span></h2>
            </div>
            <div class="solutions-two__content-one wow fadeInUp" data-wow-delay="100ms">
                <div class="solutions-two__shape-1" style="background-image: url(images/shapes/solutions-two-shape-1.png);">
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="solutions-two__content-one-left">
                            <div class="solutions-two__shape-2 zoominout">
                                <img src="images/shapes/solutions-two-shape-2.png" alt="">
                            </div>
                            <div class="solutions-two__content-one-title-box">
                                <p>Beginer Friendly</p>
                                <h3>This platform is for everyone, University Students, High School Students, and anyone who wants to learn programming.</h3>
                                </h3>
                            </div>
                            <ul class="solutions-two__content-one-points">
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>There are more than <span>100+</span> Programing Books Available here.
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Online Code Editor and Complier.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fal fa-check"></i>
                                    </div>
                                    <div class="text">
                                        <p>Code Hive : An online Competitive Coding Platfrom.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="solutions-two__content-one-btn-box">
                                <a href="about.html" class="thm-btn solutions-two__content-one-btn"> <i
                                        class="fal fa-plus"></i> Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="solutions-two__content-one-right">
                            <div class="solutions-two__content-one-img-box">
                                <div class="solutions-two__content-one-img">
                                    <img src="images/resource/solutions-two-content-one-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="solutions-two__content-three wow fadeInUp" data-wow-delay="100ms">
                <div class="solutions-two__content-three-shape-1"
                    style="background-image: url(images/shapes/solutions-two-content-three-shape-1.png);"></div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="solutions-two__content-three-left">
                            <ul class="solutions-two__browser-dot">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <div class="solutions-two__content-three-shape-2"></div>
                            <ul class="row solutions-two__content-three-img-list">
                                <li class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-2.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-5.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-6.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-7.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-8.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-9.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="solutions-two__content-three-img-single">
                                        <div class="solutions-two__content-three-img">
                                            <img src="images/resource/solutions-two-content-three-img-1-10.jpg" alt="">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="solutions-two__content-three-right">
                            <div class="solutions-two__content-three-title-box">
                                <p>Our E Library</p>
                                <h3>More than 100+ books just some hyper link away...</h3>
                            </div>
                            <p class="solutions-two__content-three-text-1"><span>E-Library</span> you dont need to scroll across multiple web sites and offline bookstore find your wanted reference book for free you can rerad or download</p>
                            <div class="solutions-two__content-three-points-box">
                                <ul class="solutions-two__content-three-points list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>100+ Books</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Read Online</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-check"></span>
                                        </div>
                                        <div class="text">
                                            <p>Download PDF</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="solutions-two__content-three-btn-box">
                                <a href="about.html" class="thm-btn solutions-two__content-three-btn"> <i
                                        class="fal fa-plus"></i>Generate AI Image</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Solutions Two End -->
@endsection