<!doctype html>

    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com" ></script>
    <script src="/fonts/Open_Sans.zip"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

<style>

html{
    scroll-behavior:smooth;
}    
</style>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">

        <nav class="flex justify-between items-center">
            
            <div>
                <a href="/">
                    <img src="/images/logo.png"  width="100", height="16" alt="Logo">
                </a>
            </div>
            <div>
                @auth
                    <span class="text-xs  font-bold uppercase">Welcome ,{{auth()->user()->name}}</span>
                    <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6 inline-flex">
                        @csrf
                        <button type="submit">Log out</button>
                    </form>
                    @else
                        <a href="/register" class="text-xs  font-bold uppercase">Register</a>
                        <a href="/login" class="ml-6 text-xs  font-bold uppercase">Log In</a>
               
                @endauth
                <a href="#newsletter"class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5 transition-colors duration-300 hover:bg-blue-600">Subscribe for updates</a>

            </div>
        </nav>    

        {{$slot}}
     

        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center mt-16 px-10 py-16">
            <img src="/images/mailbox-full.png" class="mx-auto" width="150" alt="">
            <h5 class="text-3xl">Best post every day!</h5>
            <p class="text-sm">No old but latest feed every day no repeat</p>

            <div class="mt-10">

                <div id ="newsletter"class="relative inline-block  mx-auto bg-gray-200 rounded-full">
                    
                    <form method="POST" action="\newsletter" class="flex text-sm ">
                    @csrf

                        <div class="py-3 px-5 inline-flex items-center">
                            <label for="email">
                                <img src="/images/emial-icon.png" width="25 " alt="email" >
                            </label>
                            <input  name="email" id="email" placeholder="Your Email address" class="bg-transparent pl-4 focus-within:outline-none" >
                        </div>
                        <div>
                            @error('email') 
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">Subscribe</button>

                    </form>

                </div>

            </div>

        </footer>

    </section>
    
    @if(session()->has('success'))
        <div x-data="{show:true }"
            x-init="setTimeout(()=>show=false, 4000)"
            x-show="show"
            class="bg-blue-400 bottom-3 fixed px-4 py-2 right-3 rounded-xl text-white"
        >
          <p >{{session('success')}}</p>
        </div>    
    @endif
</body>
