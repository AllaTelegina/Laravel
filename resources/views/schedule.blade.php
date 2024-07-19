<x-app-layout>
    <x-slot name="header">

        <section class="text-blue-950  space-y-4 pt-16">
            <div class="container px-10 py-24 mx-auto bg-blue-400">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center font-medium">
                   <div class="space-y-4 tracking-wide m-8">
                       <span class=" text-white text-6xl">Сентябрь</span>
                   </div>
                    <div class="flex space-x-8 text-2xl text-center">
                        <div class="skeleton h-20 w w-20 bg-blue-200 place-content-center">23</div>
                        <div class="skeleton h-20 w w-20 bg-blue-200 place-content-center">24</div>
                        <div class="skeleton h-20 w w-20 bg-blue-200 place-content-center">25</div>
                        <div class="skeleton h-20 w w-20 bg-blue-200 place-content-center">26</div>
                        <div class="skeleton h-20 w w-20 bg-blue-200 place-content-center">27</div>
                        <div class="skeleton h-20 w w-20 bg-blue-200 place-content-center text-red-700">28</div>
                        <div class="skeleton h-20 w w-20 bg-blue-200 place-content-center text-red-700">29</div>
                    </div>
                    <div class="mt-12 text-white text-2xl text-center flex items-stretch">
                        <span class="m-6">ПН</span>
                        <span class="m-6">ВТ</span>
                        <span class="m-6">СР</span>
                        <span class="m-6">ЧТ</span>
                        <span class="m-6">ПТ</span>
                        <span class="m-6">СБ</span>
                        <span class="m-6">ВС</span>

                    </div>
                </div>
            </div>

            <div class="container px-10 py-24 mx-auto bg-blue-200 shadow-2xl  shadow-blue-300 rounded-lg">

            </div>
        </section>


    </x-slot>
</x-app-layout>
