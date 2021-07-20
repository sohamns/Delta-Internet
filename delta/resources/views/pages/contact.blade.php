@extends('layouts.layout')

@section('title')
Contact
@endsection

@section('content')
<div class="container">
    <div class="row row-content">
        <div class="col-12 mt-4">
            <h2>Send us a message</h2>
        </div>
        <div class="col-12 col-md-8 mt-4">
            <form method="POST" action="{{ route('contact.post') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="Message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>
@endsection
