<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Post
            </h2>
        </header>

        <form method="POST" action="/posts">
            @csrf
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2">Title</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
                
                <label for="status" class="text-lg mb-2">Active:</label>
                <input name="status" type="radio" id="yes" class="mr-[5px]" />
                <label for="yes">Yes</label>
                <input name="status" type="radio" id="no" class="mr-[5px]" />
                <label for="no">No</label>
            </div> --}}

            <div class="mb-6">
                <label for="image" class="inline-block text-lg mb-2">Image URL</label>
                <input type="url" class="border border-gray-200 rounded p-2 w-full" name="image" />
                @error('image')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="content" class="inline-block text-lg mb-2">
                    Content
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="content" rows="10" placeholder="Content"></textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-red-500 text-white rounded py-2 px-4 hover:bg-black">
                    Create Post
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>

</body>

</html>
