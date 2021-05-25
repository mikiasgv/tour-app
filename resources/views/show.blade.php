@extends('layouts.app')


@section('content')
  <div class="container mx-auto px-4">
    <div class="game-details border-b border-gray-800 pb-12 flex flex-col lg:flex-row">
        <div class="flex-none">
            <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="cover">
        </div>
        <div class="lg:ml-12 lg:mr-64">
            <h2 class="font-semibold text-4xl">{{ $game['name'] }}</h2>
            <div class="text-gray-400">
                <span>
                    @foreach ($game['genres'] as $genre)
                        {{ $genre['name'] }},
                    @endforeach
                </span>
                &middot;
                <span> {{ $game['involved_companies'][0]['company']['name']}} </span>
                &middot;
                <span>
                    @foreach ($game['platforms'] as $platform)
                        @if(array_key_exists('abbreviation', $platform))
                            {{ $platform['abbreviation'] }},
                        @endif
                    @endforeach
                </span>
            </div>
            <div class="flex flex-wrap items-center mt-8">
                <div class="flex items-center">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex items-center justify-center h-full">
                            @if (array_key_exists('rating', $game))
                                {{ round($game['rating']) . '%'}}
                            @else
                              0%
                            @endif
                        </div>
                    </div>
                    <div class="ml-4 text-xs">
                        Member <br> Score
                    </div>
                </div>
                <div class="flex items-center ml-12">
                    <div class="w-16 h-16 bg-gray-800 rounded-full">
                        <div class="font-semibold text-xs flex items-center justify-center h-full">
                            @if (array_key_exists('aggregated_rating', $game))
                                {{ round($game['aggregated_rating']) . '%'}}
                            @else
                              0%
                            @endif
                        </div>
                    </div>
                    <div class="ml-4 text-xs">
                        Critic <br> Score
                    </div>
                </div>
                <div class="flex items-center space-x-4 mt-8 lg:mt-0 lg:ml-12">
                    <div class="w-8 h-8 bg-gray-800 flex justify-center items-center rounded-full">
                        <a href="#" class="hover:text-gray-400"><svg class="svg-icon w-5 h-5 fill-current" viewBox="0 0 18 18">
                            <path fill="#fff" d="M10 2.531a7.469 7.469 0 100 14.938 7.469 7.469 0 000-14.938m0 1.245c1.48 0 2.84.519 3.908 1.384a16.224 16.224 0 01-3.298 2.066 17.371 17.371 0 00-2.47-3.167A6.246 6.246 0 0110 3.776m-3.097.83c.962.93 1.82 1.969 2.53 3.112A16.113 16.113 0 013.902 8.75a6.227 6.227 0 013.001-4.144M3.776 10c2.219 0 4.338-.418 6.29-1.175.209.404.405.813.579 1.236a10.6 10.6 0 00-5.177 4.195A6.19 6.19 0 013.776 10M10 16.224a6.189 6.189 0 01-3.586-1.143 9.367 9.367 0 014.659-3.853 16.17 16.17 0 01.784 4.714 6.226 6.226 0 01-1.857.282m3.075-.817a17.372 17.372 0 00-.806-4.542 9.332 9.332 0 012.087-.243c.621 0 1.22.085 1.807.203a6.217 6.217 0 01-3.088 4.582m1.281-6.029c-.868 0-1.708.116-2.515.313a17.397 17.397 0 00-.621-1.359 17.422 17.422 0 003.587-2.284 6.202 6.202 0 011.395 3.517c-.6-.11-1.212-.187-1.846-.187"/></svg></a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 flex justify-center items-center rounded-full">
                        <a href="#" class="hover:text-gray-400"><svg class="svg-icon w-5 h-5 fill-current" viewBox="0 0 18 18">
                            <path fill="#fff" d="M14.52 2.469H5.482a3.013 3.013 0 00-3.013 3.013v9.038a3.013 3.013 0 003.013 3.012h9.038a3.014 3.014 0 003.012-3.012V5.482a3.014 3.014 0 00-3.012-3.013m-1.508 2.26h2.26v2.259h-2.26V4.729zM10 6.988a3.012 3.012 0 110 6.024 3.012 3.012 0 010-6.024m6.025 7.532c0 .831-.676 1.506-1.506 1.506H5.482a1.508 1.508 0 01-1.507-1.506V9.247h1.583a4.47 4.47 0 00-.076.753 4.519 4.519 0 109.038 0c0-.257-.035-.506-.076-.753h1.582v5.273z"/></svg></a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 flex justify-center items-center rounded-full">
                        <a href="#" class="hover:text-gray-400"><svg class="svg-icon w-5 h-5 fill-current" viewBox="0 0 18 18">
                            <path fill="#fff" d="M18.258 3.266a7.254 7.254 0 01-2.277.857 3.607 3.607 0 00-2.618-1.115c-1.98 0-3.586 1.581-3.586 3.53 0 .276.031.545.092.805a10.24 10.24 0 01-7.393-3.689 3.469 3.469 0 00-.486 1.775c0 1.224.633 2.305 1.596 2.938a3.611 3.611 0 01-1.625-.442l-.001.045c0 1.71 1.237 3.138 2.877 3.462a3.67 3.67 0 01-1.619.061 3.584 3.584 0 003.35 2.451 7.268 7.268 0 01-4.454 1.512c-.291 0-.575-.016-.855-.049 1.588 1 3.473 1.586 5.498 1.586 6.598 0 10.205-5.379 10.205-10.045 0-.153-.003-.305-.01-.456a7.273 7.273 0 001.789-1.827 7.31 7.31 0 01-2.06.555 3.554 3.554 0 001.577-1.954"/></svg></a>
                    </div>
                    <div class="w-8 h-8 bg-gray-800 flex justify-center items-center rounded-full">
                        <a href="#" class="hover:text-gray-400"><svg class="svg-icon w-5 h-5 fill-current" viewBox="0 0 18 18">
                            <path fill="#fff" d="M11.344 5.71c0-.73.074-1.122 1.199-1.122h1.502V1.871h-2.404c-2.886 0-3.903 1.36-3.903 3.646v1.765h-1.8V10h1.8v8.128h3.601V10h2.403l.32-2.718h-2.724l.006-1.572z"/></svg></a>
                    </div>
                </div>
                <p class="mt-12">
                    {{ $game['summary']}}
                </p>
                <div class="mt-12">
                    <button class="flex items-center bg-blue-500 text-white font-semibold px-4 py-4 hover:bg-blue-600 rounded transition ease-in-out duration-150">
                        <svg class="svg-icon font-semibold w-5 h-5 fill-current" viewBox="0 0 20 20"><path fill="#fff" d="M12.361 6.852H7.639a3.148 3.148 0 000 6.296h4.723a3.149 3.149 0 00-.001-6.296zm0 5.509H7.639a2.362 2.362 0 010-4.721h4.723a2.36 2.36 0 11-.001 4.721zM10 .949a9.051 9.051 0 100 18.103A9.051 9.051 0 0010 .949zm0 17.315c-4.564 0-8.264-3.699-8.264-8.264S5.436 1.736 10 1.736c4.564 0 8.264 3.699 8.264 8.264s-3.7 8.264-8.264 8.264zM7.639 8.819a1.18 1.18 0 100 2.362 1.18 1.18 0 100-2.362z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--End of game details-->
    <div class="images-container border-b border-gray-800 pb-12 mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Images</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mt-8">
            @foreach ($game['screenshots'] as $screen)
                <div>
                    <a href="{{ Str::replaceFirst('thumb', 'screenshot_huge', $screen['url']) }}">
                        <img src="{{ Str::replaceFirst('thumb', 'screenshot_big', $screen['url']) }}" alt="screenshot" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!--End of images container-->
    <div class="similar-games-container mt-8">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Similar Games</h2>
        <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-12 pb-16">
            @foreach ($game['similar_games'] as $similar)
                <div class="game mt-8">
                    <div class="relative inline-block">
                        <a href="#">
                            @isset($similar['cover'])
                                <img src="{{ Str::replaceFirst('thumb', 'cover_big', $similar['cover']['url']) }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                            @endisset
                        </a>
                        @isset($similar['rating'])
                            <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                                <div class="fomt-semibold text-xs flex justify-center items-center h-full">
                                    {{ round($similar['rating']).'%' }}
                                </div>
                            </div>
                        @endisset
                    </div>
                    <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-8">
                        {{ $similar['name']}}
                    </a>
                    <div class="text-gray-400 mt-1">
                        @foreach ($similar['platforms'] as $platform)
                            @if(array_key_exists('abbreviation', $platform))
                                {{ $platform['abbreviation'] }},
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--End of similar games -->
  </div>
@endsection
