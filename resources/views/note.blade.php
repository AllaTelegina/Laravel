<x-app-layout>
    <x-slot name="header">

        <div class="text-blue-950 py-12">
            <div class="mt-4">
                <div class="text-3xl"><span class="text-red-700 font-medium">П</span>одать записку</div>
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
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Подать записку</span>
                        </div>
                    </li>
                </ol>
            </nav>


            <div class="flex-1 mt-8">
                <div class="relative h-screen w-full">
                    <img src="{{asset('images/note.jpg')}}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" />
                </div>
            </div>
        </div>

        <section class="text-blue-950  space-y-4 pt-16">
            <div class="container px-10 py-24 mx-auto bg-blue-100">
                <p>
                    Подать записку онлайн – это современный и удобный способ участия в духовной жизни нашего храма, доступный в любое время
                    и из любого места. Через наш онлайн-сервис вы можете заказать различные церковные службы и молебны, такие как обедня,
                    молебен, панихида, сорокоуст на полгода и год, а также акафисты. В нашем храме проводятся акафисты святому равноапостольному
                    князю Владимиру, святому благоверному великому князю Александру Невскому, перед иконами Божией Матери «Целительница»,
                    «Всецарица», «Неупиваемая Чаша», и святителю Николаю Чудотворцу.
                    Подача записок онлайн имеет множество преимуществ. Во-первых, это невероятно удобно – вы можете сделать это, не покидая дома,
                    в любое удобное для вас время. Ваши молитвенные просьбы сразу же поступят к священнослужителям, которые включат их в ближайшие
                    богослужения. Во-вторых, это особенно важно в нынешние времена, когда здоровье и безопасность стоят на первом месте. Вы сможете
                    избежать посещения многолюдных мест и при этом быть уверены, что ваши молитвы будут услышаны. В-третьих, ваши пожертвования,
                    сделанные при подаче записок онлайн, помогут нашему храму продолжать свою работу и проводить необходимые реставрационные и р
                    емонтные работы.
                    Мы благодарны вам за поддержку и рады предложить возможность подать записку онлайн, делая участие в жизни прихода доступным для всех.
                </p>
            </div>
        </section>

    </x-slot>
</x-app-layout>
