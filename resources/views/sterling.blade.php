@extends('layouts.layout')

@section('content')
    <section class="h-auto w-full bg-gradient-to-b from-gray-800 to-gray-900 relative">
        <div class="container mx-auto px-6 md:px-40 py-12">
            <div class="text-center z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white animate-fade-in">SSC Sterling</h1>
                <p class="mt-4 text-lg animate-fade-in"></p>
            </div>

            <div class="w-[80%] pb-16 items-center justify-center mx-auto">
                <img src="{{ asset('images/sterling_header.jpg') }}" class="mx-[-3rem] my-[5rem] min-w-[calc(100%+6rem)] brightness-[1]">
            </div>
            
            <div class="p-8 mb-10 rounded-xl text-gray-100 bg-gray-900/30">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Overview</h2>
                <p class="text-lg leading-relaxed mb-8">
                    The Sterling Kit Car was made in the mid-1970's and designed to be the poor man's exotic car. This vehicle has taught me so many new skills and made me truly 
                    appreciate the work that goes into making a car. I have learned how to weld, repair rusted metal, stick to plans, and plan out a large project. 
                    It it built off of a 1957 VW Beetle floorpan that was dropped 4" courtesy of Sun West Engineering. 
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-3xl font-bold text-blue-400 mb-6">Skills Used</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>MIG Welding on Galvanized Steel</li>
                            <li>CAD for floorpan drop</li>
                            <li>Metal Repair</li>
                            <li>Fiberglass Repair</li>
                            <li>Project Management</li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-blue-400 mb-6">Specs</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Dimensions: 443cm x 179cm x 102cm</li>
                            <li>Weight: 1800 lbs</li>
                            <li>Materials: Steel, Fiberglass</li>
                            <li>Engine: 1500cc Aircooled VW</li>
                            <li>Transmission: 1968 Swing Axle VW</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 rounded-xl p-8">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Gallery</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 m-4 p-8 items-center bg-gray-900 border border-blue-500 rounded-xl">
                    <a href="/images/sterling_header.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/sterling_header.jpg') }}" class="my-auto">
                    </a>
                    <a href="/images/sterling_1.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/sterling_1.jpg') }}" class="my-auto">
                    </a>
                    <a href="/images/sterling_2.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/sterling_2.jpg') }}" class="my-auto">
                    </a>
                    <a href="/images/sterling_3.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/sterling_3.png') }}" class="my-auto">
                    </a>
                    <a href="/images/sterling_4.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/sterling_4.jpg') }}" class="my-auto">
                    </a>
                    <a href="/images/sterling_5.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/sterling_5.jpg') }}" class="my-auto">
                    </a>
                    <a href="/images/sterling_6.jpg" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/sterling_6.jpg') }}" class="my-auto">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection