@extends('layouts.layout')

@section('content')
    <section class="h-auto w-full py-20 bg-gradient-to-b from-gray-800 to-gray-900 relative">
        <!-- Header Image -->
        <div class="text-center z-10">
            <h1 class="text-5xl md:text-7xl font-bold text-white animate-fade-in">Object Title</h1>
            <p class="mt-4 text-lg animate-fade-in"></p>
        </div>
        <div class="absolute w-full h-96 bg-cover bg-center bg-[url('../../public/images/4.png')]">

        <!-- Item Details -->
        <div class="container mx-auto px-6 md:px-20 py-12 text-white animate-slide-up">
            <h2 class="text-3xl font-semibold mb-6">Item Overview</h2>
            <p class="text-lg leading-relaxed mb-8">
                This section contains a detailed overview of the object being showcased. It explains its features, 
                design elements, and functionality. The content is meant to engage the viewer by providing context and
                in-depth information about the item.
            </p>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Key Features</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Feature 1: High-quality materials used</li>
                        <li>Feature 2: Innovative design and build</li>
                        <li>Feature 3: Enhanced functionality</li>
                        <li>Feature 4: Customizable options available</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Specifications</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Dimensions: 25cm x 35cm x 15cm</li>
                        <li>Weight: 1.5kg</li>
                        <li>Material: Aluminum, ABS plastic</li>
                        <li>Color: Matte black</li>
                    </ul>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center">
                <a href="#"
                   class="bg-blue-600 hover:bg-blue-500 text-white py-3 px-8 rounded-lg text-lg transition ease-in-out duration-300">
                    Learn More
                </a>
            </div>
        </div>
    </section>
@endsection