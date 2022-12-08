<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-100">
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                <li>
                    <a href="#" class="p-3">Home</a>
                </li>
                <li>
                    <a href="#" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="p-3">Post</a>
                </li>
            </ul>
            <ul class="flex items-center">
                <li>
                    <a href="#" class="p-3">Wilmy Danguya</a>
                </li>
                <li>
                    <a href="#" class="p-3">Login</a>
                </li>
                <li>
                    <a href="#" class="p-3">Register</a>
                </li>
                <li>
                    <a href="#" class="p-3">Logout</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
