<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
        <section class="pt-14 space-y-6">


            <div class="mt-4">
                <div class="text-3xl"><span class="text-orange-600 font-medium">Т</span>аинства</div>
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
                            <a href="/" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Прихожанам</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Таинства</span>
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
                        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-center text-white">
                            <a href="#baptism" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                                <span class="text-2xl">Таинство Крещения</span>
                            </a>
                            <a href="#wedding" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                                <span class="text-2xl">Таинство Венчания</span>
                            </a>
                            <a href="#confession" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                                <span class="text-2xl">Таинство Исповеди</span>
                            </a>
                            <a href="#communion" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                                <span class="text-2xl">Таинство Причащения</span>
                            </a>
                            <a href="#unction" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                                <span class="text-2xl">Таинство Соборования</span>
                            </a>
                        </div>
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                            <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/915.jpg')}}">
                        </div>
                    </div>
                </div>
            </section>



        <div class="text-blue-950  space-y-4 rounded-2xl">
            <div class="container px-10 py-8 flex rounded-2xl shadow-xl shadow-gray-400 bg-blue-100 z-0 hover:z-50">
                <p class="text-justify indent-8">
                    В нашем храме совершаются все основные православные таинства.
                    Таинства – это священнодействия, которые являются неотъемлемой частью православных церковных обрядов.
                    Через таинства верующим сообщается невидимая Божественная благодать, спасительная сила Божия.
                    Таинства являются неизменной реальностью. В отличие от них, видимые священнодействия, связанные с исполнением
                    Таинств, формировались постепенно на протяжении истории Церкви.
                    Совершителем Таинств является Бог, который действует через священнослужителей. В Таинствах верующим даруется особое,
                    новое качество, особенный духовный дар, который качественно изменяет жизнь человека.
                    Мы рады помочь вам в духовном пути и предлагаем информацию
                    о каждом из них. Ниже вы найдете подробное описание, требования и процесс подготовки к таинствам.
                </p>
            </div>


            <!-- component -->

            <div id="baptism" class="pt-12">

                <div  class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/27.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Крещения</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-xl">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 ">
                            <div class="my-8 grid gap-6 px-4 text-justify indent-8">
                                Крещение — это одно из самых значимых и глубоких таинств в христианской жизни.
                                Оно символизирует духовное перерождение, очищение от грехов и начало нового
                                этапа в жизни верующего. Через крещение человек становится членом Церкви и
                                получает благодать Святого Духа, которая помогает ему следовать путём христианских
                                добродетелей.
                                Заповедь Бога (Мк.16:16) и Таинство Церкви, в котором человек через троекратное погружение
                                в воду (в критической ситуации: через троекратное обливание водой) с призыванием Бога Отца
                                и Сына и Святого Духа, благодатно очищается от грехов, умирает для жизни греховной, духовно
                                рождается для жизни во Христе, усыновляется Богу, вводится в общение с Церковью (Мф.28:19-20).
                                Крещение является духовным рождением (Ин.3:5-6), приобщением к Божественной жизни.
                                После Крещения человек становится членом Церкви, и может принимать участие в Церковных Таинствах.
                                <div class="flex justify-end p-4 w-full">
                                    <button type="submit" class="transform motion-safe:hover:scale-110 transition duration-700 ease-in-out bg-orange-400 text-white font-medium py-2 px-4 rounded-lg hover:bg-sky-600">
                                        <a href="#consult">Нужна консультация?</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="overflow-hidden  aspect-video bg-blue-100 cursor-pointer group relative w-full h-96 shadow-xl shadow-gray-300 rounded-2xl">
                <div class="rounded-xl z-50 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
                    <div>
                        <div class="transform-gpu  p-4 space-y-3 text-2xl group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                            <div class="font-bold text-center">
                                <a href="/namecalendar" class="font-bold text-center link link-hover">Календарь Имени</a>
                            </div>
                            <div class="opacity-60 text-lg text-justify indent-8">
                                При крещении важно
                                <a href="#" class="link-info link-hover">выбрать имя</a>,
                                которое станет духовным символом вашего ребенка. Это имя будет не только частью его христианской идентичности,
                                но и связывать его с небесным покровителем. Мы рады помочь вам в этом важном выборе. Здесь вы можете найти
                                имена святых, узнать их истории
                                и значения, чтобы выбрать самое подходящее и значимое имя для крещения.
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{asset('images/names.jpg')}}" alt="" class="absolute h-full w-full object-cover object-center rounded-xl aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
            </div>

            <div id="wedding" class="pt-12">
                <div class="relative w-full h-96 shadow-xl shadow-gray-300 rounded-2xl">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/32.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Венчания</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md">
                            <div class="my-4 grid gap-6 px-4">
                                <p class="text-justify indent-8">Венчание — это святое таинство, в котором мужчина и женщина
                                    получают благословение на создание семьи в христианской традиции. Оно подчеркивает
                                    духовную сторону брака, делая его священным союзом перед Богом. Венчание освящает
                                    брачный союз, привлекая Божью благодать для укрепления семьи, и соединяет супругов
                                    физически и духовно, обещая верность и любовь перед Богом. Церемония венчания связывает
                                    супругов с традициями Церкви и усиливает их принадлежность к духовной общине, помогая
                                    осознать значимость их союза. Если вы планируете венчание, воспользуйтесь <a href="/weddingcalendar" class="link-info link-hover">календарем венчания</a>,
                                    чтобы выбрать подходящую дату, соответствующую канонам Православной Церкви.


                                <div class="flex justify-end p-4 w-full">
                                    <button type="submit" class="transform motion-safe:hover:scale-110 transition duration-700 ease-in-out bg-orange-400 text-white font-medium py-2 px-4 rounded-lg hover:bg-sky-600">
                                        <a href="#consult">Нужна консультация?</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <ul class=" mx-auto w-full mt-20 divide-y  shadow-xl shadow-gray-300 rounded-2xl">
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 px-4 py-3 bg-blue-100 border-2 border-gray-100 font-medium marker:content-none hover:cursor-pointer
                        focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-t-xl">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Это важно знать</span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p class="py-2">Таинству Брака должна предшествовать гражданская регистрация
                                с целью юридического оформления ответственности вступающих в
                                брак и проверки отсутствия препятствий к нему.<p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Таинство Брака не совершается:</span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p class="text-justify indent-8">по вторникам, четвергам (накануне постных дней – среды и пятницы) и в субботу (накануне малой Пасхи – дня воскресного);<br>
                                в Пасху, накануне двунадесятых и великих праздников. Венчание в дни двунадесятых праздников не запрещено, но нежелательно. День общего церковного великого праздника мы стремимся прожить вместе с Церковью, не заслоняя церковную радость своей малой личной радостью, личными нуждами;<br>
                                накануне престольных храмовых праздников (в каждом храме они свои);<br>
                                в Сырную седмицу, в продолжение Святок и Пасхальной (Светлой) седмицы. Венчание в предуготовительные к Великому посту недели и иные сплошные седмицы не запрещены, но нежелательны.<br>
                                во время 4-х многодневных постов: Великого, Апостольского, Успенского и Рождественского;<br>
                                в дни (и накануне) строгого однодневного поста: Усекновения главы Иоанна Предтечи – 11 сентября и Воздвижения Креста Господня – 27 сентября;<br>
                                ночью.<br>
                                Один из канонов византийского сборника «Алфавитная синтагма» Матфея Властаря (XIV в.) предписывает, что траур по почившим родственникам не является причиной для переноса заключения брака.<br>
                                Исключения из этих правил могут быть сделаны только правящим архиереем. Если венчание уже совершено в день, когда это запрещено церковным Уставом, то это не делает таинство недействительным.
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Духовная подготовка</span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Молитва и пост: Перед венчанием рекомендуется усилить молитвенную жизнь и соблюдать пост.<br>
                                Исповедь и причастие: Будущим супругам следует пройти исповедь и причаститься перед венчанием, чтобы приступить к таинству с чистой душой.<br>
                                Беседы с батюшкой: Посетите несколько бесед с батюшкой, который расскажет о значении венчания и подготовит вас к этому таинству.
                               </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Выбор даты</span>
                        </summary>

                        <article class="px-4 pb-4">
                            <p>
                                Изучение церковного календаря: Убедитесь, что выбранная дата не попадает на дни постов и праздников, когда венчания не проводятся.<br>
                                Согласование с храмом: Обсудите дату венчания с настоятелем храма и забронируйте удобное время.<br>
                            </p>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Оформление необходимых документов</span>
                        </summary>

                        <article class="px-4 pb-4">
                            Свидетельство о браке: Если вы уже зарегистрированы в ЗАГСе, вам потребуется предоставить свидетельство о браке.<br>
                            Заявление на венчание: В некоторых храмах требуется заполнить заявление на проведение венчания.<br>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Выбор нарядов и аксессуаров</span>
                        </summary>

                        <article class="px-4 pb-4">
                            Свадебное платье и костюм: Выберите скромные наряды, соответствующие церковным требованиям.<br>
                            Фата и венцы: Подготовьте фату и венцы для таинства.<br>
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Подготовка к таинству</span>
                        </summary>

                        <article class="px-4 pb-4">
                            </h3>
                            Приглашение свидетелей: Выберите свидетелей, которые будут присутствовать на венчании и помогать в организации.
                        </article>
                    </details>
                </li>
                <li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                        focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>Организация торжества</span>
                        </summary>

                        <article class="px-4 pb-4">
                            Планирование банкета: Забронируйте зал для празднования и обсудите меню.<br>
                            Приглашения для гостей: Рассылайте приглашения и уточняйте количество гостей.<br>
                        </article>
                    </details>
                </li>
                    <details class="group">
                        <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-b-xl">
                            <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                 width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span>В день венчания</span>
                        </summary>
                        <article class="px-4 pb-4">
                            Приезд в храм заранее: Прибудьте в храм заблаговременно, чтобы успеть подготовиться и настроиться на таинство.<br>
                            Следование указаниям батюшки: Во время венчания следуйте всем указаниям батюшки и сохраняйте благоговейное отношение к происходящему.<br>
                            Следуя этим шагам, вы сможете тщательно подготовиться к венчанию и провести его в соответствии с церковными традициями и вашими личными пожеланиями.<br>
                        </article>
                    </details>
                </li>
            </ul>


            <div class="overflow-hidden  aspect-video bg-blue-100 cursor-pointer group relative w-full h-96 mt-4 shadow-xl shadow-gray-300 rounded-2xl">
                <div class="rounded-xl z-50 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
                    <div>
                        <div class="transform-gpu  p-4 space-y-3 text-2xl group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transition duration-300 ease-in-out">
                            <div class="font-bold text-center">
                                <a href="/weddingcalendar" class="font-bold text-center link link-hover">Календарь Венчания</a>
                            </div>
                            <div class="opacity-60 text-lg ">
                                Если вы планируете венчание, мы рады помочь вам выбрать подходящую дату. Вы можете обратиться к нам,
                                чтобы узнать о доступных временах и забронировать удобное для вас время.
                                Пожалуйста, помните, что некоторые даты могут быть недоступны из-за церковных праздников или мероприятий.
                                Поэтому вы можете ознакомиться с нашим <a href="/weddingcalendar" class="link-info link-hover">календарем венчаний</a>, который доступен на нашем сайте.
                                Будем рады помочь вам в этом важном и радостном событии!
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{asset('images/venchanie.jpeg')}}" alt="" class="absolute h-full w-full object-cover object-center rounded-xl aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
            </div>



            <div id="confession" class="pt-12">

                <div  class="relative w-full h-96 shadow-xl shadow-gray-300 rounded-2xl">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/26.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Исповеди</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 ">
                            <div class="my-8 grid gap-6 px-4 text-justify indent-8">
                                Исповедь – это Таинство, в котором верующий человек, искренно раскаиваясь в своих грехах, исповедует их перед священником,
                                получая от Бога прощение. Это один из важнейших моментов в духовной жизни православного христианина, который помогает
                                очистить душу, восстановить связь с Богом и укрепить веру. Во время исповеди священник, выступая как свидетель перед Богом,
                                выслушивает исповедуемые грехи и, при искреннем раскаянии, отпускает их от имени Бога.
                                Исповедь — это священное действие, где верующий признает свои грехи перед Богом в присутствии священника и получает прощение,
                                выражая искреннее покаяние, стремясь к духовному очищению и восстановлению связи с Богом. Этот процесс помогает освободиться
                                от чувства вины и обрести внутренний мир, восстанавливая духовные отношения с Богом и укрепляя веру. Исповедь ведет к
                                духовному возрождению и очищению от грехов, являясь актом Божьего милосердия и возможностью начать новую жизнь в чистоте и святости.
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div id="communion" class="pt-12">

                <div  class="relative w-full h-96 shadow-xl shadow-gray-300 rounded-2xl">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/28.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Причащения</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                            <div class="my-8 grid gap-6 px-4 text-justify indent-8">
                                Причащение — это священное таинство, в котором верующий принимает тело и кровь Христа под видом хлеба и вина.
                                Перед причащением необходимо прочитать особые молитвы, готовящие душу к этому великому событию.
                                Это духовное соединение с Богом укрепляет веру, очищает от грехов и дарует благодать для жизни в
                                христианской любви и праведности. Мы ждем вас в храме для участия в этом таинстве, которое приносит
                                мир и радость в сердце верующего, соединяя его с Христом и церковной общиной.
                                Подготовка к приобщению :

                                Верующий должен пройти духовную подготовку, включающую исповедь, молитву и пост. Исповедь очищает душу от грехов, чтобы достойно принять Таинство.
                                Литургия :

                                Причастие происходит во время Божественной Литургии. Хлеб и вино, освященные во время Евхаристических канонов, становятся Телом и Кровью Христа.
                                Значение Таинства :

                                Причастие касается духовной жизни верующего, соединяющего его с Христом и Церковью. Оно помогает в очищении от грехов и преобладании текущей жизни.
                                Условия причащения :

                                К Таинству дошли только крещеные христиане, которые исповедовали свои грехи. Также важно быть в мире с людьми и не иметь тяжестей грехов, совершающих принятие Причастия.
                                Частота причащения :

                                В православной традиции рекомендуется причащаться как можно чаще, но с должной подготовкой и осознанием важности Таинства.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="unction" class="pt-12">

                <div  class="relative w-full h-96 shadow-xl shadow-gray-300 rounded-2xl">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/29.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Соборования</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                            <div class="my-8 grid gap-6 px-4 text-justify indent-8">
                                Таинство Соборования, также известное как Елеосвящение, является одним из семи святых
                                таинств в Православной Церкви. Оно заключается в том, что священник, или группа священников,
                                возлагают руки на больного и помазывают его освященным елеем (маслом), произнося молитвы о его
                                физическом и духовном исцелении. Это таинство обычно совершается над больными людьми,
                                но также может быть проведено для любого верующего, стремящегося к укреплению духовного
                                здоровья и прощению грехов.
                                Соборование имеет глубокие духовные корни и символизирует не только телесное, но и
                                душевное исцеление. Оно напоминает, что через страдания и болезни человек может приблизиться
                                к Богу, и что милосердие Божие распространяется на каждого, кто с верой обращается к Нему за помощью.

                                Обычно таинство проводится в церкви, но в случае необходимости его могут совершить на дому
                                или в больнице. Соборование может быть проведено несколько раз в жизни человека, особенно
                                если он сталкивается с серьезными болезнями или испытаниями.
                            </div>
                        </div>
                    </div>
                </div>
            </div>



     </section>
        </div>

    </x-slot>
</x-app-layout>
