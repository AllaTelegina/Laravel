<x-app-layout>
    <x-slot name="header">
        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">К</span>алендарь венчаний</div>
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

                <div class="bg-sky-600 text-white text-center mt-6 header-date rounded-3xl">
                    <div class="mt-4">
                        <span class="text-white text-2xl lg:text-4xl m-6">Дни совершения Таинства Брака</span>
                    </div>

                    <div class="flex justify-center space-x-8 text-sm lg:text-2xl text-center m-8 pb-8">
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
            <div class="-mt-16 mb-8 px-8 rounded-xl -translate-y-6">
                <div class="container mx-auto shadow-xl shadow-gray-300 rounded-xl">
                    <div class="py-8 flex justify-center bg-blue-100 shadow-xl shadow-gray-300 rounded-xl">
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

                <div class="mt-2 h-min-24 my-4 py-4 px-4 mx-auto w-3/4 text-center bg-sky-600 shadow-xl shadow-gray-300 rounded-xl">
                    <span class="text-white text-3xl font-semibold">Как подготовиться к венчанию?</span>
                </div>

                <ul class=" mx-auto w-full mt-20 divide-y  shadow-xl shadow-gray-300 rounded-xl">
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
                                <span>Выбрать подходящую дату для венчания</span>
                            </summary>
                            <article class="px-4 pb-4">
                                <div class="my-4 grid gap-6 px-4">
                                    Обратитесь к церковному календарю, чтобы узнать, какие дни считаются благоприятными для венчания. Следует избегать следующих периодов:
                                    <ul class="list-disc list-inside">
                                        <li>Посты (Великий пост, Петров пост, Успенский пост, Рождественский пост).</li>
                                        <li>Сплошные седмицы (Светлая седмица, Масленица и т.д.).</li>
                                        <li>Дни великих церковных праздников (например, Пасха, Рождество и другие).</li>
                                    </ul>
                              </div>
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
                                <span>Согласование с батюшкой</span>
                            </summary>
                            <article class="px-4 pb-4">
                                Перед тем как окончательно выбрать дату, обсудите её с батюшкой вашего храма. Он сможет подсказать
                                наиболее подходящее время и рассказать о дополнительных требованиях, которые могут быть в вашем храме.
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
                                <span>Учесть личные и семейные события</span>
                            </summary>
                            <article class="px-4 pb-4">
                                Учтите даты, которые важны для вас и вашей семьи. Это могут быть значимые семейные праздники или личные
                                даты. Главное, чтобы выбранная дата не создавала неудобств ни для вас, ни для ваших близких.
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
                                <span>Время года и погода</span>
                            </summary>

                            <article class="px-4 pb-4">
                                Продумайте время года, когда вам бы хотелось провести венчание.
                                Летние месяцы могут быть более удобными для проведения торжества
                                на свежем воздухе, тогда как зимние могут предложить более уютную и интимную атмосферу.
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
                                <span>Практические соображения</span>
                            </summary>
                            <article class="px-4 pb-4">
                                Учитывайте возможность организации торжества: наличие свободных дат в ЗАГСе
                                (если планируется официальная регистрация), возможность аренды зала для банкета
                                и приглашение гостей.
                            </article>
                        </details>
                    </li>
                    <li>
                        <details class="group">
                            <summary class="flex items-center gap-3 bg-blue-100 border-2 border-gray-100 px-4 py-3 font-medium marker:content-none hover:cursor-pointer
                         focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-50 dark:hover:bg-gray-800 rounded-b-xl">
                                <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90" xmlns="http://www.w3.org/2000/svg"
                                     width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                          d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                                <span>Подготовка</span>
                            </summary>
                            <article class="px-4 pb-4">
                                Оставьте достаточно времени на подготовку к венчанию. Вам потребуется время для сбора необходимых документов,
                                прохождения оглашения (если требуется), а также для подготовки свадебного платья, костюма и аксессуаров.

                                После выбора даты приступайте к дальнейшим приготовлениям, уделяя внимание всем деталям.
                                Пусть ваше венчание станет началом долгого и счастливого семейного пути!
                            </article>
                        </details>
                    </li>
                </ul>


                <div class="flex items-center justify-center h-screen">
                    <div class="lg:w-9/12 md:w-9/12 sm:w-10/12 mx-auto p-4">
                        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                            <div class="flex items-center justify-between px-6 py-3 bg-sky-600">
                                <button id="prevMonth" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" class="block w-6 h-8 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                                    </svg></button>
                                <h2 id="currentMonth" class="text-white"></h2>
                                <button id="nextMonth" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" class="block w-6 h-8 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg></button>
                            </div>
                            <div class="grid grid-cols-7 gap-2 p-4" id="calendar">
                                <!-- Calendar Days Go Here -->
                            </div>
                            <div id="myModal" class="modal hidden fixed inset-0 flex items-center justify-center">
                                <div class="modal-overlay absolute inset-0 bg-blue-950 opacity-50"></div>

                                <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                                    <div class="modal-content py-4 text-left px-6">
                                        <div class="flex justify-between items-center pb-3">
                                            <p class="text-2xl font-bold">Selected Date</p>
                                            <button id="closeModal" class="modal-close px-3 py-1 rounded-full bg-gray-200 hover:bg-sky-600 focus:outline-none focus:ring">✕</button>
                                        </div>
                                        <div id="modalDate" class="text-xl font-semibold"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    // Function to generate the calendar for a specific month and year
                    function generateCalendar(year, month) {
                        const calendarElement = document.getElementById('calendar');
                        const currentMonthElement = document.getElementById('currentMonth');

                        // Create a date object for the first day of the specified month
                        const firstDayOfMonth = new Date(year, month, 1);
                        const daysInMonth = new Date(year, month + 1, 0).getDate();

                        // Clear the calendar
                        calendarElement.innerHTML = '';

                        // Set the current month text
                        const monthNames = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
                        currentMonthElement.innerText = `${monthNames[month]} ${year}`;

                        // Calculate the day of the week for the first day of the month (0 - Monday, 1 - Tuesday, ..., 6 - Sunday)
                        const firstDayOfWeek = firstDayOfMonth.getDay();

                        // Create headers for the days of the week
                        const daysOfWeek = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
                        daysOfWeek.forEach(day => {
                            const dayElement = document.createElement('div');
                            dayElement.className = 'text-center font-semibold';
                            dayElement.innerText = day;
                            calendarElement.appendChild(dayElement);
                        });

                        // Create empty boxes for days before the first day of the month
                        for (let i = 0; i < firstDayOfWeek; i++) {
                            const emptyDayElement = document.createElement('div');
                            calendarElement.appendChild(emptyDayElement);
                        }

                        // Create boxes for each day of the month
                        for (let day = 1; day <= daysInMonth; day++) {
                            const dayElement = document.createElement('div');
                            dayElement.className = 'text-center py-2 border cursor-pointer';
                            dayElement.innerText = day;

                            // Check if this date is the current date
                            const currentDate = new Date();
                            if (year === currentDate.getFullYear() && month === currentDate.getMonth() && day === currentDate.getDate()) {
                                dayElement.classList.add('bg-orange-400', 'text-white'); // Add classes for the indicator
                            }
                            console.log(year);
                            console.log(month);
                            console.log(day);
                            if (year === 2024 && month === 8 && day === 1) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 2) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 4) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 6) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 8) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 9) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 11) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 13) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 15) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 16) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 18) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 22) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 23) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 25) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 29) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 8 && day === 30) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 2) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 4) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 6) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 7) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 9) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 11) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 14) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 16) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 18) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 20) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 21) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 23) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 25) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 27) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 28) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 9 && day === 30) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 1) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 3) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 4) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 6) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 8) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 11) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 13) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 15) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 17) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 18) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 20) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 22) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 24) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 25) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }
                            if (year === 2024 && month === 10 && day === 27) {
                                dayElement.classList.add('bg-blue-300', 'text-white'); // Add classes for the indicator
                            }

                            calendarElement.appendChild(dayElement);
                        }
                    }

                    // Initialize the calendar with the current month and year
                    const currentDate = new Date();
                    let currentYear = currentDate.getFullYear();
                    let currentMonth = currentDate.getMonth();
                    generateCalendar(currentYear, currentMonth);

                    // Event listeners for previous and next month buttons
                    document.getElementById('prevMonth').addEventListener('click', () => {
                        currentMonth--;
                        if (currentMonth < 0) {
                            currentMonth = 11;
                            currentYear--;
                        }
                        generateCalendar(currentYear, currentMonth);
                    });

                    document.getElementById('nextMonth').addEventListener('click', () => {
                        currentMonth++;
                        if (currentMonth > 11) {
                            currentMonth = 0;
                            currentYear++;
                        }
                        generateCalendar(currentYear, currentMonth);
                    });

                    // Function to show the modal with the selected date
                    function showModal(selectedDate) {
                        const modal = document.getElementById('myModal');
                        const modalDateElement = document.getElementById('modalDate');
                        modalDateElement.innerText = selectedDate;
                        modal.classList.remove('hidden');
                    }

                    // Function to hide the modal
                    function hideModal() {
                        const modal = document.getElementById('myModal');
                        modal.classList.add('hidden');
                    }

                    // Event listener for date click events
                    const dayElements = document.querySelectorAll('.cursor-pointer');
                    dayElements.forEach(dayElement => {
                        dayElement.addEventListener('click', () => {
                            const day = parseInt(dayElement.innerText);
                            const selectedDate = new Date(currentYear, currentMonth, day);
                            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                            const formattedDate = selectedDate.toLocaleDateString(undefined, options);
                            showModal(formattedDate);
                        });
                    });

                    // Event listener for closing the modal
                    document.getElementById('closeModal').addEventListener('click', () => {
                        hideModal();
                    });

                </script>


        <div>
            <div class="overflow-hidden  aspect-video bg-blue-200 cursor-pointer rounded-xl relative group w-full h-96">
                <div class="rounded-xl z-50 opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out cursor-pointer absolute from-black/80 to-transparent bg-gradient-to-t inset-x-0 -bottom-2 pt-30 text-white flex items-end">
                    <div>
                        <div class="relative pt-28 text-center">
                            <span class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl link link-hover"><a href="/sacraments">Таинство Венчания</a></span>
                        </div>
                        <div class="text-centre p-4 space-y-3 group-hover:opacity-100 group-hover:translate-y-0 translate-y-4 pb-10 transform transition duration-300 ease-in-out">
                            <div class="opacity-60 text-lg text-center">
                                Церемония венчания - это не только древняя и красивая традиция, но и важный шаг на пути к созданию прочной
                                и счастливой семьи. Иногда пары приходят к этому решению спустя годы.
                                Будем рады помочь вам в этом важном и радостном событии!
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{asset('images/32.jpg')}}" alt="" class="absolute h-full w-full object-cover object-center rounded-xl aspect-square group-hover:scale-110 transition duration-300 ease-in-out" />
            </div>


            </section>
        </div>
    </x-slot>
</x-app-layout>
