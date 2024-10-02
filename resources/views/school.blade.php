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
                                <h1 class="mb-2 leading-relaxed text-2xl">О воскресной школе</h1>
                                <p class="mb-2 leading-relaxed text-xl text-justify indent-8">
                                    Воскресная школа при храме Покрова Пресвятой Богородицы в Жабинке работает с 2003 года.
                                    Сейчас в ней обучается около 200 детей. Цель школы - приобщение детей к литургической
                                    жизни Церкви и формирование навыков православно-христианского образа жизни через
                                    участие в богослужениях и Таинствах.
                                </p>
                            </div>
                            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                                <img class="object-cover object-center rounded-3xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('images/school.jpg')}}">
                            </div>
                        </div>
                    </div>
                </section>


                <div class="py-4 h-min-24 mx-auto w-3/4  bg-blue-100 shadow-2xl shadow-gray-300 rounded-lg">
                    <p class="leading-relaxed text-xl text-center p-4">
                        В воскресную школу принимаются все желающие без экзаменов в возрасте от 6 до 12 лет.
                        Для приёма в школу родителям желающих учиться детей необходимо написать заявление
                        (прошение на имя настоятеля) в течение августа месяца. Дети шестилетнего возраста
                        зачисляются в подготовительный класс.
                        Срок обучения с учётом подготовительного класса – 7 лет. Учебный год начинается
                        в первое воскресенье сентября и продолжается до конца мая. Занятия проходят по
                        воскресным дням, согласно установленному расписанию.
                    </p>
                </div>


                <section class="text-blue-950  space-y-6 pt-2 py-4">
                    <section>
                        <div class="my-8">
                            <div class="text-3xl"><span class="text-orange-600 font-medium">П</span>рограмма обучения</div>
                        </div>
                        </section>
                            <div class="mt-2 h-min-24 my-8 py-4 px-4 mx-auto bg-blue-100 text-justify shadow-2xl shadow-gray-300 rounded-lg">
                                <p class="text-lg indent-8">Программа обучения длится 7 лет и включает изучение Ветхого и Нового Завета, истории Церкви,
                                    православных богослужений, храмоведения, церковных праздников, житий святых и молитв. Обязательная часть
                                    уроков - посещение богослужений (Божественной Литургии). Подготовительный класс помогает детям подготовиться к
                                    первой исповеди, познакомиться с основными церковными понятиями и начать самостоятельную церковную жизнь."</p>
                                <p class="text-lg py-4 indent-8">Программа первого класса включает в себя основные понятия о храмоведении, о правилах поведения в храме.
                                    Программа второго класса базируется на изучении иконописи и иконостаса Православной Церкви.
                                    Программа третьего класса основное значение уделяет изучению истории Ветхого Завета.
                                    Программа четвёртого класса строится на изучении истории Нового Завета.
                                    Программа пятого класса рассчитана на изучение Богослужений Православной Церкви, а также церковнославянского языка.
                                    Божественной Литургии, повторение, а также углубление знаний всего учебного материала, на подготовку к выпускному экзамену.
                                    Программа шестого класса продолжает изучение Богослужений, а также включает знание основ православной нравственности,
                                    житий белорусских святых. Также уделяется внимание повторению и углублению знаний всего ученого материала в связи
                                    с подготовкой к выпускному экзамену."</p>
                                <p class="text-lg py-4 indent-8">По окончанию воскресной школы и успешной сдачи выпускных экзаменов учащимся выдаются свидетельства
                                    об окончании воскресной школы.
                                Деятельность воскресной школы не ограничивается только уроками один раз в неделю. Традицией стали рождественские
                                    и пасхальные постановки для учреждений образования города и района, а также проведение различных выставок,
                                    конкурсов и т.п. детей и их родителей в течение всего учебного года. Традиционным стал и летний поход учителей
                                    и семей детей, обучающихся в воскресной школе. Также в течение учебного года совершаются паломнические
                                    поездки по святым местам Беларуси.</p>
                            </div>



                    <div class="my-2 pt-8">
                        <div class="text-3xl"><span class="text-orange-600 font-medium">Н</span>овости школы</div>
                    </div>
                    <section class="text-blue-950 body-font">
                        <div class="container px-5 py-4 mx-auto">
                            <div class="flex flex-wrap -m-4">


                                <div class="p-4 md:w-1/3">
                                    <div class="h-full border-2 border-gray-200 border-opacity-60 border-rounder-lg rounded-lg overflow-hidden">
                                        <div class="relative">
                                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="images/school.jpg" alt="blog">
                                            <div class="absolute top-0 right-0 bg-sky-600 text-white font-bold px-2 py-1 m-2 rounded-md skeleton">New
                                            </div>
                                        </div>
                                        <div class="p-6">
                                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">12.09.2024</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Посещение воскресной школы</h1>
                                            <p class="leading-relaxed mb-3">Посещение воскресной школы
                                                Посещение воскресной школы
                                                Посещение воскресной школы
                                            </p>
                                            <div class="flex items-center flex-wrap ">
                                                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Подробнее
                                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
