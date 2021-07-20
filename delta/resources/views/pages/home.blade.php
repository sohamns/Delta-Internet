@extends('layouts.layout')

@section('title')
Home
@endsection

@section('content')
<header>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active secondary-color"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="secondary-color"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/speed.jpg') }}" class="d-block w-100" alt="Speed">
                <div class="carousel-caption d-block mb-lg-5 slide1" style="color: aqua">
                    <p class="animate__animated animate__zoomIn animate__delay-2s slide1a">EXPERIENCE</p>
                    <p class="animate__animated animate__zoomIn animate__delay-2s slide1b">HIGH-SPEED INTERNET UPTO
                        100Mbps</p>
                    <p class="animate__animated animate__zoomIn animate__delay-2s slide1d">WITH</p>
                    <h1 class="animate__animated animate__zoomInUp animate__delay-3s slide1c">GIGANET</h1>
                </div>
            </div>
            <div class="carousel-item item2">
                <div class="container text-center ">
                    <div class="col-lg-12">
                        <div class="card cardc animate__animated animate__bounceInDown animate__delay-2s">
                            <div class="card-body ">
                                <h1 class="card-title txt1">AMAZING PACKAGES<br> AT AN<br> AMAZING PRICE</h1>
                                <a href="{{ route('plans') }}" class="button1">BROWSE PLANS -></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner4.jpg') }}" class="d-block w-100" alt="Banner">
                <div class="carousel-caption d-block slide3">
                    <h3 class="animate__animated animate__lightSpeedInLeft animate__delay-2s slide3a">WE PROVIDE YOU OUR
                        SUPERIOR QUALITY EQUIPMENTS<br> AND</h3>
                    <h1 class="animate__animated animate__zoomIn animate__delay-4s slide3b ">BEST SERVICE</h1>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<div class="container">
    <div class="row text-center">
        <div class="col-lg-12">
            <img src="{{ asset('images/logo.png') }}" alt="logo" width="200px" height="auto">
        </div>
        <div class="col-6 col-lg-6 tagline">
            <p class="animate__animated animate__fadeInLeftBig animate__delay-3s"> <b>Get Connected...</b></p>
        </div>
        <div class="col-6 col-lg-6 tagline">
            <p class="animate__animated animate__fadeInRightBig animate__delay-4s"><b>...Stay Connected</b></p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-content">
        <div class="col-12 col-lg-6">
            <div class="card">
                <img src="{{ asset('images/giga.jpg') }}" class="card-img-top" alt="GIGANET" />
                <div class="card-body">
                    <h5 class="card-title" style="border-bottom: 1px ridge; padding-bottom: 20px;">Faster speed with
                        GIGANET</h5>
                    <p class="card-text lead">
                        With the GIGANET, connect all your devices to high-speed internet and experience speed upto 100
                        Mbps!
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-dark">Get Connected</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="card">
                <img src="{{ asset('images/gpon2.jpg') }}" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title" style="border-bottom: 1px ridge; padding-bottom: 20px;"><b>G</b>igabit
                        <b>P</b>assive <b>O</b>ptical <b>N</b>etwork (GPON) System</h5>
                    <p class="card-text lead">
                        We have installed GPON System which provides FIBER TO HOME to give you uninterrupted internet
                        even in case of power failure.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-dark">Get a Connection</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-content">
        <div class="col-12 col-lg-5">
            <img src="{{ asset('images/internet.jpg') }}" width="100%" height="auto"
                class="img-fluid">
        </div>
        <div class="col-12 col-lg-7 mt-lg-3">
            <h1>Our Amazing Packages</h1>
            <h5>At an Amazing Price</h5>
            <p class="lead">We are introducing the GPIS UNLIMITED PLAN</p>
            <a class="button1" href="{{ route('plans') }}">See Plans</a>
        </div>
    </div>
</div>

<div class="bg-home bg-light">
    <div class="container mb-3">
        <h1>Customer Support</h1>
    </div>
    <div class="row">
        <div class="col-12 col-lg-4 text-center mb-3">
            <a href="https://maps.app.goo.gl/8gvZFPdtqaYsoeD5A"
                class="btn btn-bg" role="button"><img src="{{ asset('images/location.png') }}"
                    width="30%" height="30%" class="img-fluid "></a>
            <h4>Visit Us</h4>
        </div>
        <div class="col-12 col-lg-4 text-center mb-3">
            <a href="tel:0251-2400330" class="btn btn-bg" role="button"><img
                    src="{{ asset('images/phone.png') }}" width="30%" height="30%"
                    class="img-fluid "></a>
            <h4>Call Us</h4>
        </div>
        <div class="col-12 col-lg-4 text-center">
            <a href="{{ route('contact') }}" class="btn btn-bg" role="button"><img
                    src="{{ asset('images/message.png') }}" width="30%" height="30%"
                    class="img-fluid "></a>
            <h4>Send Us A Message</h4>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h4>Powered By</h4>
    <div class="row mt-4">
        <div class="col-6 col-lg-6">
            <img src="{{ asset('images/poweredby1.jpg') }}" width="75%" height="auto"
                class="img-fluid">
        </div>
        <div class="col-6 col-lg-6 mt-lg-4 mt-2">
            <img src="{{ asset('images/poweredby2.webp') }}" width="75%" height="auto"
                class="img-fluid">
        </div>
    </div>
</div>
@endsection
