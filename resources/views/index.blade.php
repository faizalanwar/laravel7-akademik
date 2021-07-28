@extends('layout/main')
@section('title','Sicyca - The Software as a Service Starter Kit for Academic')

@section('container')
<div class="uk-section-default uk-section uk-flex uk-flex-middle uk-padding-small uk-padding-remove-bottom uk-margin-small-top" style="box-sizing: border-box;" id="home">
    <div class="uk-width-1-1">
        <div class="uk-container">
            <div class="uk-grid-large uk-flex-middle uk-grid-margin-large uk-grid uk-padding-bottom@m" uk-grid="">
                <div class="uk-width-expand@m uk-first-column uk-animation-slide-left-small">
                    <h1 class="uk-text-left@m uk-text-center uk-h6 uk-scrollspy-inview uk-animation-slide-left-medium" uk-scrollspy-class="">Create your next great idea</h1>
                    <h2 class="uk-width-xlarge uk-margin-auto uk-text-left@m uk-text-center uk-h1 uk-scrollspy-inview uk-animation-slide-left-medium" uk-scrollspy-class="">Sicyca is the perfect starter kit for building your academic great system</h2>
                    <div class="uk-margin uk-text-left@m uk-text-center uk-scrollspy-inview uk-animation-slide-left-medium" uk-scrollspy-class="">Built using Laravel Voyager, Wave will help you rapidly build your Software as a Service application. Out of the box Authentication, Subscriptions, Invoices, Announcements, User Profiles, API, and so much more!</div>
                    <div class="uk-margin-medium uk-text-left@m uk-text-center uk-scrollspy-inview uk-animation-slide-left-medium" uk-scrollspy-class="" style="">
                        <a class="el-content uk-button uk-button-primary" href="/register" title="Get It Now">
                            Get It Now
                        </a>
                    </div>
                </div>
                <div class="uk-width-expand@m uk-animation-slide-right-small">
                    <div class="uk-margin uk-text-center uk-scrollspy-inview uk-animation-slide-right" uk-scrollspy-class="uk-animation-slide-right" style="">
                        <img src="{{asset('admin/')}}/assets/images/bnr.webp" class="el-image" alt="" style="max-height:550px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 126" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
    <style type="text/css">
        .wave-svg {
            fill: #1683FB;
        }
    </style>
    <g id="wave" transform="translate(720.000000, 75.000000) scale(1, -1) translate(-720.000000, -75.000000) " fill-rule="nonzero">
        <path class="wave-svg" d="M694,94.437587 C327,161.381336 194,153.298248 0,143.434189 L2.01616501e-13,44.1765618 L1440,27 L1440,121 C1244,94.437587 999.43006,38.7246898 694,94.437587 Z" id="Shape" fill="#0069FF" opacity="0.519587054"></path>
        <path class="wave-svg" d="M686.868924,95.4364002 C416,151.323752 170.73341,134.021565 1.35713663e-12,119.957876 L0,25.1467017 L1440,8 L1440,107.854321 C1252.11022,92.2972893 1034.37894,23.7359827 686.868924,95.4364002 Z" id="Shape" fill="#0069FF" opacity="0.347991071"></path>
        <path class="wave-svg" d="M685.6,30.8323303 C418.7,-19.0491687 170.2,1.94304528 0,22.035593 L0,118 L1440,118 L1440,22.035593 C1252.7,44.2273621 1010,91.4098622 685.6,30.8323303 Z" id="Shape" fill="url(#linearGradient-1)" transform="translate(720.000000, 59.000000) scale(1, -1) translate(-720.000000, -59.000000) "></path>
    </g>
