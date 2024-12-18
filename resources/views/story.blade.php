<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

        <div class="mt-4">
            <div class="text-3xl"><span class="text-orange-600 font-medium">И</span>стория Храма</div>
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
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">История Храма</span>
                    </div>
                </li>
            </ol>
        </nav>


    <section class="mt-40 container mx-auto">
        <div class="relative bg-sky-600 shadow-xl shadow-gray-400 rounded-2xl mt-8">
            <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="/" title="Логотип">
                <img src="{{asset('images/logo.png')}}" alt="/" class="w-20 h-20" />
            </a>
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-center text-white">
                    <p class="mb-2 leading-relaxed text-2xl text-center">Погрузитесь в увлекательную историю нашего Храма!</p>
                    <p class="mb-2 leading-relaxed text-xl text-justify">В течение многих лет приход служил местом для молитвы,
                        общения и духовного роста верующих, а также оказывал помощь и поддержку нуждающимся в обществе.
                        Первый камень в основание храма святого равноапостольного князя Владимира деревни Чижевщина был заложен 6 августа 1891 года.
                        Но его история началась намного раньше...</p>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                    <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/history.jpg')}}">
                </div>
            </div>
        </div>
    </section>


    <section class="container mx-auto p-4">
        <div class="flex flex-col md:flex-row md:space-x-4 mt-8">
            <ul class="timeline timeline-vertical text-blue-950 ">
                <li>
                    <div class="timeline-start mb-10 timeline-box bg-blue-100 text-justify leading-relaxed shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl "><span class="text-orange-600 font-medium">К</span>рупчицкий монастырь</div>
                        <p class="text-justify">Во второй половине 17 века на землях бывшего имения
                        Нееловичи был основан Кармелитский католический монастырь. Первые пожертвования на монастырь
                        были выданы 24 мая 1674 года помещиком А.К.Асовским. В 1702 году завершено строительство всех
                        монастырских построек. В монастыре возведен костел, освящен во имя Непорочного Зачатия Девы Марии.
                        При монастыре было организовано братство, имелась школа. Монастырь жил мирной жизнью до 1794 года.
                        15 сентября 1794 года у стен монастыря произошло сражение российских войск под командованием
                        полководца А.В.Суворова (1730-1800) с повстанческой армией генерала Кароля Сераковского (1752-1820).
                        Во время сражения монастырь был сильно поврежден. В 1797году Указом Императора Павла 1-го монастырь
                        передали из Луцко–Брестской в Виленскую диоцезию. В 1800 году Виленский епископ Я.Н.Калаковский п
                        реобразовал монастырский костел в приходский.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000
                             16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                   clip-rule="evenodd"/></svg>
                    </div>
                    <div class="timeline-end text-9xl">1674</div>
                    <hr class="#" />
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">1831</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">Ц</span>ерковь Александра Невского</div>
                        <p class="text-justify">После подавления мятежа в 1831 году, на Полоцком соборе, состоявшемся в 1839 году, была расторгнута Уния.
                        Вспыхнувший мятеж в 1861-1863гг., во время которого имело место убиения некоторых православных священников,
                        подтолкнул российское правительство и начальника Западного Края Михаила Николаевича Муравьева (1796-1866) к
                        более жестким мерам. В это время униатские церкви были переданы православным верующим. В 1866году Крупчицкий
                        костел был переоборудован под православную церковь. А в 1867году епископом Брестским Игнатием (в миру Яков
                        Леонтьевич Железовский 1802-1872) церковь освящена с именем Александра Невского. Однако церковь просуществовала
                        не долго. В 6 часов вечера 9 сентября 1882г загорелся сарай (возможно поджог) пламя от которого перекинулось
                        на церковные постройки и церковь. За считанные минуты огнем были уничтожены все церковные постройки и церковь.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">1882</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start mb-10 md:text-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">С</span>троительство новой Церкви</div>
                        <p class="text-justify">В Литовской Православной Консистории было принято решение строить новую церковь.
                        В октябре 1882года разработку проектно-сметной документации церкви на 375 человек поручили младшему инженеру А.Рэмеру.
                        В ноябре того же года он с настоятелем прихода Евстафием Маркевичем провели изыскательские работы по выбору участка под церковь,
                        который размещался в 135 саженях от бывшего костела. (1сажень=2,13м) Через год помирает настоятель прихода, а из-за частых разъездов
                        и болезней архитектора изготовление документации затягивается.
                        Заклад церкви совершен торжественно 6 июня 1891года в присутствии духовенства и множества народа при великолепной погоде.
                        В фундамент церкви уложен большой темно-синий камень с выдолбленным углублением, в которое уложена большая медная позолоченная
                        доска изящной работы, изготовленная в Петрограде, вместе с серебряными рублями и другими серебряными монетами чеканки 1891 года.
                        На плите имеется надпись: «В лето от воплощения Бога Слова 1891 месяца Июня 6 дня, в честь и славу Святыя Троицы Отца и Сына и
                        Святаго Духа положено основание сему Святому Храму во имя Св.Равноапостольного и великого князя Владимира.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">1888</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">П</span>ервые святыни в Крупчицах</div>
                        <p class="text-justify">Бытует легенда, что некогда в этих краях была церковь и якобы она полностью ушла под землю.
                        Место это находится в пойме реки Тростяница. Есть предположение, что до строительства монастыря, здесь находились православные
                        культовые сооружения. В 1888 году при разборке монастырского фундамента были извлечены камни с высеченными на них православными крестами.
                        Эти камни уложены в фундамент строящейся церкви, за исключением одного, оставленного как памятник.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">1894</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start mb-10 md:text-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">О</span>свещение вновь построенной церкви</div>
                        <p class="text-justify">Бытует легенда, что некогда в этих краях была церковь и якобы она полностью ушла под землю.
                        Место это находится в пойме реки Тростяница. Есть предположение, что до строительства монастыря, здесь находились православные
                        культовые сооружения. В 1888 году при разборке монастырского фундамента были извлечены камни с высеченными на них православными
                        крестами. Эти камни уложены в фундамент строящейся церкви, за исключением одного, оставленного как памятник.«Вновь построенная
                        Крупчицкая Св.Владимировская церковь была принята по акту составленному 5 февраля 1894 года за №6 собственноручно подписанном
                        Гродненским Губернским инженером Действительным Статским Советником Небольсиным, Мировым посредником Свенсоном, техником Романовым
                        церковь передается в Духовное ведомство. Священник о.Никанор имел претензии к подрядчику о качестве кирпича и стоимости работ.
                        По этой причине он не подписал акт приема церкви. Она была принята начальством Литовской епархии. А вот освящение прошло гораздо позже.
                        К лету 1894 года строительные работы по строительству церкви были завершены. Освящение вновь построенной церкви совершено
                        10 июля 1894 года Виленским Кафедральным протоиереем Иоанном Котовичем при участии 16 священников и двух дьяконов при стечении
                        большого количества местного населения.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">1915</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">I-я </span>Мировая война</div>
                        <p class="text-justify">Летом 1915 года нависла угроза оккупации края немецкими войсками. По приказу Верховного командования российской армии церковное
                        имущество вывозилось в Россию. Выполняя этот приказ о.Никанор с прихожанами собрали наиболее ценные церковные предметы. Уложили
                        их в сундук и 4 деревянные ящики и тремя подводами доставили на ст.Кобрин. Груз был адресован на ст. Снитово Полесской железной
                        дороги. Вес составлял 28 пудов 10 фунтов (1пуд - 16,38кг, 1фунт - 0,4095кг) багажная квитанция № 1361 от 12 августа 1915 года.
                        На ст.Жабинка были отправлены 4 колокола из Крупчицкой и 5 из Мыщицкой Св.Успенской церкви весом от 15 до 2 пудов. Сребро –
                        позолоченная чаша о.Никанором была передана в Донской монастырь г. Москвы. В последнюю ночь перед эвакуацией о.Никанор с церковным
                        старостой часть церковного имущества закопали. В России о.Никанор с матушкой Олимпиадой находились в Воронежской губернии. В конце
                        1915года за ними приехал младший сын Зиновий и перевез их в Петроград, где они жили у своих детей. В мае 1918 года о. Никанор с
                        матушкой переехали в уездной город Речица Минской губернии.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">1915</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">П</span>амятное событие</div>
                        <p class="text-justify">Бытует легенда, что некогда в этих краях была церковь и якобы она полностью ушла под землю.
                        Место это находится в пойме реки Тростяница. Есть предположение, что до строительства монастыря,
                        здесь находились православные культовые сооружения. В 1888 году при разборЭта памятная доска была
                        установлена в Крупчицкой церкви. В 1915 году она вместе с другим церковным имуществом о.Никанором
                        была эвакуирована в Россию.ке монастырского фундамента были извлечены камни с высеченными на них
                        православными крестами. Эти камни уложены в фундамент строящейся церкви, за исключением одного,
                        оставленного как памятник.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        <!--<div class="flex-1 mt-16 ">
                            <div class="relative h-screen w-full">
                                <img src="images//Suvorov.png" alt="Background Image" class="absolute inset-0 w-100 h-100 object-cover relative h-screen w-full">
                            </div>
                        </div> -->
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">1918</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end mb-10 md:text-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">В</span>осстановление Православия в Западном крае</div>
                        <p class="text-justify">В июне 1918 года о.Никанор с матушкой Олимпиадой возвращается из Речицы, в теперь родные, Крупчицы.
                        Здесь он увидел удручающую картину. Св.Владимировская церковь, некогда одна из лучших церквей
                        благочиния оказалась в запустении: замки с дверей сорваны, на колокольне окна выбиты, (во время
                        боевых действий немцы устроили там наблюдательный пункт) на колокольне и в отдельных местах церкви
                        пол прогнил, кровля пробита пулями. В церковном доме жили евреи, которые были выселены немецкими
                        властями из Бреста. Из 6 деревень прихода 3 сгорели полностью, четвертая наполовину. В селе Крупчицы
                        осталось несколько уцелевших домов, малочисленные крестьяне ютились в землянках. Поля не обрабатывались
                        и заросли бурьяном кустарником и лесом. О.Никанору немецкие власти поручили заведовать Крупчицким,
                        Озятским Рогознянским и Бульковским приходами. Не было облачений, церковной утвари и церковных предметов
                        для проведения богослужений. Некоторые предметы пришлось взять из других церквей. Как вспоминал о.Никанор
                        в крае свирепствовал тиф. Являясь ревнителем Церкви Христовой, о.Никанор, с присущей ему энергией,
                        стал разыскивать отправленные в Россию церковные вещи.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">1925</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">В </span>составе Полесской Епархии</div>
                        <p class="text-justify">Противника Автокефалии Архиепископа Пинского и Новогрудского Пантелеимона (в миру Павел Степанович
                        Рожновский 1867-1950гг) польские власти лишили кафедры, отправили на покой и заточили в Жировичский монастырь.
                        12 июня 1922 года на освободившуюся кафедру назначили епископа Александра (в миру Николай Иванович Иноземцев
                        1887-1948), в конце года епископ Пинский и Полесский. В конце 1925 года епархия стала называться Полесская и
                        Пинская. 3 июня 1927года епископ Александр возведен в сан Архиепископа. Митрополитом Варшавским и Ковельским
                        и всея Польши был избран архиепископ Волынский Дионисий (в миру Константин Николаевич Валединский 1876-1960).
                        Церкви Черевачицкого благочиния, куда входила Крупчицкая Св.Владимировская церковь, входили во 2-й благочинный
                        округ Кобринского уезда. Кобринские благочиния входили в состав Полесско-Пинской епархии.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">1939</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end mb-10 md:text-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">С</span>в.Владимировская церковь 1938–1943гг</div>
                        <p class="text-justify">9 апреля 1939 года во время пасхального Богослужения в Крупчцкой церкви произошло такое событие. В церковь пришла
                        молодежь, находясь в притворе они курили, громко разговаривали, смеялись. Настоятель прихода Владимир Антипорович,
                        прервав Богослужение, с помощью прихожан удалил их из храма. После смены власти в сентябре того же года эта молодежь,
                        а это были комсомольцы, оказались при власти и с оружием. Они начали мстить о.Владимиру и всячески издеваться над ним.
                        Ночью человек 20 ворвались в квартиру настоятеля. Угрожая оружием стали требовать отдать оружие, коего у него никогда
                        не было. С бранью, нецензурными словами, они стали производить обыск в квартире, переписывая личные и церковные вещи,
                        грозя арестовать его. Забрав урожай и сено они поселили в церковный дом две семьи. 15 ноября 1939 года написав рапорт
                        благочинному 1-го Кобринского округа о невозможности дальнейшего пребывания его на Крупчицком приходе о.Владимир передал
                        церковь настоятелю Рогознянской церкви Николаю Михаловскому.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">1943</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">К</span>рупчицкая церковь при Петре Калишевиче</div>
                        <p class="text-justify">После войны прихожане Св. Владимировской церкви с ее настоятелем о.Петром Калишевичем, несмотря на материальные
                        трудности, приобретали церковные предметы: в1949году приобрели иконы Святой Троицы, Рождества Христова, Успения
                        Пр. Богородицы, Крещения Господня каждая по 240 рублей. В1948-1950гг приобретены 4 ризы с подризниками, приобретен
                        новый Антиминс Священнодействован Высокопреосвященным Питиримом Митрополитом Минским и Белорусским. Приобретено
                        Паникадило 2-х ярусное на 18 свечей медное посеребренное, облачения престола и жертвенника. В 1950-1951гг произведен
                        ремонт церкви: Выполнен ремонт штукатурки стен внутри и снаружи, все стены храма выбелены известью, а внутри в рост
                        человека покрашены масляной краской, В средней части церкви выложен новый пол и сделан клирос. На ремонт храма
                        израсходовано 15000 рублей из церковной кассы и пожертвований прихожан. В1956 году за 2 тыс. рублей приобретена
                        Голгофа с предстоящими Пресвятой Богородицы и Св.Апостола Иоанна Богослова, а также за 1 тыс. рублей приобретены
                        4 иконы Страдание Господа нашего Иисуса Христа. Крупчицкая церковь 1943- 1969гг
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">1945</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end mb-10 md:text-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">Т</span>яжелые времена для православных церквей</div>
                        <p class="text-justify">В СССР и в восточных областях БССР гонения на церковь начались с установлением Советской власти. В западных областях
                        закрытие церквей и гонения на священнослужителей начались после Великой Отечественной войны. Пик закрытий
                        пришелся на шестидесятые годы 20-го столетия. За период с 1945 года по 1965 год в Брестской области было закрыто
                        186 церквей. Обратимся к документам того времени. Отчет уполномоченного по делам русской православной церкви по
                        Брестской области за 1960 год: «…в области насчитывается 190 священников и 6 дьяконов. В Кобринском районе
                        в 1959 году совершено: крещений - 905, венчаний - 182, погребений - 358. За 1960 год соответственно 793, 185, 345.
                        Доходы церквей составили в 1959 году - 422683 руб., в 1960 году - 370318 руб. В 1960 году в области имели место
                        случаи поступления 6 человек из числа молодежи в Жировичскую духовную семинарию. Благодаря принятым мерам со
                        стороны партийных и советских органов, они в семинарию не были допущены, и в настоящее время принимаются все
                        необходимые меры к их трудоустройству с тем, чтобы не допустить вновь их поступления в духовную семинарию.»
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">1969</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">З</span>акрытие Крупчицкой Св.Владимировской церкви</div>
                        <p class="text-justify">По воспоминаниям прихожан о. Петр говорил: «Я помру, и церковь закроют». Так и случилось: Петр Калишевич 6
                        мая 1969 года помирает от воспаления легких, а через несколько месяцев Жабинковский райисполком принимает
                        решение о закрытии Крупчицкой церкви, несмотря на то, что договором от 8 мая 1945 года тот же райисполком
                        передал прихожанам здание церкви в бессрочное пользование. Не дожидаясь утверждения документов по закрытию
                        Крупчицкой Св.Владимировской церкви местные активисты принялись за ее разорение.
                        В 1972 году церковный староста Ярошук Владимир Евфимович нашел в разоренной церкви
                        опись Церковного имущества и опись имущества вывезенного в Россию в 1915 году, составленную о. Никанором Котовичем.
                        Поруганное здание церкви власти отдали местному колхозу под амбар. Чтобы навечно стереть память о Крупчицкой церкви,
                        о Крупчицком сражении, богоборческие власти. Уже разоренная, Св.Владимировская церковь для отдельных граждан являлась
                        камнем преткновения. Житель д. Крупчицы, проходя мимо опустошенной церкви заметил дым, выходящий из окон церкви.
                        По телефону он вызвал пожарных.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">1992</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end mb-10 md:text-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">В</span>озрождение Святыни</div>
                        <p class="text-justify">Перестройка в СССР разрушила экономику, но для церквей наступило благоприятное время. На бывшем Крупчицком приходе
                        остались люди не равнодушные к своей церкви. Одним с таковых являлся Ярошук Владимир Евфимович. Еще в 1988году он
                        обращался в различные инстанции о передаче здания Крупчицкой церкви верующим.
                        Такое письмо было написано с указанием большого значения Крупчицкой церкви не
                        только для верующих, но как значимого исторического памятника. Это письмо было
                        отправлено в Москву академику Дмитрию Лихачеву. Как свидетельствуют представленные
                        документы, власти без особого энтузиазма стали заниматься восстановлением храма,
                        но и не препятствовали его восстановлению. Усилиями В.Е.Ярошука, В.А.Карпинчика 
                        Г.Куличика, Ф.Андреюка и других под руководством настоятеля прихода Иоанна Поддубного,
                        (на приходе с 1990 года) который сам покрывал купола, ремонтные работы были завершены в 1992 году.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">1993</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">В</span>осстановление Крупчицкой Св.Владимировской церкви</div>
                        <p class="text-justify"> Первоочередной задачей было сбор средств на реставрацию. Необходимо было выполнить: 1.Замену негодной кровли.
                        2. Изготовление и покрытие куполов с установкой крестов. 3.Устройство полов. 4.Ремонт штукатурки внутри и снаружи.
                        5.Покрасочные работы. 6. Приобретение икон, церковной утвари и колоколов. Местные жители, бывшие прихожане, чьи души,
                        истосковались без духовной пищи, начали сбор пожертвований. Пенсионеры Гавриил Куличик из д. Богданы и Федор Андреюк
                        из д.Чижевщина жертвовали свой труд, работая на восстановлении святыни. Жабинковский РИК и торфобрикетный завод
                        Гатча-Осовское на реставрацию церкви выделили по 5 тысяч рублей. Колхоз – агрофирма «Рогознянский» оказал помощь
                        в распиловке лесоматериала. В то время еще действовала планово–распределительная система, поэтому возникали
                        проблемы с приобретением материалов. Часть оцинкованной жести выделил райисполком, остальную жесть о. Иоанн
                        скал в разных местах. О. Иоанн не только руководил строителями, но сам покрывал купола оцинкованной жестью.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-start text-9xl">2006</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-end mb-10 md:text-end timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">П</span>од звон колоколов</div>
                        <p class="text-justify">В 2002 году настоятелем Св.Владимировской церкви назначен священник Анатолий Пучинский. Не все было выполнено во время
                        реставрации храма. Не было колоколов, недостаточно было церковной утвари. Отопление храма осуществлялось «печкой–буржуйкой»
                        с выведенной в окно трубой. Прилегающая территория не была благоустроена. Дорога к храму оставалась без какого-либо покрытия,
                        вся в рытвинах и ухабах. Эти проблемы и повышение благолепия храма пришлось решать о. Анатолию. На второй год службы им были
                        заказаны три колокола. На колоколах были отлиты имена жертвователей: Николая, Михаила и Владимира. На престольный праздник 28
                        июля 2006 года колокола созывали своим звоном прихожан, многочисленных гостей и паломников на торжественное богослужение.
                        В настоящее время выполнено благоустройство церковной территории. Для отопления храма подведен природный газ. Много делается
                        по благолепию храма.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <hr/>
                </li>
                <li>
                    <hr/>
                    <div class="timeline-end text-9xl">2024</div>
                    <div class="timeline-middle">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                    </div>
                    <div class="timeline-start timeline-box bg-blue-100 shadow-xl shadow-gray-300 rounded-2xl">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">А</span>рхитектура церкви</div>
                        <p class="text-justify">В настоящее время Храм реставрируется и он становится еще лучше для своих прихожан.
                        Храм по плановому решению и объемно-пространственной композиции относится к типу кресто-купольных храмов с башней-колокольней
                        на главном фасаде. Основной храмовый объем имеет в плане форму креста. По продольной оси к нему пристроены:
                        с запада – башня-колокольня, с востока – пятистенная апсида. Сооружение завершается полусферичным куполом
                        на массивном восьмигранном световом барабане, грани которого с полуциркульным завершением прорезаны высокими
                        полуциркульными окнами. Над куполом возвышается головка на высокой шейке. Аналогичный купол завершает и башню-колокольню над
                        притвором. В интерьере храма выделяется подкупольное пространство. 4 столба, размещенные в центре, являются основой для
                        подпружных арок, поддерживающих купол на парусах.
                        </p>
                        <div class="flex items-center flex-wrap ">
                            <a href="/fullstory" class="link-info link-hover text-blue-700 inline-flex items-center md:mb-2 lg:mb-0">
                                <div style="vertical-align: inherit;">
                                    <p  style="vertical-align: inherit;">Узнать больше</p>
                                </div>
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
        </div>

    <div class="flex justify-center p-4">
        <button type="submit" class="transform motion-safe:hover:scale-110 transition duration-700 ease-in-out bg-orange-400 text-white font-medium py-2 px-4 rounded-lg hover:bg-sky-600">
            <a href="/fullstory">Подробная история Храма</a>
        </button>
    </div>

    </x-slot>
</x-app-layout>

