<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage</title>
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')

</head>

<body>
    <ul class="flex space-x-6 mr-6 text-lg">
        @auth
            <li>
                <a href="/" class="text-red-500">Back</a>
            </li>
            <li>
                <span class="font-bold"> Hello {{ auth()->user()->name }}</span>
            </li>
            <li>
                <a href="/posts/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i>
                    Manage posts</a>
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit"><i class="fa-solid fa-door-closed"></i> Logout</button>
                </form>
            </li>
        @else
            <li>
                <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        @endauth
    </ul>

    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Manage Posts
        </h1>
    </header>

    <div>
        <table class="w-full table-auto rounded-sm">
            <tbody>
                @unless($posts->isEmpty())
                    @foreach ($posts as $post)
                        <tr class="border-gray-300">
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/posts/{{ $post->id }}">
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <a href="/posts/{{ $post->id }}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                                        class="fa-solid fa-pen-to-square"></i>
                                    Edit</a>
                            </td>
                            <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                                <form method="POST" action="/posts/{{ $post->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr class="border-gray-300">
                        <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            <p>No Listings</p>
                        </td>
                    </tr>
                @endunless


            </tbody>
        </table>
        <a href="/posts/create" class="absolute top-1/3 right-10 bg-red-500 text-white py-2 px-5">Create Post</a>
    </div>


</body>

</html>
