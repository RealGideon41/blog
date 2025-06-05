{{-- tailwind navbar /posts /posts/create --}}
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <div class="text-white text-lg font-semibold">
            <a href="{{ route('posts.index') }}">Posts</a>
        </div>
        <div>
            <a href="{{ route('posts.create') }}" class="text-white hover:text-gray-300">Create Post</a>
        </div>
    </div>
</nav>