@props(['comment'])            
            
            <article class="flex bg-blue-300 p-6 rounded-xl space-x-4 ">
                        <div class="flex-shrink-0">
                            <img src="/images/user.png",alt="user-image" width="60" height="60" class="rounded-xl">
                        </div>
                        <div>
                            <header class="mb-4">
                                <h3 class="font-bold">{{$comment->author->username}}</h3>

                                <p class="text-xs">
                                    posted
                                    <time> {{$comment->created_at}}</time>
                                </p>
                            </header>

                            <p>
                                {{$comment->body}}
                            </p>
                        </div>

                    </article>
 