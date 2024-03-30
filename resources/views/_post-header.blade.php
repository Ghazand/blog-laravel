<header class="max-w-4xl mx-auto mt-20 text-center" >  
                
                
                    <div class="max-w-xl mx-auto">

                        <h1 class="text-4xl">   
                            Here is <span class="text-blue-500">Latest Blog</span> Every day
                            
                        </h1> 
                        <!-- <h2 class="inline-flex mt-3">
                            By Harry styles <img src="/images/user.png" width="20" alt="user-pic">
                        </h2> -->



                        <div class="space-y-2 space-y-0 space-x-4 mt-4">
                            
                            <div class=" rounded-xl relative flex inline-flex items-center bg-gray-100 ">
                                <!-- Category -->
                            
                                    <div x-data="{ show:false }" @click.away="show= false">
                                        <buttton @click= "show = !show" class = "bg-transparent font-semibold px-5 py-2 text-sm text-left">   
                                        <!-- <img  src="/images/back.png" alt="back" width="12" class="-rotate-90" > -->
                                        
                                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : "Categories"}}
                                        </button>
                                            
                                            <div x-show="show" class="py-2 absolute rounded-xl w-32 mt-2 bg-gray-100 z-50 m-h-50 overflow-auto" style="display:none" >
                                                  
                                            <a href="/" class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white  focus:text-white">All</a>
                                              
                                                @foreach($categories as $category)
                                                    <!-- {{$category}} -->
                                                    <a href="/categories/{{$category->slug}}" class="block text-left px-3 text-sm leading-6 
                                                    hover:bg-blue-500 focus:bg-blue-500 hover:text-white  focus:text-white 
                                                    
                                                    {{isset($currentCategory)&& $currentCategory->id==$category->id ? 'bg-blue-500 text-white': ''}}
                                                    "
                                                    >{{ucwords($category->name)}}</a>
                                                
                                                    
                                                @endforeach
                                            </div>
                                    </div>

                                    <!-- <select class="bg-transparent font-semibold px-5 py-2  text-sm">
                                        <option value="category" disabled selected>Category</option>
                                    
                                        @foreach($categories as $category)
                                            <option value="{{$category->slug}}" >{{$category->name}}</option>
                                        @endforeach
                                    </select>         -->
                            
                                
                            </div>    

        
                            
                            <div class="tw-justify-center  rounded-xl relative flex inline-flex items-center bg-gray-100">            
                                                <!-- other option -->
                                <!-- <span class="bg-gray-200 inline-block pd-2 rounded-xl"> -->
                                        <!-- <select class="bg-transparent font-semibold px-5 py-2 text-sm " >
                                            <option value="category" disabled selected
                                            >opotions</option>
                                            <option value="ja">Ja</option>
                                            <option value="nien">nien</option>
                                        </select>         -->
                                
                            </div>
                                <!-- search -->
                            
                            <div class="tw-justify-center  rounded-xl relative flex inline-flex items-center bg-gray-100">
                                <span class="bg-gray-100 inline-block pd-2 rounded-xl bg-transparent font-semibold px-5 py-2 text-sm">
                                            <form method="GET" action="#">
                                                <input 
                                                type="text" 
                                                name="search" 
                                                placeholder="Find something" 
                                                class="bg-transparent font-semibold placeholder-black text-sm outline-none"
                                                value="{{request('search')}}"
                                                >

                                            </form>      
                                    </span>
                            </div>
                        </div>    
                        
                             

                    </div>

                        
                    
                    
                        
                

                
            
            </header>