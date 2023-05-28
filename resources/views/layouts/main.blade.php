<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-800">
        <div class="container mx-auto px-4 flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li class="ml-6">
                <a href="#"><b>TMDB |</b> Movie App</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-geay-300">Movie</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-geay-300">TV Shows</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-geay-300">Actors</a>
                </li>
            </ul>

            <div class="flex flex-col items-center md:flex-row ">
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-gray-800 rounded-full pl-8 focus:outline-none  focus:shadow-outline w-64 px-4 py-1" placeholder="Search">
                </div>
                <div class=" md:ml-4 mt-3 ml-4">
                    <a href="#">
                        <img src="https://www.dmarge.com/wp-content/uploads/2021/01/dwayne-the-rock-.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>
