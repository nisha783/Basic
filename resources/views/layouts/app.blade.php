<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

 @yield('content')

    <footer class="bg-dark text-white text-center py-3">
        &copy; 2025 MySite. All rights reserved.
    </footer>

</body>
</html>
