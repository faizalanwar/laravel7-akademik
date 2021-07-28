<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{asset('admin/')}}/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">

                </div>


                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>

                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">

                    <ul class="header-menu nav">
                        <li class="nav-item">
                            <a href="{{'/'}}" class="nav-link">
                                <i class="metismenu-icon pe-7s-home"> </i>
                                &nbsp; Homepage
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="{{asset('admin/')}}/assets/images/avatars/1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">

                                        <a>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                    </div>
                                    <div class="widget-subheading">

                                        {{ Auth::User()->status }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            @if (Auth::User()->status=='Administrator')
                            <li>
                                <a href="{{url('/home')}}" class="{{ (request()->is('beranda*')) ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Dashboard
                                </a>
                            </li>

                            <li>
                                <a href="{{url('/dosen')}}" class="{{ (request()->is('dosen*')) ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon pe-7s-note2 "></i>
                                    Data Dosen
                                </a>
                            </li>

                            <li>
                                <a href="{{url('/students')}}" class="{{ (request()->is('students*')) ? 'mm-active' : '' }}">
                                    <i class="metismenu-icon pe-7s-users "></i>
                                    Data mahasiswa
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-help1"></i>
                                    Layanan
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/students/exportExcel" target="_blank">
                                            <i class="metismenu-icon"></i>
                                            Export Data Mahasiswa
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/dosen/exportExcel" target="_blank">
                                            Export Data Dosen
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="app-sidebar__heading">Settings</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-user"></i>
                                    Account Settings
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>

                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>


                                </ul>
                            </li>

                            </li>
                        </ul>
                        @elseif (Auth::User()->status=='Dosen')
                        <li>
                            <a href="{{url('/home')}}" class="{{ (request()->is('beranda*')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/students')}}" class="{{ (request()->is('students*')) ? 'mm-active' : '' }}">
                                <i class="metismenu-icon pe-7s-users "></i>
                                Data mahasiswa
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-help1"></i>
                                Layanan
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="/students/exportExcel" target="_blank">
                                        <i class="metismenu-icon"></i>
                                        Export Data Mahasiswa
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="app-sidebar__heading">Settings</li>

                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-user"></i>
                                Account Settings
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>


                            </ul>
                        </li>
                        @else
                        <a href="https://instagram.com/zal_anw" class="nav-link">Anda tidak terdaftar !!</a>
                        @endif


                        </ul>
                    </div>
                </div>
            </div>



            <!--     ----------------------------------------------------- -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class='col-11 modal-title text-center'>&nbsp; &nbsp; &nbsp; &nbsp; About Me</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body uk-container" id="about">
                <div class="uk-position-relative uk-visible-toggle uk-dark uk-slider uk-slider-container" uk-slider="autoplay: true;">
                    <ul class="uk-slider-items uk-child-width-1-1" style="transform: translateX(-318px);">
                        <li class="testimonial uk-text-center uk-active" style="order: 1;">
                            <img src="{{asset('admin/')}}/assets/images/avatars/1a.jpg" alt="Testimonial 1">

                            <p>Faizal Anwar</p>
                            <div class="uk-margin">
                                <a uk-icon="icon: github; ratio: 0.8" href="https://www.github.com/fzlanwr" target="_blank">&nbsp; &nbsp;</a>
                                <a uk-icon="icon: instagram; ratio: 0.8" href="https://www.instagram.com/zal_anw" target="_blank">&nbsp; &nbsp;</a>
                                <a uk-icon="icon: twitter; ratio: 0.8" href="https://twitter.com/zal_anw" target="_blank">&nbsp; &nbsp;</a>
                                <a uk-icon="icon: facebook; ratio: 0.8" href="https://www.facebook.com/zallanw" target="_blank">&nbsp; &nbsp;</a>
                            </div>

                            <blockquote uk-slider-parallax="x: 100,-100" style="transform: translate3d(0px, 0px, 0px);" class="">Using Wave I was able to build the SAAS of my dreams. It was so easy to get started and customize. Now, I'm living off of the income that my Software as a Service has generated.</blockquote>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>@yield('heading')
                                    <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    @yield('container')


                    <!-- ---------------------------------------------------------------------------------------------------------------- -->

                </div>

                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="https://instagram.com/zal_anw" class="nav-link">
                                            Created with 😵 by @zal_anw
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="app-footer-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="" class="nav-link disabled">
                                            © Copyright 2020 when the Coronavirus pandemic occurred
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
            <script type="text/javascript" src="{{asset('admin/')}}/assets/scripts/main.js"></script>
            @include('sweetalert::alert')




</body>

</html>