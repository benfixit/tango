@extends('layouts.front')

@section('title')
    Services - Alan & Grant | HR & Enterprise Solutions
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
                                <a class="nav-link active" href="{{ route('front.services') }}">Our Services</a>
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
                    Our Services
                </h1>
                <p>
                    We create innovative HR & Enterprise Solutions for result-driven organizations.<br>
                    We focus on enabling performance improvements around our clients’ people, product and project concerns.
                </p>
            </div>
        </div>

    </div>
@endsection


@section('content')
    <section class="container-fluid section-container what-we-have-done">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center">
                <p class="boast">
                    <strong>
                        Our capabilities and expertise cuts across a variety of sectors,
                        including but not limited to Finance, Education, Media, Manufacturing,
                        Telecommunications, Technology, Oil and Gas, Government, Health, Hospitality,
                        Human Resources, Infrastructure, Sales & Marketing, Supply Chain & Procurement,
                        and Transport & Logistics.
                    </strong>
                </p>
            </div>
        </div>
    </section>

    <div class="auto-slideshow">
        <div class="col-1">
            <img src="{{ asset('img/chams.png') }}" alt="Chams" class="img-fluid">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/concept_group.png') }}" class="img-fluid" alt="Concept Group Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/reddington.png') }}" class="img-fluid" alt="Reddington Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/genesis.png') }}" class="img-fluid" alt="Genesis Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/red_africa.png') }}" class="img-fluid" alt="Red Africa Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/samsung.png') }}" class="img-fluid" alt="Samsung Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/lcci.jpg') }}" class="img-fluid" alt="LCCI Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/vtti.png') }}" class="img-fluid" alt="VTTI Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/garment-care.png') }}" class="img-fluid" alt="Garment Care Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/first_bank.jpg') }}" class="img-fluid" alt="First Bank Logo">
        </div>
        <div class="col-2">
            <img src="{{ asset('img/splash-logo.jpg') }}" class="img-fluid" alt="Cordros Capital Logo">
        </div>
    </div>

    <section class="container-fluid section-container services-we-offer">
        <div class="row">
            <div class="col-12 special-header-div">
                <h5 class="special-header sh-black text-center"><span><strong>SERVICES WE OFFER</strong></span></h5>
            </div>
            <br><br><br>
            <h4 class="col-12 text-center">HR Advisory Services</h4>
            <br>
            <h6 class="col-12 text-center">HR Audit &nbsp;&nbsp;.&nbsp;&nbsp;HR & Enterprise Policy Development &nbsp;&nbsp;.&nbsp;&nbsp;Organizational Development</h6>
            <br>
            <p class="col-12 col-md-8 offset-md-3 text-justify">
                Our Human Resource Advisory unit provides the building blocks your organization needs to attract, select, manage, motivate, train, develop and retain valuable employees.
                Our approach is adopting an array of developed and tested tools, procedures and methodologies to diagnose HR issues and proffer strategic HR interventions that are  accurately tailored to improve efficiency, performance, and enhance human capacity.
            </p>
        </div>
        <div class="row">
            <br>
            <div class="col-12 special-header-div">
                <h5 class="special-header sh-black text-center"></h5>
            </div>
            <br><br>
            <h4 class="col-12 text-center">Product Development & Management</h4>
            <br>
            <h6 class="col-12 text-center">
                Ideation . Product Review & Management . Proposition Design . Product & Service Innovation
            </h6>
            <br>
            <p class="col-12 col-md-8 offset-md-3 text-justify">
                As a consultancy, we've served hundreds of customers, and we stand behind our products. Our dedicated<br>
                customer support team offers ongoing services, whether that means squashing bugs the moment they<br>
                arise or providing more in-depth services to clients in need.
            </p>
        </div>
        <div class="row">
            <br>
            <div class="col-12 special-header-div">
                <h5 class="special-header sh-black text-center"></h5>
            </div>
            <br><br>
            <h4 class="col-12 text-center">Enterprise Development</h4>
            <br>
            <h6 class="col-12 text-center">
                Business Performance Audit . Enterprise Planning & Business Development . Strategy Development/Retreat Management
            </h6>
            <br>
            <p class="col-12 col-md-8 offset-md-3 text-justify">
                As businesses continue to grow and expand, they will need to support and nurture their internal growth, monitor and control their business activities and organizational performance. Our Enterprise Development services help organizations drive a pipeline of new business opportunities, build and maintain relationships with prospective clients and execute enterprise-wide performance transformation initiatives.
            </p>
        </div>
        <div class="row">
            <br>
            <div class="col-12 special-header-div">
                <h5 class="special-header sh-black text-center"></h5>
            </div>
            <br><br>
            <h4 class="col-12 text-center">Project & Programme Management</h4>
            <br>
            <h6 class="col-12 text-center">
                Collaborations & Programme Management
            </h6>
            <br>
            <p class="col-12 col-md-8 offset-md-3 text-justify">
                In order for a business to remain dynamic, new products that will keep the business ahead are of utmost priority.
                Through our Product Development & Management services, our team of experts can help your organization enrich its portfolio with innovative products that solve customer problems and yields maximum growth. We will carry out a research on your market and environment to provide innovative ideas and concepts.

            </p>
        </div>
    </section>
    <br><br><br>
    <section class="container-fluid section-container service-ppp">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="row inner-row">
                            <div class="col-2">
                                <!--<img src="/img/people.png" alt="People" />-->
                                <span class="col-5 offset-1 fa fa-users"></span>
                            </div>
                            <div class="col-9">
                                <h6 class="text-uppercase"><strong>People</strong></h6>
                                <p>
                                    Having the right blend of people in character and competence seats at the very core of business performance.
                                    We work closely with each client to design and deploy tailored HR & People solutions.
                                </p>
                            </div>
                            <div class="col-1">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row inner-row">
                            <div class="col-2">
                                <!--<img src="/img/projects.png" alt="Projects" />-->
                                <span class="col-5 offset-1 fa fa-product-hunt"></span>
                            </div>
                            <div class="col-9">
                                <h6 class="text-uppercase"><strong>Products</strong></h6>
                                <p>
                                    Our access to new customer insights and market data help us create innovative ways to support
                                    the performance of your product and service offerings.
                                </p>
                            </div>
                            <div class="col-1">

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="row inner-row">
                            <div class="col-2">
                                <!--<img src="/img/projects.png" alt="Projects" />-->
                                <span class="col-5 offset-1 fa fa-folder"></span>
                            </div>
                            <div class="col-9">
                                <h6 class="text-uppercase"><strong>Projects</strong></h6>
                                <p>
                                    For us, business performance is greatly influenced by its ability to focus on the core,
                                    allowing for strategic affiliations where required. This is why we offer Project Management as a service for partners and clients.
                                </p>
                            </div>
                            <div class="col-1">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid section-container work-with-us" style="padding-bottom: 8%;">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h6 class="text-uppercase">
                    <strong>Want to work with us?</strong>
                </h6>
                <br>
                <p>
                    Get in touch to see how we can help you today!
                </p>
                <br>
                <button class="custom-btn btn-black-on-white bordered">Get in touch</button>
            </div>
        </div>
    </section>

    {{--
    <section class="container-fluid section-container featured-projects">
        <br>
        <div class="row">
            <h5 class="col-12 text-center"><strong>Featured Projects</strong></h5>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <div class="row">
                    <div class="col-12 col-md-6 outer">
                        <div class="row left-row">
                            <h3 class="col-12"><strong>My Job Answers</strong></h3>
                            <p class="col-12">
                                This is built as a career counselling social platform for
                                young professionals and experienced coaches and
                                counsellors. The desire is to provide access to answers,
                                insights, data and ongoings conversations without the
                                limitations of time and space.
                            </p>
                            <button type="button" class="custom-btn btn-white-on-black borderless">Learn More</button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 outer">
                        <div class="row right-row">
                            <h3 class="col-12"><strong>Jonathan Cole</strong></h3>
                            <p class="col-12">
                                Hence you ever wondered if we could create a meeting
                                place for those working for grants and the donor agencies
                                interested in providing such solution and subsequently
                                increase the success rates on both divides.
                            </p>
                            <button type="button" class="custom-btn btn-black-on-gold borderless">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    --}}
    <br>
    <section class="container-fluid section-container contact-us-drop-line" style="padding-bottom: 6%;">
        <div class="row">
            <h2 class="col-12 text-center" style="margin: 3% 0;"><strong>Have a project for us? Drop us a line</strong></h2>
            <div class="col-12 col-md-4 offset-md-4 form-div" style="padding-left: 4%;">
                <form action="{{ route('front.send-message') }}" method="post" role="form" name="drop-line-form" id="drop-line-form">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                    </div>
                    <br>
                    <button type="submit" name="submit-button" class="custom-btn btn-black-on-white bordered">Send a message</button>
                </form>
            </div>
        </div>
    </section>
@endsection
