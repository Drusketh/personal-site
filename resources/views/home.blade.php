<!-- resources/views/home.blade.php -->
@extends('layouts.layout')

@section('content')
    <!-- About Section with Animated Gradient Background -->
    <section id="about" class="h-screen flex items-center justify-center animate-gradient-x relative overflow-hidden">
        <div class="text-center z-10">
            <h1 class="text-4xl md:text-6xl font-bold animate-fade-in bg-clip-text">Welcome to My Portfolio</h1>
            <p class="mt-4 text-lg animate-fade-in">I'm Nathan Pollaro, a junior engineering associate with a passion for learning, CAD, and engineering projects.</p>
        </div>
        <div class="absolute inset-0 bg-[url('../../public/images/background.jpg')] bg-no-repeat bg-center bg-cover bg-fixed opacity-20"></div>
    </section>

    <section id="portfolio" class="h-screen flex flex-col items-center justify-center bg-gray-900 relative overflow-hidden">
        <div class="flex">
            <div class="text-center z-10 py-48">
                <h2 class="text-3xl md:text-5xl font-bold animate-slide-up">My Portfolio</h2>
                <p class="mt-4 text-lg animate-slide-up">My Favorite Projects to date.</p>
            </div>
        </div>
        <div class="flex p-12 h-[60%]">
            <div class="flex sm:flex-col lg:flex-row p-12 gap-12 w-screen justify-between items-center w-max">
                <div class="flex-1 p-12 bg-gray-850 h-full relative">
                    <img src="{{ asset('images/quattro.png') }}" class="mx-[-3rem] my-[-5rem] min-w-[calc(100%+6rem)] brightness-50">
                    <div class="absolute inset-16 bg-[rgba(0,0,0,0.1)] h-min w-fit py-4 pl-3">
                        <h2 class="text-3xl">Audi Coupe Quattro</h2>
                        <p>A Blender recreation of Audi's greatest creation</p>
                    </div>
                </div>
                <div class="flex-1 p-12 bg-gray-800 h-full">
                    <h3>Project 2</h3>
                    <p>Project Description</p>
                </div>
                <div class="flex-1 p-12 bg-gray-800 h-full">

                    <h3>Project 3</h3>
                    <p>Project Description</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section with Gradient Animation and Scrolling Effect -->
    <section id="contact" class="h-screen flex items-center justify-center relative overflow-hidden">
        <div class="text-center z-10">
            <h2 class="text-3xl md:text-5xl font-bold animate-bounce">Get In Touch</h2>
            <p class="mt-4 text-lg animate-bounce">Feel free to reach out for any inquiries or collaborations.</p>
        </div>
    </section>
@endsection
