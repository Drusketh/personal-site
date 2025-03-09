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
        <div class="flex">
            <div class="flex justify-between items-center">
                <div class="p-12 bg-gray-800">   
                    <img src="{{ asset('images/quattro.png') }}">
                    <div class="bg-[url('../../public/images/quattro.png')] bg-no-repeat bg-[auto_50%] bg-origin-content bg-left bg-contain bg-fixed opacity-30 w-full h-60"></div>
                    <h3>Project 1</h3>
                    <p>Project Description</p>
                </div>
                <div class="p-12">
                    <div class="bg-[url('../../public/images/quattro.png')] bg-no-repeat opacity-30 w-60 h-40"></div>
                    <h3>Project 2</h3>
                    <p>Project Description</p>
                </div>
                <div class="p-12">
                    <div class="bg-[url('../../public/images/quattro.png')] bg-no-repeat bg-center bg-fixed opacity-30 w-60 h-40"></div>
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
