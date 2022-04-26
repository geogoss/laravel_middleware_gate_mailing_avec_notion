<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href=" {{asset('css/app.css')}} ">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <header
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        
        <div>

            <h1 class="text-white text-center text-4xl">Welcome</h1>
            <h2 class="text-white text-center text-2xl">Join us to optimize your business</h2>
            <section class="bg-gray-100 dark:bg-gray-900 lg:py-12 lg:flex lg:justify-center">
                <div class="bg-white dark:bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
                    <div class="lg:w-1/2">
                        <div class="h-64 bg-cover lg:rounded-lg lg:h-full"
                            style="background-image:url('https://images.unsplash.com/photo-1593642532400-2682810df593?ixlib=rb-1.2.1&ixid=MXwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80')">
                        </div>
                    </div>
        
                    <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white md:text-3xl">Build Your New <span
                                class="text-blue-600 dark:text-blue-400">Idea</span></h2>
                        <p class="mt-4 text-gray-600 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Quidem modi reprehenderit vitae exercitationem aliquid dolores ullam temporibus enim expedita
                            aperiam mollitia iure consectetur dicta tenetur, porro consequuntur saepe accusantium consequatur.
                        </p>
        
                        <div class="mt-8">
                            <a href="#"
                                class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-200 transform bg-gray-900 rounded-md hover:bg-gray-700">Start
                                Now</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>



</body>

</html>
