@extends('layouts.front')

@section('title')
    Jobs - Alan & Grant | HR & Enterprise Solutions
@endsection

@section('jumbotron')
    <div class="container-fluid about-container head-container">
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
                                <a class="nav-link" href="{{ route('front.home') }}">Home</a>
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
                                <a class="nav-link active" href="{{ route('front.jobs') }}">Jobs</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row page-jumbo">
            <div class="col-sm-8 offset-sm-2">
                <h1>
                    Jobs
                </h1>
                <p>
                    Great organizations are built around talents - that's the real edge!<br>
                    No talents, no numbers!
                </p>
            </div>
        </div>

    </div>
@endsection

@section('content')
    <section class="container-fluid section-container looking-to-recruit">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h5>
                    <strong>Are you a company that's looking <br>to recruit?</strong>
                </h5>
                <br>
                <p>
                    We know where and how to get great talent - you should work with us to fulfill your talent needs.
                </p>
                <br>
                <button class="btn-black-on-gold bordered">SEND US A BRIEF</button>
            </div>
        </div>
    </section>
    <!--
    <section class="container-fluid section-container">
        <div class="row">
            <div class="col-sm-12 col-md-4 offset-md-2">
                <p>Business Development Associate</p>
            </div>
            <div class="col-sm-12 col-md-4 md-offset-1">
                <p>Business Development Associate</p>
            </div>
            <div class="col-sm-12 col-md-4 offset-md-2">
                <p>Business Development Associate</p>
            </div>
            <div class="col-sm-12 col-md-4 md-offset-1">
                <p>Business Development Associate</p>
            </div>
            <div class="col-sm-12 col-md-4 offset-md-2">
                <p>Business Development Associate</p>
            </div>
            <div class="col-sm-12 col-md-4 md-offset-1">
                <p>Business Development Associate</p>
            </div>
        </div>
    </section>
    -->
    <section class="container-fluid section-container featured-projects">
        <br>
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-12 col-md-6 outer">
                        <div class="row left-row">
                            <h3 class="col-12"><strong>Didn't see what you're<br>looking for?</strong></h3>
                            <p class="col-12">
                                We're always interested in hearing from talented people, and even if we're
                                not looking for people with your specialty right now, we may well have a need for
                                them at a later date.
                                <br><br>
                                If you think that you have what it takes to make Alan &amp; Grant even better,
                                please submit your CV/Resume <a href="#">here</a>.
                            </p>
                            <br><br>
                            <div class="col-12">
                                <button type="button" class="cv-button btn-black-on-gold borderless">UPLOAD YOUR CV</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 outer">
                        <div class="row right-row">
                            <h3 class="col-12"><strong>Get FREE resources</strong></h3>
                            <p class="col-12">
                                Sign up for free tools, tips and resources to aid your job search.
                                <br>
                                We won't spam you, we promise.
                            </p>
                            <br>
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="sign-up btn-white-on-black borderless">SIGN UP NOW</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection