<!DOCTYPE html>
<html lang="en">

<head>
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{asset('admin/')}}/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('admin/')}}/app.css" rel="stylesheet">
</head>

<body class="home">
    <div id="app" data-sticky-wrap>
        <div class="uk-nav-container" uk-sticky>
            <div class="uk-container">
                <nav class="uk-navbar-container uk-margin uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left uk-logo-container">
                        <a class="uk-navbar-item uk-logo" href="/"><img src="{{asset('admin/')}}/assets/images/up.webp" style="height:35px;"></a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav " id="uk-nav-right">
                            <li class="">
                                <a href="/index#home"  >
                                    <span> Home</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/index#features"  >
                                    <span> Features</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="/index#akademik"  >
                                    <span> Akademik</span>
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="modal" data-target="#exampleModalCenter"  >
                                    <span> About</span>
                                </a>
                            </li>
                           
                            <li class="uk-login"><a href="/login">Login</a></li>
                            <li>
                                <a href="/register"><button class="uk-button uk-button-primary">Sign Up</button></a>
                            </li>
                        </ul>
                        <div id="uk-nav-right-mobile"><span class="more-btn" uk-icon="more-vertical"></span><span class="close-btn uk-icon" uk-icon="close"></span></div>
                    </div>
                </nav>
            </div>
        </div>
        @yield('container')
    </div>

<!-- Modal -->
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


    <div id="footer" data-sticky-footer>
        <div class="uk-section-default uk-section uk-section-large">
            <div class="uk-container">
                <div class="uk-grid-large uk-grid-margin-large uk-grid" uk-grid="">
                    <div class="uk-width-expand@m uk-width-1-2@s uk-first-column uk-footer-logo">
                        <div class="uk-margin">
                            <a href="/"><img src="{{asset('admin/')}}/assets/images/btm.webp" style="height:16px;"></a>
                        </div>
                        <div class="uk-margin uk-width-xlarge">The Software as a Service Starter Kit built on Laravel &amp; Voyager</div>
                    </div>
                    <div class="uk-width-expand@m uk-width-1-2@s">
                        <h3 class="uk-h5">Site Links</h3>
                        <ul class="uk-list">
                            <li><a href="/index#home" class="uk-link-muted" uk-scroll="offset:80">Home</a></li>
                            <li><a href="/index#features" class="el-link uk-link-muted" uk-scroll="offset:80">Features</a></li>
                            <li><a href="/index#about" class="el-link uk-link-muted" uk-scroll="offset:80">About</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-expand@m uk-width-1-2@s">
                        <h3 class="uk-h5">Web Resources</h3>
                        <ul class="uk-list">
                            <li><a href="https://getbootstrap.com/" class="el-link uk-link-muted" target="_blank"> Bootstap 4</a></li>
                            <li><a href="https://laravel.com/" class="el-link uk-link-muted">Laravel 7</a></li>
                            <li><a href="https://sass-lang.com/" class="el-link uk-link-muted" target="_blank">SASS</a></li>
                        </ul>
                    </div>
                    <div class="uk-width-expand@m uk-width-1-2@s">
                        <h3 class="uk-h5">Contact Us</h3>
                        <div class="uk-margin"><a href="mailto:fzlanwr@gmail.com" >fzlanwr@gmail.com</a></div>
                        <div class="uk-margin">
                            <div class="uk-child-width-auto uk-grid-medium uk-grid uk-social" uk-grid>
                                <a uk-icon="icon: github; ratio: 0.8" href="https://www.github.com/fzlanwr" target="_blank" class="el-link uk-link-muted uk-icon"></a>
                                <a uk-icon="icon: instagram; ratio: 0.8" href="https://www.instagram.com/zal_anw" target="_blank" class="el-link uk-link-muted uk-icon"></a>
                                <a uk-icon="icon: twitter; ratio: 0.8" href="https://twitter.com/zal_anw" target="_blank" class="el-link uk-link-muted uk-icon"></a>
                                <a uk-icon="icon: facebook; ratio: 0.8" href="https://www.facebook.com/zallanw" target="_blank" class="el-link uk-link-muted uk-icon"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('admin/')}}/assets/scripts/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('admin/')}}/assets/scripts/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset('admin/')}}/assets/scripts/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('admin/')}}/assets/scripts/app.js" type="31e4b3a3991e6b3aa7e5291d-text/javascript"></script>
    <script src="{{asset('admin/')}}/assets/scripts/rocket-loader.min.js" data-cf-settings="31e4b3a3991e6b3aa7e5291d-|49" defer=""></script>
</body>

</html>