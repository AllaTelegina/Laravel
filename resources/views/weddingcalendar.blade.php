<x-app-layout>
    <x-slot name="header">
    <div class="text-blue-950 py-12">
        <div class="mt-4">
            <div class="text-3xl"><span class="text-red-700 font-medium">К</span>алендарь Венчаний</div>
        </div>
        <!-- панировочные сухари -->
        <nav class="flex m-4" aria-label="Breadcrumb">
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
                        <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Православный календарь</a>
                    </div>
                </li>
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Календарь венчаний</span>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="bg-blue-400  text-white text-center py-4 header-date">
            <div class="mt-2">
                <span class="text-white text-5xl m-6">Дни совершения Таинства Брака</span>
            </div>
            <div class="flex justify-center space-x-8 text-2xl text-center m-8">
              <p>Венчание – это важное событие в жизни каждой православной семьи.
                  Выбор даты для венчания играет значимую роль, так как она должна
                  соответствовать церковным канонам и традициям.
              </p>
            </div>
        </div>


        <div class="pt-12">
            <div class="relative w-full h-96">
                <img class="absolute h-full w-full object-cover object-center rounded-xl" src="{{asset('images/venchanie.jpeg')}}" alt="nature image" />
                <div class="relative pt-28 text-center">
                    <h2 class="block antialiased tracking-normal font-sans font-semibold leading-[1.3] text-white mb-4 text-3xl lg:text-4xl">О важности Венчания</h2>
                </div>
            </div>
            <div class="-mt-16 mb-8 px-8 ">
                <div class="container mx-auto shadow-xl shadow-gray-300">
                    <div class="py-8 flex justify-center rounded-xl bg-blue-100 shadow-md shadow-black/5 saturate-200">
                        <div class="my-4 grid gap-6 px-4">
                            Венчание — это святое таинство, через которое мужчина и женщина получают благословение на создание семьи в
                            христианской традиции. Оно подчеркивает не только юридическую, но и духовную сторону брака, делая его
                            священным союзом перед Богом. Венчание освящает брачный союз, привлекая благодать Божью для укрепления
                            семьи. Супруги соединяются не только физически, но и духовно, обещая перед Богом хранить верность
                            и любовь друг к другу. Таинство венчания дарует супругам поддержку Святого Духа, помогая им преодолевать
                            жизненные трудности. Венчанный брак служит примером для окружающих, подчеркивая важность христианских
                            семейных ценностей. Венчание связывает супругов с многовековыми традициями Церкви, усиливая их чувство
                            принадлежности к духовной общине. Оно помогает супругам осознать глубину и значимость их союза, наполняет
                            семейную жизнь духовным смыслом и поддерживает их в стремлении строить крепкую и благочестивую семью.
                            <div class="flex justify-end p-4">
                                <button type="submit" class="transform motion-safe:hover:scale-110 transition duration-700 ease-in-out bg-orange-400 text-white font-medium py-2 px-4 rounded hover:bg-blue-950">
                                    <a href="#">Нужна консультация?</a>
                                </button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>


</x-slot>

</x-app-layout>
