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
    {{-- show single blog post  --}}
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-700 mb-4">{{ $post->content }}</p>
        <p class="text-sm text-gray-500">Posted on {{ $post->created_at->format('M d, Y') }}</p>
        <div class="mt-4">
            <a href="{{ route('posts.edit', $post->id) }}" class="text-blue-500 hover:underline">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block ml-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline">Delete</button>
            </form>
        </div>
        <div class="mt-4">
            <a href="{{ route('posts.index') }}" class="text-blue-500 hover:underline">Back to Posts</a>
        </div>
    </div>
</body>
</html>
