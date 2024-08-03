<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-12">
            <div class="mt-4">
                <div class="text-3xl"><span class="text-red-700 font-medium">П</span>одать записку</div>
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
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Прихожанам</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Подать записку</span>
                        </div>
                    </li>
                </ol>
            </nav>

        <section class="mt-40 container px-5 mx-auto">
            <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400 mt-8">
                <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="#" title="Логотип">
                    <img src="{{asset('images/logo.png')}}" class="w-20 h-20"/>
                </a>
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-white">
                        <p class="mb-2 leading-relaxed text-2xl text-center">Подай записку сейчас</p>
                        <p class="mb-2 leading-relaxed text-xl text-justify">
                            Мы рады предложить вам возможность подать записку онлайн. Просто заполните форму, указав ваше имя и текст записки,
                            и нажмите "Отправить". Ваши пожелания и молитвы будут приняты с благодарностью.
                        </p>
                        <!-- <div class="flex justify-center py-8">
                            <button class="inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded hover:bg-blue-950 transition duration-700 ease-in-out">Выбрать требу</button>
                            <button class="ml-4 inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-blue-950 text-white font-medium rounded hover:bg-orange-400 transition duration-700 ease-in-out">Пожертвовать</button>
                        </div>
                        -->
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                        <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/note.jpg')}}">
                    </div>
                </div>
            </div>
        </section>

        <section class="text-blue-950  space-y-4">
            <div class="container py-24 mx-auto bg-blue-100 mt-4 mb-6 px-8 shadow-xl shadow-gray-300 flex justify-center rounded-xl">
                <p>
                    Подать записку онлайн – это современный и удобный способ участия в духовной жизни нашего храма, доступный в любое время
                    и из любого места. Через наш онлайн-сервис вы можете заказать различные церковные службы и молебны, такие как обедня,
                    молебен, панихида, сорокоуст на полгода и год, а также акафисты. В нашем храме проводятся акафисты святому равноапостольному
                    князю Владимиру, святому благоверному великому князю Александру Невскому, перед иконами Божией Матери «Целительница»,
                    «Всецарица», «Неупиваемая Чаша», и святителю Николаю Чудотворцу.
                    Подача записок онлайн имеет множество преимуществ. Во-первых, это невероятно удобно – вы можете сделать это, не покидая дома,
                    в любое удобное для вас время. Ваши молитвенные просьбы сразу же поступят к священнослужителям, которые включат их в ближайшие
                    богослужения. Во-вторых, это особенно важно в нынешние времена, когда здоровье и безопасность стоят на первом месте. Вы сможете
                    избежать посещения многолюдных мест и при этом быть уверены, что ваши молитвы будут услышаны. В-третьих, ваши пожертвования,
                    сделанные при подаче записок онлайн, помогут нашему храму продолжать свою работу и проводить необходимые реставрационные и р
                    емонтные работы.
                    Мы благодарны вам за поддержку и рады предложить возможность подать записку онлайн, делая участие в жизни прихода доступным для всех.
                </p>
            </div>
        </section>


            <div class="grid grid-cols-2 gap-4 place-items-stretch m-8 px-5">
            <form class="relative max-w-sm">
                <!--<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>-->
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500
                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option>Выбрать требу</option>
                    <option>Обедня</option>
                    <option>Молебен</option>
                    <option>Панихида</option>
                    <option>Сорокоуст 40 дней</option>
                    <option>Сорокоуст пол года</option>
                    <option>Сорокоуст на год</option>
                    <option>Акафист святому равноапостольному князю Владимиру</option>
                    <option>Акафист святому благоверному великому князю Александру Невскому</option>
                    <option>Аквфист перед иконой Божией Матери «Целительница»</option>
                    <option>Акафист святителю Николаю Чудотворцу</option>
                    <option>Акафист перед иконой Божией Матери «Всецарица»</option>
                    <option>Акафист перед иконой Божией Матери «Неупиваемая Чаша»</option>
                </select>
            </form>

                <input type="checkbox" class="toggle toggle-xs" checked="checked" />
                <input type="checkbox" class="toggle toggle-info" checked="checked" />


            <form class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0
                        18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                <input id="datepicker-autohide" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
            </form>
            </div>

            <div class="mt-2 h-min-24 my-4 py-4 px-4 mx-auto w-3/4 text-center bg-blue-100 shadow-2xl shadow-gray-300 rounded-lg">
                <span class="text-blue-950 text-xl ">Если вы хотите добавить больше имен, пожалуйста создайте несколько записок</span>
            </div>

            <form class="max-w-sm mx-auto">
                <div class="relative w-full max-w-xs">
                    <div class="relative flex justify-center">
              <span class="h-24 text-center">
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
              </span>
                    </div>
            <div>
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Small input</label>
                    <input type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>


            <div class="flex items-start mb-5 mt-8">
                <div class="flex items-center h-5">
                    <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                </div>
                <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
            </form>

    </x-slot>
</x-app-layout>
