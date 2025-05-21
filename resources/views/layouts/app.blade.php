<!DOCTYPE html>
<html>

<head>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>My Laravel Website</title>
</head>

<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow p-4 flex gap-4">
        <a href="/" class="text-blue-600 hover:underline">Home</a>
        <a href="/products" class="text-blue-600 hover:underline">Products</a>
        <a href="/about" class="text-blue-600 hover:underline">About</a>
        <a href="/contact" class="text-blue-600 hover:underline">Contact</a>
    </nav>

    <main class="p-6">
        @yield('content')
    </main>

    <footer class="text-center p-4 text-sm text-gray-500">
        <hr class="my-2">
        &copy; {{ date('Y') }} My Laravel Website
    </footer>
</body>

</html>
