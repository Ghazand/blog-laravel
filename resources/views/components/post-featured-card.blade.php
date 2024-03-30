@props(['post'])
<article class="bg-gray-100 rounded-xl  transition-colors duration-300 hover:border border=black border-opacity-5 ">
                    <div class="py-6 px-5 flex">
                        <div class="flex-1 mr-8">
                            <img src="/storage/{{$post->thumbnail}}" alt="Blog things in detail" class="rounded-xl">
                        </div>
                        <div class="flex flex-1 flex-col justify-between">
                            <header>
                                <div class="space-x-4">
                                    <a href="/categories/{{$post->category->slug}}" class="px-3 py-3 border border-blue-300 text-blue-300 rounded-full font-semibold  text-xs uppercase">{{$post->category->name}}</a>

                                </div>
                                <div>
                                    <h1 class="text-3xl mt-4">
                                        <a href="/posts/{{$post->slug}}">
                                            {{$post->title}}
                                        </a>    
                                    
                                    </h1>
                    
                                    <span class="mt-2 block text-gray-400 text-xs">
                                        Publised <time>{{$post->created_at->diffForHumans()}}</time>
                                    </span>

                                </div>

                            </header>

                            <div class="text-sm mt-2">
                               <p> {{$post->excerpt}}</p><br>
                                <h2> {{$post->body}}</h2>
                                
                                
                            </div>
                            <footer class="flex justify-between mt-8 items-center">
                            
                                <div class="flex items-center text-sm">
                                    <img src="/images/user.png" width=20 alt="user-hear">
                                    <div class="ml-3">
                                        <h5 class="font-bold">
                                        
                                            <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a>
                                        
                                        </h5>
                                        <!-- <h6>Picutor at user</h6> -->
                                    </div>
                                </div>

                                <div>
                                    <a href="/posts/{{$post->slug}}" class="text-sm font-semibold bg-gray-200 rounded-full py-2 px-3">Read more</a>
                                </div>
                            </footer>

                        </div>

                            

                    </div>
</article>