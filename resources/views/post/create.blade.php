<x-layout>
    <section class="px-6 py-8">
    <h1 class="text-center font-bold text-xl mb-4">Publish Post</h1>
       <main class="max-w-lg mx-auto bg-blue-300 p-6 rounded-xl border border-blue" >
       
        <form method="POST" action="/admin/posts" class="mt-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">    
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="title"
                >
                    Title
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="title"
                    id="title"
                    value="{{old('title')}}"
                    required
                >
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>
            <div class="mb-6">
                

                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="slug"
                    >
                        Slug
                    </label>
                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="slug"
                        id="slug"
                        value="{{old('slug')}}"
                        required
                    >
                    @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>

            <div class="mb-6">    
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="excerpt"
                >
                    Excerpt
                </label>
                <textarea class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="excerpt"
                    id="excerpt"
                    
                    required
                >{{old('excerpt')}}</textarea>
                @error('excerpt')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>

            <div class="mb-6">    
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="body"
                >
                    Body
                </label>
                <textarea class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="body"
                    id="body"

                    required
                >{{old('body')}}</textarea>

                @error('body')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>

            <div class="mb-6">    
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="body"
                >
                    Cateogry
                </label>
                <select class="border border-gray-400 p-2 w-full"
                    
                    name="category_id"
                    id="category_id"

                    required
                >
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{$category->id}}"
                    {{old('category_id')== $category->id ?'selected':''}}
                    >{{ucwords($category->name)}}</option>
                @endforeach
            </select>

                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>

            <div class="mb-6">    
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="thumbnail"
                >
                    Thumbnail for Post
                </label>
                <input class="border border-gray-400 p-2 w-full"
                    type="file"
                    name="thumbnail"
                    id="thumbnail"
                    
                    required
                >
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @endif
            </div>


            <div class="mb-6">    
            
                <button type="submit"
                    class="bg-green-400 text-white rounded py-2 px-4 hover:bg-green-500"
                >
                    Submit
                </button>
            </div>

        </form>


       </main> 
    </section>
</x-layout>       