@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Confirm Payment') }}</h2>
                </div>

                <div class="card-body">
                    <p>
                        <b>Confirm payment of Rs. {{ session('payment.amount') / 100 }}?</b>
                    </p>
                    <button id="rzp-button" class="btn btn-primary">Confirm</button>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Return</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
var options = {
    "key": "{{ env('API_KEY') }}", 
    "amount": {{ session('payment.amount') * 100 }}, 
    "currency": "INR",
    "name": "Delta Broadband Services",
    "image": "{{ asset('images/logo.png') }}",
    "order_id": "{{ session('payment.order_id')  }}",
    "callback_url": "{{ route('verify') }}",
};

var rzp = new Razorpay(options);

rzp.on('payment.failed', function (response){
        alert(response.error.code)
});

document.getElementById('rzp-button').onclick = function(e){
    rzp.open();
    e.preventDefault();
}
</script>
@endsection