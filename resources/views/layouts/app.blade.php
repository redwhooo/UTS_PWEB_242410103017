<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookRev - Book Review</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <x-navbar />

    <main class="main-content">
        @yield('content')
    </main>

    @include('components.footer')
</body>

</html>
