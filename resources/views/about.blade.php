@extends('layouts.layout')

@section('content')
    <section class="h-auto w-full bg-gradient-to-b from-gray-800 to-gray-900 relative">
        <div class="container mx-auto px-6 md:px-12 pt-24">
            <div class="text-center z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white animate-fade-in">My Experience</h1>
            </div>

            <div class="w-[80%] pb-8 items-center justify-center mx-auto">
                <!-- <img src="{{ asset('') }}" class="mx-[-3rem] my-[5rem] min-w-[calc(100%+6rem)] brightness-[1]"> -->
            </div>
                
            <div class="p-8 mt-32 rounded-xl text-gray-100 bg-gray-900/30 backdrop-blur-md">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Introduction</h2>
                <p class="text-lg leading-relaxed mb-8">
                    Hello, my name is Nathan Pollaro. I am a self-taught programmer, CAD designer, Blender Artist, and 3D Printing Enthusiast with a passion for learning 
                    new skills and technologies.
                </p>

                <p class="text-lg leading-relaxed mb-8">
                    I attended Madison Highland Prep in Phoenix, where I was a member of the VEX Robotics team for 4 years, and captain for the last 3. 
                    During my time on the team, I discovered my passion for CAD and programming, and I have been pursuing those interests ever since.
                    We learned how to document design decisions, log changes and objectives, and work as a team to design and build a robot to compete in each years' challenge.
                    My Team attended the State Championship for the last 3 years, and qualified for the World Championship in my Sophomore year. We produced over multiple rapid 
                    robot revisions each year, and I had the privelege to write the driver program and autonomous driving program for most of them.
                </p>
                    
                <p class="text-lg leading-relaxed">
                    I have experience in a variety of programming languages, CAD and Modelling programs, and Robotics.

                    Below are some of the Languages and Programs I have experience with.
                </p>
            </div>

            <div class="flex flex-col lg:flex-row gap-12 p-8 mt-8 w-full justify-between items-start rounded-xl bg-gray-900/30 backdrop-blur-md">
                <section id="languagelist" class="min-h-auto p-8 mb-16 text-white flex flex-col items-start rounded-xl bg-white/5 backdrop-blur-md border border-white/20">
                    <div class="flex flex-row gap-6 w-full justify-between">
                        <h2 class="text-3xl font-bold text-blue-400 mb-10">Programming Languages</h2>

                        <button id="toggle-lang" class="h-fit px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition">
                            Expand All
                        </button>
                    </div>

                    <ul class="space-y-6 w-full max-w-lg">
                        <!-- Laravel -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300 text-sky-50">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">Laravel (framework)</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/personal-site" target="_blank" class="text-blue-400 hover:underline">Portfolio website</a> 
                                built with Laravel 12 and TailwindCSS.</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                            </div>
                        </li>

                        <!-- Blade -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">Blade</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/personal-site" target="_blank" class="text-blue-400 hover:underline">Portfolio website</a> 
                                built with Laravel 12 and TailwindCSS.</p>
                                <p class="mb-2"><a href="https://github.com/Drusketh/spherenet" target="_blank" class="text-blue-400 hover:underline">Game assistant website</a> 
                                built with Laravel 11 and TailwindCSS.</p>
                            </div>
                        </li>

                        <!-- PHP -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">PHP</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
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
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">HTML</span>
                                </div>
                                <span class="text-gray-400 text-sm">Advanced</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">All of my web based projects</p>
                            </div>
                        </li>

                        <!-- JavaScript -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">JavaScript</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">Middle School and High School for CS classes</p>
                                <p class="mb-2">All of my web based projects</p>
                            </div>
                        </li>

                        <!-- Expression2 -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">Expression 2</span>
                                </div>
                                <span class="text-gray-400 text-sm">Advanced</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">A scripting language in a game. Over 9 years of playing I made 825 scripts for various things, totaling 55,628 lines of code.</p>
                            </div>
                        </li>

                        <!-- Python -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">Python</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">AP Computer Science for Image Processing and other various  </p>
                            </div>
                        </li>

                        <!-- Lua -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow lang -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">Lua</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content lang p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used in:</p>
                                <p class="mb-2">Writing custom addons for Garry's Mod, the same game where Expression 2 was used.</p>
                            </div>
                        </li>
                        
                    </ul>
                </section>

                <section id="cadlist" class="min-h-auto p-8 mb-16 text-white flex flex-col items-start rounded-xl bg-white/5 backdrop-blur-md border border-white/20">
                    <div class="flex flex-row gap-6 w-full justify-between">
                        <h2 class="text-3xl font-bold text-blue-400 mb-10">Design Software</h2>

                        <button id="toggle-cad" class="h-fit px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold  rounded-lg transition">
                            Expand All
                        </button>
                    </div>

                    <ul class="space-y-6 w-full max-w-lg">
                        <!-- SolidWorks -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow cad -rotate-90 transform transition-transform duration-300 text-sky-50">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">SolidWorks</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content cad p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Time:</p><p class="mb-2">Used for last 4 Years</p>
                                <p class="font-semibold text-blue-300 mb-1">Notes:</p><p class="mb-2">I have received my CSWA, it is also my favorite and most used CAD program.</p>
                            </div>
                        </li>

                        <!-- Autodesk Inventor -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow cad -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">AutoDesk Inventor</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content cad p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Time:</p><p class="mb-2">Used for 4 Years daily in High School</p>
                                <p class="font-semibold text-blue-300 mb-1">Notes:</p><p class="mb-2">This was my CAD software of choice for VEX Robotics and all school assignments.</p>
                            </div>
                        </li>

                        <!-- Blender -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow cad -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">Blender</span>
                                </div>
                                <span class="text-gray-400 text-sm">Intermediate</span>
                            </div>

                            <div class="dropdown-content cad p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Time:</p><p class="mb-2">Used infrequently for 9 years</p>
                                <p class="font-semibold text-blue-300 mb-1">Notes:</p><p class="mb-2">This is my favorite software for anything that is organic, complex, or 
                                    sculpting related. This is also my choice software for editing STL files as it is possible to stay dimensionally accurate.
                                </p>
                            </div>
                        </li>   

                        <!-- FreeCAD -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow cad -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">FreeCAD</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content cad p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Time:</p><p class="mb-2">3 months</p>
                                <p class="font-semibold text-blue-300 mb-1">Notes:</p><p class="mb-2">Since my SolidWorks License is not permanent, this has been my main focus for 
                                    learning and modelling. It still has some bugs that make it diffucult to use, but it has proven to be a worthy replacement.</p>
                            </div>
                        </li>

                        <!-- OpenSCAD -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow cad -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">OpenSCAD</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content cad p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Used for:</p><p class="mb-2">1 project</p>
                                <p class="font-semibold text-blue-300 mb-1">Notes:</p><p class="mb-2">I have used this for a single 3D Printing project, but it seems very powerful 
                                    for parametric models, and it is "code" based.</p>
                            </div>
                        </li>  

                        <!-- Fusion 360 -->
                        <li class="relative flex flex-col border border-white/20 bg-gray-900 hover:bg-gray-700 text-gray-100 transition duration-300 rounded-xl cursor-pointer dropdown-item">
                            <div class="flex justify-between items-center p-4">
                                <div class="flex items-center space-x-2">
                                    <span class="arrow cad -rotate-90 transform transition-transform duration-300">▼</span>
                                    <span class="text-xl font-semibold text-blue-100">Fusion 360</span>
                                </div>
                                <span class="text-gray-400 text-sm">Beginner</span>
                            </div>

                            <div class="dropdown-content cad p-0 m-0 opacity-0 bg-gray-900 border-blue-500 rounded-lg text-sm text-gray-200 max-h-0 overflow-hidden">
                                <p class="font-semibold text-blue-300 mb-1">Time:</p><p class="mb-2">1 week</p>
                                <p class="font-semibold text-blue-300 mb-1">Notes:</p><p class="mb-2">I used it when abroad with a laptop. It was confusing to adapt to, 
                                    but I was able to design what was needed in a timely fashion.</p>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
                
            <div class="p-8  rounded-xl text-gray-100 bg-gray-900/30 backdrop-blur-md">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Hobbies</h2>
                <p class="text-lg leading-relaxed mb-8">
                    3D Printing
                </p>

                <p class="text-lg leading-relaxed mb-8">
                    Working on Cars
                </p>
            </div>

            <section id="gallery" class="p-8">
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