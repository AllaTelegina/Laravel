<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">В</span>оскресная школа</div>
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
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Воскресная школа</span>
                            </div>
                        </li>
                    </ol>
                </nav>


                <section class="py-2">
                    <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400 mt-8">
                        <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="/" title="Логотип">
                            <img src="{{asset('images/logo.png')}}" class="w-20 h-20"/>
                        </a>
                        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-white">
                                <h1 class="mb-2 leading-relaxed text-2xl text-center">О воскресной школе</h1>
                                <p class="mb-2 leading-relaxed text-xl text-justify">
                                    Добро пожаловать на страницу школы!
                                    Здесь вы можете ознакомиться с новостями и событиями нашего храма, а также узнать о предстоящих мероприятиях и важных обновлениях
                                </p>
                            </div>
                            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                                <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/ысрщщд.jpg')}}">
                            </div>
                        </div>
                    </div>
                </section>


                <div class="py-4 h-min-24 mx-auto w-3/4  bg-blue-100 shadow-2xl shadow-gray-300 rounded-lg">
                    <p class="leading-relaxed text-xl text-center p-4">
                        На этой странице вы найдете актуальное расписание богослужений,
                        информацию о нашем местоположении, а также сможете ознакомиться с фотогалереей,
                        передающей атмосферу этого уникального места. Мы приглашаем вас присоединиться к нашей службе
                        и ощутить благодать молитвами под покровом Божией Матери.
                    </p>
                </div>


                <section class="text-blue-950  space-y-6 pt-2 py-4">
                    <section>
                        <div class="my-8">
                            <div class="text-3xl"><span class="text-orange-600 font-medium">P</span>асписание</div>
                        </div>
                        <section>
                            <div class="mt-2 h-min-24 my-8 py-2 px-4 mx-auto w-3/4 text-center bg-blue-100 shadow-2xl shadow-gray-300 rounded-lg">
                                <span class="text-2xl ">Неделя 4-я по Пятидесятнице Явление иконы Божией Матери "Казанская"</span>
                            </div>
                            <div class="container mx-auto space-y-6 p-6 bg-blue-100 shadow-lg rounded-lg">
                                <div class="overflow-x-auto">
                                    <table class="min-w-full bg-blue-100">
                                        <thead class="bg-sky-600 text-white text-xl">
                                        <tr>
                                            <th class="w-1/4 py-2 px-4 text-left">Дата</th>
                                            <th class="w-1/4 py-2 px-4 text-left">День недели</th>
                                            <th class="w-1/4 py-2 px-4 text-left">Время</th>
                                            <th class="w-1/2 py-2 px-4 text-left">Служба</th>
                                        </tr>
                                        </thead>
                                        <tbody class="text-xl">
                                        <tr>
                                            <td class="border-b py-2 px-4">14 августа</td>
                                            <td class="border-b py-2 px-4">Понедельник</td>
                                            <td class="border-b py-2 px-4">08:00</td>
                                            <td class="border-b py-2 px-4">Утренняя Литургия</td>
                                        </tr>
                                        <tr>
                                            <td class="border-b py-2 px-4">15 августа</td>
                                            <td class="border-b py-2 px-4">Вторник</td>
                                            <td class="border-b py-2 px-4">10:00</td>
                                            <td class="border-b py-2 px-4">Молебен с акафистом</td>
                                        </tr>
                                        <tr>
                                            <td class="border-b py-2 px-4">16 августа</td>
                                            <td class="border-b py-2 px-4">Среда</td>
                                            <td class="border-b py-2 px-4">18:00</td>
                                            <td class="border-b py-2 px-4">Вечерня с Утренью</td>
                                        </tr>
                                        <tr>
                                            <td class="border-b py-2 px-4">16 августа</td>
                                            <td class="border-b py-2 px-4">Четверг</td>
                                            <td class="border-b py-2 px-4">18:00</td>
                                            <td class="border-b py-2 px-4">Вечерня с Утренью</td>
                                        </tr>
                                        <tr>
                                            <td class="border-b py-2 px-4">15 августа</td>
                                            <td class="border-b py-2 px-4">Пятница</td>
                                            <td class="border-b py-2 px-4">10:00</td>
                                            <td class="border-b py-2 px-4">Молебен с акафистом</td>
                                        </tr>
                                        <tr class="text-orange-600">
                                            <td class="border-b py-2 px-4">16 августа</td>
                                            <td class="border-b py-2 px-4">Суббота</td>
                                            <td class="border-b py-2 px-4">18:00</td>
                                            <td class="border-b py-2 px-4">Вечерня с Утренью</td>
                                        </tr>
                                        <tr class="text-orange-600">
                                            <td class="border-b py-2 px-4">16 августа</td>
                                            <td class="border-b py-2 px-4">Воскресенье</td>
                                            <td class="border-b py-2 px-4">18:00</td>
                                            <td class="border-b py-2 px-4">Вечерня с Утренью</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <section>
                                <div class="my-8">
                                    <div class="text-3xl"><span class="text-orange-600 font-medium">Г</span>алерея</div>
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
                                            <div class="mt-2 h-min-24 my-8 py-4 px-4 mx-auto w-3/4 text-center shadow-2xl shadow-gray-100 rounded-lg">
                                                <span class="text-blue-950 text-2xl ">Служение от 12.10.2024</span>
                                            </div>
                                            <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                                <li><img x-on:click="imageGalleryOpen" src="images/1.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 01"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/2.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/3.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/4.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/5.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 06"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 06"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
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
                                            <div class="mt-2 h-min-24 my-8 py-4 px-4 mx-auto w-3/4 text-center shadow-2xl shadow-gray-100 rounded-lg">
                                                <span class="text-blue-950 text-2xl ">Служение от 12.10.2024</span>
                                            </div>
                                            <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                                <li><img x-on:click="imageGalleryOpen" src="images/1.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 01"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/2.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/3.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/4.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/5.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 06"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 06"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 09"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 10"></li>
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

                                </main>
                            </section>

                            <section>
                                <div class="my-8">
                                    <div class="text-3xl"><span class="text-orange-600 font-medium">А</span>дрес</div>
                                </div>
                                <section>
                                    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
                                        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
                                            <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto object-cover"  src="{{asset('images/14.jpg')}}" alt="" width="384" height="512" />
                                            <div class="card lg:card-side bg-blue-100">
                                                <div class="card-body">
                                                    <h2 class="card-title">Как к нам приехать</h2>
                                                    <p> Брестская область, Жабинковский район,
                                                        1,6 км севернее д. Чижевщина, на территории санатория "Надзея” расположен храм часовня Целительница.
                                                    </p>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>


                                    <!-- вращающийся слайдер
                                                            <div class="h-screen w-full flex items-center justify-center overflow-hidden mt-4">
                                                                <div class="relative lg:w-[290px] lg:h-[290px] md:w-[220px] md:h-[220px] sm:w-[180px] sm:h-[180px] w-[100px] h-[100px] [transform-style:preserve-3d] animate-[rotate_30s_linear_infinite]">
                                                                    <span style="--i:1" class="span-style"><img src="images/9.jpg" alt="img - 1"  class="img-style"/></span>
                                                                    <span style="--i:2" class="span-style"><img src="images/14.jpg" alt="img - 2"  class="img-style"/></span>
                                                                    <span style="--i:3" class="span-style"><img src="images/12.jpg" alt="img - 3"  class="img-style"/></span>
                                                                    <span style="--i:4" class="span-style"><img src="images/13.jpg" alt="img - 4"  class="img-style"/></span>
                                                                    <span style="--i:5" class="span-style"><img src="images/16.jpg" alt="img - 5"  class="img-style"/></span>
                                                                    <span style="--i:6" class="span-style"><img src="images/6.jpg" alt="img - 6"  class="img-style"/></span>
                                                                    <span style="--i:7" class="span-style"><img src="images/5.jpg" alt="img - 7"  class="img-style"/></span>
                                                                    <span style="--i:8" class="span-style"><img src="images/ob_iconah.jpg" alt="img - 8"  class="img-style"/></span>
                                                                </div>
                                                            </div>
                                    -->
                                </section>
        </div>
    </x-slot>
</x-app-layout>
