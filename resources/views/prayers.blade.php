
<x-app-layout>
    <x-slot name="header">

        <section class="pt-14 space-y-6">

            <div class="mt-4">
                <div class="text-3xl"><span class="text-red-700 font-medium">M</span>олитвы</div>
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
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Молитвы</span>
                        </div>
                    </li>
                </ol>
            </nav>

<section class="py-4">
            <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400 mt-36">
                <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="/" title="Логотип">
                    <img src="{{asset('images/logo.png')}}" class="w-20 h-20" />
                </a>
                <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-center text-white">
                        <a href="#" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                            <span class="text-2xl">Молитвы утренние</span>
                        </a>
                        <a href="#" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                            <span class="text-2xl">Молитвы вечерние</span>
                        </a>
                        <a href="#" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                            <span class="text-2xl">Молитвы к причащению</span>
                        </a>
                        <a href="#" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                            <span class="text-2xl">Молитвы о Вере</span>
                        </a>
                        <a href="#" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                            <span class="text-2xl">Молитвы святым</span>
                        </a>
                        <a href="#" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                            <span class="text-2xl">Молитвы об упокоении</span>
                        </a>
                        <a href="#" class="mb-4 flex items-center space-x-2 leading-relaxed">
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
                            <span class="text-2xl">Молитвы разные</span>
                        </a>
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                        <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="/images/molitvy.jpg">
                    </div>
                </div>
            </div>
        </section>

            <div class="pt-12">
                <div class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/morning.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Молитвы утренние</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 ">
                    <div class="container mx-auto shadow-xl shadow-gray-300">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                            <div class="my-4 grid gap-6 px-4">
                                Утренние молитвы являются важной частью духовной жизни каждого верующего. Они помогают настроиться на день,
                                попросить у Бога помощи и благословения в предстоящих делах, а также поблагодарить за все дарованное.
                                Молитва по утрам дает силы, умиротворение и наполняет сердце радостью.
                            </div>
                        </div>
                    </div>
                </div>
            </div>


тест 1

            <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
                <h2 id="accordion-color-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                        <span>What is Flowbite?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                        <span>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
                <h2 id="accordion-color-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                        <span>What are the differences between Flowbite and Tailwind UI?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                    <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                        <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                            <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                            <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            тест 2




            <div id="accordion-nested-parent" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                        <span>What is Flowbite?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a href="/docs/getting-started/introduction/" class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing websites even faster with components on top of Tailwind CSS.</p>
                        <p class="mb-4 text-gray-500 dark:text-gray-400">What are the differences between Flowbite and Tailwind UI?</p>
                        <!-- Nested accordion -->
                        <div id="accordion-nested-collapse" data-accordion="collapse">
                            <h2 id="accordion-nested-collapse-heading-1">
                                <button type="button" class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-nested-collapse-body-1" aria-expanded="false" aria-controls="accordion-nested-collapse-body-1">
                                    <span>Open source</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-1" class="hidden" aria-labelledby="accordion-nested-collapse-heading-1">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <p class="text-gray-500 dark:text-gray-400">The main difference is that the core components from Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product.</p>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-2">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-nested-collapse-body-2" aria-expanded="false" aria-controls="accordion-nested-collapse-body-2">
                                    <span>Architecture</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-2" class="hidden" aria-labelledby="accordion-nested-collapse-heading-2">
                                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                                    <p class="text-gray-500 dark:text-gray-400">Another difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers sections of pages.</p>
                                </div>
                            </div>
                            <h2 id="accordion-nested-collapse-heading-3">
                                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-nested-collapse-body-3" aria-expanded="false" aria-controls="accordion-nested-collapse-body-3">
                                    <span>Can I use both?</span>
                                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-nested-collapse-body-3" class="hidden" aria-labelledby="accordion-nested-collapse-heading-3">
                                <div class="p-5 border border-gray-200 dark:border-gray-700">
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">We actually recommend using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best of two worlds.</p>
                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
                                    <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                                        <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                                        <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End: Nested accordion -->
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Is there a Figma file available?</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-gray-200 dark:border-gray-700">
                        <p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
                        <p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.</p>
                    </div>
                </div>
            </div>

тест 3


            <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
                <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
                    <div class="max-w-2xl mx-auto text-center">
                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
                            Explore Common Questions
                        </h2>
                    </div>
                    <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
                        <div
                            class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                            <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                                <span class="flex text-lg font-semibold text-black">How can I get started?</span>
                                <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                     class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                                <p>Getting started is easy! Sign up for an account, and you'll have access to our platform's
                                    features. No credit card required for the initial signup.</p>
                            </div>
                        </div>
                        <div
                            class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                            <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                                <span class="flex text-lg font-semibold text-black">What is the pricing structure?</span>
                                <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                     class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                                <p>Our pricing structure is flexible. We offer both free and paid plans. You can choose the one
                                    that
                                    suits your needs and budget.</p>
                            </div>
                        </div>
                        <div
                            class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                            <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                                <span class="flex text-lg font-semibold text-black">What kind of support do you provide?</span>
                                <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                     class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                                <p>We offer comprehensive customer support. You can reach out to our support team through
                                    various
                                    channels, including email, chat, and a knowledge base.</p>
                            </div>
                        </div>
                        <div
                            class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                            <button type="button" id="question4" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                                <span class="flex text-lg font-semibold text-black">Can I cancel my subscription anytime?</span>
                                <svg id="arrow4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                     class="w-6 h-6 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="answer4" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                                <p>Yes, you can cancel your subscription at any time without any hidden fees. We believe in
                                    providing a hassle-free experience for our users.</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-gray-600 textbase mt-9">
                        Still have questions?
                        <span class="cursor-pointer font-medium text-tertiary transition-all duration-200 hover:text-tertiary focus:text-tertiary hover-underline">Contact
                our support
            </span>
                    </p>
                </div>
                <script>
                    // JavaScript to toggle the answers and rotate the arrows
                    document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
                        button.addEventListener('click', function() {
                            var answer = document.getElementById('answer' + (index + 1));
                            var arrow = document.getElementById('arrow' + (index + 1));

                            if (answer.style.display === 'none' || answer.style.display === '') {
                                answer.style.display = 'block';
                                arrow.style.transform = 'rotate(0deg)';
                            } else {
                                answer.style.display = 'none';
                                arrow.style.transform = 'rotate(-180deg)';
                            }
                        });
                    });
                </script>
            </section>


            <div class="mt-4 mb-6 px-8">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                        <div class="my-2 grid gap-6 px-4">
                            <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Начало</h3>
<div>

    Востав от сна, прежде всякого другого дела, стань благоговейно, представляя себя пред Всевидящим Богом, и, совершая крестное знамение, произнеси:

    Во и́мя Отцá, и Сы́на, и Святáго Ду́ха. Ами́нь.

    Затем немного подожди, пока все чувства твои не придут в тишину и мысли твои не оставят все земное, и тогда произноси следующие молитвы, без поспешности и со вниманием сердечным:

    Молитва мытаря
    (Евангелие от Луки, глава 18, стих 13)

    Бóже, ми́лостив бу́ди мне грéшному. (Поклон)

    Молитва предначинательная
    Гóсподи Иису́се Христé, Сы́не Бóжий, моли́тв рáди Пречи́стыя Твоея́ Мáтере и всех святы́х, поми́луй нас. Ами́нь.

    Слáва Тебé, Бóже наш, слáва Тебé.

    Молитва Святому Духу
    Царю́ Небéсный, Утéшителю, Ду́ше и́стины, И́же вездé сый и вся исполня́яй, Сокрóвище благи́х и жи́зни Подáтелю, прииди́ и всели́ся в ны, и очи́сти ны от вся́кия сквéрны, и спаси́, Блáже, ду́ши нáша[1].

    Трисвятое
    Святы́й Бóже, Святы́й Крéпкий, Святы́й Безсмéртный, поми́луй нас. (Читается трижды, с крестным знамением и поясным поклоном.)

    Слáва Отцу́ и Сы́ну и Святóму Ду́ху, и ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва ко Пресвятой Троице
    Пресвятáя Трóице, поми́луй нас; Гóсподи, очи́сти грехи́ нáша; Влады́ко, прости́ беззакóния нáша; Святы́й, посети́ и исцели́ нéмощи нáша, и́мене Твоегó рáди.

    Го́споди поми́луй (трижды).

    Слáва, и ны́не[2].

    Молитва Господня
    Óтче наш, И́же еси́ на небесéх! Да святи́тся и́мя Твоé, да прии́дет Цáрствие Твоé, да бу́дет вóля Твоя́, я́ко на небеси́ и на земли́. Хлеб наш насу́щный дáждь нам днесь; и остáви нам дóлги нáша, я́коже и мы оставля́ем должникóм нáшим; и не введи́ нас во искушéние, но избáви нас от лукáваго.

    Тропари Троичные
    Востáвше от сна, припáдаем Ти, Блáже, и áнгельскую песнь вопиéм Ти, Си́льне: Свят, Свят, Свят еси́, Бóже, Богорóдицею поми́луй нас.

    Слава: От одрá и сна воздви́гл мя еси́, Гóсподи, ум мой просвети́ и сéрдце, и устнé мои́ отвéрзи, во éже пéти Тя, Святáя Трóице: Свят, Свят, Свят еси́, Бóже, Богорóдицею поми́луй нас.

    И ныне: Внезáпно Судия́ прии́дет, и коегóждо дея́ния обнажáтся, но стрáхом зовéм[3] в полу́нощи: Свят, Свят, Свят еси́, Бóже, Богорóдицею поми́луй нас.

    Гóсподи поми́луй (12 раз).

    Молитва ко Пресвятой Троице
    От сна востáв, благодарю́ Тя, Святáя Трóице, я́ко мнóгия рáди Твоея́ блáгости и долготерпéния не прогнéвался еси́ на мя, лени́ваго и грéшнаго, нижé погуби́л мя еси́ со беззакóньми мои́ми; но человеколю́бствовал еси́ обы́чно и в нечáянии лежáщаго воздви́гл мя еси́, во éже у́треневати и славослóвити держáву Твою́. И ны́не просвети́ мои́ óчи мы́сленныя, отвéрзи моя́ устá поучáтися словесéм Твои́м, и разумéти зáповеди Твоя́, и твори́ти вóлю Твою́, и пéти Тя во исповéдании сердéчнем, и воспевáти всесвятоé и́мя Твоé, Отцá и Сы́на и Святáго Ду́ха, ны́не и при́сно и во вéки векóв. Ами́нь.

    Прииди́те, поклони́мся Царéви нáшему Бо́гу. (Поклон) Прииди́те, поклони́мся и припадéм Христу́, Царéви нáшему Бóгу. (Поклон) Прииди́те, поклони́мся и припадéм Самому́ Христу́, Царéви и Бóгу нáшему. (Поклон)

    Псалом 50
    Поми́луй мя, Бóже, по вели́цей ми́лости Твоéй, и по мнóжеству щедрóт Твои́х очи́сти беззакóние моé. Наипáче омы́й мя от беззакóния моегó, и от грехá моегó очи́сти мя; я́ко беззакóние моé аз знáю, и грех мой прéдо мно́ю есть вы́ну. Тебé еди́ному согреши́х и лукáвое пред Тобóю сотвори́х; я́ко да оправди́шися во словесéх Твои́х, и победи́ши внегдá суди́ти Ти. Се бо в беззакóниих зачáт есмь, и во гресéх роди́ мя мáти моя́. Се бо и́стину возлюби́л еси́; безвéстная и тáйная прему́дрости Твоея́ яви́л ми еси́. Окропи́ши мя иссóпом, и очи́щуся; омы́еши мя, и пáче снéга убелю́ся. Слу́ху моему́ дáси рáдость и весéлие; возрáдуются кóсти смирéнныя. Отврати́ лицé Твоé от грех мои́х и вся беззакóния моя́ очи́сти. Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй. Не отвéржи менé от лицá Твоегó и Ду́ха Твоегó Святáго не отыми́ от менé. Воздáждь ми рáдость спасéния Твоегó и Ду́хом Влады́чним утверди́ мя. Научу́ беззакóнныя путéм Твои́м, и нечести́вии к Тебé обратя́тся. Избáви мя от кровéй, Бóже, Бóже спасéния моегó; возрáдуется язы́к мой прáвде Твоéй. Гóсподи, устнé мои́ отвéрзеши, и устá моя́ возвестя́т хвалу́ Твою́. Я́ко áще бы восхотéл еси́ жéртвы, дал бых у́бо: всесожжéния не благоволи́ши́. Жéртва Бóгу дух сокрушéн; сéрдце сокрушéнно и смирéнно Бог не уничижи́т. Ублажи́, Гóсподи, благоволéнием Твои́м Сиóна, и да сози́ждутся стéны Иерусали́мския. Тогдá благоволи́ши жéртву прáвды, возношéние и всесожегáемая; тогдá возложáт на олтáрь Твой тельцы́.

    Символ веры
    1Вéрую во еди́наго Бóга Отцá, Вседержи́теля, 2Творцá нéбу и земли́, ви́димым же всем и неви́димым. 3И во еди́наго Го́спода Иису́са Христа́, Сы́на Бо́жия, Единоро́днаго, И́же от Отца́ рожде́ннаго пре́жде всех век; Све́та от Све́та, Бо́га и́стинна от Бо́га и́стинна, рожде́нна, несотворе́нна, единосу́щна Отцу́, И́мже вся бы́ша. Нас рáди человéк и нáшего рáди спасéния сшéдшаго с небéс и воплоти́вшагося от Ду́ха Свя́та и Мари́и Дéвы, и вочеловéчшася. 4Распя́таго же за ны при Понти́йстем Пилáте, и страдáвша, и погребéнна. 5И воскрéсшаго в трéтий день по Писáнием. 6И возшéдшаго на небесá, и седя́ща одесну́ю Отцá. 7И пáки гряду́щаго со слáвою суди́ти живы́м и мéртвым, Егóже Цáрствию не бу́дет концá. 8И в Ду́ха Святáго, Гóспода, Животворя́щаго, И́же от Отцá исходя́щаго, И́же со Отцéм и Сы́ном спокланя́ема и сслáвима, глагóлавшаго прорóки. 9Во еди́ну Святу́ю Собóрную и Апóстольскую Цéрковь. 10Исповéдую еди́но крещéние во оставлéние грехóв. 11Чáю воскресéния мéртвых, 12и жи́зни бу́дущаго вéка. Ами́нь.

    Молитва 1-я, святого Макария Великого
    Бóже, очи́сти мя грéшнаго, я́ко николи́же сотвори́х благóе пред Тобою; но избáви мя от лукáваго, и да бу́дет во мне вóля Твоя́, да неосуждéнно отвéрзу устá моя́ недостóйная и восхвалю́ и́мя Твоé святóе, Отцá и Сы́на и Святáго Ду́ха, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва 2-я, того же святого
    От сна востáв, полу́нощную песнь приношу́ Ти, Спáсе, и припáдая вопию́ Ти: не даждь ми усну́ти во грехо́вней смéрти, но ущéдри мя, распны́йся во́лею, и лежáщаго мя в лéности ускори́в возстáви, и спаси́ мя в предстоя́нии и моли́тве, и по сне нощнéм возсия́й ми день безгрéшен, Христé Бóже, и спаси́ мя.

    Молитва 3-я, того же святого
    К Тебé, Влады́ко Человеколю́бче, от сна востáв прибегáю, и на делá Твоя́ подвизáюся милосéрдием Твои́м, и молю́ся Тебé: помози́ ми на вся́кое врéмя, во вся́кой вéщи, и избáви мя от вся́кия мирски́я злы́я вéщи и диáвольскаго поспешéния, и спаси́ мя, и введи́ в Цáрство Твоé вéчное. Ты бо еси́ мой Сотвори́тель и вся́кому блáгу Промы́сленник и Подáтель, о Тебé же все уповáние моé, и Тебé слáву возсылáю, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва 4-я, того же святого
    Гóсподи, И́же мнóгою Твоéю блáгостию и вели́кими щедрóтами Твои́ми дал еси́ мне, рабу́ Твоéму, мимошéдшее врéмя но́щи сея́ без напáсти прейти́ от вся́каго злá проти́вна; Ты Сам, Влады́ко, вся́ческих Твóрче, сподóби мя и́стинным Твои́м свéтом и просвещéнным сéрдцем твори́ти вóлю Твою́, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва 5-я, святого Василия Великого
    Гóсподи Вседержи́телю, Бóже сил и вся́кия плóти, в вы́шних живы́й и на смирéнныя призирáяй, сердцá же и утрóбы испыту́яй и сокровéнная человéков я́ве предвéдый, Безначáльный и Присноу́щный Свéте, у Негó же несть пременéние, или́ преложéния осенéние; Сам, Безсмéртный Царю́, приими́ молéния нáша, я́же в настоя́щее врéмя, на мнóжество Твои́х щедрóт дерзáюще, от сквéрных к Тебé устéн твори́м, и остáви нам прегрешéния нáша, я́же дéлом, и слóвом, и мы́слию, вéдением, или невéдением согрешéнная нáми; и очи́сти ны от вся́кия сквéрны плóти и ду́ха. И дáруй нам бóдренным сéрдцем и трéзвенною мы́слию всю́ настоя́щаго жития́ нощь прейти́, ожидáющим пришéствия свéтлаго и явлéннаго дне Единорóднаго Твоегó Сы́на, Гóспода и Бóга и Спáса нáшего Иису́са Христá, в óньже со слáвою Судия́ всех прии́дет, кому́ждо отдáти по дéлом его; да не пáдше и облени́вшеся, но бóдрствующе и воздви́жени в дéлание обря́щемся готóви, в рáдость и Божéственный чертóг слáвы Егó совни́дем, идéже прáзднующих глас непрестáнный, и неизречéнная слáдость зря́щих Твоегó лицá добрóту неизречéнную. Ты бо еси́ и́стинный Свет, просвещáяй и освящáяй вся́ческая, и Тя поéт вся тварь во вéки векóв. Ами́нь.

    Молитва 6-я, того же святого
    Тя благослови́м, вы́шний Бóже и Гóсподи ми́лости, творя́щаго при́сно с нáми вели́кая же и неизслéдованная, слáвная же и ужáсная, и́хже несть числá, подáвшаго нам сон во упокоéние нéмощи нáшея, и ослаблéние трудóв многотру́дныя плóти. Благодари́м Тя, я́ко не погуби́л еси́ нас со беззакóньми нáшими, но человеколю́бствовал еси́ обы́чно, и в нечáянии лежáщия ны воздви́гл еси́, во éже славослóвити держáву Твою́. Тéмже мóлим безмéрную Твою́ блáгость, просвети́ нáша мы́сли, очесá, и ум наш от тя́жкаго сна лéности возстáви: отвéрзи нáша устá, и испóлни я Твоегó хвалéния, я́ко да возмóжем непоколéблемо пéти же и исповéдатися Тебé, во всех, и от всех слáвимому Бóгу, Безначáльному Отцу́ со Единорóдным Твои́м Сы́ном и Всесвяты́м и Благи́м и Животворя́щим Твои́м Ду́хом, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва 7-я, ко Пресвятой Богородице
    Воспевáю благодáть Твою́, Влады́чице, молю́ Тя, ум мой облагодати́. Ступáти прáво мя настáви, путéм Христóвых зáповедей. Бдéти к пéсни укрепи́, уны́ния сон отгоня́ющи. Свя́зана плени́цами грехопадéний, мольбáми Твои́ми разреши́, Богоневéсто. В нощи́ мя и во дни сохраня́й, борю́щих враг избавля́ющи мя. Жизнодáтеля Бóга рóждшая, умерщвлéна мя страстьми́ оживи́. Я́же Свет невечéрний рóждшая, ду́шу мою́ ослéпшую просвети́. О, ди́вная Влады́чня палáто, дом Ду́ха Божéственна менé сотвори́. Врачá рóждшая, уврачу́й души́ моея́ многолéтныя стрáсти. Волну́ющася житéйскою бу́рею, ко стези́ мя покая́ния напрáви. Избáви мя огня́ вéчнующаго, и чéрвия же злáго, и тáртара. Да мя не яви́ши бесóм рáдование, и́же мнóгим грехóм пови́нника. Нóва сотвори́ мя, обетшáвшаго нечу́вственными, Пренепорóчная, согрешéнии. Стрáнна му́ки вся́кия покажи́ мя, и всех Влады́ку умоли́. Небéсная ми улучи́ти весéлия, со всéми святы́ми, сподóби. Пресвятáя Дéво, услы́ши глас непотрéбнаго рабá Твоегó. Струю́ давáй мне слезáм, Пречи́стая, души́ моея́ сквéрну очищáющи. Стенáния от сéрдца приношу́ Ти непрестáнно, усéрдствуй, Влады́чице. Молéбную слу́жбу мою́ приими́, и Бóгу благоутрóбному принеси́. Превы́шшая Áнгел, мирскáго мя превы́шша сли́тия сотвори́. Светонóсная Сéне небéсная, духóвную благодáть во мне напрáви. Ру́це воздéю и устнé к похвалéнию, осквернéны сквéрною, Всенепорóчная. Душетлéнных мя пáкостей избáви, Христá прилéжно умоля́ющи; Ему́же честь и поклонéние подобáет, ны́не и при́сно и во вéки векóв, ами́нь.

    Молитва 8-я, Господу нашему Иисусу Христу
    Многоми́лостиве и Всеми́лостиве Бóже мой, Гóсподи Иису́се Христé, мнóгия рáди любвé сшел и воплоти́лся еси́, я́ко да спасéши всех. И пáки, Спáсе, спаси́ мя по благодáти, молю́ Тя; áще бо от дел спасéши мя, несть се благодáть и дар, но долг пáче. Ей, мнóгий в щедрóтах и неизречéнный в ми́лости! Вéруяй бо в Мя, рекл еси́, о Христé мой, жив бу́дет и не у́зрит смéрти во вéки. Áще у́бо вéра, я́же в Тя, спасáет отчáянныя, се вéрую, спаси́ мя, я́ко Бог мой еси́ Ты и Создáтель. Вéра же вмéсто дел да вмени́тся мне, Бóже мой, не обря́щеши бо дел отню́д оправдáющих мя. Но та вéра моя́ да довлéет вмéсто всех, та да отвещáет, та да оправди́т мя, та да покáжет мя причáстника слáвы Твоея́ вéчныя. Да не у́бо похи́тит мя сатанá, и похвáлится, Слóве, éже оттóргнути мя от Твоея́ руки́ и огрáды; но или́ хощу́, спаси́ мя, или́ не хощу́, Христé Спáсе мой, предвари́ скóро, скóро, погибóх: Ты бо еси́ Бог мой от чрéва мáтере моея́. Сподóби мя, Гóсподи, ны́не возлюби́ти Тя, я́коже возлюби́х иногдá той сáмый грех; и пáки порабóтати Тебé без лéности тóщно, я́коже порабóтах прéжде сатанé льсти́вому. Наипáче же порабóтаю Тебé, Гóсподу и Бóгу моему́ Иису́су Христу́, во вся дни животá моегó, ны́не и при́сно и во вéки векóв, ами́нь.

    Молитва 9-я, к Ангелу Хранителю
    Святы́й Áнгеле, предстоя́й окая́нной моéй души́ и стрáстной моéй жи́зни, не остáви менé грéшнаго, нижé отступи́ от менé за невоздержáние моé. Не даждь мéста лукáвому дéмону обладáти мнóю, наси́льством смéртнаго сегó телесé; укрепи́ бéдствующую и худу́ю мою́ ру́ку и настáви мя на путь спасéния. Ей, святы́й Áнгеле Бóжий, храни́телю и покрови́телю окая́нныя моея́ души́ и тéла, вся мне прости́, ели́кими тя оскорби́х во вся дни животá моегó, и áще что согреши́х в прешéдшую нощь сию́, покры́й мя в настоя́щий день, и сохрани́ мя от вся́каго искушéния проти́внаго, да ни в кóем гресé прогнéваю Бóга, и моли́ся за мя ко Гóсподу, да утверди́т мя в стрáсе Своéм, и достóйна покáжет мя раба Своея́ блáгости. Ами́нь.

    Молитва 10-я, ко Пресвятой Богородице
    Пресвятáя Влады́чице моя́ Богорóдице, святы́ми Твои́ми и всеси́льными мольбáми отжени́ от менé смирéннаго и окая́ннаго рабá Твоегó уны́ние, забвéние, неразу́мие, нерадéние, и вся сквéрная, лукáвая и ху́льная помышлéния от окая́ннаго моегó сéрдца и от помрачéннаго умá моегó; и погаси́ плáмень страстéй мои́х, я́ко нищ есмь и окая́нен. И избáви мя от мнóгих и лю́тых воспоминáний и предприя́тий и от всех дéйств злых свободи́ мя. Я́ко благословéна еси́ от всех родóв, и слáвится пречестнóе и́мя Твоé во вéки векóв. Ами́нь.

    Молитвенное призывание святого, имя которого носишь
    Моли́ Бóга о мне, святы́й угóдниче Бóжий (имя), я́ко аз усéрдно к тебé прибегáю, скóрому помóщнику и моли́твеннику о душé моéй.

    Песнь Пресвятой Богородице
    Богорóдице Дéво, рáдуйся, Благодáтная Мари́е, Госпóдь с Тобóю; благословéна Ты в женáх и благословéн плод чрéва Твоегó, я́ко Спáса родилá еси́ душ нáших.

    Тропарь Кресту и молитва за Отечество
    Спаси́, Гóсподи, лю́ди Твоя́, и благослови́ достояние Твоé, побéды правослáвным христиáном на сопроти́вныя дáруя, и Твоé сохраняя Крестóм Твои́м жи́тельство.

    Молитва о Живых
    Спаси́, Гóсподи, и поми́луй отцá моего́ духо́внаго (имя), роди́телей мои́х (имена), срóдников (имена), начáльников, настáвников, благодéтелей (имена их) и всех правослáвных христиáн.

    Молитва о усопших
    Упокóй, Гóсподи, ду́ши усóпших раб Твои́х: роди́телей мои́х, срóдников, благодéтелей (имена их), и всех правослáвных христиáн, и прости́ им вся согрешéния вóльная и невóльная, и дáруй им Цáрствие Небéсное.

    Окончание молитв
    Достóйно есть я́ко вои́стинну блажи́ти Тя Богорóдицу, Присноблажéнную и Пренепорóчную и Мáтерь Бóга нáшего. Честнéйшую Херуви́м и славнéйшую без сравнéния Серафи́м, без истлéния Бóга Слóва рóждшую, су́щую Богорóдицу Тя величáем[1].

    Слáва, и ны́не:

    Гóсподи поми́луй (трижды).

    Гóсподи Иису́се Христé, Сы́не Бóжий, моли́тв рáди Пречи́стыя Твоея́ Мáтере, преподóбных и богонóсных отéц нáших и всех святы́х поми́луй нас. Ами́нь.
</div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="pt-12">
                <div class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/night.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Молитвы вечерние</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 ">
                    <div class="container mx-auto shadow-xl shadow-gray-300">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                            <div class="my-4 grid gap-6 px-4">
                                Вечерние молитвы помогают завершить день в тишине и благодарности перед Богом. Они позволяют осмыслить прошедший день,
                                проанализировать свои поступки и попросить прощения за возможные ошибки. Вечером, когда наступает спокойствие, молитва
                                становится особенно проникновенной и глубокой, соединяя нас с Божественной мудростью и любовью.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-6 px-8">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                        <div class="my-2 grid gap-6 px-4">
                            <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Начальные молитвы</h3>
<div>

    Во и́мя Отцá, и Сы́на, и Святáго Ду́ха. Ами́нь.

    Го́споди Иису́се Христé, Сы́не Бóжий, моли́тв рáди Пречи́стыя Твоея́ Мáтере, преподóбных и богонóсных отéц нáших и всех святы́х, поми́луй нас. Ами́нь.

    Слáва Тебé, Бóже наш, слáва Тебé.

    Царю́ Небéсный, Утéшителю, Ду́ше и́стины, И́же вездé сый и вся исполня́яй, Сокрóвище благи́х и жи́зни Подáтелю, прииди́ и всели́ся в ны, и очи́сти ны от вся́кия сквéрны, и спаси́, Блáже, ду́ши нáша.

    Святы́й Бóже, Святы́й Крéпкий, Святы́й Безсмéртный, поми́луй нас (трижды).

    Слáва Отцу́ и Сы́ну и Святóму Ду́ху, и ны́не и при́сно и во вéки векóв. Ами́нь.

    Пресвятáя Трóице, поми́луй нас; Гóсподи, очи́сти грехи́ нáша; Влады́ко, прости́ беззакóния нáша; Святы́й, посети́ и исцели́ нéмощи нáша, и́менé Твоегó рáди.

    Гóсподи поми́луй (трижды).

    Слáва, и ны́не:

    Óтче наш, И́же еси́ на небесéх! Да святи́тся и́мя Твоé, да прии́дет Царствие Твоé, да бу́дет во́ля Твоя, я́ко на небеси́ и на земли́. Хлеб наш насу́щный даждь нам днесь; и остáви нам дóлги нáша, я́коже и мы оставля́ем должникóм нáшим; и не введи́ нас во искушéние, но избáви нас от лукáваго.

    Тропари

    Поми́луй нас, Гóсподи, поми́луй нас; вся́каго бо отвéта недоумéюще, сию́ Ти моли́тву я́ко Влады́це грéшнии принóсим: поми́луй нас.

    Слава: Гóсподи, поми́луй нас, на Тя бо уповáхом; не прогнéвайся на ны зелó, нижé помяни́ беззакóний нáших, но при́зри и ны́не я́ко благоутрóбен, и избáви ны от враг нáших; Ты бо еси́ Бог наш, и мы лю́дие Твои́, вси делá руку́ Твоéю, и и́мя Твоé призывáем.

    И ныне: Милосéрдия двéри отвéрзи нам, благословéнная Богорóдице, надéющиися на Тя да не поги́бнем, но да избáвимся Тобóю от бед: Ты бо еси́ спасéние рóда христиáнскаго.

    Гóсподи поми́луй (12 раз).

    Молитва 1-я, святого Макария Великого, к Богу Отцу
    Бóже вéчный и Царю́ вся́каго создáния, сподóбивый мя дáже в час сей доспéти, прости́ ми грехи́, я́же сотвори́х в сей день дéлом, слóвом и помышлéнием, и очи́сти, Гóсподи, смирéнную мою́ ду́шу от вся́кия сквéрны плóти и ду́ха. И даждь ми, Гóсподи, в нощи́ сей сон прейти́ в ми́ре, да востáв от смирéннаго ми лóжа, благоугожду́ пресвятóму и́мени Твоéму, во вся дни животá моегó, и поперу́ борю́щия мя враги́ плотски́я и безпло́тныя. И избáви мя, Го́споди, от помышлéний су́етных, оскверня́ющих мя, и пóхотей лукáвых. Я́ко Твоé есть Цáрство и си́ла и слáва, Отцá и Сы́на и Святáго Ду́ха, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва 2-я, святого Антиоха, ко Господу нашему Иисусу Христу
    Вседержи́телю, Слóво Óтчее, Сам совершéн сый, Иису́се Христé, мнóгаго рáди милосéрдия Твоегó никогдáже отлучáйся менé, рабá Твоегó, но всегдá во мне почивáй. Иису́се, дóбрый Пáстырю Твои́х овéц, не предáждь менé крамолé змии́не, и желáнию сатанину́ не остáви менé, я́ко сéмя тли во мне есть. Ты у́бо, Гóсподи Бóже покланя́емый, Царю́ Святы́й, Иису́се Христé, спя́ща мя сохрани́ немерцáющим свéтом, Ду́хом Твои́м Святы́м, И́мже освятил еси́ Твоя́ ученики́. Даждь, Гóсподи, и мне, недостóйному рабу́ Твоéму, спасéние Твоé на лóжи моéм: просвети́ ум мой свéтом рáзума Святáго Евáнгелия Твоегó, ду́шу любóвию Крестá Твоегó, сéрдце чистотóю словесé Твоегó, тéло моé Твоéю стрáстию безстрáстною, мы́сль мою́ Твои́м смирéнием сохрани́, и воздви́гни мя во врéмя подóбно на Твоé славослóвие. Я́ко препрослáвлен еси́ со Безначáльным Твои́м Отцéм и с Пресвяты́м Ду́хом во вéки. Ами́нь.

    Молитва 3-я, ко Пресвятому Духу
    Гóсподи, Царю́ Небéсный, Утéшителю, Д́у́ше и́стины, умилосéрдися и поми́луй мя грéшнаго рабá Твоегó, и отпусти́ ми недостóйному, и прости́ вся, ели́ка Ти согреши́х днесь я́ко человéк, пáче же и не я́ко человéк, но и горéе скотá, вóльныя моя́ грехи́ и невóльныя, вéдомыя и невéдомыя: я́же от ю́ности и от нау́ки злы, и я́же суть от нáгльства и уны́ния. Áще и́менем Твои́м кля́хся, или́ похули́х é в помышлéнии моéм; или́ когó укори́х; или́ оклеветáх когó гнéвом мои́м, или́ опечáлих, или́ о чем прогнéвахся; или солгáх, или безгóдно спах, или нищ прии́де ко мне, и презрéх его; или брáта моего́ опечáлих, или́ свáдих, или́ когó осуди́х; или́ развеличáхся, или́ разгордéхся, или разгнéвахся; или́ стоя́щу ми на моли́тве, ум мой о лукáвствии ми́ра сегó подви́жеся, или́ развращéние помы́слих; или́ объядóхся, или́ опи́хся, или́ без умá смея́хся; или́ лукáвое помы́слих, или́ добрóту чу́ждую ви́дев, и тою́ уя́звен бых сéрдцем; или́ неподóбная глагóлах, или́ греху́ брáта моегó посмея́хся, моя́ же суть безчи́сленная согрешéния; или́ о моли́тве не ради́х, или́ и́но что содéях лукáвое, не по́мню, та бо вся и бóльша сих содéях. Поми́луй мя, Твóрче мой Влады́ко, уны́лаго и недостóйнаго рабá Твоегó, и остáви ми, и отпусти́, и прости́ мя, я́ко Благ и Человеколю́бец, да с ми́ром ля́гу, усну́ и почи́ю, блу́дный, грéшный и окая́нный аз, и поклоню́ся, и воспою́, и прослáвлю пречестнóе и́мя Твоé со Отцéм и Единорóдным Егó Сы́ном, ны́не и при́сно и во вéки. Ами́нь.

    Молитва 4-я, святого Макария Великого
    Что Ти принесу́, или́ что Ти воздáм, великодарови́тый Безсмéртный Царю́, щéдре и человеколю́бче Гóсподи, я́ко леня́щася менé на Твоé угождéние, и ничтóже блáго сотвóрша, привéл еси́ на конéц мимошéдшаго дне сегó, обращéние и спасéние души́ моéй стрóя? Ми́лостив ми бу́ди грéшному и обнажéнному вся́каго дéла блáга, возстáви пáдшую мою́ ду́шу, оскверни́вшуюся в безмéрных согрешéниих, и отыми́ от менé весь помы́сл лукáвый ви́димаго сегó жития́. Прости́ моя́ согрешéния, еди́не Безгрéшне, я́же Ти согреши́х в сей день, вéдением и невéдением, слóвом, и дéлом, и помышлéнием, и всéми мои́ми чу́вствы. Ты Сам, покрывáя, сохрани́ мя от вся́каго сопроти́внаго обстоя́ния Божéственною Твоéю влáстию, и неизречéнным человеколю́бием, и си́лою. Очи́сти, Бóже, очи́сти мнóжество грехóв мои́х. Благоволи́, Гóсподи, избáвити мя от сéти лукáваго, и спаси́ стрáстную мою́ ду́шу, и осéни мя свéтом лицá Твоегó, егдá прии́деши во слáве, и неосуждéнна ны́не сном усну́ти сотвори́, и без мечтáния, и несмущéн помы́сл рабá Твоегó соблюди́, и всю сатанину́ дéтель отжени́ от менé, и просвети́ ми разу́мныя óчи сердéчныя, да не усну́ в смерть. И посли́ ми Áнгела ми́рна, храни́теля и настáвника ду́ши и тéлу моему́, да избáвит мя от враг мои́х; да востáв со одрá моегó, принесу́ Ти благодáрственныя мольбы́. Ей, Гóсподи, услы́ши мя грéшнаго и у́богаго рабá Твоегó, изволéнием и сóвестию; дáруй ми востáвшу словесéм Твои́м поучи́тися, и уны́ние бесóвское далéче от менé отгнáно бы́ти сотвори́ Твои́ми Áнгелы; да благословлю́ и́мя Твоé святóе, и прослáвлю, и слáвлю Пречи́стую Богорóдицу Мари́ю, ю́же дал еси́ нам грéшным заступлéние, и приими́ Сию́ моля́щуюся за ны; вем бо, я́ко подрáжает Твоé человеколю́бие, и моля́щися не престаéт. Тоя́ заступлéнием, и Честнáго Крестá знáмением, и всех святы́х Твои́х рáди, у́богую ду́шу мою́ соблюди́, Иису́се Христé Бóже наш, я́ко Свят еси́, и препрослáвлен во вéки. Ами́нь.

    Молитва 5-я
    Гóсподи Бóже наш, éже согреши́х во дни сем слóвом, дéлом и помышлéнием, я́ко Благ и Человеколю́бец прости́ ми. Ми́рен сон и безмятéжен дáруй ми. Áнгела Твоегó храни́теля посли́, покрывáюща и соблюдáюща мя от вся́каго зла, я́ко Ты еси́ Храни́тель душáм и телесéм нáшим, и Тебé слáву возсылáем, Отцу́ и Сы́ну и Святóму Ду́ху, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва 6-я
    Гóсподи Бóже наш, в Негóже вéровахом, и Егóже и́мя пáче вся́каго и́менé призывáем, даждь нам, ко сну отходя́щим, ослáбу души́ и тéлу, и соблюди́ нас от вся́каго мечтáния, и тéмныя слáсти кромé; устáви стремлéние страстéй, угаси́ разжжéния востáния телéснаго. Даждь нам целому́дренне пожи́ти дéлы и словесы́; да добродéтельное жи́тельство восприéмлюще, обетовáнных не отпадéм благи́х Твои́х, я́ко Благословéн еси́ во вéки. Ами́нь.

    Молитва 7-я, святого Иоанна Златоуста (24 молитвы, по числу часов дня и ночи)
    1Гóсподи, не лиши́ менé небéсных Твои́х благ. 2Гóсподи, избáви мя вéчных мук. 3Гóсподи, умóм ли или́ помышлéнием, слóвом или дéлом согреши́х, прости́ мя. 4Гóсподи, избáви мя вся́каго невéдения и забвéния, и малоду́шия, и окаменéннаго нечу́вствия. 5Гóсподи, избáви мя от вся́каго искушéния. 6Гóсподи, просвети́ моé сéрдце, éже помрачи́ лукáвое похотéние. 7Гóсподи, аз я́ко человéк согреши́х, Ты же, я́ко Бог Щедр, поми́луй мя, ви́дя нéмощь души́ моея́. 8Гóсподи, посли́ благодáть Твою́ в пóмощь мне, да прослáвлю и́мя Твоé святóе. 9Гóсподи Иису́се Христé, напиши́ мя рабá Твоегó в кни́зе живóтней и дáруй ми конéц благи́й. 10Гóсподи Бóже мой, áще и ничтóже благо сотвори́х пред Тобóю, но даждь ми по благодáти Твоéй положи́ти начáло блáгое. 11Гóсподи, окропи́ в сéрдце моéм росу́ благодáти Твоея́. 12Гóсподи небесé и земли́, помяни́ мя грéшнаго рабá Твоегó, сту́днаго и нечи́стаго, во Цáрствии Твоéм. Ами́нь.

    1Гóсподи, в покая́нии приими́ мя. 2Гóсподи, не остáви менé. 3Гóсподи, не введи́ менé в напáсть. 4Гóсподи, даждь ми мы́сль блáгу. 5Гóсподи, даждь ми слéзы, и пáмять смéртную, и умилéние. 6Гóсподи, даждь ми пóмысл исповéдания грехóв мои́х. 7Гóсподи, даждь ми смирéние, целому́дрие и послушáние. 8Гóсподи, даждь ми терпéние, великоду́шие и крóтость. 9Гóсподи, всели́ в мя кóрень благи́х, страх Твой в сéрдце моé. 10Гóсподи, сподóби мя люби́ти Тя от всея́ души́ моея́, и помышлéния и твори́ти во всем вóлю Твою́. 11Гóсподи, покрый мя от человéк нéкоторых, и бесóв, и страстéй, и от вся́кия ины́я неподóбныя вéщи. 12Гóсподи, веси́, я́ко твори́ши, я́коже Ты вóлиши, да бу́дет вóля Твоя́ и во мне грéшнем, я́ко Благословéн еси́ во вéки. Ами́нь.

    Молитва 8-я, нашему Иисусу Христу
    Гóсподи Иису́се Христé, Сы́не Бóжий, рáди честнéйшия Мáтере Твоея́, и безплóтных Твои́х Áнгел, Проро́ка же и Предтéчи и Крести́теля Твоегó, богоглагóливых же апóстол, свéтлых и добропобéдных му́ченик, преподóбных и богонóсных отéц, и всех святы́х моли́твами, избáви мя настоя́щаго обстоя́ния бесóвскаго. Ей, Гóсподи мой Твóрче, не хотя́й смéрти грéшнаго, но я́коже обрати́тися и жи́ву бы́ти ему́, даждь и мне обращéние окая́нному и недостóйному; изми́ мя от уст пáгубнаго зми́я, зия́ющаго пожрéти мя и свести́ во ад жи́ва. Ей, Гóсподи мой, утешéние моé, И́же менé рáди окая́ннаго в тлéнную плоть оболки́йся, истóргни мя от окая́нства, и утешéние подáждь души́ моéй окая́нней. Всади́ в сéрдце моé твори́ти Твоя́ повелéния, и остáвити лукáвая дея́ния, и получи́ти блажéнства Твоя́: на Тя бо, Гóсподи, уповáх, спаси́ мя.

    Молитва 9-я, ко Пресвятой Богородице, Петра Студийского
    К Тебé Пречи́стей Бóжией Мáтери аз окая́нный припáдая молю́ся: веси́, Цари́це, я́ко безпрестáни согрешáю и прогневля́ю Сы́на Твоегó и Бóга моегó, и многажды áще кáюся, лож пред Бóгом обретáюся, и кáюся трепещá: не ужéли Госпóдь порази́т мя, и по часé пáки тáяжде творю́; вéдущи сия́, Влады́чице моя́ Госпожé Богорóдице, молю́, да поми́луеши, да укрепи́ши, и благáя твори́ти да подáси ми. Веси́ бо, Влады́чице моя́ Богорóдице, я́ко отню́д и́мам в нéнависти злáя моя́ делá, и всéю мы́слию люблю́ закóн Бóга моегó; но не вем, Госпожé Пречи́стая, отку́ду я́же ненави́жду, та и люблю́, а благáя преступáю. Не попущáй, Пречи́стая, вóли моéй совершáтися, не угóдна бо есть, но да бу́дет вóля Сы́на Твоегó и Бóга моегó: да мя спасéт, и вразуми́т, и подáст благодáть Святáго Ду́ха, да бых аз отсéле престáл сквернодéйства, и прóчее пожи́л бых в повелéнии Сы́на Твоегó, Ему́же подобáет вся́кая слáва, честь и держáва, со Безначáльным Егó Отцéм и Пресвяты́м и Благи́м и Животворя́щим Егó Ду́хом, ны́не и при́сно и во вéки векóв, ами́нь.

    Молитва 10-я, ко Пресвятой Богородице
    Благáго Царя́ благáя Мáти, Пречи́стая и Благословéнная Богорóдице Мари́е, ми́лость Сы́на Твоегó и Бóга нáшего излéй на стрáстную мою́ ду́шу и Твои́ми моли́твами настáви мя на дея́ния благáя, да прóчее врéмя животá моегó без порóка прейду́ и Тобóю рай да обря́щу, Богорóдице Дéво, еди́на Чи́стая и Благословéнная.

    Молитва 11-я, ко святому Ангелу Хранителю
    Áнгеле Христóв, храни́телю мой святы́й и покрови́телю души́ и тéла моегó, вся ми прости́, ели́ка согреши́х во днéшний день, и от вся́каго лукáвствия проти́внаго ми врáга избáви мя, да ни в кóемже гресé прогнéваю Бóга моегó; но моли́ за мя грéшнаго и недостóйнаго рабá, я́ко да достóйна мя покáжеши блáгости и ми́лости Всесвяты́я Трóицы и Мáтере Гóспода моегó Иису́са Христá и всех святы́х. Ами́нь.

    Кондак Богородице
    Взбрáнной Воевóде победи́тельная, я́ко избáвльшеся от злых, благодáрственная воспису́ем Ти раби́ Твои́, Богорóдице, но я́ко иму́щая держáву непобеди́мую, от вся́ких нас бед свободи́, да зовéм Ти́: рáдуйся, Невéсто Неневéстная.

    Преслáвная Приснодéво, Мати́ Христá Бóга, принеси́ нáшу моли́тву Сы́ну Твоему́ и Бóгу нáшему, да спасéт Тобóю ду́ши нáша.

    Все уповáние моé на Тя возлагáю, Мáтии Бóжия, сохрани́ мя под крóвом Твои́м.

    Богорóдице Дéво, не прéзри менé грéшнаго, трéбующа Твоея́ пóмощи и Твоегó заступлéния, на Тя бо уповá душá моя́, и поми́луй мя.

    Молитва святого Иоанникия Великого
    Уповáние моé Отéц, прибéжище моé Сын, покрóв мой Дух Святы́й: Трóице Святáя, слáва Тебé.

    Достóйно есть я́ко вои́стинну блажи́ти Тя, Богорóдицу, Присноблажéнную и Пренепорóчную и Мáтерь Бóга нáшего. Честнéйшую Херуви́м и славнéйшую без сравнéния Серафи́м, без истлéния Бóга Слóва рóждшую, су́щую Богорóдицу Тя величáем.

    Слáва, и ны́не:

    Гóсподи поми́луй (трижды).

    Гóсподи Иису́се Христé, Сы́не Бóжий, моли́тв рáди Пречи́стыя Твоея́ Мáтере, преподóбных и богонóсных отéц нáших и всех святы́х, поми́луй нас. Ами́нь.

    Молитва святого Иоанна Дамаскина, которую, показывая на постель твою, говори:
    Влады́ко Человеколю́бче, не ужéли мне одр сей гроб бу́дет, или́ ещé окая́нную мою́ ду́шу просвети́ши днем? Се ми гроб предлежи́т, се ми смерть предстои́т. Судá Твоегó, Гóсподи, бою́ся и му́ки безконéчныя, злóе же творя́ не престаю́: Тебé Гóспода Бóга моегó всегдá прогневля́ю, и Пречи́стую Твою́ Мáтерь, и вся Небéсныя Си́лы, и святáго Áнгела, храни́теля моегó. Вем у́бо, Гóсподи, я́ко недостóин есмь человеколю́бия Твоегó, но достóин есмь вся́каго осуждéния и му́ки. Но, Гóсподи, или́ хощу́, или́ не хощу́, спаси́ мя. Áще бо прáведника спасéши, ничтóже вéлие; и áще чи́стаго поми́луеши, ничто́же ди́вно: досто́йни бо суть ми́лости Твоея́. Но на мне грéшнем удиви́ ми́лость Твою́: о сем яви́ человеколю́бие Твоé, да не одолéет моя́ злóба Твоéй неизглагóланней блáгости и милосéрдию: и я́коже хóщеши, устрóй о мне вещь.

    И хотя лечь на постель, говори сии тропари:
    Просвети́ óчи мои́, Христé Бóже, да не когдá усну́ в смерть, да не когдá речéт враг мой: укрепи́хся на негó.

    Слава: Засту́пник души́ моея́ бу́ди, Бо́же, я́ко посредé хожду́ сетéй мнóгих; избáви мя от них и спаси́ мя, Блáже, я́ко Человеколю́бец.

    И ныне: Преслáвную Бóжию Мáтерь, и святы́х Áнгел Святéйшую, немóлчно воспои́м сéрдцем и усты́, Богорóдицу Сию́ исповéдающе, я́ко вои́стинну рóждшую нам Бóга воплощéнна, и моля́щуюся непрестáнно о душáх нáших.

    Молитва Честному Кресту
    Также целуй крест твой, и знаменуй крестом место твое от головы до ног, также и со всех сторон, и говори молитву Честнóму Кресту:

    Да воскрéснет Бог, и расточáтся врази́ Его́, и да бежáт от лицá Егó ненави́дящии Егó. Я́ко исчезáет дым, да исчéзнут; я́ко тáет воск от лицá огня́, тáко да поги́бнут бéси от лицá лю́бящих Бóга и знáменующихся крéстным знáмением, и в весéлии глагóлющих: рáдуйся, Пречестны́й и Животворя́щий Крéсте Госпóдень, прогоня́яй бéсы си́лою на тебé пропя́таго Гóспода нáшего Иису́са Христá, во ад сшéдшаго и попрáвшаго си́лу диáволю, и даровáвшаго нам тебé Крест Свой Честны́й на прогнáние вся́каго супостáта. О, Пречестны́й и Животворя́щий Крéсте Госпóдень! Помогáй ми со Святóю Госпожéю Дéвою Богорóдицею и со всéми святы́ми во вéки. Ами́нь.

    Или кратко:

    Огрáди мя, Гóсподи, си́лою Честнáго и Животворя́щаго Твоегó Крестá, и сохрани́ мя от вся́каго зла.

    Также, вместо прощения:
    Ослáби, остáви, прости́, Бóже, прегрешéния нáша, вóльная и невóльная, я́же в слóве и в дéле, я́же в вéдении и не в вéдении, я́же во дни и в нощи́, я́же во умé и в помышлéнии: вся нам прости́, я́ко Благ и Человеколю́бец.

    Молитва
    Ненави́дящих и оби́дящих нас прости́, Гóсподи Человеколю́бче. Благотворя́щим благосотвори́. Брáтиям и срóдником нáшим дáруй я́же ко спасéнию прошéния и жизнь вéчную. В нéмощех су́щия посети́ и исцелéние дáруй. И́же на мóри упрáви. Путешéствующим спутешéствуй. Служáщим и ми́лующим нас грехóв оставлéние дáруй. Заповéдавших нам недостóйным моли́тися о них поми́луй по вели́цей Твоéй ми́лости. Помяни́, Гóсподи, прéжде усóпших отéц и брáтий нáших и упóкой их, идéже присещáет свет лицá Твоегó. Помяни́, Гóсподи, брáтий нáших пленéнных и избáви я от вся́каго обстоя́ния. Помяни́, Гóсподи, плодонося́щих и добродéлающих во Святы́х Твои́х Цéрквах, и даждь им я́же ко спасéнию прошéния и жизнь вéчную. Помяни́, Гóсподи, и нас, смирéнных и грéшных и недостóйных раб Твои́х, и просвети́ наш ум свéтом рáзума Твоегó, и настáви нас на стезю́ зáповедей Твои́х, моли́твами Пречи́стыя Влады́чицы нáшея Богорóдицы и Приснодéвы Мари́и и всех Твои́х святы́х: я́ко Благословéн еси́ во вéки векóв. Ами́нь.

    Исповедание грехов повседневное
    Исповéдаю Тебé Гóсподу Бóгу моему́ и Творцу́, во Святéй Трóице Еди́ному, слáвимому и покланя́емому, Отцу́ и Сы́ну и Святóму Ду́ху, вся моя́ грехи, я́же содéях во вся дни животá моегó, и на вся́кий час, и в настоя́щее врéмя, и в прешéдшия дни и нóщи, дéлом, слóвом, помышлéнием, объядéнием, пия́нством, тайноядéнием, празднослóвием, уны́нием, лéностию, прекослóвием, непослушáнием, оклеветáнием, осуждéнием, небрежéнием, самолю́бием, многостяжáнием, хищéнием, неправдоглагóланием, скверноприбы́тчеством, мшелои́мством, ревновáнием, зáвистию, гнéвом, памятозлóбием, нéнавистию, лихои́мством и всéми мои́ми чу́вствы: зрéнием, слу́хом, обоня́нием, вку́сом, осязáнием и прóчими мои́ми грехи́, душéвными вку́пе и телéсными, и́миже Тебé Бóга моегó и Творцá прогнéвах, и бли́жняго моегó онепрáвдовах: о сих жалéя, ви́нна себé Тебé Бóгу моему́ представля́ю, и имéю вóлю кáятися: тóчию, Гóсподи Бóже мой, помози́ ми, со слезáми смирéнно молю́ Тя: прешéдшая же согрешéния моя́ милосéрдием Твои́м прости́ ми, и разреши́ от всех сих, я́же изглагóлах пред Тобóю, я́ко Благ и Человеколю́бец.
</div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="pt-12">
                <div class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/tainstva.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Молитвы к причащению</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 ">
                    <div class="container mx-auto shadow-xl shadow-gray-300">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                            <div class="my-4 grid gap-6 px-4">
                                Молитвы к причащению подготавливают душу и сердце к принятию Святых Тайн Тела и Крови Христовых. Эти молитвы помогают сосредоточиться
                                на великом таинстве и очистить мысли от суеты. В них содержатся слова покаяния, смирения и глубокого желания быть единым с Господом.
                                Молящиеся просят у Бога прощения своих грехов, помощи в укреплении веры и благословения на достойное принятие Святых Даров.
                                В храме, перед причастием, чтение этих молитв помогает верующим обрести духовное спокойствие и готовность к встрече с Христом.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-6 px-8">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                        <div class="my-2 grid gap-6 px-4">
                            <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Последование ко Святому Причащению</h3>
<div>
    Последование ко Святому Причащению
    Моли́твами святы́х отéц нáших, Гóсподи Иису́се Христé Бóже наш, поми́луй нас. Ами́нь.

    Царю́ Небéсный, Утéшителю, Ду́ше и́стины, Иже вездé сый и вся исполня́яй, Сокрóвище благи́х и жи́зни Подáтелю, прииди́ и всели́ся в ны, и очи́сти ны от вся́кия сквéрны, и спаси́, Блáже, ду́ши нáша.

    Святы́й Бóже, Святы́й Крéпкий, Святы́й Безсмéртный, поми́луй нас. (Трижды)

    Слáва Отцу́ и Сы́ну и Святóму Ду́ху, и ны́не и при́сно и во вéки векóв. Ами́нь.

    Пресвятáя Трóице, поми́луй нас; Гóсподи, очи́сти грехи́ нáша; Влады́ко, прости́ беззакóния нáша; Святы́й, посети́ и исцели́ нéмощи нáша, и́менé Твоегó рáди.

    Гóсподи поми́луй. (Трижды)

    Слáва, и ны́не:

    Отче наш, Иже еси́ на небесéх! Да святи́тся и́мя Твоé, да прии́дет Цáрствие Твоé, да бу́дет вóля Твоя́, я́ко на небеси́ и на земли́. Хлеб наш насу́щный даждь нам днесь; и остáви нам дóлги нáша, я́коже и мы оставля́ем должникóм на́шим; и не введи́ нас во искушéние, но избáви нас от лукáваго.

    Гóсподи поми́луй. (12раз)

    Прииди́те, поклони́мся Царéви нáшему Бóгу. (Поклон)

    Прииди́те, поклони́мся и припадéм Христу́, Царéви нáшему Бóгу. (Поклон)

    Прииди́те, поклони́мся и припадéм Самому́ Христу́, Царéви и Бóгу нáшему. (Поклон)

    Псалом 22

    Госпóдь пасéт мя, и ничтóже мя лиши́т. На мéсте злáчне, тáмо всéли мя, на водé покóйне воспитá мя. Ду́шу мою́ обрати́, настáви мя на стези́ прáвды, и́мене рáди Своегó. Аще бо и пойду́ посредé сéни смéртныя, не убою́ся зла, я́ко Ты со мнóю еси́, жезл Твой и пáлица Твоя́, та мя утéшиста. Уготóвал еси́ прéдо мнóю трапéзу сопроти́в стужáющым мне, умасти́л еси́ елéом главу́ мою́, и чáша Твоя́ упоявáющи мя, я́ко держáвна. И ми́лость Твоя́ поженéт мя вся дни животá моегó, и éже всели́ти ми ся в дом Госпóдень, в долготу́ дний.

    Псалом 23

    Госпóдня земля́, и исполнéние ея́, вселéнная и вси живу́щии на ней. Той на моря́х основáл ю́ есть, и на рекáх уготóвал ю́ есть. Кто взы́дет на гóру Госпóдню? Или́ кто стáнет на мéсте святéм Егó? Непови́нен рукáма, и чист сéрдцем, и́же не прия́т всу́е ду́шу свою́, и не кля́тся лéстию и́скреннему своему́. Сей прии́мет благословéние от Гóспода, и ми́лостыню от Бóга Спáса своегó. Сей род и́щущих Гóспода, и́щущих лицé Бо́га Иáковля. Возми́те вратá кня́зи вáша, и возми́теся вратá вéчная, и вни́дет Царь слáвы. Кто есть сей Царь слáвы? Госпóдь крéпок и си́лен, Госпóдь си́лен в брáни. Возми́те вратá кня́зи вáша, и возми́теся врáта вéчная, и вни́дет Царь слáвы. Кто есть сей Царь слáвы? Госпóдь сил, Той есть Царь слáвы.

    Псалом 115

    Вéровах, тéмже возглагóлах, аз же смири́хся зелó. Аз же рех во изступлéнии моéм: всяк человéк ложь. Что воздáм Гóсподеви о всех, я́же воздадé ми? Чáшу спасéния прииму́ и и́мя Госпóдне призову́, моли́твы моя́ Гóсподеви воздáм пред всéми людьми́ Егó. Честнá пред Гóсподем смерть преподóбных Егó. О, Гóсподи, аз раб Твой, аз раб Твой, и сын рабы́ни Твоея́; растерзáл еси́ у́зы моя́. Тебé пожру́ жéртву хвалы́, и во и́мя Госпóдне призову́. Моли́твы моя́ Гóсподеви воздáм пред всéми людьми́ Егó, во дворéх дóму Госпóдня, посредé тебé, Иерусали́ме.

    Слáва Отцу́ и Сы́ну и Святóму Ду́ху, и ны́не и при́сно и во вéки векóв. Ами́нь.

    Аллилу́иа, аллилу́иа, аллилу́иа, слава Тебе, Боже. (Трижды с поклонами)

    Тропари, глас 8-й

    Беззакóния моя́ прéзри, Гóсподи, от Дéвы рождéйся, и сéрдце моé очи́сти, храм то творя́ пречи́стому Твоему́ Тéлу и Крóви, нижé отри́ни менé от Твоегó лицá, без числá имéяй вéлию ми́лость.

    Слава: Во причáстие святы́нь Твои́х кáко дерзну́, недостóйный? Аще бо дерзну́ к Тебé приступи́ти с достóйными, хитóн мя обличáет, я́ко несть вечéрний, и осуждéние исходáтайствую многогрéшной души́ моéй. Очи́сти, Гóсподи, сквéрну души́ моея́, и спаси́ мя, я́ко Человеколю́бец.

    И ныне: Мнóгая мнóжества мои́х, Богорóдице, прегрешéний, к Тебé прибегóх, Чи́стая, спасéния трéбуя: посети́ немощству́ющую мою́ ду́шу, и моли́ Сы́на Твоегó и Бóга нáшего, дáти ми оставлéние, я́же содéях лю́тых, еди́на Благословéнная.

    [Во святую же Четыредесятницу:

    Егдá слáвнии ученицы́ на умовéнии вéчери просвещáхуся, тогдá Иу́да злочести́вый сребролю́бием неду́говав омрачáшеся, и беззакóнным судия́м Тебé прáведнаго Судию́ предаéт. Ви́ждь, имéний рачи́телю, сих ради́ удавлéние употреби́вша: бежи́ несы́тыя души́, Учи́телю таковáя дерзну́вшия. Иже о всех благи́й Гóсподи, слáва Тебé.]

    Псалом 50

    Поми́луй мя, Бóже, по вели́цей ми́лости Твоéй, и по мнóжеству щедрóт Твои́х очи́сти беззакóние моé. Наипáче омы́й мя от беззакóния моегó, и от грехá моегó очи́сти мя; я́ко беззакóние моé аз знáю, и грех мой прéдо мнóю есть вы́ну. Тебé еди́ному согреши́х и лукáвое пред Тобóю сотвори́х; я́ко да оправди́шися во словесéх Твои́х, и победи́ши внегдá суди́ти Ти. Се бо в беззакóниих зачáт есмь, и во гресéх роди́ мя мáти моя́. Се бо и́стину возлюби́л еси́; безвéстная и тáйная прему́дрости Твоея́ яви́л ми еси́. Окропи́ши мя иссóпом, и очи́щуся; омы́еши мя, и пáче снéга убелю́ся. Слу́ху моему́ дáси рáдость и весéлие; возрáдуются кóсти смирéнныя. Отврати́ лицé Твоé от грех мои́х и вся беззакóния моя́ очи́сти. Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй. Не отвéржи менé от лицá Твоегó и Ду́ха Твоегó Святáго не отыми́ от менé. Воздáждь ми рáдость спасéния Твоегó и Ду́хом Влады́чним утверди́ мя. Научу́ беззакóнныя путéм Твои́м, и нечести́вии к Тебé обратя́тся. Избáви мя от кровéй, Бóже, Бóже спасéния моегó; возрáдуется язы́к мой прáвде Твоéй. Гóсподи, устнé мои́ отвéрзеши, и устá моя́ возвестя́т хвалу́ Твою́. Яко áще бы восхотéл еси́ жéртвы, дал бых у́бо: всесожжéния не благоволи́ши. Жéртва Бóгу дух сокрушéн; сéрдце сокрушéнно и смирéнно Бог не уничижи́т. Ублажи́, Гóсподи, благоволéнием Твои́м Сиóна, и да сози́ждутся стéны Иерусали́мския. Тогдá благоволи́ши жéртву прáвды, возношéние и всесожегáемая; тогдá возложáт на олтáрь Твои́ тельцы́.

    Канон, глас 2-й

    Песнь 1

    Ирмос: Гряди́те, лю́дие, пои́м песнь Христу́ Бóгу, раздéльшему мóре, и настáвльшему лю́ди, я́же изведé из рабóты еги́петския, я́ко прослáвися.

    Припев: Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Хлеб животá вéчнующаго да бу́дет ми Тéло Твоé Святóе, благоутрóбне Гóсподи, и Честнáя Кровь, и неду́г многообрáзных исцелéние.

    Припев: Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Осквернéн дéлы безмéстными окая́нный, Твоегó Пречи́стаго Тéла и Божéственныя Крóве недостóин есмь, Христé, причащéния, егóже мя сподóби.

    Припев: Пресвятáя Богорóдице, спаси́ нас.

    Богородичен: Земле благáя, благословéнная Богоневéсто, клас прозя́бшая неорáнный и спаси́тельный ми́ру, сподóби мя сей яду́ща спасти́ся.

    Песнь 3

    Ирмос: На кáмени мя вéры утверди́в, разшири́л ecи́ устá моя́ на враги́ моя́. Возвесели́ бо ся дух мой, внегдá пéти: несть свят, я́коже Бог наш, и несть прáведен пáче Тебé, Гóсподи.

    Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Слéзныя ми подáждь, Христé, кáпли, сквéрну сéрдца моегó очищáющия: я́ко да благóю сóвестию очи́щен, вéрою прихожду́ и стрáхом, Влады́ко, ко причащéнию Божéственных даро́в Твои́х.

    Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Во оставлéние да бу́дет ми прегрешéний Пречи́стое Тéло Твоé, и Божéственная Кровь, Ду́ха же Святáго общéние, и в жизнь вéчную, Человеколю́бче, и страстéй и скорбéй отчуждéние.

    Пресвятáя Богорóдице, спаси́ нас.

    Богородичен: Хлéба живóтнаго Трапéза Пресвятáя, свы́ше ми́лости рáди сшéдшаго, и ми́рови нóвый живóт даю́щаго, и менé ны́не сподóби недостóйнаго, со стрáхом вкуси́ти сегó, и жи́ву бы́ти.

    Песнь 4

    Ирмос: Пришéл еси́ от Дéвы, не ходáтай, ни Ангел, но Сам, Гóсподи, воплóщься, и спасл еси́ всегó мя человéка. Тем зову́ Ти: слáва си́ле Твоéй, Гóсподи.

    Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Восхотéл еси́, нас рáди воплóщься, Многоми́лостиве, заклáн бы́ти я́ко овчá, грех рáди человéческих: тéмже молю́ Тя, и моя́ очи́сти согрешéния.

    Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Исцели́ души́ моея́ я́звы, Гóсподи, и всегó освяти́: и сподóби, Влады́ко, я́ко да причащу́ся тáйныя Твоея́ Божéственныя вéчери, окая́нный.

    Пресвятáя Богорóдице, спаси́ нас.

    Богородичен: Уми́лостиви и мне Су́щаго от утрóбы Твоея́, Влады́чице, и соблюди́ мя несквéрна рабá Твоегó и непорóчна, я́ко да приéм у́мнаго би́сера, освящу́ся.

    Песнь 5

    Ирмос: Свéта подáтелю и векóв Твóрче, Гóсподи, во свéте Твои́х повелéний настáви нас; рáзве бо Тебé инóго бóга не знáем.

    Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Якоже предрéкл еси́, Христé, да бу́дет у́бо худóму рабу́ Твоéму, и во мне пребу́ди, я́коже обещáлся еси́: се бо Тéло Твоé ям Божéственное, и пию́ Кровь Твою́.

    Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Слóве Бóжий и Бóже, угль Тéла Твоегó да бу́дет мне помрачéнному в просвещéние, и очищéние осквернéнной души́ моéй Кровь Твоя́.

    Пресвятáя Богорóдице, спаси́ нас.

    Богородичен: Мари́е, Мáти Бóжия, благоухáния честнóе селéние, Твои́ми моли́твами сосу́д мя избрáнный содéлай, я́ко да освящéний причащу́ся Сы́на Твоего́.

    Песнь 6

    Ирмос: В бéздне грехóвней валя́яся, неизслéдную милосéрдия Твоегó призывáю бéздну: от тли, Бóже, мя возведи́.

    Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Ум, ду́шу и сéрдце освяти́, Спáсе, и тéло моé, и сподóби неосуждéнно, Влады́ко, к стрáшным Тáйнам приступи́ти.

    Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Да бых устрани́лся от страстéй, и Твоея́ благодáти имéл бы приложéние, животá же утверждéние, причащéнием Святы́х, Христé, Тáин Твои́х.

    Пресвятáя Богорóдице, спаси́ нас.

    Богородичен: Бóжие, Бóже, Слóво Святóе, всегó мя освяти́, ны́не приходя́щаго к Божéственным Твои́м Тáйнам, Святы́я Мáтере Твоея́ мольбáми.

    Кондак, глас 2-й

    Хлеб, Христé, взя́ти не прéзри мя, Тéло Твоé, и Божéственную Твою́ ны́не Кровь, пречи́стых, Влады́ко, и стрáшных Твои́х Тáин причасти́тися окая́ннаго, да не бу́дет ми в суд, да бу́дет же ми в живóт вéчный и безсмéртный.

    Песнь 7

    Ирмос: Тéлу златóму прему́дрыя дéти не послужи́ша, и в плáмень сáми поидóша, и бóги их обругáша, среди́ плáмене возопи́ша, и ороси́ я́ Ангел: услы́шася уже уст вáших моли́тва.

    Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Истóчник благи́х, причащéние, Христé, безсмéртных Твои́х ны́не Тáинств да бу́дет ми свет, и живóт, и безстрáстие, и к преспея́нию же и умножéнию добродéтели Божéственнейшия ходатáйственно, еди́не Блáже, я́ко да слáвлю Тя.

    Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Да избáвлюся от страстéй, и врагóв, и ну́жды, и вся́кия скóрби, трéпетом и любóвию со благоговéнием, Человеколю́бче, приступáяй ны́не к Твои́м безсмéртным и Божéственным Тáйнам, и пéти Тебé сподóби: благословéн еси́, Гóсподи, Бóже отéц нáших.

    Пресвятáя Богорóдице, спаси́ нас.

    Богородичен: Спáса Христá рóждшая пáче ума, Богоблагодáтная, молю́ Тя ны́не, раб Твой, Чи́стую нечи́стыи́: хотя́щаго мя ны́не к пречи́стым Тáйнам приступи́ти, очи́сти всегó от сквéрны плóти и ду́ха.

    Песнь 8

    Ирмос: В пещь óгненную ко отрокóм еврéйским снизшéдшаго, и плáмень в рóсу прелóжшаго Бóга, пóйте делá, я́ко Гóспода, и превозноси́те во вся вéки.

    Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Небéсных, и стрáшных, и святы́х Твои́х, Христé, ны́не Тáин, и Божéственныя Твоея́ и тáйныя вéчери óбщника бы́ти и менé сподóби отчáяннаго, Бóже Спáсе мой.

    Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Под Твоé прибéг благоутрóбие, Блáже, со стрáхом зову́ Ти: во мне пребу́ди, Спáсе, и аз, я́коже рекл еси́, в Тебé; се бо дерзáя на ми́лость Твою́, ям Тéло Твоé, и пию́ Кровь Твою́.

    Припев: Пресвятáя Трóице, Бóже наш, слáва Тебé.

    Троичен: Трепещу́, приéмля огнь, да не опалю́ся я́ко воск и я́ко травá; óле стрáшнаго тáинства! óле благоутрóбия Бóжия! Кáко Божéственнаго Тéла и Крóве брéние причащáюся, и нетлéнен сотворя́юся?

    Песнь 9

    Ирмос: Безначáльна Роди́теля Сын, Бог и Госпóдь, воплóщься от Дéвы нам яви́ся, омрачéнная просвети́ти, собрáти расточéнная: тем всепéтую Богорóдицу величáем.

    Сéрдце чи́сто сози́жди во мне, Бóже, и дух прав обнови́ во утрóбе моéй.

    Христóс есть, вкуси́те и ви́дите: Госпóдь нас рáди, по нам бо дрéвле бы́вый, еди́ною Себé принéс, я́ко приношéние Отцу́ Своему́, при́сно закаля́ется, освящáяй причащáющияся.

    Не отвéржи менé от лицá Твоегó, и Ду́ха Твоегó Святáго не отыми́ от менé.

    Душéю и тéлом да освящу́ся, Влады́ко, да просвещу́ся, да спасу́ся, да бу́ду дом Твой причащéнием свящéнных Тáин, живу́щаго Тя имéя в себé со Отцéм и Ду́хом, Благодéтелю Многоми́лостиве.

    Припев: Воздáждь ми рáдость спасéния Твоегó и Ду́хом Влады́чним утверди́ мя.

    Якоже огнь да бу́дет ми, и я́ко свет, Тéло Твоé и Кровь, Спáсе мой, пречестнáя, опаля́я грехóвное веществó, сжигáя же страстéй тéрние, и всегó мя просвещáя, покланя́тися Божеству́ Твоéму.

    Пресвятáя Богорóдице, спаси́ нас.

    Богородичен: Бог воплóтися от чи́стых кровéй Твои́х; тéмже вся́кий род поéт Тя, Влады́чице, у́мная же мнóжества слáвят, я́ко Тобóю я́ве узрéша всéми Влады́чествующаго, осуществовáвшагося человéчеством.

    Достóйно есть я́ко вои́стинну блажи́ти Тя Богорóдицу, Присноблажéнную и Пренепорóчную и Мáтерь Бо́га нáшего. Честнéйшую Херуви́м и слáвнейшую без сравнéния Серафи́м, без истлéния Бóга Слóва рóждшую, су́щую Богорóдицу Тя величáем.

    Святы́й Бóже, Святы́й Крéпкий, Святы́й Безсмéртный, поми́луй нас. (Трижды)

    Слáва Отцу́ и Сы́ну и Святóму Ду́ху, и ны́не и при́сно и во вéки векóв. Ами́нь.

    Пресвятáя Трóице, поми́луй нас; Гóсподи, очи́сти грехи́ нáша; Влады́ко, прости́ беззакóния нáша; Святы́й, посети́ и исцели́ нéмощи нáша, и́мене Твоегó рáди.

    Го́споди поми́луй. (Трижды)

    Слáва, и ны́не:

    Отче наш, Иже еси́ на небесéх! Да святи́тся и́мя Твоé, да прии́дет Цáрствие Твоé, да бу́дет вóля Твоя́, я́ко на небеси́ и на земли́. Хлеб наш насу́щный даждь нам днесь; и остáви нам дóлги нáша, я́коже и мы оставля́ем должникóм нáшим; и не введи́ нас во искушéние, но избáви нас от лукáваго.

    Тропарь дня, или праздника. Если неделя, тропарь воскресный по гласу. Если же нет, настоящие тропари, глас 6-й:

    Поми́луй нас, Гóсподи, поми́луй нас; вся́каго бо отвéта недоумéюще, сию́ Ти моли́тву, я́ко Влады́це, грéшнии принóсим: поми́луй нас.

    Слава: Гóсподи, поми́луй нас, на Тя бо уповáхом; не прогнéвайся на ны зелó, нижé помяни́ беззакóний нáших, но при́зри и ны́не я́ко благоутрóбен, и избáви ны от враг нáших. Ты бо еси́ Бог наш, и мы лю́дие Твои́, вси делá руку́ Твоéю, и и́мя Твоé призывáем.

    И ныне: Милосéрдия двéри отвéрзи нам, благословéнная Богоро́дице, надéющиися на Тя да не поги́бнем, но да избáвимся Тобóю от бед: Ты бо еси́ спасéние рóда христиáнскаго.

    Гóсподи поми́луй. (40 раз) И поклоны, сколько хочешь.

    И стихи:

    Хотя́ я́сти, человéче, Тéло Влады́чне,

    Стрáхом приступи́, да не опали́шися: огнь бо есть.

    Божéственную же пия́ Кровь ко общéнию,

    Пéрвее примири́ся тя опечáлившим.

    Тáже дерзáя, тáинственное брáшно яждь.

    Прéжде причáстия стрáшныя жéртвы,

    Животворя́щаго Тéла Влады́чня,

    Сим помоли́ся óбразом со трéпетом:

    Молитва Василия Великого, 1-я

    Влады́ко Гóсподи Иису́се Христé, Бóже наш, истóчниче жи́зни и безсмéртия, всея́ твáри ви́димыя и неви́димыя Содéтелю, безначáльнаго Отцá соприсносу́щный Сы́не и собезначáльный, премнóгия рáди блáгости в послéдния дни в плоть оболки́йся, и распны́йся, и погребы́йся за ны неблагодáрныя и злонрáвныя, и Твоéю крóвию обнови́вый растлéвшее грехóм естествó нáше, Сам, Безсмéртный Царю́, приими́ и моé грéшнаго покая́ние, и приклони́ у́хо Твоé мне, и услы́ши глагóлы моя́. Согреши́х бо, Гóсподи, согреши́х на нéбо и пред Тобóю, и несмь достóин воззрéти на высóту слáвы Твоея́: прогнéвах бо Твою́ блáгость, Твоя́ зáповеди преступи́в, и не послу́шав Твои́х повелéний. Но Ты, Гóсподи, незлóбив сый, долготерпели́в же и многоми́лостив, не предáл еси́ мя поги́бнути со беззакóньми мои́ми, моегó вся́чески ожидáя обращéния. Ты бо рекл еси́, Человеколю́бче, прорóком Твои́м: я́ко хотéнием не хощу́ смéрти грéшника, но éже обрати́тися и жи́ву бы́ти ему́. Не хóщеши бо, Влады́ко, создáния Твоéю руку́ погуби́ти, нижé благоволи́ши о поги́бели человéчестей, но хóщеши всем спасти́ся, и в рáзум и́стины приити́. Тéмже и аз, áще и недостóин есмь небесé и земли́, и сея́ приврéменныя жи́зни, всегó себé повину́в греху́, и сластéм порабóтив, и Твой оскверни́в óбраз; но творéние и создáние Твоé быв, не отчаявáю своегó спасéния окая́нный, на Твоé же безмéрное благоутрóбие дерзáя, прихожду́. Приими́ у́бо и менé, Человеколю́бче Гóсподи, я́коже блудни́цу, я́ко разбóйника, я́ко мытаря́ и я́ко блу́днаго, и возми́ моé тя́жкое брéмя грехóв, грех взéмляй ми́ра, и нéмощи человéческия исцеля́яй, труждáющияся и обременéнныя к Себé призывáяй и упокоевáяй, не пришéдый призвáти прáведныя, но грéшныя на покая́ние. И очи́сти мя от вся́кия сквéрны плóти и ду́ха, и научи́ мя совершáти святы́ню во стрáсе Твоéм: я́ко да чи́стым свéдением сóвести моея́, святы́нь Твои́х часть приéмля, соединю́ся святóму Тéлу Твоему́ и Крóви, и имéю Тебé во мне живу́ща и пребывáюща, со Отцéм и Святы́м Твои́м Ду́хом. Ей, Гóсподи Иису́се Христé, Бóже мой, и да не в суд ми бу́дет причáстие пречи́стых и животворя́щих Тáин Твои́х, нижé да нéмощен бу́ду душéю же и тéлом, от éже недостóйне тем причащáтися, но даждь ми, дáже до конéчнаго моегó издыхáния, неосуждéнно восприимáти часть святы́нь Твои́х, в Ду́ха Святáго общéние, в напу́тие животá вéчнаго, и во благоприя́тен отвéт на Стрáшнем Суди́щи Твоéм: я́ко да и аз со всéми избрáнными Твои́ми óбщник бу́ду нетлéнных Твои́х благ, я́же уготóвал еси́ лю́бящим Тя, Гóсподи, в ни́хже препрослáвлен еси́ во вéки. Ами́нь.

    Молитва святого Иоанна Златоустого, 2-я

    Гóсподи Бóже мой, вем, я́ко несмь достóин, нижé довóлен, да под кров вни́деши хрáма души́ моея́, занéже весь пуст и пáлся есть, и не и́маши во мне мéста достóйна éже главу́ подклони́ти; но я́коже с высоты́ нас рáди смири́л еси́ Себé, смири́ся и ны́не смирéнию моему́; и я́коже восприя́л еси́ в вертéпе и в я́слех безсловéсных возлещи́, си́це восприими́ и в я́слех безсловéсныя моея́ души́, и во осквернéнное моé тéло вни́ти. И я́коже не неудостóил еси́ вни́ти, и свечеря́ти со грéшники в дому́ Си́мона прокажéннаго, тáко извóли вни́ти и в дом смирéнныя моея́ души́, прокажéнныя и грéшныя; и я́коже не отри́нул еси́ подóбную мне блудни́цу и грéшную, пришéдшую и прикосну́вшуюся Тебé, си́це умилосéрдися и о мне грéшнем, приходя́щем и прикасáющем Ти ся; и я́коже не возгнушáлся еси́ сквéрных ея уст и нечи́стых, целу́ющих Тя, нижé мои́х возгнушáйся сквéрнших óныя уст и нечи́стших, нижé мéрзких мои́х и нечи́стых устéн, и сквéрнаго и нечи́стейшаго моегó язы́ка. Но да бу́дет ми угль пресвятáго Твоегó Тéла, и честны́я Твоея́ Крóве, во освящéние и просвещéние и здрáвие смирéнней моéй души́ и тéлу, во облегчéние тя́жестей мнóгих мои́х согрешéний, в соблюдéние от вся́каго диáвольскаго дéйства, во отгнáние и возбранéние злáго моегó и лукáваго обы́чая, во умерщвлéние страстéй, в снабдéние зáповедей Твои́х, в приложéние Божéственныя Твоея́ благодáти, и Твоегó Цáрствия присвоéние. Не бо я́ко презирáяй прихожду́ к Тебé, Христé Бóже, но я́ко дерзáя на неизречéнную Твою́ блáгость, и да не на мнóзе удаля́яйся общéния Твоегó, от мы́сленнаго вóлка звероуловлéн бу́ду. Тéмже молю́ся Тебé: я́ко еди́н сый Свят, Влады́ко, освяти́ мою́ ду́шу и тéло, ум и сéрдце, чревесá и утро́бы, и всего́ мя обнови́, и вкорени́ стрáх Твой во удесéх мои́х, и освящéние Твоé неотъéмлемо от менé сотвори́; и бу́ди ми помóщник и засту́пник, окормля́я в ми́ре живóт мой, сподобля́я мя и одесну́ю Тебé предстоя́ния со святы́ми Твои́ми, моли́твами и молéньми Пречи́стыя Твоея́ Мáтере, невещéственных Твои́х служи́телей и пречи́стых сил, и всех святы́х, от вéка Тебé благоугоди́вших. Ами́нь.

    Молитва Симеона Метафраста, 3-я

    Еди́не чи́стый и нетлéнный Гóсподи, за неизречéнную ми́лость человеколю́бия нáше все восприéмый смешéние, от чи́стых и дéвственных кровéй пáче естествá Рóждшия Тя, Ду́ха Божéственнаго нашéствием, и благоволéнием Отцá присносу́щнаго, Христé Иису́се, прему́дросте Бóжия, и ми́ре, и си́ло; Твои́м восприя́тием животворя́щая и спаси́тельная страдáния восприéмый, крест, гвóздия, копиé, смерть, умертви́ моя́ душетлéнныя стрáсти телéсныя. Погребéнием Твои́м áдова плени́вый цáрствия, погреби́ моя́ благи́ми помы́слы лукáвая совéтования, и лукáвствия ду́хи разори́. Триднéвным Твои́м и живонóсным воскресéнием пáдшаго прáотца возстáвивый, возстáви мя грехóм попóлзшагося, óбразы мне покая́ния предлагáя. Преслáвным Твои́м вознесéнием плотскóе обожи́вый восприя́тие, и сиé десны́м Отцá седéнием почты́й, сподóби мя причáстием святы́х Твои́х Тáин десну́ю часть спасáемых получи́ти. Сни́тием Утéшителя Твоего́ Ду́ха сосу́ды чéстны свящéнныя Твоя́ ученики́ содéлавый, прия́телище и менé покажи́ Тогó пришéствия. Хотя́й пáки приити́ суди́ти вселéнней прáвдою, благоволи́ и мне усрéсти Тя на óблацех, Судию́ и Создáтеля моегó, со всéми святы́ми Твои́ми: да безконéчно славослóвлю и воспевáю Тя со безначáльным Твои́м Отцéм и Пресвяты́м и Благи́м и Животворя́щим Твои́м Ду́хом, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва святого Иоанна Дамаскина, 4-я

    Влады́ко Гóсподи Иису́се Христé, Бóже наш, еди́не имéяй власть человéком оставля́ти грехи́, я́ко благ и Человеколю́бец прéзри моя́ вся в вéдении и не в вéдении прегрешéния, и сподóби мя неосуждéнно причасти́тися Божéственных, и преслáвных, и пречи́стых, и животворя́щих Твои́х Тáин, не в тяжесть, ни в му́ку, ни в приложéние грехóв, но во очищéние, и освящéние, и обручéние бу́дущаго животá и Цáрствия, в стéну и пóмощь, и в возражéние сопроти́вных, во истреблéние мнóгих мои́х согрешéний. Ты бо еси́ Бог ми́лости, и щедрóт, и человеколю́бия, и Тебé слáву возсылáем со Отцéм и Святы́м Ду́хом, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва святого Василия Великого, 5-я

    Вем, Гóсподи, я́ко недостóйне причащáюся пречи́стаго Твоегó Тéла и честны́я Твоея́ Крóве, и пови́нен есмь, и суд себé ям и пию́, не разсуждáя Тéла и Крóве Тебé Христá и Бóга моегó, но на щедрóты Твоя́ дерзáя прихожду́ к Тебé рéкшему: яды́й Мою́ плоть, и пия́й Мою́ кровь, во Мне пребывáет, и Аз в нем. Умилосéрдися у́бо, Гóсподи, и не обличи́ мя грéшнаго, но сотвори́ со мнóю по ми́лости Твоéй; и да бу́дут ми святáя сия́ во исцелéние, и очищéние, и просвещéние, и сохранéние, и спасéние, и во освящéние души́ и тéла; во отгнáние вся́каго мечтáния, и лукáваго дея́ния, и дéйства диáвольскаго, мы́сленне во удесéх мои́х дéйствуемаго, в дерзновéние и любóвь, я́же к Тебé; во исправлéние жития́ и утверждéние, в возращéние добродéтели и совершéнства; во исполнéние зáповедей, в Ду́ха Святáго общéние, в напу́тие животá вéчнаго, во отвéт благоприя́тен на Стрáшнем Суди́щи Твоéм: не в суд или́ во осуждéние.

    Молитва святого Симеона Нового Богослова, 6-я

    От сквéрных устéн, от мéрзкаго сéрдца, от нечи́стаго язы́ка, от души́ осквернéны, приими́ молéние, Христé мой, и не прéзри мои́х ни словéс, нижé образóв, нижé безсту́дия. Даждь ми дерзновéнно глагóлати, я́же хощу́, Христé мой, пáче же и научи́ мя, что ми подобáет твори́ти и глагóлати. Согреши́х пáче блудни́цы, я́же увéде, где обитáеши, ми́ро купи́вши, прии́де дéрзостне помáзати Твои́ нóзе, Бóга моегó, Влады́ки и Христá моегó. Якоже óну не отри́нул еси́ пришéдшую от сéрдца, нижé менé возгнушáйся, Слóве: Твои́ же ми подáждь нóзе, и держáти и целовáти, и струя́ми слéзными, я́ко многоцéнным ми́ром, сия́ дéрзостно помáзати. Омы́й мя слезáми мои́ми, очи́сти мя и́ми, Слóве. Остáви и прегрешéния моя́, и прощéние ми подáждь. Вéси зол мнóжество, вéси и стру́пы моя́, и я́звы зри́ши моя́, но и вéру вéси, и произволéние зри́ши, и воздыхáние слы́шиши. Не таи́тся Тебé, Бóже мой, Твóрче мой, Избáвителю мой, нижé кáпля слéзная, нижé кáпли часть нéкая. Несодéланное моé ви́десте óчи Твои́, в кни́зе же Твоéй и ещé несодéянная напи́сана Тебé суть. Виждь смирéние моé, виждь труд мой ели́к, и грехи́ вся остáви ми, Бóже вся́ческих: да чи́стым сéрдцем, притрéпетною мы́слию, и душéю сокрушéнною, несквéрных Твои́х причащу́ся и пресвяты́х Тáин, и́миже оживля́ется и обожáется всяк яды́й же и пия́й чи́стым сéрдцем; Ты бо рекл еси́, Влады́ко мой: всяк яды́й Мою́ Плоть, и пия́й Мою́ Кровь, во Мне у́бо сей пребывáет, в нéмже и Аз есмь. Истинно слóво вся́ко Влады́ки и Бóга моегó: Божéственных бо причащáяйся и боготворя́щих благодáтей, не у́бо есмь еди́н, но с Тобо́ю, Христé мой, Свéтом трисо́лнечным, просвещáющим мир. Да у́бо не еди́н пребу́ду кромé Тебé Живодáвца, дыхáния моегó, животá моегó, рáдования моегó, спасéния ми́ру. Сегó рáди к Тебé приступи́х, я́коже зри́ши, со слезáми, и душéю сокрушéнною, избавлéния мои́х прегрешéний прошу́ прия́ти ми, и Твои́х живодáтельных и непорóчных Тáинств причасти́тися неосуждéнно, да пребу́деши, я́коже рекл еси́, со мнóю треокая́нным: да не кромé обрéт мя Твоея́ благодáти, прелéстник восхи́тит мя льсти́вне, и прельсти́в отведéт боготворя́щих Твои́х словéс. Сегó рáди к Тебé припáдаю, и тéпле вопию́ Ти: я́коже блу́днаго прия́л еси́, и блудни́цу пришéдшую, тáко приими́ мя блу́днаго и сквéрнаго, Щéдре. Душéю сокрушéнною, ны́не бо к Тебé приходя́, вем, Спáсе, я́ко ины́й, я́коже аз, не прегреши́ Тебé, нижé содéя дея́ния, я́же аз содéях. Но сиé пáки вем, я́ко не вели́чество прегрешéний, ни грехóв мнóжество превосхóдит Бóга моегó мнóгое долготерпéние и человеколю́бие крáйнее; но ми́лостию сострáстия тéпле кáющияся, и чи́стиши, и свéтлиши, и свéта твори́ши причáстники, óбщники Божествá Твоегó содéловаяй незави́стно, и стрáнное и Ангелом, и человéческим мы́слем, бесéдуеши им мнóгажды, я́коже другóм Твои́м и́стинным. Сия́ дéрзостна творя́т мя, сия́ вперя́ют мя, Христé мой. И дерзáя Твои́м богáтым к нам благодея́нием, рáдуяся вку́пе и трепещá, огнéви причащáюся травá сый, и стрáнно чу́до, орошáемь неопáльно, я́коже у́бо купинá дрéвле неопáльне горя́щи. Ны́не благодáрною мы́слию, благодáрным же сéрдцем, благодáрными удесы́ мои́ми, души́ и тéла моегó, покланя́юся и величáю, и славослóвлю Тя, Бóже мой, я́ко благословéнна су́ща, ны́не же и во вéки.

    Молитва святого Иоанна Златоустого, 7-я

    Бóже, ослáби, остáви, прости́ ми согрешéния моя́, ели́ка Ти согреши́х, áще слóвом, áще дéлом, áще помышлéнием, во́лею или́ нево́лею, рáзумом или́ неразу́мием, вся ми прости́ я́ко благ и Человеколю́бец, и моли́твами Пречи́стыя Твоея́ Мáтере, у́мных Твои́х служи́телей и святы́х сил, и всех святы́х, от вéка Тебé благоугоди́вших, неосуждéнно благоволи́ прия́ти ми святóе и пречи́стое Твоé Тéло и честну́ю Кровь, во исцелéние души́ же и тéла, и во очищéние лукáвых мои́х помышлéний. Яко Твоé есть Цáрство и си́ла и слáва, со Отцéм и Святы́м Ду́хом, ны́не и при́сно и во вéки векóв. Ами́нь.

    Его же, 8-я

    Несмь довóлен, Влады́ко Гóсподи, да вни́деши под кров души́ моея́; но понéже хóщеши Ты, я́ко Человеколю́бец, жи́ти во мне, дерзáя приступáю; повелевáеши, да отвéрзу двéри, я́же Ты еди́н создáл еси́, и вни́деши со человеколю́бием я́коже еси́, вни́деши и просвещáеши помрачéнный мой пóмысл. Вéрую, я́ко сиé сотвори́ши: не бо блудни́цу, со слезáми пришéдшую к Тебé, отгнáл еси́; нижé мытаря́ отвéргл еси́ покáявшася; нижé разбóйника, познáвша Цáрство Твоé, отгнáл еси́; нижé гони́теля покáявшася остáвил еси́, éже бе: но от покая́ния Тебé пришéдшия вся, в лицé Твои́х другóв вчини́л еси́, Еди́н сый благословéнный всегдá, ны́не и в безконéчныя вéки. Ами́нь.

    Его же, 9-я

    Гóсподи Иису́се Христé, Бóже мой, ослáби, остáви, очи́сти и прости́ ми грéшному, и непотрéбному, и недостóйному рабу́ Твоему́ прегрешéния, и согрешéния, и грехопадéния моя́, ели́ка Ти от ю́ности моея́, даже до настоя́щаго дне и часá согреши́х: áще в рáзуме и в неразу́мии, áще в словесéх или дéлех, или́ помышлéниих и мы́слех, и начинáниих, и всех мои́х чу́вствах. И моли́твами безсéменно рóждшия Тя, Пречи́стыя и Приснодéвы Мари́и, Мáтере Твоея́, еди́ныя непосты́дныя надéжды и предстáтельства и спасéния моегó, сподóби мя неосуждéнно причасти́тися пречи́стых, безсмéртных, животворя́щих и стрáшных Твои́х Тáинств, во оставлéние грехóв и в жизнь вéчную: во освящéние, и просвещéние, крéпость, исцелéние, и здрáвие души́ же и тéла, и в потреблéние и всесовершéнное погублéние лукáвых мои́х помыслóв, и помышлéний, и предприя́тий, и нощны́х мечтáний, тéмных и лукáвых духóв; я́ко Твоé есть Цáрство, и си́ла, и слáва, и честь, и поклонéние, со Отцéм и Святы́м Твои́м Ду́хом, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва святого Иоанна Дамаскина, 10-я

    Пред двéрьми хрáма Твоегó предстою́, и лю́тых помышлéний не отступáю; но Ты, Христé Бóже, мытаря́ оправди́вый, и хананéю поми́ловавый, и разбóйнику рая́ двéри отвéрзый, отвéрзи ми утрóбы человеколю́бия Твоегó, и приими́ мя приходя́ща и прикасáющася Тебé, я́ко блудни́цу, и кровоточи́вую: óва у́бо крáя ри́зы Твоея́ косну́вшися, удобь исцелéние прия́т, óва же пречи́стеи Твои́ нóзе удержáвши, разрешéние грехóв понесé. Аз же, окая́нный, все Твоé Тéло дерзáя восприя́ти, да не опалéн бу́ду; но приими́ мя, я́коже óныя, и просвети́ моя́ душéвныя чу́вства, попаля́я моя́ грехóвныя вины́, моли́твами безсéменно Рóждшия Тя, и Небéсных Сил; я́ко Благословéн еси́ во вéки векóв. Ами́нь.

    Молитва святого Иоанна Златоустого

    Вéрую, Гóсподи, и исповéдую, я́ко Ты еси́ вои́стинну Христóс, Сын Бóга живáго, пришéдый в мир грéшныя спасти́, от ни́хже пéрвый есмь аз. Ещé вéрую, я́ко сиé есть сáмое пречи́стое Тéло Твоé, и сия́ есть сáмая честнáя Кровь Твоя́. Молю́ся у́бо Тебé: поми́луй мя, и прости́ ми прегрешéния моя́, вóльная и невóльная, я́же слóвом, я́же дéлом, я́же вéдением и невéдением, и сподóби мя неосуждéнно причасти́тися пречи́стых Твои́х Тáинств, во оставлéние грехóв, и в жизнь вéчную. Ами́нь.

    Приходя же причаститься, произноси мысленно эти стихи Метафраста:

    Се приступáю к Божéственному Причащéнию.

    Содéтелю, да не опали́ши мя приобщéнием:

    Огнь бо еси́, недостóйныя попаля́яй.

    Но у́бо очи́сти мя от вся́кия сквéрны.

    Затем:

    Вéчери Твоея́ тáйныя днесь, Сы́не Бóжий, причáстника мя приими́; не бо врагóм Твои́м тáйну повéм, ни лобзáния Ти дам, я́ко Иу́да, но я́ко разбóйник исповéдаю Тя: помяни́ мя, Гóсподи, во Цáрствии Твоéм.

    И стихи:

    Боготворя́щую Кровь ужасни́ся, человéче, зря:

    Огнь бо есть, недостóйныя попаля́яй.

    Божéственное Тéло и обожáет мя и питáет:

    Обожáет дух, ум же питáет стрáнно.

    Потом тропари:

    Услади́л мя еси́ любóвию, Христé, и измени́л мя еси́ Божéственным Твои́м рачéнием; но попали́ огнéм невещéственным грехи́ моя́, и насы́титися éже в Тебé наслаждéния сподóби: да лику́я возвеличáю, Блáже, два пришéствия Твоя́.

    Во свéтлостех святы́х Твои́х кáко вни́ду, недостóйный? Аще бо дерзну́ совни́ти в чертóг, одéжда мя обличáет, я́ко нéсть брáчна, и свя́зан извéржен бу́ду от Ангелов. Очи́сти, Гóсподи, сквéрну души́ моея́, и спаси́ мя, я́ко Человеколю́бец.

    Также молитву:

    Влады́ко Человеколю́бче, Гóсподи Иису́се Христé Бóже мой, да не в суд ми бу́дут Святáя сия́, за éже недостóйну ми бы́ти: но во очищéние и освящéние души́ же и тéла, и во обручéние бу́дущия жи́зни и Цáрствия. Мне же, éже прилепля́тися Бóгу, блáго есть, полагáти во Гóсподе уповáние спасéния моегó.

    И еще:

    Вéчери Твоея́ тáйныя днесь, Сы́не Бóжий, причáстника мя приими́ не бо врагóм Твои́м тáйну повéм, ни лобзáния Ти дам, я́ко Иу́да, но я́ко разбóйник исповéдаю Тя: помяни́ мя, Гóсподи, во Цáрствии Твоéм.

    ***

    Желающий причаститься должен достойно приготовиться к этому святому Таинству. Приготовление это (в церковной практике оно называется говением) продолжается несколько дней и касается как телесной, так и духовной жизни человека. Телу предписывается воздержание, т.е. телесная чистота и ограничение в пище (пост). В дни поста исключается пища животного происхождения — мясо, молоко, яйца и, при строгом посте, рыба. Хлеб, овощи, фрукты употребляются в умеренном количестве. Ум не должен рассеиваться по мелочам житейским и развлекаться.

    В дни говения надлежит посещать богослужение в храме, если позволяют обстоятельства, и более прилежно выполнять домашнее молитвенное правило: кто обычно читает не все утренние и вечерние молитвы, пусть прочитает все полностью, кто не читает каноны, пусть читает в эти дни хотя бы по одному канону. Накануне причащения надо быть на вечернем богослужении и прочитать дома, кроме обычных молитв на сон грядущим, канон покаянный, канон Богородице и Ангелу Хранителю. Каноны читают или один за другим полностью, или соединяя таким образом: читается ирмос первой песни покаянного канона («Яко по суху...») и тропари, затем тропари первой песни канона Богородице («Многими содержимь...»), опуская ирмос «Воду прошед», и тропари канона Ангелу Хранителю, тоже без ирмоса «Поим Господеви...». Так же читают и следующие песни. Тропари перед каноном Богородице и Ангелу Хранителю, а также стихиры после канона Богородице в таком случае опускаются.

    Читается также канон ко причащению и, кто пожелает, — акафист Иисусу Сладчайшему. После полуночи уже не едят и не пьют, ибо принято приступать к Таинству Причащения натощак. Утром прочитываются утренние молитвы и все последование ко Святому Причащению, кроме канона, прочитанного накануне.

    Перед причащением необходима исповедь — вечером или утром, перед литургией.
    Благодарственные молитвы по Святом Причащении
    Слáва Тебé, Бóже. Слáва Тебé, Бóже. Слáва Тебé, Бóже.

    Благодарственная молитва, 1-я

    Благодарю́ Тя, Гóсподи Бóже мой, я́ко не отри́нул мя еси́ грéшнаго, но óбщника мя бы́ти святы́нь Твои́х сподóбил еси́. Благодарю́ Тя, я́ко менé недостóйнаго причасти́тися пречи́стых Твои́х и небéсных Даро́в сподóбил еси́. Но Влады́ко Человеколю́бче, нас рáди умéрый же и воскресы́й, и даровáвый нам стрáшная сия́ и животворя́щая Тáинства, во благодея́ние и освящéние душ и телéс нáших, даждь бы́ти сим и мне во исцелéние души́ же и тéла, во отгнáние вся́каго сопроти́внаго, в просвещéние óчию сéрдца моегó, в мир душéвных мои́х сил, в вéру непосты́дну, в любóвь нелицемéрну, во исполнéние прему́дрости, в соблюдéние зáповедей Твои́х, в приложéние Божéственныя Твоея́ благодáти, и Твоегó Цáрствия присвоéние: да во святы́ни Твоéй тéми сохраня́емь, Твою́ благодáть поминáю всегдá, и не ктому́ себé живу́, но Тебé нáшему Влады́це и благодéтелю; и тáко сегó жития́ изшéд о надéжди животá вéчнаго, в присносу́щный дости́гну покóй, идéже прáзднующих глас непрестáнный, и безконéчная слáдость, зря́щих Твоегó лицá добрóту неизречéнную. Ты бо еси́ и́стинное желáние, и неизречéнное весéлие лю́бящих Тя, Христé Бóже наш, и Тя поéт вся тварь во вéки. Ами́нь.

    Молитва святого Василия Великого, 2-я

    Влады́ко Христé Бóже, Царю́ векóв и Содéтелю всех, благодарю́ Тя о всех, я́же ми еси́ подáл благи́х, и о причащéнии пречи́стых и животворя́щих Твои́х Тáинств. Молю́ у́бо Тя, Блáже и Человеколю́бче: сохрани́ мя под крóвом Твои́м, и в сéни крилу́ Твоéю; и дáруй ми чи́стою сóвестию, дáже до послéдняго моегó издыхáния, достóйно причащáтися святы́нь Твои́х, во оставлéние грехóв и в жизнь вéчную. Ты бо еси́ хлеб живóтный, истóчник святы́ни, Подáтель благи́х, и Тебé слáву возсылáем со Отцéм и Святы́м Ду́хом, ны́не и при́сно и во вéки векóв. Ами́нь.

    Молитва Симеона Метафраста, 3-я

    Дáвый пи́щу мне плоть Твою́ вóлею, огнь сый и опаля́яй недостóйныя, да не опали́ши менé, Содéтелю мой; пáче же пройди́ во уды моя́, во вся состáвы, во утрóбу, в сéрдце. Попали́ тéрние всех мои́х прегрешéний. Ду́шу очи́сти, освяти́ помышлéния. Состáвы утверди́ с костьми́ вку́пе. Чу́вств просвети́ просту́ю пятери́цу. Всегó мя спригвозди́ стрáху Твоему́. При́сно покры́й, соблюди́ же, и сохрани́ мя от вся́каго дéла и слóва душетлéннаго. Очи́сти, и омы́й, и украси́ мя, удобри́, вразуми́, и просвети́ мя. Покажи́ мя Твоé селéние еди́наго Ду́ха, и не ктому́ селéние грехá. Да я́ко Твоегó дóму, вхóдом причащéния, я́ко огня́ менé бежи́т всяк злодéй, вся́ка страсть. Моли́твенники Тебé приношу́ вся святы́я, чиноначáлия же безплóтных, Предтéчу Твоегó, му́дрыя апóстолы, к сим же Твою́ несквéрную чи́стую Мáтерь, и́хже мольбы́, Благоутрóбне, приими́, Христé мой, и сы́ном свéта содéлай Твоегó служи́теля. Ты бо Еди́н еси́ и освящéние нáших, Блáже, душ и свéтлость; и Тебé лепоподóбно, я́ко Бóгу и Влады́це, слáву вси возсылáем на всяк день.

    Молитва 4-я

    Тéло Твоé святóе, Гóсподи Иису́се Христé Бóже наш, да бу́дет ми в живóт вéчный, и Кровь Твоя́ честнáя во оставлéние грехóв: бу́ди же ми благодарéние сиé в рáдость, здрáвие и весéлие; в стрáшное же и Вторóе Пришéствие Твоé сподóби мя грéшнаго стáти одесну́ю слáвы Твоея́, моли́твами Пречи́стыя Твоея́ Мáтере, и всех святы́х.

    Молитва 5-я, ко Пресвятой Богорóдице

    Пресвятáя Влады́чице Богорóдице, свéте помрачéнныя моея́ души́, надéждо, покрóве, прибéжище, утешéние, рáдование моé, благодарю́ Тя я́ко сподóбила мя еси́, недостóйнаго, причáстника бы́ти пречи́стаго Тéла и честны́я Крóве Сы́на Твоегó. Но рóждшая и́стинный Свет, просвети́ моя́ у́мныя óчи сéрдца; Яже истóчник безсмéртия рóждшая, оживотвори́ мя умерщвлéннаго грехóм; Яже ми́лостиваго Бóга любоблагоутрóбная Мáти, поми́луй мя, и даждь ми умилéние, и сокрушéние в сéрдце моéм, и смирéние в мы́слех мои́х, и воззвáние в пленéниих помышлéний мои́х; и сподóби мя, до послéдняго издыхáния, неосуждéнно приимáти пречи́стых Тáин освящéние, во исцелéние души́ же и тéла. И подáждь ми слéзы покая́ния и исповéдания, во éже пéти и слáвити Тя во вся дни животá моегó, я́ко благословéнна и препрослáвленна еси́ во вéки. Ами́нь.

    Ны́не отпущáеши рабá Твоегó, Влады́ко, по глагóлу Твоему́ с ми́ром: я́ко ви́деста óчи мои́ спасéние Твоé, éже еси́ уготóвал пред лицéм всех людéй, свет во откровéние язы́ков и слáву людéй Твои́х Изрáиля.

    Святы́й Бо́же, Святы́й Крéпкий, Святы́й Безсмéртный, поми́луй нас. (Трижды)

    Слáва Отцу́ и Сы́ну и Святóму Ду́ху, и ны́не и при́сно и во вéки векóв. Ами́нь.

    Пресвятáя Трóице, поми́луй нас; Гóсподи, очи́сти грехи́ нáша; Влады́ко, прости́ беззакóния нáша; Святы́й, посети́ и исцели́ нéмощи нáша, и́мене Твоегó рáди.

    Гóсподи поми́луй. (Трижды)

    Слáва, и ны́не:

    Отче наш, Иже еси́ на небесéх! Да святи́тся и́мя Твоé, да прии́дет Цáрствие Твоé, да бу́дет во́ля Твоя, я́ко на небеси́ и на земли́. Хлеб наш насу́щный даждь нам днесь; и остáви нам дóлги нáша, я́коже и мы оставля́ем должникóм нáшим; и не введи́ нас во искушéние, но избáви нас от лукáваго.

    Тропарь святому Иоанну Златоустому, глас 8-й:

    Уст твои́х, я́коже свéтлость огня, возсия́вши благодáть, вселéнную просвети́; не сребролю́бия ми́рови сокрóвища снискá, высоту́ нам смиренному́дрия показá, но твои́ми словесы́ наказу́я, óтче Иоáнне Златоу́сте, моли́ Слóва Христá Бóга спасти́ся душáм нáшим.

    Кондак, глас 6-й

    Слава: От небéс прия́л еси́ Божéственную благодáть, и твои́ми устнáми вся учи́ши покланя́тися в Трóице Еди́ному Бóгу, Иоáнне Златоу́сте всеблажéнне, преподóбне, достóйно хвáлим тя: еси́ бо настáвник, я́ко Божéственная явля́я.

    И ныне: Предстáтельство христиáн непосты́дное, ходáтайство ко Творцу́ непрелóжное, не прéзри грéшных молéний глáсы, но предвари́, я́ко Благáя, на пóмощь нас, вéрно зову́щих Ти: ускори́ на моли́тву, и потщи́ся на умолéние, предстáтельствующи при́сно, Богорóдице, чту́щих Тя.

    Если совершалась литургия святого Василия Великого, читай тропарь Василию Великому, глас 1-й:

    Во всю зéмлю изы́де вещáние твоé, я́ко приéмшую слóво твоé, и́мже боголéпно научи́л еси́, естествó су́щих уясни́л еси́, человéческия обы́чаи украси́л еси́, цáрское свящéние, óтче преподóбне, моли́ Хри́ста Бóга, спасти́ся душáм нáшим.

    Кондак, глас 4-й

    Слава: Яви́лся еси́ основáние непоколеби́мое Цéркве, подая́ всем некрадóмое госпóдство человéком, запечатлéя твои́ми велéньми, небоявлéнне Васи́лие преподóбне.

    И ныне: Предстáтельство христи́ан…

    Если совершалась литургия Преждеосвященных Даров, читай тропарь святому Григорию Двоеслову, глас 4-й:

    Иже от Бóга свы́ше Божéственную благодáть восприéм, слáвне Григóрие, и Тогó си́лою укрепля́емь, евáнгельски шéствовати извóлил еси́, отону́дуже у Христá возмéздие трудóв прия́л еси́, всеблажéнне: Егóже моли́, да спасéт ду́ши нáша.

    Кондак, глас 3-й

    Слава: Подобоначáльник показáлся еси́ Начáльника пáстырем Христá, и́ноков чреды́, óтче Григóрие, ко огрáде небéсней наставля́я, и отту́ду научи́л еси́ стáдо Христóво зáповедем Егó: ны́не же с ни́ми рáдуешися, и лику́еши в небéсных крóвех.

    И ныне: Предстáтельство христиáн...

    Гóсподи поми́луй. (12 раз)

    Слáва, и ны́не:

    Честнéйшую Херуви́м...
