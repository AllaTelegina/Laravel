<x-app-layout>

    <x-slot name="header">

        <section class="mt-40 container px-5 mx-auto">
            <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400 mt-8">
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

        <section class="text-gray-600 body-font">
            <div class="container px-5 mt-8 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                        <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                            <div class="skeleton w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
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
                            <div class="skeleton w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
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
                            <div class="skeleton w-full p-5 bg-blue-200 place-content-center text-sm rounded-2xl shadow-xl shadow-gray-400">
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

    </x-slot>
</x-app-layout>








