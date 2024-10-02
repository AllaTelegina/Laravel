<x-app-layout>
    <x-slot name="header">



<div class="relative mt-24">

    <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <div class="w-full h-full flex justify-center items-center">
            <h1 id="typewriter" class="text-5xl font-bold text-blue-950"></h1>
        </div>

        <script>
            const words = ['Презентация к дипломной работе', '"Сайт храма князя Владимира"'];
            let i = 0;
            let j = 0;
            let currentWord = "";
            let isDeleting = false;

            function type() {
                currentWord = words[i];
                if (isDeleting) {
                    document.getElementById("typewriter").textContent = currentWord.substring(0, j-1);
                    j--;
                    if (j == 0) {
                        isDeleting = false;
                        i++;
                        if (i == words.length) {
                            i = 0;
                        }
                    }
                } else {
                    document.getElementById("typewriter").textContent = currentWord.substring(0, j+1);
                    j++;
                    if (j == currentWord.length) {
                        isDeleting = true;
                    }
                }
                setTimeout(type, 200);
            }

            type();
        </script>
    </div>

    <div class="sticky top-0 h-screen flex flex-col items-center justify-center text-3xl text-blue-950 bg-gradient-to-b from-blue-50 to-sky-500 lg:mt-40">
        <div class="w-full h-full flex justify-center items-center">
            <h1 id="typewriter" class="text-5xl font-bold text-blue-950"></h1>
        </div>
    <h2 class="w-full h-full flex justify-center items-center text-4xl font-bold">Цель проекта</h2>
        <h3 class="m-4">В наше время интернет играет ключевую роль во всех сферах человеческой жизни,
            включая духовную. С цифровым развитием церкви, храмы, монастыри и другие обители начинают
            активно использовать онлайн-ресурсы для поддержания связи с прихожанами, распространения
            веры и духовного наставничества.
             </h3>
        <ol class="list-decimal">
            <li>Информационное обеспечение</li>
            <li>Удобство использования</li>
            <li>Поддержка обратной связи</li>
            <li>Онлайн-пожертвования</li>
            <li>Охват большей аудитории</li>
        </ol>

            <div class="max-w-screen-xl 2xl:max-w-screen-3xl px-8 md:px-12 mx-auto py-4 lg:py-12 space-y-24 h-svh flex flex-col justify-center">
                <div class="flex flex-col sm:flex-row mx-auto">

                    <a href="#_">
                        <img src="/images/prezent1.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                    </a>
                    <a href="#_">
                        <img src="/images/prezent2.png" class="rounded-xl  -rotate-12 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                    </a>
                    <a href="#_">
                        <img src="/images/prezent3.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                    </a>
                    <a href="#_">
                        <img src="/images/note.jpg" class="rounded-xl  -rotate-12 hover:rotate-0
                         duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                    </a>
                </div>
            </div>
    </div>

    <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <div class="w-full h-full flex justify-center items-center">
            <h1 id="typewriter" class="text-5xl font-bold text-blue-950"></h1>
        </div>
        <h2 class="text-4xl font-bold">Задачи проекта</h2>
        <p class="mt-2">
        <ol class="list-decimal text-3xl">
            <li>Анализ и исследование</li>
            <li>Разработка информационной структуры сайта</li>
            <li>Дизайн и пользовательский интерфейс</li>
            <li>Обратная связь и общение</li>
            <li>Оптимизация и тестирование</li>
            <li>Написание инструкции для работы с административной панелью</li>
        </ol></p>
        <div class="max-w-screen-xl 2xl:max-w-screen-3xl px-8 md:px-12 mx-auto py-4 lg:py-12 space-y-24 h-svh flex flex-col justify-center">
            <div class="flex flex-col sm:flex-row mx-auto">

                <a href="#_">
                    <img src="/images/prezent5.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/logo.png" class="rounded-xl  -rotate-12 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent7.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent6.png" class="rounded-xl  -rotate-12 hover:rotate-0
                         duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
            </div>
        </div>
    </div>

    <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <div class="w-full h-full flex justify-center items-center">
            <h1 id="typewriter" class="text-5xl font-bold text-blue-950"></h1>
        </div>
        <h2 class="text-4xl font-bold">Проектирование сайта</h2>
        <p class="mt-2">
        <ol class="list-decimal text-3xl">
            <li>PHP</li>
            <li>Tailwind CSS</li>
            <li>AlpineJS</li>
            <li>Laravel</li>
            <li>Livewire</li>
        </ol>
        </p>
        <p>современный технологический стек TALL</p>
        <div class="max-w-screen-xl 2xl:max-w-screen-3xl px-8 md:px-12 mx-auto py-4 lg:py-12 space-y-24 h-svh flex flex-col justify-center">
            <div class="flex flex-col sm:flex-row mx-auto">
                <a href="#_">
                    <img src="/images/prezent8.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent9.png" class="rounded-xl  -rotate-12 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent10.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent11.png" class="rounded-xl  -rotate-12 hover:rotate-0
                         duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
            </div>
        </div>
    </div>

    <div class="sticky top-0 h-screen text-2xl flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <div class="w-full h-full flex justify-center items-center">
            <h1 id="typewriter" class="text-5xl font-bold text-blue-950"></h1>
        </div>
        <h2 class="text-4xl font-bold">Разработка панели администратора</h2>
        <p class="mt-2 text-3xl">Fillament</p>
        <p class="p-8">Filament является удобным и гибким админ-фреймворком, который помогает быстро и эффективно разрабатывать панели администрирования с минимальным количеством кода.
            В панели администрирования для сайта храма есть несколько ключевых разделов и функций, которые позволяют администраторам управлять контентом и обеспечивать его актуальность.</p>
        <div class="max-w-screen-xl 2xl:max-w-screen-3xl px-8 md:px-12 mx-auto py-4 lg:py-12 space-y-24 h-svh flex flex-col justify-center">
            <div class="flex flex-col sm:flex-row mx-auto">
                <a href="#_">
                    <img src="/images/prezent12.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent13.png" class="rounded-xl  -rotate-12 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent14.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent15.png" class="rounded-xl  -rotate-12 hover:rotate-0
                         duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
            </div>
        </div>
    </div>
    <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <div class="w-full h-full flex justify-center items-center">
            <h1 id="typewriter" class="text-5xl font-bold text-blue-950"></h1>
        </div>
        <h2 class="text-4xl font-bold">Тестирование сайта</h2>
        <p class="mt-2 text-3xl">Ключевые моменты</p>
        <p class="p-8">
        <ol class="list-decimal text-3xl">
            <li>Функциональное тестирование</li>
            <li>Кроссбраузерное тестирование</li>
            <li>Юзабилити-тестирование</li>
            <li>Тестирование контента</li>
        </ol>
        </p>
        <div class="max-w-screen-xl 2xl:max-w-screen-3xl px-8 md:px-12 mx-auto py-4 lg:py-12 space-y-24 h-svh flex flex-col justify-center">
            <div class="flex flex-col sm:flex-row mx-auto">
                <a href="#_">
                    <img src="/images/prezent16.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent6.png" class="rounded-xl  -rotate-12 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent18.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent17.png" class="rounded-xl  -rotate-12 hover:rotate-0
                         duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
            </div>
        </div>
    </div>

    <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <div class="w-full h-full flex justify-center items-center">
            <h1 id="typewriter" class="text-5xl font-bold text-blue-950"></h1>
        </div>
        <h2 class="text-4xl font-bold">Продвижение сайта</h2>
        <p class="p-8">
        <ol class="list-decimal text-3xl">
            <li>Теги заголовков H1, H2, H3</li>
            <li>Alt-теги для изображений</li>
            <li>Внутренние ссылки </li>
            <li>Meta Description </li>
            <li>Keywords</li>
            <li>Мобильная адаптация</li>
        </ol>
        </p>
        <div class="max-w-screen-xl 2xl:max-w-screen-3xl px-8 md:px-12 mx-auto py-4 lg:py-12 space-y-24 h-svh flex flex-col justify-center">
            <div class="flex flex-col sm:flex-row mx-auto">
                <a href="#_">
                    <img src="/images/prezent20.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent21.png" class="rounded-xl  -rotate-12 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent22.png" class="rounded-xl  rotate-6 hover:rotate-0
                        duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
                <a href="#_">
                    <img src="/images/prezent23.png" class="rounded-xl  -rotate-12 hover:rotate-0
                         duration-500 hover:-translate-y-12 h-full w-full object-cover hover:scale-150 transform origin-bottom" alt="#_">
                </a>
            </div>
        </div>
    </div>

    <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <h2 class="text-4xl font-bold">Новые возможности сайта</h2>
        <p class="p-12 text-2xl">
            Сайт разработан и предоставляет множество полезных функций
            и у него есть потенциал для дальнейшего роста и развития,
            чтобы он стал еще более привлекательным для пользователей.
            Есть идеи для усовершенствования и внедрения новых возможностей,
            чтобы сделать его еще более комфортным и приятным для пользователя.
        </p>
    </div>

    <div class="sticky top-0 h-screen flex flex-col items-center justify-center bg-gradient-to-b from-blue-50 to-sky-500">
        <h2 class="text-4xl font-bold">Спасибо за внимание!
       </h2>
        <p class="mt-2 text-2xl">С Уважением Алла Телегина</p>
    </div>
</div>

    </x-slot>
</x-app-layout>
