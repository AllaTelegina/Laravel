<x-app-layout>
    <x-slot name="header">
        <div class="text-blue-950 py-4">
<section class="pt-14 space-y-6">

    <div class="mt-4">
        <div class="text-3xl"><span class="text-orange-600 font-medium">О </span>Храме</div>
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
                    <a href="/" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Храм</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">О Храме</span>
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
                    <p class="mb-2 leading-relaxed text-2xl text-center">Добро пожаловать на страницу нашего Храма!</p>
                    <p class="mb-2 leading-relaxed text-xl">
                        Мы рады приветствовать вас в нашем храме.
                    Здесь вы узнаете больше о нашей истории, миссии и основных ценностях.
                    Благодарим за ваш интерес и надеемся, что вы найдете здесь полезную и
                        вдохновляющую информацию.
                    </p>
                    <!-- <div class="flex justify-center py-8">
                        <button class="inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded hover:bg-blue-950 transition duration-700 ease-in-out">Выбрать требу</button>
                        <button class="ml-4 inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-blue-950 text-white font-medium rounded hover:bg-orange-400 transition duration-700 ease-in-out">Пожертвовать</button>
                    </div>
                    -->
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                    <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/day.jpg')}}">
                </div>
            </div>
        </div>
    </section>


    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/temple.jpg')}}" alt="" width="384" height="512" />
                <div class="card lg:card-side bg-blue-100">
                    <div class="card-body">
                        <h2 class="card-title">О нас</h2>
                        <p> Добро пожаловать на страницу нашего храма!
                            Мы рады приветствовать вас и предложить подробную информацию о нашем храме,
                            службах и мероприятиях. Наш храм – это место духовного роста, умиротворения
                            и вдохновения для всех, кто ищет пути к божественному.
                            Мы предлагаем разнообразные программы для детей, молодежи и взрослых,
                            направленные на укрепление веры и развитие духовности. Здесь вы найдете
                            с <a href="/schedule" class="link-info link-hover">
                                расписание служб
                            </a>, информацию о религиозных праздниках и особенностях нашего прихода.
                            Мы всегда рады видеть вас у нас на приходе и готовы поддержать вас на вашем
                            духовном пути. Пусть ваш визит принесет вам мир, радость и благословение.
                            Добро пожаловать и благослови вас Бог!
                        </p>
                    </div>
                </div>
        </figure>
    </div>
    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/story.png')}}" alt="" width="384" height="512" />
                <div class="card lg:card-side bg-blue-100">
                    <div class="card-body">
                        <h2 class="card-title">История Храма</h2>
                        <p>   Здесь вы можете ознакомиться с <a href="/story" class="link-info link-hover">
                                историей храма
                            </a>, его миссией и деятельностью.
                            Кроме того, мы регулярно организуем благотворительные акции и социальные мероприятия,
                            направленные на помощь нуждающимся и укрепление нашего сообщества. Участвуя в этих
                            инициативах, вы можете внести свой вклад в доброе дело и помочь тем, кто нуждается в поддержке.
                            Наш храм открыт для всех, кто ищет духовного роста и поддержки. Мы всегда рады видеть вас у нас
                            на приходе, и надеемся, что вы найдете здесь вдохновение и умиротворение. Присоединяйтесь к нам
                            и становитесь частью нашей духовной семьи. Сердечно приглашаем вас на службы и мероприятия,
                            чтобы вместе с нами переживать моменты духовного подъема и радости.
                            Добро пожаловать в наш храм!
                        </p>
                    </div>
                </div>
        </figure>
    </div>
    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/duhovenstvo.jpg')}}" alt="" width="384" height="512" />
                <div class="card lg:card-side bg-blue-100">
                    <div class="card-body">
                        <h2 class="card-title">Настоятель</h2>
                        <p> Сытин, настоятель Храма Святого Равноапостольного Князя Владимира в деревне Чижевщина,
                            является не только духовным лидером, но и активным участником формирования атмосферы храма.
                            Его усердие и преданность делу создания благоприятной обстановки в храме сделали его более
                            уютным и теплым для верующих. Благодаря усилиям иерея Александра, в храме были
                            <a href="/sponsors" class="link-info link-hover">
                                проведены различные работы
                            </a> по улучшению его внутреннего убранства и комфорта. Были осуществлены работы
                            по ремонту, украшению и обновлению интерьера храма. Его служение способствует укреплению духовных
                            связей  и созданию атмосферы взаимопонимания и взаимопомощи.
                        </p>
                    </div>
                </div>
        </figure>
    </div>
    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/15.jpg')}}" alt="" width="384" height="512" />
                <div class="card lg:card-side bg-blue-100">
                    <div class="card-body">
                        <h2 class="card-title">Церковная лавка</h2>
                        <p> Церковная лавка в Храме Князя Владимира – это особое место, где прихожане и гости могут
                            приобрести все необходимое для духовной жизни и домашнего благочестия. В лавке можно найти
                            иконы Господа Иисуса Христа, Богородицы и святых, освященные на святынях и чудотворные иконы.
                            Здесь также продаются восковые свечи различной толщины и высоты, лампадки и лампадное масло
                            для домашней молитвы.
                            Приходите в церковную лавку Храма Князя Владимира, чтобы обогатить свою духовную жизнь
                            и поддержать храм своими приобретениями. Мы всегда рады видеть вас!
                        </p>
                    </div>
                </div>
        </figure>
    </div>
    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/21.png')}}" alt="" width="384" height="512" />
                <div class="card lg:card-side bg-blue-100">
                    <div class="card-body">
                        <h2 class="card-title">Библиотека в Храме</h2>
                        <p> В Храме Князя Владимира действует библиотека, доступная для всех прихожан в дни службы.
                            Здесь вы можете найти другие книги по духовной тематике, которые помогут вам глубже понять и укрепить
                            свою веру. Библиотека предлагает широкий выбор православной литературы, начиная от духовных наставлений
                            и заканчивая историческими трудами. Во время посещения храма вы можете воспользоваться библиотекой,
                            найти ответы на интересующие вас вопросы и обогатить свой внутренний мир.
                        </p>
                    </div>
                </div>
        </figure>
    </div>
    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/7.jpg')}}" alt="" width="384" height="512" />
                <div class="card lg:card-side bg-blue-100">
                    <div class="card-body">
                        <h2 class="card-title">Реставрация</h2>
                        <p>  Добро пожаловать и благослови вас Бог!Уважаемые прихожане и друзья нашего храма!
                            Мы рады сообщить, что наш храм в настоящее время проходит этап реставрации, направленный на
                            улучшение условий для всех посетителей и сохранение нашей духовной и культурной наследия.
                            Для завершения всех этих работ нам требуется ваша поддержка. Мы будем рады любым пожертвованиям,
                            которые помогут нам продолжить и завершить реставрацию нашего храма. Ваш вклад, независимо от
                            его размера, будет неоценимым для нас и поможет сохранить это святое место для будущих поколений.
                            Мы искренне благодарим всех, кто уже оказал поддержку, и надеемся на дальнейшую помощь от  всех
                            неравнодушных людей. Вместе мы сможем сделать наш храм еще прекраснее и комфортнее для всех,
                            кто приходит сюда за духовной поддержкой и вдохновением.
                            Спасибо за ваше понимание и поддержку!

                            С уважением, Отец Александр
                        </p>
                            <div class="card-actions justify-end p-2 w-full">
                                <button type="submit" class="flex mx-auto focus:outline-none
                                transform motion-safe:hover:scale-110 transition duration-700
                                ease-in-out bg-orange-400 text-white font-medium h-12 w-58 py-3 px-10
                                rounded-lg hover:bg-sky-600">
                                    <a href="#">Помочь Храму</a>
                                </button>
                            </div>
                    </div>
                </div>
        </figure>
    </div>


</section>
        </div>

    </x-slot>
</x-app-layout>
