
    <x-app-layout>

        <div class="flex-1 mt-16 ">
            <div class="relative h-screen w-full">
                <img src="images/glavnaya.jpg" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-4px">
                <div class="absolute inset-0 bg-black bg-opacity-0"></div>
                <div class="relative absolute top-16 left-16">
        <a class="btn btn-ghost text-xl p-8" href="navigation.blade.php" title="Логотип">
            <img src="{{asset('images/logo.png')}}" class="w-32 h-32" />
        </a>
        <div class="">
            <p class="text-lg text-white">Приход храма</p>
            <p class="text-lg text-white">равноапостольного</p>
        </div>
        </div>
        <div class="Title_name">
            <h1 class="text-4xl text-white font-bold">КНЯЗЯ ВЛАДИМИРА</h1>
            <p class="textarea-lg text-white">д.Чижевщина Брестской епархии</p>
            <p class="textarea-lg text-white">Белорусского Экзархата</p>
            <p class="textarea-lg text-white">Московского Патриарха</p>
        </div>


        <div class="menu text-2xl p-10">
            <ul class="menu text-white w-56 p-0 [&_li>*]:rounded-none">
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Храм</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Прихожанам</a>
                </li>

                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Православный календарь</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Церковная лавка</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Новости</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Храм-часовня Целительница</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Детям</a>
                </li>
            </ul>

        </div>
        </div>
        </div>


        <div class="container 10px-5 py-24 mx-auto">
            <div class="schedule w-fool flex items-center space-x-16 flex-col md:flex-row md:space-x-16">
                <div class="skeleton h-64 w-1/3  bg-blue-220"></div>
                <div class="skeleton h-64 w-1/3  bg-blue-220"></div>
                <div class="skeleton h-64 w-1/3  bg-blue-220"></div>
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
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>





<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col">
            <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Храм</font>
                </font>
            </h2>

        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">

                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/o_khrame.jpg')}}"/>>
                </div>

                <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                    <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">О Храме</font>
                        </font>
                    </h3>
                </div>
                <p class="text-base leading-relaxed mt-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">    Добро пожаловать в приход Храма Святого Равноапостольного Князя
                            Владимира, расположенного в деревне Чижевщина, входит в состав Брестской епархии Белорусского Экзархата
                            Московского Патриархата. Его история пронизана духовным наследием и традициями, охватывающими
                            многие десятилетия. Приглашаем  провести время в молитве, смирении и восприятии святости, к
                            оторая наполняет пространство храма.
                        </font>
                    </font>
                </p>
                <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Узнать больше</font>
                        </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                </div>
            </div>

            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="содержание" class="object-cover object-center h-full w-full" src="images/history.jpg">
                </div>
                <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">История Храма</font>
                    </font>
                </h3>
                <p class="text-base leading-relaxed mt-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">История прихода богата событиями, такими как строительство и реконструкции храма,
                            особые богослужебные праздники, деятельность священнослужителей и активное участие верующих в жизни церкви. В течение
                            многих лет приход служил местом для молитвы, общения и духовного роста верующих, а также оказывал помощь и поддержку
                            нуждающимся в обществе. Первый камень в основание храма святого равноапостольного князя Владимира деревни Чижевщина
                            был заложен 6 августа 1891 года во время служения здесь священника Никанора Котовича. В 1894 году храм был освящен.
                            Во время Первой мировой войны храм был разграблен и полуразрушен.
                        </font>
                    </font>
                </p>
                <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Узнать больше</font>
                        </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                </div>

            </div>
            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/3.jpg">
                </div>
                <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Расписание</font>
                    </font>
                </h3>
                <p class="text-base leading-relaxed mt-2">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Посещение богослужений является важной частью духовной жизни каждого верующего.
                            На нашей странице вы всегда найдёте актуальную информацию, чтобы не пропустить важные события и вовремя прийти на службу.
                            Мы стремимся сделать ваш визит в храм максимально комфортным и информативным.
                            Мы рады приветствовать вас в нашем храме и надеемся, что информация на этой странице поможет вам в планировании ваших
                            посещений. Если у вас возникнут вопросы, не стесняйтесь обращаться к нам через указанные контактные данные.
                            Спасибо за ваше внимание, и до встречи на богослужениях!
                        </font>
                    </font>
                </p>

                <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Узнать больше</font>
                        </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                    <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                </div>

            </div>
        </div>
    </div>
