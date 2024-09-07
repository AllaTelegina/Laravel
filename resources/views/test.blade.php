<x-app-layout>

    <x-slot name="header">
<section class="mt-12">

    поделиться
    <div class="flex justify-center h-screen bg-white">
        <!-- original button inspiration from khatabwedaa [https://tailwindcomponents.com/component/button-with-menu]-->
        <div class="flex flex-wrap items-center my-auto">
            <div class="w-full mb-12">
                <h1 class="text-2xl">Social Share Button with Dropdown-Menu</h1>
                <p class="text-gray-600">Click (focus) to fix dropdown menu in position (no JS)</p>
                <p class="text-gray-500">Icons from <a class="underline" href="https://fontawesome.com/" title="all credit and copyrights belongs to them">FontAwesome</a></p>
            </div>
            <div class="relative ml-24">
                <button class="sharebtn relative flex z-10 bg-white border rounded-md p-2 opacity-50 hover:opacity-100 focus:outline-none focus:border-blue-400" title="click to enable menu">
                    <span class="inline-block pr-4 text-gray-600">Share</span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-6 my-1 text-blue-700">
                        <path fill="currentColor" d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z">
                        </path>
                    </svg>
                </button>
                <div class="sharebtn-dropdown absolute right-0 mt-0 w-48 bg-white rounded-sm overflow-hidden shadow-lg z-20 hidden border border-gray-100">
                    <a href="#" title="Share on Facebook (NB! does not work in this demo)" class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-blue-100">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-messenger" class="w-5 h-5 mr-4 text-blue-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256.55 8C116.52 8 8 110.34 8 248.57c0 72.3 29.71 134.78 78.07 177.94 8.35 7.51 6.63 11.86 8.05 58.23A19.92 19.92 0 0 0 122 502.31c52.91-23.3 53.59-25.14 62.56-22.7C337.85 521.8 504 423.7 504 248.57 504 110.34 396.59 8 256.55 8zm149.24 185.13l-73 115.57a37.37 37.37 0 0 1-53.91 9.93l-58.08-43.47a15 15 0 0 0-18 0l-78.37 59.44c-10.46 7.93-24.16-4.6-17.11-15.67l73-115.57a37.36 37.36 0 0 1 53.91-9.93l58.06 43.46a15 15 0 0 0 18 0l78.41-59.38c10.44-7.98 24.14 4.54 17.09 15.62z"></path></svg>
                        <span class="text-gray-600">Facebook</span>
                    </a>
                    <a href="#" title="Share on Twitter (NB! does not work in this demo)" class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-blue-100">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter-square" class="w-5 h-5 mr-4 text-blue-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-48.9 158.8c.2 2.8.2 5.7.2 8.5 0 86.7-66 186.6-186.6 186.6-37.2 0-71.7-10.8-100.7-29.4 5.3.6 10.4.8 15.8.8 30.7 0 58.9-10.4 81.4-28-28.8-.6-53-19.5-61.3-45.5 10.1 1.5 19.2 1.5 29.6-1.2-30-6.1-52.5-32.5-52.5-64.4v-.8c8.7 4.9 18.9 7.9 29.6 8.3a65.447 65.447 0 0 1-29.2-54.6c0-12.2 3.2-23.4 8.9-33.1 32.3 39.8 80.8 65.8 135.2 68.6-9.3-44.5 24-80.6 64-80.6 18.9 0 35.9 7.9 47.9 20.7 14.8-2.8 29-8.3 41.6-15.8-4.9 15.2-15.2 28-28.8 36.1 13.2-1.4 26-5.1 37.8-10.2-8.9 13.1-20.1 24.7-32.9 34z"></path></svg>
                        <span class="text-gray-600">Twitter</span>
                    </a>
                    <a href="#" title="Share on LinkedIn (NB! does not work in this demo)" class="flex px-4 py-2 text-sm text-gray-800 border-b hover:bg-blue-100">
                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin" class="w-5 h-5 mr-4 text-blue-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path></svg>
                        <span class="text-gray-600">LinkedIn</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <style lang="postcss">
        .sharebtn {
            /* @apply relative flex z-10 bg-white border rounded-md p-2 opacity-50 hover:opacity-100 focus:outline-none focus:border-blue-400; */
        }

        .sharebtn:hover + .sharebtn-dropdown,
        .sharebtn:focus + .sharebtn-dropdown {
            display: block;
        }

        .sharebtn-dropdown {
            /* @apply absolute right-0 mt-0 w-48 bg-white rounded-sm overflow-hidden shadow-lg z-20 hidden border border-gray-100; */
        }
    </style>



    календарь
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Календарь с праздниками</title>
            <style>
                .calendar {
                    display: grid;
                    grid-template-columns: repeat(7, 1fr);
                    gap: 8px;
                }
                .calendar .day {
                    padding: 10px;
                    text-align: center;
                    border: 1px solid #ddd;
                    border-radius: 4px;
                }
                .calendar .holiday {
                    background-color: #f8d7da; /* Красный для праздников */
                }
                .calendar .great-holiday {
                    background-color: #f5c6cb; /* Розовый для великих праздников */
                }
                .calendar .week {
                    background-color: #d1ecf1; /* Светло-синий для седмиц */
                }
                .calendar .wedding {
                    background-color: #d4edda; /* Зеленый для дней венчаний */
                }
                .calendar .meatless {
                    background-color: #fff3cd; /* Желтый для пищи без мяса */
                }
                .calendar .fish {
                    background-color: #cce5ff; /* Голубой для рыбы */
                }
                .calendar .hot-oil {
                    background-color: #e2e3e5; /* Серый для горячей пищи с растительным маслом */
                }
                .calendar .hot-no-oil {
                    background-color: #d6d6d6; /* Темный серый для горячей пищи без растительного масла */
                }
                .calendar .cold-no-oil {
                    background-color: #f1f1f1; /* Очень светлый серый для холодной пищи без растительного масла */
                }
                .calendar .abstain {
                    background-color: #f5c6cb; /* Розовый для воздержания от пищи */
                }
            </style>
        </head>
        <body>
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="flex items-center justify-between px-6 py-3 bg-gray-700">
                <button id="prevMonth" class="text-white">Previous</button>
                <h2 id="currentMonth" class="text-white"></h2>
                <button id="nextMonth" class="text-white">Next</button>
            </div>
            <div class="grid grid-cols-7 gap-2 p-4 calendar" id="calendar">
                <!-- Calendar Days Go Here -->
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const months = [
                    'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
                    'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
                ];
                const currentMonthElement = document.getElementById('currentMonth');
                const calendarElement = document.getElementById('calendar');

                let currentMonthIndex = new Date().getMonth();
                let currentYear = new Date().getFullYear();

                async function fetchCalendarData(year, monthIndex) {
                    // Загрузка HTML-страницы и парсинг данных
                    const response = await fetch('http://calendar.lenacom.spb.ru/calendar1.html');
                    const html = await response.text();

                    // Создаем DOMParser для разбора HTML
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');

                    // Найдем нужные данные на странице
                    // Пример: предполагаем, что информация о днях находится в определенном теге
                    const days = {};

                    // Здесь нужно написать конкретный код для извлечения данных
                    // Пример (упрощенный):
                    // doc.querySelectorAll('.day-class').forEach(dayElement => {
                    //     const day = dayElement.getAttribute('data-day');
                    //     const type = dayElement.getAttribute('data-type');
                    //     days[day] = type;
                    // });

                    // Для примера, возвращаем пустой объект
                    return days;
                }

                function renderCalendar(year, monthIndex, days) {
                    calendarElement.innerHTML = '';
                    const firstDay = new Date(year, monthIndex, 1).getDay();
                    const daysInMonth = new Date(year, monthIndex + 1, 0).getDate();

                    // Fill in empty cells for days before the first day of the month
                    for (let i = 0; i < firstDay; i++) {
                        const emptyDiv = document.createElement('div');
                        calendarElement.appendChild(emptyDiv);
                    }

                    // Fill in the days of the month
                    for (let day = 1; day <= daysInMonth; day++) {
                        const dayDiv = document.createElement('div');
                        dayDiv.className = 'day';
                        dayDiv.textContent = `${day}`;

                        // Check if the day has a special type
                        const dayType = days[day] || 'normal'; // days может содержать информацию о типе дня
                        switch (dayType) {
                            case 'holiday':
                                dayDiv.classList.add('holiday');
                                break;
                            case 'great-holiday':
                                dayDiv.classList.add('great-holiday');
                                break;
                            case 'week':
                                dayDiv.classList.add('week');
                                break;
                            case 'wedding':
                                dayDiv.classList.add('wedding');
                                break;
                            case 'meatless':
                                dayDiv.classList.add('meatless');
                                break;
                            case 'fish':
                                dayDiv.classList.add('fish');
                                break;
                            case 'hot-oil':
                                dayDiv.classList.add('hot-oil');
                                break;
                            case 'hot-no-oil':
                                dayDiv.classList.add('hot-no-oil');
                                break;
                            case 'cold-no-oil':
                                dayDiv.classList.add('cold-no-oil');
                                break;
                            case 'abstain':
                                dayDiv.classList.add('abstain');
                                break;
                            default:
                                dayDiv.classList.add('normal');
                        }

                        calendarElement.appendChild(dayDiv);
                    }

                    currentMonthElement.textContent = `${months[monthIndex]} ${year}`;
                }

                document.getElementById('prevMonth').addEventListener('click', async () => {
                    if (currentMonthIndex > 0) {
                        currentMonthIndex--;
                    } else {
                        currentMonthIndex = 11; // December
                        currentYear--;
                    }
                    const days = await fetchCalendarData(currentYear, currentMonthIndex);
                    renderCalendar(currentYear, currentMonthIndex, days);
                });

                document.getElementById('nextMonth').addEventListener('click', async () => {
                    if (currentMonthIndex < 11) {
                        currentMonthIndex++;
                    } else {
                        currentMonthIndex = 0; // January
                        currentYear++;
                    }
                    const days = await fetchCalendarData(currentYear, currentMonthIndex);
                    renderCalendar(currentYear, currentMonthIndex, days);
                });

                async function initialize() {
                    const days = await fetchCalendarData(currentYear, currentMonthIndex);
                    renderCalendar(currentYear, currentMonthIndex, days);
                }

                initialize();
            });
        </script>
        </body>
        </html>




