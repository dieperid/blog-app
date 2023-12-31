@php
    $routeName = request()
        ->route()
        ->getName();
@endphp

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-white shadow dark:bg-gray-800">
        <div class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">
            <a @class([
                'text-gray-800 dark:text-gray-200',
                'border-b-2 border-blue-500' => str_starts_with($routeName, 'blog.'),
            ]) href="{{ route('blog.index') }}">Blog</a>

            <a href="#"
                class="border-b-2 border-transparent text-gray-800 dark:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Link</a>
        </div>
    </nav>
    </div>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>

</html>
