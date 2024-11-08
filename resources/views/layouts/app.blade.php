<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', 'Aplikasi Buku Tamu')</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
        header {
            background-color: #ff2d20;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h2>Aplikasi Buku Tamu</h2>
    </header>

    <main class="container mt-5">
        @yield('content')
    </main>

</body>
</html>
