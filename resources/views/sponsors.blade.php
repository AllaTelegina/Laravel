<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
        <section class="pt-14 space-y-6">

            <div class="mt-4">
                <div class="text-3xl"><span class="text-orange-600 font-medium">С</span>понсоры</div>
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
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Спонсоры</span>
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
                        <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-white">
                            <h1 class="mb-2 leading-relaxed text-2xl text-center">Стань спонсором уже сейчас</h1>
                            <p class="mb-2 leading-relaxed text-xl text-justify">
                                Поддержите храм и внесите свой вклад в сохранение духовного наследия — станьте нашим спонсором сегодня!
                            </p>
                            <div class="flex justify-center py-8">
                                <button class="inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded hover:bg-blue-950 transition duration-700 ease-in-out">Помочь Храму</button>
                            </div>
                        </div>
                        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                            <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/22.jpg')}}">
                        </div>
                    </div>
                </div>
            </section>

            <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
                <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
                    <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/temple.jpg')}}" alt="" width="384" height="512" />
                    <div class="card lg:card-side bg-blue-100">
                        <div class="card-body">
                            <h2 class="card-title">Наше предложение</h2>
                            <p> <p class="font-semibold py-2">Программа лояльности для спонсоров</p>

                            <p>На нашем сайте мы предлагаем уникальную программу лояльности для спонсоров,
                                направленную на выражение благодарности за вашу поддержку и вклад в развитие храма.</p>

                            <p class="font-semibold py-2">Письма благодарности</p>
                            <p>Мы искренне ценим ваш вклад и готовы вручить вам благодарственные письма от
                                храма. Эти документы будут символом вашей помощи и поддержки.</p>

                            <p class="font-semibold py-2">Упоминание на сайте</p>
                            <p>С вашего согласия мы разместим список наших спонсоров на сайте, указывая
                                ваш вклад и выражая нашу глубокую благодарность.
                                Это позволит другим посетителям сайта узнать о вашей поддержке.</p>

                            <p class="font-semibold py-2">Прозрачность и отчетность</p>
                            <p>Мы стремимся к полной прозрачности в использовании пожертвований.
                                Регулярно публикуются финансовые отчеты,
                                демонстрирующие, как именно были использованы ваши средства.
                                Мы также расскажем о проектах, которые удалось
                                реализовать благодаря вашей поддержке.</p>
                            </p>
                        </div>
                    </div>
                </figure>
            </div>

            <div class="mt-2 h-min-24 my-4 py-4 px-4 mx-auto w-3/4 text-center bg-blue-100 shadow-2xl shadow-gray-300 rounded-lg">
                <span class="text-blue-950 text-3xl ">Наши спонсоры</span>
            </div>


            <section class="text-blue-950 body-font">
                <div class="container px-5 py-4 mx-auto">
                    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">

            <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/sponsor1.jpg" />
                <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                    <div class="absolute w-full flex place-content-center">
                        <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Alla Telegina</p>
                    </div>
                    <div class="absolute w-full flex place-content-center mt-20">
                        <p class="font-sans text-center w-4/5 text-white mt-5">
                            Помогла храму в создании сайта, играя ключевую роль в его разработке.
                            Ее знания и навыки позволили внедрить современные технологии и создать
                            удобный, адаптивный интерфейс, который соответствует всем
                            потребностям храма и его посетителей.
                            </p>
                    </div>
                    <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                </div>
            </div>
                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>

                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>

                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>

                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>

                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>


                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>

                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>

                        <div class="relative group w-96 h-96 overflow-hidden bg-black m-auto mt-8 shadow-2xl shadow-gray-300 rounded-lg">
                            <img class="object-cover w-full h-full transform duration-700 backdrop-opacity-100" src="images/fon.jpg" />
                            <div class="absolute w-full h-full shadow-2xl opacity-20 transform duration-500 inset-y-full group-hover:-inset-y-0"></div>
                            <div class="absolute bg-gradient-to-t from-black w-full h-full transform duration-500 inset-y-3/4 group-hover:-inset-y-0">
                                <div class="absolute w-full flex place-content-center">
                                    <p class="capitalize font-serif font-bold text-3xl text-center shadow-2xl text-white mt-10">Ваша компания</p>
                                </div>
                                <div class="absolute w-full flex place-content-center mt-20">
                                    <p class="font-sans text-center w-4/5 text-white mt-5">Здесь можете быть рассказано о вашей компании</p>
                                </div>
                                <button class="absolute left-1/4 bottom-4 rounded-lg
                    focus:outline-none transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                    bg-orange-400 text-white font-medium h-10 w-48 rounded hover:bg-sky-600">Перейти</button>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

        </section>
        </div>
    </x-slot>
</x-app-layout>
