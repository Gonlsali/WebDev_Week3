<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>{{ $pagetitle }}</title>
</head>

<body>
    @include('components.navigation')
    <div class="container mt-5">
        <h1>{{ $maintitle }}</h1>

        <h2>@yield('layout_tagline')</h2>
        @yield('layout_content')
    </div>
</body>

</html>
