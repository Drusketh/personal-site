<!-- resources/views/home.blade.php -->
@extends('layouts.layout')

@section('content')
    <!-- About Section with Animated Gradient Background -->
    <section id="about" class="h-screen flex items-center justify-center animate-gradient-x relative overflow-hidden">
        <div class="text-center z-10">
            <h1 class="text-4xl md:text-6xl font-bold animate-fade-in bg-clip-text">Welcome</h1>
            <p class="mt-4 text-lg animate-fade-in">I'm Nathan Pollaro, a junior engineering associate with a passion for CAD and Engineering.</p>
        </div>
        <div class="absolute inset-0 bg-[url('../../public/images/background.jpg')] bg-no-repeat bg-center bg-cover bg-fixed opacity-20"></div>
    </section>

    <section id="portfolio" class="h-max flex flex-col items-center justify-center bg-gray-900 relative overflow-hidden">
        <div class="flex">
            <div class="text-center z-10 pt-24 lg:pb-24">
                <h2 class="text-3xl md:text-5xl font-bold animate-slide-up">My Portfolio</h2>
                <p class="mt-4 text-lg animate-slide-up">My Favorite Projects to date.</p>
            </div>
        </div>
        <div class="flex p-12 h-[60%]">
            <div class="flex flex-col lg:flex-row p-12 gap-12 w-screen justify-between items-center w-max">
                <div class="flex-1 p-12 bg-gray-850 h-full relative">
                    <a target="_blank" href="./quattro">
                        <img src="{{ asset('images/quattro.png') }}" class="mx-[-3rem] my-[-5rem] min-w-[calc(100%+6rem)] brightness-[0.6]">
                    </a>
                    <div class="absolute left-16 top-8 bg-[rgba(0,0,0,0.1)] h-min w-fit py-4 pl-3">
                        <h2 class="text-3xl">Audi Coupe Quattro</h2>
                        <p>A Blender recreation of Audi's greatest creation</p>
                    </div>
                </div>
                <div class="flex-1 p-12 bg-gray-850 h-full relative">
                    <a target="_blank" href="./sterling">
                        <img src="{{ asset('images/sterling.png') }}" class="mx-[-3rem] my-[-5rem] min-w-[calc(100%+6rem)] brightness-[0.7]">
                    </a>
                    <div class="absolute right-12 bottom-16 bg-[rgba(0,0,0,0.1)] h-min w-fit py-4 px-4 text-right">
                        <h2 class="text-3xl">SSC Sterling</h2>
                        <p>A Volkswagen-Based kit car</p>
                    </div>
                </div>
                <div class="flex-1 p-12 bg-gray-850 h-full relative">
                    <a target="_blank" href="./spherenet">
                        <img src="{{ asset('images/spherenet.png') }}" class="mx-[-3rem] my-[-0rem] min-w-[calc(100%+6rem)] brightness-[0.7]">
                    </a>
                    <div class="absolute right-12 top-16 bg-[rgba(0,0,0,0.1)] h-min w-fit py-4 px-4 text-right">
                        <h2 class="text-3xl">Petram Sphere</h2>
                        <p>An economic assistant for an online nation simulator</p>
                    </div>
                </div>
                <div class="flex-1 p-12 bg-gray-850 h-full relative">
                    <a target="_blank" href="./site">
                        <img src="{{ asset('images/site.png') }}" class="mx-[-3rem] min-w-[calc(100%+6rem)] brightness-[0.6]">
                    </a>
                    <div class="absolute left-16 top-8 bg-[rgba(0,0,0,0.1)] h-min w-fit py-4 pl-3">
                        <h2 class="text-3xl">Personal Website</h2>
                        <p>My Portfolio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section with Gradient Animation and Scrolling Effect -->
    <section id="contact" class="h-fit flex flex-col items-center justify-center relative overflow-hidden my-36">
        <div class="flex">
            <div class="text-center z-10">
                <h2 class="text-3xl md:text-5xl font-bold">Get In Touch</h2>
                <p class="mt-4 text-lg">Feel free to reach out for any inquiries</p>
            </div>
        </div>
    </section>
@endsection
