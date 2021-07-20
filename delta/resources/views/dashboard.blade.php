@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Payment') }}</h2>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('order') }}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="amount">Amount</label>
                          <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter the amount">
                        </div>
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection