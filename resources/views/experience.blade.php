@extends('layouts.layout')

@section('content')
    <section class="h-auto w-full bg-gradient-to-b from-gray-800 to-gray-900 relative">
        <div class="container mx-auto px-6 md:px-40 py-12">
            <div class="text-center z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white animate-fade-in">My Experience</h1>
                <p class="mt-4 text-lg animate-fade-in"></p>
            </div>

            <div class="w-[80%] pb-8 items-center justify-center mx-auto">
                <!-- <img src="{{ asset('') }}" class="mx-[-3rem] my-[5rem] min-w-[calc(100%+6rem)] brightness-[1]"> -->
            </div>
            
            <h2 class="pt-32 text-4xl font-bold text-blue-400 mb-10">Introduction</h2>
            <p class="text-lg leading-relaxed mb-8">
                Hello, my name is Nathan Pollaro. I am a self-taught programmer, CAD designer, Blender Artist, and 3D Printing Enthusiast with a passion for learning 
                new skills and technologies.
            </p>
                
            <p class="text-lg leading-relaxed mb-8">
                I have experience in a variety of programming languages, CAD and Modelling programs, and Robotics.

                Below are some of the Languages and Programs I have experience with.
            </p>

            <div class="flex flex-col lg:flex-row gap-12 w-full justify-between items-start">
                <section id="languagelist" class="min-h-screen text-white py-16 flex flex-col items-start">
                    <h2 class="text-4xl font-bold text-blue-400 mb-10">Programming Languages</h2>

                    <ul class="space-y-6 w-full max-w-lg">
                        <!-- Laravel -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300 text-sky-50">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">Laravel (framework)</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/personal-site" target="_blank" class="text-blue-400 hover:underline">Portfolio website</a> 
                                built with Laravel 12 and TailwindCSS.</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                            </div>
                        </li>

                        <!-- Blade -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">Blade</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/personal-site" target="_blank" class="text-blue-400 hover:underline">Portfolio website</a> 
                                built with Laravel 12 and TailwindCSS.</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                            </div>
                        </li>

                        <!-- PHP -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">PHP</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                                <p class="mb-2">An <a href="https://github.com/Drusketh/NotNationsPriv" target="_blank" class="text-blue-400 hover:underline">unfinished</a> Nation simulator 
                                    game written fully by hand in with PHP. Was abandoned after Jerry Cui released 
                                    <a href="https://leagueofnations.net/" target="_blank" class="text-blue-400 hover:underline">League of Nations</a>. Featured 62 files, 1821 lines.</p>
                                <p class="mb-2">Minimal usage in all Laravel Projects.</p>
                            </div>
                        </li>

                        <!-- HTML -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">HTML</span>
                                </div>
                                <span class="text-gray-400 text-sm">Advanced</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">All of my web based projects</p>
                            </div>
                        </li>

                        <!-- JavaScript -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">JavaScript</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">Middle School and High School for CS classes</p>
                                <p class="mb-2">All of my web based projects</p>
                            </div>
                        </li>

                        <!-- Expression2 -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">Expression 2</span>
                                </div>
                                <span class="text-gray-400 text-sm">Advanced</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">A scripting language in a game. Over 9 years of playing I made 825 scripts for various things, totaling 55,628 lines of code.</p>
                            </div>
                        </li>

                        <!-- Python -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">Python</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">AP Computer Science for Image Processing and other various  </p>
                            </div>
                        </li>

                        <!-- Lua -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">Lua</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">Writing custom addons for Garry's Mod, the same game where Expression 2 was used.</p>
                            </div>
                        </li>
                        
                    </ul>
                </section>

                <section id="cadlist" class="min-h-screen text-white py-16 flex flex-col items-start">
                    <h2 class="text-4xl font-bold text-blue-400 mb-10">Design Software</h2>

                    <ul class="space-y-6 w-full max-w-lg">
                        <!-- SolidWorks -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300 text-sky-50">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">SolidWorks</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/personal-site" target="_blank" class="text-blue-400 hover:underline">Portfolio website</a> 
                                built with Laravel 12 and TailwindCSS.</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                            </div>
                        </li>

                        <!-- Autodesk Inventor -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">AutoDesk Inventor</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/personal-site" target="_blank" class="text-blue-400 hover:underline">Portfolio website</a> 
                                built with Laravel 12 and TailwindCSS.</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                            </div>
                        </li>

                        <!-- Fusion 360 -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">Fusion 360</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                                <p class="mb-2">An <a href="https://github.com/Drusketh/NotNationsPriv" target="_blank" class="text-blue-400 hover:underline">unfinished</a> Nation simulator 
                                    game written fully by hand in with PHP. Was abandoned after Jerry Cui released 
                                    <a href="https://leagueofnations.net/" target="_blank" class="text-blue-400 hover:underline">League of Nations</a>. Featured 62 files, 1821 lines.</p>
                                <p class="mb-2">Minimal usage in all Laravel Projects.</p>
                            </div>
                        </li>

                        <!-- FreeCAD -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">FreeCAD</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">All of my web based projects</p>
                            </div>
                        </li>

                        <!-- OpenSCAD -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">OpenSCAD</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">Middle School and High School for CS classes</p>
                                <p class="mb-2">All of my web based projects</p>
                            </div>
                        </li>

                        <!-- Blender -->
                        <li class="relative flex flex-col bg-gray-800 text-gray-200 hover:bg-gray-700 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-300">Blender</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">A scripting language in a game. Over 9 years of playing I made 825 scripts for various things, totaling 55,628 lines of code.</p>
                            </div>
                        </li>                        
                    </ul>
                </section>
            </div>

            <p class="text-lg leading-relaxed mb-8">
                I have experience in a variety of programming languages, CAD and Modelling programs, and Robotics.

                Below are some of the Languages and Programs I have experience with.
            </p>

            <section id="gallery">
                <div>
                    <h2 class="text-4xl font-bold text-blue-400 mb-10">Gallery</h2>
                    <p class="mt-4 text-lg animate-fade-in mb-6"></p>
                    <div class="grid grid-cols-1 md:grid-cols-3 auto-rows-fr gap-3 p-12 items-center bg-gray-800">
                        <!-- <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet.png') }}" class="absolute top-[25%]">
                        </div>
                        <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet-1.png') }}" class="absolute top-[25%]">
                        </div>
                        <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet-2.png') }}" class="absolute top-[25%]">
                        </div>
                        <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet-3.png') }}" class="absolute top-[25%]">
                        </div>
                        <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet-4.png') }}" class="">
                        </div>
                        <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet-5.png') }}" class="">
                        </div>
                        <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet-6.png') }}" class="">
                        </div>
                        <div class="bg-gray-950 h-full relative border-2 border-solid border-black">
                            <img src="{{ asset('images/spherenet-7.png') }}" class="">
                        </div> -->
                    </div>
                </div>
            </section>  
        </div>
    </section>
@endsection