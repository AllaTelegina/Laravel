<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">О</span>ткрытки православные</div>
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
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Открытки православные</span>
                            </div>
                        </li>
                    </ol>
                </nav>



                <section class="text-blue-950  space-y-6 pt-2 py-4">
                    <div class="bg-sky-600  text-blue-950 text-center py-4 header-date rounded-3xl">
                        <div class="mt-2">
                            <span class="text-white text-2xl m-6">Добро пожаловать на страницу православных открыток</span>
                        </div>
                        <div class="flex justify-center space-x-8 text-xl text-center m-8">
                            <div class="text-white flex flex-col items-center">
                                <p>
                                    Добро пожаловать на нашу страничку, посвящённую православным открыткам.
                                    В нашем мире, насыщенном цифровыми коммуникациями, мы гордимся тем,
                                    что сохраняем и распространяем древнюю традицию поздравлений,
                                    наполненных духовным смыслом и благословением.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>



               <!-- <div class="flex min-h-screen w-full flex-wrap content-center justify-center">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1 gap-3">
                        <div class="w-auto bg-white p-3">
                            <img class=" w-full object-cover" src="{{asset('images/o17.jpg')}}" />
                            <ul class="mt-3 flex flex-wrap">
                                <li class="mr-auto">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M21,12L14,5V9C7,10 4,15 3,20C5.5,16.5 9,14.9 14,14.9V19L21,12Z" />
                                        </svg>
                                        1
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                        </svg>
                                        24
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-auto h-auto bg-white p-3">
                            <img class=" w-full object-cover" src="{{asset('images/o18.jpg')}}" />
                            <ul class="mt-3 flex flex-wrap">
                                <li class="mr-auto">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M21,12L14,5V9C7,10 4,15 3,20C5.5,16.5 9,14.9 14,14.9V19L21,12Z" />
                                        </svg>
                                        1
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                        </svg>
                                        24
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-auto bg-white p-3">
                            <img class=" w-full object-cover" src="{{asset('images/o19.jpg')}}" />
                            <ul class="mt-3 flex flex-wrap">
                                <li class="mr-auto">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M21,12L14,5V9C7,10 4,15 3,20C5.5,16.5 9,14.9 14,14.9V19L21,12Z" />
                                        </svg>
                                        1
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                        </svg>
                                        24
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="w-auto bg-white p-3">
                            <img class=" w-full object-cover" src="{{asset('images/o20.jpg')}}" />
                            <ul class="mt-3 flex flex-wrap">
                                <li class="mr-auto">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M21,12L14,5V9C7,10 4,15 3,20C5.5,16.5 9,14.9 14,14.9V19L21,12Z" />
                                        </svg>
                                        1
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z" />
                                        </svg>
                                        24
                                    </a>
                                </li>
                                <li class="mr-2">
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M12,21.35L10.55,20.03C5.4,15.36 2,12.27 2,8.5C2,5.41 4.42,3 7.5,3C9.24,3 10.91,3.81 12,5.08C13.09,3.81 14.76,3 16.5,3C19.58,3 22,5.41 22,8.5C22,12.27 18.6,15.36 13.45,20.03L12,21.35Z" />
                                        </svg>
                                        3
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
-->


<!--
                <div class="flex items-center justify-center py-4 md:py-8 flex-wrap">
                    <button type="button" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:bg-gray-900 dark:focus:ring-blue-800">All categories</button>
                    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Shoes</button>
                    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Bags</button>
                    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Electronics</button>
                    <button type="button" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Gaming</button>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o20.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o21.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o22.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o23.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o24.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o25.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o26.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o27.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o28.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o29.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o30.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{asset('images/o31.jpg')}}" alt="">
                    </div>
                </div>

