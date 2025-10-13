@extends('layouts.layout')

@section('content')
    <section class="h-auto w-full bg-gradient-to-b from-gray-800 to-gray-900 relative">

        <!-- Item Details -->
        <div class="container mx-auto px-6 md:px-40 py-12">
            <div class="text-center z-10">
                <h1 class="text-5xl md:text-7xl font-bold text-white animate-fade-in">Personal Website</h1>
                <p class="mt-4 text-lg animate-fade-in"></p>
            </div>

            <div class="w-[80%] pb-8 items-center justify-center mx-auto">
                <img src="{{ asset('images/site.png') }}" class="mx-[-3rem] my-[5rem] min-w-[calc(100%+6rem)] brightness-[1]">
            </div>
            
            <h2 class="text-3xl font-semibold mb-6">Overview</h2>
            <p class="text-lg leading-relaxed mb-8">
                This website was made in the same way as SphereNet, using the 
                <a href="https://laravel.com/">Laravel</a> PHP framework and TailwindCSS for class based styling, but has a much more harmonious design and homogenous styling than
                 it given all that I learned while making SphereNet V1 and 2. I started designing this site in March of this year at the reccomendation of a friend in IT, 
                 and it has been a very rewarding project to work on, and has allowed me to learn many new things that Laravel is capable of.
            </p>

            <!-- Features Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 mb-12">
                <div>
                    <h3 class="text-2xl font-semibold mb-4">Skills Used</h3>
                    <ul class="list-disc list-inside space-y-2">
                        <li>Frameworking</li>
                        <li>TailwindCSS</li>
                        <li>PHP</li>
                        <li>HTML</li>
                        <li>Git repo management</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="mt-3">
                    <p>Total Lines of Code: {{ $stats['lines'] ?? 'N/A' }}</p>
                    <p>Number of Files: {{ $stats['files'] ?? 'N/A' }}</p>
                    <p>Number of Folders: {{ $stats['folders'] ?? 'N/A' }}</p>

                    @if(!empty($stats['updated_at']))
                        <p>Last Updated: {{ \Carbon\Carbon::parse($stats['updated_at'])->diffForHumans() }}</p>
                    @endif
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection