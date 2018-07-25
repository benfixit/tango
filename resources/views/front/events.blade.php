@extends('layouts.front')

@section('title')
    Events - Alan & Grant | HR & Enterprise Solutions
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
                                <a class="nav-link" href="{{ route('front.jobs') }}">Jobs</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row page-jumbo">
            <div class="col-sm-8 offset-sm-2">
                <h1>
                    Events
                </h1>
                <p>
                    Coming Soon...
                </p>
            </div>
        </div>

    </div>
@endsection

@section('content')
    <section class="container-fluid section-container coming-soon" style="padding: 10% 0">
        <h1 class="text-center">
            <strong>Coming Soon...</strong>
        </h1>
    </section>
@endsection