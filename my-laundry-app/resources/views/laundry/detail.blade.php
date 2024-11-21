<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $laundry['name'] }} - Cleany Malang</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-blue-50">
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="brand-logo flex-shrink-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Cleany Malang Logo" class="w-24">
                </div>
                <div class="flex space-x-20">
                    <a href="#about" class="{{ request()->is('#about') ? 'text-blue-600 font-bold' : 'text-gray-700' }}">About Laundry</a>
                    <a href="#services" class="{{ request()->is('#services') ? 'text-blue-600 font-bold' : 'text-gray-700' }}">Services</a>
                    <a href="#location" class="{{ request()->is('#location') ? 'text-blue-600 font-bold' : 'text-gray-700' }}">Location</a>
                    <a href="#gallery" class="{{ request()->is('#gallery') ? 'text-blue-600 font-bold' : 'text-gray-700' }}">Gallery</a>
                    <a href="#review" class="{{ request()->is('#review') ? 'text-blue-600 font-bold' : 'text-gray-700' }}">Review</a>
                </div>                
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-6 py-8">
        <a href="{{ route('home') }}" class="inline-flex items-center text-blue-600 mb-8">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back
        </a>

        <!-- Header Section -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
            <div class="flex items-start space-x-6">
                <img src="{{ asset('images/'. Str::slug($laundry['name']) .'/logo.png') }}" 
                     alt="{{ $laundry['name'] }}" 
                     class="w-32">
                <div>
                    <h1 class="text-2xl font-bold mb-2">{{ $laundry['name'] }}</h1>
                    <p class="text-gray-600 mb-4">{{ $laundry['description'] }}</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <h3 class="font-semibold mb-2">Jam Operasional</h3>
                            <p class="text-gray-600">{{ $laundry['operational_hours'] }}</p>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">Contact</h3>
                            <p class="text-gray-600">{{ $laundry['contact'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Section -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
            <h2 class="text-xl font-bold mb-4">Services</h2>
            <div class="grid grid-cols-3 gap-4">
                @foreach($laundry['services'] as $service => $price)
                <div class="bg-blue-50 rounded-lg p-4 flex flex-col items-center">
                    <!-- Tambahkan gambar logo service -->
                    <img src="{{ asset('images/'. Str::slug($laundry['name']) .'/services/' . Str::slug($service) . '.png') }}" 
                         alt="{{ $service }} Icon" 
                         class="w-16 h-16 mb-3">
                    <h3 class="font-semibold text-center">{{ $service }}</h3>
                    <p class="text-blue-600">{{ $price }}</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Location Section -->
        <section id="location" class="py-16">
            <div class="container mx-auto px-6 text-center">
                <!-- Tambahkan gambar logo lokasi -->
                <img src="{{ asset('images/'. Str::slug($laundry['name']) .'/location.png') }}" 
                    alt="Location Icon" 
                    class="w-24 h-24 mx-auto mb-4">
                
                <h2 class="text-3xl font-bold mb-4">Location</h2>
                <p class="text-gray-700 mb-4">
                    {{ $laundry['address'] }}
                </p>
                <div class="map-container" style="border: 0; margin: 0 auto; max-width: 100%; overflow: hidden;">
                    <!-- Gunakan data map_iframe dari controller -->
                    <iframe 
                        src="{{ $laundry['map_iframe'] }}" 
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </section>
        


        <!-- Gallery Section -->
        <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
            <h2 class="text-xl font-bold mb-4">Gallery</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                @foreach($laundry['gallery'] as $image)
                <div class="w-full h-48">
                    <img src="{{ asset($image) }}" alt="Gallery Image" class="w-full h-full object-cover rounded-lg">
                </div>
                @endforeach
            </div>            
        </div>

            <!-- Reviews Section -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <div class="flex items-center mb-4">
                    <!-- Tambahkan gambar logo review -->
                    <img src="{{ asset('images/'. Str::slug($laundry['name']) .'/apa kata mereka.png') }}" 
                        alt="Review Icon" 
                        class="w-16 h-16 mr-4">
                    <h2 class="text-xl font-bold">Reviews</h2>
                </div>
                <div class="space-y-4">
                    @foreach($laundry['reviews'] as $review)
                    <div class="border-b border-gray-200 pb-4">
                    <div class="flex items-center mb-2">
                        <div class="text-yellow-400">
                            @for($i = 0; $i < $review['rating']; $i++)
                                ★
                            @endfor
                        </div>
                    </div>
                    <p class="text-gray-600">{{ $review['text'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p class="mb-4">Made By Team of Cleany Malang</p>
            <p class="text-sm text-gray-600">
                Amylia Kusuma | Shavira Diva | Haris Eka | Frisqy Zistin
            </p>
            <p class="text-sm text-gray-600 mt-4">
                Need Collaboration? <a href="mailto:amyliaazizah@student.ub.ac.id" class="text-blue-600">Contact Us!</a>
            </p>
        </div>
    </footer>
</body>
</html>