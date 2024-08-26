<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.2.1/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @stack('scripts')
</head>


<div class="fixed z-50 top-0 w-full">
<a href="/" class="float-left pl-36">
    <img class="w-16 h-16 shadow-xl shadow-blue-200" src="{{asset('images/logo.png')}}"/>
    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
</a>

<nav class="bg-blue-100 border-gray-200 dark:bg-gray-900 dark:border-gray-700 text-blue-950">

    <div class="float-right md:float-none max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

        <button data-collapse-toggle="navbar-dropdown" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-blue-950 rounded-lg md:hidden hover:bg-blue-100
                focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-normal p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse
             md:flex-row md:mt-0 md:border-0 md:bg-blue-100 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <button id="templateNavbarLink" data-dropdown-toggle="templateNavbar"
                            class="р-5 flex items-center justify-between w-full py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent
                             md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white
                             dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Храм
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="templateNavbar"
                         class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="templateLargeButton">
                            <li>
                                <a href="/aboutthetemple"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">О
                                    Храме</a>
                            </li>
                            <li>
                                <a href="/story"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">История
                                    Храма</a>
                            </li>
                            <li>
                                <a href="/schedule"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Расписание</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="h-5 flex items-center justify-between w-full py-2 px-3
                        rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500
                         dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Новости
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar"
                         class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/publications"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Публикации</a>
                            </li>
                            <li>
                                <a href="/foto"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Фотографии</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Об
                                    иконах</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="noteNavbarLink" data-dropdown-toggle="noteNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100
                             md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white
                             md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Прихожанам
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="noteNavbar"
                         class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="noteLargeButton">
                            <li>
                                <a href="/note"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Подать
                                    записку</a>
                            </li>
                            <li>
                                <a href="/sacraments"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Таинства</a>
                            </li>
                            <li>
                                <a href="prayers"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Молитвы</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <button id="calendarNavbarLink" data-dropdown-toggle="calendarNavbar"
                            class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                        Православный календарь
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="calendarNavbar"
                         class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="calendarLargeButton">
                            <li>
                                <a href="#"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Календарь
                                    на год</a>
                            </li>
                            <li>
                                <a href="/weddingcalendar"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Календарь
                                    венчаний</a>
                            </li>
                            <li>
                                <a href="/namecalendar"
                                   class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Календарь
                                    имени</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Духовная
                        литература</a>
                </li>
                <li>
                    <a href="/healer"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Храм-часовня
                        Целительница</a>
                </li>
                <li>
                    <a href="/school"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Воскресная
                        школа</a>
                </li>
                <li>
                    <a href="/sponsors"
                       class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Спонсоры</a>
                </li>
                <div class="relative group">
                    <a class="false py-[29px] text-sm" href="#">RU</a>
                    <div class="absolute hidden group-hover:block bg-white shadow-lg mt-2 rounded-lg">
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">EN</a>
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">PL</a>
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" href="#">DE</a>
                    </div>
                </div>
                <div class="hidden items-center lg:flex">
                    @guest
                        <a class="" href="/login">Логин</a>
                    @else
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-responsive-nav-link :href="route('logout')"
                                                   onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-responsive-nav-link>
                        </form>
                    @endguest
                </div>
            </ul>
        </div>
    </div>
</nav>
    </div>
</div>

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





<!-- Форма обратной связи -->
<section id="consult" class="body-font relative">
    <div class="container px-5 py-8 mx-auto">
        <div class="flex flex-col text-center w-full mb-8  text-blue-950">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4">Остались вопросы ?</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed">Напишите нам, будем рады ответить Вам!</p>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">

            <div class="flex flex-wrap -m-2">
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">Имя</label>
                        <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-1/2">
                    <div class="relative">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Сообщение</label>
                        <textarea id="message" name="message" rows="10" class="w-full bg-gray-100 bg-opacity-50 rounded border
                        border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2
                        focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1
                        px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">
                        </textarea>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <button type="submit" class="flex mx-auto focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out bg-orange-400 text-white font-medium py-2 px-10 rounded-lg hover:bg-sky-600">
                        <a href="#">Отправить</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="fixed bottom-0 right-0 p-4">
    <button class="bg-gray-800 text-white rounded-full w-10 h-10 flex items-center justify-center" onclick="backToTop()">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
</div>

