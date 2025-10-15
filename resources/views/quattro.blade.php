@extends('layouts.layout')

@section('content')
    <section class="h-auto w-full bg-gradient-to-b from-gray-800 to-gray-900 relative">
        <div class="container mx-auto px-6 md:px-40 py-12">
            <div class="text-center z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white animate-fade-in">Audi Sport Quattro</h1>
                <p class="mt-4 text-lg animate-fade-in"></p>
            </div>

            <div class="w-[80%] pb-16 items-center justify-center mx-auto">
                <img src="{{ asset('images/quattro_1.png') }}" class="mx-[-3rem] my-[-5rem] min-w-[calc(100%+6rem)] brightness-[1]">
            </div>
            
            <div class="p-8 mb-10 rounded-xl text-gray-100 bg-gray-900/30">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Overview</h2>
                <p class="text-lg leading-relaxed mb-8">
                    I have always loved cars, and after I discovered the Group B Rally existed, this became my favorite production car. It sports a 2.1L Turbo inline-5 engine. I decided to model this car 
                    as I felt it would be a good challenge for my blender abilities, given the straight boxy design with a deceptive amount of curves. My only future plan for this model is to 
                    use it to make a dimensionally accurate fiberglass kit for a car, after my Sterling is finished. 
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div>
                        <h3 class="text-2xl font-semibold text-blue-400 mb-6">Skills Used</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Blender Material editor, used to make light lenses and paint</li>
                            <li>Mesh Modelling</li>
                            <li>Modelling from images only</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 rounded-xl p-8">
                <h2 class="text-4xl font-bold text-blue-400 mb-10">Gallery</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-3 m-4 p-8 items-center bg-gray-900 border border-blue-500 rounded-xl">
                    <a href="/images/quattro.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/quattro.png') }}" class="my-auto">
                    </a>
                    <a href="/images/quattro_1.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/quattro_1.png') }}" class="my-auto">
                    </a>
                    <a href="/images/quattro_2.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/quattro_2.png') }}" class="my-auto">
                    </a>
                    <a href="/images/quattro_3.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/quattro_3.png') }}" class="my-auto">
                    </a>
                    <a href="/images/quattro_4.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/quattro_4.png') }}" class="my-auto">
                    </a>
                    <a href="/images/quattro_5.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/quattro_5.png') }}" class="my-auto">
                    </a>
                    <a href="/images/quattro_6.png" class="flex h-full bg-gray-950 border-2 border-solid border-black" target="_blank">
                        <img src="{{ asset('images/quattro_6.png') }}" class="my-auto">
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection