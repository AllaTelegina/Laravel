<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">И </span>первая буква имени</div>
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
                                <a href="/namecalendar" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Календарь Имени</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">И первая буква имени</span>
                            </div>
                        </li>
                    </ol>
                </nav>


                <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100 ">
                    <div class="md:flex">
                        <div class="md:shrink-0">
                            <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{asset('images/1n.jpg')}}" alt="Храм исторический" />
                        </div>
                        <div class="p-8">
                            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-blue-950 hover:underline">Преподобный Илия Муромец Печерский, день памяти 11 октября, 1 января</a>
                            <p class="mt-2"> О его житии сохранилось совсем немного достоверных сведений. Предположительно, он родился
                                в 1143 году в селении Карачарово под Муромом. Его родители были крестьянами.

                                Испокон веков, его отождествляют с богатырем Ильей Муромцем. С детских лет и до 3
                                0-летнего возраста он был парализован, и только после встречи с тремя старцами,
                                которые предстали перед ним в образе нищих, он был исцелен.

                                Получив родительское благословение, он отправился к киевскому князю Владимиру
                                Мономаху. Долгое время он состоял в его дружине и не знал поражений.

                                Однако, однажды в бою он получил рану в грудь. Она оказалась неизлечимой.
                                И тогда, святой Илия принимает монашеский постриг в Киево-Печерском монастыре.
                                Около 1188 года он отошел ко Господу, в возрасте 45 лет.
                            </p>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </x-slot>
</x-app-layout>

