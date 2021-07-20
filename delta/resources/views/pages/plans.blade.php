@extends('layouts.layout')

@section('title')
Plans
@endsection

@section('content')
<header>
    <div class="jumbotron plans-bg" style="min-height: 250px; background-size: cover;">
        <div class="container text-center p-lg-5 " style="background-color:rgba(0,0,0,0.4); margin-top: 30px;">
            <h1
                style="font-weight: bolder; font-size: 70px;   font-size: 72px; background: -webkit-linear-gradient(#11998e, #38ef7d); -webkit-background-clip: text; -webkit-text-fill-color: transparent; ">
                <b>DBIS</b></h1>
            <h2 style="color: #67BB4B; font-weight: bold; font-style: italic;">Unlimited Plan</h2>
        </div>
    </div>
</header>

<div class="row text-center">
    <div class="col-lg-12">
        <img src="{{ asset('images/logo.png') }}" alt="Delta Broadband Services" width="200px" height="auto">
    </div>
    <div class="col-6 col-lg-6 tagline">
        <p class="animate__animated animate__fadeInLeftBig animate__delay-3s"> <b>Get Connected...</b></p>
    </div>
    <div class="col-6 col-lg-6 tagline">
        <p class="animate__animated animate__fadeInRightBig animate__delay-4s"><b>...Stay Connected</b></p>
    </div>
</div>

<div class="container mt-5">
    <h5 style="font-family: 'Paytone One', sans-serif;">NORMAL PLAN (FIBER TO HOME) <em>Fiber optional</em></h5>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="table-danger">PLANS</th>
                    <th scope="col" class="table-warning">1 MONTH <br> (PREPAID)</th>
                    <th scope="col" class="table-dark">3 MONTHS</th>
                    <th scope="col" class="table-success">6 MONTHS</th>
                    <th scope="col" class="table-info">12 MONTHS</th>
                    <th scope="col" class="table-secondary"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-success">
                    <th scope="row">5 Mbps</th>
                    <td>₹ 300</td>
                    <td>₹ 800</td>
                    <td>₹ 1600</td>
                    <td>₹ 3000</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">10 Mbps</th>
                    <td>₹ 350</td>
                    <td>₹ 1000</td>
                    <td>₹ 2000</td>
                    <td>₹ 3500</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
                <tr class="table-success">
                    <th scope="row">15 Mbps</th>
                    <td>₹ 400</td>
                    <td>₹ 1200</td>
                    <td>₹ 2400</td>
                    <td>₹ 4800</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">20 Mbps</th>
                    <td>₹ 500</td>
                    <td>₹ 1500</td>
                    <td>₹ 3000</td>
                    <td>₹ 6000</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h3 class="mt-5 font-italic" style="font-family: 'Paytone One', sans-serif;">FIBER TO HOME PLAN</h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col" class="table-danger">PLANS</th>
                    <th scope="col" class="table-warning">1 MONTH <br> (PREPAID)</th>
                    <th scope="col" class="table-dark">3 MONTHS</th>
                    <th scope="col" class="table-success">6 MONTHS</th>
                    <th scope="col" class="table-secondary"></th>

                </tr>
            </thead>
            <tbody>
                <tr class="table-warning">
                    <th scope="row">30 Mbps</th>
                    <td>₹ 700</td>
                    <td>₹ 2100</td>
                    <td>₹ 4200</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
                <tr class="table-success">
                    <th scope="row">50 Mbps</th>
                    <td>₹ 800</td>
                    <td>₹ 2400</td>
                    <td>₹ 4800</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">75 Mbps</th>
                    <td>₹ 900</td>
                    <td>₹ 2700</td>
                    <td>₹ 5400</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
                <tr class="table-success">
                    <th scope="row">100 Mbps</th>
                    <td>₹ 1000</td>
                    <td>₹ 3000</td>
                    <td>₹ 6000</td>
                    <td><a href="{{ route('dashboard') }}" type="button" class="btn btn-dark">Subscribe</a> </td>
                </tr>
            </tbody>
        </table>
    </div>

    <p class="mt-5">Terms & Conditions apply*</p>
    <ul>
        <li>Fiber to home installation will be charged.</li>
        <li>₹500 will be refundable on the return of GPON/ONU Box* in working condition.</li>
        <li>Plans are prepaid non refundable domestic use.</li>
    </ul>
</div>
@endsection
