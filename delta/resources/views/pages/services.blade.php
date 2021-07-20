@extends('layouts.layout')

@section('title')
Services
@endsection

@section('content')
<div class=" bg-service text-white">
    <h1 style="padding: 5%; font-family: 'Paytone One', sans-serif;">Our<br>Services</h1>
</div>

<div class="bg-service1 text-center">
    <div class="row row-content">
        <div class="col-12 col-lg-6">
            <h3 class="mb-3">Super Fast Internet</h3>
            <img src="{{ asset("images/wifi.png") }}" width="15%" height="15%"
                class="img-fluid mb-3">
            <p class="lead">Fiber optic cable with upgraded GPON system will deliver you the uninterrupted superfast
                internet speed.</p>

        </div>
        <div class="col-12 col-lg-6 mt-xs-3">
            <h3 class="mb-3">Connect All Devices</h3>
            <img src="{{ asset("images/device.png") }}" width="40%" height="40%"
                class="img-fluid mb-3">
            <p class="lead">Get all your devices connected to high speed internet. </p>
        </div>
    </div>
</div>

<div class="bg-service2">
    <h1 class="mb-4" style="font-family: 'Paytone One', sans-serif;">WE OFFER...</h1>
    <div class="row">
        <div class="col-12 col-lg-4 mb-3">
            <div class="card shadow">
                <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                    <img src="{{ asset("images/optic.jpg") }}" class="img-fluid" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center"
                        style="border-bottom: 1px ridge; padding-bottom: 15px; font-family: 'Titillium Web', sans-serif;">
                        FIBER OPTIC INTERNET</h4>
                    <p class="card-text text-left">
                        <UL>
                            <li class="mb-1">Access to Fiber can increase the value of your home by 3.1%.</li>
                            <li class="mb-1">Fiber customers spend less time for the content to load.</li>
                            <li class="mb-1">Satisfaction with Fiber is over 50% higher than with DSL and cable
                                services.</li>
                            <li>Fiber is most reliable and fastest connection to the internet.</li>
                        </UL>
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-dark ml-5">Get Connected</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4 ">
            <div class="card shadow">
                <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                    <img src="{{ asset("images/gpon.jpg") }}" class="img-fluid mt-5" />
                    <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title text-center"
                        style="border-bottom: 1px ridge; padding-bottom: 10px; font-family: 'Titillium Web', sans-serif;">
                        GPON INTERNET SYSTEM</h4>
                    <ul>
                        <li class="mb-1">Provides FIBER TO HOME to give you uninterrupted internet even incase of power
                            failures.</li>
                        <li class="mb-1">Gigabit PON (GPON) bring great improvement in data transmission distance and
                            bandwidth.</li>
                        <li class="mb-1">Ready to install Fiber To Home.</li>
                        <li>Easier network management therefore uninterrupted fast internet speed.</li>
                    </ul>
                    <a href="{{ route('contact') }}" class="btn btn-dark ml-5">UPGRADE</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h1 class="mt-3" style="font-family: 'Paytone One', sans-serif;">Coming soon...</h1>
    <div class="row row-content">
        <div class="col-12 col-lg-5">
            <img src="{{ asset('images/iptv1.png') }}" width="100%" height="auto" class="img-fluid">
        </div>
        <div class="col-12 col-lg-7 mt-lg-3">
            <h4>Internet Protocol Television (IPTV)</h4>
            <p class="lead">IPTV is a brand new technology where you will be able to watch and stream high quality
                content in different languages in the form of entertainment, news, music, movies, sports, etc.
            </p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h3 style="font-family: 'Paytone One', sans-serif;">Powered By</h3>
    <div class="row mt-4">
        <div class="col-6 col-lg-6">
            <img src="{{ asset("images/poweredby1.jpg") }}" width="75%" height="auto"
                class="img-fluid">
        </div>
        <div class="col-6 col-lg-6 mt-lg-4 mt-2">
            <img src="{{ asset("images/poweredby2.webp") }}" width="75%" height="auto"
                class="img-fluid">
        </div>
    </div>
</div>

@endsection
