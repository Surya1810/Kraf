<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Kami percaya agensi kreatif juga inovatif perlu berorientasi pada perkembangan zaman dan terus mengikuti arus teknologi. Kraf. hadir dengan tujuan untuk menghadirkan kreativitas, keberanian, dan ketangguhan dalam setiap kebutuhan yang kamu perlukan.">
    <meta name="keywords" content="Event Organizer, Bandung, Kraf, Event">
    <meta name="author" content="Kraf">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kraf. | @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Syne:bold,light">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/FontAwesome/6.2.1/css/all.min.css') }}">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <!-- Our style -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons//ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    @stack('css')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-6JKTLNZ6FF"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-6JKTLNZ6FF');
    </script>
</head>

<body>
    @yield('content')

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        /*! Normalized address bar hiding for iOS & Android (c) @scottjehl MIT License */
        (function(win) {
            var doc = win.document;

            // If there's a hash, or addEventListener is undefined, stop here
            if (!win.navigator.standalone && !location.hash && win.addEventListener) {

                //scroll to 1
                win.scrollTo(0, 1);
                var scrollTop = 1,
                    getScrollTop = function() {
                        return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop ||
                            doc.body.scrollTop || 0;
                    },

                    //reset to 0 on bodyready, if needed
                    bodycheck = setInterval(function() {
                        if (doc.body) {
                            clearInterval(bodycheck);
                            scrollTop = getScrollTop();
                            win.scrollTo(0, scrollTop === 1 ? 0 : 1);
                        }
                    }, 15);

                win.addEventListener("load", function() {
                    setTimeout(function() {
                        //at load, if user hasn't scrolled more than 20 or so...
                        if (getScrollTop() < 20) {
                            //reset to hide addr bar at onload
                            win.scrollTo(0, scrollTop === 1 ? 0 : 1);
                        }
                    }, 0);
                }, false);
            }
        })(this);
    </script>
    @stack('scripts')

</body>

</html>
