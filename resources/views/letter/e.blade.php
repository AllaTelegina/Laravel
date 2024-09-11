<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">Е </span>первая буква имени</div>
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
                                <a href="/" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Календарь Имени</a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Е первая буква имени</span>
                            </div>
                        </li>
                    </ol>
                </nav>


                <div id="aris" class="card lg:card-side shadow-xl bg-blue-100 mt-12">
                    <figure class="#">
                        <img
                            src="{{asset('images/a1.jpg')}}"
                            alt="Temple" />
                    </figure>
                    <div  class="card-body">
                        <h2 class="card-title">Мученик Святой Арис день памяти 1 января</h2>
                        <p>
                            Святой Арис был родом из Египта, пострадал при императоре Максимине в 308 году. Исповедовал веру христианскую и по ревности к славе Божией, посещал страдальцев за Христа, заключенных в темницу. Утешал их и вылечивал от ран.

                            Однажды в стране Киликийской при входе в город Аскалон Ариса задержала стража, которая сочла его за соглядатая. Свирепые стражи отвели его к князю Фирмилиану. На допросе перед князем он открыто объявил себя христианином, за что и подвергся жестоким  пыткам.

                            Святой Арис подвергся многочисленным истязаниям, а затем был предан на сожжение огнем.
                        </p>
                    </div>
                </div>



            </section>
        </div>
    </x-slot>
</x-app-layout>

