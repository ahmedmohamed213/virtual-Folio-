<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

    <title>Virtual Folio - Portfolio Template</title>

    <link rel="shortcut icon" href="{{ asset('UserAssets/assets/favicon.ico') }}" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{ asset('UserAssets/assets/css/themify-icons.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('UserAssets/assets/css/bootstrap.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('UserAssets/assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('UserAssets/assets/vendor/owl-carousel/owl.carousel.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('UserAssets/assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('UserAssets/assets/vendor/nice-select/css/nice-select.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('UserAssets/assets/vendor/fancybox/css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('UserAssets/assets/css/virtual.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('UserAssets/assets/css/topbar.virtual.css') }}">
</head>

<body class="theme-red">

    <!-- Back to top button -->
    <div class="btn-back_to_top">
        <span class="ti-arrow-up"></span>
    </div>

    <!-- Setting button -->
    <div class="config">
        <div class="template-config">
            <!-- Settings -->
            <div class="d-block">
                <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span
                        class="ti-settings"></span></button>
            </div>
            <!-- Puschase -->
            <div class="d-block">
                <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm"
                    title="Get this template" data-toggle="tooltip" data-placement="left"><span
                        class="ti-download"></span></a>
            </div>
            <!-- Help -->
            <div class="d-block">
                <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip"
                    data-placement="left"><span class="ti-help"></span></a>
            </div>
        </div>
        <div class="set-menu">
            <p>Select Color</p>
            <div class="color-bar" data-toggle="selected">
                <span class="color-item bg-theme-red selected" data-class="theme-red"></span>
                <span class="color-item bg-theme-blue" data-class="theme-blue"></span>
                <span class="color-item bg-theme-green" data-class="theme-green"></span>
                <span class="color-item bg-theme-orange" data-class="theme-orange"></span>
                <span class="color-item bg-theme-purple" data-class="theme-purple"></span>
            </div>
            <select class="custom-select d-block my-2" id="change-page">
                <option value="">Choose Page</option>
                <option value="index">Topbar</option>
                <option value="blog-topbar">Blog (Topbar)</option>
                <option value="index-2">Minibar</option>
                <option value="blog-minibar">Blog (Minibar)</option>
            </select>
        </div>
    </div>

    <div class="vg-page page-home" id="home"
        style="background-image: url({{ asset('UserAssets/assets/img/bg_image_1.jpg') }}">
        <!-- Navbar -->
        <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
            <div class="container">
                <a href="" class="navbar-brand">V-Folio</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
                    <span class="ti-menu"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link" data-animate="scrolling">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav ml-auto">
                        <li class="nav-item">
                            <button class="btn btn-fab btn-theme no-shadow">En</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div> <!-- End Navbar -->
        <!-- Caption header -->
        <div class="caption-header text-center wow zoomInDown">
            <h5 class="fw-normal">Welcome</h5>
            <h1 class="fw-light mb-4">I'm <b class="fg-theme">{{ $firstPages->name }}</b> </h1>
            <div class="badge">{{ $firstPages->title }}</div>
        </div> <!-- End Caption header -->
        <div class="floating-button"><span class="ti-mouse"></span></div>
    </div>

    <div class="vg-page page-about" id="about">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="img-place wow fadeInUp">
                        <img src="{{ asset('images/' . $about->image) }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 wow fadeInRight">
                    <h1 class="fw-light">{{ $about->name }}</h1>
                    <h5 class="fg-theme mb-3">{{ $about->title }}</h5>
                    <p class="text-muted">{{ $about->body }}</p>
                    <ul class="theme-list">
                        <li><b>From: </b> {{ $about->from }}</li>
                        <li><b>Lives In: </b>{{ $about->lives_in }}</li>
                        <li><b>Age:</b> {{ $about->age }}</li>
                        <li><b>Gender: </b> {{ $about->gender }}</li>
                    </ul>
                    <a href="{{ asset('cv/' . $about->cv) }}" class="btn btn-theme-outline" download>Download CV </a>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <h1 class="text-center fw-normal wow fadeIn">My Skills</h1>
            <div class="row py-3">
                @foreach ($skillsCategories as $skillsCategory)
                    <div class="col-md-6">
                        <div class="px-lg-3">
                            <h4 class="wow fadeInUp">{{ $skillsCategory->name }}</h4>
                            @foreach ($skillsCategory->skills as $skill)
                                <div class="progress-wrapper wow fadeInUp">
                                    <span class="caption">{{ $skill->name }}</span>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar"
                                            style="width:{{ $skill->number }}%;" aria-valuenow="75"
                                            aria-valuemin="0" aria-valuemax="100">{{ $skill->number }}%</div>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-6 wow fadeInRight">
                    <h2 class="fw-normal">Education</h2>
                    <ul class="timeline mt-4 pr-md-5">
                        @foreach ($educations as $education)
                            <li>
                                <div class="title">{{ $education->year }}</div>
                                <div class="details">
                                    <h5>{{ $education->title }}</h5>
                                    <small class="fg-theme">{{ $education->location }}</small>
                                    <p>{{ $education->body }}</p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div class="col-md-6 wow fadeInRight" data-wow-delay="200ms">
                    <h2 class="fw-normal">Experience</h2>
                    <ul class="timeline mt-4 pr-md-5">
                        @foreach ($experiences as $experience)
                            <li>
                                <div class="title">{{ $experience->year }}</div>
                                <div class="details">
                                    <h5>{{ $experience->title }}</h5>
                                    <small class="fg-theme">{{ $experience->location }}</small>
                                    <p>{{ $experience->body }}</p>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="vg-page page-service">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Service</div>
            </div>
            <h1 class="fw-normal text-center wow fadeInUp">What can i do?</h1>
            <div class="row mt-5">
                @foreach ($services as $service)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="card card-service wow fadeInUp">
                            <div class="icon">
                                <span class="{{ $service->icon }}"></span>
                            </div>
                            <div class="caption">
                                <h4 class="fg-theme">{{ $service->title }}</h4>
                                <p>{{ $service->body }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="vg-page page-funfact" style="background-image: url(../assets/img/bg_banner.jpg);">
        <div class="container">
            <div class="row section-counter">
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="768">768</h1>
                    <span>Clients</span>
                </div>
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="230">230</h1>
                    <span>Project Compleate</span>
                </div>
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="97">97</h1>
                    <span>Project Ongoing</span>
                </div>
                <div class="col-md-6 col-lg-3 py-4 wow fadeIn">
                    <h1 class="number" data-number="699">699</h1>
                    <span>Client Satisfaction</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio page -->
    <div class="vg-page page-portfolio" id="portfolio">
        <div class="container">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Portfolio</div>
            </div>
            <h1 class="text-center fw-normal wow fadeInUp">See my work</h1>
            <div class="filterable-button py-3 wow fadeInUp" data-toggle="selected">
                <button class="btn btn-theme-outline selected" data-filter="*">All</button>

                @foreach ($portfolioCategories as $portfolioCategory)
                    <button class="btn btn-theme-outline"
                        data-filter=".{{ $portfolioCategory->data_filter_name }}">{{ $portfolioCategory->name }}</button>
                @endforeach

            </div>

            <div class="gridder my-3">
                @foreach ($portfolios as $portfolio)
                    <div class="grid-item {{ $portfolio->category->data_filter_name }} wow zoomIn">
                        <div class="img-place" data-src="{{ asset('portfolio/' . $portfolio->image) }}" data-fancybox
                            data-caption="<h5 class='fg-theme'>Mobile Travel App</h5> <p>Travel, Discovery</p>">
                            <img src="{{ asset('portfolio/' . $portfolio->image) }}" alt="">
                            <div class="img-caption">
                                <h5 class="fg-theme">{{ $portfolio->title }}</h5>
                                <p>{{ $portfolio->tags }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- End gridder -->
            <div class="text-center wow fadeInUp">
                <a href="javascript:void(0)" class="btn btn-theme">Load More</a>
            </div>
        </div>
    </div> <!-- End Portfolio page -->

    <!-- Testimonial -->
    <div class="vg-page page-testimonial">
        <div class="container">
            <h1 class="text-center fw-normal wow fadeInUp">What Clients are Saying</h1>
            <div class="row justify-content-center mt-5 wow fadeInUp">
                <div class="col-md-9">
                    <div class="owl-carousel testi-carousel">
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-place">
                                        <img src="{{ asset('UserAssets/assets/img/testimonials/testimonials_1.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="caption">
                                        <div class="testi-content">There are many variations of passages of Lorem Ipsum
                                            available, but the majority have suffered</div>
                                        <div class="testi-info">
                                            <div class="thumb-profile">
                                                <img src="{{ asset('UserAssets/assets/img/testimonials/testimonials_1.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="tagline">
                                                <h5 class="mb-0">Satria Nugraha</h5>
                                                <span class="text-muted">CEO Nutshell</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="img-place">
                                        <img src="{{ asset('UserAssets/assets/img/testimonials/testimonials_2.jpg') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="caption">
                                        <div class="testi-content">Lorem ipsum, dolor sit amet consectetur adipisicing
                                            elit. Saepe natus expedita ab facilis ut, animi explicabo amet. Voluptatibus
                                            possimus iste enim, doloremque, fugiat accusamus nisi optio fugit ratione
                                            expedita harum?</div>
                                        <div class="testi-info">
                                            <div class="thumb-profile">
                                                <img src="{{ asset('UserAssets/assets/img/testimonials/testimonials_2.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="tagline">
                                                <h5 class="mb-0">Selena Arrini</h5>
                                                <span class="text-muted">CEO BigTree</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End testimonial -->

    <!-- Client -->
    <div class="vg-page page-client">
        <div class="container">
            <div class="row">
                @foreach ($partenrs as $partenr)
                    <div class="col-md-6 col-lg-4 col-xl-3 item">
                        <div class="img-place wow fadeInUp">
                            <img src="{{ asset('partner/' . $partenr->image) }}" alt="">
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </div> <!-- End client -->

    <!-- Blog -->
    <div class="vg-page page-blog" id="blog">
        <div class="container">
            <div class="text-center">
                <div class="badge badge-subhead wow fadeInUp">Blog</div>
            </div>
            <h1 class="text-center fw-normal wow fadeInUp">Latest Post</h1>
            <div class="row post-grid">
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="card">
                        <div class="img-place">
                            <img src="../assets/img/work/work-9.jpg" alt="">
                        </div>
                        <div class="caption">
                            <a href="javascript:void(0)" class="post-category">Technology</a>
                            <a href="#" class="post-title">Invision design forward fund</a>
                            <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="card">
                        <div class="img-place">
                            <img src="../assets/img/work/work-6.jpg" alt="">
                        </div>
                        <div class="caption">
                            <a href="javascript:void(0)" class="post-category">Business</a>
                            <a href="#" class="post-title">Announcing a plan for small teams</a>
                            <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp">
                    <div class="card">
                        <div class="img-place">
                            <img src="../assets/img/work/work-1.jpg" alt="">
                        </div>
                        <div class="caption">
                            <a href="javascript:void(0)" class="post-category">Design</a>
                            <a href="#" class="post-title">5 basic tips for illustrating</a>
                            <span class="post-date"><span class="sr-only">Published on</span> May 22, 2018</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center py-3 wow fadeInUp">
                    <a href="blog-fullbar.html" class="btn btn-theme">See All Post</a>
                </div>
            </div>
        </div>
    </div> <!-- End blog -->

    <!-- Contact -->
    <div class="vg-page page-contact" id="contact">
        <div class="container-fluid">
            <div class="text-center wow fadeInUp">
                <div class="badge badge-subhead">Contact</div>
            </div>
            <h1 class="text-center fw-normal wow fadeInUp">Get in touch</h1>
            <div class="row py-5">
                <div class="col-lg-7 px-0 pr-lg-3 wow zoomIn">
                    <div class="vg-maps">
                        <div id="google-maps" style="width: 100%; height: 100%;"></div>
                    </div>
                </div>
                <div class="col-lg-5">

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif


                    @if (Session::has('done'))
                        <div class="alert alert-success" role="alert">

                            {{ Session::get('done') }}
                        </div>
                    @endif

                    <form class="vg-contact-form" method="post" action="{{ route('admin.contact.store') }}">
                        @csrf
                        <div class="form-row">
                            <div class="col-12 mt-3 wow fadeInUp">
                                <input class="form-control" type="text" name="name" placeholder="Your Name">
                            </div>
                            <div class="col-6 mt-3 wow fadeInUp">
                                <input class="form-control" type="text" name="email"
                                    placeholder="Email Address">
                            </div>
                            <div class="col-6 mt-3 wow fadeInUp">
                                <input class="form-control" type="text" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-12 mt-3 wow fadeInUp">
                                <textarea type="text" class="form-control" name="body" rows="6" placeholder="Enter message here.."></textarea>
                            </div>
                            <button type="submit" class="btn btn-theme mt-3 wow fadeInUp ml-1">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> <!-- End Contact -->

    <!-- Footer -->
    <div class="vg-footer">
        <h1 class="text-center">Virtual Folio</h1>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 py-3">
                    <div class="footer-info">
                        <p>Where to find me</p>
                        <hr class="divider">
                        <p class="fs-large fg-white">1600 Amphitheatre Parkway Mountain View, California 94043 US</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="float-lg-right">
                        <p>Follow me</p>
                        <hr class="divider">
                        <ul class="list-unstyled">
                            <li><a
                                    href="https://www.instagram.com/ahmedmohamed21321/?fbclid=IwAR2_EKa3MQzCkX-fBP1G-jObSsWt3xbS-mV7Qa_1JshR2OiJ7iYb05VrWSU">Instagram</a>
                            </li>
                            <li><a href="https://web.facebook.com/profile.php?id=100009055571112">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="https://www.linkedin.com/in/ahmed-mohamed-81835b204">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 py-3">
                    <div class="float-lg-right">
                        <p>Contact me</p>
                        <hr class="divider">
                        <ul class="list-unstyled">
                            <li>info@virtual.com</li>
                            <li>+8890234</li>
                            <li>+813023</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12 mb-3">
                    <h3 class="fw-normal text-center">Subscribe</h3>
                </div>
                <div class="col-lg-6">
                    <form class="mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email address">
                            <input type="submit" class="btn btn-theme no-shadow" value="Subscribe">
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <p class="text-center mb-0 mt-4">Copyright &copy;2020. All right reserved | This template is made
                        with <span class="ti-heart fg-theme-red"></span> by <a href="https://www.macodeid.com/">MACode
                            ID</a></p>
                </div>
            </div>
        </div>
    </div> <!-- End footer -->


    <script src="{{ asset('UserAssets/assets/js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/fancybox/js/jquery.fancybox.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/wow/wow.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/animateNumber/jquery.animateNumber.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/js/google-maps.js') }}"></script>

    <script src="{{ asset('UserAssets/assets/js/topbar-virtual.js') }}"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>

</html>
