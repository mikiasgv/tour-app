<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tour App</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="bg-gray-900 text-white">
    <header class="border-b border-gray-800">
        <nav class="container mx-auto flex flex-col lg:flex-row items-center justify-between px-4 py-6">
            <div class="flex flex-col lg:flex-row items-center">
                <a href="/">
                    <img src="/laracasts-logo.svg" alt="Laracasts Logo" class="w-32 flex-none">
                </a>
                <ul class="flex ml-0 lg:ml-16 space-x-8 mt-6 lg:mt-0">
                    <li>
                        <a href="#" class="hover:text-gray-400">Games</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-400">Reviews</a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-400">Coming Soon</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center mt-6 lg:mt-0">
                <div class="relative">
                    <input type="text" class="bg-gray-800 text-sm rounded-full w-64 px-3 py-1 pl-8" placeholder="Search...">
                    <div class="absolute top-0 flex items-center h-full ml-2">
                        <svg class="svg-icon fill-current text-gray-400 w-4" viewBox="0 0 20 20">
                            <path d="M18.125 15.804l-4.038-4.037a6.643 6.643 0 001.01-3.534C15.089 4.62 12.199 1.75 8.584 1.75 4.815 1.75 1.982 4.726 2 8.286c.021 3.577 2.908 6.549 6.578 6.549a6.464 6.464 0 003.44-.985l4.032 4.026c.167.166.43.166.596 0l1.479-1.478a.415.415 0 000-.594M8.578 13.99c-3.198 0-5.716-2.593-5.733-5.71-.017-3.084 2.438-5.686 5.74-5.686 3.197 0 5.625 2.493 5.64 5.624.017 3.33-2.604 5.772-5.647 5.772m7.771 2.991l-3.637-3.635c.131-.11.721-.695.876-.884l3.642 3.639-.881.88z"/></svg>
                    </div>
                </div>
                <div class="ml-6">
                    <a href="#">
                        <img src="/avatar.jpg" alt="avatar" class="rounded-full w-8">
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="border-t border-gray-800">
        <div class="container mx-auto px-4 py-6">
            Powered by <a href="#">Laravit</a>
        </div>
    </footer>
    @livewireScripts
</body>
</html>
