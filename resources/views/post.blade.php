<x-layout>
<!-- <article>
    <h1>{{$post->title}}</h1>
    <h5>{{$post->body}}</h5>
        <p>
          By <a href="/authors/{{$post->author->username}}" > {{$post->author->name}} in </a>  <a href="/categories/{{$post->category->slug}} ">{{$post->category->name}}</a>
        </p>
        <a href="/"> Go back</a>
      </article> -->




      <section class="px-6 py-8">

    

        <main class="max-w-6xl mx-auto mt-20 space-y-4 ">
            <article class="lg:grid lg:grid-cols-12 gap-x-10 max-w-5xl mx-auto pt-10">
                <div class="col-span-4 text-center">
                    <img src="/storage/{{$post->thumbnail}}" alt="" class="rounded-xl" style="max-width: 300px;">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Publised <time>{{$post->created_at->diffForHumans()}}</time>
                    </p>

                    <div class="flex items-center text-sm justify-center mt-4">
                        <img src="/images/user.png" width=20 alt="user-hear" >
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{$post->author->name}}</h5>
                            
                        </div>
                    </div>

                </div>
                <!-- <div>
                    <h2>Want to participate</h2>
                </div> -->
                <div class="col-span-8 -m-10">
                    <div class="flex justify-between ">
                        <a href="/" class=" transition-colors duration-300 relative inline-flex items-center hover:bg-blue-500 text-lg hover:bg-blue-500 focus:bg-blue-500 hover:text-white  focus:text-white "><img  src="/images/back.png" alt="back" width="15"class=" mr-3"> Back to post  </a>

                        <div class="space-x-2">

                         <!-- <a href="/categories/{{$post->category->slug}}" class="px-3 py-3 border border-blue-300 text-blue-300 rounded-full font-semibold  text-xs uppercase" style="font-size: 10px;">{{$post->category->name}}</a> -->

                            <x-category-button :post="$post"/>                
                        </div>
                    </div>


                    <h1 class="font-bold text-4xl mt-10">{{$post->title}}  </h1>

                    <div class="space-y-6 mt-10 text-lg">
                        {{$post->excerpt}}
                         <h2 class="font-bold text-xl">{{$post->body}}</h2> 
                         
                    </div>
                </div>

               

                <section class="col-span-8 col-start-5 mt-10 space-y-6">

                
                    @auth
                        <form method="POST" action="/posts/{{$post->slug}}/comments" class="border border-blue-200 p-6 rounded-xl">
                            @csrf

                            <header class="flex items-center">

                                <img src="/images/user.png",alt="user-image" width="40" height="40" class="rounded-xl">
                                <h2 class="ml-4">Want to participate?</h2>
                            </header>
                            <div class="mt-6">
                                <textarea class="w-full text-sm focus:outline-none focus:ring" name="body" required rows="7" placeholder="Your thought?">

                                </textarea>
                                @error('body')
                                    <span class="text-xs text-red-500">{{$message}}</span>

                                @enderror    
                            </div>  
                            
                            <div class="flex justify-end pt-6 border-t border-gray-100"> 
                                <button class=" bg-blue-500 font-semibold hover:bg-blue-600 p-2 px-5 rounded-full text-sm text-white uppercase"type="submit" >Post</button>
                            </div>
                        </form>

                        @else
                              <p class="font-semibold">
                                <a href="/register" class="hover:underline"> Register </a> <a href="/login" class="hover:underline"> or Login</a>  to leave comment
                                </p>  


                    @endauth    
                    @foreach($post->comments as $comment)
                    <!-- {{}} -->

                        <x-post-comment :comment="$comment"/>
                    @endforeach
                    

                </section>

            </article>


            

        </main>


                
                      
</x-layout>