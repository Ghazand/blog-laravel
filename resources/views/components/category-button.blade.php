
@props(['post'])
<a href="/categories/{{$post->category->slug}}" class="px-3 py-3 border border-blue-300 text-blue-300 rounded-full font-semibold  text-xs uppercase" style="font-size: 10px;">{{$post->category->name}}</a>
         