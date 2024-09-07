<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">К</span>алендарь на год</div>
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
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <a href="/" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Православный календарь</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Календарь на год</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="bg-sky-600 text-white text-center mt-6 header-date rounded-3xl">
                    <div class="mt-4">
                        <span class="text-white text-2xl lg:text-4xl m-6">Православный календарь</span>
                    </div>

                    <div class="flex justify-center space-x-8 text-sm lg:text-2xl text-center m-8 pb-8">
                        <p>Православный календарь на текущий год, который содержит информацию о всех основных и праздничных днях православной церкви.
                            В календаре вы сможете узнать даты всех церковных праздников, постов, а также других значимых событий, которые помогут
                            вам сориентироваться в духовной жизни и следовать традициям православия.
                        </p>
                    </div>
                </div>

                http://calendar.lenacom.spb.ru/calendar1.html

                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between px-6 py-3 bg-gray-700">
                        <button id="prevMonth" class="text-white">Previous</button>
                        <h2 id="currentMonth" class="text-white"></h2>
                        <button id="nextMonth" class="text-white">Next</button>
                    </div>
                    <div class="p-4 calendar" id="calendar">
                            <div id="az_calendar_embed"></div>
                            <iframe src="https://azbyka.ru/days/calendar/?embed=legend,events" width="100%" height="580"></iframe>
                        </div>
                </div>


                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="flex items-center justify-between px-6 py-3 bg-gray-700">
                        <button id="prevMonth" class="text-white">Previous</button>
                        <h2 id="currentMonth" class="text-white"></h2>
                        <button id="nextMonth" class="text-white">Next</button>
                    </div>
                    <div class="grid grid-cols-7 gap-2 p-4" id="calendar">
                        <!-- Calendar Days Go Here -->
                    </div>


                <div class="grid grid-cols-7 gap-4 text-center text-gray-700 font-bold">
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                    <div>Sun</div>
                </div>


                <div class="grid grid-cols-7 gap-4 mt-4">
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">1 Mon</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-11% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">2 Tue</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-21% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">3 Wed</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-27% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">4 Thu</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-6% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">5 Fri</div>
                    <div>$179</div>
                    <div class="text-sm text-gray-600">-22% vs. Comp</div>
                </div>
                <div class="p-2 bg-red-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">6 Sat</div>
                    <div>$259</div>
                    <div class="text-sm text-gray-600">+13% vs. Comp</div>
                </div>
                <div class="p-2 bg-gray-300 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">7 Sun</div>
                    <div>Sold out</div>
                </div>
                </div>
                <div class="grid grid-cols-7 gap-4 mt-4">
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">1 Mon</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-11% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">2 Tue</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-21% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">3 Wed</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-27% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">4 Thu</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-6% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">5 Fri</div>
                        <div>$179</div>
                        <div class="text-sm text-gray-600">-22% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-red-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">6 Sat</div>
                        <div>$259</div>
                        <div class="text-sm text-gray-600">+13% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-gray-300 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">7 Sun</div>
                        <div>Sold out</div>
                    </div>
                </div>
                <div class="grid grid-cols-7 gap-4 mt-4">
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">1 Mon</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-11% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">2 Tue</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-21% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">3 Wed</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-27% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">4 Thu</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-6% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">5 Fri</div>
                        <div>$179</div>
                        <div class="text-sm text-gray-600">-22% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-red-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">6 Sat</div>
                        <div>$259</div>
                        <div class="text-sm text-gray-600">+13% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-gray-300 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">7 Sun</div>
                        <div>Sold out</div>
                    </div>
                </div>
                <div class="grid grid-cols-7 gap-4 mt-4">
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">1 Mon</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-11% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">2 Tue</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-21% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">3 Wed</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-27% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">4 Thu</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-6% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">5 Fri</div>
                        <div>$179</div>
                        <div class="text-sm text-gray-600">-22% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-red-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">6 Sat</div>
                        <div>$259</div>
                        <div class="text-sm text-gray-600">+13% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-gray-300 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">7 Sun</div>
                        <div>Sold out</div>
                    </div>
                </div>
                <div class="grid grid-cols-7 gap-4 mt-4">
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">1 Mon</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-11% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">2 Tue</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-21% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">3 Wed</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-27% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">4 Thu</div>
                        <div>$219</div>
                        <div class="text-sm text-gray-600">-6% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-green-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">5 Fri</div>
                        <div>$179</div>
                        <div class="text-sm text-gray-600">-22% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-red-100 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">6 Sat</div>
                        <div>$259</div>
                        <div class="text-sm text-gray-600">+13% vs. Comp</div>
                    </div>
                    <div class="p-2 bg-gray-300 text-center rounded calendar-card">
                        <div class="text-xs text-gray-500">7 Sun</div>
                        <div>Sold out</div>
                    </div>
                </div>




                </div>

                    <div class="flex justify-around mt-8">
                        <div class="px-4 py-2 bg-green-100 rounded">Low demand</div>
                        <div class="px-4 py-2 bg-yellow-100 rounded">Medium demand</div>
                        <div class="px-4 py-2 bg-red-100 rounded">High demand</div>
                    </div>






                <div id="datepicker-inline" inline-datepicker data-date="02/25/2024"></div>

            </section>
        </div>
    </x-slot>
</x-app-layout>
