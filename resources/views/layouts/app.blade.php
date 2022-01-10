<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('includes.header')
    <div class="container mt-5">
        <div class="row">
            <div class="col-9">
                @yield('content')
            </div>
            <div class="col-3">
                @include('includes.side')
            </div>
        </div>
    </div>
</body>
</html>
