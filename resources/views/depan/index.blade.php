<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('depan/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('depan/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('depan/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('depan/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('depan/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('depan/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('depan/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('depan/css/style.css') }}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                    <div class="tip">2</div>
                </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                    <div class="tip">2</div>
                </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="/"><img src="{{ asset('depan/img/logo.png') }}" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('depan.header')
    <!-- Header Section End -->

    @yield('content')

    <!-- Footer Section Begin -->
    @include('depan.footer')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('depan/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('depan/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('depan/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('depan/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('depan/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('depan/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('depan/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('depan/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('depan/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('depan/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.logout').on('click', function() {
                // console.log('keluar');
                let TOKEN = $("meta[name='csrf-token']").attr("content");
                $.ajax({
                    url: "{{ route('logout') }}",
                    type: 'POST',
                    data: {
                        '_token': TOKEN,
                    },
                    success: function(res) {
                        location.reload();
                    }
                })
            })
        })
    </script>
</body>

</html>