-->

                <div class="mb-4 flex items-center justify-center py-4 md:py-8 flex-wrap">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="text-blue-600 border border-white hover:border-blue-600 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800 tab-button"
                                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Все открытки</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="text-blue-600 border border-white hover:border-blue-600 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="hram-tab" data-tabs-target="#hram" type="button" role="tab" aria-controls="hram" aria-selected="false">Пасха</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block text-blue-600 border border-white hover:border-blue-600 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="chasovnya-tab" data-tabs-target="#chasovnya" type="button" role="tab" aria-controls="chasovnya" aria-selected="false">Рождество</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block text-blue-600 border border-white hover:border-blue-600 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="school-tab" data-tabs-target="#school" type="button" role="tab" aria-controls="school" aria-selected="false">Крещение</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block text-blue-600 border border-white hover:border-blue-600 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="school-tab" data-tabs-target="#school" type="button" role="tab" aria-controls="school" aria-selected="false">Успение Богородицы</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block text-blue-600 border border-white hover:border-blue-600 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="school-tab" data-tabs-target="#school" type="button" role="tab" aria-controls="school" aria-selected="false">Праздник святой Троицы</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block text-blue-600 border border-white hover:border-blue-600 dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="school-tab" data-tabs-target="#school" type="button" role="tab" aria-controls="school" aria-selected="false">Разные</button>
                        </li>
                    </ul>
                </div>

                <section>

                    <div x-data="{
        imageGalleryOpened: false,
        imageGalleryActiveUrl: null,
        imageGalleryImageIndex: null,
        imageGalleryOpen(event) {
            this.imageGalleryImageIndex = event.target.dataset.index;
            this.imageGalleryActiveUrl = event.target.src;
            this.imageGalleryOpened = true;
        },
        imageGalleryClose() {
            this.imageGalleryOpened = false;
            setTimeout(() => this.imageGalleryActiveUrl = null, 300);
        },
        imageGalleryNext(){
            if(this.imageGalleryImageIndex == this.$refs.gallery.childElementCount){
                this.imageGalleryImageIndex = 1;
            } else {
                this.imageGalleryImageIndex = parseInt(this.imageGalleryImageIndex) + 1;
            }
            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
        },
        imageGalleryPrev() {
            if(this.imageGalleryImageIndex == 1){
                this.imageGalleryImageIndex = this.$refs.gallery.childElementCount;
            } else {
                this.imageGalleryImageIndex = parseInt(this.imageGalleryImageIndex) - 1;
            }

            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;

        }
    }" @image-gallery-next.window="imageGalleryNext()" @image-gallery-prev.window="imageGalleryPrev()" @keyup.right.window="imageGalleryNext();" @keyup.left.window="imageGalleryPrev();" x-init="
        imageGalleryPhotos = $refs.gallery.querySelectorAll('img');
        for(let i=0; i<imageGalleryPhotos.length; i++){
            imageGalleryPhotos[i].setAttribute('data-index', i+1);
        }
    " class="w-full h-full select-none">
                        <div class="max-w-6xl mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
                            <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                <li>
                                <img x-on:click="imageGalleryOpen" src="{{asset('images/o12.jpg')}}"
                                     class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"
                                     alt="photo gallery image 01" />
                                    <a href="#" class="flex text-gray-400 hover:text-gray-600">
                                        <svg class="mr-0.5" style="width:24px;height:24px" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M21,12L14,5V9C7,10 4,15 3,20C5.5,16.5 9,14.9 14,14.9V19L21,12Z" />
                                        </svg>

                                    </a>
                                </li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o1.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 01"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o2.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 02"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o3.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 03"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o4.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 04"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o5.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 05"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o6.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 06"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o7.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o8.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o9.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o25.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 11"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o12.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o13.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o14.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 14"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o15.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o16.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o17.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 17"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o18.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 18"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o19.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 19"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o20.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 20"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o21.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 21"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o26.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 26"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o24.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 24"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o27.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 27"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o28.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 28"></li>
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('images/o29.jpg')}}" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 29"></li>
                            </ul>
                        </div>
                        <template x-teleport="body">
                            <div x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in-in duration-300" x-transition:leave-end="opacity-0" @click="imageGalleryClose" @keydown.window.escape="imageGalleryClose" x-trap.inert.noscroll="imageGalleryOpened" class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out" x-cloak>
                                <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
                                    <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                        </svg>
                                    </div>
                                    <img x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300" x-transition:enter-start="opacity-0 transform scale-50" x-transition:leave="transition ease-in-in duration-300" x-transition:leave-end="opacity-0 transform scale-50" class="object-contain object-center w-full h-full select-none cursor-zoom-out" :src="imageGalleryActiveUrl" alt="" style="display: none;">
                                    <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                </section>









            </section>
        </div>
    </x-slot>
</x-app-layout>
