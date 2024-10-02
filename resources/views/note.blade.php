<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

            <div class="mt-4">
                <div class="text-3xl"><span class="text-orange-600 font-medium">П</span>одать записку</div>
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
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Подать записку</span>
                        </div>
                    </li>
                </ol>
            </nav>

        <section class="py-4">
            <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400 mt-8">
                <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="#" title="Логотип">
                    <img src="{{asset('images/logo.png')}}" class="w-20 h-20"/>
                </a>
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-white">
                        <p class="mb-2 leading-relaxed text-2xl text-center">Подай записку сейчас</p>
                        <p class="mb-2 leading-relaxed text-xl text-justify indent-8">
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
            <div class="container py-8 mx-auto bg-blue-100 mt-4 mb-6 px-8 shadow-xl shadow-gray-300 flex justify-center rounded-xl indent-8 text-justify">
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


<form id="noteForm" class="note" action="{{ asset('note/store') }}" method="post">
    @csrf
<div class="place-items-center ml-36">
            <span class="grid grid-cols-2 gap-4">
            <div class="relative max-w-sm">
                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <!--<label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select your country</label>-->
                <select id="countries" name="title" class="bg-gray-50 border border-gray-300 text-blue-950 text-sm rounded-lg focus:ring-blue-500
                focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Выбрать требу</option>
            <option value="obednya">Обедня</option>
            <option value="moleben">Молебен</option>
            <option value="panihida">Панихида</option>
            <option value="sorokoust40">Сорокоуст 40 дней</option>
            <option value="sorokoust180">Сорокоуст пол года</option>
            <option value="sorokoust365">Сорокоуст на год</option>
            <option value="acafistvladimiru">Акафист святому равноапостольному князю Владимиру</option>
            <option value="acafistnevscomu">Акафист святому благоверному великому князю Александру Невскому</option>
            <option value="acafistcelitelnice">Аквфист перед иконой Божией Матери «Целительница»</option>
            <option value="acafistnchudotvorcu">Акафист святителю Николаю Чудотворцу</option>
            <option value="acafistvsecarica">Акафист перед иконой Божией Матери «Всецарица»</option>
            <option value="acafistneupivaemayachasha">Акафист перед иконой Божией Матери «Неупиваемая Чаша»</option>
        </select>
            </div>


            <div class="relative max-w-sm">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0
                        18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                    </svg>
                </div>
                @error('time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input id="datepicker-autohide" name="time" datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-blue-950 text-sm rounded-lg
                focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white
                dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Выбрать дату" />
            </div>
            </span>
</div>

                <div class="mt-2 h-min-24 my-4 py-4 px-4 mx-auto w-3/4 text-center bg-blue-100 shadow-2xl shadow-gray-300 rounded-lg">
                    <span class="text-blue-950 text-xl ">Если вы хотите добавить больше имен, пожалуйста создайте несколько записок</span>
                </div>



   <button type="button" class="flex mx-auto p-4 rounded-lg bg-blue-100 border-2 border-blue-400 shadow-2xl shadow-gray-300 text-blue-950
                        focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out">
        <label class="flex cursor-pointer gap-4">
            <span class="label-text link-hover text-base text-blue-950">О здравии</span>
            @error('oror')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
            <input type="checkbox" name="oror" class="peer sr-only opacity-0" id="toggle" value="some_value" />
            <label for="toggle" class="relative flex h-6 w-11 cursor-pointer items-center rounded-full bg-orange-600 px-0.5 outline-gray-400 transition-colors before:h-5 before:w-5 before:rounded-full before:bg-white before:shadow before:transition-transform before:duration-300 peer-checked:bg-sky-600 peer-checked:before:translate-x-full peer-focus-visible:outline peer-focus-visible:outline-offset-2 peer-focus-visible:outline-gray-400 peer-checked:peer-focus-visible:outline-green-500">
                <span class="sr-only">Enable</span>
            </label>
            <span class="label-text link-hover text-base text-blue-950">Об упокоении</span>
        </label>
    </button>




                <div class="border-2 border-orange-600 rounded-lg shadow-2xl shadow-gray-300 p-4 bg-blue-50 mx-auto w-full md:w-3/4 lg:w-1/2 text-center">
                    <div class="relative flex justify-center m-4">
                        <svg class="flex mx-auto" width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                            <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                            <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                            <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                            <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                            <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                            <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                            <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                        </svg>
                    </div>

                    <div class="py-4 border-2 border-sky-600 w-full md:w-96 rounded-lg shadow-2xl shadow-gray-300 mx-auto">
                        <div class="max-w-sm mx-auto p-4">
                            <ul class="relative w-full">
                                @for ($i = 1; $i <= 10; $i++)
                                <li>
                                    <label for="small-input" class="block mb-2 text-sm font-normal italic text-gray-900 dark:text-white">Напишите имя</label>
                                    @error('names')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="text" id="small-input-{{ $i }}" name="names[{{ $i }}]" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </li>
                                @endfor
                            </ul>
                        </div>

                       <!-- <div class="flex items-start mb-5 mt-8 ml-6">
                            <div class="flex items-center h-5 ">

                                <input id="terms" name="agriment" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                            </div>
                            <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Я согласен с <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">политикой конфиденциальности</a></label>
                        </div>
-->
                    </div>
                </div>

    <button id="submitNote" type="submit" class="flex mx-auto focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out bg-orange-400
                    text-white font-medium py-2 px-10 rounded-lg hover:bg-sky-600">
        Подать записку
    </button>

    <div id="donationModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-5 rounded-lg">
            <p id="modalText">Ваш текст здесь</p>
            <p id="donationAmount">Сумма пожертвования: 0</p>
            <button id="closeModal" class="mt-3 bg-orange-400 text-white py-2 px-4 rounded-lg">Закрыть</button>
            @livewire('note-component')
        </div>
    </div>
    <script>
        document.addEventListener('show-dialog', function () {
            // Логика отображения диалогового окна
            alert('Форма успешно отправлена!');
        });
    </script>
</form>
                <script src="{{ asset('main.js') }}"></script>



<!--
                <div class="relative text-gray-300" id="pricing">
                    <div aria-hidden="true" class="absolute inset-0 h-max w-full m-auto grid grid-cols-2 -space-x-52 opacity-20">
                        <div class="blur-[106px] h-56 bg-gradient-to-br to-purple-400 from-blue-700"></div>
                        <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-indigo-600"></div>
                    </div>
                    <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                        <div class="mb-10 space-y-4 px-6 md:px-0">
                            <h2 class="text-center text-2xl font-bold text-white sm:text-3xl md:text-4xl">Pricing</h2>
                        </div>
                        <div class="flex flex-col sm:flex-row justify-center gap-4">
                            <div
                                class="flex flex-col items-center aspect-auto p-4 sm:p-8 border rounded-3xl bg-gray-800 border-gray-700 shadow-gray-600/10 shadow-none m-2 flex-1 max-w-md">
                                <h2 class="text-lg sm:text-xl font-medium text-white mb-2">Affordable Pricing</h2>
                                <p class="text-lg sm:text-xl text-center mb-6 mt-4">
                                    <span class="text-3xl sm:text-4xl font-bold text-white">$199</span> / Month
                                </p>
                                <p class="text-center mb-6">Get access to all premium features for just $199 per month. No hidden fees or extra
                                    charges.</p>
                                <a target="_blank" rel="noreferrer"
                                   class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-white before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max"
                                   href="#contact"><span class="relative text-sm font-semibold text-black">Get Started</span></a>
                            </div>
                        </div>
                    </div>
                </div>

-->
              <!--  <div class="max-w-md mx-auto bg-gray-100 shadow-md rounded-md overflow-hidden mt-16">
                    <div class="bg-blue-600 text-white p-4 flex justify-between">
                        <div class="font-bold text-lg">Введите данные карты</div>
                        <div class="text-lg"><i class="fab fa-cc-visa"></i></div>
                    </div>
                    <div class="p-6">
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="card_number">
                                Card Number
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="card_number" type="text" placeholder="xxxx xxxx xxxx xxxx">
                        </div>
                        <div class="mb-4 flex justify-between">
                            <div>
                                <label class="block text-gray-700 font-bold mb-2" for="expiration_date">
                                    Expiration Date
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="expiration_date" type="text" placeholder="MM/YY">
                            </div>
                            <div>
                                <label class="block text-gray-700 font-bold mb-2" for="cvv">
                                    CVV
                                </label>
                                <input
                                    class="shadow appearance-none border rounded w-24 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    id="cvv" type="text" placeholder="XXX">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="name_on_card">
                                Name on Card
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name_on_card" type="text" placeholder="John Doe">
                        </div>
                        <button
                            class="bg-blue-600 text-white py-2 px-4 rounded font-bold hover:bg-blue-700 focus:outline-none focus:shadow-outline">Save
                            Card
                        </button>
                    </div>
                </div>
-->



               <!--
                <div class="mt-4 h-min-24 my-4 py-4 px-4 mx-auto w-3/4 text-center bg-blue-100 shadow-2xl shadow-gray-400 rounded-lg">
                    <h2 class="p-2 text-3xl  text-blue-950">За кого нельзя подавать записку в Храме</h2>
                </div>
                <div  class="text-blue-950 border-4 border-orange-600 shadow-xl shadow-orange-400 rounded-xl">
                    <div class="container mx-auto bg-blue-100 flex rounded-xl indent-8 text-justify">

                        <p class=" p-4 text-2xl">
                            Записки в храме нельзя подавать за тех, кто не является членом Православной Церкви:
                            за некрещѐных, инославных (католиков, протестантов, армян), иноверцев (мусульман, иудеев,
                            буддистов и пр.), а также за самоубийц (если нет архиерейского благословения), за убежденных
                            атеистов и богоборцев, даже если они были крещены.
                        </p>
                    </div>
                </div>
-->

                <div class="pt-12">
                    <div class="relative w-full h-96">
                        <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/23.jpg')}}" alt="nature image" />
                        <div class="relative pt-28 text-center">
                            <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-4xl lg:text-6xl">Часто задаваемые вопросы</h2>
                        </div>
                    </div>
                </div>




                <section class="container mx-auto shadow-xl shadow-gray-300">
                    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                        <h2 id="accordion-color-heading-26">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium
                        rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl
                        focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400
                        hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-26" aria-expanded="true" aria-controls="accordion-color-body-26">
                                <span>До какого возраста ребѐнок младенец, отрок?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-26" class="hidden" aria-labelledby="accordion-color-heading-26">
                            <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">До 7 лет ребѐнок – младенец, с 7 до 14 лет – отрок. Это и указывается сокращѐнно перед полным именем ребѐнка при написании записок. Например: «мл. Сергия» или «отр. Евгения». </p>
                                </p>
                            </div>
                        </div>
                        <h2 id="accordion-color-heading-27">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                         focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-27" aria-expanded="false" aria-controls="accordion-color-body-27">
                                <span>Можно ли писать в записках «заблудшего», «озлобленного»?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-27" class="hidden" aria-labelledby="accordion-color-heading-27">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">К имени поминаемого в родительном падеже допускается включение слов: «младенца», «отрока» (для детей), а также: «воина», «болящего», «путешествующего», «заключѐнного», но не пишут:
                                    «заблудшего», «страждущего», «озлобленного», «учащегося», «скорбящего», «девицы», «вдовицы», «беременной». В заупокойных записках следует отметить «новопреставленного» (в течение 40 дней после кончины усопшего), «приснопамятного» (если усопший имеет в этот день памятную дату), «убиенного», «воина». К именам священнослужителей добавляют сан и пишут их в начале записок. </p>
                               </p>
                            </div>
                        </div>

                        <h2 id="accordion-color-heading-28">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-28" aria-expanded="false" aria-controls="accordion-color-body-28">
                                <span>Что такое молебен?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-28" class="hidden" aria-labelledby="accordion-color-heading-28">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">После Литургии обычно служится молебен – особое богослужение, за которым просят Господа, Богородицу и святых о ниспослании милости или благодарят за получение благ. Молебен может быть благодарственный, о болящих, о путешествующих и заказать его можно Спасителю, Божией Матери (разным Еѐ иконам) или святым. Можно заказать водосвятный молебен – в этом случае совершается малое освящение воды, которая потом раздаѐтся верующим
                                </p>
                                </p>
                            </div>
                        </div>

                        <h2 id="accordion-color-heading-29">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-29" aria-expanded="false" aria-controls="accordion-color-body-29">
                                <span>Что такое панихида?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-29" class="hidden" aria-labelledby="accordion-color-heading-29">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">Панихидой называется особое богослужение,
                                    состоящее из молитв прощении грехов и упокоении в
                                    Царствии Небесном душ усопших православных христиан.
                                    Панихида служится перед кануном. Около кануна на особом
                                    столе можно оставить приношение в память об усопших
                                    близких. </p>
                                </p>
                            </div>
                        </div>
                        <h2 id="accordion-color-heading-30">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-30" aria-expanded="false" aria-controls="accordion-color-body-30">
                                <span>Можно ли писать в записках имена, которых нет в православном месяцеслове? </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-30" class="hidden" aria-labelledby="accordion-color-heading-30">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">В записках пишут только те имена, которые даны при Крещении. Как правило, Егор в Крещении принимает православное имя Георгий.</p>
                                </p>
                            </div>
                        </div>

                        <h2 id="accordion-color-heading-31">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-31" aria-expanded="false" aria-controls="accordion-color-body-31">
                                <span>Что такое сорокоуст и как его заказать?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-31" class="hidden" aria-labelledby="accordion-color-heading-31">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-blue-950 dark:text-gray-400">
                                <p class="py-2">
                                    Это сорокадневное поминовение о здравии или о упокоении с выниманием частицы из просфоры во время богослужения. Сорокоуст можно заказать в свечной лавке храма только за крещеных.
                                </p>
                                </p>
                            </div>
                        </div>


                        <h2 id="accordion-color-heading-31">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-32" aria-expanded="false" aria-controls="accordion-color-body-32">
                                <span>Можно ли подавать записки о здравии ещѐ не родившегося ребенка? </span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-32" class="hidden" aria-labelledby="accordion-color-heading-32">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">Различие цены записок отражает лишь разницу в сумме пожертвования на
                                    храмовые нужды, а потребности храма значительно выше, если, к примеру, он
                                    восстанавливается или собирают средства на ремонт. То же можно сказать и о
                                    стоимости свечей.
                                </p>
                                </p>
                            </div>
                        </div>

                        <h2 id="accordion-color-heading-33">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-33" aria-expanded="false" aria-controls="accordion-color-body-33">
                                <span>Можно ли писать своё имя в записке о здравии?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-33" class="hidden" aria-labelledby="accordion-color-heading-33">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">

                                <p class="py-2">Правилами это не запрещено. Кроме того, упоминание своего имени не является эгоистичным поступком.
                                    Таким образом, вы можете смело включать себя в церковную записку.</p>
                                </p>
                            </div>
                        </div>

                        <h2 id="accordion-color-heading-34">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-34" aria-expanded="false" aria-controls="accordion-color-body-34">
                                <span>Нужно ли посещать службу, если я отправлю записку онлайн?</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-34" class="hidden" aria-labelledby="accordion-color-heading-34">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">Если у вас есть возможность посетить церковную службу, не упускайте этот шанс.
                                    Ваши слова и мысли многократно приумножат силу соборной молитвы.</p>
                                </p>
                            </div>
                        </div>

                        <h2 id="accordion-color-heading-35">
                            <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4
                    focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3"
                                    data-accordion-target="#accordion-color-body-35" aria-expanded="false" aria-controls="accordion-color-body-35">
                                <span>За кого нельзя подавать записку в Храме</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-color-body-35" class="hidden" aria-labelledby="accordion-color-heading-35">
                            <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                                <p class="mb-2 text-gray-500 dark:text-gray-400">
                                <p class="py-2">Записки в храме нельзя подавать за тех, кто не является членом Православной Церкви:
                                    за некрещѐных, инославных (католиков, протестантов, армян), иноверцев (мусульман, иудеев,
                                    буддистов и пр.), а также за самоубийц (если нет архиерейского благословения), за убежденных
                                    атеистов и богоборцев, даже если они были крещены.</p>

                                </p>
                            </div>
                        </div>
                    </div>
                </section>






            </section>
        </div>
    </x-slot>
</x-app-layout>
