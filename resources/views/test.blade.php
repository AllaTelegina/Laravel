<x-app-layout>

    <x-slot name="header">

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
                        <div class="relative pt-2 lg:pt-2 min-h-screen">

                            <div class="bg-cover w-full flex justify-center items-center"
                                 style="background-image: url('/images/mybackground.jpeg');">
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



    </x-slot>

</x-app-layout>
