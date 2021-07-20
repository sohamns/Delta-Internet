<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Error</title>
</head>
<body>
    <div class="container text-center">
        <h1>Error. Please try again!</h1>
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Return</a>
    </div>
</body>
</html>