</span>
                                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-4 md:w-1/3">
                                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/721x401" alt="blog">
                                        <div class="p-6">
                                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
                                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                            <div class="flex items-center flex-wrap">
                                                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Подробнее
                                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
</span>
                                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 md:w-1/3">
                                    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://dummyimage.com/722x402" alt="blog">
                                        <div class="p-6">
                                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                                            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
                                            <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                                            <div class="flex items-center flex-wrap ">
                                                <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Подробнее
                                                    <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="M5 12h14"></path>
                                                        <path d="M12 5l7 7-7 7"></path>
                                                    </svg>
                                                </a>
                                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>1.2K
</span>
                                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>6
              </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>




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
                                                <span class="text-blue-950 text-2xl ">Экскурсия от 28.09.2024</span>
                                            </div>
                                            <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
                                                <li><img x-on:click="imageGalleryOpen" src="images/1s.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 01"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/2s.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/3s.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 08"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/6s.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 06"></li>
                                                <li><img x-on:click="imageGalleryOpen" src="images/7s.jpg" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]" alt="photo gallery image 07"></li>
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
                        </section>
                    </section>
                </section>


                            <section>
                                <div class="my-8">
                                    <div class="text-3xl"><span class="text-orange-600 font-medium">К</span>онтакты</div>
                                </div>
                                <section>
                                    <div class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
                                        <figure class="md:flex max-w-5xl bg-blue-100 rounded-lg  md:p-0">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1028.274110900201!2d23.99296579535357!3d52.19502032699223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47211b147a1ef3e3%3A0x1493e0af0f0e1258!2z0YPQu9C40YbQsCDQmtC-0LzRgdC-0LzQvtC70YzRgdC60LDRjyA4Miwg0JbQsNCx0LjQvdC60LAsINCR0YDQtdGB0YLRgdC60LDRjyDQvtCx0LvQsNGB0YLRjCwg0JHQtdC70LDRgNGD0YHRjA!5e0!3m2!1sru!2sru!4v1727854978941!5m2!1sru!2sru" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                                            <div class="card lg:card-side bg-blue-100">
                                                <div class="card-body">
                                                    <h2 class="card-title">Как к нам приехать</h2>
                                                    <p>Брестская обл., г. Жабинка, ул. Комсомольская, 82</p>
                                                    <p> Директор воскресной школы - Быкова Ольга Георгиевна
                                                        <a class="link link-hover href="tel:+375297984533">+375 29 798 45 33</a>
                                                    </p>
                                                        <p>Заместитель директора по учебной части - Орехова Светлана Владимировна
                                                            <a class="link link-hover href="tel:+375292238136">+375 29 223 81 36</a>
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
