<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('components.navbar')
    {{-- flash msg  --}}
    {{-- success msg  --}}
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    {{-- list all blog post  --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Blog Posts</h1>
        @if($posts->count())
            <ul class="space-y-4">
                @foreach($posts as $post)
                    <li class="p-4 border rounded shadow">
                        <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                        <p class="text-gray-700">{{ $post->content }}</p>
                        <p class="text-sm text-gray-500">Posted on {{ $post->created_at->format('M d, Y') }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="text-blue-500 hover:underline">Read more</a>
                        <div class="mt-2">
                            <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </div>  
                    </li>
                @endforeach
            </ul>
            <div class="mt-4">
                {{-- {{ $posts->links() }} <!-- Pagination links --> --}}
            </div>
        @else
            <p class="text-gray-500">No posts available.</p>
        @endif
    </div>
</body>
</html>