</div>
                        </div>
                    </div>
                </div>
            </div>




                            <div class="pt-12">
                                <div class="relative w-full h-96">
                                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/vera.jpg')}}" alt="nature image" />
                                    <div class="relative pt-28 text-center">
                                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Молитвы о вере</h2>
                                    </div>
                                </div>
                                <div class="-mt-16 mb-8 px-8 ">
                                    <div class="container mx-auto shadow-xl shadow-gray-300">
                                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                                            <div class="my-4 grid gap-6 px-4">
                                                Молитвы о вере предназначены для укрепления веры в душе человека, особенно в моменты сомнений или духовных искушений.
                                                Эти молитвы выражают искреннюю просьбу к Богу даровать крепкую веру, мудрость и терпение, чтобы преодолеть жизненные
                                                трудности. В них молящиеся просят помощи в понимании Божьей воли, укреплении духовного пути и поддержке в стремлении
                                                следовать заповедям Господа. Такие молитвы помогают верующим найти утешение, обрести надежду и почувствовать Божье
                                                присутствие в своей жизни. Чтение этих молитв в храме или дома создает атмосферу духовного подъема и внутреннего покоя.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 mb-6 px-8">
                                <div class="container mx-auto shadow-xl shadow-gray-300">
                                    <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                                        <div class="my-2 grid gap-6 px-4">
                                            <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Последование ко Святому Причащению</h3>
                                            <div>
                                                Молитвы ко Господу Иисусу Христу
                                                Милосердый Господи! Да будет воля Твоя, хотящая всем спастись и в разум истины приидти! Спаси и сохрани раба Твоего (имя), приими сию молитву мою, яко вопль любви, заповеданной Тобою!



                                                Господи Иисусе Христе, умилосердися и помилуй раба Твоего (имя), прости ему вся прегрешения вольная и невольная, исцели немощи его душевные и телесные, приведи его к вере и спасению. Аминь.



                                                Господи! Просвети заблудших (имена), обрати их в святую Церковь Твою и спаси их всесильною Твоею благодатию! Нас же в Православии и истенней вере соблюди яко благословен еси во веки веков.


                                                Молитва жены о неверующем муже

                                                (Схиигумена Иоанна (Алексеева))

                                                Спаси, Господи, и помилуй моего мужа (имя), сохрани и вразуми его.


                                                Молитва родителей о детях

                                                Господи Иисусе Христе, буди милость Твоя на детях моих (имена), сохрани их под кровом Твоим, покрый от всякаго лукаваго похотения, отжени от них всякаго врага и супостата, отверзи им уши и очи сердечныя, даруй умиление и смирение сердцам их. Господи, все мы создание Твое, пожалей детей моих (имена) и обрати их на покаяние. Спаси, Господи, и помилуй детей моих (имена) и просвети им ум светом разума Евангелия Твоего и настави их на стезю заповедей Твоих и научи их, Спасе, творити волю Твою, яко Ты есть Бог наш.

                                                Молитвы ко Пресвятой Богородице
                                                Молитва к Божией Матери об обращении заблудшего

                                                (Святителя Гавриила Новгородского)

                                                О, Всемилостивая Госпоже, Дево Владычице Богородице, Царица Небесная! Ты рождеством Своим спасла род человеческий от вечного мучительства дьявола: ибо от Тебя родился Христос, Спаситель наш. Призри своим милосердием и на сего (имя), лишенного милости Божией и благодати, исходатайствуй Матерним Своим дерзновением и Твоими молитвами у Сына Твоего, Христа Бога нашего, дабы ниспослал благодать Свою свыше и на сего погибающего. О, Преблагословенная! Ты надежда ненадежных, Ты отчаянных спасение, да не порадуется враг о душе его! Аминь.

                                                Молитва ко Пресвятой Богородице о неверующих
                                                Владычице, прими молитвы раб Твоих о недугующих неверием (имена) и избави их от слепоты душевной, да узрят свет веры божественной, да вси обратятся в недра Матери Церкви и избавятся от всякия нужды и печали.


                                                Молитва пророку, Предтече и Крестителю Господню Иоанну о некрещенных

                                                О святый угодниче Божий, Крестителю Спасов Иоанне, услыши мя, грешного (имя)! Умоли Христа Бога, да сподобит благодати святаго крещения рабов Своих (имена), а меня благодати святого покаяния. Да вси купно прославляем милосердие в Троице славимого Бога, Отца и Сына и Святаго Духа, и твое усердное ходатайство во веки веков. Аминь.


                                                Молитва в маловерии
                                                Благодарю́ Тя́, ми́лостивый Го́споди, я́ко яви́л ве́лие попече́ние о душе́ мое́й, да́руя е́й благо́е и спаси́тельное уче́ние Це́ркви Свое́й свято́й. Не посрами́ же ве́ру мою́, но па́че приведи́ мя́ ко спаси́тельному Твоему́ Го́рнему Ца́рствию. Сози́жди в душе́ мое́й Ца́рствие Свое́ и сподо́би в не́м неисхо́дно пребыва́ти, да не во осужде́ние и поги́бель бу́дут мне́ Твои́ за́поведи, но во исправле́ние, оставле́ние грехо́в и в ве́чную жи́знь по сла́внем Твое́м прише́ствии. Ами́нь.


                                                Молитвы при помыслах сомнения в учении Церкви и истинах веры:


                                                Молитва первая:
                                                Утверди́ мя, Го́споди, во и́стинней сей ве́ре, ю́же испове́дах; и даждь ми, вся до́льняя возненави́девши, го́ре к Тебе́ име́ти се́рдце, и досто́йно хвали́ти всесвято́е и́мя Твое́, Отца́ и Сы́на и Свята́го Ду́ха, ны́не и при́сно и во ве́ки веко́в. Ами́нь.


                                                Молитва вторая (св. Тихона Задонского):
                                                Сы́не Бо́жий, Све́те ве́чный и да́яй всем свет! Поми́луй мя, просвети́ о́чи се́рдца моего́, мгло́ю грехо́в и страсте́й омраче́нныя, я́коже просвети́л еси́ слепы́х, возопи́вших к Тебе́. Да отве́рзутся и мои́ о́чи серде́чныя, да узрю́ Тя, Све́та незаходи́маго, и ве́рою и любо́вию после́дую Тебе́, мене́ ра́ди окая́ннаго ходи́вшему по земли́. Ами́нь.


                                                Молитва о возвращении заблудших в лоно Церкви
                                                Отступи́вшия от правосла́вныя ве́ры и поги́бельными ересьми́ ослепле́нныя, све́том Твоего́ позна́ния просвети́ и Святе́й Твое́й Апо́стольстей Собо́рней Це́ркви причти́.


                                                Молитва ко Господу за гонителей:
                                                Господи, обрати к Тебе сердца врагов наших, если же невозможно ожесточенным обратиться, то положи преграду зла их и защити от них избранных Твоих. Аминь.


                                                Молитва Пресвятой Богородице перед иконой «Умягчение злых сердец»:
                                                О, многострада́льная Ма́ти Бо́жия, Превы́сшая все́х дще́рей земли́, по чистоте́ Свое́й и по мно́жеству страда́ний, Тобо́ю на земли́ перенесе́нных, приими́ многоболе́зненныя воздыха́ния на́ша и сохрани́ на́с под кро́вом Твоея́ ми́лости. Ино́го бо прибе́жища и те́плаго предста́тельства ра́зве Тебе́ не ве́мы, но, я́ко дерзнове́ние иму́щая ко И́же из Тебе́ рожде́нному, помози́ и спаси́ ны́ моли́твами Свои́ми, да непреткнове́нно дости́гнем Ца́рствия Небе́снаго, иде́же со все́ми святы́ми бу́дем воспева́ти в Тро́ице Еди́ному Бо́гу ны́не и при́сно, и во ве́ки веко́в. Ами́нь.


                                                Молитва о нежелающем посещать храм (св. Иоанна Кронштадтского):
                                                Господи! Даруй, чтобы храм Твой всем приходящим в него с верою, благоговением и страхом Божиим сообщал просвещение душ, очищение грехов, освящение, мир, здравие, тишину душевную, — укреплял веру, надежду и любовь, способствовал исправлению жития, успехам во всех благих начинаниях и делах взаимной любви, чистому христианскому житию, умягчению сердец и прекращению самолюбия, жестокосердия, любостяжательности, жадности, зависти, злобы, чревоугодия, пьянства, разврата — этих пороков, столько вредных в общественной жизни и подрывающих основы ее. Даруй сие, даруй, Господи, всем любящим посещать храм Твой, да и не любящих его расположи любить его и исправлять сердца и дела свои: ибо время близко и суд при дверях для всех людей всякого звания и состояния, всякого пола и возраста, и всем предстоит дело бесконечно великой важности — дать ответ на Страшном суде Христовом.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


            <div class="pt-12">
                <div class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/tainstva.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Молитвы святым</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 ">
                    <div class="container mx-auto shadow-xl shadow-gray-300">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                            <div class="my-4 grid gap-6 px-4">
                                Молитвы святым представляют собой обращение к святым угодникам Божьим с просьбами о заступничестве и помощи.
                                В православной традиции святые почитаются как примеры праведной жизни, стойкости в вере и бескорыстного служения
                                Богу и ближним. Молящиеся обращаются к святым с различными нуждами: о здравии, семейном благополучии, помощи в т
                                рудных жизненных ситуациях и обретении душевного покоя.

                                Молитвы святым включают в себя прославление их подвигов, признание их святости и просьбы о ходатайстве перед Богом
                                за тех, кто взывает к ним. Верующие верят, что святые, будучи ближе к Богу, могут молиться за нас и помогать нам
                                своими молитвами. Чтение молитв святым укрепляет веру, вдохновляет на подражание их добродетелям и помогает ощутить
                                духовную поддержку и утешение.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-6 px-8">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                        <div class="my-2 grid gap-6 px-4">
                            <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Cвятому равноапостольному Великому Князю Владимиру</h3>
                            <div>
                                Молитва первая

                                О великий угодниче Божий, богоизбранный и богопрославленный, равноапостольный княже Владимире! Ты отринул еси зловерие и нечестие языческое, уверовал еси во Единаго Истиннаго Триипостаснаго Бога и, восприяв Святое Крещение, просветил еси светом Божественныя веры и благочестия всю страну Русскую. Славяще убо и благодаряще Премилосердаго Творца и Спасителя нашего, славим, благодарим и тя, просветителю наш и отче, яко тобою познахом спасительную веру Христову и крестихомся во Имя Пресвятыя и Пребожественныя Троицы: тою верою избавихомся от праведнаго осуждения Божия, вечнаго рабства диаволя и адова мучительства: тою верою восприяхом благодать всыновления Богу и надежду наследования Небеснаго блаженства. Ты еси первый вождь наш к Начальнику и Совершителю нашего вечнаго спасения Господу Иисусу Христу; ты еси теплый молитвенник и ходатай о стране Русской, о воинстве и о всех людех. Не может язык наш изобразити величие и высоту благодеяний, тобою излиянных на землю нашу, отцев и праотцев наших и на нас, недостойных. О всеблагий отче и просветителю наш! Призри на немощи наша и умоли премилосердаго Царя Небеснаго, да не прогневается на ны зело, яко по немощем нашим по вся дни согрешаем, да не погубит нас со беззаконьми нашими, но да помилует и спасет нас, по милости Своей, да всадит в сердце наше спасительный страх Свой, да просветит Своею благодатию ум наш, во еже разумети нам пути Господни, оставити стези нечестия и заблуждений, тщатися же во стезях спасения и истины, неуклоннаго исполнения заповедей Божиих и уставов Святыя Церкве. Моли, благосерде, Человеколюбца Господа, да пробавит нам великую милость Свою, да избавит нас от нашествия иноплеменных, от внутренних нестроений, мятежей и раздоров, от глада, смертоносных болезней и от всякаго зла, да подаст нам благорастворение воздуха и плодоносие земли, да даст пастырем ревность о спасении пасомых, всем же людем споспешение о еже усердно службы своя исправляти, любовь между собою и единомыслие имети, на благо же Отечества и Святыя Церкве верне подвизатися, да возсияет свет спасительныя веры в стране нашей во всех концех ея, да упразднятся вся ереси и расколы, да тако поживше в мире на земли, сподобимся с тобою вечнаго блаженства, хваляще и превозносяще Бога во веки веков. Аминь.

                                Молитва вторая

                                О великий угодниче Божий, равноапостольный княже Владимире! Призри на немощи наши и умоли Премилосердаго Царя Небеснаго, да не прогневается на ны зело и да не погубит нас со беззаконьми нашими, но да помилует и спасет нас по милости Своей, да всадит в сердца наша покаяние и спасительный страх Божий, да просветит Своею благодатию ум наш, во еже оставити нам стези нечестия и на путь спасения обратитися, неуклонно же заповеди Божия творити и уставы Святыя Церкве соблюдати. Моли, благосерде, Человеколюбца Бога, да явит нам великую милость Свою: да избавит нас от смертоносных болезней и от всякаго зла, да сохранит и спасет рабов Божиих (имена) от всех козней и наветов вражиих и да все мы сподобимся с тобою вечнаго блаженства, хваляще и превозносяще Бога во веки веков.

                                Святому благоверному князю Александру Невскому
                                Скорый помощниче всех усердно к тебе прибегающих и теплый наш пред Господом предстателю, святый благоверный великий княже Александре! Призри милостиво на мя недостойнаго, многими беззаконии непотребна себе сотворшаго раба твоего (имя), к раце мощей твоих (ко святей иконе твоей) ныне притекающа и из глубины сердца к тебе взывающа. Ты в житии твоем ревнитель и защитник православный веры был еси: и нас в ней теплыми твоими к Богу молитвами непоколебимы утверди. Ты великое возложенное на тя служение тщательно проходил еси: и нас твоею помощию пребывати коегождо, в неже призван есть, настави. Ты, победив полки супостата, от пределов Российских того отгнал еси: и на нас ополчающихся всех видимых и невидимых врагов низложи. Ты, оставив тленный венец царства земнаго, избрал еси безмолвное житие, и ныне праведно венцем нетленным увенчанный на небесех царствуеши: исходатайствуй и нам, смиренно молим тя, житие тихое и безмятежное, и к вечному Царствию шествие неуклонное твоим предстательством устрой нам. Предстоя же со всеми святыми престолу Божию, молися о всех православных христианех, да сохранит их Господь Бог Своею благодатию в мире, здравии, долгоденствии и всяком благополучии в должайшая лета, да присно славим и благословим Бога в Троице Святей славимаго, Отца и Сына и Святаго Духа, ныне и присно и во веки веков.

                                Молитва пред иконой Божией Матери «Целительница»
                                Тропарь, глас 4-й

                                Яко Пресветлая Звездо, просия Божественными чудесы святый Твой образ Целительнице. Подаждь убо и нам, Богородице Марие, исцеление недугов душевных и телесных, спасение и велию милость.

                                Молитва

                                Приими, о, Всеблагословенная и Всемощная Госпоже Владычице Богородице Дево, сия молитвы, со слезами Тебе ныне приносимыя от нас, недостойных раб Твоих, ко Твоему цельбоносному образу пение возсылающих со умилением, яко Тебе Самой зде сущей и внемлющей молению нашему. По коемуждо бо прошению исполнение твориши, скорби облегчаеши, немощным здравие даруеши, разслабленныя и недужныя исцеляеши, от бесных бесы прогоняеши, обидимыя от обид избавлявши, прокаженныя очищаеши и малыя дети милуеши; еще же, Госпоже Владычице Богородице, и от уз и темниц свобождаеши и всякия многоразличныя страсти врачуеши: вся бо суть возможна ходатайством Твоим к Сыну Твоему, Христу Богу нашему. О Всепетая Мати, Пресвятая Богородице! Не престай молитися о нас недостойных рабах Твоих, славящих Тя и почитающих Тя, и поклоняющихся со умилением Пречистому образу Твоему, и надежду имущих невозвратну и веру несумненну к Тебе, Приснодеве Преславней и Непорочней, ныне и присно и во веки веков. Аминь.



                                Молитва пред иконой Божией Матери «Умиление»
                                Приими, всеблагомощная, Пречистая Госпоже Владычице Богородительнице, сия честные дары, Тебе единей прикладныя, от нас, недостойных рабов Твоих: от всех родов избранная, всех тварей небесных и земных высшая явльшаяся, понеже бо Тебе ради бысть Господь Сил с нами, и Тобою Сына Божия познахом и сподобихомся святаго Тела Его и пречистыя Крове Его; темже блаженна еси в родех родов, Богоблаженная, Херувимов светлейши и Серафимов честнейши сущая. И ныне, всепетая Пресвятая Богородице, не престай молящися о нас, недостойных рабех Твоих, еже избавитися нам от всякаго совета лукаваго и всякаго обстояния и сохранитися нам неврежденным от всякаго ядовитаго прилога диавольскаго; но даже до конца молитвами Твоими неосужденных нас соблюди, яко да Твоим заступлением и помощию спасаеми, славу, хвалу, благодарение и поклонение за вся в Троице Единому Богу и всех Создателю возсылаем, ныне и присно, и во веки веков. Аминь.


                                Молитва пред иконой Божией Матери «Умягчение злых сердец»
                                О многострадальная Мати Божия, Превысшая всех дщерей земли, по чистоте Своей и по множеству страданий, Тобою на земли перенесенных, приими многоболезненныя воздыхания наша и сохрани нас под кровом Твоея милости. Иного бо прибежища и теплаго предстательства разве Тебе не вемы, но, яко дерзновение имущая ко Иже из Тебе рожденному, помози и спаси ны молитвами Своими, да непреткновенно достигнем Царствия Небеснаго, идеже со всеми святыми будем воспевать в Троице Единому Богу ныне и присно, и во веки веков. Аминь.


                                Молитва пред иконой Божией Матери "Казанская"
                                Благословление на вступление в брак
                                Тропарь, глас 4-й

                                Заступнице усердная, Мати Господа Вышняго! За всех моли́ши Сына Твоего, Христа Бога нашего, и всем твориши спастися, в державный Твой покров прибегающим. Всех нас заступи, о Госпоже, Царице и Владычице, иже в напастех и в скорбех и в болезнех, обремененных грехми многими, предстоящих и молящихся Тебе умиленною душею и сокрушенным сердцем пред Пречистым Твоим образом со слезами, и невозвратно надежду имущих на Тя избавления всех зол. Всем полезная даруй и вся спаси, Богородице Дево: Ты бо еси Божественный покров рабом Твоим.

                                Кондак, глас 8-й

                                Притецем, людие, к тихому сему и доброму пристанищу, скорой Помощнице, готовому и теплому спасению, покрову Девы; ускорим на молитву и потщимся на покаяние: источает бо нам неоскудныя милости Пречистая Богородица, предваряет на помощь и избавляет от великих бед и зол благонравныя и богобоящияся рабы Своя.

                                Молитва

                                О Пречистая Владычице Богородице, Царице небеси и земли, вышшая Ангел и Архангел и всея твари честнейшая, чистая Дево Марие, миру благая помощнице и всем людем утверждение и во всяких нуждах избавление! Призри и ныне, Госпоже Всемилостивая, на рабы Твоя, Тебе умиленною душею и сокрушенным сердцем молящияся, со слезами к Тебе припадающия пречистому и цельбоносному образу Твоему, и помощи и заступления Твоего просящия. О Всемилостивая и Премилосердая Дево Богородице чтимая! Воззри, Госпоже, на люди Твоя: мы бо, грешнии, не имамы иныя помощи, разве Тебе и от Тебя рождшагося Христа Бога нашего. Ты еси заступница и предстательница наша, Ты еси обидимым защищение. Скорбящим радование, сирым прибежище, вдовам хранительница, девам слава, плачущим веселие, больным посещение, немощным исцеление, грешным спасение. Сего ради, о Богомати, к Тебе прибегаем и на Твой пречистый образ с превечным на руку Твоею держимым младенцем, Господем нашим Иисусом Христом взирающе, умиленное пение Тебе приносим и вопием: помилуй нас, Мати Божия, и прошение наше исполни, вся бо суть возможна ходатайству Твоему: яко Тебе слава подобает ныне и присно и во веки веков. Аминь.


                                Молитва пред иконой Божией Матери «Скоропослушница»
                                Тропарь, глас 4-й

                                К Богородице притецем сущии в бедах, и святей иконе Ея ныне припадем, с верою зовуще из глубины души: скоро наше услыши моление, Дево, яко Скоропослушница нарекшаяся, Тебе бо ради раби Твои в нужду готовую помощницу имамы.

                                Кондак, глас 8-й

                                В море житейстем обуреваемии, треволнению подпадаем страстей и искушений. Подаждь убо нам, Госпоже, руку помощи, якоже Петрови Сын Твой, и ускори от бед избавити ны, да зовем Ти: радуйся, всеблагая Скоропослушнице.

                                Молитва

                                Преблагословенная Владычице, Приснодево Богородице, Бога Слова паче всякаго слова на спасение наше рождшая, и благодать Его преизобильно паче всех приявшая, море явльшаяся Божественных дарований и чудес приснотекущая река, изливающая благость всем, с верою к Тебе прибегающим! Чудотворному Твоему образу припадающе, молимся Тебе, всещедрей Матери человеколюбиваго Владыки: удиви на нас пребогатыя милости Твоя и прошения наша, приносимая Тебе, Скоропослушнице, ускори исполнити все, еже на пользу во утешение и спасение коемуждо устрояющи. Посети, Преблагая, рабы Твоя благодатию Твоей, подаждь недугующим цельбу и совершенное здравие, обуреваемым тишину, плененным свободу, и различными образы страждущих утеши. Избави, Всемилостивая Госпоже, всяк град и страну от глада, язвы, труса, потопа, огня, меча и иныя казни временныя и вечныя, Матерним Твоим дерзновением отвращающи гнев Божий; и душевнаго разслабления, обуревания страстей и грехопадений свободи рабы Твоя, яко да непреткновенно во всяком благочестии поживше в сем веце, и в будущем вечных благ сподобимся благодатию и человеколюбием Сына Твоего и Бога, Емуже подобает всякая слава, честь и поклонение со Безначальным Его Отцем и Пресвятым Духом, ныне и присно и во веки веков. Аминь.

                                Молитва пред иконой Божией Матери «Феодоровская»
                                Тропарь, глас 4-й

                                Пришествием честныя Твоея иконы, Богоотроковице, обрадованный днесь, богохранимый град Кострома, якоже древний Израиль к кивоту завета, притекает ко изображению лица Твоего и воплотившагося от Тебе Бога нашего, да Твоим Матерним к нему предстательством присно ходатайствуеши всем под сень крова Твоего прибегающим мир и велию милость.

                                Кондак, глас 1-й

                                Взбранней Воеводе, Пренепорочней Деве Богородице, Заступнице нашей и Предстательству христиан непостыдному, явлением чудныя иконы Своея радование подавшей земле Российстей и вся верныя чада Церкве просветившей, благодарение усердно приносим Ти, Богородице, и припадающе пречудному образу Твоему, умильно глаголем. Спаси, Госпоже, и помилуй рабы Твоя, зовущия: Радуйся, Матерь Божия, Предстательнице и Заступнице наша усердная.

                                Молитва

                                К кому воззову, Владычице, к кому прибегну в печали моей; к кому принесу слезы и воздыхания моя, аще не к Тебе, Царице Небеси и земли: кто исторгнет мя от тины грехов и беззаконий, аще не Ты, о Мати Живота, Заступнице и Прибежище рода человеческаго. Услыши стенание мое, утеши мя и помилуй в горести моей, защити в бедах и напастях, избави от озлоблений и скорбей, и всяких недугов, и болезней, от враг видимых и невидимых, умири вражду стужающих мне, да избавлен буду от клеветы и злобы человеческия; такожде от своея ми плоти гнусных обычаев свободи мя. Укрый мя под сению милости Твоея, да обрящу покой и радость и от грехов очищение. Твоему Матернему заступлению себе вручаю; буди мне Мати и надеждо, покров, и помощь, и заступление, радость и утешение, и скорая во всем Помощнице. О чудная Владычице! Всяк притекает к Тебе, без Твоея всесильныя помощи не отходит; сего ради и аз недостойный к Тебе прибегаю, да избавлен буду от внезапныя и лютыя смерти, скрежета зубнаго и вечнаго мучения. Небесное же Царствие получити сподоблюся и Тебе во умилении сердца реку: Радуйся, Мати Божия, Предстательница и Заступница наша усердная, во веки веков. Аминь.

                                Молитва пред иконой Божией Матери «Прибавление ума»
                                Тропарь, глас 4-й

                                О Преславная Мати Христа Бога нашего, благих Подателя, милостию Своею всю вселенную сохрани, даруй нам, рабом Твоим, премудрость и разум, светом Сына Твоего души наша просвети, едина Всепетая, от Херувим и Серафим славимая.

                                Кондак, глас 2-й

                                Яко Единицы умом нас просвещающую, хвалим Тя, Пречистая, Мати Разума, всю вселенную держащаго, Красото мира видимаго и невидимаго, лучами жизни нас озаряющая.

                                Молитва

                                О Пресвятая Дево! Ты — Невеста Бога Отца и Матерь Божественнаго Его Сына Иисуса Христа! Ты — Царица Ангелов и спасение людей, обличительница грешников и наказательница богоотступников. Помилуй и нас, тяжко согрешивших и не исполнивших заповедей Божиих, нарушивших обеты крещения и обеты монашества и многие другие, которые обещали исполнять. Когда Дух Святый отступил от царя Саула, тогда боязнь и уныние напали на него и тьма отчаяния и безрадостное состояние души мучили его. Теперь и мы за грехи наши все лишились благодати Духа Святаго. Ум осуетился суетою помышлений, забвение о Боге омрачило души наша, и теперь теснят сердце всякаго рода печали, скорби, болезни, ненависть, зло, вражда, мстительность, злорадство и прочие грехи. И, не имея радости и утешения, зовем к Тебе, Мати Бога нашего Иисуса Христа, да умолиши Сына Твоего простить нам все наши согрешения и послать к нам Духа Утешителя, как послал Он Его на апостолов, да утешенные и просвещенные Им воспоим Тебе благодарственную песнь: радуйся Пресвятая Богородице, ко спасению прибавившая нам ума. Аминь.

                                Молитва ко Пресвятой Богородице
                                Милосердия двери отверзи нам, Благословенная Богородице, надеющиися на Тя, да не погибнем, но да избавимся Тобою от бед, Ты бо еси спасение рода христианскаго. Радуйся, Едина Пречистая Мати Единаго Создателя, Господа, Бога и Спаса нашего, Иисуса Христа! Буди ми Ходатаица в день страшнаго испытания, егда предстану Престолу Нелицемернаго Судии, яко да огненнаго прещения муки избавлюся молитвами Твоими, Едина Благословенная. Пресвятая Богородице, спаси нас!

                                Святителю Николаю Чудотворцу
                                Добавить в  Любимые закладки

                                О, всесвятый Николае, угодниче преизрядный Господень, теплый наш заступниче, и везде в скорбех скорый помощниче! Помози мне грешному и унылому в настоящем сем житии, умоли Господа Бога даровати ми оставление всех моих грехов, елико согреших от юности моея, во всем житии моем, делом, словом, помышлением и всеми моими чувствы; и во исходе души моея помози ми окаянному, умоли Господа Бога, всея твари Содетеля, избавити мя воздушных мытарств и вечного мучения: да всегда прославляю Отца и Сына и Святаго Духа, и твое милостивное предстательство, ныне и присно и во веки веков. Аминь.



                                Тропарь, глас 4
                                Правило веры и образ кротости, воздержания учителя яви тя стаду твоему яже вещей истина; сего ради стяжал еси смирением высокая, нищетою богатая, отче священноначальниче Николае, моли Христа Бога спастися душам нашим.



                                Кондак, глас 3
                                В Мирех, святе, священнодействитель показался еси: Христово бо, преподобне, Евангелие исполнив, положил душу твою о людех твоих, и спасл еси неповинныя от смерти; сего ради освятился еси, яко великий таинник Божия благодати.






                                Святому апостолу и евангелисту Иоанну Богослову
                                О великий апостоле, евангелисте громогласный, Богослове изящнейший, тайноведче непостижимых откровений, девственниче и возлюбленнейший наперсниче Христов Иоанне, приими со свойственным тебе милосердием нас, грешных (имена), прибегающих под твое сильное заступление и покровительство! Испроси Всещедраго Человеколюбца Христа и Бога нашего, Иже пред очесы твоими излиял еси кровь Свою дражайшую за нас, непотребных рабов Своих, да не помянет беззаконий наших, но да помилует нас, и да сотворит с нами по милости Своей; да дарует нам здравие душевное и телесное, всякое благоденствие и изобилие, научая нас обращати вся оная в славу Его, Творца, Спасителя и Бога нашего. По кончине же временныя жизни нашея да избегнем мы, святый апостоле, немилосердных истязаний, на воздушных мытарствах нас ожидающих, но да достигнем под твоим руководством и покровительством Горняго онаго Иерусалима, егоже славу во откровении ты зрел еси, а ныне наслаждаешися оныя радости, обещанныя избранным Божиим. О великий Иоанне, сохрани вся грады и страны христианская, весь сию, храм сей, посвященный святому твоему имени, служащих и молящихся в нем, от глада, губительства, труса и потопа, огня, меча, нашествия иноплеменных и междоусобныя брани, избави от всякия беды и напасти, и молитвами твоими отврати от нас праведный гнев Божий, и испроси нам Его милосердие; О великий и непостижимый Боже, Альфо и Омего, источниче и предмете нашея веры! Се на умоление Тебе предлагаем святаго Иоанна, егоже Ты сподобил еси познати Тебе, неисповедимаго Бога, в неизреченном откровении. Приими его о нас ходатайство даруй нам исполнение прошений наших, во славу Твою: а паче всего соверши нас духовным совершенством, к наслаждению жизни нескончаемыя в Небесных Твоих обителех. О Небесный Отче, создавый вся Владыко, Душе духов, Всесильный Царю! Коснися перстом Твоим сердец наших, да и они, растаявше, яко воск, пролиются пред Тобою, и бренная тварь духовна сотворится, в честь и славу Отца и Сына и Святаго Духа. Аминь.


                                Преподобному Серафиму Саровскому чудотворцу
                                О пречудный отче Серафиме, великий Саровский чудотворче, всем прибегающим к тебе скоропослушный помощниче! Во дни земнаго жития твоего никтоже от тебе тощь и неутешен отыде, но всем в сладость бысть видение лика твоего и благоуветливый глас словес твоих. К сим же и дар исцелений, дар прозрения, дар немощных душ врачевания обилен в тебе явися. Егда же призва тя Бог от земных трудов к небесному упокоению, николиже любы твоя преста от нас, и невозможно есть исчислити чудеса твоя, умножившаяся, яко звезды небесныя; се бо по всем концем земли нашея людем Божиим являешися и даруеши им исцеления. Темже и мы вопием ти: о, претихий и кроткий угодниче Божий, дерзновенный к Нему молитвенниче, николиже призывающих тя отреваяй! Вознеси о нас благомощную твою молитву ко Господу сил, да дарует нам вся благопотребная в жизни сей и вся к душевному спасению полезная, да оградит нас от падений греховных и истинному покаянию да научит нас, во еже безпреткновенно внити нам в вечное Небесное Царство, идеже ты ныне в незаходимей сияеши славе, и тамо воспевати со всеми святыми Живоначальную Троицу во веки веков. Аминь.


                                Преподобному Силуану Афонскому
                                О предивный угодниче Божий, отче Силуане! По благодати, тебе от Бога данной, слезно молитися о всей вселенней — мертвых, живых и грядущих — не премолчи за нас ко Господу, к тебе усердно припадающих и твоего предстательства умильно просящих (имена). Подвигни, о всеблаженне, на молитву Усердную Заступницу рода христианского, Преблагословенную Богородицу и Приснодеву Марию, чудно призвавшую тя быти верным делателем в Ея земном вертограде, идеже избранницы Божии о гресех наших милостива и долготерпелива быти Бога умоляют, во еже не помянута неправд и беззаконий наших, но по неизреченной благости Господа нашего Иисуса Христа ущедрити и спасти нас по велицей Его милости. Ей, угодниче Божий, с Преблагословенною Владычицею мира — Святейшею Игумениею Афона и святыми подвижниками Ея земнаго жребия испроси у святых святейшего Слова святей горе Афонской и боголюбивым пустынножителем ея от всех бед и наветов вражиих в мире сохранитися. Да Ангелы святыми от зол избавляеми и Духом Святым в вере и братолюбии укрепляеми, до скончания века о Единей, Святей, Соборней и Апостольстей Церкви молитвы творят и всем спасительный путь указуют, да Церковь земная и Небесная непрестанно славословит Творца и Отца Светов, просвещающи и освещающи мир в вечной правде и благости Божией. Народом земли всей испроси благоденственное и мирное житие, дух смиренномудрия и братолюбия, добронравия и спасения, дух страха Божия. Да не злоба и беззаконие ожесточают сердца людския, могущие истребите любовь Божию в человецех и низвергнуть их в богопротивную вражду и братоубийство, но в силе Божественныя любве и правды, якоже на небеси и на земли да святится имя Божие, да будет воля Его святая в человецех, и да воцарится мир и Царствие Божие на земли. Такожде и земному Отечеству твоему — земли Российстей испроси, угодниче Божий, вожделенный мир и небесное благословение, во еже всемощным омофором Матере Божия покрываему, избавитися ему от глада, губительства, труса, огня, меча, нашествия иноплеменников и междоусобныя брани и от всех враг видимых и невидимых, и тако святейшим домом Преблагословенныя Богородицы до скончания века ему пребыти, Креста Животворящаго силою, и в любви Божией неоскудеваему утвердитися. Нам же всем, во тьму грехов погружаемым и покаяния тепла, ниже страха Божия не имущим и сице безмерно любящаго нас Господа непрестанно оскорбляющим, испроси, о всеблаженне, у Всещедраго Бога нашего, да Своею Всесильною благодатию божественне посетит и оживотворит души наша, и всяку злобу и гордость житейскую, уныние и нерадение в сердцах наших да упразднит. Еще молимся, о еже и нам, благодатию Всесвятаго Духа укрепляемым и любовию Божию согреваемым, в человеколюбии и братолюбии, смиренномудренном сраспинании друг за друга и за всех, в правде Божией утвердитися и в благодатной любви Божией благонравно укрепитися, и сынолюбне Тому приближитися. Да тако, творяще Его всясвятую волю, во всяком благочестии и чистоте временнаго жития путь непостыдно прейдем и со всеми святыми Небеснаго Царствия и Его Агнчаго брака сподобимся. Ему же от всех земных и небесных да будет слава, честь и поклонение, со Безначальным Его Отцем, Пресвятым и Благим и Животворящим Его Духом, ныне и присно и во веки веков. Аминь.


                                Благоверному князю Петру и княгине Февронии, Муромским чудотворцам
                                О велиции угодницы Божии и предивнии чудотворцы, благовернии княже Петре и княгине Февроние, града Мурома предстателие и хранителие, и о всех нас усерднии ко Господу молитвенницы! К вам прибегаем и вам с упованием крепким молимся: вознесите о нас, грешных, святыя молитвы ваша ко Господу Богу, и испросите у благости Его вся благопотребная душам и телесем нашим: веру праву, надежду благу, любовь нелицемерну, благочестие непоколебимо, в добрых делех преуспеяние, мира умирение, земли плодоносие, воздуха благорастворение, телесем здравие и душам спасение. Исходатайствуйте у Царя Небеснаго Церкви Святей и всей державе Российстей мир, тишину и благоустроение, и всем нам житие благополучное и добрую христианскую кончину. Оградите Отечество ваше и вся грады Российския от всякаго зла; и вся правоверныя люди, к вам приходящия и святым мощем вашим поклоняющиеся, осените благодатным действом богоприятных молитв ваших, и вся прошения их во благо исполните. Ей, чудотворцы святии! Не презрите молитв наших, со умилением вам днесь возносимых, но будите о нас приснии предстателие ко Господу, и сподобите нас помощию вашею спасение вечное улучити и Царствие Небесное унаследовати: да славословим неизреченное человеколюбие Отца и Сына и Святаго Духа, в Троице покланяемаго Бога, во веки веков. Аминь.


                                Молитва святителю Спиридону Тримифунтскому
                                Молитва первая
                                О Великий и пречудный святителю Христов и чудотворче Спиридоне, Керкирская похвало, всея вселенныя светильниче пресветлый, теплый к Богу молитвенниче и всем к тебе прибегающим и с верою молящимся скоропредстательный заступниче! Ты веру православную на Никейстем Соборе посреде отцев преславно изъяснил еси, ты единство Святыя Троицы чудесною силою показал еси и еретиков до конца посрамил еси. Услыши нас, грешных, святителю Христов, молящихся тебе, и сильным твоим предстательством у Господа избави нас от всякаго злаго обстояния: от глада, потопа, огня и смертоносныя язвы. Ты бо во временней жизни своей от всех сих бедствий избавлял еси людей твоих: от нашествия агарян и от глада страну твою сохранил еси, царя от неисцельнаго недуга избавил и многия грешники к покаянию привел еси, мертвых преславно воскрешал еси, за святость же жития твоего Ангелы невидимо в церкви поющия и сослужащия тебе имел еси. Сице убо прослави тебе, вернаго Своего раба, Владыка Христос, яко вся тайная человеческая деяния дарова тебе разумети и обличати неправедно живущия. Многим в скудости и недостаточестве живущим ты усердно помогал еси, люди убогия изобильно во время глада напитал еси и ина многа знамения силою в тебе живущаго Духа Божия сотворил еси. Сице и нас не остави, святителю Христов, поминай нас, чад своих, у Престола Вседержителя и умоли Господа, да подаст многих наших грехов прощение, безбедное и мирное житие да дарует нам, кончины же живота непостыдныя и мирныя и блаженства вечнаго в будущем веце сподобит нас, да выну возсылаем славу и благодарение Отцу, и Сыну, и Духу Святому, ныне и присно и во веки веков. Аминь.

                                Молитва вторая
                                О всеблаженне святителю Спиридоне, великий угодниче Христов и преславный чудотворче! Предстояй на Небеси Престолу Божию с лики Ангел, призри милостивым оком на предстоящия зде люди и просящий сильныя твоея помощи. Умоли благоутробие Человеколюбца Бога, да не осудит нас по беззакониим нашим, но да сотворит с нами по милости Своей! Испроси нам у Христа и Бога нашего мирное и безмятежное житие, здравие душевное и телесное, земли благоплодие и во всем всякое изобилие и благоденствие, и да не во зло обратим благая, даруемая нам от щедраго Бога, но во славу Его и в прославление твоего заступления! Избави всех верою несумненною к Богу приходящих от всяких бед душевных и телесных. от всех томлений и диавольских наветов! Буди печальным утешитель, недугующим врач, в напастех помощник, нагим покровитель, вдовицам заступник, сирым защитник, младенцем питатель, старым укрепитель, странствующим путевождь, плавающим кормчий и исходатайствуй всем крепкия помощи твоея требующим вся, яже ко спасению, полезная! Яко да твоими молитвами наставляеми и соблюдаеми, достигнем в вечный покой и купно с тобою прославим Бога, в Троице Святей славимаго, Отца и Сына и Святаго Духа, ныне и присно и во веки веков. Аминь.

                                Молитва третья
                                О преблаженне святителю Спиридоне! Умоли благосердие Человеколюбца Бога, да не осудит нас по беззаконием нашим, но да сотворит с нами по милости Своей. Испроси нам, рабам Божиим (имена), у Христа и Бога нашего мирное и безмятежное житие, здравие душевное и телесное. Избави нас от всяких бед душевных и телесных, от всех томлений и диавольских наветов. Поминай нас у престола Вседержителя и умоли Господа, да подаст многих наших грехов прощение, безбедное и мирное житие, да дарует нам, кончины же живота непостыдныя и мирныя и блаженства вечнаго в будущем веце сподобит нас, да непрестанно возсылаем славу и благодарение Отцу и Сыну и Духу Святому, ныне и присно и во веки веков.


                                Преподобному Сергию Радонежскому
                                О священная главо, преподобне и богоносне отче наш Сергие, молитвою твоею, и верою и любовию, яже к Богу, и чистотою сердца, еще на земли во обитель Пресвятыя Троицы душу твою устроивый, и ангельскаго общения и Пресвятыя Богородицы посещения сподобивыйся, и дар чудодейственныя благодати приемый, по отшествии же твоем от земных наипаче к Богу приближивыйся и небесныя силы приобщивыйся, но от нас духом любве твоея не отступивый, и честныя твоя мощи, яко сосуд благодати полный и преизливающийся, нам оставивый! Велие имея дерзновение ко Всемилостивому Владыце, моли спасти рабы Его, сущей в тебе благодати Его верующия и к тебе с любовию притекающия. Испроси нам от Великодаровитаго Бога нашего всякий дар, всем и коемуждо благопотребен: веры непорочны соблюдение, градов наших утверждение, мира умирение, от глада и пагубы избавление, от нашествия иноплеменных сохранение, скорбящим утешение, недугующим исцеление, падшим возставление, заблуждающим на путь истины и спасения возвращение, подвизающимся укрепление, благоделающим в делех благих преспеяние и благословение, младенцем воспитание, юным наставление, неведущим вразумление, сиротам и вдовицам заступление, отходящим от сего временнаго жития к вечному благое уготовление и напутствие, отшедшим блаженное упокоение, и вся ны споспешествующими твоими молитвами сподоби в день Страшнаго Суда шуия части избавитися, десныя же страны общники быти и блаженный оный глас Владыки Христа услышати: «Приидите, благословеннии Отца Моего, наследуйте уготованное вам Царствие от сложения мира». Аминь.

                                Великомученику Георгию Победоносцу
                                Святый, славный и всехвальный великомучениче Христов Георгие! Собраннии во храме твоем и пред иконою твоею святою покланяющиися людие молим тя, известный желания нашего ходатаю: моли с нами и о нас умоляемаго от Своего благосердия Бога, да милостиво услышит нас, просящих Его благостыню (имена), и не оставит вся наша ко спасению и житию нужная прошения, и да укрепит же данною тебе благодатию во бранех православное воинство, и силы возстающих враг наших да низложит, да постыдятся и посрамятся, и дерзость их да сокрушится, и да уведят, яко мы имамы Божественную помощь: и всем в скорби и обстоянии сущим многомощное яви твое заступление: умоли Господа Бога, всея твари Создателя, избавити нас от вечнаго мучения, да всегда прославляем Отца и Сына и Святаго Духа, и твое исповедуем предстательство, ныне и присно и во веки веков.
                                Великомученику Георгию Победоносцу
                                Тропарь, глас 4-й

                                Яко пленных свободитель, и нищих защититель, немощствующих врач, православных поборниче, победоносче великомучениче Георгие, моли Христа Бога спастися душам нашим.

                                Кондак, глас 4-й

                                Возделан от Бога, показался еси благочестия делатель честнейший, добродетелей рукояти собра в себе: сеяв бо в слезах, веселием жнеши: страдальчествовав же кровию, Христа приял еси: и молитвами, святе, твоими всем подаеши прегрешений прощение.

                                Молитва

                                Святый, славный и всехвальный великомучениче Христов Георгие! Собраннии во храме твоем и перед иконою твоею святою покланяющиися людие, молим тя, известный желания нашего ходатаю: моли с нами и о нас умоляемаго от Своего благоутробия Бога, да милостивно услышит нас, просящих Его благостыню, и не оставит вся наша ко спасению и житию нуждная прошения, и да укрепит же данною тебе благодатию во бранех православное воинство, разрушит силы возстающих враг, да постыдятся и посрамятся, и дерзость их да сокрушится, и да уведят, яко мы имамы божественную помощь; и всем в скорби и обстоянии сущим многомощное яви твое заступление. Умоли Господа Бога, всея твари Создателя, избавити нас от вечнаго мучения, да всегда прославляем Отца и Сына и Святаго Духа, и твое исповедуем предстательство, ныне и присно и во веки веков. Аминь.


                                Благоверному князю Петру и княгине Февронии, Муромским чудотворцам
                                О велиции угодницы Божии и предивнии чудотворцы, благовернии княже Петре и княгине Февроние, града Мурома предстателие и хранителие, и о всех нас усерднии ко Господу молитвенницы! К вам прибегаем и вам с упованием крепким молимся: вознесите о нас, грешных, святыя молитвы ваша ко Господу Богу, и испросите у благости Его вся благопотребная душам и телесем нашим: веру праву, надежду благу, любовь нелицемерну, благочестие непоколебимо, в добрых делех преуспеяние, мира умирение, земли плодоносие, воздуха благорастворение, телесем здравие и душам спасение. Исходатайствуйте у Царя Небеснаго Церкви Святей и всей державе Российстей мир, тишину и благоустроение, и всем нам житие благополучное и добрую христианскую кончину. Оградите Отечество ваше и вся грады Российския от всякаго зла; и вся правоверныя люди, к вам приходящия и святым мощем вашим поклоняющиеся, осените благодатным действом богоприятных молитв ваших, и вся прошения их во благо исполните. Ей, чудотворцы святии! Не презрите молитв наших, со умилением вам днесь возносимых, но будите о нас приснии предстателие ко Господу, и сподобите нас помощию вашею спасение вечное улучити и Царствие Небесное унаследовати: да славословим неизреченное человеколюбие Отца и Сына и Святаго Духа, в Троице покланяемаго Бога, во веки веков. Аминь.

                                Великомученику и целителю Пантелеимону
                                Тропарь, глас 3

                                Страстоте́рпче святы́й и целе́бниче Пантелеи́моне, / моли́ Ми́лостивого Бо́га, / да прегреше́ний оставле́ние // пода́ст душа́м на́шим.

                                Кондак, глас 5

                                Подража́тель сый Ми́лостиваго, / и исцеле́ний благода́ть от Него́ прие́м,/ страстоте́рпче и му́чениче Христа́ Бо́га, / моли́твами твои́ми душе́вныя на́ша неду́ги исцели́, / отгоня́ при́сно борца́ собла́зны от вопию́щих ве́рно: // спаси́ ны, Го́споди.

                                Величание

                                Велича́ем тя, / святы́й великому́чениче Пантелеи́моне, / и чтим честна́я страда́ния твоя́, // я́же за Христа́ претерпе́л еси́.

                                Моли́тва первая

                                О вели́кий Христо́в уго́дниче и пресла́вный целе́бниче, великому́чениче Пантелеи́моне! Душе́ю на Небеси́ Престо́лу Бо́жию предстоя́й и триипоста́сныя Его́ сла́вы наслажда́яйся, те́лом же и ли́ком святы́м на земли́ в Боже́ственных хра́мех почива́яй и да́нною ти свы́ше благода́тию разли́чная чудеса́ источа́яй, при́зри ми́лостивным твои́м о́ком на предстоя́щия лю́ди, честне́й твое́й иконе уми́льно моля́щияся и прося́щия от тебе́ целе́бныя по́мощи и заступле́ния: простри́ ко Го́споду Бо́гу на́шему те́плыя твоя́ моли́твы и испроси́ душа́м на́шим оставле́ние согреше́ний. Се бо мы, за беззако́ния на́ша не сме́юще возвести́ о́че́са́ на́ша к высоте́ небе́сней, ниже́ во́зне́сти́ глас моле́бный к Его́ в Божестве́ непристу́пней сла́ве, се́рдцем сокруше́нным и ду́хом смире́нным тебе́, хода́тая ми́лостива ко Влады́це и моли́твенника за ны, гре́шныя, призыва́ем, я́ко ты прия́л еси́ благода́ть от Него́ неду́ги отгоня́ти и стра́сти исцеля́ти. Тебе́ у́бо про́сим: не пре́зри нас, недосто́йных, моля́щихся тебе́ и твое́й по́мощи тре́бующих. Бу́ди нам в печа́лех уте́шитель, в неду́зех лю́тых стра́ждущим врач, напа́ствуемым ско́рый покрови́тель, очесе́м неду́гующим прозре́ния да́тель, ссу́щим и младе́нцем в боле́знех гото́вейший предста́тель и исцели́тель: исхода́тайствуй всем вся, я́же ко спасе́нию поле́зная, я́ко да твои́ми ко Го́споду Бо́гу моли́твами получи́вше благода́ть и ми́лость, просла́вим всех благи́х Исто́чника и Даропода́теля Бо́га, Еди́наго в Тро́ице Святе́й сла́вимаго Отца́ и Сы́на и Свята́го Ду́ха, ны́не и при́сно и во ве́ки веко́в. Ами́нь.

                                Моли́тва вторая

                                О, святы́й великому́чениче и цели́телю Пантелеи́моне, Бо́га ми́лостиваго подража́телю! При́зри благосе́рдием и услы́ши нас, гре́шных, пред святою твое́ю ико́ною усе́рдне моля́щихся, испроси́ нам у Го́спода Бо́га, Ему́же со а́нгелы предстоиши на небеси́, оставле́ние грехо́в и прегреше́ний на́ших: исцели́ боле́зни душе́вныя и теле́сныя рабо́в Бо́жиих, ны́не поминаемых, зде предстоя́щих и всех христиа́н правосла́вных к твоему́ заступле́нию притека́ющих: се бо, грех на́ших ра́ди, лю́те одержимы есмы мно́гими неду́ги и не и́мамы по́мощи и утеше́ния: к тебе́ же прибега́ем, я́ко дадеся ти благода́ть молитися за ны и целити всяк неду́г и вся́ку боле́знь: да́руй у́бо всем нам святы́ми моли́твами твои́ми здра́вие и бла́гомощие ду́ши и те́ла, преспеяние ве́ры и благоче́стия и вся к житию вре́менному и ко спасе́нию потре́бная, я́ко да сподобившеся тобо́ю вели́ких и богатых ми́лостей, просла́вим тя и Пода́теля всех благ, ди́внаго во святы́х Бо́га на́шего, Отца́ и Сы́на и Свята́го Ду́ха. Ами́нь.

                                Моли́тва третья

                                О, пресла́вный мучениче и до́блий во́ине Небе́снаго Царя́, Пантелеи́моне всеблаже́нне, милостиваго Бо́га преизрядный подража́телю, и́же Христа́ на земли́ дерзнове́нно исповедав и многообразныя за Него́ му́ки претерпев, неувядаемый прия́л еси́ вене́ц на небеси́, иде́же ве́чнаго наслажда́ешися блаже́нства и со дерзновением Престо́лу Трисо́лнечнаго Божества́ предстоиши! К твоему́ христоподражательному сострада́нию по Бо́зе прибега́ем вси мы гре́шнии и всеусе́рдно мо́лим тя, те́плаго засту́пника и предстателя на́шего: не престай призирати на нас, су́щих в нуждех и ско́рбных обстоя́ниих, и твое́ю молитвенною по́мощию и цельбоподательною си́лою избавляй нас при́сно от лю́тых зол, всегубительства и вся́кия ины́я беды́ и боле́зни. Ты бо прия́л еси́, свя́те, неоскудную благода́ть исцеле́ний от Спа́са на́шего Иису́са Христа́ за твердую твою́ к Нему́ ве́ру, при чистом и непорочном житии, запечатленную му́ченичеством и многопобе́дною твое́ю кончиною, в нейже по данней ти благода́ти и наименован от Христа́ Пантелеи́моном, ми́лости тезоимени́тым, милующим всех притека́ющих к тебе́ в ско́рбех и боле́знех. Сего́ ра́ди ве́дуще тя милостиваго ко всем помо́щника и исцелителя, с ве́рою взыва́ем к тебе́, услы́ши нас и богоприятным хода́тайством твои́м подавай нам вся благопотребная в житии сем и нужная к ве́чному спасе́нию. Му́ченическим же дерзновением твои́м умоли́ милостиваго Бо́га, да помилует нас, гре́шных и недосто́йных, по велицей ми́лости Свое́й, да изба́вит от тру́са, пото́па, огня́, меча́ и вся́каго пра́веднаго гнева и преще́ния, благовре́менне подвизая нас к очистительному и умилостивительному во гресе́х на́ших покаянию, ра́ди мно́жества щедро́т Свои́х, да пода́ст всем нам безбе́дное, ти́хое и богоугодное житие́, и всех нас от враго́в, ви́димых и неви́димых, да сохрани́т благода́тию Свое́ю и непобедимым ополче́нием а́нгел Свои́х, и́миже ограждаеми и наставляеми да поживем в веце сем в покая́нии, чистоте́ и в творении богоугодных дел; да сподо́бимся твои́м те́плым предста́тельством христианскую кончи́ну улучити безболе́зненну, ми́рну, непостыдну, избавитися от ко́зней воздушных князей тьмы и от ве́чныя му́ки и быти насле́дниками безконе́чнаго, всеблаже́ннаго ца́рствия. Ей, уго́дниче Бо́жий! Не престай молитися за ны, гре́шныя, да твои́м хода́тайством вре́менных и ве́чных бед избавлени, велича́ем тебе́, засту́пника на́шего и моли́твенника, и вечно прославляем общаго Влады́ку и Го́спода на́шего Иису́са Христа́, Ему́же подоба́ет всякая сла́ва, честь и поклоне́ние со Безнача́льным Его́ Отце́м и Пресвятым Ду́хом, ны́не и при́сно и во ве́ки веко́в. Ами́нь.






                                Молитвы об упокоении

                                Чин литии, совершаемой мирянином дома и на кладбище
                                Моли́твами святы́х оте́ц на́ших, Го́споди Иису́се Христе́, Бо́же наш, поми́луй нас. Ами́нь.

                                Сла́ва Тебе́, Бо́же наш, сла́ва Тебе́.

                                Святы́й Бо́же, Святы́й Кре́пкий, Святы́й Безсме́ртный, поми́луй нас. (Трижды)

                                Сла́ва Отцу́ и Сы́ну и Свято́му Ду́ху, и ны́не и при́сно и во ве́ки веко́в. Ами́нь.

                                Пресвята́я Тро́ице, поми́луй нас; Го́споди, очи́сти грехи́ на́ша; Влады́ко, прости́ беззако́ния на́ша; Святы́й, посети́ и исцели́ не́мощи на́ша, и́мене Твоего́ ра́ди.

                                Го́споди, поми́луй. (Трижды)

                                Сла́ва Отцу́ и Сы́ну и Свято́му Ду́ху, и ны́не и при́сно и во ве́ки веко́в. Ами́нь.

                                Отче наш, Иже еси́ на небесе́х! Да святи́тся и́мя Твое́, да прии́дет Ца́рствие Твое́, да бу́дет во́ля Твоя́, я́ко на небеси́ и на земли́. Хлеб наш насу́щный даждь нам днесь; и оста́ви нам до́лги на́ша, я́коже и мы оставля́ем должнико́м на́шим; и не введи́ нас во искуше́ние, но изба́ви нас от лука́ваго.

                                Го́споди, поми́луй. (12 раз)

                                Сла́ва Отцу́ и Сы́ну и Свято́му Ду́ху, и ны́не и при́сно и во ве́ки веко́в. Ами́нь.

                                Прииди́те, поклони́мся Царе́ви на́шему Бо́гу.

                                Прииди́те, поклони́мся и припаде́м Христу́, Царе́ви на́шему Бо́гу.

                                Прииди́те, поклони́мся и припаде́м Самому́ Христу́, Царе́ви и Бо́гу на́шему.

                                Псалом 90

                                Живы́й в по́мощи Вы́шняго, в кро́ве Бо́га Небе́снаго водвори́тся. Рече́т Го́сподеви: Засту́пник мой еси́, и Прибе́жище мое́, Бог мой, и упова́ю на Него́. Яко Той изба́вит тя от се́ти ло́вчи и от словесе́ мяте́жна, плещма́ Свои́ма осени́т тя, и под криле́ Его́ наде́ешися: ору́жием обы́дет тя и́стина Его́. Не убои́шися от стра́ха нощна́го, от стре́лы летя́щия во дни, от ве́щи во тьме преходя́щия, от сря́ща и бе́са полу́деннаго. Паде́т от страны́ твоея́ ты́сяща, и тма одесну́ю тебе́, к тебе́ же не прибли́жится: оба́че очи́ма твои́ма смо́триши, и воздая́ние гре́шников у́зриши. Яко Ты, Го́споди, упова́ние мое́, Вы́шняго положи́л еси́ прибе́жище твое́. Не прии́дет к тебе́ зло, и ра́на не прибли́жится телеси́ твоему́. Яко а́нгелом Свои́м запове́сть о тебе́, сохрани́ти тя во всех путе́х твои́х. На рука́х во́змут тя, да не когда́ преткне́ши о ка́мень ногу́ твою́. На а́спида и васили́ска насту́пиши, и попере́ши льва и зми́я. Яко на Мя упова́, и изба́влю и; покры́ю и, я́ко позна́ и́мя Мое́. Воззове́т ко Мне, и услы́шу его́; с ним есмь в ско́рби, изму́ его́, и просла́влю его́; долгото́ю дний испо́лню его́, и явлю́ ему́ спасе́ние Мое́.

                                Сла́ва Отцу́ и Сы́ну и Свято́му Ду́ху, и ны́не и при́сно и во ве́ки веко́в. Ами́нь.

                                Аллилу́иа, аллилу́иа, аллилу́иа, сла́ва Тебе́, Бо́же. (Трижды)

                                Тропарь, глас 4-й:

                                Со ду́хи пра́ведных сконча́вшихся, ду́шу раба́ Твоего́, Спа́се, упоко́й, сохраня́я ю во блаже́нной жи́зни, я́же у Тебе́, Человеколю́бче.

                                В поко́ищи Твое́м, Го́споди, иде́же вси святи́и Твои́ упокоева́ются, упоко́й и ду́шу раба́ Твоего́, я́ко Еди́н еси́ Человеколю́бец.

                                Сла́ва Отцу́ и Сы́ну и Свято́му Ду́ху.

                                Ты еси́ Бог, соше́дый во ад, и у́зы окова́нных разреши́мый, Сам и ду́шу раба́ Твоего́ упоко́й.

                                И ны́не и при́сно и во ве́ки веко́в. Ами́нь.

                                Еди́на Чи́стая и Непоро́чная Де́во, Бо́га без се́мени ро́ждшая, моли́ спасти́ся душе́ его́.

                                Седален, глас 5-й:

                                Поко́й, Спа́се наш, с пра́ведными раба́ Твоего́, и сего́ всели́ во дворы́ Твоя́, я́коже есть пи́сано, презира́я, я́ко Благ, прегреше́ния его́ во́льная и нево́льная, и вся я́же в ве́дении и не в ве́дении, Человеколю́бче.

                                Кондак, глас 8-й:

                                Со святы́ми упоко́й, Христе́, ду́шу раба́ Твоего́, иде́же несть боле́знь, ни печа́ль, ни воздыха́ние, но жизнь безконе́чная.

                                Икос:

                                Сам Еди́н еси́ Безсме́ртный, сотвори́вый и созда́вый челове́ка, земни́и у́бо от земли́ созда́хомся, и в зе́млю ту́южде по́йдем, я́коже повеле́л еси́, Созда́вый мя и реки́й ми: я́ко земля́ еси́, и в зе́млю отъи́деши, а́може вси челове́цы по́йдем, надгро́бное рыда́ние творя́ще песнь: аллилу́иа, аллилу́иа, аллилу́иа.

                                Досто́йно есть я́ко вои́стинну блажи́ти Тя, Богоро́дицу, Приснобла́же́нную и Пренепоро́чную и Ма́терь Бо́га на́шего. Честне́йшую Херуви́м и сла́внейшую без сравне́ния Серафи́м, без истле́ния Бо́га Сло́ва ро́ждшую, су́щую Богоро́дицу Тя велича́ем.

                                Сла́ва Отцу́ и Сы́ну и Свято́му Ду́ху, и ны́не и при́сно и во ве́ки веко́в. Ами́нь.

                                Го́споди, поми́луй. (Трижды) Благослови́.

                                Моли́твами святы́х оте́ц на́ших, Го́споди Иису́се Христе́, Бо́же наш, поми́луй нас. Ами́нь.

                                Во блаже́нном успе́нии ве́чный поко́й пода́ждь, Го́споди, усо́пшему рабу́ Твоему́ (имя), и сотвори́ ему́ ве́чную па́мять.

                                Ве́чная па́мять. (Трижды)

                                Душа́ его́ во благи́х водвори́тся, и па́мять его́ в род и род.


                                Молитвы о усопших
                                Молитва за всякого усопшего

                                Помяни, Господи Боже наш, в вере и надежди живота вечнаго преставльшагося раба Твоего, брата нашего (имя), яко Благ и Человеколюбец, отпущаяй грехи и потребляяй неправды, ослаби, остави и прости вся вольная его согрешения и невольная, избави его вечныя муки и огня геенскаго, и даруй ему причастие и наслаждение вечных Твоих благих, уготованных любящым Тя: аще бо и согреши, но не отступи от Тебе, и несумненно во Отца и Сына и Святаго Духа, Бога Тя в Троице славимаго, верова, и Единицу в Троице и Троицу в Единстве православно даже до последняго своего издыхания исповеда. Темже милостив тому буди, и веру яже в Тя вместо дел вмени, и со святыми Твоими яко Щедр упокой: несть бо человека, иже поживет и не согрешит. Но Ты Един еси кроме всякаго греха, и правда Твоя правда во веки, и Ты еси Един Бог милостей и щедрот, и человеколюбия, и Тебе славу возсылаем, Отцу и Сыну и Святому Духу, ныне и присно и во веки веков. Аминь.

                                Короткая молитва об усопшем

                                Упокой, Господи, души усопших раб Твоих: родителей моих, сродников, благодетелей (имена), и всех православных христиан, и прости им вся согрешения вольная и невольная, и даруй им Царствие Небесное.

                                Молитва родителей за умерших детей

                                Господи Иисусе Христе, Боже наш, Владыко живота и смерти, Утешителю скорбящих! С сокрушенным и умиленным сердцем прибегаю к Тебе и молюся Ти: помяни. Господи, во Царствии Твоем усопшаго раба Твоего, чадо мое (имя), и сотвори ему вечную память. Ты, Владыко живота и смерти, даровал еси мне чадо сие. Твоей же благой и премудрой воле изволися и отъяти е у мене. Буди благословенно имя Твое, Господи. Молю Тя, Судие неба и земли, безконечною любовию Твоею к нам, грешным, прости усопшему чаду моему вся согрешения его, вольная и невольная, яже словом, яже делом, яже ведением и неведением. Прости, Милостиве, и наша родительская согрешения, да не пребудут они на чадех наших: вем, яко множицею согрешихом пред Тобою, множицею не соблюдохом, не сотворихом, якоже заповедал еси нам. Аще же усопшее чадо наше, нашея или своея ради вины, бяше в житии сем, работая миру и плоти своея, и не паче Тебе, Господу и Богу своему: аще возлюби прелести мира сего, а не паче Слово Твое и заповеди Твоя, аще предавшеся сластем житейским, а не паче сокрушению о гресех своих, и в невоздержании бдение, пост и молитву забвению предавше — молю Тя усердно, прости, преблагий Отче, чаду моему вся таковыя прегрешения его, прости и ослаби, аще и ино злое сотвори в житии сем. Христе Иисусе! Ты воскресил еси дщерь Иаира по вере и молитве отца ея. Ты исцелил еси дщерь жены-хананеянки по вере и прошению матери ея: услыши убо и молитву мою, не презри и моления моего о чаде моем. Прости, Господи, прости вся согрешения его и, простив и очистив душу его, изми муки вечныя и всели со всеми святыми Твоими, от века благоугодившими Тебе, идеже несть болезнь, ни печаль, ни воздыхание, но жизнь безконечная: яко несть человек, иже жив будет и не согрешит, но Ты Един еси кроме всякаго греха: да егда имаши судити мирови, услышит чадо мое превожделенный глас Твой: приидите, благословенные Отца Моего, и наследуйте уготованное вам Царствие от сложения мира. Яко Ты еси Отец милостей и щедрот. Ты живот и воскрешение наше, и Тебе славу возсылаем со Отцем и Святым Духом, ныне и присно и во веки веков. Аминь.

                                Молитва детей об усопших родителях

                                Господи, Иисусе Христе, Боже наш! Ты — сирых хранитель, скорбящих прибежище и плачущих утешитель. Прибегаю к тебе аз, сирый, стеня и плача, и молюся Тебе: услыши моление мое и не отврати лица Твоего от воздыханий сердца моего и от слез очей моих. Молюся Тебе, милосердый Господи, утоли скорбь мою о разлучении с родившим и воспитавшим мя родителем моим (имя); душу же его, яко отшедшую к Тебе с истинною верою в Тя и с твердою надеждою на Твое человеколюбие и милость, приими в Царство Твое Небесное. Преклоняюсь пред Твоею святою волею, еюже отъят бысть у мене, и прошу Тя, не отыми точию от него милости и благосердия Твоего. Вем, Господи, яко Ты Судия мира сего, грехи и нечестия отцев наказуеши в детях, внуках и правнуках даже до третьяго и четвертого рода: но и милуеши отцев за молитвы и добродетели чад их, внуков и правнуков. С сокрушением и умилением сердца молю Тя, милостивый Судие, не наказуй вечным наказанием усопшаго незабвеннаго для мене раба Твоего, родителя моего (имя), но отпусти ему вся согрешения его вольная и невольная, словом и делом, ведением и неведением сотворенная им в житии его зде на земле, и по милосердию и человеколюбию Твоему, молитв ради Пречистыя Богородицы и всех святых, помилуй его и вечныя муки избави. Ты, милосердый Отче отцев и чад! Даруй мне, во вся дни жизни моея, до последняго издыхания моего, не преставати памятовати о усопшем родителе моем в молитвах своих, и умоляти Тя, праведнаго Судию, да вчиниши его в месте светле, в месте прохладне и в месте покойне, со всеми святыми, отнюду же отбеже всяка болезнь, печаль и воздыхание. Милостиве Господи! Приими днесь о рабе Твоем (имя) теплую молитву мою сию и воздай ему воздаянием Твоим за труды и попечения воспитания моего в вере и христианском благочестии, яко научившему мя первее всего ведети Тя, своего Господа, в благоговении молитися Тебе, на Тебе Единаго уповати в бедах, скорбех и болезнех и хранити заповеди Твоя; за благопопечение его о моем духовном преуспеянии, за тепле приносимыя им о мне моления пред Тобою и за все дары, им испрошенные мне от Тебе, воздай ему Своею милостию, Своими небесными благами и радостями в вечном Царствии Твоем. Ты бо еси Бог милостей и щедрот и человеколюбия, Ты покой и радость верных рабов Твоих, и Тебе славу возсылаем со Отцем и Святым Духом, и ныне и присно и во веки веков. Аминь.

                                Молитвы об усопшем муже

                                Христе Иисусе, Господи и Вседержителю! Ты плачущих утешение, сирых и вдовиц заступление. Ты рекл еси: призови Мя в день скорби твоея, и изму тя. Во дни скорби своея прибегаю к Тебе аз и молюся Ти: не отврати лица Твоего от мене и услыши моление мое, приносимое Тебе со слезами. Ты, Господи Владыко всяческих, благоволил еси сочетати мя с единым из рабов Твоих, во еже быти нам едино тело и един дух; Ты дал еси мне сего раба, яко сожителя и защитника. Твоей же благой и премудрой воле изволися отъяти от мене сего раба Твоего и оставити мя едину. Преклоняюся пред сею Твоею волею и к Тебе прибегаю во дни скорби моея: утоли печаль мою о разлучении с рабом Твоим, другом моим. Аще отъял еси его от мене, не отыми от мене Своея милости. Яко же некогда приял еси вдовицы две лепты, тако приими и сие моление мое. Помяни, Господи, душу усопшего раба Твоего (имя), прости ему все согрешения его, вольная и невольная, аще словом, аще делом, аще ведением и неведением, не погуби его со беззаконми его и не предаждь вечной муке, но по велицей милости Твоей и по множеству щедрот Твоих ослаби и прости вся согрешения его и вчини его со святыми Твоими, идеже несть болезнь, ни печаль, ни воздыхание, но жизнь безконечная. Молю и прошу Тя, Господи, даруй ми во вся дни жизни моея не преставати молитися о усопшем рабе Твоем, и даже до исхода моего просити у Тебе, Судии всего мира, оставления всех согрешений его и вселения его в Небесные обители, яже еси уготовал любящим Тя. Яко аще бо и согреши, но не отступи от Тебе, и несумненно Отца и Сына и Святаго Духа православно даже допоследняго своего издыхания исповеда; тем же веру его, яже в Тя, вместо дел ему вмени: яко несть человек, иже жив будет и не согрешит, Ты един кроме греха, и правда Твоя – правда во веки. Верую, Господи, и исповедую, яко Ты услышиши моление мое и не отвратиши лица Твоего от мене. Видя вдовицу, зельне плачущу, умилосердився, сына ея, на погребение несома, воскресил еси: тако умилосердився, утиши и скорбь мою. Яко же отверзл еси рабу Твоему Феофилу, отшедшему к Тебе, двери милосердия Твоего и простил еси ему прегрешения его по молитвам Святыя Церкве Твоея, внемля молитвам и милостыням супруги его: сице и аз молю Тя, приими мое моление о рабе Твоем и введи его в жизнь вечную. Яко Ты еси упование наше. Ты еси Бог, еже миловати и спасати, и Тебе славу возсылаем со Отцем и Святым Духом. Аминь.

                                Молитвы об усопшей жене

                                Христе Иисусе, Господи и Вседержителю! В сокрушении и умилении сердца моего молюся Тебе: упокой, Господи, душу усопшия рабы Твоея (имя), в Небеснем Царствии Твоем. Владыко Вседержителю! Ты благословил еси супружесткий союз мужа и жены, егда рекл еси: не добро быти человеку единому, сотворим ему помощника по нему. Ты освятил еси союз сей во образ духовнаго союза Христа с Церковию. Верую, Господи, и исповедую, яко ты благословил еси сочетати и мене сим святым союзом с единою из рабынь Твоих. Твоей же благой и премудрой воле изволися отъяти у мене сию рабу Твою, юже дал еси мне, яко помощницу и сопутницу жизни моея. Преклоняюся пред сею Твоею волею, и молюся Ти от всего сердца моего, приими моление мое сие о рабе Твоей (имя), и прости ей, аще согреши словом, делом, помышлением, ведением и неведением; аще земное возлюби паче небеснаго; аще о одежде и украшении тела своего печеся паче, неже о просвещении одеяния души своея; или аще небреже о чадех своих; аще преогорчи кого словом или делом; аще поропта в сердце своем на ближняго своего или осуди кого или ино что от таковых злых содела. Вся сия прости ей, яко благий и человеколюбивый: яко несть человек, иже жив будет и не согрешит. Не вниди в суд с рабою Твоею, яко созданием Твоим, не осуди ю по грехом ея на вечныя муки, но пощади и помилуй по велицей милости Твоей. Молю и прошу Тя, Господи, сил даруй ми по вся дни жизни моея не преставая молитися о усопшей рабе Твоей, и даже до кончины живота моего просити ей у Тебе, Судии всего мира, оставления согрешений ея. Да яко же Ты, Боже, положил еси на главу ея венец от камене честна, венчая ю зде на земли; тако увенчай ю вечною Твоею славою в Небеснем Царствии Твоем, со всеми святыми, тамо ликующими, да вкупе с ними вечно воспевает всесвятое имя Твое с Отцем и Святым Духом. Аминь.

                                Молитва об умершем некрещеным, св. мученику Уару

                                О, святый мучениче Уаре досточудный, ревностию по Владыце Христу разжигаем, Небеснаго Царя пред мучителем исповедал еси, и ныне Церковь почитает тя, яко прославляемаго от Владыки Христа славою Небесною, Иже дарова тебе благодать великаго к Нему дерзновения, и ныне предстоиши Ему со Ангелы, и в вышних ликуеши, и зриши ясно Святую Троицу, и светом Безначальнаго Сияния наслаждаешися: воспомяни и наших сродников томление, умерших в нечестии, приими наше прошение, и якоже Клеопатрин род неверный молитвами твоими от вечных мук свободил еси, тако воспомяни елицы противобожне погребенныя, умершия некрещенными (имена), потщися испросити оным от вечныя тьмы избавление, да вси едиными усты и единем сердцем восхвалим Премилосерднаго Творца во веки веков. Аминь.

                                Молитва о новопреставленном усопшем

                                Помяни, Господи Боже наш, в вере и надежди живота вечнаго новопреставленного раба Твоего (имя), и яко благ и человеколюбец, отпущаяй грехи и потребляяй неправды, ослаби, остави и прости вся вольная его согрешения и невольная, возставляя его во святое второе пришествие Твое в причастие вечных Твоих благ, ихже ради в Тя Единаго верова, истиннаго Бога и Человеколюбца. Яко Ты еси воскресение и живот, и покой рабу Твоему, имярек, Христе Боже наш. И Тебе славу возсылаем, со безначальным Твоим Отцем и с Пресвятым Духом, ныне и присно и во веки веков, аминь.

                                Молитва Богородице об усопших

                                Пресвятая Владычице Богородице! К Тебе прибегаем, Заступнице наша: Ты бо скорая еси помощница, наша ходатаица у Бога неусыпающая! Наипаче же молим Тя в час сей: помози новопреставленному рабу Твоему (имя) прейти страшный и неведомый оный путь; молим Тя, Владычице мира, силою Твоею отжени от движимой страхом души его страшныя силы темных духов, да смятутся и посрамятся пред Тобою; свободи ю от истязания воздушных мытарей, разори советы их и низложи их, яко зломыслящих врагов. Буди ей, о Всемилостивая Госпоже Богородице, заступницею и защитницею от воздушного князя тьмы, мучителя и страшных путей стоятеля; молим Тя, Пресвятая Богородице, ризою Твоею честною Защити ю, да тако безбоязненно и невозбранно прейдет от земли на небо. Молим Тя, Заступнице наша, заступи за раба Твоего Матерним Твоим у Господа дерзновением; молим Тя, Помоще наша, помози ему, имущему судитися еще прежде онаго Страшнаго судилища, помози убо оправдатися пред Богом, яко Творцем неба и земли, и умоли Единороднаго Сына Твоего, Господа Бога и Спаса нашего Иисуса Христа, да упокоит усопшаго в недрах Авраама с праведными и всеми святыми. Аминь.


                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="pt-12">
                <div class="relative w-full h-96">
                    <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/6.jpg')}}" alt="nature image" />
                    <div class="relative pt-28 text-center">
                        <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">Молитвы разные</h2>
                    </div>
                </div>
                <div class="-mt-16 mb-8 px-8 ">
                    <div class="container mx-auto shadow-xl shadow-gray-300">
                        <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                            <div class="my-4 grid gap-6 px-4">
                                Молитвы являются важной частью духовной жизни каждого верующего. Существуют различные виды молитв, каждая из которых предназначена для
                                разных ситуаций и состояний души.

                                Благодарственные молитвы выражают нашу благодарность Богу за все дары, благословения и милости, которые мы получаем в жизни. Покаянные
                                молитвы направлены на осознание своих грехов, раскаяние и просьбу о прощении. Эти молитвы помогают нам смириться и получить Божью
                                благодать для очищения души. Просительные молитвы включают в себя просьбы о помощи, поддержке, здравии, благополучии и других нуждах.
                                Мы обращаемся к Богу с надеждой на Его милосердие и помощь в трудных жизненных ситуациях.

                                Молитвы о мире и согласии часто читаются в храмах и дома, чтобы просить Господа о мире на земле, прекращении конфликтов и согласии между
                                людьми. Молитвы о здоровье и исцелении помогают верующим искать Божью помощь в преодолении болезней и страданий, прося о здоровье для себя
                                и своих близких. Молитвы за усопших призваны помочь душам тех, кто уже отошел в мир иной. В них мы просим Бога о прощении их грехов и
                                даровании им вечного покоя. Молитвы перед важными делами и начинаниями направлены на то, чтобы получить Божье благословение и руководство
                                в новых начинаниях, будь то работа, учеба или личные проекты.

                                Эти и другие молитвы помогают верующим поддерживать связь с Богом, укреплять веру и находить утешение в трудные моменты жизни. Молитва
                                является источником духовной силы и поддержки, она помогает нам обрести внутренний мир и уверенность в Божьем промысле.

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-6 px-8">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100">
                        <div class="my-2 grid gap-6 px-4">
                            <h3 id="january" class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-2xl lg:text-xl">Молитвы об исцелении болящих</h3>
                            <div>
            Молитвы об исцелении болящих

            Тропарь, глас 4

            Скорый в заступлении един сый, Христе, скорое свыше покажи посещение страждущему рабу Твоему, и избави от недуг и горьких болезней и воздвигни во еже пети Тя и славити непрестанно, молитвами Богородицы, Едине Человеколюбче.

            Кондак, глас 2

            На одре болезни лежащаго и смертною раною уязвленнаго, якоже иногда воздвигл еси, Спасе, Петрову тещу и разслабленнаго на одре носимого, сице и ныне, Милосерде, страждущаго посети и исцели: Ты бо един еси недуги и болезни рода нашего понесый, и вся могий, яко Многомилостив.

            Молитва об исцелении больного

            О Премилосердный Боже, Отче, Сыне и Святый Душе, в Нераздельней Троице покланяемый и славимый, призри благоутробно на раба Твоего (имя), болезнию одержимаго; отпусти ему вся согрешения его; подай ему исцеление от болезни; возврати ему здравие и силы телесные; подай ему долгоденственное и благоденственное житие, мирные Твои и премирные блага, чтобы он вместе с нами приносил благодарные мольбы Тебе, Всещедрому Богу и Создателю нашему.

            Пресвятая Богородице, всесильным заступлением Твоим помоги мне умолить Сына Твоего, Бога моего, об исцелении раба Божия (имя).

            Все святые и Ангелы Господни, молите Бога о больном рабе Его (имя). Аминь.

            Молитва ко Господу

            Владыко Вседержителю, Святый Царю, наказуяй и не умерщвляяй, утверждаяй низпадающия, возводяй низверженныя, телесныя человеков скорби исправляя и, молимся Тебе, Боже наш, раба Твоего (имя), немощствующа посети милостию Твоею, прости ему всякое согрешение вольное и невольное. Ей, Господи, врачебную Твою силу с небесе низпосли, прикоснися телеси, угаси огневицу, укроти страсть и всякую немощь таящуюся, буди врач раба Твоего (имя), воздвигни его от одра болезненнаго, и от ложа озлобления цела и всесовершенна, даруй его Церкви Твоей благоугождающа и творяща волю Твою, Твое бо есть, еже миловати и спасати ны, Боже наш, и Тебе славу возсылаем. Отцу, и Сыну, и Святому Духу, ныне и присно, и во веки веков, аминь.

            Иная молитва ко Господу

            Владыка Вседержителю, Врачу душ и телес наших, смиряяй и возносяй, наказуяй и паки исцеляяй! Раба Твоего (имя) немощствующа посети и исцели его, возставив от одра и немощи. Запрети духу немощи, остави от него всяку язву, всяку болезнь, и еже есть в нем согрешение или беззаконие, ослаби, остави, прости Твоего ради человеколюбия. Ей, Господи, пощади создание Твое во Христе Иисусе, Господе нашем, с Ним же благословен еси, и со Пресвятым, и Благим, и Животворящим Твоим Духом, ныне и присно и во веки веков. Аминь.

            Молитва в болезни

            Господи Боже, Владыко жизни моей, Ты по благости Своей сказал: не хочу смерти грешника, но чтоб он обратился и жив был. Я знаю, что эта болезнь, которою я страдаю, есть наказание Твое за мои грехи и беззакония; знаю, что по делам моим я заслужил тягчайшее наказание, но, Человеколюбче, поступай со мною не по злобе моей, а по беспредельному милосердию Твоему. Не пожелай смерти моей, но дай мне силы, чтобы я терпеливо сносил болезнь, как заслуженное мною испытание, и по исцелении от нее обратился всем сердцем, всею душою и всеми моими чувствами к Тебе, Господу Богу, Создателю моему, и жив был для исполнения святых Твоих заповедей, для спокойствия моих родных и для моего благополучия. Аминь.

            Молитва перед иконой Божией Матери «Целительница»

            Приими, о, Всеблагословенная и Всемощная Госпоже Владычице Богородице Дево, сия молитвы, со слезами Тебе ныне приносимыя от нас, недостойных раб Твоих, ко Твоему цельбоносному образу пение возсылающих со умилением, яко Тебе Самой зде сущей и внемлющей молению нашему. По коемуждо бо прошению исполнение твориши, скорби облегчаеши, немощным здравие даруеши, разслабленныя и недужныя исцеляеши, от бесных бесы прогоняеши, обидимыя от обид избавляеши, прокаженныя очищаеши и малыя дети милуеши; еще же, Госпоже Владычице Богородице, и от уз и темниц свобождаеши и всякия многоразличныя страсти врачуеши: вся бо суть возможна ходатайством Твоим к Сыну Твоему, Христу Богу нашему. О, Всепетая Мати, Пресвятая Богородице! Не престай молитися о нас недостойных рабах Твоих, славящих Тя и почитающих Тя, и поклоняющихся со умилением Пречистому образу Твоему, и надежду имущих невозвратну и веру несумненну к Тебе, Приснодеве Преславней и Непорочней, ныне и присно и во веки веков. Аминь.

            Молитва перед иконой Божией Матери «Всецарица» («Пантанасса») 1-я

            О Всеблагая, досточудная Богородице, Пантанасса, Всецарице! Несмь достоин да внидеши под кров мой! Но яко милостиваго Бога любоблагоутробная Мати, рцы слово, да исцелится душа моя и укрепится немощствующее тело мое. Имаши бо державу непобедимую и не изнеможет у Тебе всяк глагол, о Всецарице! Ты за мя упроси, Ты за мя умоли. Да прославляю преславное имя Твое всегда, ныне и в безконечныя веки. Аминь.

            Молитва 2-я

            О Пречистая Богомати, Всецарице! Услыши многоболезненное воздыхание наше пред чудотворною иконою Твоею, из удела Афонскаго в Россию пренесенною, призри на чад Твоих, неисцельными недуги страждущих, ко святому образу Твоему с верою припадающих! Якоже птица крилома покрывает птенцы своя, тако и Ты ныне, присно жива сущи, покрый нас многоцелебным Твоим омофором. Тамо, идеже надежда исчезает, несумненною Надеждою буди. Тамо, идеже лютыи скорби превозмогают, Терпением и Ослабою явися. Тамо, идеже мрак отчаяния в души вселися, да возсияет неизреченный свет Божества! Малодушныя утеши, немощныя укрепи, ожесточенным сердцам умягчение и просвещение даруй. Исцели болящия люди Твоя, о Всемилостивая Царице! Ум и руки врачующих нас благослови, да послужат орудием Всемощнаго Врача Христа Спаса нашего. Яко живей Ти сущей с нами, молимся пред иконою Твоею, о Владычице! Простри руце Твои, исполненныя исцеления и врачбы, Радосте скорбящих, в печалех Утешение, да чудотворную помощь скоро получив, прославляем Живоначальную Нераздельную Троицу, Отца, Сына, и Святаго Духа во веки веков. Аминь.

            Св. Архангелу Рафаилу

            О, святый Архангеле Рафаиле! Всеусердно молим тя, буди нам путеводитель в жизни нашей, сохрани от всех видимых и невидимых враг, исцели душевныя и телесныя болезни наша, управи жизнь нашу к покаянию во гресех и ко творению добрых дел. О, святый великий Рафаиле Архангеле! Услыши нас, грешных рабов Божиих (имена), молящихся тебе, и сподоби в здешней и в будущей жизни благодарити и славити общаго Создателя нашего в безконечныя веки веков. Аминь.

            Молитва святым врачам

            О велиции Христовы угодницы и чудотворцы Пантелеимоне, Космо и Дамиане, Кире и Иоанне, Ермолае, Диомиде, Фотие и Аникито! Услышите нас, молящихся вам (имена). Вы весте наша скорби и недуги, слышите воздыхания множества к вам притекающих. Сего ради к вам, яко скорым помощником и теплым молитвенником нашим зовем: не оставляйте нас вашим у Бога ходатайством. Мы присно заблуждаем от пути спасения, руководите нас, милостивые наставницы. Мы немощны есмы в вере, утвердите нас, Правоверия учители. Мы зело убози сотворихомся добрых дел, обогатите нас, милосердия сокровища. Мы присно наветуеми есмы от враг видимых и невидимых и озлобляеми, помозите нам, безпомощных заступницы. Гнев праведный, движимый на ны за беззакония наша, отвратите от нас вашим ходатайством у престола Судии Бога, Емуже вы предстоите на Небеси, святии праведницы. Услышите нас, велиции Христовы угодницы, вас с верою призывающих, и испросите молитвами вашими у Отца Небеснаго всем нам прощение грехов наших и от бед избавление. Вы бо помощницы, заступницы и молитвенницы, и о вас славу возсылаем Отцу и Сыну и Святому Духу, ныне и присно и во веки веков. Аминь.

            Молитва ухаживающего за болящим

            Господи, Иисусе Христе, Сыне Бога Живаго, Агнче Божий, вземляй грехи мира, Пастырю добрый, положивый душу Твою за овцы Твоя, Небесный Врачу душ и телес наших, исцеляяй всякий недуг и всякую язву в людех Твоих! Тебе припадаю, помози мне, недостойной рабе Твоей. Призри, Многомилостиве, на делание и служение мое, даждь ми быти верною в мале: послужити болящим, Тебе ради, носити немощи немощных, и не себе, но Тебе единому угодити во вся дни живота моего. Ты бо рекл еси, о Сладчайший Иисусе: понеже сотвористе единому от сих братий Моих меньших, Мне сотвористе. Ей, Господи, суди мне, грешной, по сему глаголу Твоему, яко да сподоблюсь творити благую Твою волю во отраду и утешение искушаемых, недугующих раб Твоих, их же искупил еси честною Твоею Кровию. Ниспосли ми благодать Твою, попаляющую во мне страстей терние, призвавый мене, грешную, на дело служения о Имени Твоем; без Тебе не можем творити ничесоже: посети убо нощию и искуси сердце мое, внегда предстояти ми у возглавия болящих и низверженных; уязви душу мою Твоею любовию, вся терпящею и николиже отпадающею. Тогда возмогу, Тобою укрепляемая, подвигом добрым подвизатися и веру соблюсти, даже до последняго моего издыхания. Ты бо еси Источник исцелений душевных же и телесных, Христе Боже наш, и Тебе, яко Спасителю человеков и Жениху душ, грядущему в полунощи, славу и благодарение и поклонение возсылаем, ныне и присно и во веки веков. Аминь

            О даровании христианского милосердия. Святым женам-мироносицам

            О святыя Марфо и Марие и прочии святыя жены-мироносицы! Умолите Возлюбленнаго вами и вас возлюбившего Сладчайшаго Иисуса, Егоже вы исповедали есте Христа, Сына Божия, да даст и нам, грешным рабам Божиим (имена), грехов оставление, в вере правей нелицемерное и твердое стояние. Вселите в сердца наша дух страха Божия, смиреннаго на Бога упования, терпения и ко ближним милосердия. Избавите нас молитвами вашими от искушений житейских, бед и напастей, да тихое и мирное житие поживше зде, с помыслы непорочными и сердцем чистым, предстанем на оный Страшный суд, и добрый ответ на нем воздавше, радости неизреченныя во Царствии Небеснем сподобимся во веки веков.

            Молитва благодарственная по исцелении от болезни св. Иоанна Кронштадтского

            Слава Тебе, Господи Иисусе Христе Сыне единородный безначального Отца, Едине исцеляяй всякий недуг и всякую язю в людех, яко помиловал мя еси грешнаго и избавил еси мя от болезни моея, не попустив ей развиться и умертвить меня по грехам моим. Даруй мне отныне, Владыко, силу твердо творить волю Твою во спасение души моей окаянной и во славу Твою со безначальным Твоим Отцем и единосущным Твоим Духом, ныне и присно и во веки веков. Аминь.
            </div>
            </div>
            </div>
            </div>
            </div>

        </section>


    </x-slot>
</x-app-layout>
