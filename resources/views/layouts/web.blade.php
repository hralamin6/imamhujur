<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=9">
    <meta name="description" content="Gambolthemes">
    <meta name="author" content="Gambolthemes">
    <title>Jobby - Home</title>

    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/images/fav.png">

    <link href="{{ asset('frontend') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/vendor/semantic/semantic.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.maateen.me/kalpurush/font.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @stack('css')
    @livewireStyles
    <script src="{{ asset('frontend') }}/js/jquery.min.js" defer></script>
    <script src="{{ asset('frontend') }}/js/i18n/datepicker.en.js" defer></script>
    <script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <script src="{{ asset('frontend') }}/vendor/semantic/semantic.min.js" defer></script>

</head>
<body style="font-family: 'Kalpurush', Arial, sans-serif !important; {{Config::get('app.locale')=='bn'?'font-size: 17px':'font-size: 16px'}} ">

<div class="modal srch-model fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header sheader">
                <button type="button" class="close srch-close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" class="srch-input" placeholder="Search Keywords...">
            </div>
        </div>
    </div>
</div>
@livewire('web.header-component')
@hasSection('subtitle')
<div class="title-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ol class="title-bar-text">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">@yield('title', 'Home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@yield('subtitle')</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endif
{{ $slot }}

{{--<footer style="--}}
{{--  left: 0;--}}
{{--  bottom: 0px;--}}
{{--  width: 100%;--}}
{{--  color: white;--}}
{{--  text-align: center;--}}
{{--" class="footer">--}}
{{--    <div class="subscribe-newsletter" style="bottom: 0px">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-between">--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="subcribes">--}}
{{--                        <div class="text-step1">--}}
{{--                            <h4>Subscribe to Newsletter</h4>--}}
{{--                            <div class="btext-heading mt-2" style="color:#acacac; font-size:14px;">--}}
{{--                                <i class="fas fa-check-circle"></i>Cras nunc mauris, rhoncus eu justo at, egestas sagittis felis. Ut sed feugiat eros.--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 col-md-6">--}}
{{--                    <div class="subcribe-input">--}}
{{--                        <input class="nltr-input" type="email" placeholder="Your Email Address">--}}
{{--                        <button class="s-btn">Subscribe</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="copy-social">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="copyright">--}}
{{--                        <i class="far fa-copyright"></i>Copyright 2019 <span>Jobby</span> by <a href="#">Gambolthemes</a>. All Right Reserved.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-6">--}}
{{--                    <div class="social-icons">--}}
{{--                        <ul>--}}
{{--                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</footer>--}}


<button onclick="topFunction()" id="pageup" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<script src="{{ asset('frontend') }}/js/custom1.js" defer></script>
<script>
    window.oncontextmenu = function () {
        return false;
    }
    $(document).keydown(function (event) {
        if (event.keyCode == 123) {
            return false;
        }
        else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
            return false;
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@stack('js')
<script src="{{ mix('js/app.js') }}"></script>

<x-livewire-alert::scripts />
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
</body>
</html>
