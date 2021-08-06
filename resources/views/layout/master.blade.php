<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Website</title>

     <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    @include('layout.navbar')

    @if(session('message'))
    <div class="container mx-auto px-32 py-4">
        <div class="bg-yellow-100 border border-yellow-500 p-4 rounded">
            {{ session('message') }}
        </div>
    </div>
    @endif

    <div class="container mx-auto px-32">
        @yield('content')
    </div>
    @include('layout.footer')
</body>
</html>
