<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">Х</span>рам часовня Целительница</div>
                </div>
                <!-- панировочные сухари -->
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Главная
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Храм часовня Целительница</span>
                            </div>
                        </li>
                    </ol>
                </nav>


                <section class="py-4">
                    <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400 mt-8">
                        <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="/" title="Логотип">
                            <img src="{{asset('images/logo.png')}}" class="w-20 h-20"/>
                        </a>
                        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-white">
                                <h1 class="mb-2 leading-relaxed text-2xl text-center">О храме часовне Целительница</h1>
                                <p class="mb-2 leading-relaxed text-xl text-justify">
                                    Добро пожаловать на страницу Храма-Часовни в честь иконы Божией Матери «Целительница».
                                    Этот святой уголок был основан в 2004 году по благословению епископа Брестского и Кобринского Иоанна
                                    и освящения 1 октября 2005 года. Часовня находится на территории Санатория «Надзея»
                                    это место духовного развития и исцеления для всех!
                                </p>
                            </div>
                            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                                <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/healer.jpg')}}">
                            </div>
                        </div>
                    </div>
                </section>


                <div class="py-4 h-min-24 mx-auto w-3/4  bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                    <p class="leading-relaxed text-xl text-center p-4">
                        На этой странице вы найдете актуальное расписание богослужений,
                        информацию о нашем местоположении, а также сможете ознакомиться с фотогалереей,
                        передающей атмосферу этого уникального места. Мы приглашаем вас присоединиться к нашей службе
                        и ощутить благодать молитвами под покровом Божией Матери.
                    </p>
                </div>


                <section class="text-blue-950  space-y-6 pt-2 py-4">
                        <section>
                            <div class="my-4">
                                <div class="text-3xl"><span class="text-orange-600 font-medium">P</span>асписание</div>
                            </div>
                            </section>
                                <div class="mt-2 h-min-24 my-8 py-2 px-4 mx-auto w-3/4 text-center bg-blue-100 shadow-2xl shadow-gray-300 rounded-lg">
                                    <span class="text-2xl ">{{$week->name}}</span>
                                </div>
                        <div class="container mx-auto space-y-4 p-4 bg-blue-100 shadow-lg rounded-lg">
                            <div class="overflow-x-auto">
                                <table class="min-w-full bg-blue-100">
                                    <thead class="bg-sky-600 text-white text-xl">
                                    <tr>
                                        <th class="w-1/4 py-2 px-4 text-left">Месяц</th>
                                        <th class="w-1/4 py-2 px-4 text-left">Дата</th>
                                        <th class="w-1/4 py-2 px-4 text-left">День недели</th>
                                        <th class="w-1/4 py-2 px-4 text-left">Время</th>
                                        <th class="w-1/2 py-2 px-4 text-left">Служба</th>
                                    </tr>
                                    </thead>
                                    @foreach($week->days as $day)
                                    <tbody class="text-xl">
                                    <tr>
                                        <td class="border-b py-2 px-4">{{$day->month}}</td>
                                        <td class="border-b py-2 px-4">{{$day->day}}</td>
                                        <td class="border-b py-2 px-4">{{$day->day_week}}</td>
                                        <td class="border-b py-2 px-4">{{$day->liturgy_evening}} Литургия Вечерняя</td>
                                        <td class="border-b py-2 px-4">{{$day->bdenie}} Всенощное бдение</td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                </section>


                                <section>
                                    <div class="my-8">
                                        <div class="text-3xl"><span class="text-orange-600 font-medium">А</span>дрес</div>
                                    </div>
                                    <section>
                                <div class="p-4 card lg:card-side text-blue-950 shadow-xl shadow-gray-300 rounded-2xl bg-blue-100">
                                    <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1729.5213195353103!2d24.139037078161664!3d52.19046306394302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47211eccc1c3521b%3A0x5f8a14fd7fe00324!2z0KbQtdGA0LrQvtCy0Ywg0LjQutC-0L3RiyDQn9GA0LXRgdCy0Y_RgtC-0Lkg0JHQvtCz0L7RgNC-0LTQuNGG0Ysg0KbQtdC70LjRgtC10LvRjNC90LjRhtGLLCDRgSDQutC-0LvQvtC60L7Qu9GM0L3QtdC5!5e0!3m2!1sru!2sru!4v1727851784191!5m2!1sru!2sru" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                        <div class="card lg:card-side bg-blue-100">
                                            <div class="card-body">
                                                <h2 class="card-title">Как к нам приехать</h2>
                                                <p> Брестская область, Жабинковский район,
                                                    1,6 км севернее д. Чижевщина, на территории санатория "Надзея” расположен храм часовня Целительница.
                                                </p>
                                            </div>
                                        </div>
                                    </figure>
                                </div>

                                        <section>
                                            <div class="my-8">
                                                <div class="text-3xl"><span class="text-orange-600 font-medium">Г</span>алерея</div>
                                            </div>
                                        </section>

                                                        <div class="h-screen w-full flex items-center justify-center overflow-hidden mt-8 mb-0 bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl sm:h-120 md:h-120 ">
                                                            <div class="relative lg:w-[290px] lg:h-[290px] md:w-[220px] md:h-[220px] sm:w-[180px] sm:h-[180px] w-[100px] h-[100px] [transform-style:preserve-3d] animate-[rotate_30s_linear_infinite]">
                                                                <span style="--i:1" class="span-style rounded-2xl"><img src="images/9.jpg" alt="img - 1"  class="img-style"/></span>
                                                                <span style="--i:2" class="span-style rounded-2xl"><img src="images/14.jpg" alt="img - 2"  class="img-style"/></span>
                                                                <span style="--i:3" class="span-style rounded-2xl"><img src="images/12.jpg" alt="img - 3"  class="img-style"/></span>
                                                                <span style="--i:4" class="span-style rounded-2xl"><img src="images/13.jpg" alt="img - 4"  class="img-style"/></span>
                                                                <span style="--i:5" class="span-style rounded-2xl"><img src="images/16.jpg" alt="img - 5"  class="img-style"/></span>
                                                                <span style="--i:6" class="span-style rounded-2xl"><img src="images/6.jpg" alt="img - 6"  class="img-style"/></span>
                                                                <span style="--i:7" class="span-style rounded-2xl"><img src="images/5.jpg" alt="img - 7"  class="img-style"/></span>
                                                                <span style="--i:8" class="span-style rounded-2xl"><img src="images/9.jpg" alt="img - 8" class="img-style"/></span>
                                                            </div>
                                                        </div>

                </section>
        </div>
    </x-slot>
</x-app-layout>
