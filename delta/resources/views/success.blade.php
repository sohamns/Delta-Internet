<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Success</title>
</head>
<body>
    <div class="container text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgyobPWtA8sK4FUdJ7v2mVN1k1XYUwsy1q8A&usqp=CAU" class="img-fluid">
        <h1>Payment successful!</h1>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Return</a>
    </div>
</body>
</html>