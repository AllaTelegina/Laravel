<x-app-layout>

    <x-slot name="header">

        <section class="bg-blue-300 py-8">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <p class="mb-2 leading-relaxed">Приход храма</p>
                    <p class="mb-2 leading-relaxed">равноапостольного</p>
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white-900">КНЯЗЯ ВЛАДИМИРА</h1>
                    <p class="mb-2 leading-relaxed text-white-700">д.Чижевщина Брестской епархии</p>
                    <p class="mb-2 leading-relaxed">Белорусского Экзархата</p>
                    <p class="mb-2 leading-relaxed">Московского Патриарха</p>
                    <div class="flex justify-center">
                        <button class="inline-flex border-0 py-2 px-6 focus:outline-none text-lg transform
                        motion-safe:hover:scale-110 bg-orange-400 text-white font-medium  rounded hover:bg-blue-950
                         transition duration-700 ease-in-out">Выбрать требу</button>
                        <button class="ml-4 inline-flex border-0 py-2 px-6 focus:outline-none text-lg
                        transform motion-safe:hover:scale-110 bg-blue-950 text-white font-medium rounded hover:bg-orange-400 transition duration-700 ease-in-out
                        ">Пожертвовать</button>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                    <img class="object-cover object-center rounded-lg" alt="hero" src="/images/fon.jpg">
                </div>
            </div>
        </section>


        <div class="hero min-h-screen">
            <img src="images/glavnaya1.jpg" />
            <div class="hero-overlay bg-opacity-0"></div>
            <div class="hero-content text-neutral-content text-left">
                <div class="max-w-md">
                    <p class="mb-5">
                        Приход храма
                        </br>равноапостольного
                    </p>
                    <h1 class="mb-5 text-5xl font-bold">КНЯЗЯ ВЛАДИМИРА</h1>
                    <p class="mb-5">
                        д.Чижевщина Брестской епархии
                        </br>Белорусского Экзархата
                        </br>Московского Патриарха
                    </p>
                    <button class="btn btn-primary">Get Started</button>
                </div>
            </div>
        </div>


        <div class="w-full p-2 m-2 bg-gray-100 rounded-lg shadow">
            <div class = "flex flex-wrap justify-center" x-data = "genCalendar()" x-init="hozirgivaqt()" x-cloak >
                <div class = "flex flex-wrap w-full h-12 p-1 m-1 text-xl font-bold bg-white rounded-lg shadow-lg">
                    <p class ="w-1/3 p-1 text-center text-blue-900 shadow-md cursor-pointer hover:text-blue-600 hover:shadow-inner bg-gray-50 rounded-l-md" @click = "year-=1 "><svg xmlns="http://www.w3.org/2000/svg" class="block w-6 h-8 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg></p>
                    <p class ="w-1/3 p-1 text-center text-blue-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50"   x-text ="year"></p>
                    <p class ="w-1/3 p-1 text-center text-blue-900 shadow-md cursor-pointer hover:text-green-600 hover:shadow-inner bg-gray-50 rounded-r-md" @click = "year+=1 "><svg xmlns="http://www.w3.org/2000/svg" class="block w-6 h-8 m-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg></p>
                </div>
                <template x-for ="(month,index) in month_names">
                    <div class="p-1 m-1 font-sans bg-white rounded shadow-md lg:w-72 w-80 bg-blend-luminosity bg-gradient-to-b from-blue-50 via-white to-blue-50">
                        <p class="p-1 text-xl font-semibold text-center text-indigo-800" x-text = "month"></p>
                        <div class="p-1 m-1">
                            <div class="grid grid-cols-7 font-semibold text-blue-800 border-b-2">
                                <template x-for = "days in day_names">
                                    <div class="grid place-items-center" :class ="{'text-red-600': days == 'Ya'}">
                                        <p x-text = "days"></p>
                                    </div>
                                </template>
                            </div>
                            <!-- calendar raqamlari bloki-->
                            <div class="grid grid-cols-7 gap-1 font-semibold text-center text-gray-800 ">
                                <template x-for = "kun in daysgenerater()[index]">
                                    <div :class="{' ring-blue-400 ring-4 rounded-full': isbugun(kun,index) == true, 'text-red-600': isyakshanba(kun,index) == true , ' hover:bg-green-100': isbugun(kun,index) == false }" >
                                        <p x-text="kun"></p>
                                    </div>
                                </template>
                            </div>
                            <!-- calendar raqamlari bloki oxiri-->
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <script>

            function genCalendar(){

                return {
                    month_names : ['Yanvar','Fevral','Mart','Aprel','May','Iyun','Iyul','Avgust','Sentyabr','Oktyabr','Noyabr','Dekabr'],
                    day_names : ['Du','Se','Ch','Pa','Ju','Sh','Ya'],
                    year : '',
                    days_of_month(){
                        kabisa = (yearin) => {return (yearin % 4 === 0 && yearin % 100 !== 0 && yearin % 400 !== 0) || (yearin % 100 === 0 && yearin % 400 ===0)};
                        fevral = (yearin) => {return kabisa(yearin) ? 29 : 28};
                        return [31, fevral(this.year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                    },
                    hafta(sol,ma) { let haftakuni =  new Date(sol,ma).getDay();
                        switch (haftakuni) { // hafta kuni Dushanbadan boshlangani uchun hak)
                            case 0:
                                haftakuni = 6;
                                break;
                            case 1:
                                haftakuni = 0;
                                break;
                            case 2:
                                haftakuni = 1;
                                break;
                            case 3:
                                haftakuni = 2;
                                break;
                            case 4:
                                haftakuni = 3;
                                break;
                            case 5:
                                haftakuni = 4;
                                break;
                            case 6:
                                haftakuni = 5;
                                break;
                            default:
                                haftakuni =  new Date(sol,ma).getDay()
                                break;
                        }
                        return haftakuni;
                    },
                    daysgenerater() {
                        let days = [];
                        for (let k = 0; k < this.days_of_month().length; k++) {
                            days.push([]);
                            for (let i = 1; i <= this.days_of_month()[k]; i++) {
                                if(days[k].length < this.hafta(this.year,k)) {
                                    i-=i;
                                    days[k].push('');
                                    continue; };
                                days[k].push(i);
                            } }
                        return days;
                    },
                    hozirgivaqt() {
                        let today = new Date();
                        this.year = today.getFullYear();
                    },
                    isbugun(kun,oy) {
                        const today = new Date();
                        const dayintable = new Date(this.year,oy,kun);
                        return today.toDateString() === dayintable.toDateString() ? true : false;
                    },
                    isyakshanba(kun,oy) {
                        const dayintable = new Date(this.year,oy,kun);
                        return dayintable.getDay() == 0 ? true : false;
                    }

                }
            }
        </script>







        <!-- component -->


            <!--  Календарь венчаний -->


            <div class="flex px-2 py-2 -mb-px">
                <div class="flex flex-wrap bg-white overflow-hidden">
                    <div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm">
                        <div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">
                            December 2018</div>
                        <div class="">
                            <table class="w-full">
                                <tr class="border-b">
                                    <th class="py-3 px-4">S</th>
                                    <th class="py-3 px-4">M</th>
                                    <th class="py-3 px-4">T</th>
                                    <th class="py-3 px-4">W</th>
                                    <th class="py-3 px-4">T</th>
                                    <th class="py-3 px-4">F</th>
                                    <th class="py-3 px-4">S</th>
                                </tr>
                                <tr>
                                    <td></td><td></td><td></td><td></td><td></td><td></td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer bg-blue text-white">6</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer bg-blue text-white">7</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td>
                                </tr><tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td>
                                </tr><tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td>
                                </tr><tr>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td>
                                    <td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td>
                                    <td>
                                    </td><td></td><td></td><td></td><td></td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm">
                        <div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">January 2019</div>
                        <div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">February 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">March 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td><td></td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">April 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td></td><td></td><td></td><td></td></tr></table></div></div><div class="w-auto mx-3 my-3 border-solid border-grey-light rounded border shadow-sm"><div class="bg-grey-lighter px-2 py-2 border-solid border-grey-light border-b text-center">May 2019</div><div class=""><table class="w-full"><tr class="border-b"><th class="py-3 px-4">S</th><th class="py-3 px-4">M</th><th class="py-3 px-4">T</th><th class="py-3 px-4">W</th><th class="py-3 px-4">T</th><th class="py-3 px-4">F</th><th class="py-3 px-4">S</th></tr><tr><td></td><td></td><td></td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">1</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">2</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">3</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">4</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">5</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">6</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">7</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">8</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">9</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">10</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">11</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">12</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">13</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">14</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">15</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">16</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">17</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">18</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">19</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">20</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">21</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">22</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">23</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">24</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">25</td></tr><tr><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">26</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">27</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">28</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">29</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">30</td><td class="py-3 px-4 hover:bg-blue hover:text-white text-center cursor-pointer">31</td><td></td></tr></table></div></div></div></div></div>

        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
                </div>
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                        </div>
                        <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                            <a class="text-indigo-500">example@email.com</a>
                            <p class="leading-normal my-5">49 Smith St.
                                <br>Saint Cloud, MN 56301
                            </p>
                            <span class="inline-flex">
            <a class="text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
              </svg>
            </a>
            <a class="ml-4 text-gray-500">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
              </svg>
            </a>
          </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
        <div class="flex-1 mt-16 ">
            <div class="relative h-screen w-full">
                <img src="images/glavnaya.jpg" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-4px">
                <div class="absolute inset-0 bg-black bg-opacity-0"></div>
                <div class="relative absolute top-16 left-16">
        <a class="btn btn-ghost text-xl p-8" href="navigation.blade.php" title="Логотип">
            <img src="{{asset('images/logo.png')}}" class="w-20 h-20" />
        </a>
        <div class="">
            <p class="text-lg text-white">Приход храма</p>
            <p class="text-lg text-white">равноапостольного</p>
            <h1 class="text-4xl text-white font-bold">КНЯЗЯ ВЛАДИМИРА</h1>
            <p class="textarea-lg text-white">д.Чижевщина Брестской епархии</p>
            <p class="textarea-lg text-white">Белорусского Экзархата</p>
            <p class="textarea-lg text-white">Московского Патриарха</p>
        </div>
        </div>
               анимация букв
               <div class="w-screen h-screen flex items-center justify-center">

                    <div class="max-w-7xl mx-auto text-center"
                         x-data="{
                    text: '',
                    textArray : ['КНЯЗЯ ВЛАДИМИРА'],
                    textIndex: 0,
                    charIndex: 0,
                    typeSpeed: 100,
                 }"
                         x-init="setInterval(function(){
                    let current = $data.textArray[ $data.textIndex ];
                    $data.text = current.substring(0, $data.charIndex);
                    $data.charIndex += 1;
                 }, $data.typeSpeed);">
                        <h1 class="text-7xl font-white" x-text="text"></h1>
                    </div>
                </div>



        <div class="menu text-2xl p-10">
            <ul class="menu text-white w-56 p-0 [&_li>*]:rounded-none">
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Храм</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Прихожанам</a>
                </li>

                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Православный календарь</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Церковная лавка</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Новости</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Храм-часовня Целительница</a>
                </li>
                <li>
                    <svg width="25" height="41" viewBox="0 0 25 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="11.1779" y="1.98136" width="2.6302" height="37.4803" rx="1.3151" stroke="white" stroke-width="2.6302"/>
                        <rect x="0.98963" y="-0.983027" width="1.97265" height="23.0142" rx="0.986325" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 1.96933 17.8491)" stroke="white" stroke-width="1.97265"/>
                        <rect width="2.6302" height="23.6718" rx="1.3151" transform="matrix(0.00335685 -0.999994 0.999994 0.00333804 0.657715 17.1049)" fill="#407BB4"/>
                        <rect opacity="0.8" x="21.3941" y="30.062" width="1.97265" height="17.7538" rx="0.986325" transform="rotate(107.371 21.3941 30.062)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.6445" y="29.8348" width="2.6302" height="18.4114" rx="1.3151" transform="rotate(107.371 21.6445 29.8348)" fill="#407BB4"/>
                        <rect opacity="0.8" x="20.7218" y="7.58059" width="1.97265" height="16.4387" rx="0.986325" transform="rotate(89.4121 20.7218 7.58059)" stroke="white" stroke-width="1.97265"/>
                        <rect opacity="0.8" x="21.0403" y="7.24176" width="2.6302" height="17.0963" rx="1.3151" transform="rotate(89.4121 21.0403 7.24176)" fill="#407BB4"/>
                        <rect x="10.521" y="1.32382" width="3.9453" height="38.7954" rx="1.97265" fill="#407BB4"/>
                    </svg>
                    <a href="#">Детям</a>
                </li>
            </ul>
        </div>
        </div>
        </div>


        <div class="container 10px-5 py-24 mx-auto">
            <div class="schedule w-fool flex items-center space-x-16 flex-col md:flex-row md:space-x-16">
                <div class="skeleton h-64 w-1/3"></div>
                <div class="skeleton h-64 w-1/3"></div>
                <div class="skeleton h-64 w-1/3"></div>
            </div>
        </div>




        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
           @foreach ($blogs as $blog)
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="{{asset('storage/' .$blog->picture)}}">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <font style="vertical-align: inherit;">
                                <a href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}</a>
                            </font>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
               {{$blog->description_small}}
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <a href="{{asset('blog/'.$blog->id)}}">Узнать больше</a>

                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">1,2 тыс.</font>
                </font>
              </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <font style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">{{$blog->comments->count()}}</div>
                </font>
              </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>



        <div class="overflow-x-auto">
            <table class="table">

-->
    </x-slot>
</x-app-layout>