<footer class="footer bg-blue-200 text-base-content p-10">
    <nav>
        <h6 class="footer-title">Контакты</h6>
        <a class="link link-hover">
            <p class="mb-4 flex items-center justify-center md:justify-start">
                         <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                             <svg
                                 xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 24 24"
                                 fill="currentColor">
                         <path
                             d="M11.47 3.84a.75.75 0 011.06 0l8.69
                          8.69a.75.75 0 101.06-1.06l-8.689-8.
                          69a2.25 2.25 0 00-3.182 0l-8.69
                          8.69a.75.75 0 001.061 1.06l8.69-8.69z"/>
                          <path
                              d="M12 5.432l8.159 8.159c.03.03.06.058.091
                          .086v6.198c0 1.035-.84 1.875-1.875 1.875H1
                          5a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-
                          .75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.
                          75.75H5.625a1.875 1.875 0 01-1.875-1.875v-
                          6.198a2.29 2.29 0 00.091-.086L12 5.43z"/>
                          </svg>
                          </span>
                РБ, Брестская область,
                Жабинковский район, д. Чижевщина
            </p>
        </a>

        <a class="link link-hover">
            <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor">
              <path
                  d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"/>
              <path
                  d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"/>
            </svg>
          </span>
                teleginaallaa@gmail.com
            </p>
        </a>
        <a class="link link-hover">
            <p class="mb-4 flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor">
              <path
                  fill-rule="evenodd"
                  d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                  clip-rule="evenodd"/>
            </svg>
              <a class="link link-hover href="tel:+375333297190">+375 33 329 71 90</a>
          </span>
            </p>
        </a>
        <a href="https://instagram.com/hram_chizhevshina?igshid=MzRlODBiNWFlZA==" class="link link-hover">
            <p class="flex items-center justify-center md:justify-start">
          <span class="me-3 [&>svg]:h-5 [&>svg]:w-5">
                 <img src="https://www.svgrepo.com/show/303145/instagram-2-1-logo.svg" width="30" height="30"
                      alt="inst"/>
          </span>
                Мы в Instagram
            </p>
        </a>
    </nav>
    <nav>
        <h6 class="footer-title">Ссылки</h6>
        <a class="link link-hover">Цитата дня</a>
        <a class="link link-hover">Постные блюда</a>
        <a class="link link-hover">Христианская библиотека</a>
        <a class="link link-hover">Скачать открытку</a>
    </nav>
    <nav>
        <h6 class="footer-title">Информация</h6>
        <a class="link link-hover">Условия эксплуатации</a>
        <a class="link link-hover">Политика конфиденциальности</a>
        <a class="link link-hover">Политика использования файлов cookie</a>
    </nav>
    <form>
        <h6 class="footer-title">Новостная рассылка</h6>
        <fieldset class="form-control w-80">
            <label class="label">
                <span class="label-text">Введите Email адрес</span>
            </label>
            <div class="join">
                <input
                    type="text"
                    placeholder="username@gmail.com"
                    class="input input-bordered join-item"/>
                <!--<button class="btn btn-primary join-item">Subscribe</button>-->
                <button
                    class="transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium py-2 px-4 rounded hover:bg-sky-600 transition duration-700 ease-in-out">
                    Подписаться
                </button>
            </div>
        </fieldset>
    </form>
</footer>

<footer class="footer footer-center bg-blue-200 text-base-content p-4">
    <aside>
        <p>Авторские права © 2023 Храм Cвятого равноапостольного князя Владимира</p>
    </aside>
</footer>

