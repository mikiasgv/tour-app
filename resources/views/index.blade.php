@extends('layouts.app')


@section('content')
  <div class="container mx-auto px-4">
    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
    <div class="popular-games text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 gap-12 border-b border-gray-800 pb-16">
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/ff7.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                    <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/animalcrossing.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                    <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/doom.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                    <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/alyx.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                    <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/luigi.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                    <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="/resident.jpg" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full" style="right:-20px; bottom: -20px;">
                    <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                </div>
            </div>
            <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-8">
                Final Fantasy 7 Remake
            </a>
            <div class="text-gray-400 mt-1">Playstation 4</div>
        </div>

    </div>
    <!--End of popular games-->
    <div class="flex flex-col lg:flex-row my-10">
        <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Recently Reviewed</h2>
            <div class="recently-reviewed-container space-y-12 mt-8">
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">
                            Playstation 4
                        </div>
                        <p class="mt-6 text-gray-400 hidden lg:block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore explicabo optio possimus reprehenderit error perferendis obcaecati veniam sed deserunt? A delectus et cupiditate veniam fuga tempora aliquam adipisci sed fugit!
                        </p>
                    </div>
                </div>
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">
                            Playstation 4
                        </div>
                        <p class="mt-6 text-gray-400 hidden lg:block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore explicabo optio possimus reprehenderit error perferendis obcaecati veniam sed deserunt? A delectus et cupiditate veniam fuga tempora aliquam adipisci sed fugit!
                        </p>
                    </div>
                </div>
                <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                    <div class="relative flex-none">
                        <a href="#">
                            <img src="/ff7.jpg" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full" style="right:-20px; bottom: -20px;">
                            <div class="fomt-semibold text-xs flex justify-center items-center h-full">80%</div>
                        </div>
                    </div>
                    <div class="ml-12">
                        <a href="#" class="block text-base font-semi-bold leading-light hover:text-gray-400 mt-4">
                            Final Fantasy VII Remake
                        </a>
                        <div class="text-gray-400 mt-1">
                            Playstation 4
                        </div>
                        <p class="mt-6 text-gray-400 hidden lg:block">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore explicabo optio possimus reprehenderit error perferendis obcaecati veniam sed deserunt? A delectus et cupiditate veniam fuga tempora aliquam adipisci sed fugit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="most-anticipated lg:w-1/4 mt-12 lg:mt-0">
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Most Anticipated</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
            <h2 class="text-blue-500 uppercase tracking-wide font-semibold mt-16">Coming Soon</h2>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
            <div class="most-anticipated-container space-y-10 mt-8">
                <div class="game flex">
                    <a href="#">
                        <img src="/ff7.jpg" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Cyberpunk 2077</a>
                        <div class="text-gray-400 text-sm mt-1">Sep 16, 2020</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection