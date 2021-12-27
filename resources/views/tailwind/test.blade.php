<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans grayBg text-gray-900 text-sm">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#">Logo</a>
    <div class="flex items-center">
        @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                    {{--                           <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>--}}
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="https://gravatar.com/avatar/000000000000?d=mp" class="w-10 h-10 rounded-full" alt="">
        </a>
    </div>
</header>
<div class="container mx-auto flex" style="max-width: 1000px">

    <div class="w-3/12">

    </div>
    <div class="w-8/12">
        <nav class="flex items-center justify-between text-xs ">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="border-b-4 pb-3 border-blue-500">All Ideas (87)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Considering (87)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">In Progress (87)</a></li>
            </ul>

            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Implemented (87)</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">Closed (87)</a></li>
            </ul>
        </nav>
        <div class="mt-8">
            <div class="filters flex space-x-6">
                <div class="w-1/3">
                    <select name="category" class="w-full rounded-xl px-4 py-2 border-none" id="category">
                        <option value="">Category1</option>
                        <option value="">Category2</option>
                        <option value="">Category3</option>
                    </select>
                </div>
                <div class="w-1/3">
                    <select name="category" class="w-full rounded-xl px-4 py-2 border-none" id="category">
                        <option value="">Filter!</option>
                        <option value="">Category2</option>
                        <option value="">Category3</option>
                    </select>
                </div>
                <div class="w-1/3 relative" >
                    <input type="search" placeholder="find an idea" class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8">
                <div class="absolute top-0 flex items-center h-full ml-2">`
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