<footer class="footer bg-blue-200 text-base-content border-base-300 border-t px-10 py-4">
    <aside class="grid-flow-col items-center">
        <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
            fill-rule="evenodd"
            clip-rule="evenodd"
            class="fill-current">
            <path
                d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path>
        </svg>
        <p>
            Web Desinger Alla Telegina
            teleginaallaa@gmail.com
        </p>
    </aside>
    <nav class="md:place-self-center md:justify-self-end">
        <div class="grid grid-flow-col gap-4">
            <a href="#"
               class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                </svg>
            </a>
            <a href="#"
               class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                </svg>
            </a>
            <a href="#"
               class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                </svg>
            </a>
            <a href="#"
               class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full mr-1 hover:text-blue-400 hover:border-blue-400">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                    <path
                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path>
                </svg>
            </a>
            <a href="#"
               class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full hover:text-blue-400 hover:border-blue-400">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path
                        d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
                </svg>
            </a>
            <a href="#"
               class="inline-flex items-center justify-center h-8 w-8 border border-gray-100 rounded-full hover:text-blue-400 hover:border-blue-400">
                <svg class="w-4 h-4 fill-current" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M2.8794 11.5527V3.86835H0.318893V11.5527H2.87967H2.8794ZM1.59968 2.81936C2.4924 2.81936 3.04817 2.2293 3.04817 1.49188C3.03146 0.737661 2.4924 0.164062 1.61666 0.164062C0.74032 0.164062 0.167969 0.737661 0.167969 1.49181C0.167969 2.22923 0.723543 2.8193 1.5829 2.8193H1.59948L1.59968 2.81936ZM4.29668 11.5527H6.85698V7.26187C6.85698 7.03251 6.87369 6.80255 6.94134 6.63873C7.12635 6.17968 7.54764 5.70449 8.25514 5.70449C9.18141 5.70449 9.55217 6.4091 9.55217 7.44222V11.5527H12.1124V7.14672C12.1124 4.78652 10.8494 3.68819 9.16483 3.68819C7.78372 3.68819 7.17715 4.45822 6.84014 4.98267H6.85718V3.86862H4.29681C4.33023 4.5895 4.29661 11.553 4.29661 11.553L4.29668 11.5527Z"
                        fill="currentColor"/>
                </svg>
            </a>
        </div>
    </nav>


    <aside class="fixed z-50 flex items-center justify-center px-5 py-3 text-white bg-sky-600 border-b-blue-900 rounded-lg bottom-4 right-4">

        <a href="#" class="text-xl font-medium hover:opacity-75">
           Помочь Храму
        </a>

        <button onClick="return this.parentNode.remove()" class="p-1 ml-3 rounded bg-white/20 hover:bg-white/10">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                <path fillRule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clipRule="evenodd" />
            </svg>
        </button>
    </aside>

    @if(!isset($_COOKIE['close']))
        <div>
            <div class="fixed left-0 bottom-0 z-40 " x-data="{cookies: true}" x-init='$watch("cookies",
                                    o => !o && window.setTimeout(() => (cookies = true), 1000)); setTimeout(() => cookies = true, 1500)'
                 @keydown.window.escape="cookies = false">
                <!-- Advise -->
                <div x-show="cookies"
                     class="fixed sm:left-4 bottom-20 rounded-lg bg-white shadow-2xl w-full sm:w-1/2 xl:w-1/4 max-w-[450px] overflow-hidden"
                     style="display: none;"
                     x-transition:enter="transition ease-in duration-200"
                     x-transition:enter-start="opacity-0 transform -translate-x-40"
                     x-transition:enter-end="opacity-100 transform translate-x-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100 transform translate-x-0"
                     x-transition:leave-end="opacity-0 transform -translate-x-40">

                    <!-- Text -->
                    <div class="">
                        <div class="relative overflow-hidden px-8 pt-8">
                            <div width="80" height="77" class="absolute -top-10 -right-10 text-yellow-500">
                                <svg width="120" height="119" viewBox="0 0 120 119" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3"
                                          d="M6.38128 49.1539C3.20326 32.893 13.809 17.1346 30.0699 13.9566L70.3846 6.07751C86.6455 2.89948 102.404 13.5052 105.582 29.7661L113.461 70.0808C116.639 86.3417 106.033 102.1 89.7724 105.278L49.4577 113.157C33.1968 116.335 17.4384 105.729 14.2604 89.4686L6.38128 49.1539Z"
                                          fill="currentColor"/>
                                </svg>
                            </div>
                            <div class="text-2xl flex flex-col pb-4">
                                <small></small>
                                <span class="text-2xl font-bold">Благословенного дня !</span>
                            </div>
                            <div class="pb-4">
                                <p>Мы используем файлы <span class="text-xl">cookie</span> и другие технологии
                                    отслеживания для повышения вашего удобства
                                    при просмотре информации на нашем сайте, показа вам персонализированного контента и
                                    адресных рекламных объявлений, а также анализа трафика на нашем сайте и понимания
                                    того,
                                    откуда на наш сайт приходят посетители. Более подробную информацию о файлах cookie
                                    вы
                                    можете найти в нашей
                                    <a href="/cookies" class="link-warning link-hover">
                                        Политике
                                    </a>
                                    в области файлов cookie.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Boutons -->
                    <div class="w-full flex justify-center items-center border-t border-solid border-gray-200">
                        <a href="/cookie/close"
                           class="border-r border-gray-200 flex-1 px-4 py-3 text-gray-500 hover:text-white hover:bg-orange-400 duration-150">
                            Нет, спасибо!
                        </a>
                        <a href="/cookie/close"
                           class="flex-1 px-4 py-3 text-gray-500 hover:text-white hover:bg-blue-950 duration-150">
                            Конечно!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</footer>
</body>

</html>
