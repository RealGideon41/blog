<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>
        <div class="flex items-center justify-center min-h-screen bg-gray-100">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Welcome to the Home Page</h1>
                <p class="text-lg">This is a simple Blog application.</p>
            </div>
        </div>


    </body>
</html>