</svg>
<div class="uk-width-1-1" id="features">
    <div class="uk-container">
        <h2>Awesome Features</h2>
        <p class="uk-text-center uk-margin-remove-top uk-align-center uk-margin-remove-bottom" style="color:#ffffff; opacity:0.8;">Sicyca has some cool features to help you rapidly build your Software as a Service.<br> Here are a few awesome features you're going to love!</p>
        <div class="uk-grid">
            <div class="uk-width-1-3@m uk-width-1-2@s uk-width-1-1 uk-margin-large-top uk-text-center" uk-scrollspy="cls:uk-animation-slide-bottom">
                <img src="{{asset('admin/')}}/assets/images/authentication.webp">
                <h4>Authentication</h4>
                <p>Fully loaded authentication, email verification, and password reset. Authentication in a snap!</p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s uk-width-1-1 uk-margin-large-top uk-text-center" uk-scrollspy="cls:uk-animation-slide-bottom">
                <img src="{{asset('admin/')}}/assets/images/roles.webp">
                <h4>Cross Site Request Forgery (CSRF) Protection</h4>
                <p>Customizable user profiles. Allow your users to enter data and easily customize their user profiles.</p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s uk-width-1-1 uk-margin-large-top uk-text-center" uk-scrollspy="cls:uk-animation-slide-bottom">
                <img src="{{asset('admin/')}}/assets/images/impersonation.webp">
                <h4>User Management</h4>
                <p>With user impersonations you can login as another user and resolve an issue or troubleshoot a bug.</p>
            </div>

            <div class="uk-width-1-3@m uk-width-1-2@s uk-width-1-1 uk-margin-medium-top uk-text-center" uk-scrollspy="cls:uk-animation-slide-bottom">
                <img src="{{asset('admin/')}}/assets/images/blog.webp">
                <h4>Data Personalization</h4>
                <p>Equipped with a fully-functional blog. Write posts related to your product to gain free SEO traffic.</p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s uk-width-1-1 uk-margin-medium-top uk-margin-medium-bottom uk-text-center" uk-scrollspy="cls:uk-animation-slide-bottom">
                <img src="{{asset('admin/')}}/assets/images/admin.webp">
                <h4> Multilever User</h4>
                <p>Wave has been crafted using Laravel & Voyager, which makes administering your app a breeze!</p>
            </div>
            <div class="uk-width-1-3@m uk-width-1-2@s uk-width-1-1 uk-margin-medium-top uk-margin-medium-bottom uk-text-center" uk-scrollspy="cls:uk-animation-slide-bottom">
                <img src="{{asset('admin/')}}/assets/images/themes.webp">
                <h4>Clean Themes</h4>
                <p>Fully configurable themes. Choose from a few starter themes to begin configuring to make it your own.</p>
            </div>
        </div>

    </div>

</div>
<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1440 156" style="enable-background:new 0 0 1440 126;" xml:space="preserve">
    <style type="text/css">
        .wave-svg {
            fill: #1683FB;
        }
    </style>
    <g id="wave" fill-rule="nonzero">
        <path class="wave-svg" d="M694,94.437587 C327,161.381336 194,153.298248 0,143.434189 L2.01616501e-13,44.1765618 L1440,27 L1440,121 C1244,94.437587 999.43006,38.7246898 694,94.437587 Z" id="Shape" fill="#0069FF" opacity="0.519587054"></path>
        <path class="wave-svg" d="M686.868924,95.4364002 C416,151.323752 170.73341,134.021565 1.35713663e-12,119.957876 L0,25.1467017 L1440,8 L1440,107.854321 C1252.11022,92.2972893 1034.37894,23.7359827 686.868924,95.4364002 Z" id="Shape" fill="#0069FF" opacity="0.347991071"></path>
        <path class="wave-svg" d="M685.6,30.8323303 C418.7,-19.0491687 170.2,1.94304528 0,22.035593 L0,118 L1440,118 L1440,22.035593 C1252.7,44.2273621 1010,91.4098622 685.6,30.8323303 Z" id="Shape" fill="url(#linearGradient-1)" transform="translate(720.000000, 59.000000) scale(1, -1) translate(-720.000000, -59.000000) "></path>
    </g>
</svg>

