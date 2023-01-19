<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Artist CRUD</title>
</head>

<body>
    <div class="artist bg-dark">
        <h1 class="text-center py-5">ARTIST CRUD</h1>
        @yield('content')
    </div>
</body>

</html>
