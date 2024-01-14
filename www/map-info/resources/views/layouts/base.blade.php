<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <title>@yield('title')</title>
</head>

<body>
@include('layouts.header')

<div class="container mt-3">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-sm-12 col-12 m-auto">
            @yield('content')
        </div>
    </div>
</div>

@include('layouts.footer')
</body>

</html>
