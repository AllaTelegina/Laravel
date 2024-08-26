<x-app-layout>
    <x-slot name="header">
    <div class="text-blue-950 py-12">
        <div class="mt-4">
            <div class="text-3xl"><span class="text-red-700 font-medium">К</span>алендарь Венчаний</div>
        </div>
        <!-- панировочные сухари -->
        <nav class="flex m-4" aria-label="Breadcrumb">
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
                        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Православный календарь</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Календарь венчаний</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="bg-blue-400  text-white text-center py-4 header-date">
            <div class="mt-2">
                <span class="text-white text-5xl m-6">Дни совершения Таинства Брака</span>
            </div>
            <div class="flex justify-center space-x-8 text-2xl text-center m-8">
              <p>Венчание – это важное событие в жизни каждой православной семьи.
                  Выбор даты для венчания играет значимую роль, так как она должна
                  соответствовать церковным канонам и традициям.
              </p>
            </div>
        </div>


        <div class="pt-12">
            <div class="relative w-full h-96">
                <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/venchanie.jpeg')}}" alt="nature image" />
                <div class="relative pt-28 text-center">
                    <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">#</h2>
                </div>
            </div>
            <div class="-mt-16 mb-8 px-8 ">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                        <div class="my-4 grid gap-6 px-4">
                            Венчание — это святое таинство, через которое мужчина и женщина получают благословение на создание семьи в
                            христианской традиции. Оно подчеркивает не только юридическую, но и духовную сторону брака, делая его
                            священным союзом перед Богом. Венчание освящает брачный союз, привлекая благодать Божью для укрепления
                            семьи. Супруги соединяются не только физически, но и духовно, обещая перед Богом хранить верность
                            и любовь друг к другу. Таинство венчания дарует супругам поддержку Святого Духа, помогая им преодолевать
                            жизненные трудности. Венчанный брак служит примером для окружающих, подчеркивая важность христианских
                            семейных ценностей. Венчание связывает супругов с многовековыми традициями Церкви, усиливая их чувство
                            принадлежности к духовной общине. Оно помогает супругам осознать глубину и значимость их союза, наполняет
                            семейную жизнь духовным смыслом и поддерживает их в стремлении строить крепкую и благочестивую семью.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="-mt-16 mb-8 px-8 ">
            <div class="container mx-auto shadow-xl shadow-gray-300">
                <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                    <div class="my-4 grid gap-6 px-4">
                        <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl text-center text-semibold">Как выбрать подходящую дату для венчания</h3>
                        <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">1. Церковный календарь</h3>

                        Обратитесь к церковному календарю, чтобы узнать, какие дни считаются благоприятными для венчания. Следует избегать следующих периодов:
<ul class="list-disc list-inside">
    <li>Посты (Великий пост, Петров пост, Успенский пост, Рождественский пост).</li>
    <li>Сплошные седмицы (Светлая седмица, Масленица и т.д.).</li>
    <li>Дни великих церковных праздников (например, Пасха, Рождество и другие).</li>
