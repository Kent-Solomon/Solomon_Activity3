<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moto-System | Directory</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-color: #1a1a1a;
            color: #eeeeee;
            margin: 0;
            font-family: sans-serif;
        }

        .top-nav {
            background-color: #262626;
            padding: 1rem 2rem;
            border-bottom: 2px solid #e63946;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <nav class="top-nav">
        <a href="{{ url('/') }}" style="text-decoration: none; display: flex; align-items: center;">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo" style="height: 55px; width: auto;">
            <span style="color: #e63946; font-weight: 900; margin-left: 10px;">MOTO_SYS Dashboard</span>
        </a>
        <span style="color: #666; font-size: 10px; font-weight: bold; text-transform: uppercase;">Central Database Access</span>
    </nav>

    <main style="padding: 40px;">
        @yield('content')
    </main>
</body>

</html>