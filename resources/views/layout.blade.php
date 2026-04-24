<!DOCTYPE html>
<html>
<head>
    <title>Menus</title>
    <style>
        nav a {
            margin: 10px;
            text-decoration: none;
        }
        .active {
            font-weight: bold;
            color: red;
        }
        footer {
            margin-top: 50px;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/photos" class="{{ request()->is('photos') ? 'active' : '' }}">Photos</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <hr>

    @yield('content')

    <footer>
        <hr>
        <p>Victor Herrera</p>
    </footer>

</body>
</html>