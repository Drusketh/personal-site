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
                
            <div class="p-8 mt-32 rounded-xl text-gray-100 bg-gray-900/30">
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

                    Below are some of the Languages and Programs I have experience with, as well as my certifications.
                </p>
            </div>

            <div class="flex flex-col gap-12 p-8 mt-8  w-full rounded-xl bg-gray-900/30 backdrop-blur-md">
                <div class="flex flex-col gap-6 w-full">
                    <span class="dropdown-item">
                        <h2 class="text-3xl font-bold text-blue-400">Certifications</h2>
                    </span>

                    <div class="dropdown-content flex p-6 gap-4 justify-left rounded-xl bg-gray-900 border border-blue-500 overflow-hidden">
                        <a href="./images/ABadge.png" target="_blank" class="inline-block">
                            <img src="{{ asset('images/ABadge.png') }}" class="w-48">
                        </a>
                    </div>
                </div>

                <div class="flex flex-col lg:flex-row gap-12 w-full justify-between items-start">
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

                    <section id="cadlist" class="min-h-auto p-8 mb-8 text-white flex flex-col items-start rounded-xl bg-white/5 backdrop-blur-md border border-white/20">
                        <div class="flex flex-row gap-6 w-full justify-between">
                            <h2 class="text-3xl font-bold text-blue-400 mb-10">Design Software</h2>

                            <button id="toggle-cad" class="h-fit px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition">
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
                                    <p class="font-semibold text-blue-300 mb-1">Time:</p><p class="mb-2">Used for the last 4 Years</p>
                                    <p class="font-semibold text-blue-300 mb-1">Notes:</p><p class="mb-2">
                                        My most used and favorite CAD program, I have modeled car parts, functional 3D Printed parts, and complex assemblies. 
                                        I have limited experience with surface modeling and simulation.
                                    </br></br>
                                        My current goals with SolidWorks are to learn more about surface modeling, weldments and simulation.
                                    </p>
                                
                                    <div class="flex justify-between p-4">
                                        <a href="./images/ABadge.png" target="_blank" class="mt-4 inline-block">
                                            <img src="{{ asset('images/ABadge.png') }}" class="w-48">
                                        </a>
                                        <div class="flex flex-col w-48 items-center">
                                            <a href="./images/CSWAQR.png" target="_blank" class="mt-4 inline-block">
                                                <img src="{{ asset('images/CSWAQR.png') }}" class="w-40">
                                            </a>
                                            <p class="mt-4 text-sm text-gray-600">Scan or <a href="https://cv.virtualtester.com/qr/?b=SLDWRKS&i=C-B9W8S3MCEP" target="_blank" class="text-blue-400 hover:underline">Click Here</a> to validate certificate</p>
                                        </div>
                                    </div>
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
                                        for parametric models, and it is intriguing as the modeling workflow is completely different than anything I have encountered before.
                                        </br></br>
                                        I strive to use OpenSCAD more for simple projects to learn more about it.
                                    </p>
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
            </div>
                
            <div class="p-8 mt-8 rounded-xl text-gray-100 bg-gray-900/30 backdrop-blur-md">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Hobbies</h2>
                <div class="flex flex-col lg:flex-row gap-12 w-full justify-between items-start">
                    <section id="3dp" class="min-h-auto p-8 mb-16 basis-1/2 text-white flex flex-col items-start rounded-xl bg-white/5 backdrop-blur-md border border-white/20">
                        <h2 class="text-3xl font-bold text-blue-400 mb-10">3D Printing</h2>

                        <p class="text-md leading-relaxed mb-8">
                            I been aware of 3D Printing since my father built one himself in 2014, but I only became interested after tinkering with the 3D printer at my high school.
                            In my senior year of High School my father gifted me his original 3D printer after he built himself 2 more, which helped me develop more mechanical 
                            design skills, as well as using various 3D printing softwares and learning the basics of GCode. Starting in May of this year, I began building 2 Voron 
                            printers, the v0.2 and v2.4. Both of these are CoreXY printers with enclosed build chambers, and are capable of printing at very high speeds with 
                            ABS, ASA, PLA, and PETG with excellent quality.
                        </p>
                        
                        <div class="flex w-full justify-between p-4 mb-8">
                            <div class="flex flex-col w-48 items-center">
                                <a href="./images/Voron/v0_e.png" target="_blank" class="flex h-full bg-gray-950 border-2 border-solid border-black">
                                    <img src="{{ asset('./images/Voron/v0_e.png') }}" class="w-48">
                                </a>
                                <p class="mt-4 text-sm text-gray-300">Voron v0.2</p>
                            </div>
                            <div class="flex flex-col w-48 items-center">
                                <a href="./images/Voron/v2_e.png" target="_blank" class="flex h-full bg-gray-950 border-2 border-solid border-black">
                                    <img src="{{ asset('images/Voron/v2_e.png') }}" class="w-48">
                                </a>
                                <p class="mt-4 text-sm text-gray-300">Voron v2.4</p>
                            </div>
                        </div>

                        <p class="text-md leading-relaxed">
                            Both of these were sourced from kits and since being built each have over 150 hours of print time and have produced many functional and 
                            artistic pieces. The v0 is great for small high speed part revisions as it features a 120mm³ build volume, which allows it to heat the bed to 
                            110°C and chamber to 50°C within 5 minutes. The v2 is a much larger printer with a 300mm³ build volume, which allows for much larger prints, 
                            but takes 15 minutes to heat the bed to 110 and nearly 45 minutes to fully heat soak.

                            </br></br>

                            In the future I would like to build a mod of the Voron v0, called the Dueling Zero. It features the same CoreXY geometry as the v0, as well as frame 
                            components but has a larger 180mm³ build volume, dual internal spool holders, and 2 independent CoreXY gantries for multi-material printing.
                        </p>
                    </section>

                    <section id="cars" class="min-h-auto p-8 mb-16 basis-1/2 text-white flex flex-col items-start rounded-xl bg-white/5 backdrop-blur-md border border-white/20">
                        <h2 class="text-3xl font-bold text-blue-400 mb-10">Cars</h2>

                        <p class="text-md leading-relaxed">
                            I suppose that I was destined to like cars. My father had a Nissan 240SX when I was in the born, and being taken for a ride in it was one of the only 
                            ways to get me to sleep as a baby. In high school I started to take an interest in them, and I began learning about all of the intricate systems that 
                            make up a car. So far I have owned 4 vehicles, a 1999 Acura 3.5RL, a 2008 GMC Canyon, a 2001 Honda Civic, and a frankenstein 1957 VW Beetle Project,
                            which is the Sterling. Unfortunately I have a poor taste in cars as all of them have very limited aftermarket support, but I have learned how to 
                            maintain and repair effectively every part of each of them. Currently my Canyon is out of comission with a spun main bearing, so I have been working on 
                            sourcing parts for an LS swap. The Sterling is a long term project that I hope to have roadworthy in the next few years, but for now it sits eleganly 
                            in the backyard.
                        </p>
                    </section>
                </div>
            </div>

            <div class="bg-gray-800 rounded-xl p-8">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Gallery</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 m-4 p-8 items-center bg-gray-900 border border-blue-500 rounded-xl">
                    <a href="/images/CSWA.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/CSWA.png') }}" class="my-auto">
                    </a>
                    <a href="images/Voron/v0.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/Voron/v0.png') }}" class="my-auto">
                    </a>
                    <a href="images/Voron/v0_1.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/Voron/v0_1.png') }}" class="my-auto">
                    </a>
                    <a href="images/Voron/v2_f.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/Voron/v2_f.jpg') }}" class="my-auto">
                    </a>
                    <a href="images/Voron/v2_i.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/Voron/v2_i.jpg') }}" class="my-auto">
                    </a>
                    <a href="images/Voron/v2_b.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/Voron/v2_b.jpg') }}" class="my-auto">
                    </a>
                    <a href="images/Voron/d0.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/Voron/d0.png') }}" class="my-auto">
                    </a>
                </div>
            </div> 
        </div>
    </section>
@endsection