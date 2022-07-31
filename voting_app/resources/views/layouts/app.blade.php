<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Voting App</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans text-gray-900 text-sm bg-gray-background">
        <header class="flex items-center justify-between px-6 py-4">
            <a href="">
                <img src="{{asset('img/logo.svg')}}" alt="Logo">
            </a>
            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class="px-6 py-4">
                        @auth
                            <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                    <img src="https://www.gravatar.com/avatar/0000000000000000000000000000000?d=mp" alt="avatar" class="w-10 h-10 rounded-full">
                </a>
            </div>
        </header>

        <main class="container mx-auto max-w-custom flex">
            <div class="w-70 mr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eius eligendi harum illum libero molestias mollitia non nulla quasi, sequi similique sit soluta ut, vel, voluptatum. Ad beatae, culpa explicabo facilis, magnam molestias nemo praesentium repellat sint totam ut veniam voluptates, voluptatum! Ab ad autem in odit porro quae reprehenderit soluta totam vel. Accusamus accusantium aliquam aspernatur autem commodi debitis deleniti dignissimos distinctio dolorem doloribus ducimus eaque earum eius enim esse eum exercitationem expedita fugiat harum in itaque magnam maiores nihil nobis, non nostrum officiis omnis pariatur praesentium quisquam quo quod recusandae repellat sequi suscipit totam voluptas. Facilis, quia quidem.</div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li><a href="" class="border-b-4 pb-3 border-blue">All ideas (87)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-500 ease-in border-b-4 pb-3 hover:border-blue">Considering (6)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-500 ease-in border-b-4 pb-3 hover:border-blue">In progress (1)</a></li>
                    </ul>
                    <ul class="flex uppercase font-semibold space-x-10 border-b-4 pb-3">
                        <li><a href="" class="text-gray-400 transition duration-500 ease-in border-b-4 pb-3 hover:border-blue">Implemented (10)</a></li>
                        <li><a href="" class="text-gray-400 transition duration-500 ease-in border-b-4 pb-3 hover:border-blue">Closed (55)</a></li>
                    </ul>
                </nav>

                <div class="mt-8">
                    {{ $slot  }}
                </div>
            </div>

        </main>

    </body>
</html>
