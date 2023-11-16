@extends('layout')

@section('title')
    Communication on Space
@endsection

@push('css')
    <style>
        @media (min-width: 768px) {
            .post-image {
                height: 75svh;
                object-fit: cover;
            }
        }
    </style>
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
                        <a class="nav-link" href="{{ route('home') }}" id="homee">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Tentang Kraf.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Layanan Kraf.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Kreasi & Inovasi Kraf.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Kontak</a>
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

    <img src="{{ asset('storage/post/' . $post->image) }}" class="img-fluid w-100 post-image " alt="{{ $post->title }}">

    <!-- Meet The Team -->
    <div class="container" id="works">
        <div class="row align-items-center h-100">
            <div class="col-lg-12">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on
                            {{ $post->updated_at->toFormattedDateString('d/m/y') }} by {{ $post->user->name }}
                        </div>
                        <!-- Post tags-->
                        <span class="badge bg-secondary text-decoration-none link-light">{{ $post->category }}</span>
                    </header>
                    {{-- <!-- Preview image figure-->
                        <figure class="mb-4"><img class="img-fluid rounded"
                                src="https://dummyimage.com/900x400/ced4da/6c757d.jpg" alt="..." />
                        </figure> --}}
                    <!-- Post content-->
                    <section class="mb-5">
                        {!! html_entity_decode($post->body) !!}
                    </section>
                    <!-- Post tags-->
                    @php
                        $tags = explode(',', $post->tag);
                    @endphp
                    @foreach ($tags as $tag)
                        <span class="badge bg-secondary text-decoration-none link-light">{{ $tag }}</span>
                    @endforeach
                </article>
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
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#services' }}"
                                                class="nav-link p-0 text-secondary">Branding</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#services' }}"
                                                class="nav-link p-0 text-secondary">Design</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#services' }}"
                                                class="nav-link p-0 text-secondary">Multimedia</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#services' }}"
                                                class="nav-link p-0 text-secondary">Website</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#services' }}"
                                                class="nav-link p-0 text-secondary">Event</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#services' }}"
                                                class="nav-link p-0 text-secondary">Arsitektur</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-6 col-md-2 mb-3">
                                    <h5>Kreasi & Inovasi Kraf.</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#works' }}"
                                                class="nav-link p-0 text-secondary">Branding</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#works' }}"
                                                class="nav-link p-0 text-secondary">Design</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#works' }}"
                                                class="nav-link p-0 text-secondary">Multimedia</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#works' }}"
                                                class="nav-link p-0 text-secondary">Website</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#works' }}"
                                                class="nav-link p-0 text-secondary">Event</a>
                                        </li>
                                        <li class="nav-item mb-2"><a href="{{ route('home') . '#works' }}"
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
