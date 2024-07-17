<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap flex-col">
            <div class="text-3xl mt-3 text-center pb-5">{{$blog->name}}</div>
            <div class="grid grid-cols-1 rounded w-full">
                <div>
                    <div class="text p-3 pb-0 font-bold text-center">
                        <a class="text-amber-900 hover:underline"
                           href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}</a>
                    </div>
                    <div class="flex items-center justify-center h-screen">
                        <img src="{{asset('storage/'.$blog->picture)}}">
                    </div>
                    <div class="col-span-3">
                        <div class="flex items-center justify-center">
                            <div class="prose m-2 text-center">
                                {!! $blog->description_small!!}
                            </div>
                        </div>
                    </div>
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
    </x-app-layout>
