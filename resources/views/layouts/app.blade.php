<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <header class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <header class="text-gray-600 body-font">
                <img src="{{asset('images/logo.png')}}" />
                <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">



            <a class="mr-5 hover:text-gray-900">
                <font style="vertical-align: inherit;">
                    <ul class="menu menu-horizontal px-4">
                        <li>
                            <details>
                                <summary>
                                    {{App::getlocale()}}
                                </summary>
                                <ul class="p-2 bg-base-100 rounded-t-none">
                                    <li><a href="/?lang:en">EN</a></li>
                                    <li><a href="/?lang:ru">RU</a></li>
                                    <li><a href="/?lang:be">BE</a></li>
                                    <li><a href="/?lang:pl">PL</a></li>
                                    <li><a href="/?lang:fr">FR</a></li>
                                    <li><a href="/?lang:it">IT</a></li>
                                    <li><a href="/?lang:de">DE</a></li>
                                </ul>
                            </details>
                        </li>
                </font>


                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                HTML
                                <div class="menu">
                                    <details class="dropdown open"><font></font>
                                        <summary class="menu bg-base-600 w-56 rounded-box"></summary><font></font>
                                        <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-52">
                                            <li><a href="index.blade.php" class="link link-hover">Храм{{__('menu.temple')}}</a></li>
                                            <ul class="p-2 rounded_no bg-base-100 rounded-box w-52">
                                                <li><a href="#" class="link link-hover">O Храме{{__('menu.temple_menu.about_the_temple')}}</a></li>
                                                <li><a href="#" class="link link-hover">История Храма</a></li>
                                                <li><a href="#" class="link link-hover">Расписание</a></li>
                                            </ul>
                                            <li><a href="#" class="link link-hover">Прихожанам</a></li>
                                            <li><a href="#" class="link link-hover">Православный календарь</a></li>
                                            <li><a href="#" class="link link-hover">Церковная лавка</a></li>
                                            <li><a href="#" class="link link-hover">Новости</a></li>
                                            <li><a href="#" class="link link-hover">Детям</a></li>
                                        </ul><font></font>
                                    </details>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </a>
        </div>
        </header>
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>


                <footer>
                    @if(!isset($_COOKIE['close']))
                    <div>
                        <a href="#">Times</a>
                        COOKIE
                    </div>
                    @endif
                </footer>

    </body>

</html>