</ul>
                        <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">2. Согласование с батюшкой</h3>
                        Перед тем как окончательно выбрать дату, обсудите её с батюшкой вашего храма. Он сможет подсказать наиболее подходящее время и рассказать о дополнительных требованиях, которые могут быть в вашем храме.
                        <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">3. Личный и семейный календарь</h3>
                        Учтите даты, которые важны для вас и вашей семьи. Это могут быть значимые семейные праздники или личные даты. Главное, чтобы выбранная дата не создавала неудобств ни для вас, ни для ваших близких.
                        <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">4. Время года и погода</h3>
                        Продумайте время года, когда вам бы хотелось провести венчание. Летние месяцы могут быть более удобными для проведения торжества на свежем воздухе, тогда как зимние могут предложить более уютную и интимную атмосферу.
                        <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl"> 5. Практические соображения</h3>

                        Учитывайте возможность организации торжества: наличие свободных дат в ЗАГСе (если планируется официальная регистрация), возможность аренды зала для банкета и приглашение гостей.
                        <h3 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl"> 6. Подготовка</h3>

                        Оставьте достаточно времени на подготовку к венчанию. Вам потребуется время для сбора необходимых документов, прохождения оглашения (если требуется), а также для подготовки свадебного платья, костюма и аксессуаров.

                        После выбора даты приступайте к дальнейшим приготовлениям, уделяя внимание всем деталям. Пусть ваше венчание станет началом долгого и счастливого семейного пути!
                    </div>
                </div>
            </div>
        </div>



        <!-- календарь -->

        <div class="flex flex-grow flex-col bg-white border-t border-b sm:rounded sm:border shadow overflow-hidden m-6">

            <div class="border-b bg-blue-400">
                <div class="flex justify-between pl-6 -mb-px">
                    <h3 class="text-white py-4 text-lg text-center">Календарь Венчаний</h3>
                    <div class="flex">
                    </div>
                </div>
            </div>

        <div class="flex px-2 py-2 -mb-px">
            <div class="flex flex-wrap bg-white overflow-hidden">
                <div class="w-auto mx-3 my-3 border-solid border-blue-400 rounded border shadow-sm">
                    <div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">
                        Январь 2024</div>
                    <div class="">
                        <table class="w-full">
                            <tr class="border-b">
                                <th class="py-3 px-4">ПН</th>
                                <th class="py-3 px-4">ВТ</th>
                                <th class="py-3 px-4">СР</th>
                                <th class="py-3 px-4">ЧТ</th>
                                <th class="py-3 px-4">ПТ</th>
                                <th class="py-3 px-4">СБ</th>
                                <th class="py-3 px-4">ВС</th>
                            </tr>
                            <tr>
                                <td></td><td></td><td></td><td></td><td></td><td></td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td>
                            </tr><tr>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td>
                            </tr><tr>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td>
                            </tr><tr>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td>
                                <td>
                                </td><td></td><td></td><td></td><td></td></tr>
                        </table>
                    </div>
                </div>
                <div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm">
                    <div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center"></div>
                    <div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th>
                                <th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">February 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">March 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">April 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">May 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td>
                                <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td>
                                <td></td></tr></table></div></div>


                <div class="flex flex-wrap bg-white overflow-hidden">
                    <div class="w-auto mx-3 my-3 border-solid border-blue-400 rounded border shadow-sm">
                        <div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">
                            Январь 2024</div>
                        <div class="">
                            <table class="w-full">
                                <tr class="border-b">
                                    <th class="py-3 px-4">ПН</th>
                                    <th class="py-3 px-4">ВТ</th>
                                    <th class="py-3 px-4">СР</th>
                                    <th class="py-3 px-4">ЧТ</th>
                                    <th class="py-3 px-4">ПТ</th>
                                    <th class="py-3 px-4">СБ</th>
                                    <th class="py-3 px-4">ВС</th>
                                </tr>
                                <tr>
                                    <td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td>
                                </tr><tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td>
                                </tr><tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td>
                                </tr><tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td>
                                    <td>
                                    </td><td></td><td></td><td></td><td></td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm">
                        <div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center"></div>
                        <div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">February 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">March 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">April 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">May 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td></tr></table></div></div></div></div></div>
        </div>


<div>
            <div class="overflow-hidden  aspect-video bg-blue-200 cursor-pointer rounded-xl relative group relative w-full h-96">
                <div class="rounded-xl z-50 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
                    <div>
                        <div class="relative pt-28 text-center">
                            <span class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl"><a href="/sacraments">Таинство Венчания</a></span>
                        </div>
                        <div class="text-centre transform-gpu p-4 space-y-3 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                            <div class="opacity-60 text-lg text-center">
                                Церемония венчания - это не только древняя и красивая традиция, но и важный шаг на пути к созданию прочной
                                и счастливой семьи. Иногда пары приходят к этому решению спустя годы.
                                Будем рады помочь вам в этом важном и радостном событии!
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{asset('images/venchanie2.jpg')}}" alt="" class="absolute h-full w-full object-cover object-center rounded-xl aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
            </div>



            </div>

</x-slot>

</x-app-layout>
