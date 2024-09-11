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

                    <div class="p-4 calendar" id="calendar">
                            <div id="az_calendar_embed"></div>
                            <iframe src="https://azbyka.ru/days/calendar/?embed=legend,events" width="100%" height="880"></iframe>
                        </div>


                Главный православный праздник Светлое Христово Воскресение (Пасха), которое в 2024 году припадает на 5 мая.

                Двунадесятые непереходящие праздники православного календаря на 2024 год:

                7 января – Рождество Христово;
                19 января – Крещение Господне (Богоявление);
                15 февраля – Сретение Господне;
                7 апреля – Благовещение Пресвятой Богородицы;
                19 августа – Преображение Господне;
                28 августа – Успение Пресвятой Богородицы;
                21 сентября – Рождество Пресвятой Богородицы;
                27 сентября – Воздвижение Креста Господня;
                4 декабря – Введение во храм Пресвятой Богородицы.
                Двунадесятые переходящие праздники:

                28 апреля – Вход Господень в Иерусалим;
                13 июня – Вознесение Господне;
                23 июня – День Святой Троицы, Пятидесятница.
                Великие праздники:

                14 января – Обрезание Господне;
                7 июля – Рождество Иоанна Предтечи;
                12 июля – Святых апостолов Петра и Павла;
                11 сентября – Усекновение главы Иоанна Предтечи;
                14 октября – Покров Пресвятой Богородицы.
                Церковные многодневные посты 2024 года:

                до 6 января – длится Рождественский пост, который начался 28 ноября 2023 года;
                с 18 марта по 4 мая – Великий пост;
                с 1 июля по 11 июля – Петров пост;
                14 по 27 августа – Успенский пост;
                с 28 ноября по 6 января 2025 года – Рождественский пост 2024-2025.
                Церковные однодневные посты:

                18 января – Крещенский сочельник (Навечерие Богоявления);
                11 сентября – Усекновение главы Иоанна Предтечи;
                27 сентября – Воздвижение Креста Господня;
                Все среды и пятницы, за исключением сплошных седмиц и Святок.
                Сплошные седмицы:

                7 - 17 января – Святки;
                с 26 февраля по 3 марта – Мытаря и фарисея;
                с 11 марта по 17 марта – Сырная (Масленица);
                с 6 мая по 12 мая – Пасхальная (Светлая);
                с 24 июня по 30 июня – Троицкая.
                Православный календарь 2024: дни особого поминовения усопших:

                9 марта – Суббота мясопустная (Вселенская родительская суббота);
                30 марта – Суббота 2-й седмицы Великого поста;
                6 апреля – Суббота 3-й седмицы Великого поста;
                13 апреля – Суббота 4-й седмицы Великого поста;
                14 мая – Радоница;
                9 мая – Поминовение усопших воинов;
                22 июня – Троицкая родительская суббота;
                2 ноября – Димитриевская родительская суббота.



            </section>
        </div>
    </x-slot>
</x-app-layout>
