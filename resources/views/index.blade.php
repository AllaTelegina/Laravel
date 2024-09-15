<x-app-layout>

    <x-slot name="header">

        <section class="mt-40 container px-5 mx-auto">
            <div class="relative bg-sky-600 shadow-xl shadow-gray-300 rounded-2xl mt-8">
                <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="#" title="Логотип">
                    <img src="{{asset('images/logo.png')}}" class="w-20 h-20" />
                </a>
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-center text-white">
                        <p class="mb-2 leading-relaxed">Приход храма</p>
                        <p class="mb-2 leading-relaxed">равноапостольного</p>
                        <h1 class="title-font sm:text-5xl text-4xl mb-4 font-medium text-white-900">КНЯЗЯ ВЛАДИМИРА</h1>
                        <p class="mb-2 leading-relaxed text-white-700">д.Чижевщина Брестской епархии</p>
                        <p class="mb-2 leading-relaxed">Белорусского Экзархата</p>
                        <p class="mb-2 leading-relaxed">Московского Патриарха</p>
                        <div class="flex justify-center py-8">
                            <button class="inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded-lg hover:bg-sky-600  transition duration-700 ease-in-out">Выбрать требу</button>
                            <button class="ml-4 inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-sky-700 text-white font-medium rounded-lg hover:bg-orange-300 transition duration-700 ease-in-out">Пожертвовать</button>
                        </div>
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                        <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="/images/fon.jpg">
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-5 mt-8 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
                                <div class="text-centre">
                                    <span>23</span>
                                    <span>ПН</span>
                                </div>
                                <span class="">9:00</span>
                                <span>Часы</span>
                                <span class="">9:30</span>
                                <span>Литургия</span>
                                <span class="">11:00</span>
                                <span>Молебень</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class=" w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
                                <div class="text-centre">
                                    <span>24</span>
                                    <span>ВТ</span>
                                </div>
                                <span class="">9:00</span>
                                <span>Часы</span>
                                <span class="">9:30</span>
                                <span>Литургия</span>
                                <span class="">11:00</span>
                                <span>Молебень</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
                                <div class="text-centre">
                                    <span>25</span>
                                    <span>СР</span>
                                </div>
                                <span class="">9:00</span>
                                <span>Часы</span>
                                <span class="">9:30</span>
                                <span>Литургия</span>
                                <span class="">11:00</span>
                                <span>Молебень</span>
                                <span>Вознесению Господню</span>
                            </div>
                        </div>
                </div>
            </div>
        </section>

        <section class="text-blue-950 body-font">
            <div class="container px-5 py-12 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
           @foreach ($blogs as $blog)
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="{{asset('storage/' .$blog->picture)}}">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <a href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}</a>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
               {{$blog->description_small}}
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <a href="{{asset('blog/'.$blog->id)}}">Узнать больше</a>

                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">{{\App\Models\Look::where('page', '/blog/'.$blog->id)->count()}}</div>
                </div>
              </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">{{$blog->comments->count()}}</div>
                </div>
              </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        ВАРИАНТ 2

        <div class="mt-4">
            <a class="text-3xl"><span class="text-orange-600 font-medium">Х</span>рам</a>
        </div>
        <section class="text-blue-950 body-font">
            <div class="container px-5 py-4 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 shadow-xl shadow-gray-300 rounded-2xl overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/temple.jpg')}}" alt="Храм">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/aboutthetemple" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">О </span>Храме</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p style="vertical-align: inherit;">Добро пожаловать в приход Храма Святого Равноапостольного Князя Владимира,
                                            расположенного в деревне Чижевщина, входит в состав Брестской епархии Белорусского Экзархата Московского Патриархата.
                                            Его история пронизана духовным наследием и традициями, охватывающими многие десятилетия. Приглашаем  провести время в молитве,
                                            смирении и восприятии святости, которая наполняет пространство храма.
                                            </p>
                                    </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/aboutthetemple" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/history.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/story" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">И</span>стория Храма</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                    <div style="vertical-align: inherit;">
                                    <input type="checkbox" id="toggle-description" class="hidden">
                                    <p id="c_description"
                                       class="mt-2 text-lg text-gray-800 break-words text-medium line-clamp-4 transition-all duration-300 ease-in-out">
                                        История прихода богата событиями, такими как строительство и реконструкции храма, особые
                                        богослужебные праздники, деятельность священнослужителей и активное участие верующих в жизни церкви. В течение многих лет
                                        приход служил местом для молитвы, общения и духовного роста верующих, а также оказывал помощь и поддержку нуждающимся в
                                        обществе. Первый камень в основание храма святого равноапостольного князя Владимира деревни Чижевщина был заложен 6 августа
                                        1891 года во время служения здесь священника Никанора Котовича.
                                    </p>
                                    <label for="toggle-description" id="toggle-btn" class="mt-2 text-blue-600 rounded-lg hover:text-blue-700 focus:outline-none cursor-pointer">
                                    </label>

                                    </div>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/story" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/3.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/schedule" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">Р</span>асписание</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                    <font style="vertical-align: inherit;">
                                        <p style="vertical-align: inherit;">Посещение богослужений является важной частью духовной жизни каждого верующего.
                                            На нашей странице вы всегда найдёте актуальную информацию, чтобы не пропустить важные события и вовремя прийти на службу.
                                            Мы стремимся сделать ваш визит в храм максимально комфортным и информативным. Мы рады приветствовать вас в нашем храме и
                                            надеемся, что информация на этой странице поможет вам в планировании ваших посещений. Если у вас возникнут вопросы
                                            , не стесняйтесь обращаться к нам через указанные контактные данные. Спасибо за ваше внимание, и до встречи
                                            на богослужениях!</p>
                                    </font>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/schedule" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="mt-4">
            <a class="text-3xl"><span class="text-orange-600 font-semibold">П</span>убликации</a>
        </div>
        <section class="text-blue-950 body-font">
            <div class="container px-5 py-4 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/8.jpg')}}" alt="Храм">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/news" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">Н</span>овости</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Приглашаем вас посетить страницу нашего сайта, посвященную публикациям.
                                        Здесь вы найдете увлекательные события, интересные рассказы, важные объявления и многое другое, что делает
                                        жизнь нашего прихода насыщенной и разнообразной. Погрузитесь в атмосферу духовной жизни, узнавайте о
                                        последних новостях и событиях, происходящих у нас. Добро пожаловать на страницу публикаций!
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/news" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/33.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/foto" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">Ф</span>отографии</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Hасладитесь красотой нашего прихода через объектив камеры. Здесь представлены увлекательные
                                        фотографии различных мероприятий, богослужений, общинных событий и других важных моментов из жизни нашего храма. Погрузитесь
                                        в атмосферу духовного общения и единения, ощутите красоту и величие нашей веры через великолепные изображения, запечатленные
                                        наших талантливых фотографов. Добро пожаловать на страницу фотографий, где каждый кадр расскажет вам свою историю!
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/foto" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/34.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/icons" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">О</span>б иконах</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p style="vertical-align: inherit;">Познакомитесь с великим миром православных икон, где каждый образ несет в себе
                                            глубокий духовный смысл и историю. Здесь вы узнаете о происхождении значимых икон, их историческом и духовном
                                            значении, а также о том, каким образом молиться перед ними. Получите ценные советы о том, как находить вдохновение
                                            и духовную силу через общение с иконами, какие молитвы произносить и как углубить свою веру, обращаясь к святым образам.
                                        </p>
                                    </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/icons" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="mt-4">
            <a class="text-3xl"><span class="text-orange-600 font-medium">П</span>рихожанам</a>
        </div>
        <section class="text-blue-950 body-font">
            <div class="container px-5 py-4 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/note.jpg')}}" alt="Храм">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/note" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">П</span>одать записку</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Чтобы подать записку в православном храме, вы можете воспользоваться онлайн-формой на нашем сайте.
                                        Просто перейдите на страницу "Подать записку" и заполните необходимую информацию, включая ваше имя, электронную почту (если требуется),
                                        и текст вашей записки или молитвенного запроса. После отправки формы ваша записка будет передана каноническому лицу храма для
                                        рассмотрения и включения в молитвенное упоминание. Мы ценим вашу заботу и доверие и гарантируем конфиденциальность ваших запросов.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/note" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/tainstva.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/sacraments" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">Т</span>аинства</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Таинства, важное событие в вашей жизни. Здесь вы сможете найти информацию о различных
                                        таинствах и требах, совершаемых в православной церкви. В этом разделе вы сможете познакомиться с основными таинствами,
                                        такими как крещение, венчание, исповедь, соборование, а также узнать о других важных аспектах духовной практики.
                                        Каждое таинство описывается с точки зрения его значения, символики и основных этапов совершения. Мы стремимся
                                        предоставить вам полную и точную информацию о священных обрядах церкви, чтобы вы могли лучше понять их духовное
                                        значение и значение для вашей веры.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/sacraments" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/molitvy.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/prayers" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">М</span>олитвы</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">На странице "Молитвы" нашего сайта вы найдете обширную коллекцию молитв, позволяющих вам обогатить
                                        вашу духовную практику и укрепить вашу веру. Этот раздел посвящен молитвенной практике и предоставляет доступ к различным молитвам
                                        для различных ситуаций и потребностей. Вы сможете найти утренние и вечерние молитвы, молитвы перед едой, молитвы за здоровье, за
                                        мир в мире, а также молитвы для защиты и благословения. Кроме того, мы также предоставляем молитвенные тексты для различных церковных
                                        праздников и событий.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/prayers" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="mt-4">
            <a class="text-3xl"><span class="text-orange-600 font-medium">П</span>равославный календарь</a>
        </div>
        <section class="text-blue-950 body-font">
            <div class="container px-5 py-4 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/35.png')}}" alt="Календарь">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/calendar" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">К</span>алендарь на год</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Здесь вы найдете православный календарь на текущий год, который содержит информацию о всех основных и
                                        праздничных днях православной церкви. В календаре вы сможете узнать даты всех церковных праздников, постов, а также других значимых
                                        событий, которые помогут вам сориентироваться в духовной жизни и следовать традициям православия. Наш календарь обновляется регулярно
                                        и содержит точные и достоверные данные, чтобы вы всегда могли быть в курсе богослужебного года.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/calendar" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/venchanie.jpeg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/weddingcalendar" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">К</span>алендарь венчаний</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Православный венчальный календарь - это специальный календарь, в котором отмечены даты,
                                        на которые приходятся свадебные обряды в православной церкви. В нем указаны даты, на которые приходятся свадебные венчания,
                                        а также другие важные события, связанные с брачными обрядами, например, крестный ход или обряд заручин. Православный
                                        венчальный календарь помогает будущим молодоженам выбрать наиболее подходящую дату для своей свадьбы с учетом церковных
                                        традиций и обычаев.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/weddingcalendar" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/names.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/namecalendar" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">К</span>алендарь имени</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Православный календарь имени - это календарь, в котором отмечены дни празднования именин святых православной церкви.
                                        В нем указаны имена святых, чьи памятные дни отмечаются в определенные даты года. Такие календари позволяют людям, чьи имена связаны с именами святых,
                                        знать, когда именно им отмечать свои именные дни. Кроме того, православный календарь имени помогает верующим вспомнить и праздновать память своего
                                        святого покровителя.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/namecalendar" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="text-blue-950 body-font mt-4">
            <div class="container px-5 py-4 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/healer.jpg')}}" alt="Календарь">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/healer" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">Х</span>рам часовня Целительница</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Храм-часовня в честь иконы Божией Матери «Целительница» в Санатории «Надзея».
                                        Первый камень в строительство часовни был заложен епископом Брестским и Кобринским Иоанном 28 сентября 2004 года.
                                        Строительство длилось в течение года, и 1 октября 2005 года храм-часовня был освящен.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/healer" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/school.jpg')}}" alt="Воскресная школа">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/school" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">В</span>оскресная школа</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Воскресная школа храма Покрова Пресвятой Богородицы в городе Жабинка - это место, где дети и подростки могут
                                        учиться основам православной веры, углублять свои знания о Библии, истории церкви, святых и богослужебных обрядах. В школе проводятся занятия,
                                        на которых дети знакомятся с основными понятиями и традициями православия, учатся молиться, петь церковные песнопения, а также участвовать
                                        в различных благотворительных и общественных мероприятиях.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/school" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{asset('images/names.jpg')}}" alt="блог">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-semibold text-blue-950 mb-3">
                                    <div style="vertical-align: inherit;">
                                        <p class="group relative w-max">
                                            <span><a href="/sponsors" class="text-2xl"><span style="vertical-align: inherit;" class="text-orange-600">С</span>понсоры</a></span>
                                            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-sky-600 group-hover:w-3/6"></span>
                                        </p>
                                    </div>
                                </h1>
                                <p class="leading-relaxed mb-3">
                                <div style="vertical-align: inherit;">
                                    <p style="vertical-align: inherit;">Православный календарь имени - это календарь, в котором отмечены дни празднования именин святых православной церкви.
                                        В нем указаны имена святых, чьи памятные дни отмечаются в определенные даты года. Такие календари позволяют людям, чьи имена связаны с именами святых,
                                        знать, когда именно им отмечать свои именные дни. Кроме того, православный календарь имени помогает верующим вспомнить и праздновать память своего
                                        святого покровителя.
                                    </p>
                                </div>
                                </p>
                                <div class="flex items-center flex-wrap ">
                                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                        <div style="vertical-align: inherit;">
                                            <a href="/sponsors" class="link-info link-hover" style="vertical-align: inherit;">Узнать больше</a>
                                        </div>
                                        <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5l7 7-7 7"></path>
                                        </svg>
                                    </a>
                                    <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">1.2К</a>
                </div>
              </span>
                                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <a style="vertical-align: inherit;">6</a>
                </div>
              </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="text-gray-700 body-font">
            <div class="container px-5 py-24 mx-auto">

                <div class="flex flex-wrap -m-4 text-center">
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M8 17l4 4 4-4m-4-5v9"></path>
                                <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
                            <p class="leading-relaxed">Downloads</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
                            <p class="leading-relaxed">Users</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
                            <p class="leading-relaxed">Files</p>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                        <div class="border-2 border-gray-600 px-4 py-6 rounded-lg transform transition duration-500 hover:scale-110">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                            <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
                            <p class="leading-relaxed">Places</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </x-slot>
</x-app-layout>








