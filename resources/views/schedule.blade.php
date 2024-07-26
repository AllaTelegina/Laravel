<x-app-layout>
    <x-slot name="header">

        <div class="mt-4 py-12">
            <div class="text-3xl"><span class="text-red-500 font-medium">Р</span>асписание</div>
        </div>
        <!-- панировочные сухари -->
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Храм</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Расписание</span>
                    </div>
                </li>
            </ol>
        </nav>

        <section class="text-blue-950  space-y-6 pt-8">

            <div class="bg-sky-600  text-blue-950 text-center py-4 header-date">
                <div class="mt-2">
                    <span class="text-white text-6xl m-6">Сентябрь</span>
                </div>
                <div class="flex justify-center space-x-8 text-3xl text-center m-8">
                    <div class="flex flex-col items-center skeleton h-20 w w-20 bg-blue-200 place-content-center">
                        <span>23</span>
                        <span>ПН</span>
                    </div>
                    <div class="flex flex-col items-center skeleton h-20 w w-20 bg-blue-200 place-content-center">
                        <span>24</span>
                        <span>ВТ</span>
                    </div>
                    <div class="flex flex-col items-center skeleton h-20 w w-20 bg-blue-200 place-content-center">
                        <span>25</span>
                        <span>СР</span>
                    </div>
                    <div class="flex flex-col items-center skeleton h-20 w w-20 bg-blue-200 place-content-center">
                        <span>26</span>
                        <span>ЧТ</span>
                    </div>
                    <div class="flex flex-col items-center skeleton h-20 w w-20 bg-blue-200 place-content-center">
                        <span>27</span>
                        <span>ПТ</span>
                    </div>
                    <div class="flex flex-col items-center text-orange-700 skeleton h-20 w w-20 bg-blue-200 place-content-center">
                        <span>28</span>
                        <span>СБ</span>
                    </div>
                    <div class="flex flex-col items-center text-orange-700 skeleton h-20 w w-20 bg-blue-200 place-content-center">
                        <span>29</span>
                        <span>ВС</span>
                    </div>
                </div>
            </div>

            <div class="h-min-24 my-4 mx-auto w-3/4  bg-blue-100 shadow-2xl  shadow-gray-200 rounded-lg">
                <p class="m-8">Добро пожаловать на страницу расписания богослужений Храма равноапостольного князя Владимира.
                </br>Здесь вы найдете информацию о регулярных и праздничных службах, которые проходят в нашем храме.
                Мы рады видеть вас на наших богослужениях и мероприятиях!
                </p>
            </div>

            <div class="mt-2 h-min-24 my-4 mx-auto w-3/4  bg-blue-100 shadow-2xl  shadow-gray-300 rounded-lg">
                <span class="text-blue-950 text-2xl text-center m-6">Неделя 4-я по Пятидесятнице Явление иконы Божией Матери "Казанская"</span>
            </div>

            <div class="container mx-auto space-y-10">
                <div class="flex shadow-xl shadow-blue-200">
                    <div class="bg-sky-600 text-white p-2 w-24 flex-shrink-0 text-center rounded-tl rounded-bl">
                        <div class="text-sm">Понедельник</div>
                        <div class="text-2xl">23</div>
                        <div class="text-sm">Сентября</div>
                    </div>
                    <div class="bg-blue-100 flex-1 p-4 rounded-tr rounded-br">
                        <div class="flex space-x-4">
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:00</span>
                                <span>Часы</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:30</span>
                                <span>Литургия</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">11:00</span>
                                <span>Молебень</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex shadow-xl shadow-blue-200">
                    <div class="bg-blue-400 text-white p-2 w-24 flex-shrink-0 text-center rounded-tl rounded-bl">
                        <div class="text-sm">Вторник</div>
                        <div class="text-2xl">24</div>
                        <div class="text-sm">Сентября</div>
                    </div>
                    <div class="bg-blue-100 flex-1 p-4 rounded-tr rounded-br">
                        <div class="flex space-x-4">
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:00</span>
                                <span>Часы</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Литургия</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Молебен</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex shadow-xl shadow-blue-200">
                    <div class="bg-blue-400 text-white p-2 w-24 flex-shrink-0 text-center rounded-tl rounded-bl">
                        <div class="text-sm">Среда</div>
                        <div class="text-2xl">25</div>
                        <div class="text-sm">Сентября</div>
                    </div>
                    <div class="bg-blue-100 flex-1 p-4 rounded-tr rounded-br">

                        <div class="flex space-x-4">
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:00</span>
                                <span>Часы</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Литургия</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Молебен</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex shadow-xl shadow-blue-200">
                    <div class="bg-blue-400 text-white p-2 w-24 flex-shrink-0 text-center rounded-tl rounded-bl">
                        <div class="text-sm">Четверг</div>
                        <div class="text-2xl">26</div>
                        <div class="text-sm">Сентября</div>
                    </div>
                    <div class="bg-blue-100 flex-1 p-4 rounded-tr rounded-br">
                        <div class="flex space-x-4">
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:00</span>
                                <span>Часы</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Литургия</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Молебен</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex shadow-xl shadow-blue-200">
                    <div class="bg-blue-400 text-white p-2 w-24 flex-shrink-0 text-center rounded-tl rounded-bl font-semibold">
                        <div class="text-sm">Пятница</div>
                        <div class="text-2xl">27</div>
                        <div class="text-sm">Сентября</div>
                    </div>
                    <div class="bg-blue-100 flex-1 p-4 rounded-tr rounded-br">
                        <div class="flex space-x-4">
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:00</span>
                                <span>Часы</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Литургия</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Молебен</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex shadow-xl shadow-blue-200">
                    <div class="bg-blue-400 text-orange-700 p-2 w-24 flex-shrink-0 text-center rounded-tl rounded-bl">
                        <div class="text-sm">Суббота</div>
                        <div class="text-2xl">28</div>
                        <div class="text-sm">Сентября</div>
                    </div>
                    <div class="bg-blue-100 flex-1 p-4 rounded-tr rounded-br">
                        <div class="flex space-x-4">
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:00</span>
                                <span>Часы</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Литургия</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Молебен</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex shadow-xl shadow-blue-200">
                    <div class="bg-blue-400 text-orange-700 p-2 w-24 flex-shrink-0 text-center rounded-tl rounded-bl font-semibold">
                        <div class="text-sm">Воскресенье</div>
                        <div class="text-2xl">29</div>
                        <div class="text-sm">Сентября</div>
                    </div>
                    <div class="bg-blue-100 flex-1 p-4 rounded-tr rounded-br">
                        <div class="flex space-x-4">
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">9:00</span>
                                <span>Часы</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Литургия</span>
                            </div>
                            <div class="h-16 w-px bg-blue-950"></div>
                            <div class="flex flex-col items-center">
                                <span class="font-semibold">Молебен</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="text-blue-950 body-font">

                        <div class="container px-5 py-12 mx-auto">
                            <div class="container px-10 py-24 mx-auto bg-blue-100 shadow-xl  shadow-blue-200 rounded-lg">
                                <div class="container px-5 py-8 mx-auto justify-self-auto text-center">
                                    <p class="text-4xl">Другие мероприяния</p>
                                </div>
                            <div class="flex flex-wrap -mx-4 -my-8 bg-blue-100">
                                <div class="py-8 px-4 lg:w-1/3">
                                    <div class="h-full flex items-start">
                                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">

            </span>
                                            <span class="mr-4 font-medium text-lg text-gray-800 title-font leading-none flex flex-col items-center skeleton h-20 w w-20 bg-blue-200 place-content-center">
              <div style="vertical-align: inherit;">
                <span style="vertical-align: inherit;">Сентябрь</span>
              </div>
                                                <div style="vertical-align: inherit;">
                <div style="vertical-align: inherit;">28</div>
              </div>
            </span>
                                        </div>
                                        <div class="flex-grow pl-6">
                                            <h1 class="title-font text-xl font-medium text-blue-950 mb-3">
                                                <div style="vertical-align: inherit;">
                                                    <span style="vertical-align: inherit;">Чаепитие после службы</span>
                                                </div>
                                            </h1>
                                            <p class="leading-relaxed mb-5">
                                                <div style="vertical-align: inherit;">
                                                    <p style="vertical-align: inherit;">
                                                        Приглашаем всех прихожан на традиционное
                                                        чаепитие после службы, которое состоится в понедельник, 28 сентября,
                                                        в 12:00. Это отличная возможность пообщаться и обсудить насущные вопросы
                                                        в неформальной обстановке.
                                                    </p>
                                                </div>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="py-8 px-4 lg:w-1/3">
                                    <div class="h-full flex items-start">
                                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">
              <div style="vertical-align: inherit;">
                <span style="vertical-align: inherit;">Сентябрь</span>
              </div>
            </span>
                                            <span class="font-medium text-lg text-gray-800 title-font leading-none">
              <div style="vertical-align: inherit;">
                <div style="vertical-align: inherit;">29</div>
              </div>
            </span>
                                        </div>
                                        <div class="flex-grow pl-6">
                                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">
                                                <div style="vertical-align: inherit;">
                                                    <p style="vertical-align: inherit;">Поздравление с днем рождения</p>
                                                </div>
                                            </h1>
                                            <p class="leading-relaxed mb-5">
                                                <div style="vertical-align: inherit;">
                                                    <p style="vertical-align: inherit;">В среду, 25 сентября, после
                                                        утренней службы мы будем поздравлять наших прихожан, которые
                                                        отмечают день рождения в этом месяце. Присоединяйтесь к нам,
                                                        чтобы выразить свои теплые пожелания и поддержать именинников.
                                                    </p>
                                                </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-8 px-4 lg:w-1/3">
                                    <div class="h-full flex items-start">
                                        <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
            <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">
              <div style="vertical-align: inherit;">
                <div style="vertical-align: inherit;">Сентябрь</div>
              </div>
            </span>
                                            <span class="font-medium text-lg text-gray-800 title-font leading-none">
              <div style="vertical-align: inherit;">
                <div style="vertical-align: inherit;">30</div>
              </div>
            </span>
                                        </div>
                                        <div class="flex-grow pl-6">
                                            <h1 class="title-font text-xl font-medium text-gray-900 mb-3">
                                                <div style="vertical-align: inherit;">
                                                    <p style="vertical-align: inherit;">Подготовка храма к празднику</p>
                                                </div>
                                            </h1>
                                            <div class="leading-relaxed mb-5">
                                                <div style="vertical-align: inherit;">
                                                    <p style="vertical-align: inherit;">
                                                        В субботу, 28 сентября, после утренней службы пройдет подготовка храма
                                                        к предстоящему празднику. Нам потребуется помощь в уборке и украшении храма.
                                                        Приглашаем всех желающих принять участие и внести свой вклад в создание
                                                        праздничной атмосферы.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </x-slot>
</x-app-layout>
