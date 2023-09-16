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
            <a class="navbar-brand" href="{{ route('home') }}">
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
                            id="homee">Beranda</button>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">Tentang Kraf.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan Kraf.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#works">Kreasi & Inovasi Kraf.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
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
            <h3 class="mb-5"><a href="mailto:hi@madebykraf.com?subject=Mail from Website"
                    class="link-putih">hi@madebykraf.com</a></h3>
            <p class="text-secondary">kraf. adalah perusahaaan agensi kreatif yang inovatif dan dinamis, berfokus pada
                menyediakan solusi
                kreatif dan layanan pemasaran terpadu untuk berbagai klien dari berbagai industri.</p>
            <img src="{{ asset('assets/Logo/logo-k-light-ok.png') }}" alt="Logo">
            <div class="mt-5">
                <h5 class="mb-2">Follow Us</h5>
                <ul class="list-unstyled d-flex">
                    <li><a class="text-white" href="https://www.instagram.com/madebykraf" target="_blank"><i
                                class="fa-brands fa-instagram fa-lg"></i></a>
                    </li>
                    <li class="ms-3"><a class="text-white" href="https://www.facebook.com/madebykraf" target="_blank"><i
                                class="fa-brands fa-facebook fa-lg"></i></a>
                    </li>
                    <li class="ms-3"><a class="text-white" href="https://www.linkedin.com/company/madebykraf/"
                            target="_blank"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" data-bs-smooth-scroll="true"
        class="scrollspy-example" tabindex="0">

        <!-- Carousel -->
        <section id="carouselMain" class="carousel carousel-main carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="{{ asset('assets/Picture/1.jpg') }}" class="d-block w-100 c-img" alt="slider_1">
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100" style="top: 0">
                        <h1 class="judul">Communication on Space</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Project -->
        <div id="Latest_Project" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#Latest_Project" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#Latest_Project" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                {{-- <button type="button" data-bs-target="#Latest_Project" data-bs-slide-to="2"
                    aria-label="Slide 3"></button> --}}
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#" target="_blank">
                        <img src="{{ asset('assets/Banner/banner-ptm.jpg') }}" class="w-100 c-banner" alt="Banner_PTM">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#" target="_blank">
                        <img src="{{ asset('assets/Banner/banner-milo.jpg') }}" class="w-100 c-banner" alt="Banner_Milo">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#Latest_Project" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#Latest_Project" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Poster Program-->
        <div class="program" id="program">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <h1 class="display-5 fw-bold mb-5">Made by Kraf.</h1>
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner px-3" role="listbox">
                                {{-- <div class="carousel-item active">
                                    <div class="col-md-3 px-2">
                                        <a href="#" target="_blank">
                                            <div class="card border-0">
                                                <div class="card-img">
                                                    <img src="{{ asset('assets/Poster/Kaloberaksi-Poster-02.webp') }}"
                                                        class="img-fluid" alt="Poster_PTM" aria-label="PTM">
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div> --}}
                                <div class="carousel-item active">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Poster/soon_poster.jpeg') }}" class="img-fluid"
                                                    alt="coming_soon" aria-label="coming soon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Poster/soon_poster.jpeg') }}" class="img-fluid"
                                                    alt="coming_soon" aria-label="coming soon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Poster/soon_poster.jpeg') }}" class="img-fluid"
                                                    alt="coming_soon" aria-label="coming soon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="col-md-3 px-2">
                                        <div class="card border-0">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/Poster/soon_poster.jpeg') }}" class="img-fluid"
                                                    alt="coming_soon" aria-label="coming soon">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="prev" aria-label="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button"
                                data-bs-slide="next" aria-label="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us -->
        <div class="about-us" id="about-us" style="color: white">
            <div class="container h-100 p-5">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <h1 class="display-5 fw-bold">Tentang Kraf.</h1>
                        <p class="text-secondary">Cerita Kami</p>
                        <hr>
                        <h2 class="about-us-text">Kami percaya agensi kreatif juga inovatif perlu berorientasi
                            pada perkembangan zaman dan terus mengikuti arus teknologi.
                            Kraf. hadir dengan tujuan untuk menghadirkan kreativitas, keberanian, dan ketangguhan dalam
                            setiap kebutuhan yang kamu perlukan.
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Services -->
        <div class="services" id="services">
            <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12">
                        <h1 class="display-5 fw-bold mb-5">Layanan Kraf.</h1>
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
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Branding/01 Research _ analysis.jpg') }}"
                                                    alt="Project">
                                                <div class="overlay"></div>
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Branding/02 Brand Identity _ Guidelines.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Branding/03 Naming.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Branding/04 Brand Positioning.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Event/04 Brand Activation.jpg') }}"
                                                    alt="Project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="design_service" role="tabpanel"
                                    aria-labelledby="design-tab_service" tabindex="0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Design/01 Logo.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Design/02 Mascot.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Design/03 Company Profile.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Design/04 Visual Identity.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Design/05 Promotion Media.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Design/06 Social Media.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Design/07 Packaging.jpg') }}"
                                                    alt="Project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="marketing_service" role="tabpanel"
                                    aria-labelledby="marketing-tab_service" tabindex="0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Marketing/01 Marketing Strategy.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Marketing/02 Digital Marketing.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Marketing/03 SEO _ SEM.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Marketing/04 Content Marketing.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Marketing/05 Social Marketing.jpg') }}"
                                                    alt="Project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="multimedia_service" role="tabpanel"
                                    aria-labelledby="multimedia-tab_service" tabindex="0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Multimedia/01 Photo _ Videography.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Multimedia/02 Motion Graphics.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Multimedia/03 Commercial Video.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Multimedia/04 Content Creation.jpg') }}"
                                                    alt="Project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="event_service" role="tabpanel"
                                    aria-labelledby="event-tab_service" tabindex="0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Event/01 Seminar.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Event/02 Meeting.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Event/03 Exhibition.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Event/04 Brand Activation.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Event/05 Promotion.jpg') }}"
                                                    alt="Project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="website_service" role="tabpanel"
                                    aria-labelledby="website-tab_service" tabindex="0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Website/01 UI_UX.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Website/02 Web Development.jpg') }}"
                                                    alt="Project">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="arsitektur_service" role="tabpanel"
                                    aria-labelledby="arsitektur-tab_service" tabindex="0">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Architecture/01 Interior _ Exterior Design.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Architecture/02 Consultation.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Architecture/03 Permit.jpg') }}"
                                                    alt="Project">
                                            </div>
                                            <div class="col-6 col-sm-2 py-2">
                                                <img class="photo-service rounded-3"
                                                    src="{{ asset('assets/Service/Architecture/04 Construction.jpg') }}"
                                                    alt="Project">
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

        <!-- Our Works -->
        <div class="container" id="works">
            <h1 class="display-5 fw-bold mb-5">Kreasi & Inovasi Kraf.</h1>
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
                                <div class="card-img-overlay d-flex">
                                    <div class="align-self-center mx-auto">
                                        <div class="loader"></div>
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
                                <div class="card-img-overlay d-flex">
                                    <div class="align-self-center mx-auto">
                                        <div class="loader"></div>
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
                                <div class="card-img-overlay d-flex">
                                    <div class="align-self-center mx-auto">
                                        <div class="loader"></div>
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
                                <div class="card-img-overlay d-flex">
                                    <div class="align-self-center mx-auto">
                                        <div class="loader"></div>
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

        <!-- Client -->
        <div class="client" id="client">
            <div class="container h-100 p-5">
                <div class="row align-items-center h-100">
                    <div class="row g-0 d-flex justify-content-center">
                        <h3 class="fw-bold text-center">Klien Kraf.</h3>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/01 ZTE.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/02 Sesko.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/03 Samsung.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/04 Podomoro.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/05 Mitshubishi.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/06 MS Glow.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/07 Summarecon.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/08 Dago.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/09 BCA.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/10 Jasa.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/11 Honda Bdg.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/12 Grab.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/13 Daihatsu.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/14 BJB.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/15 Danamon.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/16 BUMN.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/17 Djarum.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/18 HDCI.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/19 Harley Siliwangi.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                        <div class="col-3 col-md-1">
                            <img src="{{ asset('assets/Client/20 HOG.png') }}" alt="Client"
                                style="width: 100%;height: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Meet The Team -->
        <div class="container">
            <h3 class="fw-bold text-center">Tim Kraf.</h3>
            <div class="row g-0 d-flex justify-content-center">
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/alfazri.png') }}" alt="alfazri">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Alfazri</h3>
                            <p class="content-text">Director & 3D Architectur</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/mynamealfazri" target="_blank"
                                        aria-label="alfazri's instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="alfazri's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light" href="mailto:alfazri@madebykraf.com"
                                        aria-label="alfazri's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/enza.png') }}" alt="enza">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Encep Zainul</h3>
                            <p class="content-text">Art & Creative</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/enzanimous" target="_blank"
                                        aria-label="enza's instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="enza's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                <li class="ms-3"><a class="link-light" href="mailto:enza@madebykraf.com"
                                        aria-label="enza's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/thio.jpeg') }}" alt="thio">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Thio Agus</h3>
                            <p class="content-text">Graphic Designer</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/thioaguss" target="_blank"
                                        aria-label="thio's instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="thio's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                <li class="ms-3"><a class="link-light" href="mailto:thio@madebykraf.com"
                                        aria-label="thio's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/aris.jpg') }}" alt="aris">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Aris Resmono</h3>
                            <p class="content-text">Video & Photography</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/arisresmonoo" target="_blank"
                                        aria-label="aris's instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="aris's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                <li class="ms-3"><a class="link-light" href="mailto:aris@madebykraf.com"
                                        aria-label="aris's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/surya.png') }}" alt="surya">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Surya Dinarta</h3>
                            <p class="content-text">IT Developer</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/surya_dnrt" target="_blank"
                                        aria-label="surya's instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light" href="https://www.linkedin.com/in/suryadinarta"
                                        target="_blank" aria-label="surya's linkedin"><i
                                            class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                <li class="ms-3"><a class="link-light" href="mailto:surya@madebykraf.com"
                                        aria-label="surya's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/fadjar.png') }}" alt="fadjar">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Fadjar Maulana</h3>
                            <p class="content-text">Content Creator</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/fadjarmlna" target="_blank"
                                        aria-label="fadjar's instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="fadjar's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light" href="mailto:fadjar@madebykraf.com"
                                        aria-label="fadjar's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/adil.png') }}" alt="adil">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Adil Poetra</h3>
                            <p class="content-text">Illustrator</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/adilpoetra" target="_blank"
                                        aria-label="adil's instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="adil's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light" href="mailto:adil@madebykraf.com"
                                        aria-label="adil's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/rio.png') }}" alt="rio">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Rio Tubagus</h3>
                            <p class="content-text">Animator</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/riotubaguspratama"
                                        target="_blank" aria-label="rio's instagram"><i
                                            class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="rio's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a></li>
                                <li class="ms-3"><a class="link-light" href="mailto:rio@madebykraf.com"
                                        aria-label="rio's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-2 p-2">
                    <div class="content image">
                        <div class="content-overlay"></div> <img class="content-image"
                            src="{{ asset('assets/Profile/ilham_alt.png') }}" alt="ilham">
                        <div class="content-details fadeIn-bottom">
                            <h3 class="content-title">Muhammad Ilham</h3>
                            <p class="content-text">Account Executive</p>
                            <ul class="list-unstyled d-flex justify-content-center">
                                <li><a class="link-light" href="https://www.instagram.com/m.ilhammv" target="_blank"
                                        aria-label="Ilham's Instagram"><i class="fa-brands fa-instagram fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light"
                                        href="https://www.linkedin.com/company/madebykraf/" target="_blank"
                                        aria-label="ilham's linkedin"><i class="fa-brands fa-linkedin fa-lg"></i></a>
                                </li>
                                <li class="ms-3"><a class="link-light" href="mailto:ilham@madebykraf.com"
                                        aria-label="ilham's email"><i class="fa-solid fa-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="mt-5" id="contact">
            <div class="row w-100 g-0">
                <div class="col-sm-8" style="background-color: #000;color: #fff;height: 100vh;">
                    <div class="container h-100 px-5">
                        <div class="row align-items-center h-100">
                            <div class="col-12">
                                <div class="row mb-5 h-100">
                                    <div class="col-12 h-100">
                                        <p class="text-secondary mt-5">Siap bekerja bersama kraf.?</p>
                                        <p class="display-3 responsive-font"><a
                                                href="mailto:hi@madebykraf.com?subject=Mail from Website"
                                                class="link-putih">hi@madebykraf.com</a>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-5">
                                    <div class="col-md-5 mb-5">
                                        <p class="text-secondary mb-5">
                                            kraf. adalah perusahaaan agensi kreatif yang inovatif dan dinamis, berfokus pada
                                            menyediakan
                                            solusi
                                            kreatif dan layanan pemasaran terpadu untuk berbagai klien dari berbagai
                                            industri.
                                        </p>
                                        <img src="{{ asset('assets/Logo/logo-k-light-ok.png') }}" alt="Logo">
                                    </div>
                                    <div class="col-md-3"></div>
                                    <div class="col-6 col-md-2 mb-3">
                                        <h5>Layanan Kraf.</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item mb-2"><a href="#services"
                                                    class="nav-link p-0 text-secondary">Branding</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#services"
                                                    class="nav-link p-0 text-secondary">Design</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#services"
                                                    class="nav-link p-0 text-secondary">Multimedia</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#services"
                                                    class="nav-link p-0 text-secondary">Website</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#services"
                                                    class="nav-link p-0 text-secondary">Event</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#services"
                                                    class="nav-link p-0 text-secondary">Arsitektur</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="col-6 col-md-2 mb-3">
                                        <h5>Kreasi & Inovasi Kraf.</h5>
                                        <ul class="nav flex-column">
                                            <li class="nav-item mb-2"><a href="#works"
                                                    class="nav-link p-0 text-secondary">Branding</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#works"
                                                    class="nav-link p-0 text-secondary">Design</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#works"
                                                    class="nav-link p-0 text-secondary">Multimedia</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#works"
                                                    class="nav-link p-0 text-secondary">Website</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#works"
                                                    class="nav-link p-0 text-secondary">Event</a>
                                            </li>
                                            <li class="nav-item mb-2"><a href="#works"
                                                    class="nav-link p-0 text-secondary">Arsitektur</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4" style="background-color: #ff5700;color: #000;height: 100vh;">
                    <div class="container h-100 px-5">
                        <div class="row align-items-center h-100">
                            <div class="col-12">
                                <h1 class="display-6 fw-bold mb-5">Hubungi kraf.</h1>
                                <p class="mb-5">Kami akan dengan senang hati menyambut Anda di kantor kami. Kami
                                    bahkan dapat
                                    mengunjungi kantor
                                    Anda
                                    untuk membicarakan dan
                                    berbagi ide bisnis yang Anda butuhkan.</p>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7981461943214!2d107.6348591!3d-6.9147210999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c42b44962d%3A0xe0107bfb2e71bb22!2sMade%20by%20Kraf.!5e0!3m2!1sid!2sid!4v1693218264202!5m2!1sid!2sid"
                                    style="border:0; height:150px; width: 100%" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade" title="Maps">
                                </iframe>
                                <h3 class="mt-5">Grha PHRI Jabar</h3>
                                <p style="font-size: 14px"><i class="fa-solid fa-location-dot"></i> Jl. Sukabumi No. 42,
                                    Kacapiring, Kota
                                    Bandung, Jawa
                                    Barat 40233
                                </p>
                                <p style="font-size: 14px"><i class="fa-solid fa-phone"></i> +62 818 21 2023</p>
                                <p style="font-size: 14px"><i class="fa-solid fa-envelope"></i> hi@madebykraf.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to top button -->
    <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top" aria-label="Back to Top">
        <i class="fas fa-angle-up fa-2xl text-center" style="color: #ff5700"></i>
    </button>
    <!-- Whatsapp button -->
    <button type="button" class="btn btn-dark btn-floating btn-lg border-0" id="whatsapp" aria-label="Whatsapp">
        <a href="https://wa.me/62818212023" target="_blank"><i class="fa-brands fa-whatsapp fa-2xl text-center"
                style="color: #fff;margin-top: 10px;"></i></a>
    </button>
    <!-- Offcanvas button -->
    <button class="btn btn-dark btn-floating btn-lg" type="button" id="offcanvas" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="Offcanvas">
        <i class="fas fa-angle-left fa-2xl" style="color: #ff5700"></i>
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

        //Back to Top Button
        let mybutton = document.getElementById("btn-back-to-top");
        let wabutton = document.getElementById("whatsapp");

        window.onscroll = function() {
            scrollFunction();
        };

        function scrollFunction() {
            if (
                document.body.scrollTop > 20 ||
                document.documentElement.scrollTop > 20
            ) {
                mybutton.style.display = "block";
                wabutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
                wabutton.style.display = "none";
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
