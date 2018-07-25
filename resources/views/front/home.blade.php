@extends('layouts.front')

@section('title')
    Home - Alan & Grant | HR & Enterprise Solutions
@endsection

@section('jumbotron')
    <div class="container-fluid home-container head-container">
        <div class="row navigation">
            <div class="col-11">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="padding: 0 4%;">
                        <!-- Brand/logo -->
                        <a class="navbar-brand" href="/">
                            <img src="{{ asset('img/logo-white.png') }}" class="img-fluid" alt="Logo">
                        </a>

                        <!-- Toggler/collapsibe Button -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav ml-auto text-uppercase">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('front.home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.about') }}">The Company</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.services') }}">Our Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.insights') }}">Insights</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.learning') }}">Learning</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('front.jobs') }}">Jobs</a>
                                </li>
                            </ul>
                        </div>
                </nav>
            </div>
        </div>

        <div class="row page-jumbo">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="text-center">
                    We deliver innovative solutions.
                </h1>
                <p class="text-center">
                    At Alan & Grant, we offer fresh thinking and a consultative approach to
                    HR &amp; Business Advisory - enabling performance improvements every time!
                </p>
            </div>
        </div>

    </div>
@endsection


@section('content')
    <section class="container-fluid section-container people-pro-pro">
        <div class="row">
            <div class="col-sm-10 offset-sm-2 manage">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 content-div" style="padding-right:0; border-right: thin solid #aaaaaa;">
                        <a href="{{ route('front.services') }}">
                            <h5>PEOPLE</h5>
                            <p>
                                Having the right blend of people in character and competence seats at the very core of business performance.
                                We work closely with each client to design and deploy tailored HR & People solutions.
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-12 content-div" style="padding-right:0; border-right: thin solid #aaaaaa;">
                        <a href="{{ route('front.services') }}">
                            <h5>PRODUCTS</h5>
                            <p>
                                Our access to new customer insights and market data help us create innovative ways to support
                                the performance of your product and service offerings.
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 content-div" style="padding-right:0; border-right: thin solid #aaaaaa;">
                        <a href="{{ route('front.services') }}">
                            <h5>PROJECTS</h5>
                            <p>
                                For us, business performance is greatly influenced by its ability to focus on the core,
                                allowing for strategic affiliations where required. This is why we offer Project Management as a service for partners and clients.
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 content-div">
                        <a href="{{ route('front.services') }}">
                            <h5>PLATFORMS</h5>
                            <p>
                                This focus area is a long-term aspiration for us. We are exploring ways to create value-adding platforms for SMEs,
                                non-profits and development/donor agencies looking for innovative ways to achieve maximum impact.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="container-fluid section-container home-who-we-are">
        <div class="row">
            <div class="col-sm-12 col-md-4 offset-md-1 special-header-div">
                <h5 class="special-header"><span>WHO WE ARE</span></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 title-div">
                        <p>
                            Working together to<br> deliver value to your<br> business.
                        </p>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 content-div">
                        <p>
                            We are an HR & Business Advisory firm <br>
                            delivering innovative solutions <br>
                            to result-driven firms.
                        </p>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12 text-center">
                        <a href="{{ route('front.about') }}" class="btn btn-default learn-more-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid section-container consulting-services">
        <div class="row">
            <div class="col-sm-12 col-md-4 offset-md-1 special-header-div">
                <h5 class="special-header sh-black"><span>OUR SERVICES</span></h5>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 offset-sm-2">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 services">
                        <h4>Learning & HR Advisory Services</h4>
                        <ul>
                            <li>HR &amp; People Audit</li>
                            <li>HR Support &amp; Outsourcing</li>
                            <li>Talent Acquisition</li>
                            <li>Assessment Centre Design and Management</li>
                            <li>Competency Modeling</li>
                            <li>Employee Performance Management Systems</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 services">
                        <h4>Enterprise Development</h4>
                        <ul>
                            <li>Growth Planning</li>
                            <li>Strategy Review and Development</li>
                            <li>New Customer/Market Research & Survey</li>
                            <li>Business Performance Audit & Planning</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 services">
                        <h4>Product Development & Management</h4>
                        <ul>
                            <li>Ideation</li>
                            <li>Proposition Design</li>
                            <li>Product & Service Innovation</li>
                            <li>Product Review, Development & Management</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 services">
                        <h4>Project & Programme Management</h4>
                        <ul>
                            <li>Collaborations & Programme Management</li>
                        </ul>
                        <!--
                        <div class="button-div">
                            <button class="btn btn-default send-brief-btn">SEND US A BRIEF</button>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid section-container selected-clients">
        <div class="row">
            <div class="col-sm-12 col-md-4 offset-md-1 special-header-div">
                <h5 class="special-header sh-black"><span>SELECTED CLIENTS</span></h5>
            </div>
        </div>
        <div class="row img-row">
            <div class="col-sm-8 offset-sm-2">
                <div class="row">
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/chams.png') }}" class="img-fluid" alt="Chams Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/concept_group.png') }}" class="img-fluid" alt="Concept Group Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/reddington.png') }}" class="img-fluid" alt="Reddington Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/genesis.png') }}" class="img-fluid" alt="Genesis Logo">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/red_africa.png') }}" class="img-fluid" alt="Red Africa Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/samsung.png') }}" class="img-fluid" alt="Samsung Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/lcci.jpg') }}" class="img-fluid" alt="LCCI Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/vtti.png') }}" class="img-fluid" alt="VTTI Logo">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/garment-care.png') }}" class="img-fluid" alt="Garment Care Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/first_bank.jpg') }}" class="img-fluid" alt="First Bank Logo">
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <img src="{{ asset('img/splash-logo.jpg') }}" class="img-fluid" alt="Cordros Capital Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container-fluid section-container newsletter">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 wrapper">
                <div class="row">
                    <p class="col-12 col-md-10 offset-md-1">
                        Get the latest HR & Business innovation news and events delivered straight to your inbox.
                    </p>
                    <form class="form-inline col-12 col-md-6 offset-md-4" method="post" action="{{ route('front.newsletter') }}" id="newsletter-form" name="newsletter-form">
                        {{ csrf_field() }}
                        <div class="form-group" style="margin-right: 2%;">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email address">
                        </div>
                        <button type="submit" class="btn btn-default bordered btn-black-on-white newsletter-btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        //var token =
    </script>
@endsection


