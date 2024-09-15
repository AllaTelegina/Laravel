<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-4">
            <section class="pt-14 space-y-6">

                <div class="mt-4">
                    <div class="text-3xl"><span class="text-orange-600 font-medium">Ф</span>отографии</div>
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
                        <li class="inline-flex items-center">
                            <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                Новости
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Фотографии</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <section class="text-blue-950  space-y-6 pt-2 py-4">
                    <div class="bg-sky-600  text-blue-950 text-center py-4 header-date rounded-3xl">
                        <div class="mt-2">
                            <span class="text-white text-2xl m-6">Добро пожаловать на страницу фотографий</span>
                        </div>
                        <div class="flex justify-center space-x-8 text-xl text-center m-8">
                            <div class="text-white flex flex-col items-center">
                                <p>
                                    Здесь вы можете ознакомиться с фотографиями нашего храма и мероприятий, проводимых в нем.
                                    Просмотрите галерею снимков, отражающих духовную жизнь и архитектурное великолепие нашего храма.
                                </p>
                            </div>
                        </div>
                    </div>
            </section>

                <section  class="#">
                    <div class="py-4">

                <div class="mb-4 flex items-center justify-center py-4 md:py-8 flex-wrap">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                        <li class="me-2" role="presentation">
                            <button class="text-blue-600 border border-white hover:border-blue-600
                             dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4
                             focus:outline-none focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5
                             text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800 tab-button"
                                    id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> Все фоторгафии</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="text-blue-600 border border-white hover:border-blue-600
                             dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none
                             focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center
                             me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Фотографии Храма князя Влвдимира</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block text-blue-600 border border-white hover:border-blue-600
                             dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none
                             focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center
                             me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Фотографии часовни Целетельницы</button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button class="inline-block text-blue-600 border border-white hover:border-blue-600
                             dark:border-gray-900 dark:bg-gray-900 dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none
                             focus:ring-blue-400 rounded-full text-base font-medium px-5 py-2.5 text-center
                             me-3 mb-3 dark:text-white dark:focus:ring-gray-800"
                                    id="settings-tab" data-tabs-target="#school" type="button" role="tab" aria-controls="settings" aria-selected="false">Фотографии воскресной школы</button>
                        </li>
                    </ul>
                </div>


                <div id="default-tab-content">

                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">

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
                                </div>
                                <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                    @foreach($all as $one)
                                        <li><img x-on:click="imageGalleryOpen" src="{{asset('storage/'.$one->url)}}" class="object-cover select-none w-full h-auto bg-gray-200 cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="{{$one->name}}"></li>
                                    @endforeach
                                </ul>

                            </div>
                            <template x-teleport="body">
                                <div x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300"
                                     x-transition:enter-start="opacity-0" x-transition:leave="transition ease-in-in duration-300"
                                     x-transition:leave-end="opacity-0" @click="imageGalleryClose"
                                     @keydown.window.escape="imageGalleryClose" x-trap.inert.noscroll="imageGalleryOpened"
                                     class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out" x-cloak>
                                    <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12">
                                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')"
                                             class="absolute left-0 flex items-center justify-center text-white
                                             translate-x-10 rounded-full cursor-pointer xl:-translate-x-24
                                             2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                            </svg>
                                        </div>
                                        <img x-show="imageGalleryOpened" x-transition:enter="transition ease-in-out duration-300"
                                             x-transition:enter-start="opacity-0 transform scale-50" x-transition:leave="transition ease-in-in duration-300"
                                             x-transition:leave-end="opacity-0 transform scale-50" class="object-contain object-center w-full h-full
                                             select-none cursor-zoom-out" :src="imageGalleryActiveUrl" alt="" style="display: none;">
                                        <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute right-0 flex
                                        items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer
                                        xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">

                        <div class="hidden p-4 rounded-lg" id="dashboard" role="tabpanel" aria-labelledby="settings-tab">
                            <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                @foreach($hram as $one)
                                    <li><img x-on:click="imageGalleryOpen" src="{{asset('storage/'.$one->url)}}" class="object-cover select-none w-full h-auto bg-gray-200 cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="{{$one->name}}"></li>
                                @endforeach
                            </ul>
                        </div>

                    </div>


                   <!-- <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">

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
                                    <li><img x-on:click="imageGalleryOpen" src="images/1.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 01"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/2.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 07"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/3.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]  rounded-lg" alt="photo gallery image 08"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/4.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]  rounded-lg" alt="photo gallery image 09"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/5.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]  rounded-lg" alt="photo gallery image 10"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 06"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 07"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 08"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 09"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 10"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 06"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 07"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 08"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 09"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 10"></li>
                                </ul>


                                <div class="mt-2 h-min-24 my-8 py-4 px-4 mx-auto w-3/4 text-center shadow-2xl shadow-gray-100 rounded-lg">
                                    <span class="text-blue-950 text-2xl ">Служение от 15.10.2024</span>
                                </div>
                                <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                    <li><img x-on:click="imageGalleryOpen" src="images/1.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 01"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/2.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 07"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/3.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]  rounded-lg" alt="photo gallery image 08"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/4.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]  rounded-lg" alt="photo gallery image 09"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/5.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]  rounded-lg" alt="photo gallery image 10"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 06"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 07"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 08"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 09"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 10"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/6.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 06"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/7.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 07"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/9.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 08"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/10.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 09"></li>
                                    <li><img x-on:click="imageGalleryOpen" src="images/12.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="photo gallery image 10"></li>
                                </ul>


                            </div>
                    </div>
-->

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

                </div>





                    <div class="hidden p-4 rounded-lg" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                            @foreach($chasovnja as $one)
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('storage/'.$one->url)}}" class="object-cover select-none w-full h-auto bg-gray-200 cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="{{$one->name}}"></li>
                            @endforeach
                        </ul>
                    </div>

                        <div class="hidden p-4 rounded-lg" id="school" role="tabpanel" aria-labelledby="settings-tab">
                            <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                            @foreach($school as $one)
                                <li><img x-on:click="imageGalleryOpen" src="{{asset('storage/'.$one->url)}}" class="object-cover select-none w-full h-auto bg-gray-200 cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4] rounded-lg" alt="{{$one->name}}"></li>
                            @endforeach
                            </ul>
                        </div>


                    </div>
                    </div>
                </section>
            </section>
        </div>
    </x-slot>
</x-app-layout>