загрузка
        <div class="flex items-center justify-center h-screen">
            <div class="relative">
                <div class="h-24 w-24 rounded-full border-t-8 border-b-8 border-gray-200"></div>
                <div class="absolute top-0 left-0 h-24 w-24 rounded-full border-t-8 border-b-8 border-blue-500 animate-spin">
                </div>
            </div>
        </div>

подчеркивание
        <p class="text-lg m-6 group relative w-max">
            <span>Hover over me</span>
            <span class="absolute -bottom-1 left-1/2 w-0 transition-all h-0.5 bg-indigo-600 group-hover:w-3/6"></span>
            <span class="absolute -bottom-1 right-1/2 w-0 transition-all h-0.5 bg-indigo-600 group-hover:w-3/6"></span>
        </p>


        <div class="bg-base-200 collapse">
            <input type="checkbox" class="peer" />
            <div
                class="collapse-title bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content">
                Click me to show/hide content
            </div>
            <div
                class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content">
                <p>hello</p>
            </div>
        </div>   показать скрыть цветом



        <div class="max-w-6xl mx-auto my-8 p-8 bg-white rounded-lg shadow-md">

            <div class="grid grid-cols-9 gap-4 mb-8">
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>December 2023</option>
                    <option>January 2024</option>
                    <option>February 2024</option>
                    <!-- Add more months as needed -->
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>Best flex</option>
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>Booking.com</option>
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>Desktop</option>
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>1 night</option>
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>2 guests</option>
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>Any room</option>
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>Any meal</option>
                </select>
                <select class="col-span-1 px-2 py-1 border border-gray-300 rounded">
                    <option>Prima</option>
                </select>
            </div>
            <div class="grid grid-cols-7 gap-4 text-center text-gray-700 font-bold">
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
                <div>Sun</div>
            </div>

            <div class="grid grid-cols-7 gap-4 mt-4">
                <!-- Calendar days with pricing -->
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">1 Mon</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-11% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">2 Tue</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-21% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">3 Wed</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-27% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">4 Thu</div>
                    <div>$219</div>
                    <div class="text-sm text-gray-600">-6% vs. Comp</div>
                </div>
                <div class="p-2 bg-green-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">5 Fri</div>
                    <div>$179</div>
                    <div class="text-sm text-gray-600">-22% vs. Comp</div>
                </div>
                <div class="p-2 bg-red-100 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">6 Sat</div>
                    <div>$259</div>
                    <div class="text-sm text-gray-600">+13% vs. Comp</div>
                </div>
                <div class="p-2 bg-gray-300 text-center rounded calendar-card">
                    <div class="text-xs text-gray-500">7 Sun</div>
                    <div>Sold out</div>
                </div>
                <div class="flex justify-around mt-8">
                    <div class="px-4 py-2 bg-green-100 rounded">Low demand</div>
                    <div class="px-4 py-2 bg-yellow-100 rounded">Medium demand</div>
                    <div class="px-4 py-2 bg-red-100 rounded">High demand</div>
                </div>
            </div>



показать скрыть

        <details class="collapse bg-base-200">
            <summary class="collapse-title text-xl font-medium">Click to open/close</summary>
            <div class="collapse-content">
                <p>content</p>
            </div>
        </details>

        <div class="mt-4 mb-6 px-8">
            <div class="container mx-auto shadow-xl shadow-gray-300">
                <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                    <div class="my-2 grid gap-6 px-4">
                        <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Молитвы об исцелении болящих</h3>
                        <div>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="max-w-lg mx-auto p-8">
            <details class="open:bg-white dark:open:bg-slate-900 open:ring-1 open:ring-black/5 dark:open:ring-white/10 open:shadow-lg p-6 rounded-lg" open>
                <summary class="text-sm leading-6 text-slate-900 dark:text-white font-semibold select-none">
                    Why do they call it Ovaltine?
                </summary>
                <div class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">
                    <p>The mug is round. The jar is round. They should call it Roundtine.</p>
                </div>
            </details>
        </div>
            открытое закрытое состояние





        <ul class=" mx-auto w-full mt-20 divide-y  shadow-xl shadow-blue-200 rounded-xl">
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
                        <span>Молитвы вечерние начало</span>
                    </summary>

                    <article class="px-4 pb-4">

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
                        <span>Молитва 1-я, святого Макария Великого, к Богу Отцу</span>
                    </summary>

                    <article class="px-4 pb-4">

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
                        <span>Молитва 2-я, святого Антиоха, ко Господу нашему Иисусу Христу</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span>Молитва 3-я, ко Пресвятому Духу</span>
                    </summary>

                    <article class="px-4 pb-4">

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
                        <span>Молитва 3-я, ко Пресвятому Духу</span>
                    </summary>

                    <article class="px-4 pb-4">

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
                        <span>Молитва 4-я, святого Макария Великого</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span>Молитва 5-я 6-я</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span>Молитва 7-я, святого Иоанна Златоуста</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span> Молитва 8-я, нашему Иисусу Христу</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span> Молитва 9-я, ко Пресвятой Богородице, Петра Студийского</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span>Молитва 10-я, 11-я</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span>Кондак Богородице</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span>Окончание молитв</span>
                    </summary>
                    <article class="px-4 pb-4">

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
                        <span>Исповедание грехов повседневное</span>
                    </summary>
                    <article class="px-4 pb-4">

                    </article>
                </details>
            </li>
        </ul>






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

<!-- вращение круг-->
        <div>
            <div style="border-top-color:transparent"
                 class="w-16 h-16 border-4 border-red-400 border-double rounded-full animate-spin"></div>
        </div>


<!-- рамка в рамке-->
        <div class="h-screen flex items-center justify-center flex-col gap-4">
            <div class="border border-black p-4">
                <p class="border border-gray-400 p-4">This text has a border</p>
            </div>
            <div class="border border-dashed border-blue-500 p-4">
                <p>This text has a dashed blue border</p>
            </div>
            <h2 class="border-b-4 border-red-600 pb-2">Section Title</h2>
            <div class="border border-gray-300 rounded-lg p-4">
                <img
                    src="https://cdn.pixabay.com/photo/2016/11/18/23/38/child-1837375_640.png"
                    class="w-16 h-16 rounded-full border-4 border-blue-500"
                    alt="Profile Picture"
                />
                <h3 class="text-lg font-semibold mt-2">John Doe</h3>
                <p class="text-sm text-gray-600">Software Engineer</p>
            </div>
            <div class="border-l-4 border-green-500 bg-green-100 text-green-800 p-4">
                <p class="font-semibold">Success!</p>
                <p>Your transaction has been completed.</p>
            </div>
            <p> <a href="https://larainfo.com/blogs/how-to-use-font-border-in-tailwind-css">Read Full blog on larainfo</a></p>
        </div>


