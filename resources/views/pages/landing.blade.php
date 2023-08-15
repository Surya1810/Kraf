@extends('layout')

@section('title')
    Communication on Space
@endsection

@push('css')
@endpush

@section('content')
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container-fluid px-4 py-2">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/Logo/logo-k-light-ok.png') }}" alt="Logo" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <button class="nav-link active" aria-current="page" onclick="backToTop()"
                            id="homee">Home</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#works">Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blogs">Blogs</a>
                    </li>
                </ul>
            </div>
            <div class="text-end">
                <a class="ml-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight">
                    <i class="fa-solid fa-arrow-left fa-2xl" style="color: #ff5700"></i>
                </a>
            </div>
        </div>
    </nav>

    <!-- offcanvas -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-5">
            <p class="text-secondary">Ready to work with us?</p>
            <h3 class="mb-5"><a href="#" class="link-putih">hi@madebykraf.com</a></h3>
            <p class="text-secondary">kraf. adalah perusahaaan agensi kreatif yang inovatif dan dinamis, berfokus pada
                menyediakan solusi
                kreatif dan layanan pemasaran terpadu untuk berbagai klien dari berbagai industri.</p>
            <img src="{{ asset('assets/Logo/logo-k-light-ok.png') }}" alt="Logo">
            <div class="mt-5">
                <h5 class="mb-2">Follow Us</h5>
                <ul class="list-unstyled d-flex">
                    <li><a class="link-body-emphasis text-white" href="https://www.instagram.com/madebykraf"><i
                                class="fa-brands fa-instagram fa-2xl"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis text-white"
                            href="https://www.facebook.com/madebykraf"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis text-white"
                            href="https://www.instagram.com/madebykraf"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" data-bs-smooth-scroll="true"
        class="scrollspy-example" tabindex="0">

        <!-- Carousel -->
        <section id="carouselMain" class="carousel slide carousel-main" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="{{ asset('assets/Picture/1.jpg') }}" class="d-block w-100 c-img" alt="slider_1">
                    <div class="carousel-caption d-flex h-100 align-items-center justify-content-start text-left">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h1 class="display-3">We work on delivering unique visual solutions</h1><br>
                                <a href="#" class="btn btn-lg btn-dark uppercase px-5 py-4">View More <i
                                        class="fa-solid fa-arrow-right" style="color: #ff5700"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('assets/Picture/2.jpg') }}" class="d-block w-100 c-img" alt="slider_2">
                    <div class="carousel-caption d-flex h-100 align-items-center justify-content-start text-left">

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h1 class="display-3">Attractive design from concept to final result</h1>
                                <a href="#" class="btn btn btn-dark uppercase px-5 py-4">View More <i
                                        class="fa-solid fa-arrow-right" style="color: #ff5700"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('assets/Picture/3.jpg') }}" class="d-block w-100 c-img" alt="slider_3">
                    <div class="carousel-caption d-flex h-100 align-items-center justify-content-start text-left">

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <h1 class="display-3">Project tactics and strategies for all agencies
                                </h1>
                                <a href="#" class="btn zbtn btn-dark uppercase px-5 py-4">View More <i
                                        class="fa-solid fa-arrow-right" style="color: #ff5700"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </section>
    </div>

    <!-- About Us -->
    <div class="about-us" id="about-us" style="color: white">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <h1 class="display-3 fw-bold">About Us</h1>
                    <p class="text-secondary">The Story</p>
                    <hr>
                    <h2 class="about-us-text">Kraf. adalah sebuah perusahaan agensi kreatif yang inovatif dan dinamis,
                        berfokus pada
                        menyediakan
                        solusi
                        kreatif dan layanan pemasaran terpadu untuk berbagai klien dari berbagai industri.
                        Sebagai
                        agensi
                        kreatif
                        yang berorientasi pada perkembangan dan berbasis di era digital, kraf. didirikan dengan
                        tujuan
                        untuk
                        menghadirkan kreativitas, keberanian, dan ketangguhan dalam setiap proyek yang kami
                        tangani.
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Meet The Team -->
    <div class="team" id="team">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <h1 class="display-3 fw-bold mb-3">Meet the Team</h1>

                <section id="carouselTeam" class="carousel carouselTeam carousel-dark slide" data-bs-interval="false">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselTeam" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselTeam" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselTeam" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100 my-3">
                                        <img src="{{ asset('assets/Profile/alfazri.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Director & 3D Architectur</p>
                                            <p class="fs-3">Alfazri</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/enza.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Art & Creative</p>
                                            <p class="fs-3">Encep Zainul</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/aris.jpg') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Video & Photography</p>
                                            <p class="fs-3">Aris Resmono</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/thio.jpeg') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Graphic Designer</p>
                                            <p class="fs-3">Thio Agus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/rio.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Animator</p>
                                            <p class="fs-3">Rio Tubagus</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/adil.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Illustrator</p>
                                            <p class="fs-3">Adil Poetra</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/surya.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">IT Developer</p>
                                            <p class="fs-3">Surya Dinarta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/fadjar.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Content Creator</p>
                                            <p class="fs-3">Fadjar Maulana</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/hanafi.jpeg') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Social Media Specialist</p>
                                            <p class="fs-3">Hanafi Maulana</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="card bg-dark border-0 h-100">
                                        <img src="{{ asset('assets/Profile/ilham.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <p class="text-secondary">Account Executive</p>
                                            <p class="fs-3">Muhammad Ilham</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeam"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTeam"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </section>
            </div>
        </div>

    </div>

    <!-- Our Services -->
    <div class="container" id="services">
        <h1 class="display-3 fw-bold">Our Services</h1>

        <div class="row h-100">
            {{-- <div class="d-flex align-items-start">
                    <div class="nav flex-column me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">Branding</button>
                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab"
                            aria-controls="v-pills-profile" aria-selected="false">Graphic Design</button>
                        <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-disabled" type="button" role="tab"
                            aria-controls="v-pills-disabled" aria-selected="false">Digital Marketing</button>
                        <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-messages" type="button" role="tab"
                            aria-controls="v-pills-messages" aria-selected="false">Multimedia</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Event Organizer</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Brand Activation</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Web & Apps Development</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Arsitektur</button>
                        <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-settings" type="button" role="tab"
                            aria-controls="v-pills-settings" aria-selected="false">Research & Strategy</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                            aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                    </div>
                </div> --}}
        </div>
    </div>

    <!-- Our Works -->
    <div class="container" id="works">
        <h1 class="display-3 fw-bold">Our Works</h1>
        <nav class="navbar-work">
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                    type="button" role="tab" aria-controls="nav-home" aria-selected="true">Design</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Brand</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                    type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Research</button>
            </div>
        </nav>
        <div class="tab-content my-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">
                <div class="row g-0 ">
                    <div class="col-6">
                        <div class="card border-0">
                            <div class="ratio ratio-1x1">
                                <img class="card-img-top" src="{{ asset('assets/Picture/project_1.jpg') }}"
                                    alt="Project">
                            </div>
                            <div class="card-img-overlay">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0">
                            <div class="ratio ratio-1x1">
                                <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-3.jpg') }}"
                                    alt="Project">
                            </div>
                            <div class="card-img-overlay">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0">
                            <div class="ratio ratio-1x1">
                                <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-6.jpg') }}"
                                    alt="Project">
                            </div>
                            <div class="card-img-overlay">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0">
                            <div class="ratio ratio-1x1">
                                <img class="card-img-top" src="{{ asset('assets/Picture/port-team-img6.jpg') }}"
                                    alt="Project">
                            </div>
                            <div class="card-img-overlay">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"
                tabindex="0">
            </div>
            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                tabindex="0">
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div class="latest">
        <div class="container h-100 p-5">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <h1 class="display-3 fw-bold mb-4 text-white">Latest Projects</h1>

                    <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
                        <div class="carousel-inner carousel-works w-100">
                            <div class="carousel-item carousel-item-works active">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail"
                                            src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-works">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail"
                                            src="{{ asset('assets/Picture/h1-port-slider-image1.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-works">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail"
                                            src="{{ asset('assets/Picture/portfolio-home-img6.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-works">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail"
                                            src="{{ asset('assets/Picture/portfolio-home-img7.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-works">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail" src="{{ asset('assets/Picture/h1-img1 (1).jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-works">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail" src="{{ asset('assets/Picture/showcase-img2.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-works">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail"
                                            src="{{ asset('assets/Picture/port-team-img7.jpg') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item carousel-item-works">
                                <div class="col-md-3 px-3">
                                    <div class="ratio ratio-1x1">
                                        <img class="img-thumbnail" src="{{ asset('assets/Picture/h1-img2.jpg') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row h-100 text-center display-1 justify-content-center g-0 mb-5 mx-1">
        <div class="col">
            <div
                class="border-1 border-end border-start border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                <a class="link-hitam" href="">Fb</a>
            </div>
        </div>
        <div class="col">
            <div class="border-1 border-end border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                <a class="link-hitam" href="">Dr</a>
            </div>
        </div>
        <div class="col">
            <div class="border-1 border-end border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                <a class="link-hitam" href="">In</a>
            </div>
        </div>
        <div class="col">
            <div class="border-1 border-end border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                <a class="link-hitam" href="">Be</a>
            </div>
        </div>
        <div class="col">
            <div class="border-1 border-end border-dark border-top-0 border-bottom-0 border-left-0 rounder-0 my-2 py-3">
                <a class="link-hitam" href="">Pt</a>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="contact" id="contact">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-6">
                    <h1 class="display-3 fw-bold">Get in Touch!</h1>
                    <p>Kami selalu menyukai percakapan yang hangat. Kapan pun Anda ingin, kami akan dengan
                        senang
                        hati
                        menyambut
                        Anda di kantor kami. Kami bahkan dapat mengunjungi kantor Anda untuk membicarakan dan
                        berbagi
                        ide
                        bisnis
                        yang Anda butuhkan.</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126738.7641849259!2d107.58862400000001!3d-6.939935000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c42b44962d%3A0xe0107bfb2e71bb22!2sMade%20by%20Kraf.!5e0!3m2!1sen!2sus!4v1691856075405!5m2!1sen!2sus"
                        style="border:0; height:150px; width: 100%" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <h2>Bandung</h2>
                    <p><i class="fa-solid fa-location-dot"></i> Jl. Cetarip Barat No.105, Kota Bandung 40233
                    </p>
                    <p><i class="fa-solid fa-phone"></i> +62 818 21 2023</p>
                    <p><i class="fa-solid fa-envelope"></i> hi@madebykraf.com</p>
                </div>
                <div class="col-md-6">
                    <form action="">
                        <button type="submit" class="btn btn-lg btn-dark px-4 py3">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <div class="container h-100 mb-5" id="blogs">
        <div class="row h-100">
            <h1 class="display-3 fw-bold mb-4">Latest Blog Post</h1>
            <div class="col-6 col-md-3 mb-3">
                <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                    <img class="card-img" src="{{ asset('assets/Picture/blog-img-011.jpg') }}" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h3 class="pt-5 mt-5 mb-1 display-6 lh-1 fw-bold">Design</h3>
                        <p class="card-text">June 9, 2021 / Design</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                    <img class="card-img" src="{{ asset('assets/Picture/blog-img-012.jpg') }}" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h3 class="pt-5 mt-5 mb-1 display-6 lh-1 fw-bold">Quest</h3>
                        <p class="card-text">June 9, 2021 / Design</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                    <img class="card-img" src="{{ asset('assets/Picture/blog-img-013.jpg') }}" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h3 class="pt-5 mt-5 mb-1 display-6 lh-1 fw-bold">Visual</h3>
                        <p class="card-text">June 9, 2021 / Design</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                    <img class="card-img" src="{{ asset('assets/Picture/blog-img-5.jpg') }}" alt="Card image">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <h3 class="pt-5 mt-5 mb-1 display-6 lh-1 fw-bold">Digital</h3>
                        <p class="card-text">June 9, 2021 / Design</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="pt-5 border-top" style="background-color: #000;color: #fff;" data-bs-theme="dark">
        <div class="container">
            <div class="row mb-5 h-100">
                <div class="col-12 h-100">
                    <p class="text-secondary">Ready to work with us?</p>
                    <p class="display-3 responsive-font"><a href="#" class="link-putih">hi@madebykraf.com</a>
                    </p>
                </div>
            </div>
            <hr>
            <div class="row mt-5">
                <div class="col-md-5 mb-5">
                    <p class="text-secondary">
                        kraf. adalah perusahaaan agensi kreatif yang inovatif dan dinamis, berfokus pada
                        menyediakan
                        solusi
                        kreatif dan layanan pemasaran terpadu untuk berbagai klien dari berbagai industri.
                    </p>
                    <img src="{{ asset('assets/Logo/logo-k-light-ok.png') }}" alt="Logo">
                </div>
                <div class="col-4 col-md-2 mb-3 offset-md-1 ">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                        </li>
                    </ul>
                </div>

                <div class="col-4 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                        </li>
                    </ul>
                </div>

                <div class="col-4 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                        </li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Social Icons -->
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 mt-4 border-top">
                <p>&copy; 2023 Kraf. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/madebykraf"><i
                                class="fa-brands fa-instagram fa-xl"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/madebykraf"><i
                                class="fa-brands fa-facebook fa-xl"></i></a></li>
                    <li class="ms-3"><a class="link-body-emphasis" href="https://www.instagram.com/madebykraf"><i
                                class="fa-brands fa-linkedin fa-xl"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    </div>
    <!-- Back to top button -->
    <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top">
        <i class="fa-solid fa-arrow-up fa-2xl text-center" style="color: #ff5700"></i>
    </button>
@endsection

@push('scripts')
    <script>
        // Navbar
        const navEl = document.querySelector('.navbar');
        var element = document.getElementById("homee");

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar-scrolled', 'navbar-light');
                navEl.classList.remove('navbar-dark');
                element.classList.remove("active");
                $(".navbar-brand img").attr("src", "{{ asset('assets/Logo/logo-k-dark-ok.png') }}");
            } else if (window.scrollY < 56) {
                element.classList.add("active");
                navEl.classList.remove('navbar-light', 'navbar-scrolled');
                navEl.classList.add('navbar-dark');
                $(".navbar-brand img").attr("src", "{{ asset('assets/Logo/logo-k-light-ok.png') }}");
            }
        })

        // Works Carousel
        $('.carousel .carousel-item-works').each(function() {
            var minPerSlide = 4;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });

        //Back to Top Button
        let mybutton = document.getElementById("btn-back-to-top");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        mybutton.addEventListener("click", backToTop);

        function backToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
@endpush
