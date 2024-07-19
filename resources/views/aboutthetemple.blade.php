<x-app-layout>
    <x-slot name="header">



<section class="pt-14 space-y-6">

    <div class="mt-4">
        <div class="text-3xl"><span class="text-red-700 font-medium">О </span>Храме</div>
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
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">О Храме</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex-1 mt-8">
        <div class="relative h-screen w-full">
            <img src="{{asset('images/we.jpg')}}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" />
        </div>
    </div>



    <div class="card lg:card-side text-blue-950 shadow-xl bg-blue-200">
            <figure>
                <img
                    src="{{asset('images/temple.jpg')}}"
                    alt="Temple" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">О нас</h2>
                <p> Добро пожаловать на страницу нашего храма!
                    Мы рады приветствовать вас и предложить подробную информацию о нашем храме,
                    службах и мероприятиях. Наш храм – это место духовного роста, умиротворения
                    и вдохновения для всех, кто ищет пути к божественному.
                    Мы предлагаем разнообразные программы для детей, молодежи и взрослых,
                    направленные на укрепление веры и развитие духовности. Здесь вы найдете
                    расписание служб, информацию о религиозных праздниках и особенностях нашего прихода.
                    Мы всегда рады видеть вас у нас на приходе и готовы поддержать вас на вашем
                    духовном пути. Пусть ваш визит принесет вам мир, радость и благословение.
                    Добро пожаловать и благослови вас Бог!
                </p>

            </div>
        </div>
    <div class="card lg:card-side shadow-xl bg-blue-200">
        <figure>
            <img
                src="{{asset('images/duhovenstvo.jpg')}}"
                alt="Temple" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Настоятель</h2>
            <p>Сытин, настоятель Храма Святого Равноапостольного Князя Владимира в деревне Чижевщина,
                является не только духовным лидером, но и активным участником формирования атмосферы храма.
                Его усердие и преданность делу создания благоприятной обстановки в храме сделали его более
                уютным и теплым для верующих. Благодаря усилиям иерея Александра, в храме были проведены
                различные работы по улучшению его внутреннего убранства и комфорта. Были осуществлены работы
                по ремонту, украшению и обновлению интерьера храма. Его служение способствует укреплению духовных
                связей  и созданию атмосферы взаимопонимания и взаимопомощи.
            </p>
        </div>
    </div>








    <div class="card lg:card-side shadow-xl bg-blue-200">
        <figure>
            <img
                src="{{asset('images/story.png')}}"
                alt="Temple" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">История Храма</h2>
            <p>   Здесь вы можете ознакомиться с историей храма, его миссией и деятельностью.
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
    <div class="card lg:card-side shadow-xl bg-blue-200">
        <figure>
            <img
                src="{{asset('images/7.jpg')}}"
                alt="Temple" />
        </figure>
        <div class="card-body">
            <h2 class="card-title">Реставрация</h2>
            <p>   Уважаемые прихожане и друзья нашего храма!
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
            <div class="card-actions justify-end">
                <button class="btn btn-primary transform motion-safe:hover:scale-110 transition
                    duration-700 ease-in-out bg-orange-400 text-white font-medium py-2 px-10
                    rounded hover:bg-blue-950">Помочь храму</button>
            </div>
        </div>
    </div>
</section>


    </x-slot>
</x-app-layout>
