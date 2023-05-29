@extends('layouts.main')
@section('content')
<div class="movie-info border-b border-gray-800">
<div class="container mx-auto px-4 py-16 flex ">
    <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ggFHVNu6YYI5L9pCfOacjizRGt.jpg" class="w-96" style="width: 24rem" alt="">
    <div class="ml-24">
        <h2 class="text-4xl font-semibold">Breaking Bad</h2>
        <div class="mt-2">
            <div class="flex items-center text-gray-400 text-sm">
                <span>Star</span>
                <span class="ml-1">85%</span>
                <span class="mx-2">|</span>
                <span> Feb 20, 2002</span>
            </div>
            <div class="text-gray-400 text-sm">
                Action, Comedy
            </div>
            <p class="text-gray-300 mt-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magni laudantium repellat nihil iste impedit assumenda id reprehenderit aut beatae, sapiente mollitia, dignissimos optio ratione alias vero a adipisci? Cumque, maiores nostrum ipsum impedit debitis temporibus repellendus sit ratione nulla, quidem nam cupiditate quis provident, minima esse soluta saepe facere ex.</p>
            <div class="mt-12">
                <h4 class="text-white font-semibold"> Featured Cast</h4>
                <div class="flex mt-4">
                    <div>
                        <div>Lorem, ipsum dolor.</div>
                        <div class="text-sm text-gray-400">story,wkwk</div>
                    </div>
                    <div class="ml-8">
                        <div>Lorem, ipsum dolor.</div>
                        <div class="text-sm text-gray-400">
                            Lorem, ipsum dolor.
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-12">
                <button class="flex items-center bg-orange-500 text-gray-800 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                    <span class="ml-2">
                        Play Trailer
                    </span>
                </button>

            </div>
        </div>
    </div>
</div>
</div>

<div class="movie-cast border-b border-gray-800">
    <div class="container mx-auto px-4 py-16">
        <div class="text-4xl font-semibold">Cast</div>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div id="movie-card">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ggFHVNu6YYI5L9pCfOacjizRGt.jpg" alt="Breaking Bad" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Breaking Bad</a>
                    </div>
                </div>
            </div>
            <div id="movie-card">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ggFHVNu6YYI5L9pCfOacjizRGt.jpg" alt="Breaking Bad" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Breaking Bad</a>
                    </div>
                </div>
            </div>
            <div id="movie-card">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ggFHVNu6YYI5L9pCfOacjizRGt.jpg" alt="Breaking Bad" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Breaking Bad</a>
                    </div>
                </div>
            </div>
            <div id="movie-card">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ggFHVNu6YYI5L9pCfOacjizRGt.jpg" alt="Breaking Bad" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Breaking Bad</a>
                    </div>
                </div>
            </div>
            <div id="movie-card">
                <div class="mt-8">
                    <a href="#">
                        <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/ggFHVNu6YYI5L9pCfOacjizRGt.jpg" alt="Breaking Bad" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray:300">Breaking Bad</a>
                    </div>
                </div>
            </div>
            </div>
    
        </div>
    </div>
</div>


@endsection
