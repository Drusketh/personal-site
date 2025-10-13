@extends('layouts.layout')

@section('content')
    <section id="about" class="h-screen flex items-center justify-center animate-gradient-x relative overflow-hidden">
        <div class="text-center z-10">
            <h1 class="text-4xl md:text-6xl font-bold animate-fade-in bg-clip-text">Welcome</h1>
            <p class="mt-4 text-lg animate-fade-in">I'm Nathan Pollaro, a junior engineering associate with a passion for CAD and Engineering.</p>
        </div>
        <div class="absolute inset-0 bg-[url('../../public/images/background.jpg')] bg-no-repeat bg-center bg-cover bg-fixed opacity-20"></div>
    </section>

    <div class="h-auto w-full bg-gradient-to-b from-gray-800 to-gray-900 relative">
        <section id="experience" class="animate-fade-in h-auto flex flex-col items-center justify-center relative overflow-hidden">
            <div class="flex">
                <div class="text-center z-10 mt-24 lg:mb-24 p-8 bg-gray-800 rounded-xl">
                    <h2 class="text-3xl md:text-5xl font-bold">An Introduction</h2>

                    <a href="/about" class="mt-12 inline-flex px-8 py-4 rounded-xl bg-gradient-to-r from-sky-700 to-sky-500 text-white font-semibold text-lg shadow-lg 
                                            transition-all duration-300 transform hover:shadow-blue-900/50">
                        <span class="relative z-10">Who I am, my skills, and my hobbies.</span>
                    </a>
                </div>
            </div>
        </section>

        <section id="portfolio" class="animate-fade-in h-auto flex flex-col items-center justify-center relative overflow-hidden">
            <div class="flex mt-16 bg-gray-800 rounded-xl">
                <div class="text-center z-10 p-8 lg:pb-8">
                    <h2 class="text-3xl md:text-5xl font-bold">My Portfolio</h2>
                    <p class="mt-4 text-lg">My Favorite Projects to date</p>
                    <p class="mt-4 text-lg text-gray-600">Click an Image to read more</p>
                </div>
            </div>
            <div class="flex p-12 pb-32 h-[60%]">
                <div class="flex flex-col lg:flex-row p-12 gap-12 w-screen justify-between items-center w-max">
                    <div class="flex-1 h-auto relative bg-gray-800 rounded-xl border-4 border-gray-700">
                        <div class="p-6 pb-8">
                            <a href="./quattro">
                                <img src="{{ asset('images/quattro_7.png') }}" class="brightness-[0.6]">
                            </a>
                        </div>
                        <div class="w-full p-4 bg-gray-900 rounded-xl">
                            <h2 class="text-3xl">Audi Coupe Quattro</h2>
                            <p>A Blender recreation of Audi's greatest creation</p>
                        </div>
                    </div>

                    <div class="flex-1 h-auto relative bg-gray-800 rounded-xl border-4 border-gray-700">
                        <div class="p-6 pb-8">
                            <a href="./sterling">
                                <img src="{{ asset('images/sterling.png') }}" class="brightness-[0.7]">
                            </a>
                        </div>
                        <div class="w-full p-4 bg-gray-900 text-right rounded-xl">
                            <h2 class="text-3xl">SSC Sterling</h2>
                            <p>A Volkswagen-Based kit car</p>
                        </div>
                    </div>

                    <div class="flex-1 h-auto relative bg-gray-800 rounded-xl border-4 border-gray-700">
                        <div class="p-6 pb-8">
                            <a href="./spherenet">
                                <img src="{{ asset('images/spherenet.png') }}" class="px-8 brightness-[0.7]">
                            </a>
                        </div>
                        <div class="w-full p-4 bg-gray-900 rounded-xl">
                            <h2 class="text-3xl">Petram Sphere</h2>
                            <p>An economic assistant for an online nation simulator</p>
                        </div>
                    </div>

                    <div class="flex-1 h-auto relative bg-gray-800 rounded-xl border-4 border-gray-700">
                        <div class="p-6 pb-8">
                            <a href="./site">
                                <img src="{{ asset('images/site.png') }}" class="px-8 brightness-[0.6]">
                            </a>
                        </div>
                        <div class="w-full p-4 bg-gray-900 text-right rounded-xl">
                            <h2 class="text-3xl">Personal Website</h2>
                            <p>My Portfolio</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="h-auto flex flex-col items-center justify-center relative overflow-hidden">
            <div class="flex">
                <div class="text-center z-10">
                    <h2 class="animate-fade-in text-3xl md:text-5xl font-bold">Get In Touch</h2>
                    <p class="animate-fade-in mt-4 text-lg">Feel free to reach out for any inquiries</p>
                </div>
            </div>
        </section>
    </div>
@endsection
