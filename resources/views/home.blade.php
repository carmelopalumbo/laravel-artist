<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Artist - Home</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main class="bg-dark d-flex justify-content-center align-items-center flex-column">
        <div class="links">
            <h1 class="text-center py-5 text-white">CRUD</h1>
            <a class="btn btn-info fw-bold" href="{{ route('artist.index') }}">ARTIST CRUD</a>
            <a class="btn btn-success fw-bold mx-3" href="{{ route('artwork.index') }}">ARTWORKS CRUD</a>
            <a class="btn btn-warning fw-bold" href="{{ route('museums.index') }}">MUSEUM CRUD</a>
        </div>
    </main>
</body>

</html>
