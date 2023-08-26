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
                                class="fa-brands fa-instagram fa-lg"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis text-white"
                            href="https://www.facebook.com/madebykraf"><i class="fa-brands fa-facebook fa-lg"></i></a>
                    </li>
                    <li class="ms-3"><a class="link-body-emphasis text-white"
                            href="https://www.linkedin.com/company/madebykraf/"><i
                                class="fa-brands fa-linkedin fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" data-bs-smooth-scroll="true"
        class="scrollspy-example" tabindex="0">

        <!-- Carousel -->
        <section id="carouselMain" class="carousel carousel-main carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="{{ asset('assets/Picture/1.jpg') }}" class="d-block w-100 c-img" alt="slider_1">
                    <div class="carousel-caption d-flex h-100 align-items-end padding-bottom">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="judul">Attractive design from concept to final result</h1>
                                <a href="#" class="btn btn btn-dark uppercase px-4 py-3">View More <i
                                        class="fa-solid fa-arrow-right" style="color: #ff5700"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('assets/Picture/2.jpg') }}" class="d-block w-100 c-img" alt="slider_2">
                    <div
                        class="carousel-caption d-flex h-100 align-items-end justify-content-start text-left padding-bottom">

                        <div class="row">
                            <div class="col-12">
                                <h1 class="judul">Attractive design from concept to final result</h1>
                                <a href="#" class="btn btn btn-dark uppercase px-4 py-3">View More <i
                                        class="fa-solid fa-arrow-right" style="color: #ff5700"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="{{ asset('assets/Picture/3.jpg') }}" class="d-block w-100 c-img" alt="slider_3">
                    <div
                        class="carousel-caption d-flex h-100 align-items-end justify-content-start text-left padding-bottom">

                        <div class="row">
                            <div class="col-12">
                                <h1 class="judul">Project tactics and strategies for all agencies
                                </h1>
                                <a href="#" class="btn zbtn btn-dark uppercase px-4 py-3">View More <i
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

        <!-- About Us -->
        <div class="about-us" id="about-us" style="color: white">
            <div class="container h-100 p-5">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <h1 class="display-5 fw-bold">About Us</h1>
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

        <!-- Our Services -->
        <div class="services padding-kraf" id="services">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <h1 class="display-5 fw-bold mb-3">Our Services</h1>
                        <div class="d-flex align-items-start serv">
                            <div class="nav navbar-services nav-pills flex-column" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <button class="nav-link text-start show active my-2" id="branding_service-tab"
                                    data-bs-toggle="pill" data-bs-target="#branding_service" type="button"
                                    role="tab" aria-controls="branding_service"
                                    aria-selected="true">Branding</button>
                                <button class="nav-link text-start my-2" id="design_service-tab" data-bs-toggle="pill"
                                    data-bs-target="#design_service" type="button" role="tab"
                                    aria-controls="design_service" aria-selected="false">Design</button>
                                <button class="nav-link text-start my-2" id="marketing_service-tab" data-bs-toggle="pill"
                                    data-bs-target="#marketing_service" type="button" role="tab"
                                    aria-controls="marketing_service" aria-selected="false">Marketing</button>
                                <button class="nav-link text-start my-2" id="multimedia_service-tab"
                                    data-bs-toggle="pill" data-bs-target="#multimedia_service" type="button"
                                    role="tab" aria-controls="multimedia_service"
                                    aria-selected="false">Multimedia</button>
                                <button class="nav-link text-start my-2" id="event_service-tab" data-bs-toggle="pill"
                                    data-bs-target="#event_service" type="button" role="tab"
                                    aria-controls="event_service" aria-selected="false">Event</button>
                                <button class="nav-link text-start my-2" id="website_service-tab" data-bs-toggle="pill"
                                    data-bs-target="#website_service" type="button" role="tab"
                                    aria-controls="website_service" aria-selected="false">Website</button>
                                <button class="nav-link text-start my-2" id="arsitektur_service-tab"
                                    data-bs-toggle="pill" data-bs-target="#arsitektur_service" type="button"
                                    role="tab" aria-controls="arsitektur_service"
                                    aria-selected="false">Arsitektur</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="branding_service" role="tabpanel"
                                    aria-labelledby="branding_service-tab" tabindex="0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-sm-3 py-2">
                                                <img class="card-img-top"
                                                    src="{{ asset('assets/Picture/project_1.jpg') }}" alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-3 py-2">
                                                <img class="card-img-top"
                                                    src="{{ asset('assets/Picture/project_1.jpg') }}" alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-3 py-2">
                                                <img class="card-img-top"
                                                    src="{{ asset('assets/Picture/project_1.jpg') }}" alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-3 py-2">
                                                <img class="card-img-top"
                                                    src="{{ asset('assets/Picture/project_1.jpg') }}" alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-3 py-2">
                                                <img class="card-img-top"
                                                    src="{{ asset('assets/Picture/project_1.jpg') }}" alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-3 py-2">
                                                <img class="card-img-top"
                                                    src="{{ asset('assets/Picture/project_1.jpg') }}" alt="Project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="design_service" role="tabpanel"
                                    aria-labelledby="design-tab_service" tabindex="0">Jelaskan tentang design</div>
                                <div class="tab-pane fade" id="marketing_service" role="tabpanel"
                                    aria-labelledby="marketing-tab_service" tabindex="0">Jelaskan tentang marketing
                                </div>
                                <div class="tab-pane fade" id="multimedia_service" role="tabpanel"
                                    aria-labelledby="multimedia-tab_service" tabindex="0">Jelaskan tentang multimedia
                                </div>
                                <div class="tab-pane fade" id="event_service" role="tabpanel"
                                    aria-labelledby="event-tab_service" tabindex="0">Jelaskan tentang event</div>
                                <div class="tab-pane fade" id="website_service" role="tabpanel"
                                    aria-labelledby="website-tab_service" tabindex="0">Jelaskan tentang website</div>
                                <div class="tab-pane fade" id="arsitektur_service" role="tabpanel"
                                    aria-labelledby="arsitektur-tab_service" tabindex="0">Jelaskan tentang arsitektur
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Works -->
        <div class="container padding-kraf" id="works">
            <h1 class="display-5 fw-bold">Our Works</h1>
            <nav class="navbar-work">
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="branding-tab" data-bs-toggle="tab" data-bs-target="#branding"
                        type="button" role="tab" aria-controls="branding" aria-selected="false">Branding</button>
                    <button class="nav-link" id="design-tab" data-bs-toggle="tab" data-bs-target="#design"
                        type="button" role="tab" aria-controls="design" aria-selected="true">Design</button>
                    <button class="nav-link" id="multimedia-tab" data-bs-toggle="tab" data-bs-target="#multimedia"
                        type="button" role="tab" aria-controls="multimedia"
                        aria-selected="false">Multimedia</button>
                    <button class="nav-link" id="website-tab" data-bs-toggle="tab" data-bs-target="#website"
                        type="button" role="tab" aria-controls="website" aria-selected="false">Website</button>
                    <button class="nav-link" id="event-tab" data-bs-toggle="tab" data-bs-target="#event" type="button"
                        role="tab" aria-controls="event" aria-selected="false">Event</button>
                    <button class="nav-link" id="arsitektur-tab" data-bs-toggle="tab" data-bs-target="#arsitektur"
                        type="button" role="tab" aria-controls="arsitektur"
                        aria-selected="false">Arsitektur</button>
                </div>
            </nav>
            <div class="tab-content my-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="branding" role="tabpanel" aria-labelledby="branding-tab"
                    tabindex="0">
                    <div class="row g-0 work">
                        <img src="{{ asset('assets/Logo/port-list-logo.jpg') }}" alt="kraf" class="kraf-center">
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/project_1.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-3.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-6.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                    <div class="row g-0 work">
                        <img src="{{ asset('assets/Logo/port-list-logo.jpg') }}" alt="kraf" class="kraf-center">
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/project_1.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-3.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-6.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="multimedia" role="tabpanel" aria-labelledby="multimedia-tab"
                    tabindex="0">
                    <div class="row g-0 work">
                        <img src="{{ asset('assets/Logo/port-list-logo.jpg') }}" alt="kraf" class="kraf-center">
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/project_1.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-3.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-6.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="website" role="tabpanel" aria-labelledby="website-tab" tabindex="0">
                    <div class="row g-0 work">
                        <img src="{{ asset('assets/Logo/port-list-logo.jpg') }}" alt="kraf" class="kraf-center">
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/project_1.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-3.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-6.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="event" role="tabpanel" aria-labelledby="event-tab" tabindex="0">
                    <div class="row g-0 work">
                        <img src="{{ asset('assets/Logo/port-list-logo.jpg') }}" alt="kraf" class="kraf-center">
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/project_1.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-3.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-6.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="arsitektur" role="tabpanel" aria-labelledby="arsitektur-tab"
                    tabindex="0">
                    <div class="row g-0 work">
                        <img src="{{ asset('assets/Logo/port-list-logo.jpg') }}" alt="kraf" class="kraf-center">
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/project_1.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-3.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 work-padding">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/blog-img-6.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card border-0">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                        alt="Project">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="d-flex flex-column h-100 text-white text-shadow-1 justify-content-end">
                                        <h4 style="font-size: 2vw;">We Build Great Things</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel -->
        <div class="latest">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <h1 class="display-5 fw-bold mb-4 text-white">Latest Projects</h1>

                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                            {{-- <div class="card-img-overlay">Slide 1</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                            {{-- <div class="card-img-overlay">Slide 2</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                            {{-- <div class="card-img-overlay">Slide 3</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                            {{-- <div class="card-img-overlay">Slide 4</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                            {{-- <div class="card-img-overlay">Slide 5</div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Picture/h1-port-list-img4.jpg') }}"
                                                    class="img-fluid">
                                            </div>
                                            {{-- <div class="card-img-overlay">Slide 6</div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- SOSMED --}}
        {{-- <div class="row h-100 text-center display-1 justify-content-center g-0 mb-5 mx-1">
            <div class="col">
                <div
                    class="border-1 border-end border-start border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                    <a class="link-hitam" href="">Fb</a>
                </div>
            </div>
            <div class="col">
                <div
                    class="border-1 border-end border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                    <a class="link-hitam" href="">Dr</a>
                </div>
            </div>
            <div class="col">
                <div
                    class="border-1 border-end border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                    <a class="link-hitam" href="">In</a>
                </div>
            </div>
            <div class="col">
                <div
                    class="border-1 border-end border-dark border-top-0 border-bottom-0 border-right-0 rounder-0 my-2 py-3">
                    <a class="link-hitam" href="">Be</a>
                </div>
            </div>
            <div class="col">
                <div
                    class="border-1 border-end border-dark border-top-0 border-bottom-0 border-left-0 rounder-0 my-2 py-3">
                    <a class="link-hitam" href="">Pt</a>
                </div>
            </div>
        </div> --}}

        <!-- Contact Us -->
        <div class="contact padding-kraf" id="contact">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bold">Get in Touch!</h1>
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
                        <h2>Grha PHRI Jabar</h2>
                        <p><i class="fa-solid fa-location-dot"></i> Jl. Sukabumi No. 42, Kacapiring, Kota Bandung, Jawa
                            Barat 40233
                        </p>
                        <p><i class="fa-solid fa-phone"></i> +62 818 21 2023</p>
                        <p><i class="fa-solid fa-envelope"></i> hi@madebykraf.com</p>
                    </div>
                    <div class="col-md-6">
                        <form action="">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="name" placeholder="Email">
                            </div>
                            <div class="mb-5">
                                <textarea class="form-control" placeholder="Your Message" id="message" style="height: 250px"></textarea>
                            </div>
                            <button type="submit" class="btn btn-lg btn-dark px-4 py3">Send message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet The Team -->
        <div class="team padding-kraf" id="team">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <h1 class="display-5 fw-bold mb-3">Meet the Team</h1>

                    <div id="carouselTeam" class="carousel carouselTeam carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/alfazri.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Director & 3D Architectur</h6>
                                            <p style="font-size: 2vh">Alfazri</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/mynamealfazri"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:alfazri@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/enza.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Art & Creative</h6>
                                            <p style="font-size: 2vh">Encep Zainul</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/enzanimous"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:enza@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/aris.jpg') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Video & Photography</h6>
                                            <p style="font-size: 2vh">Aris Resmono</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/mynamealfazri"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:aris@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/thio.jpeg') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Graphic Designer</h6>
                                            <p style="font-size: 2vh">Thio Agus</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/thioaguss"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:thio@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/rio.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Animator</h6>
                                            <p style="font-size: 2vh">Rio Tubagus</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/mynamealfazri"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:rio@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/adil.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Illustrator</h6>
                                            <p style="font-size: 2vh">Adil Poetra</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/mynamealfazri"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:adil@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/surya.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">IT Developer</h6>
                                            <p style="font-size: 2vh">Surya Dinarta</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/surya_dnrt"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:surya@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/fadjar.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Content Creator</h6>
                                            <p style="font-size: 2vh">Fadjar Maulana</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/fadjarmlna"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:fajar@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-3 mb-3">
                                    <div class="card bg-dark border-0 h-100 mx-3">
                                        <img src="{{ asset('assets/Profile/ilham.png') }}" class="card-img-top"
                                            alt="team">
                                        <div class="card-body text-white lh-1">
                                            <h6 class="text-secondary">Account Executive</h6>
                                            <p style="font-size: 2vh">Muhammad Ilham</p>
                                            <ul class="list-unstyled d-flex">
                                                <li><a class="link-light" href="https://www.instagram.com/m.ilhammv"
                                                        target="_blank"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                                </li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="https://www.linkedin.com/company/madebykraf/"><i
                                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                                <li class="ms-3"><a class="link-light"
                                                        href="mailto:ilham@madebykraf.com"><i
                                                            class="fa-solid fa-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#carouselTeam" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#carouselTeam" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Blog -->
        <div class="container padding-kraf h-100 my-5" id="blogs">
            <div class="row h-100">
                <h1 class="display-5 fw-bold mb-4">Latest Blog Post</h1>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                        <img class="card-img" src="{{ asset('assets/Picture/blog-img-011.jpg') }}" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h2 class="pt-5 mt-5 mb-1 lh-1 fw-bold">Design</h2>
                            <p style="font-size: 2vh">June 9, 2021 / Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                        <img class="card-img" src="{{ asset('assets/Picture/blog-img-012.jpg') }}" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h2 class="pt-5 mt-5 mb-1 lh-1 fw-bold">Quest</h2>
                            <p style="font-size: 2vh">June 9, 2021 / Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                        <img class="card-img" src="{{ asset('assets/Picture/blog-img-013.jpg') }}" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h2 class="pt-5 mt-5 mb-1 lh-1 fw-bold">Visual</h2>
                            <p style="font-size: 2vh">June 9, 2021 / Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 mb-3">
                    <div class="card text-bg-dark rounded-4 shadow-lg border-0">
                        <img class="card-img" src="{{ asset('assets/Picture/blog-img-5.jpg') }}" alt="Card image">
                        <div class="card-img-overlay d-flex flex-column justify-content-end">
                            <h2 class="pt-5 mt-5 mb-1 lh-1 fw-bold">Digital</h2>
                            <p style="font-size: 2vh">June 9, 2021 / Design</p>
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
                        <h5>Menu</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#about-us" class="nav-link p-0 text-body-secondary">About
                                    Us</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#services"
                                    class="nav-link p-0 text-body-secondary">Services</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#works"
                                    class="nav-link p-0 text-body-secondary">Works</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#contact"
                                    class="nav-link p-0 text-body-secondary">Contact</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#blogs"
                                    class="nav-link p-0 text-body-secondary">Blogs</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5>Our Works</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#works"
                                    class="nav-link p-0 text-body-secondary">Branding</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#works"
                                    class="nav-link p-0 text-body-secondary">Design</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#works"
                                    class="nav-link p-0 text-body-secondary">Multimedia</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#works"
                                    class="nav-link p-0 text-body-secondary">Website</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#works"
                                    class="nav-link p-0 text-body-secondary">Event</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#works"
                                    class="nav-link p-0 text-body-secondary">Arsitektur</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-4 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-body-secondary">Home</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-body-secondary">Features</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-body-secondary">FAQs</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#"
                                    class="nav-link p-0 text-body-secondary">About</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Social Icons -->
                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 pe-5 mt-4 border-top">
                    <p>&copy; 2023 Kraf. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis"
                                href="https://www.instagram.com/madebykraf"><i
                                    class="fa-brands fa-instagram fa-lg"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/madebykraf"><i
                                    class="fa-brands fa-facebook fa-lg"></i></a></li>
                        <li class="ms-3"><a class="link-body-emphasis"
                                href="https://www.linkedin.com/company/madebykraf/"><i
                                    class="fa-brands fa-linkedin fa-lg"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <!-- Back to top button -->
    <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top">
        <i class="fa-solid fa-arrow-up fa-2xl text-center" style="color: #ff5700"></i>
    </button>
    <!-- Whatsapp button -->
    <button class="btn btn-floating btn-lg" id="whatsapp">
        <a href="https://wa.me/62818212023" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl text-center"
                style="color: #fff;margin-top: 10px;"></i></a>
    </button>
@endsection

@push('scripts')
    <script>
        // Navbar
        const navEl = document.querySelector('.navbar');
        var element = document.getElementById("homee");

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                element.classList.remove("active");
                navEl.classList.add('navbar-scrolled', 'navbar-light');
                navEl.classList.remove('navbar-dark');
                $(".navbar-brand img").attr("src", "{{ asset('assets/Logo/logo-k-dark-ok.png') }}");
            } else if (window.scrollY < 56) {
                element.classList.add("active");
                navEl.classList.remove('navbar-light', 'navbar-scrolled');
                navEl.classList.add('navbar-dark');
                $(".navbar-brand img").attr("src", "{{ asset('assets/Logo/logo-k-light-ok.png') }}");
            }
        })

        // services Carousel
        let services = document.querySelectorAll('#services-carousel .carousel-item')

        services.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = services[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
        // services Carousel
        let services2 = document.querySelectorAll('#services-carousel-2 .carousel-item')

        services.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = services2[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        // Works Carousel
        let items = document.querySelectorAll('#recipeCarousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

        let test = document.querySelectorAll('#carouselTeam .carousel-item')

        test.forEach((el) => {
            const minPerSlide = 4
            let next = el.nextElementSibling
            for (var i = 1; i < minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = test[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })

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
