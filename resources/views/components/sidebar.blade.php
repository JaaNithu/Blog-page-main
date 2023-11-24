<style>
    .bg-clr:hover{
        background: #0a4275;
    }
</style>

<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl font-semibold mb-3">
            All Categories
        </h3>
        @foreach ($categories as $category)
            <a href="{{route('by-category', $category)}}"
                class="hover:bg-clr text-semibold block py-2 px-3 rounded {{ request('category')?->slug === $category->slug
                ? 'bg-blue-600 text-white' : ''}}">
                {{$category->title}} ({{$category->total}})
            </a>
        @endforeach
    </div>

</aside>
