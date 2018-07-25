<!doctype html>
<html lang="en">
<head itemscope itemtype="http://schema.org/WebSite">
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="">
    <meta name="description" content="alanandgrant.com offers">
    <meta itemprop="url" content="https://www.alanandgrant.com"/>
    <meta name="author" content="alanandgrant.com"/>

    {{--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/front/styles.css') }}" media="all">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107512101-1"></script>-->
    <script>
        /*
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments)};
         gtag('js', new Date());

         gtag('config', 'UA-107512101-1');
         */
    </script>
</head>

<body>
@section('jumbotron')
@show

@section('content')
@show

<footer class="container-fluid section-container main-footer" style="position: relative;">
    <div class="row">
        <div class="col-sm-10 offset-sm-1 wrapper">
            <div class="row">
                <div class="col-6 col-md-2 sect">
                    <h6 class="text-uppercase"><strong>The Company</strong></h6>
                    <ul>
                        <li><a href="{{ route('front.about') }}" title="About Us">About Us</a></li>
                        <li><a href="{{ route('front.about') }}" title="Join the Team">Join the Team</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 sect">
                    <h6 class="text-uppercase"><strong>Focus Areas</strong></h6>
                    <ul>
                        <li><a href="{{ route('front.services') }}" title="People">People</a></li>
                        <li><a href="{{ route('front.services') }}" title="Products">Products</a></li>
                        <li><a href="{{ route('front.services') }}" title="Projects">Projects</a></li>
                        <li><a href="{{ route('front.services') }}" title="Platforms">Platforms</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 sect">
                    <h6 class="text-uppercase"><strong>Insights</strong></h6>
                    <ul>
                        <li><a href="{{ route('front.insights') }}" title="Blog">Articles</a></li>
                        <li><a href="{{ route('front.insights') }}" title="Case Studies">Case Studies</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-1 sect">
                    <h6 class="text-uppercase"><strong>Learning</strong></h6>
                    <ul>
                        <li><a href="{{ route('front.learning') }}" title="Course Schedule">Course Schedule</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-2 sect jobs">
                    <h6 class="text-uppercase"><strong>Jobs</strong></h6>
                    <ul>
                        <li><a href="{{ route('front.jobs') }}" title="For Job Seekers">For Job Seekers</a></li>
                        <li><a href="{{ route('front.jobs') }}" title="For Employers">For Employers</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 sect">
                    <h6 class="text-uppercase"><strong>Contact Us</strong></h6>
                    <ul>
                        <li><span class="fa fa-map-marker"></span> {{ config('utils.office-address') }}
                        </li>
                        <li><span class="fa fa-paper-plane"></span> {{ config('utils.contact-email') }}
                        </li>
                        <li><span class="fa fa-phone"></span> 0812 213 4080, 0803 346 3307</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<footer class="container-fluid text-center section-container small-footer">
    <div class="row">
        <div class="col-12 col-md-6" style="padding-left: 0;">
            <p style="padding-left: 0;">
                &copy; <?php echo date('Y'); ?> Alan & Grant. All rights reserved. &nbsp;&nbsp; <a href="#"
                                                                                                   title="Disclaimer">Disclaimer</a>
                &nbsp;&nbsp;<a href="#" title="Privacy Policy">Privacy Policy</a>
            </p>
        </div>
        <div class="col-12 col-md-6">
            <ul>
                <li style="padding-left: 0;">
                    <a href="{{ config('social.instagram') }}" target="_blank"><span class="fa fa-instagram"></span>
                    </a>
                </li>
                <li>
                    <a href="{{ config('social.twitter') }}" target="_blank"><span class="fa fa-twitter"></span></a>
                </li>
                <li>
                    <a href="{{ config('social.facebook') }}" target="_blank"><span class="fa fa-facebook"></span></a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<button id="toTop" title="Back To Top"><span class="fa fa-chevron-up"></span></button>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
-->
<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
<script rel="script" src="{{ asset('js/popper.min.js') }}"></script>
<script rel="script" src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script rel="script" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script rel="script" src="{{ asset('js/slick.min.js') }}"></script>
<script rel="script" src="{{ asset('js/waitingfor.js') }}"></script>
<script rel="script" src="{{ asset('js/bootbox.min.js') }}"></script>
<script rel="script" src="{{ asset('js/script.js') }}" type="text/javascript"></script>
</body>
</html>