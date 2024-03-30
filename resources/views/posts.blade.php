<x-layout>

          @include('_post-header')
            <main class="max-w-6xl mx-auto mt-20 space-y-4 ">

            @if($posts->count())
                    <x-post-featured-card :post="$posts[0]"/>
                    
                    @if($posts->count()>1)
                        <div class="grid grid-cols-6">

                            @foreach($posts->skip(1) as $post)
                                    
                                <x-post-card 
                                
                                :post="$post"

                                class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
                                
                                
                                />
                                
                            @endforeach
                            
                        </div>
                       
                    @endif

            @else

                <p class="text-center">No post yest</p>
            @endif     

            </main>
<!-- @foreach($posts as $post) -->

<!-- <article>
    <h1>
        
        <a href="/posts/{{$post->slug}}">
            {{$post->title}}
        </a>
        <br>
        

    <h1>
        <p>
          By author <a href="/authors/{{$post->author->username}}">  is {{$post->author->name}} </a> Category is  <a href="/categories/{{$post->category->slug}} ">{{$post->category->name}}</a>
        </p>
        
        <div>
            <h4> Excerpt is {{$post->excerpt}}</h4>
        </div>

</article> -->
<!-- @endforeach -->

</x-layout>