новости реклама

        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 relative">
            <div class="grid grid-cols-1 sm:grid-cols-12 gap-10">

                <div class="sm:col-span-6 lg:col-span-5">
                    <a href="#">
                        <div class="h-56 bg-cover text-center overflow-hidden"
                             style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                             title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                        <div class="lg:pl-16">
                            <a href="#"
                               class="text-xs text-indigo-600 uppercase font-medium mb-3 flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                                Fashion
                            </a>
                            <a href="#"
                               class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                            <p class="text-gray-700 text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-6 lg:col-span-4">
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                 style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&amp;m=1227967060&amp;s=612x612&amp;w=0&amp;h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                            </div>
                        </a>
                        <div class="text-sm">
                            <p class="text-gray-600 text-xs">Aug 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Cristiano Ronaldo
                                of Juventus FC looks dejected during the...</a>
                        </div>
                    </div>
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                 style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-and-marcandre-ter-stegen-of-fc-barcelona-waits-in-the-picture-id1266763488?k=6&amp;m=1266763488&amp;s=612x612&amp;w=0&amp;h=8vxz9HfQVfrff5N7d1lBVxtLamRQGK3J3lyHkUuuIiw=);">
                            </div>
                        </a>
                        <div class="text-sm w-2/3">
                            <p class="text-gray-600 text-xs">Jan 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Barcelona v Bayern
                                Munich </a>
                        </div>
                    </div>
                    <div class="flex items-start mb-3 pb-3">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                 style="background-image:url(https://media.gettyimages.com/photos/cristiano-ronaldo-of-juventus-fc-looks-dejected-during-the-uefa-of-picture-id1227967060?k=6&amp;m=1227967060&amp;s=612x612&amp;w=0&amp;h=cMSMlRyI6YAzcE_C2KgHGRLeVojHYoUhIvhwPBYv8f4=);">
                            </div>
                        </a>
                        <div class="text-sm">
                            <p class="text-gray-600 text-xs">Aug 18</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Cristiano Ronaldo
                                of Juventus FC looks dejected during the...</a>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="inline-block mr-3">
                            <div class="w-20 h-20 bg-cover bg-center"
                                 style="background-image:url(https://media.gettyimages.com/photos/lionel-messi-of-fc-barcelona-looks-dejected-following-his-teams-in-picture-id1266341828?k=6&amp;m=1266341828&amp;s=612x612&amp;w=0&amp;h=FZi-bSrIlOEE01780h79GsbBYPqZo2l3aaCxoktWADY=);">
                            </div>
                        </a>
                        <div class="text-sm w-2/3">
                            <p class="text-gray-600 text-xs">July 23</p>
                            <a href="#" class="text-gray-900 font-medium hover:text-indigo-600 leading-none">Barcelona v Bayern
                                Munich - UEFA Champions League </a>
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-12 lg:col-span-3">
                    <a href="#">
                        <div class="h-56 bg-cover text-center overflow-hidden"
                             style="background-image: url('https://tailwindcss.com/img/card-left.jpg')"
                             title="Woman holding a mug">
                        </div>
                    </a>
                    <div
                        class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
                        <div class="">
                            <a href="#"
                               class="text-xs text-indigo-600 uppercase font-medium flex items-center hover:text-gray-900 transition duration-500 ease-in-out">
                                Fashion
                            </a>
                            <a href="#"
                               class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 transition duration-500 ease-in-out">The
                                perfect summer sweater that you can wear! </a>
                            <p class="text-gray-700 text-xs mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>







        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">

                <div class="flex flex-wrap -m-4 ">

                    <div class="p-4 lg:w-1/3 ">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
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

                    <div class="p-4 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Ennui Snackwave Thundercats</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
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
                    <div class="p-4 lg:w-1/3">
                        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Selvage Poke Waistcoat Godard</h1>
                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
            <span class="text-gray-400 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
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
            </div>
        </section>



        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-12">
                    <div class="p-12 md:w-1/2 flex flex-col items-start">
                        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">CATEGORY</span>
                        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Roof party normcore before they sold out, cornhole vape</h2>
                        <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag narwhal portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag waistcoat fashion axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric. Cray pug you probably haven't heard of them hexagon kickstarter craft beer pork chic.</p>
                        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
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
                        <a class="inline-flex items-center">
                            <img alt="blog" src="https://dummyimage.com/104x104" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
            <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">UI DEVELOPER</span>
          </span>
                        </a>
                    </div>
                    <div class="p-12 md:w-1/2 flex flex-col items-start">
                        <span class="inline-block py-1 px-2 rounded bg-indigo-50 text-indigo-500 text-xs font-medium tracking-widest">CATEGORY</span>
                        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">Pinterest DIY dreamcatcher gentrify single-origin coffee</h2>
                        <p class="leading-relaxed mb-8">Live-edge letterpress cliche, salvia fanny pack humblebrag narwhal portland. VHS man braid palo santo hoodie brunch trust fund. Bitters hashtag waistcoat fashion axe chia unicorn. Plaid fixie chambray 90's, slow-carb etsy tumeric.</p>
                        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-100 mt-auto w-full">
                            <a class="text-indigo-500 inline-flex items-center">Learn More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span class="text-gray-400 mr-3 inline-flex items-center ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
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
                        <a class="inline-flex items-center">
                            <img alt="blog" src="https://dummyimage.com/103x103" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
            <span class="title-font font-medium text-gray-900">Alper Kamu</span>
            <span class="text-gray-400 text-xs tracking-widest mt-0.5">DESIGNER</span>
          </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>





        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -mx-4 -my-8">
                    <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                            <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                                <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">The 400 Blows</h1>
                                <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" src="https://dummyimage.com/103x103" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900">Alper Kamu</span>
              </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                            <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                                <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" src="https://dummyimage.com/102x102" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900">Holden Caulfield</span>
              </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="py-8 px-4 lg:w-1/3">
                        <div class="h-full flex items-start">
                            <div class="w-12 flex-shrink-0 flex flex-col text-center leading-none">
                                <span class="text-gray-500 pb-2 mb-2 border-b-2 border-gray-200">Jul</span>
                                <span class="font-medium text-lg text-gray-800 title-font leading-none">18</span>
                            </div>
                            <div class="flex-grow pl-6">
                                <h2 class="tracking-widest text-xs title-font font-medium text-indigo-500 mb-1">CATEGORY</h2>
                                <h1 class="title-font text-xl font-medium text-gray-900 mb-3">Neptune</h1>
                                <p class="leading-relaxed mb-5">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                <a class="inline-flex items-center">
                                    <img alt="blog" src="https://dummyimage.com/101x101" class="w-8 h-8 rounded-full flex-shrink-0 object-cover object-center">
                                    <span class="flex-grow flex flex-col pl-3">
                <span class="title-font font-medium text-gray-900">Henry Letham</span>
              </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- component -->
        <div class="h-screen w-screen flex justify-center items-center bg-slate-900 ">
            <div class="bg-slate-800 text-white rounded-lg w-full mx-5 md:w-[40rem]  space-y-6 p-10">
                <!-- header -->
                <div class="flex space-x-4 items-center ">
                    <div class="w-12 h-12"
                    >
                        <img
                            alt="avatar"
                            src="https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                            class="rounded-full w-full h-full object-cover ">
                        <div>
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex space-x-2 items-center">
                            <h2 class="text-base"> John Doe</h2>
                            <svg class="h-4 w-4 text-blue-500" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <div class="  text-xs text-slate-400">posted an update</div>
                        </div>
                        <p class=" text-xs text-slate-400">10 Monthes Ago</p>
                    </div>

                </div>
                <!--content-->
                <div>
                    <p class="text-sm leading-6 text-slate-300">
                        Hypnosis at the parallel universe was the advice of alarm, commanded to a conscious ship.
                        Processors experiment with paralysis!
                    </p>
                </div>


                <!-- image grid-->


                <div class="grid grid-cols-6 col-span-2   gap-2  ">
                    <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
                        <img class="h-full w-full object-cover "
                             src="https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                             alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-3 max-h-[14rem]">
                        <img class="h-full w-full object-cover  "
                             src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1399&q=80"
                             alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <img class="h-full w-full object-cover "
                             src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                             alt="">
                    </div>
                    <div class=" overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <img class="h-full w-full object-cover "
                             src="https://images.unsplash.com/photo-1503602642458-232111445657?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                             alt="">
                    </div>
                    <div class="relative overflow-hidden rounded-xl col-span-2 max-h-[10rem]">
                        <div
                            class="text-white text-xl absolute inset-0  bg-slate-900/80 flex justify-center items-center">
                            + 23
                        </div>
                        <img class="h-full w-full object-cover "
                             src="https://images.unsplash.com/photo-1560393464-5c69a73c5770?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=765&q=80"
                             alt="">
                    </div>
                </div>

                <!--        comments-->

                <div class="flex justify-between pt-5">

                    <svg class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/>
                    </svg>

                    <div class="text-slate-400 text-sm"><p>23 Comments</p></div>

                </div>
            </div>


        </div>




        <div class="#">
            <div class="py-4">
                <h1 class="font-semibold text-xl text-blue-950 dark:text-gray-200 leading-tight">
                    Публикации
                </h1>
            </div>
            <!-- панировочные сухари -->
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-blue-950 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Новости</a>
                        </div>
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
            <div class="relative pt-2 lg:pt-2 min-h-screen">

                <div class="bg-cover w-full flex justify-center items-center"
                     style="background-image: url('#');">
                    <div class="w-full bg-white p-5  bg-opacity-40 backdrop-filter backdrop-blur-lg">
                        <div class="w-12/12 mx-auto rounded-2xl bg-white p-5 bg-opacity-40 backdrop-filter backdrop-blur-lg">

                            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2 mx-auto">

                                <article
                                    class="bg-white  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                    <a target="_self" href="/blog/slug"
                                       class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                    <div class="relative mb-4 rounded-2xl">
                                        <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                             src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                                        <div
                                            class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-red-700">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                            <span class="ml-1 text-sm text-slate-400">2</span>

                                        </div>

                                        <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                           href="/blog/slug" target="_self" rel="noopener noreferrer">
                                            Read article
                                            <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                        <div class="flex items-center">
                                            <div class="pr-3">
                                                <img class="h-12 w-12 rounded-full object-cover" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                     alt="">
                                            </div>
                                            <div class="flex flex-1">
                                                <div class="">
                                                    <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                    <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <div class="text-sm flex items-center text-gray-500 ">
                                                2 Days ago
                                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="font-medium text-xl leading-8">
                                        <a href="/blog/slug"
                                           class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                            Instant Help at Your Fingertips
                                        </a>
                                    </h3>
                                    <div>
                                    </div>
                                </article>

                                <article
                                    class="bg-white  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                    <a target="_self" href="/blog/slug"
                                       class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                    <div class="relative mb-4 rounded-2xl">
                                        <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                             src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                                        <div
                                            class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-red-700">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                            <span class="ml-1 text-sm text-slate-400">2</span>

                                        </div>

                                        <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                           href="/blog/slug" target="_self" rel="noopener noreferrer">
                                            Read article
                                            <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                        <div class="flex items-center">
                                            <div class="pr-3">
                                                <img class="h-12 w-12 rounded-full object-cover" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                     alt="">
                                            </div>
                                            <div class="flex flex-1">
                                                <div class="">
                                                    <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                    <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <div class="text-sm flex items-center text-gray-500 ">
                                                2 Days ago
                                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="font-medium text-xl leading-8">
                                        <a href="/blog/slug"
                                           class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                            Instant Help at Your Fingertips
                                        </a>
                                    </h3>
                                    <div>
                                    </div>
                                </article>


                                <article
                                    class="bg-white  p-6 mb-6 shadow transition duration-300 group transform hover:-translate-y-2 hover:shadow-2xl rounded-2xl cursor-pointer border">
                                    <a target="_self" href="/blog/slug"
                                       class="absolute opacity-0 top-0 right-0 left-0 bottom-0"></a>
                                    <div class="relative mb-4 rounded-2xl">
                                        <img class="max-h-80 rounded-2xl w-full object-cover transition-transform duration-300 transform group-hover:scale-105"
                                             src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="">
                                        <div
                                            class="absolute bottom-3 left-3 inline-flex items-center rounded-lg bg-white p-2 shadow-md">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                                                 stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-red-700">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                            </svg>
                                            <span class="ml-1 text-sm text-slate-400">2</span>

                                        </div>

                                        <a class="flex justify-center items-center bg-red-700 bg-opacity-80 z-10 absolute top-0 left-0 w-full h-full text-white rounded-2xl opacity-0 transition-all duration-300 transform group-hover:scale-105 text-xl group-hover:opacity-100"
                                           href="/blog/slug" target="_self" rel="noopener noreferrer">
                                            Read article
                                            <svg class="ml-2 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="flex justify-between items-center w-full pb-4 mb-auto">
                                        <div class="flex items-center">
                                            <div class="pr-3">
                                                <img class="h-12 w-12 rounded-full object-cover" src="https://images.pexels.com/photos/163097/twitter-social-media-communication-internet-network-163097.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                                     alt="">
                                            </div>
                                            <div class="flex flex-1">
                                                <div class="">
                                                    <p class="text-sm font-semibold ">Morris Muthigani</p>
                                                    <p class="text-sm text-gray-500">Published on 19/03/2024</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex justify-end">
                                            <div class="text-sm flex items-center text-gray-500 ">
                                                2 Days ago
                                                <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                                          d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="font-medium text-xl leading-8">
                                        <a href="/blog/slug"
                                           class="block relative group-hover:text-red-700 transition-colors duration-200 ">
                                            Instant Help at Your Fingertips
                                        </a>
                                    </h3>
                                    <div>
                                    </div>
                                </article>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>




        <section>
            <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-24 max-w-7xl">
                <div class="grid w-full grid-cols-1 gap-6 mx-auto lg:grid-cols-3">
                    <div class="p-6">
                        <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="https://via.placeholder.com/150" alt="blog">

                        <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">Short headline.</h1>
                        <p class="mx-auto text-base leading-relaxed text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                <div class="mt-4">
                            <a href="#" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="read more"> Read More » </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="https://via.placeholder.com/150" alt="blog">

                        <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">Short headline.</h1>
                        <p class="mx-auto text-base leading-relaxed text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                <div class="mt-4">
                            <a href="#" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="read more"> Read More » </a>
                        </div>
                    </div>
                    <div class="p-6">
                        <img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36 rounded-xl" src="https://via.placeholder.com/150" alt="blog">

                        <h1 class="mx-auto mb-8 text-2xl font-semibold leading-none tracking-tighter text-neutral-600 lg:text-3xl">Short headline.</h1>
                        <p class="mx-auto text-base leading-relaxed text-gray-500">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                <div class="mt-4">
                            <a href="#" class="inline-flex items-center mt-4 font-semibold text-blue-600 lg:mb-0 hover:text-neutral-600" title="read more"> Read More » </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-10 md:px-20">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
                    <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md">New
                    </div>
                    <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 min read
                    </div>
                </div>
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">Title</div>
                    <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                        egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
                </div>
            </div>


            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
                    <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 min read
                    </div>
                </div>
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">Title</div>
                    <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                        egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
                </div>
            </div>


            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
                    <div class="absolute top-0 right-0 bg-indigo-500 text-white font-bold px-2 py-1 m-2 rounded-md">New</div>
                    <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 min read
                    </div>
                </div>
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">Title</div>
                    <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                        egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
                    <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 min read
                    </div>
                </div>
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">Title</div>
                    <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                        egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
                </div>
            </div>


            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
                    <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 min read
                    </div>
                </div>
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">Title</div>
                    <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                        egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
                </div>
            </div>


            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="relative">
                    <img class="w-full h-48 object-cover" src="https://via.placeholder.com/600x360">
                    <div class="absolute bottom-0 right-0 bg-gray-800 text-white px-2 py-1 m-2 rounded-md text-xs">3 min read
                    </div>
                </div>
                <div class="p-4">
                    <div class="text-lg font-medium text-gray-800 mb-2">Title</div>
                    <p class="text-gray-500 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, mi sed
                        egestas tincidunt, libero dolor bibendum nisl, non aliquam quam massa id lacus.</p>
                </div>
            </div>









            <div class="hero min-h-screen relative mt-12">
            <a class="absolute m-4 mt-16 transform translate-x-4 translate-y-4 p-4 bg-white rounded-full sm:top-6 sm:left-6 md:top-8 md:left-8 lg:top-10 lg:left-10 p-2 sm:p-4" href="#" title="Логотип">
                <img src="{{ asset('images/logo.png') }}" class="w-16 h-16" />
            </a>
            <img src="images/glavnaya1.jpg" class="w-full h-auto" />
            <div class="hero-content text-white text-left absolute top-1/2 left-4 transform -translate-y-1/2 p-8 sm:p-12 md:p-16 lg:p-20">
                <div class="max-w-md m-4">
                    <p class="mb-5 text-sm sm:text-base md:text-lg lg:text-xl">
                        Приход храма<br />
                        равноапостольного
                    </p>
                    <h1 class="mb-5 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold">КНЯЗЯ ВЛАДИМИРА</h1>
                    <p class="mb-5 text-sm sm:text-base md:text-lg lg:text-xl">
                        д.Чижевщина Брестской епархии<br />
                        Белорусского Экзархата<br />
                        Московского Патриарха
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>

        <div class="collapse bg-base-200">
            <input type="checkbox" class="peer" />
            <div class="collapse-title bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content">
                Click me to show/hide content<div></div>
            </div>
            <div class="collapse-content bg-primary text-primary-content peer-checked:bg-secondary peer-checked:text-secondary-content">
                <p>hello</p>
            </div>
        </div>



        <div class="mt-4 mb-6 px-8">
            <div class="container mx-auto shadow-xl shadow-gray-300 mt-4 mb-6 px-8 py-8 flex justify-center rounded-xl bg-blue-100">
                <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                    <div class="my-2 grid gap-6 px-4">
                        <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Начало</h3>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="flex-1 mt-16 ">
                <div class="relative h-screen w-full">
                    <img src="images/glavnaya.jpg" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-4px">
                    <div class="absolute inset-0 bg-black bg-opacity-0"></div>
                    <div class="relative absolute top-16 left-16">
                        <a class="btn btn-ghost text-xl p-8" href="#" title="Логотип">
                            <img src="{{asset('images/logo.png')}}" class="w-20 h-20" />
                        </a>
                        <div class="">
                            <p class="text-lg text-white">Приход храма</p>
                            <p class="text-lg text-white">равноапостольного</p>
                            <h1 class="text-4xl text-white font-bold">КНЯЗЯ ВЛАДИМИРА</h1>
                            <p class="textarea-lg text-white">д.Чижевщина Брестской епархии</p>
                            <p class="textarea-lg text-white">Белорусского Экзархата</p>
                            <p class="textarea-lg text-white">Московского Патриарха</p>
                        </div>

                    </div>
                    <div class="menu text-2xl p-2">
                    <ul class="menu text-white">
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
        </div>





        <div>
            <div class="hero min-h-screen">
                <img src="images/glavnaya1.jpg" />
                <div class="hero-content text-neutral-content text-left">
                    <div class="max-w-md">
                        <p class="mb-5">
                            Приход храма
                            </br>равноапостольного
                        </p>
                        <h1 class="mb-5 text-5xl font-bold">КНЯЗЯ ВЛАДИМИРА</h1>
                        <p class="mb-5">
                            д.Чижевщина Брестской епархии
                            </br>Белорусского Экзархата
                            </br>Московского Патриарха
                        </p>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
        </div>

        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-36">
            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1650&q=80" />
            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                <div class="absolute w-full flex place-content-center">
                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Team work</p>
                </div>
                <div class="absolute w-full flex place-content-center mt-20">
                    <p class="font-sans text-center w-4/5 text-white mt-5">Collaborative effort of a group to achieve a common goal the most effective and efficient way!</p>
                </div>
                <button class="absolute left-1/4 bottom-4 bg-white text-black font-bold rounded-lg h-10 w-48">Contact Us</button>
            </div>
        </div>

        <div class="da relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50">
            <div class="absolute inset-0 bg-center dark:bg-black"></div>
            <div class="group relative m-0 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                    <img src="images/glavnaya1.jpg" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                </div>
                <div class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                    <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Azores</h1>
                    <h1 class="text-sm font-light text-gray-200 shadow-xl">A Little Paradise in Portugal</h1>
                </div>
            </div>
        </div>






        <div class="bg-[#f7d0b6] py-20">
            <div class="max-w-screen-lg mx-auto flex justify-between items-center">
                <div class="max-w-xl">
                    <h2 class="font-black text-sky-950 text-3xl mb-4">As the leading experts in this field, we're in over 90 countries</h2>
                    <p class="text-base text-sky-950">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <button class="text-sky-950 uppercase py-3 text-base px-10 border border-sky-950 hover:bg-sky-950 hover:bg-opacity-10">Get started</button>
            </div>
        </div>
        <div class="py-12 relative overflow-hidden bg-white">
            <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
                <div class="w-full flex flex-col items-end pr-16">
                    <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">Whether you need Assistance</h2>
                    <div class="h-full mt-auto overflow-hidden relative">
                        <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                    </div>
                </div>

                <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
                    <div class="relative z-20 pl-12">
                        <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                        <p class="text-white text-sm">
                            Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                        </p>
                        <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4 relative overflow-hidden bg-white">
            <div class="grid grid-cols-2 max-w-screen-lg mx-auto">


                <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-[#f7d0b6] before:top-0 before:right-0">
                    <div class="relative z-20 pl-12">
                        <h2 class="text-sky-950 font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                        <p class="text-sky-950 text-sm">
                            Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                        </p>
                        <button class="mt-8 text-sky-950 uppercase py-3 text-sm px-10 border border-sky-950 hover:bg-white hover:bg-opacity-10">Talk with expert</button>
                    </div>
                </div>
                <div class="w-full flex flex-col pl-16">
                    <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-left mb-12 mt-10">Whether you need Assistance</h2>
                    <div class="h-full mt-auto overflow-hidden relative">
                        <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="py-12 relative overflow-hidden bg-white">
            <div class="grid grid-cols-2 max-w-screen-lg mx-auto">
                <div class="w-full flex flex-col items-end pr-16">
                    <h2 class="text-[#64618C] font-bold text-2xl max-w-xs text-right mb-12 mt-10">Whether you need Assistance</h2>
                    <div class="h-full mt-auto overflow-hidden relative">
                        <img src="https://picsum.photos/800/600" class="h-full w-full object-contain" alt="">
                    </div>
                </div>

                <div class="py-20 bg-slate-100 relative before:absolute before:h-full before:w-screen before:bg-sky-950 before:top-0 before:left-0">
                    <div class="relative z-20 pl-12">
                        <h2 class="text-[#f7d0b6] font-black text-5xl leading-snug mb-10">Finpoint is here <br>to help you</h2>
                        <p class="text-white text-sm">
                            Purus in massa tempor nec. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Faucibus ornare suspendisse sed nisi lacus sed viverra. Diam in arcu cursus euismod quis viverra nibh cras pulvinar.
                        </p>
                        <button class="mt-8 text-white uppercase py-3 text-sm px-10 border border-white hover:bg-white hover:bg-opacity-10">Talk with expert</button>
                    </div>
                </div>
        <!--   <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg></button>

                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <div
            x-data="{ menu: false, desktopLang: false, mobileLang: false }"
            @click.outside="desktopLang = false"
            @resize.window="() => { menu = false; desktopLang = false; }"
        >
            <div class="relative flex justify-center">
                <div class="shadow-sm fixed top-0 z-20 w-full bg-white">
                    <div class="container mx-auto flex justify-between">
                        <div class="lg:xp-0 flex w-full flex-row items-center justify-between px-5 lg:w-auto">
                            <a class="py-[15px]" href="#">
                                <svg id="logo-52" width="170" height="41" viewBox="0 0 170 41" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M51.2775 29.3232H63.2295V25.7232H55.5255V12.1632H51.2775V29.3232Z" class="cneutral" fill="#2F234F"></path> <path d="M70.3106 26.9232C68.6066 26.9232 67.7186 25.4352 67.7186 23.2032C67.7186 20.9712 68.6066 19.4592 70.3106 19.4592C72.0146 19.4592 72.9266 20.9712 72.9266 23.2032C72.9266 25.4352 72.0146 26.9232 70.3106 26.9232ZM70.3346 29.7072C74.2946 29.7072 76.8866 26.8992 76.8866 23.2032C76.8866 19.5072 74.2946 16.6992 70.3346 16.6992C66.3986 16.6992 63.7586 19.5072 63.7586 23.2032C63.7586 26.8992 66.3986 29.7072 70.3346 29.7072Z" class="cneutral" fill="#2F234F"></path> <path d="M83.741 33.5712C85.565 33.5712 87.173 33.1632 88.253 32.2032C89.237 31.3152 89.885 29.9712 89.885 28.1232V17.0352H86.141V18.3552H86.093C85.373 17.3232 84.269 16.6752 82.637 16.6752C79.589 16.6752 77.477 19.2192 77.477 22.8192C77.477 26.5872 80.045 28.6512 82.805 28.6512C84.293 28.6512 85.229 28.0512 85.949 27.2352H86.045V28.4592C86.045 29.9472 85.349 30.8112 83.693 30.8112C82.397 30.8112 81.749 30.2592 81.533 29.6112H77.741C78.125 32.1792 80.357 33.5712 83.741 33.5712ZM83.717 25.7472C82.253 25.7472 81.293 24.5472 81.293 22.6992C81.293 20.8272 82.253 19.6272 83.717 19.6272C85.349 19.6272 86.213 21.0192 86.213 22.6752C86.213 24.4032 85.421 25.7472 83.717 25.7472Z" class="cneutral" fill="#2F234F"></path> <path d="M97.5834 26.9232C95.8794 26.9232 94.9914 25.4352 94.9914 23.2032C94.9914 20.9712 95.8794 19.4592 97.5834 19.4592C99.2874 19.4592 100.199 20.9712 100.199 23.2032C100.199 25.4352 99.2874 26.9232 97.5834 26.9232ZM97.6074 29.7072C101.567 29.7072 104.159 26.8992 104.159 23.2032C104.159 19.5072 101.567 16.6992 97.6074 16.6992C93.6714 16.6992 91.0314 19.5072 91.0314 23.2032C91.0314 26.8992 93.6714 29.7072 97.6074 29.7072Z" class="cneutral" fill="#2F234F"></path> <path d="M105.302 29.3232H109.214V17.0352H105.302V29.3232ZM105.302 15.3312H109.214V12.1632H105.302V15.3312Z" class="cneutral" fill="#2F234F"></path> <path d="M110.911 33.3792H114.823V28.0512H114.871C115.639 29.0832 116.767 29.7072 118.351 29.7072C121.567 29.7072 123.703 27.1632 123.703 23.1792C123.703 19.4832 121.711 16.6752 118.447 16.6752C116.767 16.6752 115.567 17.4192 114.727 18.5232H114.655V17.0352H110.911V33.3792ZM117.343 26.6832C115.663 26.6832 114.703 25.3152 114.703 23.3232C114.703 21.3312 115.567 19.8192 117.271 19.8192C118.951 19.8192 119.743 21.2112 119.743 23.3232C119.743 25.4112 118.831 26.6832 117.343 26.6832Z" class="cneutral" fill="#2F234F"></path> <path d="M130.072 29.7072C133.288 29.7072 135.664 28.3152 135.664 25.6272C135.664 22.4832 133.12 21.9312 130.96 21.5712C129.4 21.2832 128.008 21.1632 128.008 20.2992C128.008 19.5312 128.752 19.1712 129.712 19.1712C130.792 19.1712 131.536 19.5072 131.68 20.6112H135.28C135.088 18.1872 133.216 16.6752 129.736 16.6752C126.832 16.6752 124.432 18.0192 124.432 20.6112C124.432 23.4912 126.712 24.0672 128.848 24.4272C130.48 24.7152 131.968 24.8352 131.968 25.9392C131.968 26.7312 131.224 27.1632 130.048 27.1632C128.752 27.1632 127.936 26.5632 127.792 25.3392H124.096C124.216 28.0512 126.472 29.7072 130.072 29.7072Z" class="cneutral" fill="#2F234F"></path> <path d="M140.978 29.6832C142.682 29.6832 143.762 29.0112 144.65 27.8112H144.722V29.3232H148.466V17.0352H144.554V23.8992C144.554 25.3632 143.738 26.3712 142.394 26.3712C141.146 26.3712 140.546 25.6272 140.546 24.2832V17.0352H136.658V25.0992C136.658 27.8352 138.146 29.6832 140.978 29.6832Z" class="cneutral" fill="#2F234F"></path> <path d="M150.168 29.3232H154.08V22.4352C154.08 20.9712 154.8 19.9392 156.024 19.9392C157.2 19.9392 157.752 20.7072 157.752 22.0272V29.3232H161.664V22.4352C161.664 20.9712 162.36 19.9392 163.608 19.9392C164.784 19.9392 165.336 20.7072 165.336 22.0272V29.3232H169.248V21.3312C169.248 18.5712 167.856 16.6752 165.072 16.6752C163.488 16.6752 162.168 17.3472 161.208 18.8352H161.16C160.536 17.5152 159.312 16.6752 157.704 16.6752C155.928 16.6752 154.752 17.5152 153.984 18.7872H153.912V17.0352H150.168V29.3232Z" class="cneutral" fill="#2F234F"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1014 40.3232C31.1472 40.3232 40.1014 31.3689 40.1014 20.3232C40.1014 9.27754 31.1472 0.323242 20.1014 0.323242C9.05573 0.323242 0.10144 9.27754 0.10144 20.3232C0.10144 31.3689 9.05573 40.3232 20.1014 40.3232ZM23.1884 15.7758C24.8932 14.0709 24.8932 11.3068 23.1884 9.6019C21.4835 7.89702 18.7194 7.89702 17.0145 9.6019C15.3097 11.3068 15.3097 14.0709 17.0145 15.7758L20.1014 18.8627L23.1884 15.7758ZM24.6489 23.4102C26.3538 25.1151 29.1179 25.1151 30.8228 23.4102C32.5276 21.7053 32.5276 18.9412 30.8228 17.2363C29.1179 15.5315 26.3538 15.5315 24.6489 17.2363L21.562 20.3233L24.6489 23.4102ZM23.1884 31.0446C24.8932 29.3397 24.8932 26.5756 23.1884 24.8707L20.1014 21.7838L17.0145 24.8707C15.3097 26.5756 15.3097 29.3397 17.0145 31.0446C18.7194 32.7495 21.4835 32.7495 23.1884 31.0446ZM9.38007 23.4102C7.67523 21.7053 7.67523 18.9412 9.38007 17.2363C11.085 15.5315 13.8491 15.5315 15.554 17.2363L18.6409 20.3233L15.554 23.4102C13.8491 25.1151 11.085 25.1151 9.38007 23.4102Z" class="ccustom" fill="#7F57F1"></path> </svg>
                            </a>
                            <div class="flex space-x-8 lg:hidden">
                                <a href="#">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"></path>
                                        <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                    </svg>
                                </a>
                                <button @click="() => { menu = !menu; mobileLang = false}">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="48" d="M88 152h336M88 256h336M88 360h336"></path>
                                    </svg>
                                </button>
                            </div>
                            <div class="ml-[50px] hidden space-x-10 lg:block">
                                <a class="border-primary text-primary border-b-2 py-[25px] text-sm font-medium" href="#about">About</a><a class="false py-[29px] text-sm" href="#">Product</a>
                                <a class="false py-[29px] text-sm" href="#">Partners</a>
                                <a class="false py-[29px] text-sm" href="#">Advisory</a>
                                <a class="false py-[29px] text-sm" href="#">Download</a>
                                <a class="false py-[29px] text-sm" href="#">Contact Us</a>
                            </div>
                        </div>

                        <div class="hidden items-center lg:flex">
                            <a href="#">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="text-2xl" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="none" stroke-miterlimit="10" stroke-width="32" d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"></path>
                                    <path fill="none" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path>
                                </svg>
                            </a>

                            <button
                                class="ml-10 mr-5 flex items-center space-x-2"
                                @click="desktopLang = !desktopLang"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                                <span class="text-sm uppercase">EN</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="container fixed top-0 z-20 mx-auto mt-[80px] justify-end"
                    :class="desktopLang ? 'flex' : 'hidden'"
                >
                    <div class="flex flex-col overflow-hidden rounded-[6px] shadow">
                        <button class="hover:bg-zinc-100 flex items-center space-x-2 bg-white py-3 px-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>

                            <span class="text-sm uppercase">EN</span>
                        </button>

                        <button class="hover:bg-zinc-100 flex items-center space-x-2 bg-white py-3 px-5">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                            </svg>

                            <span class="text-sm uppercase">BM</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="shadow-sm lg:hidden fixed w-full z-10 bg-white top-0 mt-[74px] left-0" x-show="menu">
                <div class="flex flex-col lg:ml-10 lg:space-x-10 mt-[10px]">
                    <a class="text-sm" href="#"><div class="container mx-auto px-5 py-4 hover:bg-zinc-100">About</div></a>
                    <a class="text-sm" href="#"><div class="container mx-auto px-5 py-4 hover:bg-zinc-100">Product</div></a>
                    <a class="text-sm" href="#"><div class="container mx-auto px-5 py-4 hover:bg-zinc-100">Partners</div></a>
                    <a class="text-sm" href="#"><div class="container mx-auto px-5 py-4 hover:bg-zinc-100">Sponsor</div></a>
                    <a class="text-sm" href="#"><div class="container mx-auto px-5 py-4 hover:bg-zinc-100">Download</div></a>
                    <a class="text-sm" href="#"><div class="container mx-auto px-5 py-4 hover:bg-zinc-100">Contact Us</div></a>
                    <button
                        class="flex items-center justify-between container mx-auto px-5 py-4 hover:bg-zinc-100"
                        @click="mobileLang = !mobileLang"
                    >
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                            <span class="uppercase text-sm">En</span>
                        </div>
                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M184 112l144 144-144 144"></path>
                        </svg>
                    </button>
                    <div
                        class="relative container mx-auto"
                        x-show="mobileLang"
                    >
                        <button class="flex items-center py-3 px-10 space-x-2 bg-white hover:bg-zinc-100 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                            </svg>
                            <span class="uppercase text-sm">En</span>
                        </button>
                        <button class="flex items-center py-3 px-10 space-x-2 bg-white hover:bg-zinc-100 w-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.893 13.393l-1.135-1.135a2.252 2.252 0 01-.421-.585l-1.08-2.16a.414.414 0 00-.663-.107.827.827 0 01-.812.21l-1.273-.363a.89.89 0 00-.738 1.595l.587.39c.59.395.674 1.23.172 1.732l-.2.2c-.212.212-.33.498-.33.796v.41c0 .409-.11.809-.32 1.158l-1.315 2.191a2.11 2.11 0 01-1.81 1.025 1.055 1.055 0 01-1.055-1.055v-1.172c0-.92-.56-1.747-1.414-2.089l-.655-.261a2.25 2.25 0 01-1.383-2.46l.007-.042a2.25 2.25 0 01.29-.787l.09-.15a2.25 2.25 0 012.37-1.048l1.178.236a1.125 1.125 0 001.302-.795l.208-.73a1.125 1.125 0 00-.578-1.315l-.665-.332-.091.091a2.25 2.25 0 01-1.591.659h-.18c-.249 0-.487.1-.662.274a.931.931 0 01-1.458-1.137l1.411-2.353a2.25 2.25 0 00.286-.76m11.928 9.869A9 9 0 008.965 3.525m11.928 9.868A9 9 0 118.965 3.525" />
                            </svg>
                            <span class="uppercase text-sm">JP</span>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- component -->
        <!--
          Welcome to Tailwind Play, the official Tailwind CSS playground!

          Everything here works just like it does when you're running Tailwind locally
          with a real build pipeline. You can customize your config file, use features
          like `@apply`, or even add third-party plugins.

          Feel free to play with this example if you're just learning, or trash it and
          start from scratch if you know enough to be dangerous. Have fun!
        -->



                <section class="O_Khrame">
                    <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        О Храме
                    </h1>
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


                    <section class="text-gray-600 body-font">
                        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                                <img class="object-cover object-center rounded" alt="hero" src="{{asset('images/duhovenstvo.jpg')}}">
                            </div>
                            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                                <p class="mb-8 leading-relaxed">Добро пожаловать на страницу нашего храма! Сытин, настоятель Храма Святого Равноапостольного
                                    Князя Владимира в деревне Чижевщина, является не только духовным лидером,
                                    но и активным участником формирования атмосферы храма. Его усердие и преданность делу создания благоприятной обстановки в
                                    храме сделали его более уютным и теплым для верующих. Благодаря усилиям иерея Александра, в храме были проведены различные
                                    работы по улучшению его внутреннего убранства и комфорта. Были осуществлены работы по ремонту, украшению и обновлению
                                    интерьера храма. Его служение способствует укреплению духовных связей и созданию атмосферы взаимопонимания и взаимопомощи.
                                </p>
                            </div>
                        </div>
                    </section>


                    <div class="flex pt-12 px-6 md:px-20  items-center justify-center bg-hero md:h-screen overflow-hidden">
                        <div class="flex flex-col  gap-6 md:flex-row items-center max-w-8xl">
                            <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                                <img src="{{asset('images/duhovenstvo.jpg')}}">
                            </div>
                            <div class="w-full md:w-1/2 lg:pr-32">
                                <h3
                                    class="mt-6 md:mt-10 text-md lg:text-xl text-center md:text-left text-gray-700 font-light tracking-wider leading-relaxed timeline-box bg-blue-100">
                                    Добро пожаловать на страницу нашего храма! Сытин, настоятель Храма Святого Равноапостольного Князя Владимира в деревне Чижевщина, является не только духовным лидером,
                                    но и активным участником формирования атмосферы храма. Его усердие и преданность делу создания благоприятной обстановки в
                                    храме сделали его более уютным и теплым для верующих. Благодаря усилиям иерея Александра, в храме были проведены различные
                                    работы по улучшению его внутреннего убранства и комфорта. Были осуществлены работы по ремонту, украшению и обновлению
                                    интерьера храма. Его служение способствует укреплению духовных связей и созданию атмосферы взаимопонимания и взаимопомощи.

                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                        </div>
                    </div>


                    <div class="flex pt-12 px-6 md:px-20  items-center justify-center bg-hero md:h-screen overflow-hidden">
                        <div class="flex flex-col  gap-6 md:flex-row items-center max-w-8xl">

                            <div class="w-full md:w-1/2 lg:pr-32">
                                <h3
                                    class="mt-6 md:mt-10 text-md lg:text-xl text-center md:text-left text-gray-700 font-light tracking-wider leading-relaxed timeline-box bg-blue-100">
                                    Мы рады приветствовать вас и предложить подробную информацию о нашем храме,
                                    службах и мероприятиях. Наш храм – это место духовного роста, умиротворения и вдохновения для всех, кто ищет пути
                                    к божественному. Мы предлагаем разнообразные программы для детей, молодежи и взрослых, направленные на укрепление
                                    веры и развитие духовности. Здесь вы найдете расписание служб, информацию о религиозных праздниках и особенностях
                                    нашего прихода. Мы всегда рады видеть вас у нас на приходе и готовы поддержать вас на вашем духовном пути.
                                    Пусть ваш визит принесет вам мир, радость и благословение. Добро пожаловать и благослови вас Бог!

                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                        </svg>
                                    </div>
                                </h3>
                            </div>
                            <div class="w-full md:w-1/2 flex justify-center md:justify-end">
                                <img src="{{asset('images/khram4.jpg')}}">
                            </div>
                        </div>
                    </div>

                </section>


                <div class="relative font-inter antialiased">

                    <main class="relative min-h-screen flex flex-col justify-center bg-white overflow-hidden">
                        <div class="w-full max-w-7xl mx-auto px-4 md:px-6 py-24">

                            <!-- Image accordion component -->
                            <div class="group flex max-md:flex-col justify-center gap-2">
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Innovate relentlessly. Stagnation is the enemy of progress."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/1.jpg" width="960" height="480" alt="Image 01">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/2.jpg" width="960" height="480" alt="Image 02">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Dream big, start small, but most importantly, start."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/3.jpg" width="960" height="480" alt="Image 03">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/4.jpg" width="960" height="480" alt="Image 02">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/5.jpg" width="960" height="480" alt="Image 02">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/6.jpg" width="960" height="480" alt="Image 02">
                                </article>
                            </div>
                            <!-- End: Image accordion component -->
                        </div>

                    </main>

                    <!--Галерея-->

                    <section class="#">
                        <div class="py-4">
                            <h1 class="font-semibold text-xl text-blue-950 dark:text-gray-200 leading-tight">
                                Фотографии
                            </h1>


                            <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
                                <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">Все фоторгафии</button>
                                <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Фотографии Храма князя Влвдимира</button>
                                <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Фотографии часовни Целетельницы</button>
                            </div>
                            <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                                    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                            <img src="/images/1.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out"/>
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                                            <img src="/images/2.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                                <img src="/images/3.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                            </a>
                                            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                                <img src="/images/4.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                            <img src="/images/5.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                                    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                            <img src="/images/6.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                                            <img src="/images/7.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                                <img src="/images/8.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                            </a>
                                            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                                <img src="/images/9.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                            <img src="/images/915.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                                    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                            <img src="/images/6.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                                            <img src="/images/7.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                                            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                                <img src="/images/8.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                            </a>
                                            <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                                <img src="/images/9.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                                <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                                        <a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                                            <img src="/images/915.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                            <h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Foto</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </section>




                    <div role="tablist" class="tabs tabs-lifted">
                        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Tab 1" />
                        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                            Tab content 1
                        </div>

                        <input
                            type="radio"
                            name="my_tabs_2"
                            role="tab"
                            class="tab"
                            aria-label="Tab 2"
                            checked="checked" />
                        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                            Tab content 2
                        </div>

                        <input type="radio" name="my_tabs_2" role="tab" class="tab" aria-label="Tab 3" />
                        <div role="tabpanel" class="tab-content bg-base-100 border-base-300 rounded-box p-6">
                            Tab content 3
                        </div>
                    </div>


                    <div class="#">
                        <div class="py-4">
                            <h1 class="font-semibold text-xl text-blue-950 dark:text-gray-200 leading-tight">
                                Публикации
                            </h1>
                        </div>
                        <!-- панировочные сухари -->
                        <nav class="flex" aria-label="Breadcrumb">
                            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                                <li class="inline-flex items-center">
                                    <a href="#" class="inline-flex items-center text-sm font-medium text-blue-950 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
                                        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Новости</a>
                                    </div>
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


                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/4.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology
                                acquisitions of 2021 so far, in reverse chronological order
                            </p>
                        </div>
                    </a>
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="images/4.jpg" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </a>








                    <!-- component -->
                    <div class="da relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50">
                        <div class="absolute inset-0 bg-center dark:bg-black"></div>
                        <div class="group relative m-0 flex h-72 w-96 rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto sm:max-w-lg">
                            <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                            </div>
                            <div class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                                <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Azores</h1>
                                <h1 class="text-sm font-light text-gray-200 shadow-xl">A Little Paradise in Portugal</h1>
                            </div>
                        </div>
                    </div>

                    <div class="da relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50">
                        <div class="absolute inset-0 bg-center dark:bg-black"></div>
                        <div class="group relative m-0 flex h-72 w-full max-w-lg rounded-xl shadow-xl ring-gray-900/5 sm:mx-auto">
                            <div class="z-10 h-full w-full overflow-hidden rounded-xl border border-gray-200 opacity-80 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
                                <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=3149&q=80" class="animate-fade-in block h-full w-full scale-100 transform object-cover object-center opacity-100 transition duration-300 group-hover:scale-110" alt="" />
                            </div>
                            <div class="absolute bottom-0 z-20 m-0 pb-4 ps-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
                                <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Azores</h1>
                                <h1 class="text-sm font-light text-gray-200 shadow-xl">A Little Paradise in Portugal</h1>
                            </div>
                        </div>
                    </div>



                    <div class="max-w-7xl mx-auto my-8 px-2">

                        <div class="flex justify-center text-2xl md:text-3xl font-bold">
                            Related Tools
                        </div>

                        <ul class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 p-2 xl:p-5">

                            <li class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-teal-400">

                                <a class="relative" href="/tool/writey-ai">
                                    <img class="rounded relative w-full object-cover aspect-video"
                                         src="https://images.unsplash.com/photo-1529236183275-4fdcf2bc987e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxfHxrZXlib2FyZHxlbnwwfDB8fHwxNjk5NTI1MDAzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Writey A.I" loading="lazy">
                                </a>


                                <div class="flex flex-col justify-beetween gap-3 px-4 py-2">
                                    <a href="/tool/writey-ai"
                                       class="flex justify-center items-center text-xl font-semibold text-teal-700 hover:text-teal-800 two-lines text-ellipsis">
                                        <span>Writey A.I</span>
                                        <small class="font-medium text-sm">- Most advanced language A.I</small>
                                    </a>

                                    <p class="text-gray-600 two-lines">
                                        Writey A.I is an AI tool that generates original, researched blog posts in minutes, provides content
                                        optimization advice, and works with a plagiarism-free rule.
                                    </p>

                                    <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                                        <li title="Pricing type"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span>Freemium</span>
                                        </li>

                                    </ul>

                                    <ul class="flex flex-wrap text-sm gap-2 my-1">
                                        <li class="flex items-center gap-2">
                                            <span>Content Generation,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Marketing,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>SEO,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Writing</span>
                                        </li>
                                    </ul>
                                </div>

                            </li>

                            <li class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-teal-400">

                                <a class="relative" href="/tool/writemeai">
                                    <img class="rounded relative w-full object-cover aspect-video"
                                         src="https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxrZXlib2FyZHxlbnwwfDB8fHwxNjk5NTI1MDAzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="WriteMe.ai" loading="lazy">
                                </a>


                                <div class="flex flex-col justify-beetween gap-3 px-4 py-2">
                                    <a href="/tool/writemeai"
                                       class="flex justify-center items-center text-xl font-semibold text-teal-700 hover:text-teal-800 two-lines text-ellipsis">
                                        <span>WriteMe.ai</span>

                                        <small class="font-medium text-sm">- AI Writer - Content Writing Assistant &amp; Creator</small>
                                    </a>

                                    <p class="text-gray-600 two-lines">
                                        WriteMe.ai is your #1 AI-powered content writing assistant that crafts high-quality content at a
                                        fraction of the cost. This advanced solution eliminates the need for manual writing and allows users
                                        to effortlessly generate content in a few clicks.
                                    </p>

                                    <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                                        <li title="Pricing type"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span>Freemium</span>
                                        </li>

                                    </ul>

                                    <ul class="flex flex-wrap text-sm gap-2 my-1">
                                        <li class="flex items-center gap-2">
                                            <span>Chatbot,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Content Generation,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>General Writing,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Social Media Assistant,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Writing</span>
                                        </li>
                                    </ul>
                                </div>

                            </li>

                            <li class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-teal-400">

                                <a class="relative" href="/tool/publer">
                                    <img class="rounded relative w-full object-cover aspect-video"
                                         src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxrZXlib2FyZHxlbnwwfDB8fHwxNjk5NTI1MDAzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Publer" loading="lazy">
                                </a>


                                <div class="flex flex-col justify-beetween gap-3 px-4 py-2">
                                    <a href="/tool/publer"
                                       class="flex justify-center items-center text-xl font-semibold text-teal-700 hover:text-teal-800 two-lines text-ellipsis">
                                        <span>Publer</span>

                                        <small class="font-medium text-sm">- Your Social Media Superhero</small>
                                    </a>

                                    <p class="text-gray-600 two-lines">
                                        Publer is a robust social media management platform offering a range of features including post
                                        scheduling, collaboration tools, analytics, and AI assistance to supercharge your social media
                                        strategy across multiple platforms.
                                    </p>

                                    <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                                        <li title="Pricing type"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span>Freemium</span>
                                        </li>

                                        <li title="Support for API"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M17 9V12C17 14.7614 14.7614 17 12 17M7 9V12C7 14.7614 9.23858 17 12 17M12 17V21M8 3V6M16 3V6M5 9H19"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            <span>API</span>
                                        </li>
                                    </ul>

                                    <ul class="flex flex-wrap text-sm gap-2 my-1">
                                        <li class="flex items-center gap-2">
                                            <span>Marketing,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Productivity,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Social Media</span>
                                        </li>
                                    </ul>
                                </div>

                            </li>

                            <li class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-teal-400">

                                <a class="relative" href="/tool/anyword">
                                    <img class="rounded relative w-full object-cover aspect-video"
                                         src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw3fHxrZXlib2FyZHxlbnwwfDB8fHwxNjk5NTI1MDAzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="Anyword" loading="lazy">
                                </a>


                                <div class="flex flex-col justify-beetween gap-3 px-4 py-2">
                                    <a href="/tool/anyword"
                                       class="flex justify-center items-center text-xl font-semibold text-teal-700 hover:text-teal-800 two-lines text-ellipsis">
                                        <span>Anyword</span>

                                        <small class="font-medium text-sm">- Advanced AI Writing Built for Marketing Results</small>
                                    </a>

                                    <p class="text-gray-600 two-lines">
                                        Anyword is an AI-powered platform trusted by marketing teams across the globe to generate, score,
                                        and rank content based on predicted performance. With features like Custom Scoring AI models, Brand
                                        Messaging Management, and a Performance Boost Chrome Extension, Anyword provides highly personalized
                                        and effective content for every channel.
                                    </p>

                                    <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                                        <li title="Pricing type"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span>Free Trial</span>
                                        </li>

                                        <li title="Support for API"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M17 9V12C17 14.7614 14.7614 17 12 17M7 9V12C7 14.7614 9.23858 17 12 17M12 17V21M8 3V6M16 3V6M5 9H19"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            <span>API</span>
                                        </li>
                                    </ul>

                                    <ul class="flex flex-wrap text-sm gap-2 my-1">
                                        <li class="flex items-center gap-2">
                                            <span>Copywriting,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Marketing</span>
                                        </li>
                                    </ul>
                                </div>

                            </li>

                            <li class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-teal-400">

                                <a class="relative" href="/tool/blogseo-ai">
                                    <img class="rounded relative w-full object-cover aspect-video"
                                         src="https://images.unsplash.com/photo-1555532538-dcdbd01d373d?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxrZXlib2FyZHxlbnwwfDB8fHwxNjk5NTI1MDAzfDA&ixlib=rb-4.0.3&q=80&w=1080" alt="BlogSEO AI" loading="lazy">
                                </a>


                                <div class="flex flex-col justify-beetween gap-3 px-4 py-2">
                                    <a href="/tool/blogseo-ai"
                                       class="flex justify-center items-center text-xl font-semibold text-teal-700 hover:text-teal-800 two-lines text-ellipsis">
                                        <span>BlogSEO AI</span>

                                        <small class="font-medium text-sm">- AI Writer for SEO&zwj; That Follows Best Practices</small>
                                    </a>

                                    <p class="text-gray-600 two-lines">
                                        BlogSEO AI revolutionizes SEO writing. Stay at the top of your SEO game with this automated writing
                                        tool that generates high-performing blog content. It also offers keyword research, internal linking
                                        strategy, schema generation, and more.
                                    </p>

                                    <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                                        <li title="Pricing type"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span>Free Trial</span>
                                        </li>

                                        <li title="Support for API"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M17 9V12C17 14.7614 14.7614 17 12 17M7 9V12C7 14.7614 9.23858 17 12 17M12 17V21M8 3V6M16 3V6M5 9H19"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            <span>API</span>
                                        </li>
                                    </ul>

                                    <ul class="flex flex-wrap text-sm gap-2 my-1">
                                        <li class="flex items-center gap-2">
                                            <span>Marketing,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>SEO,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Content Generation</span>
                                        </li>
                                    </ul>
                                </div>

                            </li>

                            <li class="relative bg-white flex flex-col justify-between border rounded shadow-md hover:shadow-teal-400">

                                <a class="relative" href="/tool/typewise">
                                    <img class="rounded relative w-full object-cover aspect-video"
                                         src="https://images.unsplash.com/photo-1574192324001-ee41e18ed679?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNXx8a2V5Ym9hcmR8ZW58MHwwfHx8MTY5OTUyNTAwM3ww&ixlib=rb-4.0.3&q=80&w=1080" alt="Typewise" loading="lazy">
                                </a>

                                <div class="flex flex-col justify-beetween gap-3 px-4 py-2">
                                    <a href="/tool/typewise"
                                       class="flex justify-center items-center text-xl font-semibold text-teal-700 hover:text-teal-800 two-lines text-ellipsis">
                                        <span>Typewise</span>

                                        <small class="font-medium text-sm">- AI Communication Assistant</small>
                                    </a>

                                    <p class="text-gray-600 two-lines">
                                        Typewise is an AI Communication Assistant that helps customer service and sales teams communicate
                                        faster and more effectively.
                                    </p>

                                    <ul class="flex flex-wrap items-center justify-start text-sm gap-2">
                                        <li title="Pricing type"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M13 3.5C13 2.94772 12.5523 2.5 12 2.5C11.4477 2.5 11 2.94772 11 3.5V4.0592C9.82995 4.19942 8.75336 4.58509 7.89614 5.1772C6.79552 5.93745 6 7.09027 6 8.5C6 9.77399 6.49167 10.9571 7.5778 11.7926C8.43438 12.4515 9.58764 12.8385 11 12.959V17.9219C10.2161 17.7963 9.54046 17.5279 9.03281 17.1772C8.32378 16.6874 8 16.0903 8 15.5C8 14.9477 7.55228 14.5 7 14.5C6.44772 14.5 6 14.9477 6 15.5C6 16.9097 6.79552 18.0626 7.89614 18.8228C8.75336 19.4149 9.82995 19.8006 11 19.9408V20.5C11 21.0523 11.4477 21.5 12 21.5C12.5523 21.5 13 21.0523 13 20.5V19.9435C14.1622 19.8101 15.2376 19.4425 16.0974 18.8585C17.2122 18.1013 18 16.9436 18 15.5C18 14.1934 17.5144 13.0022 16.4158 12.1712C15.557 11.5216 14.4039 11.1534 13 11.039V6.07813C13.7839 6.20366 14.4596 6.47214 14.9672 6.82279C15.6762 7.31255 16 7.90973 16 8.5C16 9.05228 16.4477 9.5 17 9.5C17.5523 9.5 18 9.05228 18 8.5C18 7.09027 17.2045 5.93745 16.1039 5.17721C15.2467 4.58508 14.1701 4.19941 13 4.0592V3.5ZM11 6.07814C10.2161 6.20367 9.54046 6.47215 9.03281 6.8228C8.32378 7.31255 8 7.90973 8 8.5C8 9.22601 8.25834 9.79286 8.79722 10.2074C9.24297 10.5503 9.94692 10.8384 11 10.9502V6.07814ZM13 13.047V17.9263C13.7911 17.8064 14.4682 17.5474 14.9737 17.204C15.6685 16.7321 16 16.1398 16 15.5C16 14.7232 15.7356 14.1644 15.2093 13.7663C14.7658 13.4309 14.0616 13.1537 13 13.047Z"
                                                      fill="currentColor"></path>
                                            </svg>
                                            <span>Contact for Pricing</span>
                                        </li>

                                        <li title="Support for API"
                                            class="flex items-center cursor-pointer gap-0.5 bg-gray-100 text-black px-2 py-0.5 rounded-full">
                                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M17 9V12C17 14.7614 14.7614 17 12 17M7 9V12C7 14.7614 9.23858 17 12 17M12 17V21M8 3V6M16 3V6M5 9H19"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                </path>
                                            </svg>
                                            <span>API</span>
                                        </li>
                                    </ul>

                                    <ul class="flex flex-wrap text-sm gap-2 my-1">
                                        <li class="flex items-center gap-2">
                                            <span>Business,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Communication,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Customer Support,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Email,</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <span>Sales</span>
                                        </li>
                                    </ul>
                                </div>

                            </li>

                        </ul>

                    </div>

                    <style>
                        .tab-button.active {
                            background-color: #fff;
                            border-color: #4299e1;
                            color: #4299e1;
                        }
                    </style>

                    <script>
                        function showTab(tabId) {
                            // Hide all tab content
                            const tabContents = document.querySelectorAll('.tab-content');
                            tabContents.forEach((content) => {
                                content.classList.add('hidden');
                            });

                            // Show the selected tab content
                            const selectedTab = document.getElementById(tabId);
                            if (selectedTab) {
                                selectedTab.classList.remove('hidden');
                            }

                            // Remove the 'active' class from all tab buttons
                            const tabButtons = document.querySelectorAll('.tab-button');
                            tabButtons.forEach((button) => {
                                button.classList.remove('active');
                            });

                            // Add the 'active' class to the clicked tab button
                            const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
                            if (clickedButton) {
                                clickedButton.classList.add('active');
                            }
                        }

                        // Initialize the first tab
                        showTab('tab1');
                    </script>

                    <script src="//unpkg.com/alpinejs"></script>
                    <div x-data="{
            openTab: 1,
            activeClasses: 'border-l border-t border-r rounded-t text-blue-700',
            inactiveClasses: 'text-blue-500 hover:text-blue-700'
        }" class="p-6">
                        <ul class="flex border-b">
                            <li @click="openTab = 1" :class="{ '-mb-px': openTab === 1 }" class="-mb-px mr-1">
                                <a href="#" :class="openTab === 1 ? activeClasses : inactiveClasses"
                                   class="bg-white inline-block py-2 px-4 font-semibold">
                                    Active
                                </a>
                            </li>
                            <li @click="openTab = 2" :class="{ '-mb-px': openTab === 2 }" class="mr-1">
                                <!-- Set active class by using :class provided by Alpine -->
                                <a href="#" :class="openTab === 2 ? activeClasses : inactiveClasses"
                                   class="bg-white inline-block py-2 px-4 font-semibold">
                                    Tab
                                </a>
                            </li>
                            <li @click="openTab = 3" :class="{ '-mb-px': openTab === 3 }" class="mr-1">
                                <a href="#" :class="openTab === 3 ? activeClasses : inactiveClasses"
                                   class="bg-white inline-block py-2 px-4 font-semibold">
                                    Tab
                                </a>
                            </li>
                        </ul>
                        <div class="w-full">
                            <div x-show="openTab === 1">Tab #1</div>
                            <div x-show="openTab === 2">Tab #2</div>
                            <div x-show="openTab === 3">Tab #3</div>
                        </div>
                    </div>




                    <div class="w-full mt-20 max-w-xl mx-auto">
                        <!-- Tab Buttons -->
                        <div class="bg-blue-500 p-2 rounded-t-lg">
                            <div class="flex justify-center space-x-4">
                                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab1')">Tab 1</button>
                                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab2')">Tab 2</button>
                                <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab3')">Tab 3</button>
                            </div>
                        </div>

                        <!-- Tab Content -->
                        <div id="tab1" class="p-4 tab-content bg-white shadow-md rounded-lg">
                            <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 1 Content</h2>
                            <p>
                                Vestibulum condimentum imperdiet velit nec ornare. Nullam lobortis urna posuere quam porta consequat. Donec
                                commodo diam lectus, sit amet tempor dolor scelerisque eget. Vestibulum at lectus dui. Maecenas consectetur tempor
                                ipsum non porttitor. Cras accumsan mattis aliquam. Fusce eleifend maximus elit facilisis condimentum. Mauris non
                                risus sed ligula convallis fermentum.
                                <br>
                                Quisque eu purus nunc. Ut eget ligula ac lorem laoreet scelerisque in ut
                                nulla. Quisque volutpat elit eget tellus pharetra, vel sollicitudin velit scelerisque. Vivamus ac libero eu nunc
                                congue malesuada eu vitae est.
                            </p>
                        </div>
                        <div id="tab2" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
                            <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 2 Content</h2>
                            <p>Phasellus eget euismod libero, nec ullamcorper justo. Phasellus eget euismod libero, nec ullamcorper justo.
                                Phasellus eget euismod libero, nec ullamcorper justo. Etiam eget augue in ante gravida facilisis.</p>
                        </div>
                        <div id="tab3" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
                            <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 3 Content</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Sed ut perspiciatis
                                unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                        </div>

                    </div>

                    <style>
                        .tab-button.active {
                            background-color: #fff;
                            border-color: #4299e1;
                            color: #4299e1;
                        }
                    </style>

                    <script>
                        function showTab(tabId) {
                            // Hide all tab content
                            const tabContents = document.querySelectorAll('.tab-content');
                            tabContents.forEach((content) => {
                                content.classList.add('hidden');
                            });

                            // Show the selected tab content
                            const selectedTab = document.getElementById(tabId);
                            if (selectedTab) {
                                selectedTab.classList.remove('hidden');
                            }

                            // Remove the 'active' class from all tab buttons
                            const tabButtons = document.querySelectorAll('.tab-button');
                            tabButtons.forEach((button) => {
                                button.classList.remove('active');
                            });

                            // Add the 'active' class to the clicked tab button
                            const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
                            if (clickedButton) {
                                clickedButton.classList.add('active');
                            }
                        }

                        // Initialize the first tab
                        showTab('tab1');
                    </script>



                    <main class="relative min-h-screen flex flex-col justify-center bg-white overflow-hidden">
                        <div class="w-full max-w-7xl mx-auto px-4 md:px-6 py-24">

                            <!-- Image accordion component -->
                            <div class="group flex max-md:flex-col justify-center gap-2">
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Innovate relentlessly. Stagnation is the enemy of progress."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/1.jpg" width="960" height="480" alt="Image 01">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/2.jpg" width="960" height="480" alt="Image 02">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Dream big, start small, but most importantly, start."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/3.jpg" width="960" height="480" alt="Image 03">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/4.jpg" width="960" height="480" alt="Image 02">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/5.jpg" width="960" height="480" alt="Image 02">
                                </article>
                                <article class="group/article relative w-full rounded-xl overflow-hidden md:group-hover:[&:not(:hover)]:w-[20%] md:group-focus-within:[&:not(:focus-within):not(:hover)]:w-[20%] transition-all duration-300 ease-[cubic-bezier(.5,.85,.25,1.15)] before:absolute before:inset-x-0 before:bottom-0 before:h-1/3 before:bg-gradient-to-t before:from-black/50 before:transition-opacity md:before:opacity-0 md:hover:before:opacity-100 focus-within:before:opacity-100 after:opacity-0 md:group-hover:[&:not(:hover)]:after:opacity-100 md:group-focus-within:[&:not(:focus-within):not(:hover)]:after:opacity-100 after:absolute after:inset-0 after:bg-white/30 after:backdrop-blur after:transition-all focus-within:ring focus-within:ring-indigo-300">
                                    <a class="absolute inset-0 text-white z-10" href="#0">
                                        <span class="absolute inset-x-0 bottom-0 text-lg font-medium p-6 md:px-12 md:py-8 md:whitespace-nowrap md:truncate md:opacity-0 group-hover/article:opacity-100 group-focus-within/article:opacity-100 md:translate-y-2 group-hover/article:translate-y-0 group-focus-within/article:translate-y-0 transition duration-200 ease-[cubic-bezier(.5,.85,.25,1.8)] group-hover/article:delay-300 group-focus-within/article:delay-300">"Embrace failure as a stepping stone to success."</span>
                                    </a>
                                    <img class="object-cover h-72 md:h-[480px] md:w-auto" src="images/6.jpg" width="960" height="480" alt="Image 02">
                                </article>
                            </div>
                            <!-- End: Image accordion component -->
                        </div>

                    </main>



</section>
    </x-slot>

</x-app-layout>
