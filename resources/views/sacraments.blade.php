<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
        <section class="pt-14 space-y-6">


            <div class="mt-4">
                <div class="text-3xl"><span class="text-red-600 font-medium">Т</span>аинства</div>
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

            <div class="overflow-hidden  aspect-video bg-blue-100 cursor-pointer rounded-xl relative group relative w-full h-96">
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
                <div class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/venchanie2.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Венчания</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-xl">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md">
                            <div class="my-4 grid gap-6 px-4">
                                <p class="text-justify indent-8">Венчание — это святое таинство, через которое мужчина и женщина получают благословение на создание семьи в
                                    христианской традиции. Оно подчеркивает не только юридическую, но и духовную сторону брака, делая его
                                    священным союзом перед Богом. Венчание освящает брачный союз, привлекая благодать Божью для укрепления
                                    семьи. Супруги соединяются не только физически, но и духовно, обещая перед Богом хранить верность
                                    и любовь друг к другу. Таинство венчания дарует супругам поддержку Святого Духа, помогая им преодолевать
                                    жизненные трудности. Венчанный брак служит примером для окружающих, подчеркивая важность христианских
                                    семейных ценностей. Венчание связывает супругов с многовековыми традициями Церкви, усиливая их чувство
                                    принадлежности к духовной общине. Оно помогает супругам осознать глубину и значимость их союза, наполняет
                                    семейную жизнь духовным смыслом и поддерживает их в стремлении строить крепкую и благочестивую семью.</p>
                                <p class="text-justify indent-8">
                                    Церемония венчания - это не только древняя и красивая традиция, но и важный шаг на пути к созданию прочной
                                    и счастливой семьи. Иногда пары приходят к этому решению спустя годы, когда они окончательно убеждаются в
                                    своих чувствах и намерении провести вместе всю жизнь.

                                    Если вы посетили эту страницу, потому что уже готовы сделать этот серьезный шаг и планируете провести
                                    венчание, первым делом вам нужно правильно выбрать дату. В этом вам поможет календарь венчаний.
                                    Существуют определенные дни для проведения венчания в церкви. Для вашего
                                    удобства Вы можете воспользоваться календарем венчаний. В нем вы узнаете, в какие дни согласно канонам
                                    Православной Церкви можно проводить обряд венчания, а в какие нет.</p>

                                    <h2>Таинство Брака не совершается:</h2>

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

            <div class="mt-2 h-min-24 my-4 mx-auto w-3/4  bg-blue-100 shadow-2xl  shadow-gray-300 rounded-lg text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mt-6" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
                <p class="text-blue-950 text-2xl m-2">Таинству Брака должна предшествовать гражданская регистрация
                    с целью юридического оформления ответственности вступающих в
                    брак и проверки отсутствия препятствий к нему.
                </p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
                    <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
                </svg>
            </div>

            <div class="mt-16 mb-8 px-8 ">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md">
                        <div class="my-4 grid gap-6 px-4">
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl text-center">Этапы подготовки к Венчанию</h3>
                            <span class="text-center">Подготовка к венчанию включает несколько важных этапов, которые помогут вам организовать это важное событие и сделать его значимым и незабываемым.</span>
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">1. Духовная подготовка</h3>
                            Молитва и пост: Перед венчанием рекомендуется усилить молитвенную жизнь и соблюдать пост.<br>
                            Исповедь и причастие: Будущим супругам следует пройти исповедь и причаститься перед венчанием, чтобы приступить к таинству с чистой душой.<br>
                            Беседы с батюшкой: Посетите несколько бесед с батюшкой, который расскажет о значении венчания и подготовит вас к этому таинству.<br>
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">2. Выбор даты</h3>
                            Изучение церковного календаря: Убедитесь, что выбранная дата не попадает на дни постов и праздников, когда венчания не проводятся.<br>
                            Согласование с храмом: Обсудите дату венчания с настоятелем храма и забронируйте удобное время.<br>
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">3. Оформление необходимых документов</h3>
                            Свидетельство о браке: Если вы уже зарегистрированы в ЗАГСе, вам потребуется предоставить свидетельство о браке.<br>
                            Заявление на венчание: В некоторых храмах требуется заполнить заявление на проведение венчания.<br>
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">4. Выбор нарядов и аксессуаров</h3>
                            Свадебное платье и костюм: Выберите скромные наряды, соответствующие церковным требованиям.<br>
                            Фата и венцы: Подготовьте фату и венцы для таинства.<br>
                            Обручальные кольца: Обратите внимание на кольца, которые будут освящены во время венчания.<br>
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">5. Подготовка к таинству</h3>
                            Приглашение свидетелей: Выберите свидетелей, которые будут присутствовать на венчании и помогать в организации.<br>
                            Подготовка свечей: Купите специальные венчальные свечи, которые будут держать жених и невеста во время таинства.<br>
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">6. Организация торжества</h3>
                            Планирование банкета: Забронируйте зал для празднования и обсудите меню.<br>
                            Приглашения для гостей: Рассылайте приглашения и уточняйте количество гостей.<br>
                            <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">7. В день венчания</h3>
                            Приезд в храм заранее: Прибудьте в храм заблаговременно, чтобы успеть подготовиться и настроиться на таинство.<br>
                            Следование указаниям батюшки: Во время венчания следуйте всем указаниям батюшки и сохраняйте благоговейное отношение к происходящему.<br>
                            Следуя этим шагам, вы сможете тщательно подготовиться к венчанию и провести его в соответствии с церковными традициями и вашими личными пожеланиями.<br>
                        </div>
                    </div>
                </div>
            </div>


            <div class="overflow-hidden  aspect-video bg-blue-100 cursor-pointer rounded-xl relative group relative w-full h-96">
                <div class="rounded-xl z-50 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
                    <div>
                        <div class="transform-gpu  p-4 space-y-3 text-2xl group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
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

                <div  class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/26.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Исповеди</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-xl">
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

                <div  class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/28.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Причащения</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-xl">
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

                <div  class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/29.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Таинство Соборования</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                    <div class="container mx-auto shadow-xl shadow-gray-300 rounded-xl">
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
