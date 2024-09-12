<x-app-layout>
    <x-slot name="header">
    <div class="text-blue-950 py-4">
        <section class="pt-14 space-y-6">
    <div class="mt-4">
        <div class="text-3xl"><span class="text-orange-600 font-medium">О </span>Храме</div>
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
                    <a href="/" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Храм</a>
                </div>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">О Храме</span>
                </div>
            </li>
        </ol>
    </nav>

    <section class="py-4">
        <div class="relative bg-sky-600 rounded-2xl shadow-xl shadow-gray-400 mt-8">
            <a class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 bg-white rounded-full" href="/" title="Логотип">
                <img src="{{asset('images/logo.png')}}" class="w-20 h-20"/>
            </a>
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center m-8">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-8 md:mb-0 items-center text-center text-white">
                    <p class="mb-2 leading-relaxed text-2xl text-center">{{$blog->name}}</p>
                    <p class="mb-2 leading-relaxed text-xl">
                        {!! $blog->description_small!!}
                    </p>
                    <!-- <div class="flex justify-center py-8">
                        <button class="inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-orange-400 text-white font-medium rounded hover:bg-blue-950 transition duration-700 ease-in-out">Выбрать требу</button>
                        <button class="ml-4 inline-flex border-b py-2 px-6 focus:outline-none text-lg transform motion-safe:hover:scale-110 bg-blue-950 text-white font-medium rounded hover:bg-orange-400 transition duration-700 ease-in-out">Пожертвовать</button>
                    </div>
                    -->
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 shadow-2xl hover:bg-origin-padding contrast-125 scale-100">
                    <img class="object-cover object-center rounded-2xl shadow-xl shadow-gray-400" alt="hero" src="{{asset('storage/'.$blog->picture)}}">
                </div>
            </div>
        </div>
    </section>
        </section>
    </div>



    <section class="p-4 card lg:card-side text-blue-950 shadow-xl bg-blue-100">
        <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">
            <div class="text-3xl mt-3 text-center pb-5"></div>
            <div class="grid grid-cols-1 rounded w-full">
                <div>
                    <div class="col-span-3">
                        <div class="flex items-center justify-center">
                            <div class="prose text-justify rounded bg-base-100 shadow p-2">
                                {!! $blog->description!!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="text-justify rounded bg-base-100 shadow p-2 w-2/3 mt-5">
                        @foreach($blog->texts()->orderBy('id', 'DESC')->get() as $text)
                            <div>{!! $text->body !!}</div>
                            <div class="max-w-2xl mx-auto">
                                <div class="carousel w-full">
                                    @foreach($text->pictures()->orderBy('position')->get() as $picture)
                                        <div id="slide{{$text->id}}_{{$loop->iteration}}" class="carousel-item relative w-full">
                                            <div class="text-center w-full">
                                                <img src="{{asset('storage/blogs/'.$picture->picture)}}" class="w-full"/>
                                                <div
                                                    class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                                                    @php
                                                        if($loop->iteration == 1){
                                                            $prev = $loop->count;
                                                        }else{
                                                            $prev = $loop->iteration-1;
                                                        }
                                                        if($loop->iteration == $loop->count){
                                                           $next = 1;
                                                        }else{
                                                             $next = $loop->iteration+1;
                                                        }
                                                    @endphp
                                                    <a href="#slide{{$text->id}}_{{$prev}}" class="btn btn-circle">❮</a>
                                                    <a href="#slide{{$text->id}}_{{$next}}" class="btn btn-circle">❯</a>
                                                </div>
                                                <div class="badge badge-ghost">{{$picture->name}}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>



                <div class="title_comments">
                    <section class="w-full rounded-lg border-2 border-blue-500 p-4 my-8 mx-auto max-w-xl">
                        <h3 class="font-os text-lg font-bold text-purple-950">Comments</h3>
                        @foreach($comments as $comment)
                            <div class="border rounded-md p-3 ml-3 my-3">
                                <div class="flex gap-3 items-center">
                                    <h3 class="font-bold">
                                        {{$comment->username}}
                                    </h3>
                                </div>
                                <p class="text-gray-600 mt-2">
                                    {{$comment->body}}
                                </p>
                                <p class="float-right">
                                    <em>{{$comment->created_at->diffForHumans()}}</em>
                                </p>
                            </div>
                        @endforeach
                        <!-- Comment Form -->
                        <form class="mt-4" method="post" action="{{asset('blog/'.$blog->id.'/add_comment')}}">
                            @csrf


                            <div class="mb-4">
                                <label for="comment" class="block text-blue-950 font-medium">Comment</label>
                                <textarea id="comment" name="body" class="border-2 border-blue-500 p-2 w-full rounded" required></textarea>
                            </div>

                            <button type="submit"
                                    class="transform motion-safe:hover:scale-110 transition duration-700 ease-in-out
                                    bg-orange-400 text-white font-medium py-2 px-4 rounded hover:bg-blue-950">
                                Post
                                Comment
                            </button>
                        </form>
                    </section>
                </div>



            </div>
        </div>
    </section>
    </x-slot>
</x-app-layout>
