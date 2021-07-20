@extends('layouts.layout')

@section('title')
IPTV
@endsection

@section('content')
<div class="container bd-bg">
    <div class="iptvfont">
        <div class="row row-content">
            <div class="col-12 col-lg-5">
                <img src="{{ asset('images/iptv5.png') }}" width="100%" height="auto" alt="iptv" class="img-fluid">
            </div>
            <div class="col-12 col-lg-5 mt-4 ">
                <h1>What is IPTV?</h1>
                <p> <strong>IPTV</strong> refers to <strong>Internet-based Protocol Television</strong> where internet
                    is used to deliver TV programs & Videos that are either live or on demand.</p>
                <p>IPTV is a system where digital television service is delivered to the subscriber through Internet
                    protocol technology via the medium of broadband or internet connection </p>
            </div>
        </div>

        <div class="row row-content">
            <div class="col-12 col-lg-5">
                <h1>How does IPTV work?</h1>
                <p>IPTV is much similar like browsing the internet than traditional channel surfing. It merely uses IP
                    (Internet Protocol), a transport protocol which is a delivery mechanism to deliver the videos to the
                    viewer.</p>

                <p>Video servers transmit programs through fiber-optic cable to existing household via internet
                    connection and requests are sent out and shows are sent back.</p>
            </div>
            <div class="col-12 col-lg-5">
                <img src="{{ asset('images/mitivi2.jpg') }}" width="100%" height="auto" alt="iptv" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="row bg-primary text-center text-white p-lg-5 justify-content-center shadow">
    <div class="col-12 col-lg-3 mt-3">

        <a class="btn btn-bg" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <img src="{{ asset('images/intg.png') }}" width="30%" height="30%" class="img-fluid ">
        </a>
        <h4>Integration</h4>
        <div class="collapse" id="collapse1">
            <div class="card card-body bg-primary">
                Several services bundled and transmitted via single line hence cost is reduced.
            </div>
        </div>

    </div>
    <div class="col-12 col-lg-3 mt-3">

        <a class="btn btn-bg" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <img src="{{ asset('images/ip.png') }}" width="30%" height="30%" class="img-fluid ">
        </a>
        <h4>Switched IP</h4>
        <div class="collapse" id="collapse2">
            <div class="card card-body bg-primary">
                Efficient utilization of available bandwidth. Only the TV channel consumer uses is piped in.
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3 mt-3">

        <a class="btn btn-bg" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <img src="{{ asset('images/interactivity.png') }}" width="30%" height="30%" class="img-fluid">
        </a>
        <h4>Interactivity</h4>
        <div class="collapse" id="collapse3">
            <div class="card card-body bg-primary ">
                Interactive services such as gaming, e-shopping, e-tutuion, etc can be facilitated.
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-3 mt-3">

        <a class="btn btn-bg" data-toggle="collapse" href="#collapse4" role="button" aria-expanded="false"
            aria-controls="collapseExample">
            <img src="{{ asset('images/vod.png') }}" width="30%" height="30%" class="img-fluid ">
        </a>
        <h4>Video on Demand</h4>
        <div class="collapse" id="collapse4">
            <div class="card card-body bg-primary">
                Allows consumer to request movies at their convenience from any VoD server over the internet.
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h3>Our Plans...</h3>
    <img src="{{ asset('images/mitivi plans1-page-001.jpg') }}" width="100%" height="auto" alt="mitiviplans" class="img-fluid">
    <img src="{{ asset('images/mitivi plans1-page-002.jpg') }}" width="100%" height="auto" alt="mitiviplans" class="img-fluid">
    <a href="{{ route('contact') }}" class="btn text-white btn-block btn-connect">Get Connected</a>
</div>

@endsection