</section>


        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Прихожанам</div>
                        </div>
                    </h2>

                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">

                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/zapiska.jpg')}}"/>>
                        </div>

                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Подать записку</div>
                                </div>
                            </h3>
                        </div>
                        <p class="text-base leading-relaxed mt-2">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Чтобы подать записку в православном храме, вы можете воспользоваться
                                    онлайн-формой на нашем сайте. Просто перейдите на страницу "Подать записку" и заполните необходимую
                                    информацию, включая ваше имя, электронную почту (если требуется), и текст вашей записки или молитвенного
                                    запроса. После отправки формы ваша записка будет передана каноническому лицу храма для рассмотрения и включения
                                    в молитвенное упоминание. Мы ценим вашу заботу и доверие и гарантируем конфиденциальность ваших запросов.
                                </div>
                            </div>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/tainstva.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Таинства</div>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Таинства, важное событие в вашей жизни. Здесь вы сможете
                                    найти информацию о различных таинствах и требах, совершаемых в православной церкви.
                                    В этом разделе вы сможете познакомиться с основными таинствами, такими как крещение, венчание,
                                    исповедь, соборование, а также узнать о других важных аспектах духовной практики. Каждое таинство
                                    описывается с точки зрения его значения, символики и основных этапов совершения. Мы стремимся
                                    предоставить вам полную и точную информацию о священных обрядах церкви, чтобы вы могли лучше
                                    понять их духовное значение и значение для вашей веры.
                                </div>
                            </div>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>

                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/molitvy.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Молитвы</div>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">На странице "Молитвы" нашего сайта вы найдете обширную коллекцию молитв, позволяющих
                                    вам обогатить вашу духовную практику и укрепить вашу веру. Этот раздел посвящен молитвенной практике и предоставляет
                                    доступ к различным молитвам для различных ситуаций и потребностей. Вы сможете найти утренние и вечерние молитвы,
                                    молитвы перед едой, молитвы за здоровье, за мир в мире, а также молитвы для защиты и благословения. Кроме того, мы
                                    также предоставляем молитвенные тексты для различных церковных праздников и событий.
                                </div>
                            </div>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Православный календарь</font>
                        </font>
                    </h2>

                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">

                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/kalendar1.jpeg')}}"/>>
                        </div>

                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Календарь на год</font>
                                </font>
                            </h3>
                        </div>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Здесь вы найдете православный календарь на текущий год,
                                    который содержит информацию о всех основных и праздничных днях православной церкви. В календаре
                                    вы сможете узнать даты всех церковных праздников, постов, а также других значимых событий,
                                    которые помогут вам сориентироваться в духовной жизни и следовать традициям православия. Наш
                                    календарь обновляется регулярно и содержит точные и достоверные данные, чтобы вы всегда могли
                                    быть в курсе богослужебного года.
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/venchanie.jpeg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Венчальный календарь</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Православный венчальный календарь - это специальный календарь,
                                    в котором отмечены даты, на которые приходятся свадебные обряды в православной церкви.
                                    В нем указаны даты, на которые приходятся свадебные венчания, а также другие важные события,
                                    связанные с брачными обрядами, например, крестный ход или обряд заручин. Православный венчальный
                                    календарь помогает будущим молодоженам выбрать наиболее подходящую дату для своей свадьбы с
                                    учетом церковных традиций и обычаев.
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>

                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/names.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Календарь имени</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Православный календарь имени - это календарь, в котором отмечены дни празднования
                                    именин святых православной церкви. В нем указаны имена святых, чьи памятные дни отмечаются в определенные даты года.
                                    Такие календари позволяют людям, чьи имена связаны с именами святых, знать, когда именно им отмечать свои именные дни.
                                    Кроме того, православный календарь имени помогает верующим вспомнить и праздновать память своего святого покровителя.
                                </font>
                            </font>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Новости</div>
                        </div>
                    </h2>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="содержание" class="object-cover object-center h-full w-full" src="images/publikacii.jpg">
                    </div>
                    <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Публикации</div>
                        </div>
                    </h3>
                    <p class="text-base leading-relaxed mt-2">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">
                                Приглашаем вас посетить страницу нашего сайта, посвященную публикациям.
                                Здесь вы найдете увлекательные события, интересные рассказы, важные объявления и многое другое,
                                что делает жизнь нашего прихода насыщенной и разнообразной. Погрузитесь в атмосферу духовной
                                жизни, узнавайте о последних новостях и событиях, происходящих у нас. Добро пожаловать
                                на страницу публикаций!
                            </div>
                        </div>
                    </p>
                    <div class="flex items-center flex-wrap ">
                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Узнать больше</font>
                            </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                    </div>
                </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/foto.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Фотографии</div>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">
                                    Hасладиться красотой нашего прихода через объектив камеры. Здесь представлены увлекательные
                                    фотографии различных мероприятий, богослужений, общинных событий и других важных моментов из
                                    жизни нашего храма. Погрузитесь в атмосферу духовного общения и единения, ощутите красоту и величие
                                    нашей веры через великолепные изображения, запечатленные наших талантливых фотографов. Добро
                                    пожаловать на страницу фотографий, где каждый кадр расскажет вам свою историю!
                                </div>
                            </div>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/ob_iconah.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Об иконах</div>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">
                                    Познакомитесь с великим миром православных икон, где каждый образ несет в себе глубокий духовный
                                    смысл и историю. Здесь вы узнаете о происхождении значимых икон, их историческом и духовном значении, а также о том,
                                    каким образом молиться перед ними. Получите ценные советы о том, как находить вдохновение и духовную силу через общение
                                    с иконами, какие молитвы произносить и как углубить свою веру, обращаясь к святым образам.
                                </div>
                            </div>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Храм-часовня Целительница</div>
                        </div>
                    </h2>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">

                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/tcelitelnica.jpg')}}"/>>
                        </div>

                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">О Храме Целительниа</font>
                                </font>
                            </h3>
                        </div>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Храм-часовня в честь иконы Божией Матери «Целительница» в Санатории «Надзея». Первый камень в строительство
                                    часовни был заложен епископом Брестским и Кобринским Иоанном 28 сентября 2004 года. Строительство длилось
                                    в течение года, и 1 октября 2005 года храм-часовня был освящен.
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/raspisanie_c.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Расписание служений</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">
                                    Посмотрите актуальное расписание богослужений и мероприятий, проводимых в нашей часовне. Мы постоянно
                                    обновляем информацию о времени проведения богослужений, молитвенных служб, а также о различных
                                    мероприятиях и программе духовного развития.
                                </div>
                            </div>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>

                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/thumbnail.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Как проехать</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">
                                    Если у вас возникнут дополнительные вопросы о том, как добраться до нас, не стесняйтесь обращаться к нам для получения
                                    дополнительной информации. Мы будем рады помочь вам добраться до храма. С нетерпением ждем вашего прихода и
                                    присоединиться к нам в молитве и богослужениях.
                                </div>
                            </div>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Прихожанам</div>
                        </div>
                    </h2>

                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">

                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/zapiska.jpg')}}"/>>
                        </div>

                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Подать записку</div>
                                </div>
                            </h3>
                        </div>
                        <p class="text-base leading-relaxed mt-2">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Чтобы подать записку в православном храме, вы можете воспользоваться
                                онлайн-формой на нашем сайте. Просто перейдите на страницу "Подать записку" и заполните необходимую
                                информацию, включая ваше имя, электронную почту (если требуется), и текст вашей записки или молитвенного
                                запроса. После отправки формы ваша записка будет передана каноническому лицу храма для рассмотрения и включения
                                в молитвенное упоминание. Мы ценим вашу заботу и доверие и гарантируем конфиденциальность ваших запросов.
                            </div>
                        </div>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/tainstva.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Таинства</div>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Таинства, важное событие в вашей жизни. Здесь вы сможете
                                найти информацию о различных таинствах и требах, совершаемых в православной церкви.
                                В этом разделе вы сможете познакомиться с основными таинствами, такими как крещение, венчание,
                                исповедь, соборование, а также узнать о других важных аспектах духовной практики. Каждое таинство
                                описывается с точки зрения его значения, символики и основных этапов совершения. Мы стремимся
                                предоставить вам полную и точную информацию о священных обрядах церкви, чтобы вы могли лучше
                                понять их духовное значение и значение для вашей веры.
                            </div>
                        </div>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>

                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/molitvy.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Молитвы</div>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">На странице "Молитвы" нашего сайта вы найдете обширную коллекцию молитв, позволяющих
                                вам обогатить вашу духовную практику и укрепить вашу веру. Этот раздел посвящен молитвенной практике и предоставляет
                                доступ к различным молитвам для различных ситуаций и потребностей. Вы сможете найти утренние и вечерние молитвы,
                                молитвы перед едой, молитвы за здоровье, за мир в мире, а также молитвы для защиты и благословения. Кроме того, мы
                                также предоставляем молитвенные тексты для различных церковных праздников и событий.
                            </div>
                        </div>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Православный календарь</font>
                        </font>
                    </h2>

                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">

                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/kalendar1.jpeg')}}"/>>
                        </div>

                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Календарь на год</font>
                                </font>
                            </h3>
                        </div>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Здесь вы найдете православный календарь на текущий год,
                                    который содержит информацию о всех основных и праздничных днях православной церкви. В календаре
                                    вы сможете узнать даты всех церковных праздников, постов, а также других значимых событий,
                                    которые помогут вам сориентироваться в духовной жизни и следовать традициям православия. Наш
                                    календарь обновляется регулярно и содержит точные и достоверные данные, чтобы вы всегда могли
                                    быть в курсе богослужебного года.
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/venchanie.jpeg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Венчальный календарь</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Православный венчальный календарь - это специальный календарь,
                                    в котором отмечены даты, на которые приходятся свадебные обряды в православной церкви.
                                    В нем указаны даты, на которые приходятся свадебные венчания, а также другие важные события,
                                    связанные с брачными обрядами, например, крестный ход или обряд заручин. Православный венчальный
                                    календарь помогает будущим молодоженам выбрать наиболее подходящую дату для своей свадьбы с
                                    учетом церковных традиций и обычаев.
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>

                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/names.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Календарь имени</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Православный календарь имени - это календарь, в котором отмечены дни празднования
                                    именин святых православной церкви. В нем указаны имена святых, чьи памятные дни отмечаются в определенные даты года.
                                    Такие календари позволяют людям, чьи имена связаны с именами святых, знать, когда именно им отмечать свои именные дни.
                                    Кроме того, православный календарь имени помогает верующим вспомнить и праздновать память своего святого покровителя.
                                </font>
                            </font>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Новости</div>
                        </div>
                    </h2>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="содержание" class="object-cover object-center h-full w-full" src="images/publikacii.jpg">
                    </div>
                    <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Публикации</div>
                        </div>
                    </h3>
                    <p class="text-base leading-relaxed mt-2">
                    <div style="vertical-align: inherit;">
                        <div style="vertical-align: inherit;">
                            Приглашаем вас посетить страницу нашего сайта, посвященную публикациям.
                            Здесь вы найдете увлекательные события, интересные рассказы, важные объявления и многое другое,
                            что делает жизнь нашего прихода насыщенной и разнообразной. Погрузитесь в атмосферу духовной
                            жизни, узнавайте о последних новостях и событиях, происходящих у нас. Добро пожаловать
                            на страницу публикаций!
                        </div>
                    </div>
                    </p>
                    <div class="flex items-center flex-wrap ">
                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Узнать больше</font>
                            </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="содержание" class="object-cover object-center h-full w-full" src="images/foto.jpg">
                    </div>
                    <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Фотографии</div>
                        </div>
                    </h3>
                    <p class="text-base leading-relaxed mt-2">
                    <div style="vertical-align: inherit;">
                        <div style="vertical-align: inherit;">
                            Hасладиться красотой нашего прихода через объектив камеры. Здесь представлены увлекательные
                            фотографии различных мероприятий, богослужений, общинных событий и других важных моментов из
                            жизни нашего храма. Погрузитесь в атмосферу духовного общения и единения, ощутите красоту и величие
                            нашей веры через великолепные изображения, запечатленные наших талантливых фотографов. Добро
                            пожаловать на страницу фотографий, где каждый кадр расскажет вам свою историю!
                        </div>
                    </div>
                    </p>
                    <div class="flex items-center flex-wrap ">
                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Узнать больше</font>
                            </font>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/ob_iconah.jpg">
                    </div>
                    <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Об иконах</div>
                        </div>
                    </h3>
                    <p class="text-base leading-relaxed mt-2">
                    <div style="vertical-align: inherit;">
                        <div style="vertical-align: inherit;">
                            Познакомитесь с великим миром православных икон, где каждый образ несет в себе глубокий духовный
                            смысл и историю. Здесь вы узнаете о происхождении значимых икон, их историческом и духовном значении, а также о том,
                            каким образом молиться перед ними. Получите ценные советы о том, как находить вдохновение и духовную силу через общение
                            с иконами, какие молитвы произносить и как углубить свою веру, обращаясь к святым образам.
                        </div>
                    </div>
                    </p>

                    <div class="flex items-center flex-wrap ">
                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                    </div>
                </div>
            </div>
            </div>
        </section>




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Храм-часовня Целительница</div>
                        </div>
                    </h2>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">

                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/tcelitelnica.jpg')}}"/>>
                        </div>

                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">О Храме Целительниа</font>
                                </font>
                            </h3>
                        </div>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    Храм-часовня в честь иконы Божией Матери «Целительница» в Санатории «Надзея». Первый камень в строительство
                                    часовни был заложен епископом Брестским и Кобринским Иоанном 28 сентября 2004 года. Строительство длилось
                                    в течение года, и 1 октября 2005 года храм-часовня был освящен.
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/raspisanie_c.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Расписание служений</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">
                                Посмотрите актуальное расписание богослужений и мероприятий, проводимых в нашей часовне. Мы постоянно
                                обновляем информацию о времени проведения богослужений, молитвенных служб, а также о различных
                                мероприятиях и программе духовного развития.
                            </div>
                        </div>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>

                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/thumbnail.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Как проехать</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">
                                Если у вас возникнут дополнительные вопросы о том, как добраться до нас, не стесняйтесь обращаться к нам для получения
                                дополнительной информации. Мы будем рады помочь вам добраться до храма. С нетерпением ждем вашего прихода и
                                присоединиться к нам в молитве и богослужениях.
                            </div>
                        </div>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Детям</div>
                        </div>
                    </h2>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="содержание" class="object-cover object-center h-full w-full" src="images/school.jpg">
                    </div>
                    <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Воскресная школа</div>
                        </div>
                    </h3>
                    <p class="text-base leading-relaxed mt-2">
                    <div style="vertical-align: inherit;">
                        <div style="vertical-align: inherit;">
                            Воскресная школа храма Покрова Пресвятой Богородицы в городе Жабинка - это место,
                            где дети и подростки могут учиться основам православной веры, углублять свои знания
                            о Библии, истории церкви, святых и богослужебных обрядах. В школе проводятся занятия,
                            на которых дети знакомятся с основными понятиями и традициями православия, учатся молиться,
                            петь церковные песнопения, а также участвовать в различных благотворительных
                            и общественных мероприятиях.
                    </div>
                    </p>
                    <div class="flex items-center flex-wrap ">
                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Узнать больше</font>
                            </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="содержание" class="object-cover object-center h-full w-full" src="images/zanyatiya.jpg">
                    </div>
                    <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Расписание занятий</div>
                        </div>
                    </h3>
                    <p class="text-base leading-relaxed mt-2">
                    <div style="vertical-align: inherit;">
                        <div style="vertical-align: inherit;">
                            Программа воскресной школы включает в себя изучение Библейских историй, основ православной
                            морали и этики, а также участие в богослужениях и общении с духовным наставником. Дети
                            также могут участвовать в различных творческих и образовательных мероприятиях, таких
                            как рисование и рукоделие, чтение и обсуждение книг, экскурсии и посещения святых мест.
                        </div>
                    </div>
                    </p>
                    <div class="flex items-center flex-wrap ">
                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Узнать больше</font>
                            </font>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                    </div>
                </div>
                <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                    <div class="rounded-lg h-64 overflow-hidden">
                        <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/teacher.jpg">
                    </div>
                    <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                        <div style="vertical-align: inherit;">
                            <div style="vertical-align: inherit;">Преподаватели</div>
                        </div>
                    </h3>
                    <p class="text-base leading-relaxed mt-2">
                    <div style="vertical-align: inherit;">
                        <div style="vertical-align: inherit;">
                            Преподаватели нашей воскресной школы являются преданными членами церковной общины, которые искренне верят в ценность
                            религиозного образования и хотят помочь учиться и расти в своей вере. Они обладают глубокими знаниями о своей религии,
                            ее истории, традициях и священных текстах.
                        </div>
                    </div>
                    </p>

                    <div class="flex items-center flex-wrap ">
                        <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                            <div style="vertical-align: inherit;">
                                <div style="vertical-align: inherit;">Узнать больше</div>
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
                  <div style="vertical-align: inherit;">1,2 тыс.</div>
                </div>
              </span>
                        <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">6</div>
                </div>
              </span>
                    </div>
                </div>
            </div>
            </div>
        </section>




        <div class="h-screen w-full flex items-center justify-center overflow-hidden bg-purple-300">
            <div class="slider relative w-[290px] h-[290px] [transform-style:preserve-3d] animate-[rotate_30s_linear_infinite]">
                <span style="--i:1" class="span-style"><img src="https://images.unsplash.com/photo-1546015720-b8b30df5aa27?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxiYWJ5fGVufDB8MHx8fDE3MTI5ODgzMTl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 1"  class="img-style"/></span>
                <span style="--i:2" class="span-style"><img src="https://images.unsplash.com/photo-1566004100631-35d015d6a491?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxiYWJ5fGVufDB8MHx8fDE3MTI5ODgzMTl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 2"  class="img-style"/></span>
                <span style="--i:3" class="span-style"><img src="https://images.unsplash.com/photo-1519689680058-324335c77eba?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8YmFieXxlbnwwfDB8fHwxNzEyOTg4MzE5fDA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 3"  class="img-style"/></span>
                <span style="--i:4" class="span-style"><img src="https://images.unsplash.com/photo-1588410670460-cdab54625253?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxiYWJ5fGVufDB8MHx8fDE3MTI5ODgzMTl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 4"  class="img-style"/></span>
                <span style="--i:5" class="span-style"><img src="https://images.unsplash.com/photo-1555252333-9f8e92e65df9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxiYWJ5fGVufDB8MHx8fDE3MTI5ODgzMTl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 5"  class="img-style"/></span>
                <span style="--i:6" class="span-style"><img src="https://images.unsplash.com/photo-1491013516836-7db643ee125a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxiYWJ5fGVufDB8MHx8fDE3MTI5ODgzMTl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 6"  class="img-style"/></span>
                <span style="--i:7" class="span-style"><img src="https://images.unsplash.com/photo-1505679208891-9ab12ee61dc1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8YmFieXxlbnwwfDB8fHwxNzEyOTg4MzE5fDA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 7"  class="img-style"/></span>
                <span style="--i:8" class="span-style"><img src="https://images.unsplash.com/photo-1583086762675-5a88bcc72548?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxiYWJ5fGVufDB8MHx8fDE3MTI5ODgzMTl8MA&ixlib=rb-4.0.3&q=80&w=1080" alt="img - 8"  class="img-style"/></span>
            </div>
        </div>


        <div class="h-screen w-full flex items-center justify-center overflow-hidden bg-purple-300">
            <div class="slider relative w-[290px] h-[290px] [transform-style:preserve-3d] animate-[rotate_30s_linear_infinite]">
                <span style="--i:1" class="span-style"><img src="images/1.jpg" alt="img - 1"  class="img-style"/></span>
                <span style="--i:2" class="span-style"><img src="images/2.jpg" alt="img - 2"  class="img-style"/></span>
                <span style="--i:3" class="span-style"><img src="images/3.jpg" alt="img - 3"  class="img-style"/></span>
                <span style="--i:4" class="span-style"><img src="images/4.jpg" alt="img - 4"  class="img-style"/></span>
                <span style="--i:5" class="span-style"><img src="images/5.jpg" alt="img - 5"  class="img-style"/></span>
                <span style="--i:6" class="span-style"><img src="images/6.jpg" alt="img - 6"  class="img-style"/></span>
                <span style="--i:7" class="span-style"><img src="images/7.jpg" alt="img - 7"  class="img-style"/></span>
                <span style="--i:8" class="span-style"><img src="images/8.jpg" alt="img - 8"  class="img-style"/></span>
            </div>
        </div>




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col">
                    <h2 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Новости</font>
                        </font>
                    </h2>
                </div>
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="#" class="object-cover object-center h-full w-full" src="{{asset('images/publikacii.jpg')}}"/>>
                        </div>
                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h3 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Публикации</font>
                                </font>
                            </h3>
                        </div>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Приглашаем вас посетить страницу нашего сайта, посвященную публикациям.
                                    Здесь вы найдете увлекательные события, интересные рассказы, важные объявления и многое другое, что делает
                                    жизнь нашего прихода насыщенной и разнообразной. Погрузитесь в атмосферу духовной жизни, узнавайте о последних
                                    новостях и событиях, происходящих у нас. Добро пожаловать на страницу публикаций!
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full" src="images/3.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Фотографии</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Православный венчальный календарь - это специальный календарь,
                                    в котором отмечены даты, на которые приходятся свадебные обряды в православной церкви.
                                    В нем указаны даты, на которые приходятся свадебные венчания, а также другие важные события,
                                    связанные с брачными обрядами, например, крестный ход или обряд заручин. Православный венчальный
                                    календарь помогает будущим молодоженам выбрать наиболее подходящую дату для своей свадьбы с
                                    учетом церковных традиций и обычаев.
                                </font>
                            </font>
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>

                    </div>
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="images/ob_ikonah.jpg">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Об иконах</font>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Православный календарь имени - это календарь, в котором отмечены дни празднования
                                    именин святых православной церкви. В нем указаны имена святых, чьи памятные дни отмечаются в определенные даты года.
                                    Такие календари позволяют людям, чьи имена связаны с именами святых, знать, когда именно им отмечать свои именные дни.
                                    Кроме того, православный календарь имени помогает верующим вспомнить и праздновать память своего святого покровителя.
                                </font>
                            </font>
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Узнать больше</font>
                                </font>
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
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">6</font>
                </font>
              </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                <tr><
                    <th></th>
                    <th>Name</th>
                    <th>Job</th>
                    <th>Favorite Color</th>
                </tr>
                </thead>
                <tbody>
                <!-- row 1 -->
                <tr>
                    <th>1</th>
                    <td>Cy Ganderton</td>
                    <td>Quality Control Specialist</td>
                    <td>Blue</td>
                </tr>
                <!-- row 2 -->
                <tr class="hover">
                    <th>2</th>
                    <td>Hart Hagerty</td>
                    <td>Desktop Support Technician</td>
                    <td>Purple</td>
                </tr>
                <!-- row 3 -->
                <tr>
                    <th>3</th>
                    <td>Brice Swyre</td>
                    <td>Tax Accountant</td>
                    <td>Red</td>
                </tr>
                </tbody>
            </table>
        </div>

</x-app-layout>








