@extends('layouts.main')
@section('content')
<div class="movie-info border-b border-gray-800">
<div class="container mx-auto px-4 py-16 flex">
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
        </div>
    </div>
</div>
</div>
@endsection
