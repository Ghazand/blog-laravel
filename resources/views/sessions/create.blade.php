<x-layout>
    <section class="px-6 py-8">
    <main class="max-w-lg mx-auto bg-blue-300 p-6 rounded-xl border border-blue" >
        <h1 class="text-center font-bold text-xl">Login to account</h1>
        <form method="POST" action="/login" class="mt-5">
            @csrf
        
          
                



            <div class="mb-6">    
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="email"
                >
                    Email
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="email"
                    id="email"
                    value="{{old('email')}}"
                    required
                >
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>

            <div class="mb-6">    
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="password"
                >
                    Password
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="password"
                    name="password"
                    id="password"

                    required
                >

                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>

            <div class="mb-6">    
            
                <button type="submit"
                    class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500"
                >
                Login
</button>
            </div>

        </form>
       </main>
    </section>
</x-layout>