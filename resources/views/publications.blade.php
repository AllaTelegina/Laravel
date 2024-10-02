<x-app-layout>
    <x-slot name="header">

        <section class="text-blue-950 py-4">
            <div class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">П</span>убликации</div>
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
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Новости
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Публикации</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <section class="text-blue-950  space-y-6 pt-2 py-4">
                    <div class="bg-sky-600  text-blue-950 text-center py-4 header-date rounded-3xl">
                        <div class="mt-2">
                            <p class="text-white text-xl m-6 md:text-2xl">Добро пожаловать на страницу Публикации!</br>
                                Не пропусти новости</p>
                            <button
                                class="transform motion-safe:hover:scale-70 bg-orange-400 text-white font-medium
                                    py-2 px-2 hover:bg-blue-950 transition duration-700 ease-in-out shadow-xl rounded-lg">
                                <a href="#subscribe">Подпишись</a>
                            </button>
                        </div>
                        <div class="flex justify-center space-x-8 text-xl text-center m-4">
                            <div class="text-white flex flex-col items-center md:text-xl text-lg">
                                <p>
                                    Здесь вы можете ознакомиться с новостями и событиями нашего храма, а также узнать о предстоящих мероприятиях и важных обновлениях
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

<section class="text-blue-950 body-font">
  <div class="container px-5 py-4 mx-auto">
    <div class="flex flex-wrap -m-4">
@foreach($news as $item)
        <div class="p-4 md:w-1/3 ">
        <div class="h-full bg-blue-100 text-blue-950 border-2 border-gray-200 border-opacity-60 border-rounder-lg  overflow-hidden shadow-xl shadow-gray-300 rounded-2xl">
           <div class="relative">
               <img src="/storage/{{ $item->url }}" />
            <div class="absolute top-0 right-0 bg-sky-600 text-white font-bold px-2 py-1 m-2 rounded-md skeleton">New
            </div>
           </div>
          <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $item->published_at }}</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $item->title }}</h1>
              <div id="toggle-description">
            <p id="c_description" class="leading-relaxed mb-3">{{ $item->description }}
            </p>
              <label for="toggle-description" id="toggle-btn" class="mt-2 text-gray-400 rounded-lg hover:text-blue-700 focus:outline-none cursor-pointer">
              </label>
              </div>
            <div class="flex items-center flex-wrap ">
              <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Подробнее
<svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M5 12h14"></path>
                  <path d="M12 5l7 7-7 7"></path>
                </svg>
              </a>
              <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
</span>
              <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
            </div>
          </div>
        </div>
      </div>
        @endforeach
    </div>
  </div>
</section>

           </div>
        </section>
    </x-slot>
</x-app-layout>