<div id="akademik">
    <div class="uk-container">
        <h2 class="uk-margin-top-large">Info Akadenik</h2>
        <p class="uk-text-center uk-margin-remove-top uk-margin-medium-bottom">It's easy to customize the pricing of your Software as a Service</p>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-match uk-grid uk-grid-stack" uk-grid="">
            <div class="uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-card-plan ">
                    <h3 class="uk-card-title uk-text-center">Daftar Dosen</h3>
                    <p class="uk-text-center uk-text-muted">Total dosen :{{ $totaldosen}}</p>
                    <ul class="uk-padding-remove-left uk-list">
                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col" class="d-none">Matkul</th>
                                    <th scope="col">Lulusan</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                            @foreach ($dosen as $dsn)
                            @if($loop->iteration >= 5)
                                    @break
                                @endif
                                    <tr>
                                        <td class="d-none">{{$loop->iteration}}</td>
                                        <td>{{$dsn->nama}}</td>
                                        <td>{{$dsn->tahunlulus}}</td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </ul>
                    <div class="uk-text-center">
                        <a class="uk-button uk-button-primary" href="/register">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-card-plan ">
                    <h3 class="uk-card-title uk-text-center">Daftar Jurusan</h3>
                    <p class="uk-text-center uk-text-muted">Total Jurusan : {{$totaljurusan}}</p>
                    <ul class="uk-padding-remove-left uk-text-center uk-list">
                    <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col"  class="d-none">NO</th>
                                    <th scope="col">Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                            @foreach($daftarjurusan as $df)
                            @if($loop->iteration > 5)
                                    @break
                                @endif
                            <tr>
                            <td  class="d-none">{{$loop->iteration}}</td></tr>
                              <td>{{$df->jurusan}}</td></tr>
                            @endforeach
                            </tbody>
                        </table>
                    </ul>
                    <div class="uk-text-center">
                        <a class="uk-button uk-button-primary" href="/register">Lihat Selengkapya</a>
                    </div>
                </div>
            </div>
            <div class="uk-grid-margin uk-first-column">
                <div class="uk-card uk-card-default uk-card-body uk-card-plan ">
                    <h3 class="uk-card-title uk-text-center">Daftar Mata Kuliah</h3>
                    <p class="uk-text-center uk-text-muted">Total Mata Kuliah : {{$totalmatkul}}</p>
                    <ul class="uk-padding-remove-left uk-text-center uk-list">
                    <table class="table table-hover">
                    <thead>
                            <tr>
                                    <th scope="col"  class="d-none">NO</th>
                                    <th scope="col">Matkul</th>
                                </tr>
                            </thead>
                            <tbody>
                              
                            @foreach($daftarmatkul as $dm)
                            @if($loop->iteration >= 5)
                                    @break
                                @endif
                            <tr>
                            <td  class="d-none">{{$loop->iteration}}</td></tr>
                              <td>{{$dm->matkul}}</td></tr>
                            @endforeach
                            </tbody>
                        </table>
                    </ul>
                    <div class="uk-text-center">
                        <a class="uk-button uk-button-primary" href="/register">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <p class="uk-text-center uk-margin-medium"><span class="uk-margin-small-right uk-icon" uk-icon="settings"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ratio="1">
                    <ellipse fill="none" stroke="#000" cx="6.11" cy="3.55" rx="2.11" ry="2.15"></ellipse>
                    <ellipse fill="none" stroke="#000" cx="6.11" cy="15.55" rx="2.11" ry="2.15"></ellipse>
                    <circle fill="none" stroke="#000" cx="13.15" cy="9.55" r="2.15"></circle>
                    <rect x="1" y="3" width="3" height="1"></rect>
                    <rect x="10" y="3" width="8" height="1"></rect>
                    <rect x="1" y="9" width="8" height="1"></rect>
                    <rect x="15" y="9" width="3" height="1"></rect>
                    <rect x="1" y="15" width="3" height="1"></rect>
                    <rect x="10" y="15" width="8" height="1"></rect>
                </svg></span> All plans are fully configurable in the Admin Area.</p>
    </div>
</div>

@endsection