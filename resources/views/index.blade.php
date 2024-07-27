<x-app-layout>

    <x-slot name="header">


        <section class="py-16">
            <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400">
                <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="/navigation" title="Логотип">
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
                            <button class="inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded hover:bg-blue-950 transition duration-700 ease-in-out">Выбрать требу</button>
                            <button class="ml-4 inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-blue-950 text-white font-medium rounded hover:bg-orange-400 transition duration-700 ease-in-out">Пожертвовать</button>
                        </div>
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                        <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="/images/fon.jpg">
                    </div>
                </div>
            </div>
        </section>

        <div class="flex justify-center space-x-4 text-center pt-2">
        <div>
            <div class="w-fool flex items-center space-x-4 flex-col md:flex-row md:space-x-16">
                <div class="skeleton h-32 w-1/3 bg-blue-200 place-content-center text-sm">
                    <div>
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
                <div class="skeleton h-32 w-1/3 bg-blue-200 place-content-center text-sm">
                    <div>
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
                <div class="skeleton h-32 w-1/3 bg-blue-200 place-content-center text-sm">
                    <div>
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




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
           @foreach ($blogs as $blog)
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="{{asset('storage/' .$blog->picture)}}">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <a href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}</a>
                            </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">{{$blog->comments->count()}}</div>
                </font>
              </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


        <section class="body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12  text-blue-950">
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
                                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="flex mx-auto focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out bg-orange-400 text-white font-medium py-3 px-12 rounded hover:bg-blue-950">
                                <a href="#">Отправить</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </x-slot>
</x-app-layout>








