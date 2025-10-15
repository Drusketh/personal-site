@extends('layouts.layout')

@section('content')
    <section class="h-auto w-full bg-gradient-to-b from-gray-800 to-gray-900 relative">
        <div class="container mx-auto px-6 md:px-40 py-12">
            <div class="text-center z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white animate-fade-in">Petram Sphere</h1>
                <p class="mt-4 text-lg animate-fade-in"></p>
            </div>

            <div class="w-[80%] pb-8 items-center justify-center mx-auto">
                <img src="{{ asset('images/spherenet.png') }}" class="mx-[-3rem] my-[5rem] min-w-[calc(100%+6rem)] brightness-[1]">
            </div>
            
            <div class="p-8 mb-10 rounded-xl text-gray-100 bg-gray-900/30">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Overview</h2>
                <p class="text-lg leading-relaxed mb-8">
                    SphereNet, or the <a href="https://petramsphere.com/">Petram Sphere</a>, was an economic assistant for an <a href="https://leagueofnations.net/"> 
                        online nation simulator </a> I played. The project was created with the 
                    <a href="https://laravel.com/">Laravel</a> PHP framework, which compiles a language called <a href="https://bladelang.org/"> Blade</a> and PHP into a web page 
                    that includes JavaScript and CSS. The project was designed to help users make decisions on what to buy and sell in the game, as well as to help users track their 
                    progress in the game. It features a login system, user dashboard, chat window, and a battle simulator to give users an idea if their military is strong enough to 
                    engage in certain conflicts. This was mainly started to test my abilities in learning a web framework, and learning new skills in general.
                </p>

                </br>

                <p class="text-lg leading-relaxed mb-8">
                    I began work on a second version of the project in March of 2025, but the game shut down shortly after, so the project was never completed.
                    The second version was also built with Laravel, but was much more feature filled and styled properly given everything I learned about Laravel and Tailwind.
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-2xl font-semibold mb-4">Skills Used</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Frameworking</li>
                            <li>TailwindCSS</li>
                            <li>PHP</li>
                            <li>HTML</li>
                            <li>SQL Database Management</li>
                            <li>Project Management</li>
                            <li>Kanban-Style Workflow</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-blue-400 mb-6">Stats</h3>
                        <div class="card">
                            <div class="mt-3">
                                <p>Total Lines of Code: 3667</p>
                                <p>Number of Files: 222</p>
                                <p>Number of Folders: 51</p>

                                @if(!empty($stats['updated_at']))
                                    <p>Last Updated: 11 Months ago</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 rounded-xl p-8">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Gallery</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 m-4 p-8 items-center bg-gray-900 border border-blue-500 rounded-xl">
                    <a href="/images/spherenet.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet.png')   }}" class="my-auto">
                    </a>
                    <a href="/images/spherenet-1.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet-1.png') }}" class="my-auto">
                    </a>
                    <a href="/images/spherenet-2.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet-2.png') }}" class="my-auto">
                    </a>
                    <a href="/images/spherenet-3.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet-3.png') }}" class="my-auto">
                    </a>
                    <a href="/images/spherenet-4.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet-4.png') }}" class="my-auto">
                    </a>
                    <a href="/images/spherenet-5.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet-5.png') }}" class="my-auto">
                    </a>
                    <a href="/images/spherenet-6.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet-6.png') }}" class="my-auto">
                    </a>
                    <a href="/images/spherenet-7.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/spherenet-7.png') }}" class="my-auto">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection