<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@lang('lang.tbasheer')</title>

    <!--Link Icon Title-->
    <link href="img/favicon.png" rel="icon">

    <!-- font awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/font-awesome.min.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css') }}">

    <!--font google-->
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,700" rel="stylesheet">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">

    <!-- vendor min  css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/vendor.min.css') }}">

    <!-- min styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/min.min.css') }}">

    <!-- font arbic -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" type="text/css" href="{{ asset('file/fileinput.min.css') }}">

    <!-- noty -->
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

    @if (app()->getLocale() == 'ar')

        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap-rtl/css/bootstrap-rtl.css') }}">

        <link rel="stylesheet" href="{{ asset('dashboard_files/css/font-awesome.min.css') }}">
    @else

    <!-- font awesome -->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/font-awesome.min.css') }}">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.min.css') }}">

    @endif
</head>
<body>




<section id="banner">

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">  
                <!-- <div class="text"> funnyText.js</div> -->
        <a id="ali" class="navbar-brand text-white font-weight-bold pl-2 mySelector" style="font-size: 40px"
           href="/">@lang('lang.tbasheer')</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse col-auto " id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">

                <li class="nav-item">
                    <a class="nav-link active wow bounceInUp" data-wow-duration="6s" href="/">@lang('lang.home') <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link wow bounceInLeft" data-wow-duration="6s" href="#about">@lang('lang.about')<span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link wow bounceInLeft" data-wow-duration="6s" href="#service">    <span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link wow bounceInLeft" data-wow-duration="6s"
                       href="#footer-newsletter">@lang('lang.on')<span
                            class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle wow bounceInLeft" data-wow-duration="6s" href="#"
                       id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('lang.Language')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a rel="alternate" class="dropdown-item" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link wow bounceInLeft" data-wow-duration="6s" href="#footer">@lang('lang.contactus')
                        <span
                            class="sr-only">(current)</span></a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto">

                @auth

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('dashboard.welcome') }}">@lang('lang.dashboard')</a>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">@lang('lang.logout')</a>
                         </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form> 
                    </li>
                @else
                    <a href="{{ route('login') }}" class="mr-3 btn btn-light wow bounceIn" data-wow-duration="6s"><i
                            class="fa fa-user text"></i> @lang('lang.login')</a>
                    <a href="{{ route('register') }}" class="mr-3 btn btn-outline-light wow bounceIn"
                       data-wow-duration="6s"><i
                            class="fa fa-user-plus"></i>
                        @lang('lang.register')</a>
                @endauth
            </ul>
        </div>
        </div>
    </nav><!--end of navbar-->

</section> <!--end of banner section-->
@include('partials._session')

@yield('content')


<footer id="footer" class="bg-dark text-white pt-5 pb-5">

    <h2 class="text-center pb-4">@lang('lang.contactus')</h2>

    <div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-6 wow bounceInLeft" data-wow-duration="4s"><h3><i
                        class="fa fa-eye mr-2"></i> @lang('lang.tbasheer')</h3>
                <p> @lang('lang.ser')</p>
            </div><!--end of col-->


            <div class="col-lg-6 col-md-6 footer-contact wow bounceInRight" data-wow-duration="4s">
                <h4>@lang('lang.contactus')</h4>
                <p>@lang('lang.sk')</p>
                <p><i class="fa fa-map-marker mr-2"></i> @lang('lang.mns')<br>
                    <strong><i class="fa fa-phone mr-2"></i> @lang('lang.Phone'):</strong> +249 0912905226 -
                    +249123853358<br>
                    <strong><i class="fa fa-envelope mr-2"></i> @lang('lang.Email'):</strong>
                    tbasheer@gmail.com<br>
                    <strong><i class="fa fa-whatsapp mr-2"></i> @lang('lang.Whatsapp'):</strong> +249 123853358<br><br>
                </p>

            </div><!--end of col-->

        </div><!--end of row-->

    </div><!--end of container-->

</footer>   <!--end of footer-->

<section class="bg-primary text-center p-3">
    <a href="" class="text-white mr-2"><i class="fa fa-facebook fa-1x fa-2x wow flip" data-wow-duration="5s"></i></a>
    <a href="" class="text-white mr-2"><i class="fa fa-youtube-play fa-2x wow flip" data-wow-duration="5s"></i></a>
    <a href="" class="text-white mr-2"><i class="fa fa-twitter fa-2x wow flip" data-wow-duration="5s"></i></a>
</section><!--end og mulite meduy-->


<script src="{{ asset('dist/js/jquery-3.3.1.min.js') }}"></script>

<!-- bootstrap -->
<script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>

<!-- vendor  js -->
<script src="{{ asset('dist/js/vendor.min.js') }}"></script>

<!-- min scripts -->
<script src="{{ asset('dist/js/main.min.js') }}"></script>

<!-- file min scripts -->
<script src="{{ asset('file/fileinput.min.js') }}"></script>
<script src="{{ asset('file/theme.min.js') }}"></script>
<script src="{{ asset('file/paper-full.min.js') }}"></script>

<script>
    wow = new WOW(
        {
            // boxClass:     'wow',      // default
            // animateClass: 'animated', // default
            offset: 3,          // default
            mobile: true,       // default
            live: true        // default
            // data-wow-iteration="2" /*Loop*/
        },
    );
    wow.init();
</script>

</body>
</html>
